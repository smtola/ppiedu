import React from "react";
import { Head } from "@inertiajs/react";
import LibraryBrowser from "@/Components/Library/LibraryBrowser";

const Browser = () => {
    return (
        <>
            <Head title="Library" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6">
                            <h1 className="text-2xl font-semibold mb-6">
                                Library Resources
                            </h1>
                            <LibraryBrowser />
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default Browser;
