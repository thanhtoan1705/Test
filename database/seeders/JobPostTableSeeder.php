<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_posts')->insert([
            [
                'title' => 'Software Engineer',
                'slug' => Str::slug('Software Engineer'),
                'job_category_id' => 1,
                'major_id' => 1,
                'employer_id' => 1,
                'experience_id' => 1,
                'job_type_id' => 1,
                'rank_id' => 1,
                'degrees_id' => 1,
                'salary_id' => 1,
                'start_date' => now(),
                'end_date' => now()->addMonths(1),
                'description' => 'We are looking for a Software Engineer...',
                'meta_title' => 'Software Engineer Job',
                'meta_description' => 'Exciting opportunity for a Software Engineer.',
                'meta_keyword' => 'software, engineer, job',
                'salary_min' => 50000,
                'salary_max' => 100000,
                'quantity' => 5,
                'status' => 1,
                'premium' => 0,
                'address' => '123 Main St, City, Country',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Quản lý khách sạn',
                'slug' => Str::slug('Quản lý khách sạn'),
                'job_category_id' => 1,
                'major_id' => 1,
                'employer_id' => 1,
                'experience_id' => 1,
                'job_type_id' => 1,
                'rank_id' => 1,
                'degrees_id' => 1,
                'salary_id' => 1,
                'start_date' => now(),
                'end_date' => now()->addMonths(2),
                'description' => 'Tìm kiếm quản lý khách sạn có kinh nghiệm quản lý hoạt động hàng ngày và điều hành khách sạn hiệu quả.',
                'meta_title' => 'Công việc Quản lý khách sạn',
                'meta_description' => 'Cơ hội hấp dẫn cho vị trí quản lý khách sạn.',
                'meta_keyword' => 'quản lý, khách sạn, việc làm',
                'salary_min' => 20000000,
                'salary_max' => 35000000,
                'quantity' => 2,
                'status' => 1,
                'premium' => 1,
                'address' => '123 Đường Trần Phú, TP. Đà Nẵng, Việt Nam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Nhân viên lễ tân khách sạn',
                'slug' => Str::slug('Nhân viên lễ tân khách sạn'),
                'job_category_id' => 1,
                'major_id' => 1,
                'employer_id' => 2,
                'experience_id' => 1,
                'job_type_id' => 1,
                'rank_id' => 1,
                'degrees_id' => 1,
                'salary_id' => 1,
                'start_date' => now(),
                'end_date' => now()->addMonths(2),
                'description' => 'Chúng tôi đang tìm kiếm nhân viên lễ tân khách sạn có khả năng giao tiếp tốt và xử lý công việc chuyên nghiệp.',
                'meta_title' => 'Việc làm Nhân viên lễ tân khách sạn',
                'meta_description' => 'Cơ hội làm việc tại khách sạn lớn với môi trường làm việc năng động.',
                'meta_keyword' => 'lễ tân, khách sạn, việc làm',
                'salary_min' => 7000000,
                'salary_max' => 10000000,
                'quantity' => 5,
                'status' => 1,
                'premium' => 0,
                'address' => '456 Đường Lý Thái Tổ, TP. Hà Nội, Việt Nam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Nhân viên phục vụ nhà hàng',
                'slug' => Str::slug('Nhân viên phục vụ nhà hàng'),
                'job_category_id' => 2,
                'major_id' => 1,
                'employer_id' => 3,
                'experience_id' => 1,
                'job_type_id' => 1,
                'rank_id' => 1,
                'degrees_id' => 1,
                'salary_id' => 1,
                'start_date' => now(),
                'end_date' => now()->addMonths(2),
                'description' => 'Cần tuyển nhân viên phục vụ nhà hàng với thái độ chuyên nghiệp và thân thiện.',
                'meta_title' => 'Việc làm Nhân viên phục vụ nhà hàng',
                'meta_description' => 'Môi trường làm việc năng động tại nhà hàng nổi tiếng.',
                'meta_keyword' => 'phục vụ, nhà hàng, việc làm',
                'salary_min' => 5000000,
                'salary_max' => 8000000,
                'quantity' => 10,
                'status' => 1,
                'premium' => 0,
                'address' => '789 Đường Lê Lợi, TP. Hồ Chí Minh, Việt Nam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Đầu bếp nhà hàng',
                'slug' => Str::slug('Đầu bếp nhà hàng'),
                'job_category_id' => 3,
                'major_id' => 1,
                'employer_id' => 1,
                'experience_id' => 2,
                'job_type_id' => 1,
                'rank_id' => 1,
                'degrees_id' => 1,
                'salary_id' => 1,
                'start_date' => now(),
                'end_date' => now()->addMonths(2),
                'description' => 'Tìm kiếm đầu bếp có tay nghề cao để phục vụ tại nhà hàng 5 sao.',
                'meta_title' => 'Việc làm Đầu bếp nhà hàng',
                'meta_description' => 'Cơ hội làm việc tại nhà hàng cao cấp với thu nhập hấp dẫn.',
                'meta_keyword' => 'đầu bếp, nhà hàng, việc làm',
                'salary_min' => 15000000,
                'salary_max' => 30000000,
                'quantity' => 2,
                'status' => 1,
                'premium' => 1,
                'address' => '123 Đường Nguyễn Huệ, TP. Hồ Chí Minh, Việt Nam',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}