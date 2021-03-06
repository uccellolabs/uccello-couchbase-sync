<?php

return [
    'database_url' => env('COUCHBASE_DATABASE_URL'),
    'secret' => env('COUCHBASE_SECRET'),
    'columns' => [
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at',
    ],
    'force_delete' => env('COUCHBASE_FORCE_DELETE_FOR_RECORDS_DELETED', false),
];
