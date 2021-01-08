<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $FirstName
 * @property string $LastName
 * @property string $Email
 * @property string $Age
 * @property string $Gender
 * @property string $Phone
 * @property string $City
 * @property string $Platform
 * @property string $UserID
 * @property string $content
 * @property string $LikedGames
 */

class feedback extends Model
{


    protected $table = 'feedback';
    protected $fillable = ['$FirstName', 'LastName','Email', 'Age', 'Gender', 'Phone', 'City', 'Platform', 'UserID', 'content', 'LikedGames'];


}
