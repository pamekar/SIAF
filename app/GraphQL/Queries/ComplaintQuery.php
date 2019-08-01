<?php

namespace App\GraphQL\Queries;

use App\Models\Complaint;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use phpDocumentor\Reflection\Types\Integer;

class ComplaintQuery
{
    /**
     * Return a value for the field.
     *
     * @param null           $rootValue   Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param mixed[]        $args        The arguments that were passed into the field.
     * @param GraphQLContext $context     Arbitrary data that is shared between all fields of a single query.
     * @param ResolveInfo    $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     *
     * @return mixed
     *
     */
    public function show(
        $rootValue,
        array $args,
        GraphQLContext $context,
        ResolveInfo $resolveInfo
    ) {
        $id = $args['id'];
        $this->updateViewCount($id);

        $complaint = Complaint::find($id);

        return $complaint;
    }

    /**
     * Update the number of times a complaint has been viewed
     *
     * @param Integer $id
     */
    public function updateViewCount($id)
    {
        $viewKey = "complaint.$id.view_count";
        $viewUser = "complaint.$id.viewed." . Auth::id();
        if (!Cache::has($viewUser)) {
            // update view count
            Cache::has($viewKey) ? Cache::increment($viewKey)
                : Cache::forever($viewKey, 1);
            // store viewing user
            Cache::forever($viewUser, true);
        }

    }
}
