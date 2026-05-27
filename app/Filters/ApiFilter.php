<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter
{
    // eq->Equal To, gt->Greater Than , lt-> Less Than
    protected $safeParams = [];

    // API uses different naming than the database
    protected $columnMap = [];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
        'like' => 'LIKE',
        'in' => 'IN',
    ];

    public function transform(Request $request)
    {

        // This will store your filters
        $eloQuery = [];

        // This ensures only allowed filters are processed (security + control)
        foreach ($this->safeParams as $param => $operators) {

            // Get value from request
            $query = $request->query($param);

            //Skip if parameter not in request
            if (! isset($query)) {
                continue;
            }

            //Map API name → DB column
            //If no mapping exists → use original name
            $column = $this->columnMap[$param] ?? $param;

            //Loop through allowed operators
            foreach ($operators as $operator) {

                //Check if operator exists in request
                if (isset($query[$operator])) {

                    //Build query condition
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
}
