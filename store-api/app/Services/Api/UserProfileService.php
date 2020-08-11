<?php
namespace App\Services\Api;

use App\Models\Profile;
use App\Services\Service;
use Illuminate\Support\Facades\Log;


class UserProfileService extends Service
{
    private $profile;

    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function index($queries)
    {
        return $this->profile->whereUserId($this->user()->id)->first();
    }

    public function update($profile_id,$queries)
    {
        try {
            $userProfile = $this->profile->find($profile_id);
            $userProfile->update($queries);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return $userProfile;
    }

    public function destroy($queries)
    {
        try {
            $userProfile = $this->profile->find($queries);
            $userProfile->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return $queries;
    }
}
