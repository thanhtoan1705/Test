import React, { useEffect, useState } from 'react';
import axios from 'axios';

const CvTemplateEdit = ({ templateId }) => {
    const [template, setTemplate] = useState(null);
    const [fields, setFields] = useState({});

    useEffect(() => {
        axios.get(`/api/cv/template/${templateId}`)
            .then(response => {
                setTemplate(response.data);
                const initialFields = {};
                response.data.fields.forEach(field => {
                    initialFields[field.id] = ''; // Ban đầu rỗng
                });
                setFields(initialFields);
            })
            .catch(error => console.error('Error loading template:', error));
    }, [templateId]);

    const handleInputChange = (fieldId, value) => {
        setFields(prevFields => ({
            ...prevFields,
            [fieldId]: value
        }));
    };

    const handleSubmit = () => {
        axios.post(`/api/cv/template/${templateId}`, { fields })
            .then(response => {
                console.log('Data saved:', response.data);
            })
            .catch(error => console.error('Error saving data:', error));
    };

    return (
        <div>
            {template && (
                <div>
                    <h1>{template.template_name}</h1>
                    {template.fields.map(field => (
                        <div key={field.id}>
                            <label>{field.fields_name}</label>
                            <input
                                type={field.fields_type}
                                value={fields[field.id] || ''}
                                onChange={e => handleInputChange(field.id, e.target.value)}
                            />
                        </div>
                    ))}
                    <button onClick={handleSubmit}>Save</button>
                </div>
            )}
        </div>
    );
};

export default CvTemplateEdit;
