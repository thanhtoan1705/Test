<?php

namespace App\Http\Controllers\Client\CV;

use App\Http\Controllers\Controller;
use App\Models\CvTemplate;
use App\Models\UserCvData;
use Illuminate\Http\Request;
use PDF;

class CvTemplateController extends Controller
{


    public function edit($templateId)
    {
        // Lấy mẫu CV theo templateId
        $template = CvTemplate::findOrFail($templateId);

        // Lấy các trường (fields) liên quan đến mẫu CV
        $fields = $template->fields;

        // Lấy dữ liệu đã lưu trước đó của người dùng từ UserCvData
        $userCvData = UserCvData::where('template_id', $templateId)
            ->get()
            ->pluck('fields_value', 'fields_id'); // fields_id => fields_value

        $fieldNames = [
            'name' => 1,                 // Họ và tên
            'email' => 2,                // Email
            'phone' => 3,                // Số điện thoại
            'position1' => 4,            // Chức danh (Công việc 1)
            'company1' => 5,             // Công ty (Công việc 1)
            'worktime1' => 6,            // Thời gian làm việc (Công việc 1)
            'position2' => 7,            // Chức danh (Công việc 2)
            'company2' => 8,             // Công ty (Công việc 2)
            'worktime2' => 9,            // Thời gian làm việc (Công việc 2)
            'education_name' => 10,      // Trường học
            'education_degree' => 11,    // Bằng cấp
            'education_duration' => 12,  // Thời gian học
            'skills' => 13,              // Kỹ năng
            'hobbies' => 14,             // Sở thích
            'summary' => 15              // Tóm tắt
        ];


        // Nội dung template CV
        $templateContent = $template->template_content;

        foreach ($fields as $field) {
            // Lấy tên field từ mapping
            $fieldName = $fieldNames[$field->id] ?? 'field_' . $field->id;

            // Lấy giá trị đã lưu từ $userCvData hoặc để trống nếu không có giá trị
            $value = $userCvData[$field->id] ?? '';

            // Tạo input field với giá trị đã lưu
            $inputField = '<input type="text" name="' . htmlspecialchars($fieldName) . '" value="' . htmlspecialchars($value) . '" />';

            // Thay thế placeholder bằng inputField trong templateContent
            if (strpos($templateContent, '{{ ' . $fieldName . ' }}') !== false) {
                $templateContent = str_replace('{{ ' . $fieldName . ' }}', $inputField, $templateContent);
            } else {
                \Log::info("Không tìm thấy placeholder: " . $fieldName);
            }
        }

        // Trả dữ liệu về view edit để hiển thị
        return view('client.cv.edit', compact('template', 'templateContent'));
    }



    public function update(Request $request, $templateId)
    {
        $template = CvTemplate::findOrFail($templateId);

        $fieldNames = [
            'name' => 1,                 // Họ và tên
            'email' => 2,                // Email
            'phone' => 3,                // Số điện thoại
            'position1' => 4,            // Chức danh (Công việc 1)
            'company1' => 5,             // Công ty (Công việc 1)
            'worktime1' => 6,            // Thời gian làm việc (Công việc 1)
            'position2' => 7,            // Chức danh (Công việc 2)
            'company2' => 8,             // Công ty (Công việc 2)
            'worktime2' => 9,            // Thời gian làm việc (Công việc 2)
            'education_name' => 10,      // Trường học
            'education_degree' => 11,    // Bằng cấp
            'education_duration' => 12,  // Thời gian học
            'skills' => 13,              // Kỹ năng
            'hobbies' => 14,             // Sở thích
            'summary' => 15              // Tóm tắt
        ];


        // Lấy dữ liệu từ request
        $fields = $request->only(array_keys($fieldNames));

        if (!empty($fields)) {
            foreach ($fields as $fieldName => $value) {
                $fieldId = $fieldNames[$fieldName];

                UserCvData::updateOrCreate(
                    ['template_id' => $templateId, 'fields_id' => $fieldId],
                    ['fields_value' => $value]
                );
            }

            return redirect()->route('client.cv.preview', ['cvTemplate' => $templateId])
                ->with('success', 'CV đã được cập nhật thành công.');
        } else {
            return back()->withErrors(['message' => 'Không có dữ liệu để cập nhật.']);
        }
    }

    public function download($templateId)
    {
        $template = CvTemplate::findOrFail($templateId);

        // Lấy dữ liệu người dùng đã nhập
        $userCvData = UserCvData::where('template_id', $templateId)->get()->pluck('fields_value', 'fields_id');

        // Thay thế các placeholder trong nội dung mẫu CV bằng dữ liệu người dùng
        $templateContent = $template->template_content;
        foreach ($template->fields as $field) {
            $value = $userCvData[$field->id] ?? '';
            $templateContent = str_replace('{{ ' . $field->fields_name . ' }}', $value, $templateContent);
        }

        // Tạo PDF từ nội dung mẫu CV
        $pdf = PDF::loadView('client.cv.cv-template-pdf', ['templateContent' => $templateContent]);

        return $pdf->download('client.cv.pdf');
    }

    public function preview($templateId)
    {
        $template = CvTemplate::findOrFail($templateId);
//        dd($template->template_content);

        // Lấy dữ liệu người dùng đã nhập
        $userCvData = UserCvData::where('template_id', $templateId)->get()->pluck('fields_value', 'fields_id');

        // Thay thế các placeholder trong nội dung mẫu CV bằng dữ liệu người dùng
        $templateContent = $template->template_content;

        foreach ($template->fields as $field) {
            $value = $userCvData[$field->id] ?? '';
            $templateContent = str_replace('{{ ' . $field->fields_name . ' }}', $value, $templateContent);
        }

        // Kiểm tra nội dung đã được thay thế

        // Trả về view với nội dung CV đã thay thế
        return view('client.cv.cv-template', ['templateContent' => $templateContent]);
    }

}
