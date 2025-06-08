// Library Routes
Route::apiResource('library-categories', LibraryCategoryController::class);
Route::apiResource('library-departments', LibraryDepartmentController::class);
Route::apiResource('library-subjects', LibrarySubjectController::class);
Route::apiResource('libraries', LibraryController::class);

// Additional routes for nested relationships
Route::get('library-departments/{department}/subjects', [LibraryDepartmentController::class, 'getSubjects']);
Route::get('library-subjects/{subject}/libraries', [LibrarySubjectController::class, 'getLibraries']);
Route::get('libraries/{library}/links', [LibraryController::class, 'getLibraryLinks']); 