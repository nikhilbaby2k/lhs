<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_subscriptions', function (Blueprint $table) {
            $table->increments('course_subscription_id');
            $table->string('subscription_name');
            $table->float('cost');
            $table->float('status')->comments = "0 - Inactive | 1 - Active" ;
        });

        Schema::create('course_features', function (Blueprint $table) {
            $table->increments('course_feature_id');
            $table->string('feature_name');
            $table->float('cost');
            $table->float('status')->comments = "0 - Inactive | 1 - Active" ;
        });

        Schema::create('course_subscription_details', function (Blueprint $table) {
            $table->increments('course_subscription_details');
            $table->integer('course_subscription_id');
            $table->integer('course_feature_id');
            $table->string('quantity')->comment = '-5: Available | -10: Unlimited | 0: UnAvailable | [> 1]: Actual Qty';
            $table->float('status')->comments = "0 - Inactive | 1 - Active" ;
        });

        $course_subscriptions = [

            [
                'course_subscription_id' => 1,
                'subscription_name' => 'Course 1',
                'cost' => '19',
                'status' => 1
            ],
            [
                'course_subscription_id' => 2,
                'subscription_name' => 'Course 2',
                'cost' => '39',
                'status' => 1
            ],
            [
                'course_subscription_id' => 3,
                'subscription_name' => 'Course 3',
                'cost' => '79',
                'status' => 1
            ]

        ];

        $course_features = [

            [
                'course_feature_id' => 1,
                'feature_name' => 'Subject 1',
                'cost' => 5.99,
                'status' => 1
            ],
            [
                'course_feature_id' => 2,
                'feature_name' => 'Subject 2',
                'cost' => 3.99,
                'status' => 1
            ],
            [
                'course_feature_id' => 3,
                'feature_name' => 'Subject 3',
                'cost' => 3.99,
                'status' => 1
            ],
            [
                'course_feature_id' => 4,
                'feature_name' => 'Subject 4',
                'cost' => 19.99,
                'status' => 1
            ],
        ];

        $course_subscription_details = [

            //End Products : course_feature_id = 1
            [
                'course_subscription_details' => 1,
                'course_subscription_id' => 1, //Starter
                'course_feature_id' => 1,
                'quantity' => -5,
                'status' => 1
            ],
            [
                'course_subscription_details' => 2,
                'course_subscription_id' => 2, //Community
                'course_feature_id' => 1,
                'quantity' => -5,
                'status' => 1
            ],
            [
                'course_subscription_details' => 3,
                'course_subscription_id' => 3, //Professional
                'course_feature_id' => 1,
                'quantity' => -5,
                'status' => 1
            ],

            //Standard Features: course_feature_id = 2
            [
                'course_subscription_details' => 4,
                'course_subscription_id' => 1, //Starter
                'course_feature_id' => 2,
                'quantity' => '-5',
                'status' => 1
            ],
            [
                'course_subscription_details' => 5,
                'course_subscription_id' => 2, //Community
                'course_feature_id' => 2,
                'quantity' => '-5',
                'status' => 1
            ],
            [
                'course_subscription_details' => 6,
                'course_subscription_id' => 3, //Professional
                'course_feature_id' => 2,
                'quantity' => '-5',
                'status' => 1
            ],

            //Free Issues: course_feature_id = 3
            [
                'course_subscription_details' => 7,
                'course_subscription_id' => 1, //Starter
                'course_feature_id' => 3,
                'quantity' => '0',
                'status' => 1
            ],
            [
                'course_subscription_details' => 8,
                'course_subscription_id' => 2, //Community
                'course_feature_id' => 3,
                'quantity' => '-5',
                'status' => 1
            ],
            [
                'course_subscription_details' => 9,
                'course_subscription_id' => 3, //Professional
                'course_feature_id' => 3,
                'quantity' => '-5',
                'status' => 1
            ],

            //Paid Issues: course_feature_id = 4
            [
                'course_subscription_details' => 10,
                'course_subscription_id' => 1, //Starter
                'course_feature_id' => 4,
                'quantity' => '0',
                'status' => 1
            ],
            [
                'course_subscription_details' => 11,
                'course_subscription_id' => 2, //Community
                'course_feature_id' => 4,
                'quantity' => '0',
                'status' => 1
            ],
            [
                'course_subscription_details' => 12,
                'course_subscription_id' => 3, //Professional
                'course_feature_id' => 4,
                'quantity' => '-5',
                'status' => 1
            ],

        ];

        DB::table('course_subscriptions')
                ->insert($course_subscriptions);

        DB::table('course_features')
                ->insert($course_features);

        DB::table('course_subscription_details')
            ->insert($course_subscription_details);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_subscriptions');
        Schema::dropIfExists('course_features');
        Schema::dropIfExists('course_subscription_details');
    }
}
