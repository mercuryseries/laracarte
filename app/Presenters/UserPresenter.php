<?php

namespace Laracarte\Presenters;

use Illuminate\Support\Str;
use Laracarte\ContentParser\ContentParserFacade as ContentParser;
use Laracasts\Presenter\Presenter;
use Thomaswelton\LaravelGravatar\Facades\Gravatar;

class UserPresenter extends Presenter
{
    /**
     * Diplay the user's profile image
     *
     * @return string
     */
    public function profileImage($width = null)
    {
        if (isset($this->entity->avatar)) {

            if(filter_var($this->entity->avatar, FILTER_VALIDATE_URL)){
                return $this->entity->avatar;
            }

            if (!is_null($width)) {
                $width = "?w=" . $width;
            }

            return config('upload_paths.avatars') . $this->entity->avatar . $width;
        }

        return Gravatar::src($this->entity->email, $width);
    }

    /**
     * Display the user's biography
     *
     * @return string
     */
    public function biography()
    {
        return ContentParser::transform($this->entity->bio);
    }

    /**
     * Display the user's biography
     *
     * @return string
     */
    public function website()
    {
        $website = $this->entity->website;

        if( ! Str::startsWith($website, ['http://', 'https://'])){
            $website = 'http://' . $website;
        }

        return $website;
    }
}
