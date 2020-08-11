<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace App\Models {

    use Illuminate\Database\Eloquent\Model as Model1;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\App\Models\_ModelCollection;
    use LaravelIdea\Helper\App\Models\_ModelQueryBuilder;
    use LaravelIdea\Helper\App\Models\_OrderCollection;
    use LaravelIdea\Helper\App\Models\_OrderItemCollection;
    use LaravelIdea\Helper\App\Models\_OrderItemQueryBuilder;
    use LaravelIdea\Helper\App\Models\_OrderQueryBuilder;
    use LaravelIdea\Helper\App\Models\_OssDataCollection;
    use LaravelIdea\Helper\App\Models\_OssDataQueryBuilder;
    use LaravelIdea\Helper\App\Models\_PasswordQuestionCollection;
    use LaravelIdea\Helper\App\Models\_PasswordQuestionQueryBuilder;
    use LaravelIdea\Helper\App\Models\_ProductCategoryCollection;
    use LaravelIdea\Helper\App\Models\_ProductCategoryQueryBuilder;
    use LaravelIdea\Helper\App\Models\_ProductCategoryStoryCollection;
    use LaravelIdea\Helper\App\Models\_ProductCategoryStoryQueryBuilder;
    use LaravelIdea\Helper\App\Models\_ProductCollection;
    use LaravelIdea\Helper\App\Models\_ProductQueryBuilder;
    use LaravelIdea\Helper\App\Models\_ProductRecommendCollection;
    use LaravelIdea\Helper\App\Models\_ProductRecommendQueryBuilder;
    use LaravelIdea\Helper\App\Models\_ProductSkuCollection;
    use LaravelIdea\Helper\App\Models\_ProductSkuQueryBuilder;
    use LaravelIdea\Helper\App\Models\_ProfileCollection;
    use LaravelIdea\Helper\App\Models\_ProfileQueryBuilder;
    use LaravelIdea\Helper\App\Models\_ShopCartItemCollection;
    use LaravelIdea\Helper\App\Models\_ShopCartItemQueryBuilder;
    use LaravelIdea\Helper\App\Models\_UserAddressCollection;
    use LaravelIdea\Helper\App\Models\_UserAddressQueryBuilder;
    use LaravelIdea\Helper\App\Models\_UserCollection;
    use LaravelIdea\Helper\App\Models\_UserQueryBuilder;
    use LaravelIdea\Helper\App\Models\_WebSeoCollection;
    use LaravelIdea\Helper\App\Models\_WebSeoQueryBuilder;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;
    use Spatie\Permission\Contracts\Permission;
    use Spatie\Permission\Contracts\Role;

    /**
     * @method _ModelQueryBuilder newModelQuery()
     * @method _ModelQueryBuilder newQuery()
     * @method static _ModelQueryBuilder query()
     * @method static _ModelCollection|Model[] all()
     * @mixin _ModelQueryBuilder
     */
    class Model extends Model1
    {
    }

    /**
     * @property int $id
     * @property string $no
     * @property int $user_id
     * @property int|null $address_id
     * @property float $total_amount
     * @property string|null $remark
     * @property Carbon|null $paid_at
     * @property string|null $payment_method
     * @property string|null $payment_no
     * @property int $status
     * @property int $refund_status
     * @property string|null $refund_no
     * @property bool $closed
     * @property bool $reviewed
     * @property int $ship_status
     * @property string|null $ship_data
     * @property string|null $extra
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property UserAddress $address
     * @method BelongsTo|_UserAddressQueryBuilder address()
     * @property _OrderItemCollection|OrderItem[] $items
     * @method HasMany|_OrderItemQueryBuilder items()
     * @method _OrderQueryBuilder newModelQuery()
     * @method _OrderQueryBuilder newQuery()
     * @method static _OrderQueryBuilder query()
     * @method static _OrderCollection|Order[] all()
     * @mixin _OrderQueryBuilder
     */
    class Order extends Model1
    {
    }

    /**
     * @property int $id
     * @property int $order_id
     * @property int $product_id
     * @property int|null $product_sku_id
     * @property int $amount
     * @property float $price
     * @property int|null $rating
     * @property string|null $review
     * @property Carbon|null $reviewed_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Order $order
     * @method BelongsTo|_OrderQueryBuilder order()
     * @property Product $product
     * @method BelongsTo|_ProductQueryBuilder product()
     * @property ProductSku $productSku
     * @method BelongsTo|_ProductSkuQueryBuilder productSku()
     * @method _OrderItemQueryBuilder newModelQuery()
     * @method _OrderItemQueryBuilder newQuery()
     * @method static _OrderItemQueryBuilder query()
     * @method static _OrderItemCollection|OrderItem[] all()
     * @mixin _OrderItemQueryBuilder
     */
    class OrderItem extends Model1
    {
    }

    /**
     * @property int $id
     * @property string|null $disk
     * @property string|null $path
     * @property int $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _OssDataQueryBuilder newModelQuery()
     * @method _OssDataQueryBuilder newQuery()
     * @method static _OssDataQueryBuilder query()
     * @method static _OssDataCollection|OssData[] all()
     * @mixin _OssDataQueryBuilder
     */
    class OssData extends Model1
    {
    }

    /**
     * @property int $id
     * @property string $question
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _PasswordQuestionQueryBuilder newModelQuery()
     * @method _PasswordQuestionQueryBuilder newQuery()
     * @method static _PasswordQuestionQueryBuilder query()
     * @method static _PasswordQuestionCollection|PasswordQuestion[] all()
     * @mixin _PasswordQuestionQueryBuilder
     */
    class PasswordQuestion extends Model1
    {
    }

    /**
     * @property int $id
     * @property int|null $product_category_id
     * @property string $product_name
     * @property string $product_name_en
     * @property string|null $thumbnail
     * @property string|null $slug
     * @property string|null $short_description
     * @property string|null $short_description_en
     * @property float $price
     * @property float $sale_price
     * @property int $stock
     * @property string|null $spec
     * @property string|null $seo_title
     * @property string|null $seo_keyword
     * @property string|null $seo_description
     * @property string|null $benefit
     * @property string|null $benefit_en
     * @property string|null $tech_description
     * @property string|null $tech_description_en
     * @property string|null $description
     * @property string|null $description_en
     * @property string|null $usage
     * @property string|null $usage_en
     * @property string $main_image
     * @property string $main_image_2
     * @property string|null $benefit_image
     * @property string|null $product_video
     * @property int $status
     * @property float $rating
     * @property int $sold_count
     * @property int $review_count
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property ProductCategory $productCategory
     * @method BelongsTo|_ProductCategoryQueryBuilder productCategory()
     * @property _ProductSkuCollection|ProductSku[] $skus
     * @method HasMany|_ProductSkuQueryBuilder skus()
     * @method _ProductQueryBuilder newModelQuery()
     * @method _ProductQueryBuilder newQuery()
     * @method static _ProductQueryBuilder query()
     * @method static _ProductCollection|Product[] all()
     * @mixin _ProductQueryBuilder
     */
    class Product extends Model1
    {
    }

    /**
     * @property int $id
     * @property string|null $slug
     * @property string|null $title
     * @property string|null $title_en
     * @property string|null $describe
     * @property string|null $describe_en
     * @property string|null $banner
     * @property string|null $description
     * @property string|null $description_en
     * @property string|null $img
     * @property int|null $parent_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _ProductCategoryStoryCollection|ProductCategoryStory[] $productCategoryStories
     * @method HasMany|_ProductCategoryStoryQueryBuilder productCategoryStories()
     * @method _ProductCategoryQueryBuilder newModelQuery()
     * @method _ProductCategoryQueryBuilder newQuery()
     * @method static _ProductCategoryQueryBuilder query()
     * @method static _ProductCategoryCollection|ProductCategory[] all()
     * @mixin _ProductCategoryQueryBuilder
     */
    class ProductCategory extends Model1
    {
    }

    /**
     * @property int $id
     * @property string|null $title
     * @property string|null $title_en
     * @property string|null $description
     * @property string|null $description_en
     * @property string|null $banner
     * @property string|null $product_category_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property ProductCategory $productCategory
     * @method BelongsTo|_ProductCategoryQueryBuilder productCategory()
     * @method _ProductCategoryStoryQueryBuilder newModelQuery()
     * @method _ProductCategoryStoryQueryBuilder newQuery()
     * @method static _ProductCategoryStoryQueryBuilder query()
     * @method static _ProductCategoryStoryCollection|ProductCategoryStory[] all()
     * @mixin _ProductCategoryStoryQueryBuilder
     */
    class ProductCategoryStory extends Model1
    {
    }

    /**
     * @property int $id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _ProductRecommendQueryBuilder newModelQuery()
     * @method _ProductRecommendQueryBuilder newQuery()
     * @method static _ProductRecommendQueryBuilder query()
     * @method static _ProductRecommendCollection|ProductRecommend[] all()
     * @mixin _ProductRecommendQueryBuilder
     */
    class ProductRecommend extends Model1
    {
    }

    /**
     * @property int $id
     * @property string $title
     * @property string $description
     * @property float $price
     * @property int $stock
     * @property int $product_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Product $product
     * @method BelongsTo|_ProductQueryBuilder product()
     * @method _ProductSkuQueryBuilder newModelQuery()
     * @method _ProductSkuQueryBuilder newQuery()
     * @method static _ProductSkuQueryBuilder query()
     * @method static _ProductSkuCollection|ProductSku[] all()
     * @mixin _ProductSkuQueryBuilder
     */
    class ProductSku extends Model1
    {
    }

    /**
     * @property int $id
     * @property int|null $user_id
     * @property string|null $real_name
     * @property int $sex
     * @property Carbon|null $birthday
     * @property string|null $age
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _ProfileQueryBuilder newModelQuery()
     * @method _ProfileQueryBuilder newQuery()
     * @method static _ProfileQueryBuilder query()
     * @method static _ProfileCollection|Profile[] all()
     * @mixin _ProfileQueryBuilder
     */
    class Profile extends Model1
    {
    }

    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $product_sku_id
     * @property int|null $product_id
     * @property int $amount
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Product $product
     * @method BelongsTo|_ProductQueryBuilder product()
     * @property ProductSku $productSku
     * @method BelongsTo|_ProductSkuQueryBuilder productSku()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _ShopCartItemQueryBuilder newModelQuery()
     * @method _ShopCartItemQueryBuilder newQuery()
     * @method static _ShopCartItemQueryBuilder query()
     * @method static _ShopCartItemCollection|ShopCartItem[] all()
     * @mixin _ShopCartItemQueryBuilder
     */
    class ShopCartItem extends Model1
    {
    }

    /**
     * @property int $id
     * @property string $name
     * @property string $username
     * @property string|null $email
     * @property Carbon|null $email_verified_at
     * @property int $password_question_id
     * @property string $password_answer
     * @property string|null $phone
     * @property string $password
     * @property string|null $remember_token
     * @property int $status
     * @property string|null $avatar
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read $hash_id
     * @property _UserAddressCollection|UserAddress[] $addresses
     * @method HasMany|_UserAddressQueryBuilder addresses()
     * @property _DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @method MorphToMany|_DatabaseNotificationQueryBuilder notifications()
     * @property Profile $profile
     * @method HasOne|_ProfileQueryBuilder profile()
     * @property _ShopCartItemCollection|ShopCartItem[] $shopCartItems
     * @method HasMany|_ShopCartItemQueryBuilder shopCartItems()
     * @method _UserQueryBuilder newModelQuery()
     * @method _UserQueryBuilder newQuery()
     * @method static _UserQueryBuilder query()
     * @method static _UserCollection|User[] all()
     * @method _UserQueryBuilder active()
     * @method _UserQueryBuilder permission(array|Collection|Permission|string $permissions)
     * @method _UserQueryBuilder role(array|Collection|Role|string $roles, string $guard = null)
     * @mixin _UserQueryBuilder
     */
    class User extends Model1
    {
    }

    /**
     * @property int $id
     * @property int $user_id
     * @property string $province
     * @property string $city
     * @property string $district
     * @property string $address
     * @property int $zip
     * @property string $contact_name
     * @property string $contact_phone
     * @property Carbon|null $last_used_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read string $full_address
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _UserAddressQueryBuilder newModelQuery()
     * @method _UserAddressQueryBuilder newQuery()
     * @method static _UserAddressQueryBuilder query()
     * @method static _UserAddressCollection|UserAddress[] all()
     * @mixin _UserAddressQueryBuilder
     */
    class UserAddress extends Model1
    {
    }

    /**
     * @property int $id
     * @property string|null $name
     * @property string|null $content
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _WebSeoQueryBuilder newModelQuery()
     * @method _WebSeoQueryBuilder newQuery()
     * @method static _WebSeoQueryBuilder query()
     * @method static _WebSeoCollection|WebSeo[] all()
     * @mixin _WebSeoQueryBuilder
     */
    class WebSeo extends Model1
    {
    }
}

