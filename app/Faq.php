<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Faq
 *
 * @property int $id
 * @property string|null $question
 * @property string|null $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Faq extends Model
{
    //
}
