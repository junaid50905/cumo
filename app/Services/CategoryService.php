<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use App\Traits\CommonServiceElements;

class CategoryService
{
    use CommonServiceElements;

    private CategoryRepository $repo;

    public function __construct(CategoryRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getFormattedDataAsOptGroup(): array
    {
        $categories = $this->repo->getCoursesWithSpecifyingRelation();
        return $this->formattedCoursesAsOptGroup($categories);
    }

    private function formattedCoursesAsOptGroup($categories): array
    {
        foreach ($categories as $key => $category) {
            if (!isset($custom[$category->parent_category_id])) {
                $custom[$category->parent_category_id] = [
                    'id'       => $category->parent_category_id,
                    'name'    => $category->parentCategory->name,
                    'children' => [],
                ];
            }

            $childrenInfo = [
                'id'    => $category->id,
                'name' => $category->name,
            ];

            $custom[$category->parent_category_id]['children'][] = $childrenInfo;
        }

        return $custom ?? [];
    }
}