namespace Illuminate\Notifications {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;

    /**
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method _DatabaseNotificationQueryBuilder newModelQuery()
     * @method _DatabaseNotificationQueryBuilder newQuery()
     * @method static _DatabaseNotificationQueryBuilder query()
     * @method static _DatabaseNotificationCollection|DatabaseNotification[] all()
     * @mixin _DatabaseNotificationQueryBuilder
     */
    class DatabaseNotification extends Model
    {
    }
}

namespace LaravelIdea\Helper {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Support\Collection;

    /**
     * @see \Illuminate\Database\Query\Builder::select
     * @method $this select(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::paginate
     * @method $this paginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @see \Illuminate\Database\Query\Builder::addSelect
     * @method $this addSelect(array $column)
     * @see \Illuminate\Database\Concerns\BuildsQueries::when
     * @method $this when($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereIn
     * @method $this whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereExists
     * @method $this orWhereExists(\Closure $callback, bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereJsonLength
     * @method $this whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereNotIn
     * @method $this orWhereNotIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::selectRaw
     * @method $this selectRaw(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::truncate
     * @method $this truncate()
     * @see \Illuminate\Database\Query\Builder::lock
     * @method $this lock(bool|string $value = true)
     * @see \Illuminate\Database\Query\Builder::insertOrIgnore
     * @method $this insertOrIgnore(array $values)
     * @see \Illuminate\Database\Query\Builder::join
     * @method $this join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::unionAll
     * @method $this unionAll(\Closure|\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::whereMonth
     * @method $this whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::having
     * @method $this having(string $column, null|string $operator = null, null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereNull
     * @method $this orWhereNull(string $column)
     * @see \Illuminate\Database\Query\Builder::whereNested
     * @method $this whereNested(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::joinWhere
     * @method $this joinWhere(string $table, \Closure|string $first, string $operator, string $second, string $type = 'inner')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonContains
     * @method $this orWhereJsonContains(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::raw
     * @method $this raw($value)
     * @see \Illuminate\Database\Query\Builder::orderBy
     * @method $this orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::orWhereRowValues
     * @method $this orWhereRowValues(array $columns, string $operator, array $values)
     * @see \Illuminate\Database\Concerns\BuildsQueries::each
     * @method $this each(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::setBindings
     * @method $this setBindings(array $bindings, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonLength
     * @method $this orWhereJsonLength(string $column, $operator, $value = null)
     * @see \Illuminate\Database\Query\Builder::whereRowValues
     * @method $this whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::useWritePdo
     * @method $this useWritePdo()
     * @see \Illuminate\Database\Query\Builder::orWhereNotExists
     * @method $this orWhereNotExists(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::orWhereIn
     * @method $this orWhereIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::newQuery
     * @method $this newQuery()
     * @see \Illuminate\Database\Query\Builder::rightJoinSub
     * @method $this rightJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::crossJoin
     * @method $this crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::orderByDesc
     * @method $this orderByDesc(string $column)
     * @see \Illuminate\Database\Query\Builder::orWhereNotNull
     * @method $this orWhereNotNull(string $column)
     * @see \Illuminate\Database\Query\Builder::average
     * @method $this average(string $column)
     * @see \Illuminate\Database\Query\Builder::existsOr
     * @method $this existsOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::getProcessor
     * @method $this getProcessor()
     * @see \Illuminate\Database\Query\Builder::increment
     * @method $this increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::havingRaw
     * @method $this havingRaw(string $sql, array $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::skip
     * @method $this skip(int $value)
     * @see \Illuminate\Database\Query\Builder::sum
     * @method $this sum(string $column)
     * @see \Illuminate\Database\Query\Builder::leftJoinWhere
     * @method $this leftJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::doesntExistOr
     * @method $this doesntExistOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::orWhereColumn
     * @method $this orWhereColumn(array|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::getRawBindings
     * @method $this getRawBindings()
     * @see \Illuminate\Database\Query\Builder::min
     * @method $this min(string $column)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method $this hasMacro(string $name)
     * @see \Illuminate\Database\Query\Builder::whereNotExists
     * @method $this whereNotExists(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereIntegerInRaw
     * @method $this whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Concerns\BuildsQueries::unless
     * @method $this unless($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereDay
     * @method $this whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::get
     * @method $this get(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNotIn
     * @method $this whereNotIn(string $column, $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereTime
     * @method $this whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::where
     * @method $this where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::latest
     * @method $this latest(string $column = 'created_at')
     * @see \Illuminate\Database\Query\Builder::forNestedWhere
     * @method $this forNestedWhere()
     * @see \Illuminate\Database\Query\Builder::insertUsing
     * @method $this insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @see \Illuminate\Database\Query\Builder::max
     * @method $this max(string $column)
     * @see \Illuminate\Database\Query\Builder::rightJoinWhere
     * @method $this rightJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::whereExists
     * @method $this whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::inRandomOrder
     * @method $this inRandomOrder(string $seed = '')
     * @see \Illuminate\Database\Query\Builder::havingBetween
     * @method $this havingBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::union
     * @method $this union(\Closure|\Illuminate\Database\Query\Builder $query, bool $all = false)
     * @see \Illuminate\Database\Query\Builder::groupBy
     * @method $this groupBy(array $groups)
     * @see \Illuminate\Database\Query\Builder::orWhereYear
     * @method $this orWhereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orWhereDay
     * @method $this orWhereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkById
     * @method $this chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::joinSub
     * @method $this joinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::whereDate
     * @method $this whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntContain
     * @method $this whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::oldest
     * @method $this oldest(string $column = 'created_at')
     * @see \Illuminate\Database\Query\Builder::decrement
     * @method $this decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::forPageAfterId
     * @method $this forPageAfterId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::forPage
     * @method $this forPage(int $page, int $perPage = 15)
     * @see \Illuminate\Database\Query\Builder::exists
     * @method $this exists()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method $this macroCall(string $method, array $parameters)
     * @see \Illuminate\Database\Query\Builder::selectSub
     * @method $this selectSub(\Closure|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::pluck
     * @method $this pluck(string $column, null|string $key = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::first
     * @method $this first(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::dd
     * @method $this dd()
     * @see \Illuminate\Database\Query\Builder::whereColumn
     * @method $this whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::prepareValueAndOperator
     * @method $this prepareValueAndOperator(string $value, string $operator, bool $useDefault = false)
     * @see \Illuminate\Database\Query\Builder::whereNull
     * @method $this whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::numericAggregate
     * @method $this numericAggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNotBetween
     * @method $this whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getConnection
     * @method $this getConnection()
     * @see \Illuminate\Database\Query\Builder::mergeBindings
     * @method $this mergeBindings(\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::whereIntegerNotInRaw
     * @method $this whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRaw
     * @method $this orWhereRaw(string $sql, $bindings = [])
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContain
     * @method $this orWhereJsonDoesntContain(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinSub
     * @method $this leftJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::find
     * @method $this find(int|string $id, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereJsonContains
     * @method $this whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::limit
     * @method $this limit(int $value)
     * @see \Illuminate\Database\Query\Builder::from
     * @method $this from(\Closure|\Illuminate\Database\Query\Builder|string $table, null|string $as = null)
     * @see \Illuminate\Database\Query\Builder::insertGetId
     * @method $this insertGetId(array $values, null|string $sequence = null)
     * @see \Illuminate\Database\Query\Builder::whereBetween
     * @method $this whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::mergeWheres
     * @method $this mergeWheres(array $wheres, array $bindings)
     * @see \Illuminate\Database\Query\Builder::sharedLock
     * @method $this sharedLock()
     * @see \Illuminate\Database\Query\Builder::orderByRaw
     * @method $this orderByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Concerns\BuildsQueries::tap
     * @method $this tap(callable $callback)
     * @see \Illuminate\Database\Query\Builder::doesntExist
     * @method $this doesntExist()
     * @see \Illuminate\Database\Query\Builder::simplePaginate
     * @method $this simplePaginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @see \Illuminate\Database\Query\Builder::offset
     * @method $this offset(int $value)
     * @see \Illuminate\Database\Query\Builder::orWhereMonth
     * @method $this orWhereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::whereNotNull
     * @method $this whereNotNull(array|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::count
     * @method $this count(string $columns = '*')
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetween
     * @method $this orWhereNotBetween(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::fromRaw
     * @method $this fromRaw(string $expression, $bindings = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method $this mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Query\Builder::take
     * @method $this take(int $value)
     * @see \Illuminate\Database\Query\Builder::updateOrInsert
     * @method $this updateOrInsert(array $attributes, array $values = [])
     * @see \Illuminate\Database\Query\Builder::addNestedWhereQuery
     * @method $this addNestedWhereQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::cursor
     * @method $this cursor()
     * @see \Illuminate\Database\Query\Builder::cloneWithout
     * @method $this cloneWithout(array $properties)
     * @see \Illuminate\Database\Query\Builder::fromSub
     * @method $this fromSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::rightJoin
     * @method $this rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::leftJoin
     * @method $this leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::update
     * @method $this update(array $values)
     * @see \Illuminate\Database\Query\Builder::insert
     * @method $this insert(array $values)
     * @see \Illuminate\Database\Query\Builder::distinct
     * @method $this distinct()
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunk
     * @method $this chunk(int $count, callable $callback)
     * @see \Illuminate\Database\Query\Builder::whereYear
     * @method $this whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getCountForPagination
     * @method $this getCountForPagination(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::delete
     * @method $this delete($id = null)
     * @see \Illuminate\Database\Query\Builder::groupByRaw
     * @method $this groupByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::aggregate
     * @method $this aggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::orWhereDate
     * @method $this orWhereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::avg
     * @method $this avg(string $column)
     * @see \Illuminate\Database\Query\Builder::addBinding
     * @method $this addBinding($value, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::getGrammar
     * @method $this getGrammar()
     * @see \Illuminate\Database\Query\Builder::lockForUpdate
     * @method $this lockForUpdate()
     * @see \Illuminate\Database\Concerns\BuildsQueries::eachById
     * @method $this eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::implode
     * @method $this implode(string $column, string $glue = '')
     * @see \Illuminate\Database\Query\Builder::dump
     * @method $this dump()
     * @see \Illuminate\Database\Query\Builder::value
     * @method $this value(string $column)
     * @see \Illuminate\Database\Query\Builder::cloneWithoutBindings
     * @method $this cloneWithoutBindings(array $except)
     * @see \Illuminate\Database\Query\Builder::addWhereExistsQuery
     * @method $this addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method $this macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Query\Builder::whereRaw
     * @method $this whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::toSql
     * @method $this toSql()
     * @see \Illuminate\Database\Query\Builder::orHaving
     * @method $this orHaving(string $column, null|string $operator = null, null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orHavingRaw
     * @method $this orHavingRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::getBindings
     * @method $this getBindings()
     * @see \Illuminate\Database\Query\Builder::forPageBeforeId
     * @method $this forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::orWhereTime
     * @method $this orWhereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orWhereBetween
     * @method $this orWhereBetween(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::orWhere
     * @method $this orWhere(array|\Closure|string $column, $operator = null, $value = null)
     * @see \Illuminate\Database\Query\Builder::dynamicWhere
     * @method $this dynamicWhere(string $method, array $parameters)
     */
    class _BaseBuilder extends Builder
    {
    }

