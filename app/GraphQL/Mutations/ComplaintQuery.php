<?php

namespace App\GraphQL\Mutations;

use App\Models\Complaint;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class ComplaintQuery
{
    /**
     * Return a value for the field.
     *
     * @param null                                                $rootValue   Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param mixed[]                                             $args        The arguments that were passed into the field.
     * @param \Nuwave\Lighthouse\Support\Contracts\GraphQLContext $context     Arbitrary data that is shared between all fields of a single query.
     * @param \GraphQL\Type\Definition\ResolveInfo                $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     *
     * @return mixed
     */
    public function create(
        $rootValue,
        array $args,
        GraphQLContext $context,
        ResolveInfo $resolveInfo
    ) {
        $complaint = new Complaint();

        $complaint->user_id = Auth::id();
        $complaint->title = $args['title'];
        $complaint->description = $args['description'];
        $complaint->type = $args['type'];
        $complaint->state = $args['state'];
        $complaint->location = $args['location'];
        $complaint->tags = $args['tags'];
        $complaint->status = "pending";
        $complaint->anonymous = $args['anonymous'];
        $complaint->show_remarks = false;

        $complaint->save();

        return $complaint;
    }
}
