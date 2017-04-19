<?php
namespace App\Api\V1\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * UserNotificationMessage Model class
 * @author Thieu Le Quang <quangthieuagu@gmail.com>
 */
class UserNotificationMessage extends Eloquent
{
    protected $table = 'user_notification_message';
    protected $fillable = ['id','function','title','message','params','send_to','user_activity_id','seen','read','created_at', 'updated_at'];
}

