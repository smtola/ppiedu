import React, { useState, useEffect } from "react";
import axios from "axios";

const LibraryBrowser = () => {
    const [categories, setCategories] = useState([]);
    const [selectedCategory, setSelectedCategory] = useState(null);
    const [selectedDepartment, setSelectedDepartment] = useState(null);
    const [selectedSubject, setSelectedSubject] = useState(null);
    const [libraries, setLibraries] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        fetchCategories();
    }, []);

    const fetchCategories = async () => {
        try {
            const response = await axios.get("/api/library-categories");
            setCategories(response.data);
            setLoading(false);
        } catch (error) {
            console.error("Error fetching categories:", error);
            setLoading(false);
        }
    };

    const handleCategoryClick = async (category) => {
        setSelectedCategory(category);
        setSelectedDepartment(null);
        setSelectedSubject(null);
        setLibraries([]);
    };

    const handleDepartmentClick = async (department) => {
        setSelectedDepartment(department);
        setSelectedSubject(null);
        setLibraries([]);
        try {
            const response = await axios.get(
                `/api/library-departments/${department.id}/subjects`
            );
            setSelectedDepartment({ ...department, subjects: response.data });
        } catch (error) {
            console.error("Error fetching subjects:", error);
        }
    };

    const handleSubjectClick = async (subject) => {
        setSelectedSubject(subject);
        try {
            const response = await axios.get(
                `/api/library-subjects/${subject.id}/libraries`
            );
            setLibraries(response.data);
        } catch (error) {
            console.error("Error fetching libraries:", error);
        }
    };

    if (loading) {
        return (
            <div className="flex justify-center items-center h-64">
                Loading...
            </div>
        );
    }

    return (
        <div className="container mx-auto p-4">
            <div className="grid grid-cols-1 md:grid-cols-4 gap-4">
                {/* Categories */}
                <div className="bg-white rounded-lg shadow p-4">
                    <h2 className="text-xl font-bold mb-4">Categories</h2>
                    <div className="space-y-2">
                        {categories.map((category) => (
                            <button
                                key={category.id}
                                onClick={() => handleCategoryClick(category)}
                                className={`w-full text-left p-2 rounded ${
                                    selectedCategory?.id === category.id
                                        ? "bg-blue-100"
                                        : "hover:bg-gray-100"
                                }`}
                            >
                                {category.name}
                            </button>
                        ))}
                    </div>
                </div>

                {/* Departments */}
                {selectedCategory && (
                    <div className="bg-white rounded-lg shadow p-4">
                        <h2 className="text-xl font-bold mb-4">Departments</h2>
                        <div className="space-y-2">
                            {selectedCategory.departments.map((department) => (
                                <button
                                    key={department.id}
                                    onClick={() =>
                                        handleDepartmentClick(department)
                                    }
                                    className={`w-full text-left p-2 rounded ${
                                        selectedDepartment?.id === department.id
                                            ? "bg-blue-100"
                                            : "hover:bg-gray-100"
                                    }`}
                                >
                                    {department.name}
                                </button>
                            ))}
                        </div>
                    </div>
                )}

                {/* Subjects */}
                {selectedDepartment && (
                    <div className="bg-white rounded-lg shadow p-4">
                        <h2 className="text-xl font-bold mb-4">Subjects</h2>
                        <div className="space-y-2">
                            {selectedDepartment.subjects?.map((subject) => (
                                <button
                                    key={subject.id}
                                    onClick={() => handleSubjectClick(subject)}
                                    className={`w-full text-left p-2 rounded ${
                                        selectedSubject?.id === subject.id
                                            ? "bg-blue-100"
                                            : "hover:bg-gray-100"
                                    }`}
                                >
                                    {subject.name}
                                </button>
                            ))}
                        </div>
                    </div>
                )}

                {/* Libraries */}
                {selectedSubject && (
                    <div className="bg-white rounded-lg shadow p-4">
                        <h2 className="text-xl font-bold mb-4">Resources</h2>
                        <div className="space-y-4">
                            {libraries.map((library) => (
                                <div
                                    key={library.id}
                                    className="border rounded p-4 hover:shadow-md transition-shadow"
                                >
                                    <h3 className="font-semibold">
                                        {library.name}
                                    </h3>
                                    {library.link && (
                                        <a
                                            href={library.link}
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            className="text-blue-600 hover:underline mt-2 block"
                                        >
                                            View Resource
                                        </a>
                                    )}
                                    {library.attachment && (
                                        <a
                                            href={library.attachment}
                                            className="text-blue-600 hover:underline mt-2 block"
                                        >
                                            Download Attachment
                                        </a>
                                    )}
                                </div>
                            ))}
                        </div>
                    </div>
                )}
            </div>
        </div>
    );
};

export default LibraryBrowser;