    /**
     * @method Collection mapSpread(callable $callback)
     * @method Collection mapWithKeys(callable $callback)
     * @method Collection zip(array $items)
     * @method Collection partition(callable|string $key, $operator = null, $value = null)
     * @method Collection mapInto(string $class)
     * @method Collection mapToGroups(callable $callback)
     * @method Collection map(callable $callback)
     * @method Collection groupBy(array|callable|string $groupBy, bool $preserveKeys = false)
     * @method Collection pluck(array|string $value, null|string $key = null)
     * @method Collection pad(int $size, $value)
     * @method Collection split(int $numberOfGroups)
     * @method Collection combine($values)
     * @method Collection countBy(callable|null $callback = null)
     * @method Collection mapToDictionary(callable $callback)
     * @method Collection keys()
     * @method Collection transform(callable $callback)
     * @method Collection flatMap(callable $callback)
     * @method Collection collapse()
     */
    class _BaseCollection extends Collection
    {
    }
}

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Model;
    use App\Models\Order;
    use App\Models\OrderItem;
    use App\Models\OssData;
    use App\Models\PasswordQuestion;
    use App\Models\Product;
    use App\Models\ProductCategory;
    use App\Models\ProductCategoryStory;
    use App\Models\ProductRecommend;
    use App\Models\ProductSku;
    use App\Models\Profile;
    use App\Models\ShopCartItem;
    use App\Models\User;
    use App\Models\UserAddress;
    use App\Models\WebSeo;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission;
    use Spatie\Permission\Contracts\Role;

    /**
     * @method Model shift()
     * @method Model pop()
     * @method Model get($key, $default = null)
     * @method Model pull($key, $default = null)
     * @method Model first(callable $callback = null, $default = null)
     * @method Model firstWhere(string $key, $operator = null, $value = null)
     * @method Model[] all()
     * @method Model last(callable $callback = null, $default = null)
     */
    class _ModelCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Model[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Model create(array $attributes = [])
     * @method _ModelCollection|Model[] cursor()
     * @method Model|null find($id, array $columns = ['*'])
     * @method _ModelCollection|Model[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Model findOrFail($id, array $columns = ['*'])
     * @method _ModelCollection|Model[] findOrNew($id, array $columns = ['*'])
     * @method Model first(array|string $columns = ['*'])
     * @method Model firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Model firstOrCreate(array $attributes, array $values = [])
     * @method Model firstOrFail(array $columns = ['*'])
     * @method Model firstOrNew(array $attributes, array $values = [])
     * @method Model firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Model forceCreate(array $attributes)
     * @method _ModelCollection|Model[] fromQuery(string $query, array $bindings = [])
     * @method _ModelCollection|Model[] get(array|string $columns = ['*'])
     * @method Model getModel()
     * @method Model[] getModels(array|string $columns = ['*'])
     * @method _ModelCollection|Model[] hydrate(array $items)
     * @method Model make(array $attributes = [])
     * @method Model newModelInstance(array $attributes = [])
     * @method Model updateOrCreate(array $attributes, array $values = [])
     */
    class _ModelQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Order shift()
     * @method Order pop()
     * @method Order get($key, $default = null)
     * @method Order pull($key, $default = null)
     * @method Order first(callable $callback = null, $default = null)
     * @method Order firstWhere(string $key, $operator = null, $value = null)
     * @method Order[] all()
     * @method Order last(callable $callback = null, $default = null)
     */
    class _OrderCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Order[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method OrderItem shift()
     * @method OrderItem pop()
     * @method OrderItem get($key, $default = null)
     * @method OrderItem pull($key, $default = null)
     * @method OrderItem first(callable $callback = null, $default = null)
     * @method OrderItem firstWhere(string $key, $operator = null, $value = null)
     * @method OrderItem[] all()
     * @method OrderItem last(callable $callback = null, $default = null)
     */
    class _OrderItemCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return OrderItem[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _OrderItemQueryBuilder whereId($value)
     * @method _OrderItemQueryBuilder whereOrderId($value)
     * @method _OrderItemQueryBuilder whereProductId($value)
     * @method _OrderItemQueryBuilder whereProductSkuId($value)
     * @method _OrderItemQueryBuilder whereAmount($value)
     * @method _OrderItemQueryBuilder wherePrice($value)
     * @method _OrderItemQueryBuilder whereRating($value)
     * @method _OrderItemQueryBuilder whereReview($value)
     * @method _OrderItemQueryBuilder whereReviewedAt($value)
     * @method _OrderItemQueryBuilder whereCreatedAt($value)
     * @method _OrderItemQueryBuilder whereUpdatedAt($value)
     * @method OrderItem create(array $attributes = [])
     * @method _OrderItemCollection|OrderItem[] cursor()
     * @method OrderItem|null find($id, array $columns = ['*'])
     * @method _OrderItemCollection|OrderItem[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method OrderItem findOrFail($id, array $columns = ['*'])
     * @method _OrderItemCollection|OrderItem[] findOrNew($id, array $columns = ['*'])
     * @method OrderItem first(array|string $columns = ['*'])
     * @method OrderItem firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method OrderItem firstOrCreate(array $attributes, array $values = [])
     * @method OrderItem firstOrFail(array $columns = ['*'])
     * @method OrderItem firstOrNew(array $attributes, array $values = [])
     * @method OrderItem firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderItem forceCreate(array $attributes)
     * @method _OrderItemCollection|OrderItem[] fromQuery(string $query, array $bindings = [])
     * @method _OrderItemCollection|OrderItem[] get(array|string $columns = ['*'])
     * @method OrderItem getModel()
     * @method OrderItem[] getModels(array|string $columns = ['*'])
     * @method _OrderItemCollection|OrderItem[] hydrate(array $items)
     * @method OrderItem make(array $attributes = [])
     * @method OrderItem newModelInstance(array $attributes = [])
     * @method OrderItem updateOrCreate(array $attributes, array $values = [])
     */
    class _OrderItemQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method _OrderQueryBuilder whereId($value)
     * @method _OrderQueryBuilder whereNo($value)
     * @method _OrderQueryBuilder whereUserId($value)
     * @method _OrderQueryBuilder whereAddressId($value)
     * @method _OrderQueryBuilder whereTotalAmount($value)
     * @method _OrderQueryBuilder whereRemark($value)
     * @method _OrderQueryBuilder wherePaidAt($value)
     * @method _OrderQueryBuilder wherePaymentMethod($value)
     * @method _OrderQueryBuilder wherePaymentNo($value)
     * @method _OrderQueryBuilder whereStatus($value)
     * @method _OrderQueryBuilder whereRefundStatus($value)
     * @method _OrderQueryBuilder whereRefundNo($value)
     * @method _OrderQueryBuilder whereClosed($value)
     * @method _OrderQueryBuilder whereReviewed($value)
     * @method _OrderQueryBuilder whereShipStatus($value)
     * @method _OrderQueryBuilder whereShipData($value)
     * @method _OrderQueryBuilder whereExtra($value)
     * @method _OrderQueryBuilder whereCreatedAt($value)
     * @method _OrderQueryBuilder whereUpdatedAt($value)
     * @method Order create(array $attributes = [])
     * @method _OrderCollection|Order[] cursor()
     * @method Order|null find($id, array $columns = ['*'])
     * @method _OrderCollection|Order[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Order findOrFail($id, array $columns = ['*'])
     * @method _OrderCollection|Order[] findOrNew($id, array $columns = ['*'])
     * @method Order first(array|string $columns = ['*'])
     * @method Order firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Order firstOrCreate(array $attributes, array $values = [])
     * @method Order firstOrFail(array $columns = ['*'])
     * @method Order firstOrNew(array $attributes, array $values = [])
     * @method Order firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Order forceCreate(array $attributes)
     * @method _OrderCollection|Order[] fromQuery(string $query, array $bindings = [])
     * @method _OrderCollection|Order[] get(array|string $columns = ['*'])
     * @method Order getModel()
     * @method Order[] getModels(array|string $columns = ['*'])
     * @method _OrderCollection|Order[] hydrate(array $items)
     * @method Order make(array $attributes = [])
     * @method Order newModelInstance(array $attributes = [])
     * @method Order updateOrCreate(array $attributes, array $values = [])
     */
    class _OrderQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method OssData shift()
     * @method OssData pop()
     * @method OssData get($key, $default = null)
     * @method OssData pull($key, $default = null)
     * @method OssData first(callable $callback = null, $default = null)
     * @method OssData firstWhere(string $key, $operator = null, $value = null)
     * @method OssData[] all()
     * @method OssData last(callable $callback = null, $default = null)
     */
    class _OssDataCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return OssData[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _OssDataQueryBuilder whereId($value)
     * @method _OssDataQueryBuilder whereDisk($value)
     * @method _OssDataQueryBuilder wherePath($value)
     * @method _OssDataQueryBuilder whereStatus($value)
     * @method _OssDataQueryBuilder whereCreatedAt($value)
     * @method _OssDataQueryBuilder whereUpdatedAt($value)
     * @method OssData create(array $attributes = [])
     * @method _OssDataCollection|OssData[] cursor()
     * @method OssData|null find($id, array $columns = ['*'])
     * @method _OssDataCollection|OssData[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method OssData findOrFail($id, array $columns = ['*'])
     * @method _OssDataCollection|OssData[] findOrNew($id, array $columns = ['*'])
     * @method OssData first(array|string $columns = ['*'])
     * @method OssData firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method OssData firstOrCreate(array $attributes, array $values = [])
     * @method OssData firstOrFail(array $columns = ['*'])
     * @method OssData firstOrNew(array $attributes, array $values = [])
     * @method OssData firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OssData forceCreate(array $attributes)
     * @method _OssDataCollection|OssData[] fromQuery(string $query, array $bindings = [])
     * @method _OssDataCollection|OssData[] get(array|string $columns = ['*'])
     * @method OssData getModel()
     * @method OssData[] getModels(array|string $columns = ['*'])
     * @method _OssDataCollection|OssData[] hydrate(array $items)
     * @method OssData make(array $attributes = [])
     * @method OssData newModelInstance(array $attributes = [])
     * @method OssData updateOrCreate(array $attributes, array $values = [])
     */
    class _OssDataQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method PasswordQuestion shift()
     * @method PasswordQuestion pop()
     * @method PasswordQuestion get($key, $default = null)
     * @method PasswordQuestion pull($key, $default = null)
     * @method PasswordQuestion first(callable $callback = null, $default = null)
     * @method PasswordQuestion firstWhere(string $key, $operator = null, $value = null)
     * @method PasswordQuestion[] all()
     * @method PasswordQuestion last(callable $callback = null, $default = null)
     */
    class _PasswordQuestionCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return PasswordQuestion[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _PasswordQuestionQueryBuilder whereId($value)
     * @method _PasswordQuestionQueryBuilder whereQuestion($value)
     * @method _PasswordQuestionQueryBuilder whereCreatedAt($value)
     * @method _PasswordQuestionQueryBuilder whereUpdatedAt($value)
     * @method PasswordQuestion create(array $attributes = [])
     * @method _PasswordQuestionCollection|PasswordQuestion[] cursor()
     * @method PasswordQuestion|null find($id, array $columns = ['*'])
     * @method _PasswordQuestionCollection|PasswordQuestion[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PasswordQuestion findOrFail($id, array $columns = ['*'])
     * @method _PasswordQuestionCollection|PasswordQuestion[] findOrNew($id, array $columns = ['*'])
     * @method PasswordQuestion first(array|string $columns = ['*'])
     * @method PasswordQuestion firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PasswordQuestion firstOrCreate(array $attributes, array $values = [])
     * @method PasswordQuestion firstOrFail(array $columns = ['*'])
     * @method PasswordQuestion firstOrNew(array $attributes, array $values = [])
     * @method PasswordQuestion firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PasswordQuestion forceCreate(array $attributes)
     * @method _PasswordQuestionCollection|PasswordQuestion[] fromQuery(string $query, array $bindings = [])
     * @method _PasswordQuestionCollection|PasswordQuestion[] get(array|string $columns = ['*'])
     * @method PasswordQuestion getModel()
     * @method PasswordQuestion[] getModels(array|string $columns = ['*'])
     * @method _PasswordQuestionCollection|PasswordQuestion[] hydrate(array $items)
     * @method PasswordQuestion make(array $attributes = [])
     * @method PasswordQuestion newModelInstance(array $attributes = [])
     * @method PasswordQuestion updateOrCreate(array $attributes, array $values = [])
     */
    class _PasswordQuestionQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method ProductCategory shift()
     * @method ProductCategory pop()
     * @method ProductCategory get($key, $default = null)
     * @method ProductCategory pull($key, $default = null)
     * @method ProductCategory first(callable $callback = null, $default = null)
     * @method ProductCategory firstWhere(string $key, $operator = null, $value = null)
     * @method ProductCategory[] all()
     * @method ProductCategory last(callable $callback = null, $default = null)
     */
    class _ProductCategoryCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return ProductCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _ProductCategoryQueryBuilder whereId($value)
     * @method _ProductCategoryQueryBuilder whereSlug($value)
     * @method _ProductCategoryQueryBuilder whereTitle($value)
     * @method _ProductCategoryQueryBuilder whereTitleEn($value)
     * @method _ProductCategoryQueryBuilder whereDescribe($value)
     * @method _ProductCategoryQueryBuilder whereDescribeEn($value)
     * @method _ProductCategoryQueryBuilder whereBanner($value)
     * @method _ProductCategoryQueryBuilder whereDescription($value)
     * @method _ProductCategoryQueryBuilder whereDescriptionEn($value)
     * @method _ProductCategoryQueryBuilder whereImg($value)
     * @method _ProductCategoryQueryBuilder whereParentId($value)
     * @method _ProductCategoryQueryBuilder whereCreatedAt($value)
     * @method _ProductCategoryQueryBuilder whereUpdatedAt($value)
     * @method ProductCategory create(array $attributes = [])
     * @method _ProductCategoryCollection|ProductCategory[] cursor()
     * @method ProductCategory|null find($id, array $columns = ['*'])
     * @method _ProductCategoryCollection|ProductCategory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductCategory findOrFail($id, array $columns = ['*'])
     * @method _ProductCategoryCollection|ProductCategory[] findOrNew($id, array $columns = ['*'])
     * @method ProductCategory first(array|string $columns = ['*'])
     * @method ProductCategory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductCategory firstOrCreate(array $attributes, array $values = [])
     * @method ProductCategory firstOrFail(array $columns = ['*'])
     * @method ProductCategory firstOrNew(array $attributes, array $values = [])
     * @method ProductCategory firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCategory forceCreate(array $attributes)
     * @method _ProductCategoryCollection|ProductCategory[] fromQuery(string $query, array $bindings = [])
     * @method _ProductCategoryCollection|ProductCategory[] get(array|string $columns = ['*'])
     * @method ProductCategory getModel()
     * @method ProductCategory[] getModels(array|string $columns = ['*'])
     * @method _ProductCategoryCollection|ProductCategory[] hydrate(array $items)
     * @method ProductCategory make(array $attributes = [])
     * @method ProductCategory newModelInstance(array $attributes = [])
     * @method ProductCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _ProductCategoryQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method ProductCategoryStory shift()
     * @method ProductCategoryStory pop()
     * @method ProductCategoryStory get($key, $default = null)
     * @method ProductCategoryStory pull($key, $default = null)
     * @method ProductCategoryStory first(callable $callback = null, $default = null)
     * @method ProductCategoryStory firstWhere(string $key, $operator = null, $value = null)
     * @method ProductCategoryStory[] all()
     * @method ProductCategoryStory last(callable $callback = null, $default = null)
     */
    class _ProductCategoryStoryCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return ProductCategoryStory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _ProductCategoryStoryQueryBuilder whereId($value)
     * @method _ProductCategoryStoryQueryBuilder whereTitle($value)
     * @method _ProductCategoryStoryQueryBuilder whereTitleEn($value)
     * @method _ProductCategoryStoryQueryBuilder whereDescription($value)
     * @method _ProductCategoryStoryQueryBuilder whereDescriptionEn($value)
     * @method _ProductCategoryStoryQueryBuilder whereBanner($value)
     * @method _ProductCategoryStoryQueryBuilder whereProductCategoryId($value)
     * @method _ProductCategoryStoryQueryBuilder whereCreatedAt($value)
     * @method _ProductCategoryStoryQueryBuilder whereUpdatedAt($value)
     * @method ProductCategoryStory create(array $attributes = [])
     * @method _ProductCategoryStoryCollection|ProductCategoryStory[] cursor()
     * @method ProductCategoryStory|null find($id, array $columns = ['*'])
     * @method _ProductCategoryStoryCollection|ProductCategoryStory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductCategoryStory findOrFail($id, array $columns = ['*'])
     * @method _ProductCategoryStoryCollection|ProductCategoryStory[] findOrNew($id, array $columns = ['*'])
     * @method ProductCategoryStory first(array|string $columns = ['*'])
     * @method ProductCategoryStory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductCategoryStory firstOrCreate(array $attributes, array $values = [])
     * @method ProductCategoryStory firstOrFail(array $columns = ['*'])
     * @method ProductCategoryStory firstOrNew(array $attributes, array $values = [])
     * @method ProductCategoryStory firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCategoryStory forceCreate(array $attributes)
     * @method _ProductCategoryStoryCollection|ProductCategoryStory[] fromQuery(string $query, array $bindings = [])
     * @method _ProductCategoryStoryCollection|ProductCategoryStory[] get(array|string $columns = ['*'])
     * @method ProductCategoryStory getModel()
     * @method ProductCategoryStory[] getModels(array|string $columns = ['*'])
     * @method _ProductCategoryStoryCollection|ProductCategoryStory[] hydrate(array $items)
     * @method ProductCategoryStory make(array $attributes = [])
     * @method ProductCategoryStory newModelInstance(array $attributes = [])
     * @method ProductCategoryStory updateOrCreate(array $attributes, array $values = [])
     */
    class _ProductCategoryStoryQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Product shift()
     * @method Product pop()
     * @method Product get($key, $default = null)
     * @method Product pull($key, $default = null)
     * @method Product first(callable $callback = null, $default = null)
     * @method Product firstWhere(string $key, $operator = null, $value = null)
     * @method Product[] all()
     * @method Product last(callable $callback = null, $default = null)
     */
    class _ProductCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Product[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _ProductQueryBuilder whereId($value)
     * @method _ProductQueryBuilder whereProductCategoryId($value)
     * @method _ProductQueryBuilder whereProductName($value)
     * @method _ProductQueryBuilder whereProductNameEn($value)
     * @method _ProductQueryBuilder whereThumbnail($value)
     * @method _ProductQueryBuilder whereSlug($value)
     * @method _ProductQueryBuilder whereShortDescription($value)
     * @method _ProductQueryBuilder whereShortDescriptionEn($value)
     * @method _ProductQueryBuilder wherePrice($value)
     * @method _ProductQueryBuilder whereSalePrice($value)
     * @method _ProductQueryBuilder whereStock($value)
     * @method _ProductQueryBuilder whereSpec($value)
     * @method _ProductQueryBuilder whereSeoTitle($value)
     * @method _ProductQueryBuilder whereSeoKeyword($value)
     * @method _ProductQueryBuilder whereSeoDescription($value)
     * @method _ProductQueryBuilder whereBenefit($value)
     * @method _ProductQueryBuilder whereBenefitEn($value)
     * @method _ProductQueryBuilder whereTechDescription($value)
     * @method _ProductQueryBuilder whereTechDescriptionEn($value)
     * @method _ProductQueryBuilder whereDescription($value)
     * @method _ProductQueryBuilder whereDescriptionEn($value)
     * @method _ProductQueryBuilder whereUsage($value)
     * @method _ProductQueryBuilder whereUsageEn($value)
     * @method _ProductQueryBuilder whereMainImage($value)
     * @method _ProductQueryBuilder whereMainImage2($value)
     * @method _ProductQueryBuilder whereBenefitImage($value)
     * @method _ProductQueryBuilder whereProductVideo($value)
     * @method _ProductQueryBuilder whereStatus($value)
     * @method _ProductQueryBuilder whereRating($value)
     * @method _ProductQueryBuilder whereSoldCount($value)
     * @method _ProductQueryBuilder whereReviewCount($value)
     * @method _ProductQueryBuilder whereCreatedAt($value)
     * @method _ProductQueryBuilder whereUpdatedAt($value)
     * @method Product create(array $attributes = [])
     * @method _ProductCollection|Product[] cursor()
     * @method Product|null find($id, array $columns = ['*'])
     * @method _ProductCollection|Product[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Product findOrFail($id, array $columns = ['*'])
     * @method _ProductCollection|Product[] findOrNew($id, array $columns = ['*'])
     * @method Product first(array|string $columns = ['*'])
     * @method Product firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Product firstOrCreate(array $attributes, array $values = [])
     * @method Product firstOrFail(array $columns = ['*'])
     * @method Product firstOrNew(array $attributes, array $values = [])
     * @method Product firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Product forceCreate(array $attributes)
     * @method _ProductCollection|Product[] fromQuery(string $query, array $bindings = [])
     * @method _ProductCollection|Product[] get(array|string $columns = ['*'])
     * @method Product getModel()
     * @method Product[] getModels(array|string $columns = ['*'])
     * @method _ProductCollection|Product[] hydrate(array $items)
     * @method Product make(array $attributes = [])
     * @method Product newModelInstance(array $attributes = [])
     * @method Product updateOrCreate(array $attributes, array $values = [])
     */
    class _ProductQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method ProductRecommend shift()
     * @method ProductRecommend pop()
     * @method ProductRecommend get($key, $default = null)
     * @method ProductRecommend pull($key, $default = null)
     * @method ProductRecommend first(callable $callback = null, $default = null)
     * @method ProductRecommend firstWhere(string $key, $operator = null, $value = null)
     * @method ProductRecommend[] all()
     * @method ProductRecommend last(callable $callback = null, $default = null)
     */
    class _ProductRecommendCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return ProductRecommend[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _ProductRecommendQueryBuilder whereId($value)
     * @method _ProductRecommendQueryBuilder whereCreatedAt($value)
     * @method _ProductRecommendQueryBuilder whereUpdatedAt($value)
     * @method ProductRecommend create(array $attributes = [])
     * @method _ProductRecommendCollection|ProductRecommend[] cursor()
     * @method ProductRecommend|null find($id, array $columns = ['*'])
     * @method _ProductRecommendCollection|ProductRecommend[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductRecommend findOrFail($id, array $columns = ['*'])
     * @method _ProductRecommendCollection|ProductRecommend[] findOrNew($id, array $columns = ['*'])
     * @method ProductRecommend first(array|string $columns = ['*'])
     * @method ProductRecommend firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductRecommend firstOrCreate(array $attributes, array $values = [])
     * @method ProductRecommend firstOrFail(array $columns = ['*'])
     * @method ProductRecommend firstOrNew(array $attributes, array $values = [])
     * @method ProductRecommend firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductRecommend forceCreate(array $attributes)
     * @method _ProductRecommendCollection|ProductRecommend[] fromQuery(string $query, array $bindings = [])
     * @method _ProductRecommendCollection|ProductRecommend[] get(array|string $columns = ['*'])
     * @method ProductRecommend getModel()
     * @method ProductRecommend[] getModels(array|string $columns = ['*'])
     * @method _ProductRecommendCollection|ProductRecommend[] hydrate(array $items)
     * @method ProductRecommend make(array $attributes = [])
     * @method ProductRecommend newModelInstance(array $attributes = [])
     * @method ProductRecommend updateOrCreate(array $attributes, array $values = [])
     */
    class _ProductRecommendQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method ProductSku shift()
     * @method ProductSku pop()
     * @method ProductSku get($key, $default = null)
     * @method ProductSku pull($key, $default = null)
     * @method ProductSku first(callable $callback = null, $default = null)
     * @method ProductSku firstWhere(string $key, $operator = null, $value = null)
     * @method ProductSku[] all()
     * @method ProductSku last(callable $callback = null, $default = null)
     */
    class _ProductSkuCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return ProductSku[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _ProductSkuQueryBuilder whereId($value)
     * @method _ProductSkuQueryBuilder whereTitle($value)
     * @method _ProductSkuQueryBuilder whereDescription($value)
     * @method _ProductSkuQueryBuilder wherePrice($value)
     * @method _ProductSkuQueryBuilder whereStock($value)
     * @method _ProductSkuQueryBuilder whereProductId($value)
     * @method _ProductSkuQueryBuilder whereCreatedAt($value)
     * @method _ProductSkuQueryBuilder whereUpdatedAt($value)
     * @method ProductSku create(array $attributes = [])
     * @method _ProductSkuCollection|ProductSku[] cursor()
     * @method ProductSku|null find($id, array $columns = ['*'])
     * @method _ProductSkuCollection|ProductSku[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductSku findOrFail($id, array $columns = ['*'])
     * @method _ProductSkuCollection|ProductSku[] findOrNew($id, array $columns = ['*'])
     * @method ProductSku first(array|string $columns = ['*'])
     * @method ProductSku firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductSku firstOrCreate(array $attributes, array $values = [])
     * @method ProductSku firstOrFail(array $columns = ['*'])
     * @method ProductSku firstOrNew(array $attributes, array $values = [])
     * @method ProductSku firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSku forceCreate(array $attributes)
     * @method _ProductSkuCollection|ProductSku[] fromQuery(string $query, array $bindings = [])
     * @method _ProductSkuCollection|ProductSku[] get(array|string $columns = ['*'])
     * @method ProductSku getModel()
     * @method ProductSku[] getModels(array|string $columns = ['*'])
     * @method _ProductSkuCollection|ProductSku[] hydrate(array $items)
     * @method ProductSku make(array $attributes = [])
     * @method ProductSku newModelInstance(array $attributes = [])
     * @method ProductSku updateOrCreate(array $attributes, array $values = [])
     */
    class _ProductSkuQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Profile shift()
     * @method Profile pop()
     * @method Profile get($key, $default = null)
     * @method Profile pull($key, $default = null)
     * @method Profile first(callable $callback = null, $default = null)
     * @method Profile firstWhere(string $key, $operator = null, $value = null)
     * @method Profile[] all()
     * @method Profile last(callable $callback = null, $default = null)
     */
    class _ProfileCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Profile[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _ProfileQueryBuilder whereId($value)
     * @method _ProfileQueryBuilder whereUserId($value)
     * @method _ProfileQueryBuilder whereRealName($value)
     * @method _ProfileQueryBuilder whereSex($value)
     * @method _ProfileQueryBuilder whereBirthday($value)
     * @method _ProfileQueryBuilder whereAge($value)
     * @method _ProfileQueryBuilder whereCreatedAt($value)
     * @method _ProfileQueryBuilder whereUpdatedAt($value)
     * @method Profile create(array $attributes = [])
     * @method _ProfileCollection|Profile[] cursor()
     * @method Profile|null find($id, array $columns = ['*'])
     * @method _ProfileCollection|Profile[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Profile findOrFail($id, array $columns = ['*'])
     * @method _ProfileCollection|Profile[] findOrNew($id, array $columns = ['*'])
     * @method Profile first(array|string $columns = ['*'])
     * @method Profile firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Profile firstOrCreate(array $attributes, array $values = [])
     * @method Profile firstOrFail(array $columns = ['*'])
     * @method Profile firstOrNew(array $attributes, array $values = [])
     * @method Profile firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Profile forceCreate(array $attributes)
     * @method _ProfileCollection|Profile[] fromQuery(string $query, array $bindings = [])
     * @method _ProfileCollection|Profile[] get(array|string $columns = ['*'])
     * @method Profile getModel()
     * @method Profile[] getModels(array|string $columns = ['*'])
     * @method _ProfileCollection|Profile[] hydrate(array $items)
     * @method Profile make(array $attributes = [])
     * @method Profile newModelInstance(array $attributes = [])
     * @method Profile updateOrCreate(array $attributes, array $values = [])
     */
    class _ProfileQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method ShopCartItem shift()
     * @method ShopCartItem pop()
     * @method ShopCartItem get($key, $default = null)
     * @method ShopCartItem pull($key, $default = null)
     * @method ShopCartItem first(callable $callback = null, $default = null)
     * @method ShopCartItem firstWhere(string $key, $operator = null, $value = null)
     * @method ShopCartItem[] all()
     * @method ShopCartItem last(callable $callback = null, $default = null)
     */
    class _ShopCartItemCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return ShopCartItem[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _ShopCartItemQueryBuilder whereId($value)
     * @method _ShopCartItemQueryBuilder whereUserId($value)
     * @method _ShopCartItemQueryBuilder whereProductSkuId($value)
     * @method _ShopCartItemQueryBuilder whereProductId($value)
     * @method _ShopCartItemQueryBuilder whereAmount($value)
     * @method _ShopCartItemQueryBuilder whereCreatedAt($value)
     * @method _ShopCartItemQueryBuilder whereUpdatedAt($value)
     * @method ShopCartItem create(array $attributes = [])
     * @method _ShopCartItemCollection|ShopCartItem[] cursor()
     * @method ShopCartItem|null find($id, array $columns = ['*'])
     * @method _ShopCartItemCollection|ShopCartItem[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ShopCartItem findOrFail($id, array $columns = ['*'])
     * @method _ShopCartItemCollection|ShopCartItem[] findOrNew($id, array $columns = ['*'])
     * @method ShopCartItem first(array|string $columns = ['*'])
     * @method ShopCartItem firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ShopCartItem firstOrCreate(array $attributes, array $values = [])
     * @method ShopCartItem firstOrFail(array $columns = ['*'])
     * @method ShopCartItem firstOrNew(array $attributes, array $values = [])
     * @method ShopCartItem firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ShopCartItem forceCreate(array $attributes)
     * @method _ShopCartItemCollection|ShopCartItem[] fromQuery(string $query, array $bindings = [])
     * @method _ShopCartItemCollection|ShopCartItem[] get(array|string $columns = ['*'])
     * @method ShopCartItem getModel()
     * @method ShopCartItem[] getModels(array|string $columns = ['*'])
     * @method _ShopCartItemCollection|ShopCartItem[] hydrate(array $items)
     * @method ShopCartItem make(array $attributes = [])
     * @method ShopCartItem newModelInstance(array $attributes = [])
     * @method ShopCartItem updateOrCreate(array $attributes, array $values = [])
     */
    class _ShopCartItemQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method UserAddress shift()
     * @method UserAddress pop()
     * @method UserAddress get($key, $default = null)
     * @method UserAddress pull($key, $default = null)
     * @method UserAddress first(callable $callback = null, $default = null)
     * @method UserAddress firstWhere(string $key, $operator = null, $value = null)
     * @method UserAddress[] all()
     * @method UserAddress last(callable $callback = null, $default = null)
     */
    class _UserAddressCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return UserAddress[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _UserAddressQueryBuilder whereId($value)
     * @method _UserAddressQueryBuilder whereUserId($value)
     * @method _UserAddressQueryBuilder whereProvince($value)
     * @method _UserAddressQueryBuilder whereCity($value)
     * @method _UserAddressQueryBuilder whereDistrict($value)
     * @method _UserAddressQueryBuilder whereAddress($value)
     * @method _UserAddressQueryBuilder whereZip($value)
     * @method _UserAddressQueryBuilder whereContactName($value)
     * @method _UserAddressQueryBuilder whereContactPhone($value)
     * @method _UserAddressQueryBuilder whereLastUsedAt($value)
     * @method _UserAddressQueryBuilder whereCreatedAt($value)
     * @method _UserAddressQueryBuilder whereUpdatedAt($value)
     * @method UserAddress create(array $attributes = [])
     * @method _UserAddressCollection|UserAddress[] cursor()
     * @method UserAddress|null find($id, array $columns = ['*'])
     * @method _UserAddressCollection|UserAddress[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method UserAddress findOrFail($id, array $columns = ['*'])
     * @method _UserAddressCollection|UserAddress[] findOrNew($id, array $columns = ['*'])
     * @method UserAddress first(array|string $columns = ['*'])
     * @method UserAddress firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method UserAddress firstOrCreate(array $attributes, array $values = [])
     * @method UserAddress firstOrFail(array $columns = ['*'])
     * @method UserAddress firstOrNew(array $attributes, array $values = [])
     * @method UserAddress firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserAddress forceCreate(array $attributes)
     * @method _UserAddressCollection|UserAddress[] fromQuery(string $query, array $bindings = [])
     * @method _UserAddressCollection|UserAddress[] get(array|string $columns = ['*'])
     * @method UserAddress getModel()
     * @method UserAddress[] getModels(array|string $columns = ['*'])
     * @method _UserAddressCollection|UserAddress[] hydrate(array $items)
     * @method UserAddress make(array $attributes = [])
     * @method UserAddress newModelInstance(array $attributes = [])
     * @method UserAddress updateOrCreate(array $attributes, array $values = [])
     */
    class _UserAddressQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method User shift()
     * @method User pop()
     * @method User get($key, $default = null)
     * @method User pull($key, $default = null)
     * @method User first(callable $callback = null, $default = null)
     * @method User firstWhere(string $key, $operator = null, $value = null)
     * @method User[] all()
     * @method User last(callable $callback = null, $default = null)
     */
    class _UserCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _UserQueryBuilder whereId($value)
     * @method _UserQueryBuilder whereName($value)
     * @method _UserQueryBuilder whereUsername($value)
     * @method _UserQueryBuilder whereEmail($value)
     * @method _UserQueryBuilder whereEmailVerifiedAt($value)
     * @method _UserQueryBuilder wherePasswordQuestionId($value)
     * @method _UserQueryBuilder wherePasswordAnswer($value)
     * @method _UserQueryBuilder wherePhone($value)
     * @method _UserQueryBuilder wherePassword($value)
     * @method _UserQueryBuilder whereRememberToken($value)
     * @method _UserQueryBuilder whereStatus($value)
     * @method _UserQueryBuilder whereAvatar($value)
     * @method _UserQueryBuilder whereCreatedAt($value)
     * @method _UserQueryBuilder whereUpdatedAt($value)
     * @method User create(array $attributes = [])
     * @method _UserCollection|User[] cursor()
     * @method User|null find($id, array $columns = ['*'])
     * @method _UserCollection|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User findOrFail($id, array $columns = ['*'])
     * @method _UserCollection|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes, array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes, array $values = [])
     * @method User firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _UserCollection|User[] fromQuery(string $query, array $bindings = [])
     * @method _UserCollection|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _UserCollection|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method User updateOrCreate(array $attributes, array $values = [])
     * @method _UserQueryBuilder active()
     * @method _UserQueryBuilder permission(array|Collection|Permission|string $permissions)
     * @method _UserQueryBuilder role(array|Collection|Role|string $roles, string $guard = null)
     */
    class _UserQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method WebSeo shift()
     * @method WebSeo pop()
     * @method WebSeo get($key, $default = null)
     * @method WebSeo pull($key, $default = null)
     * @method WebSeo first(callable $callback = null, $default = null)
     * @method WebSeo firstWhere(string $key, $operator = null, $value = null)
     * @method WebSeo[] all()
     * @method WebSeo last(callable $callback = null, $default = null)
     */
    class _WebSeoCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return WebSeo[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _WebSeoQueryBuilder whereId($value)
     * @method _WebSeoQueryBuilder whereName($value)
     * @method _WebSeoQueryBuilder whereContent($value)
     * @method _WebSeoQueryBuilder whereCreatedAt($value)
     * @method _WebSeoQueryBuilder whereUpdatedAt($value)
     * @method WebSeo create(array $attributes = [])
     * @method _WebSeoCollection|WebSeo[] cursor()
     * @method WebSeo|null find($id, array $columns = ['*'])
     * @method _WebSeoCollection|WebSeo[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method WebSeo findOrFail($id, array $columns = ['*'])
     * @method _WebSeoCollection|WebSeo[] findOrNew($id, array $columns = ['*'])
     * @method WebSeo first(array|string $columns = ['*'])
     * @method WebSeo firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method WebSeo firstOrCreate(array $attributes, array $values = [])
     * @method WebSeo firstOrFail(array $columns = ['*'])
     * @method WebSeo firstOrNew(array $attributes, array $values = [])
     * @method WebSeo firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebSeo forceCreate(array $attributes)
     * @method _WebSeoCollection|WebSeo[] fromQuery(string $query, array $bindings = [])
     * @method _WebSeoCollection|WebSeo[] get(array|string $columns = ['*'])
     * @method WebSeo getModel()
     * @method WebSeo[] getModels(array|string $columns = ['*'])
     * @method _WebSeoCollection|WebSeo[] hydrate(array $items)
     * @method WebSeo make(array $attributes = [])
     * @method WebSeo newModelInstance(array $attributes = [])
     * @method WebSeo updateOrCreate(array $attributes, array $values = [])
     */
    class _WebSeoQueryBuilder extends _BaseBuilder
    {
    }
}

namespace LaravelIdea\Helper\Illuminate\Notifications {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Notifications\DatabaseNotification;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method DatabaseNotification shift()
     * @method DatabaseNotification pop()
     * @method DatabaseNotification get($key, $default = null)
     * @method DatabaseNotification pull($key, $default = null)
     * @method DatabaseNotification first(callable $callback = null, $default = null)
     * @method DatabaseNotification firstWhere(string $key, $operator = null, $value = null)
     * @method DatabaseNotification[] all()
     * @method DatabaseNotification last(callable $callback = null, $default = null)
     */
    class _DatabaseNotificationCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return DatabaseNotification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method DatabaseNotification create(array $attributes = [])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] cursor()
     * @method DatabaseNotification|null find($id, array $columns = ['*'])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method DatabaseNotification findOrFail($id, array $columns = ['*'])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] findOrNew($id, array $columns = ['*'])
     * @method DatabaseNotification first(array|string $columns = ['*'])
     * @method DatabaseNotification firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method DatabaseNotification firstOrCreate(array $attributes, array $values = [])
     * @method DatabaseNotification firstOrFail(array $columns = ['*'])
     * @method DatabaseNotification firstOrNew(array $attributes, array $values = [])
     * @method DatabaseNotification firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DatabaseNotification forceCreate(array $attributes)
     * @method _DatabaseNotificationCollection|DatabaseNotification[] fromQuery(string $query, array $bindings = [])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] get(array|string $columns = ['*'])
     * @method DatabaseNotification getModel()
     * @method DatabaseNotification[] getModels(array|string $columns = ['*'])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] hydrate(array $items)
     * @method DatabaseNotification make(array $attributes = [])
     * @method DatabaseNotification newModelInstance(array $attributes = [])
     * @method DatabaseNotification updateOrCreate(array $attributes, array $values = [])
     */
    class _DatabaseNotificationQueryBuilder extends _BaseBuilder
    {
    }
}

namespace LaravelIdea\Helper\Spatie\Permission\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission as Permission1;
    use Spatie\Permission\Contracts\Role;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role as Role1;

    /**
     * @method Permission shift()
     * @method Permission pop()
     * @method Permission get($key, $default = null)
     * @method Permission pull($key, $default = null)
     * @method Permission first(callable $callback = null, $default = null)
     * @method Permission firstWhere(string $key, $operator = null, $value = null)
     * @method Permission[] all()
     * @method Permission last(callable $callback = null, $default = null)
     */
    class _PermissionCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Permission[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Permission create(array $attributes = [])
     * @method _PermissionCollection|Permission[] cursor()
     * @method Permission|null find($id, array $columns = ['*'])
     * @method _PermissionCollection|Permission[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Permission findOrFail($id, array $columns = ['*'])
     * @method _PermissionCollection|Permission[] findOrNew($id, array $columns = ['*'])
     * @method Permission first(array|string $columns = ['*'])
     * @method Permission firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Permission firstOrCreate(array $attributes, array $values = [])
     * @method Permission firstOrFail(array $columns = ['*'])
     * @method Permission firstOrNew(array $attributes, array $values = [])
     * @method Permission firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Permission forceCreate(array $attributes)
     * @method _PermissionCollection|Permission[] fromQuery(string $query, array $bindings = [])
     * @method _PermissionCollection|Permission[] get(array|string $columns = ['*'])
     * @method Permission getModel()
     * @method Permission[] getModels(array|string $columns = ['*'])
     * @method _PermissionCollection|Permission[] hydrate(array $items)
     * @method Permission make(array $attributes = [])
     * @method Permission newModelInstance(array $attributes = [])
     * @method Permission updateOrCreate(array $attributes, array $values = [])
     * @method _PermissionQueryBuilder permission(array|Collection|Permission1|string $permissions)
     * @method _PermissionQueryBuilder role(array|Collection|Role|string $roles, string $guard = null)
     */
    class _PermissionQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Role1 shift()
     * @method Role1 pop()
     * @method Role1 get($key, $default = null)
     * @method Role1 pull($key, $default = null)
     * @method Role1 first(callable $callback = null, $default = null)
     * @method Role1 firstWhere(string $key, $operator = null, $value = null)
     * @method Role1[] all()
     * @method Role1 last(callable $callback = null, $default = null)
     */
    class _RoleCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Role1[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Role1 create(array $attributes = [])
     * @method _RoleCollection|Role1[] cursor()
     * @method Role1|null find($id, array $columns = ['*'])
     * @method _RoleCollection|Role1[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Role1 findOrFail($id, array $columns = ['*'])
     * @method _RoleCollection|Role1[] findOrNew($id, array $columns = ['*'])
     * @method Role1 first(array|string $columns = ['*'])
     * @method Role1 firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Role1 firstOrCreate(array $attributes, array $values = [])
     * @method Role1 firstOrFail(array $columns = ['*'])
     * @method Role1 firstOrNew(array $attributes, array $values = [])
     * @method Role1 firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role1 forceCreate(array $attributes)
     * @method _RoleCollection|Role1[] fromQuery(string $query, array $bindings = [])
     * @method _RoleCollection|Role1[] get(array|string $columns = ['*'])
     * @method Role1 getModel()
     * @method Role1[] getModels(array|string $columns = ['*'])
     * @method _RoleCollection|Role1[] hydrate(array $items)
     * @method Role1 make(array $attributes = [])
     * @method Role1 newModelInstance(array $attributes = [])
     * @method Role1 updateOrCreate(array $attributes, array $values = [])
     * @method _RoleQueryBuilder permission(array|Collection|Permission1|string $permissions)
     */
    class _RoleQueryBuilder extends _BaseBuilder
    {
    }
}

namespace Spatie\Permission\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\Spatie\Permission\Models\_PermissionCollection;
    use LaravelIdea\Helper\Spatie\Permission\Models\_PermissionQueryBuilder;
    use LaravelIdea\Helper\Spatie\Permission\Models\_RoleCollection;
    use LaravelIdea\Helper\Spatie\Permission\Models\_RoleQueryBuilder;
    use Spatie\Permission\Contracts\Permission as Permission1;
    use Spatie\Permission\Contracts\Role as Role1;

    /**
     * @method _PermissionQueryBuilder newModelQuery()
     * @method _PermissionQueryBuilder newQuery()
     * @method static _PermissionQueryBuilder query()
     * @method static _PermissionCollection|Permission[] all()
     * @method _PermissionQueryBuilder permission(array|Collection|Permission1|string $permissions)
     * @method _PermissionQueryBuilder role(array|Collection|Role1|string $roles, string $guard = null)
     * @mixin _PermissionQueryBuilder
     */
    class Permission extends Model
    {
    }

    /**
     * @method _RoleQueryBuilder newModelQuery()
     * @method _RoleQueryBuilder newQuery()
     * @method static _RoleQueryBuilder query()
     * @method static _RoleCollection|Role[] all()
     * @method _RoleQueryBuilder permission(array|Collection|Permission1|string $permissions)
     * @mixin _RoleQueryBuilder
     */
    class Role extends Model
    {
    }
}
