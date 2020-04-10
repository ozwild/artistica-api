<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\About
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $about
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereUpdatedAt($value)
 * @property int $aboutable_id
 * @property string $aboutable_type
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $aboutable
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereAboutableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereAboutableType($value)
 */
	class About extends \Eloquent {}
}

namespace App{
/**
 * App\Account
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $administrators
 * @property int $type_id
 * @property int $views
 * @property int $active
 * @property int $published
 * @property-read boolean|null $will_travel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Listing[] $listings
 * @property-read \App\Location $location
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $managers
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Price[] $prices
 * @property-read \App\Rating $rating
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Review[] $reviews
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\PerformanceSample[] $samples
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Score[] $scores
 * @property-read \App\TechnicalData $technicalData
 * @property-read \App\AccountType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereViews($value)
 * @property-read double $average_score
 * @property string $tag_line
 * @property-read \App\About $about
 * @property-read int|null $listings_count
 * @property-read int|null $managers_count
 * @property-read int|null $prices_count
 * @property-read int|null $reviews_count
 * @property-read int|null $samples_count
 * @property-read int|null $scores_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereTagLine($value)
 */
	class Account extends \Eloquent {}
}

namespace App{
/**
 * App\AccountListing
 *
 * @property int $user_id
 * @property int $account_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing whereUserId($value)
 * @mixin \Eloquent
 * @property int $id
 * @property int $listing_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing whereListingId($value)
 */
	class AccountListing extends \Eloquent {}
}

namespace App{
/**
 * App\AccountManager
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager query()
 * @mixin \Eloquent
 * @property int $user_id
 * @property int $account_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager whereUserId($value)
 */
	class AccountManager extends \Eloquent {}
}

namespace App{
/**
 * App\AccountType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Account[] $accounts
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read int|null $accounts_count
 */
	class AccountType extends \Eloquent {}
}

namespace App{
/**
 * App\Category
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $category
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereUpdatedAt($value)
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereName($value)
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Gallery
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\GalleryResource[] $resources
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereUpdatedAt($value)
 * @property string $name
 * @property-read int|null $resources_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereName($value)
 */
	class Gallery extends \Eloquent {}
}

namespace App{
/**
 * App\GalleryItem
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $gallery_id
 * @property int $type_id
 * @property string|null $title
 * @property string|null $description
 * @property string $uri
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Gallery $gallery
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereGalleryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereUri($value)
 */
	class GalleryResource extends \Eloquent {}
}

namespace App{
/**
 * App\Listing
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $listing
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Account[] $accounts
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereListing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereUpdatedAt($value)
 * @property string $name
 * @property string $description
 * @property-read \App\About $about
 * @property-read int|null $accounts_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereName($value)
 */
	class Listing extends \Eloquent {}
}

namespace App{
/**
 * App\Location
 *
 * @property int $account_id
 * @property string $description Written location reference, address and whatnot
 * @property string $coordinates Coordinates, geo location reference
 * @property int $work_radius in Kilometers
 * @property int|null $travel_radius in Kilometers
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @property-read bool $will_travel
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereCoordinates($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereTravelRadius($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereWorkRadius($value)
 * @mixin \Eloquent
 */
	class Location extends \Eloquent {}
}

namespace App{
/**
 * App\Repertoire
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $account_id
 * @property int $type_id
 * @property string $uri
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereUri($value)
 */
	class PerformanceSample extends \Eloquent {}
}

namespace App{
/**
 * App\Price
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $account_id
 * @property string $description
 * @property float $price
 * @property int $currency_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereUpdatedAt($value)
 */
	class Price extends \Eloquent {}
}

namespace App{
/**
 * App\Rating
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating query()
 * @mixin \Eloquent
 * @property int $account_id
 * @property int $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereUpdatedAt($value)
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereId($value)
 */
	class Rating extends \Eloquent {}
}

namespace App{
/**
 * App\Review
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $reviewer_id
 * @property int $account_id
 * @property string $review
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @property-read \App\User $reviewer
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereReviewerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereUpdatedAt($value)
 */
	class Review extends \Eloquent {}
}

namespace App{
/**
 * App\Score
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $reviewer_id
 * @property int $account_id
 * @property int $score
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @property-read \App\User $reviewer
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereReviewerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereUpdatedAt($value)
 */
	class Score extends \Eloquent {}
}

namespace App{
/**
 * App\Tag
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $tag
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereUpdatedAt($value)
 */
	class Tag extends \Eloquent {}
}

namespace App{
/**
 * App\TechnicalData
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData query()
 * @mixin \Eloquent
 * @property int $account_id
 * @property string $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData whereUpdatedAt($value)
 */
	class TechnicalData extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\About $about
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Account[] $accounts
 * @property-read int|null $accounts_count
 * @property-read mixed $manages_accounts
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Score[] $scores
 * @property-read int|null $scores_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User managersOnly()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User withScores()
 */
	class User extends \Eloquent {}
}

