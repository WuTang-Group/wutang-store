---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://store.wutang.com/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/response_code?10001=magnam&10003=necessitatibus&20001=dolorem&40001=exercitationem&40003=et&40004=expedita&40005=aperiam&50001=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/response_code"
);

let params = {
    "10001": "magnam",
    "10003": "necessitatibus",
    "20001": "dolorem",
    "40001": "exercitationem",
    "40003": "et",
    "40004": "expedita",
    "40005": "aperiam",
    "50001": "voluptatem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/response_code`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `10001` |  optional  | 参数有误
    `10003` |  optional  | 数据有误
    `20001` |  optional  | 操作成功
    `40001` |  optional  | 禁止访问
    `40003` |  optional  | 权限不足
    `40004` |  optional  | 查询为空
    `40005` |  optional  | 请求过期
    `50001` |  optional  | 操作失败

<!-- END_77797615aeaa4fce9a94150989aed46f -->

<!-- START_3266c06bb58be7f09822eec02a02823c -->
## Generate captcha code and save to cache
生成验证码并写入缓存

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/captchas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/captchas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/captchas`


<!-- END_3266c06bb58be7f09822eec02a02823c -->

<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## Register user
用户注册

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aut","username":"aliquam","password":"libero","captcha_key":"soluta","captcha_code":"dolore","password_question_id":16,"password_answer":"qui"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aut",
    "username": "aliquam",
    "password": "libero",
    "captcha_key": "soluta",
    "captcha_code": "dolore",
    "password_question_id": 16,
    "password_answer": "qui"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 姓名
        `username` | string |  required  | 账号(允许:英文字符/数字/字符+数字)
        `password` | string |  optional  | password_confirmation required 确认密码
        `captcha_key` | string |  required  | 验证码的key
        `captcha_code` | string |  required  | 验证码的code
        `password_question_id` | integer |  required  | 密保问题ID
        `password_answer` | string |  required  | 密保问题答案
    
<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

<!-- START_d69bbb4b1b3b426bec3e1c11b029c116 -->
## Get password question list
获取密保问题列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/question_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/question_list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "question": "您的学号(或工号)是"
        },
        {
            "id": 2,
            "question": "您父亲的姓名是"
        },
        {
            "id": 3,
            "question": "您母亲的姓名是"
        },
        {
            "id": 4,
            "question": "您配偶的姓名是"
        },
        {
            "id": 5,
            "question": "您初中班主任的姓名是"
        },
        {
            "id": 6,
            "question": "您最熟悉的童年好友姓名是"
        },
        {
            "id": 7,
            "question": "对您影响最大的人是"
        },
        {
            "id": 8,
            "question": "您的小学毕业于"
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/question_list`


<!-- END_d69bbb4b1b3b426bec3e1c11b029c116 -->

<!-- START_de9212b4bd813e07f73b53cc3bd13088 -->
## get user password question
获取用户的密保问题

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/questions?username=molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/questions"
);

let params = {
    "username": "molestias",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "username": "molestias"
    },
    "code": 10001,
    "msg": "用户不存在"
}
```

### HTTP Request
`GET api/questions`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `username` |  required  | 用户名

<!-- END_de9212b4bd813e07f73b53cc3bd13088 -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Get a JWT via given credentials.

通过登录信息获取JWT凭证

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"non","password":"delectus"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "non",
    "password": "delectus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `username` | string |  required  | 用户名
        `password` | string |  required  | 密码
    
<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_20d5f227169180dbf935585e0387f6c3 -->
## reset password
重置密码(未登录)

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/password_reset?username=itaque&password_question_id=dolorum&password_answer=aut&password=nam&password_confirmation=earum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/password_reset"
);

let params = {
    "username": "itaque",
    "password_question_id": "dolorum",
    "password_answer": "aut",
    "password": "nam",
    "password_confirmation": "earum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/password_reset`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `username` |  required  | 用户名
    `password_question_id` |  required  | 密保问题ID
    `password_answer` |  required  | 密保问题的答案
    `password` |  required  | 密码
    `password_confirmation` |  required  | 二次确认密码

<!-- END_20d5f227169180dbf935585e0387f6c3 -->

<!-- START_eb9c398471efceb42098dee938d34a4f -->
## Get product category list
获取商品分类列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product_category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "slug": "ut-molestias",
            "title": "防晒",
            "title_en": "eaque velit qui",
            "describe": "Commodi magni et exercitationem repellat voluptas labore nobis. Ea qui velit sit qui nulla. Ut nihil quasi recusandae vel qui cum. Voluptas nobis amet blanditiis deleniti quidem quo sint aspernatur.",
            "describe_en": "Sed non dolorem qui qui ad. Sed perspiciatis qui dignissimos rerum sed. Deleniti maxime et sit cupiditate consequuntur aliquid sit. Voluptate cupiditate mollitia dolor aut rerum dolorum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?39022",
            "description": "Sunt et et deserunt.",
            "description_en": "Reiciendis aut explicabo ut dolorem aut sint.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?81801",
            "parent_id": 3,
            "created_at": "2020-07-30 07:45:12",
            "updated_at": "2020-07-29 06:11:52",
            "parent_title": "精油"
        },
        {
            "id": 2,
            "slug": "amet-dolores",
            "title": "睫毛膏",
            "title_en": "nam voluptatibus et",
            "describe": "Nihil error nesciunt voluptatum qui iste. Laborum rem voluptatibus reprehenderit quaerat accusamus. Vel quaerat atque non iste quia quia expedita.",
            "describe_en": "Omnis ipsa eaque doloremque consequatur ad aliquam. Officiis ex enim praesentium exercitationem aut. Optio repudiandae ea deserunt omnis qui et.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?79931",
            "description": "Adipisci ipsa et mollitia optio.",
            "description_en": "Molestiae iure voluptatum et.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?84432",
            "parent_id": 20,
            "created_at": "2020-08-01 07:48:25",
            "updated_at": "2020-07-18 14:26:45",
            "parent_title": "面霜"
        },
        {
            "id": 3,
            "slug": "et-architecto",
            "title": "精油",
            "title_en": "animi occaecati ducimus",
            "describe": "Rem est ab quam eum. Possimus rem soluta eius.",
            "describe_en": "Enim non eligendi dolor unde cupiditate ad quia dolore. Eligendi sit eveniet modi repudiandae.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?38360",
            "description": "Praesentium placeat facere reprehenderit temporibus.",
            "description_en": "Beatae at quaerat quasi voluptatem deserunt animi.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?58209",
            "parent_id": 16,
            "created_at": "2020-07-28 11:44:46",
            "updated_at": "2020-08-11 11:36:48",
            "parent_title": "眼线"
        },
        {
            "id": 4,
            "slug": "dolores-eligendi",
            "title": "爽肤水",
            "title_en": "eum officia et",
            "describe": "Et non est eum quas. Voluptatem provident dolore est quos voluptatem impedit placeat. Quod ut in quo ipsa pariatur dolor. Laborum libero quia sunt temporibus.",
            "describe_en": "Eum sit sunt molestiae voluptatem voluptatum. Voluptate quos a atque voluptas. Maxime provident reprehenderit reiciendis repellat. Eum qui nam voluptates error.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?97206",
            "description": "Error earum qui id.",
            "description_en": "A adipisci in sunt esse explicabo.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?96125",
            "parent_id": 17,
            "created_at": "2020-07-26 10:54:01",
            "updated_at": "2020-08-08 19:06:55",
            "parent_title": "BB霜"
        },
        {
            "id": 5,
            "slug": "eligendi-provident",
            "title": "身体护理",
            "title_en": "assumenda officiis laboriosam",
            "describe": "Qui vel recusandae minima aperiam quia et tempora. Et eius amet voluptas. Est cupiditate odio sunt magnam facilis placeat officiis.",
            "describe_en": "Soluta beatae voluptas est et ut esse. Atque eaque nesciunt sed similique sed molestias et. Excepturi vitae veniam id quis commodi omnis. Temporibus quia et maxime cumque.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?66045",
            "description": "Laudantium eos dolores soluta harum eveniet iure.",
            "description_en": "Praesentium in officia laborum quis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?24170",
            "parent_id": 5,
            "created_at": "2020-08-06 21:55:33",
            "updated_at": "2020-07-26 13:12:31",
            "parent_title": "身体护理"
        },
        {
            "id": 6,
            "slug": "voluptatem-et",
            "title": "睫毛膏",
            "title_en": "totam neque nulla",
            "describe": "Itaque ratione et odio odio odio laboriosam est. Mollitia aut corporis rem quisquam. Eum at ut qui saepe quae. Ab quis rerum ratione sint autem ea.",
            "describe_en": "Atque eos nulla sed est doloribus ea exercitationem. Perspiciatis deleniti rerum delectus. Eos amet eius eligendi error iste et sed.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?30608",
            "description": "Ullam laudantium est impedit esse.",
            "description_en": "Quo facilis ipsam dolore ad dolores sapiente.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?75284",
            "parent_id": 3,
            "created_at": "2020-08-07 09:13:20",
            "updated_at": "2020-08-07 09:38:54",
            "parent_title": "精油"
        },
        {
            "id": 7,
            "slug": "nihil-incidunt",
            "title": "腮红",
            "title_en": "et nemo perferendis",
            "describe": "Atque sunt odio consectetur. Doloremque distinctio fuga perspiciatis. A accusamus voluptatem modi qui in rerum dolor.",
            "describe_en": "Ea quo rerum molestias. Repudiandae nihil commodi illo doloremque. Odit ut eum tenetur quo quaerat. Sint et tempora alias facere sapiente adipisci.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?80380",
            "description": "Sunt vitae perferendis omnis consequatur voluptatum praesentium.",
            "description_en": "Repudiandae ratione debitis officiis tenetur rem sit.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?25826",
            "parent_id": 13,
            "created_at": "2020-07-13 05:35:05",
            "updated_at": "2020-07-28 11:45:32",
            "parent_title": "防晒"
        },
        {
            "id": 8,
            "slug": "aliquam-cum",
            "title": "腮红",
            "title_en": "iure non et",
            "describe": "Eveniet cupiditate quod praesentium molestiae. Qui voluptate voluptas tenetur nemo. Ut officia deleniti quisquam atque voluptates molestiae. Natus dolores eos nihil unde animi qui sed.",
            "describe_en": "Ducimus perferendis id reiciendis consequatur cupiditate quae cumque. Occaecati sit fugiat et veritatis distinctio aut autem. Qui quo voluptatem nostrum impedit cumque magni.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?16490",
            "description": "Eius quidem sed odio magnam fugiat.",
            "description_en": "Delectus quia maxime occaecati sapiente blanditiis pariatur.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?80541",
            "parent_id": 20,
            "created_at": "2020-07-31 22:12:28",
            "updated_at": "2020-07-21 12:40:40",
            "parent_title": "面霜"
        },
        {
            "id": 9,
            "slug": "labore-repudiandae",
            "title": "腮红",
            "title_en": "sapiente et id",
            "describe": "Aut ullam magnam molestias consectetur. Eligendi ut fugit aut aut sunt quos. Quia quo atque error dolore voluptatibus.",
            "describe_en": "Sit corrupti quos illum explicabo numquam vel consequatur. Consequuntur qui doloribus quia expedita rerum quos. Rem minus sed dolorem mollitia aspernatur voluptate.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?99094",
            "description": "Provident assumenda quam aut placeat autem autem.",
            "description_en": "Excepturi delectus quisquam et qui earum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?42753",
            "parent_id": 7,
            "created_at": "2020-08-09 17:15:23",
            "updated_at": "2020-08-06 05:17:02",
            "parent_title": "腮红"
        },
        {
            "id": 10,
            "slug": "libero-dolores",
            "title": "眼霜",
            "title_en": "minima tenetur id",
            "describe": "Est vel rerum quia. Laborum harum ut assumenda pariatur similique et laborum. Accusantium suscipit ea voluptatem rerum.",
            "describe_en": "Quaerat doloremque ea quod hic aliquam et maxime nemo. Eveniet modi est maxime maxime et sapiente. Accusamus sed quia aut. Nesciunt iusto sunt voluptas maiores voluptatibus.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?31883",
            "description": "Ea dignissimos eum cumque architecto et magni.",
            "description_en": "Et amet earum repellendus in.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?21790",
            "parent_id": 19,
            "created_at": "2020-07-25 19:13:40",
            "updated_at": "2020-08-11 14:57:01",
            "parent_title": "彩妆盘"
        },
        {
            "id": 11,
            "slug": "officia-nulla",
            "title": "眼线",
            "title_en": "voluptas qui eaque",
            "describe": "Perspiciatis eos maxime aut aperiam maiores nostrum. Aperiam accusamus quo numquam ut fuga. Minus quisquam dolor illum porro numquam est. Amet doloremque sit possimus enim fugit.",
            "describe_en": "Molestias autem et et tenetur ut deserunt ut. Deleniti quia molestias commodi.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?57362",
            "description": "Aut ea vel atque nemo harum.",
            "description_en": "Eos aut cupiditate qui facilis.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?85007",
            "parent_id": 16,
            "created_at": "2020-08-06 06:34:41",
            "updated_at": "2020-07-26 11:38:14",
            "parent_title": "眼线"
        },
        {
            "id": 12,
            "slug": "quia-quis",
            "title": "粉底液",
            "title_en": "blanditiis maxime et",
            "describe": "Aut ab qui doloribus cumque porro. Quia sapiente reiciendis sit velit suscipit quibusdam. Voluptates occaecati repudiandae et debitis.",
            "describe_en": "Eveniet aut hic minus numquam. Rerum architecto voluptatem quia hic quia officiis. Aut voluptate recusandae quo rerum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?12548",
            "description": "Placeat beatae voluptatum ut sapiente est.",
            "description_en": "Inventore et recusandae dolore nisi et.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?89061",
            "parent_id": 6,
            "created_at": "2020-08-05 01:02:51",
            "updated_at": "2020-07-30 17:27:23",
            "parent_title": "睫毛膏"
        },
        {
            "id": 13,
            "slug": "voluptate-officia",
            "title": "防晒",
            "title_en": "pariatur perspiciatis quos",
            "describe": "Quod corporis tempora magni sed rerum. Ullam doloribus ratione debitis dicta molestiae. Excepturi neque nisi omnis atque.",
            "describe_en": "Sed quia harum consequuntur et repellendus eum. Quia earum dolor sunt rerum debitis corporis earum doloremque. Accusamus pariatur consequatur aperiam. Aliquid qui quidem est hic iure quia porro.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?66436",
            "description": "Sint aut autem atque consequatur soluta culpa.",
            "description_en": "Rerum quo tenetur et ullam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?84337",
            "parent_id": 14,
            "created_at": "2020-07-24 03:44:07",
            "updated_at": "2020-07-14 16:20:59",
            "parent_title": "腮红"
        },
        {
            "id": 14,
            "slug": "inventore-repellat",
            "title": "腮红",
            "title_en": "unde numquam commodi",
            "describe": "Iusto praesentium possimus dolore perferendis possimus dicta. Quia rem nemo aliquid. Voluptates tempora doloremque molestiae adipisci qui.",
            "describe_en": "Magni et consequuntur cupiditate sint occaecati aut nulla enim. Modi nihil incidunt perferendis sit cum. Et explicabo nesciunt id. Placeat nostrum neque consequuntur sint eaque aut alias.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?23332",
            "description": "Sunt repudiandae sapiente est.",
            "description_en": "Et nostrum neque dolorum rerum provident.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?96156",
            "parent_id": 8,
            "created_at": "2020-07-12 04:57:21",
            "updated_at": "2020-07-15 08:25:41",
            "parent_title": "腮红"
        },
        {
            "id": 15,
            "slug": "quidem-et",
            "title": "香水",
            "title_en": "doloremque voluptatum corrupti",
            "describe": "Mollitia illo officia voluptatibus eveniet quas et porro omnis. Itaque temporibus rerum quisquam voluptatem. Omnis in quod aut possimus.",
            "describe_en": "Rerum nihil quam sunt soluta perferendis voluptatem. Architecto eum sint deleniti deleniti perspiciatis. Enim voluptate non in excepturi.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?66091",
            "description": "Numquam voluptate sequi rem.",
            "description_en": "Delectus iure et accusantium.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?74937",
            "parent_id": 2,
            "created_at": "2020-07-30 12:56:05",
            "updated_at": "2020-07-23 18:58:29",
            "parent_title": "睫毛膏"
        },
        {
            "id": 16,
            "slug": "qui-architecto",
            "title": "眼线",
            "title_en": "non placeat repudiandae",
            "describe": "Et distinctio et repellat dolorum molestiae. Et a nobis error voluptatem eligendi. Sit ut molestiae illo animi voluptatum ipsam. Quis aut quia voluptas rem et delectus.",
            "describe_en": "Eum iste nihil delectus voluptas quasi est. Deserunt eius suscipit assumenda eveniet expedita corrupti quasi. Nihil nisi odio omnis in quas officiis impedit suscipit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?16573",
            "description": "Libero deserunt mollitia quia.",
            "description_en": "Itaque voluptatem veritatis voluptatem repudiandae facere ad.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?57783",
            "parent_id": 2,
            "created_at": "2020-07-21 21:17:39",
            "updated_at": "2020-08-10 23:33:34",
            "parent_title": "睫毛膏"
        },
        {
            "id": 17,
            "slug": "deleniti-doloribus",
            "title": "BB霜",
            "title_en": "et distinctio aliquid",
            "describe": "Quod voluptatem perspiciatis beatae consequatur quo. Est cumque earum id ut reiciendis. Nisi dolor odio dignissimos sint ipsum fugit adipisci amet. Minus labore iure ea quibusdam delectus.",
            "describe_en": "Illo qui reiciendis quisquam. Et aut corporis alias quo quaerat praesentium quasi. Et nisi nulla et eius esse.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?58207",
            "description": "Non suscipit est a.",
            "description_en": "Amet fugiat laborum distinctio magni minus quae.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?10859",
            "parent_id": 6,
            "created_at": "2020-08-06 22:04:14",
            "updated_at": "2020-07-31 15:28:50",
            "parent_title": "睫毛膏"
        },
        {
            "id": 18,
            "slug": "voluptas-voluptate",
            "title": "卸妆",
            "title_en": "id vel non",
            "describe": "Id voluptas qui a dolores impedit. Repellendus neque aut quia minima. Esse qui est quam quas earum laborum consequatur.",
            "describe_en": "Consectetur velit inventore tempore labore. Est sit aperiam inventore. Est quis incidunt dicta similique nostrum ex at.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?55918",
            "description": "Quia minima aperiam a rerum tempora.",
            "description_en": "Numquam quis repudiandae nihil molestias molestias.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?80557",
            "parent_id": 4,
            "created_at": "2020-07-22 16:12:03",
            "updated_at": "2020-07-22 06:01:32",
            "parent_title": "爽肤水"
        },
        {
            "id": 19,
            "slug": "quas-natus",
            "title": "彩妆盘",
            "title_en": "dolorum impedit magnam",
            "describe": "Doloremque eum delectus porro nihil sit quaerat. Est neque asperiores aliquam quo sint. Porro ut et sint minima iure fugit qui.",
            "describe_en": "Dolores voluptatem accusantium nostrum ea sed. Quo voluptate aut sit ut odit.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?66354",
            "description": "Quaerat dolor sunt non quo.",
            "description_en": "Veritatis quia assumenda pariatur.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?36892",
            "parent_id": 20,
            "created_at": "2020-07-13 18:25:30",
            "updated_at": "2020-07-27 18:45:39",
            "parent_title": "面霜"
        },
        {
            "id": 20,
            "slug": "voluptatem-nobis",
            "title": "面霜",
            "title_en": "sequi consequatur aut",
            "describe": "Voluptatem laboriosam rerum non perferendis necessitatibus dolore. Architecto incidunt atque quo distinctio aut. Hic qui ab sit. Enim qui impedit repellendus distinctio nisi cum nemo iure.",
            "describe_en": "Ea repellat velit maxime blanditiis placeat qui. Alias voluptatibus aut consequatur minus quae laudantium in. Ex aspernatur accusantium aut.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?58979",
            "description": "Itaque voluptas numquam sunt porro illo blanditiis.",
            "description_en": "Est vitae et ipsa.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?29166",
            "parent_id": 3,
            "created_at": "2020-08-01 01:57:58",
            "updated_at": "2020-07-18 17:34:11",
            "parent_title": "精油"
        }
    ],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product_category`


<!-- END_eb9c398471efceb42098dee938d34a4f -->

<!-- START_dc538d69a8586a7a3c36d4393cee42e6 -->
## Get product list
获取商品列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "product_category_id": 7,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "deleniti et est",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69130",
                "slug": "repellendus-aut",
                "short_description": "Quaerat necessitatibus autem sint sed est illum.",
                "short_description_en": "Et repellat sint et eum consequatur. Minima voluptates et quia maiores repudiandae nobis. Voluptas et unde qui iusto. Possimus dolorum eos et accusamus harum reprehenderit aut.",
                "price": "2365.00",
                "sale_price": "4925.00",
                "stock": 935,
                "spec": null,
                "seo_title": "aperiam qui consequatur",
                "seo_keyword": "numquam",
                "seo_description": "Tempore facilis quasi aut.",
                "benefit": "Debitis ex architecto aut vel cum dolorem. Deleniti est velit qui aliquid qui aut.",
                "benefit_en": "A eos architecto ab error aspernatur ut sit non. Aspernatur dolorem qui consequatur.",
                "tech_description": "Est omnis quo aliquid ad sit perspiciatis amet. Culpa velit temporibus id voluptatem sapiente.",
                "tech_description_en": "Nemo quo eum sit dolorum nihil. Rerum repellat aliquam est aliquid aliquid et. Voluptatem fuga dolores sint nisi neque et blanditiis maiores. Deleniti animi omnis dolore pariatur blanditiis.",
                "description": "Sint aut perferendis non error. Unde odit autem quod a. Veniam aut ipsum nam quasi doloremque.",
                "description_en": "Voluptas et odit recusandae et quia adipisci. Aliquid et omnis molestiae saepe enim eligendi. Ullam possimus accusantium numquam eligendi placeat. Expedita voluptatem nisi labore ut hic aut.",
                "usage": "Et asperiores repudiandae et quos magnam dignissimos ut. Minima nisi nemo molestiae cupiditate fugit iure.",
                "usage_en": "Eos quaerat dolor voluptas natus amet enim consequatur. Tenetur tempora labore eligendi. Expedita ipsam aliquid adipisci pariatur molestias dolores qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?86701",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?74599",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?57522",
                "product_video": null,
                "status": "新品",
                "rating": 8.74,
                "sold_count": 9752,
                "review_count": 4911,
                "created_at": "2020-07-30 03:50:14",
                "updated_at": "2020-07-12 01:54:16",
                "product_category": {
                    "id": 7,
                    "slug": "nihil-incidunt",
                    "title": "腮红",
                    "title_en": "et nemo perferendis",
                    "describe": "Atque sunt odio consectetur. Doloremque distinctio fuga perspiciatis. A accusamus voluptatem modi qui in rerum dolor.",
                    "describe_en": "Ea quo rerum molestias. Repudiandae nihil commodi illo doloremque. Odit ut eum tenetur quo quaerat. Sint et tempora alias facere sapiente adipisci.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?80380",
                    "description": "Sunt vitae perferendis omnis consequatur voluptatum praesentium.",
                    "description_en": "Repudiandae ratione debitis officiis tenetur rem sit.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?25826",
                    "parent_id": 13,
                    "created_at": "2020-07-13 05:35:05",
                    "updated_at": "2020-07-28 11:45:32"
                }
            },
            {
                "id": 2,
                "product_category_id": 19,
                "product_name": "钻石焕活面膜",
                "product_name_en": "asperiores quam beatae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?31734",
                "slug": "possimus-libero",
                "short_description": "Ut eos sint molestiae explicabo qui.",
                "short_description_en": "Quis maxime nostrum quasi et. Eum dolores repellendus architecto ea aliquam sint.",
                "price": "5433.00",
                "sale_price": "3213.00",
                "stock": 989,
                "spec": null,
                "seo_title": "quidem doloribus reprehenderit",
                "seo_keyword": "laboriosam",
                "seo_description": "Veritatis quas culpa aut.",
                "benefit": "Sunt reiciendis aperiam inventore repudiandae. Quam quia alias est voluptas eum est.",
                "benefit_en": "Pariatur delectus illum modi fuga et voluptatem. Deleniti quaerat qui fugit aperiam similique numquam. Autem esse rem sed odit labore culpa. Iste possimus deserunt non quis est sed nihil.",
                "tech_description": "Quam corporis rerum vitae. Optio qui aliquam deleniti voluptatem rerum voluptate ducimus perferendis. Quos aut voluptas aut et. Expedita repellat sed sit dolore id quas quidem. Error explicabo commodi neque unde.",
                "tech_description_en": "Eos rerum nihil cum corporis. Facilis expedita soluta voluptatem velit. Id fugiat excepturi animi amet eos. Nihil recusandae officiis ullam accusamus quo.",
                "description": "Doloremque dolores iste voluptatem alias quidem aliquam id. Voluptas blanditiis et iusto quia aliquam qui est. Molestias omnis et quibusdam nihil dolorem quos. Et eaque labore impedit esse id perspiciatis nihil.",
                "description_en": "Soluta odit libero autem illo nisi. Est enim quia ut voluptatem necessitatibus. Omnis rerum est quia officia eaque.",
                "usage": "Impedit dolorem temporibus nisi nostrum vero voluptatibus magni. Fugit enim blanditiis voluptate aut sed. Magnam perferendis sed et qui reprehenderit.",
                "usage_en": "Itaque alias ullam perferendis dolores deserunt qui molestiae. Incidunt voluptatum voluptas aut itaque. Aut corporis neque cumque. Recusandae delectus ea et libero quo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?96902",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?50215",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?68175",
                "product_video": null,
                "status": "畅销",
                "rating": 2.13,
                "sold_count": 8083,
                "review_count": 5487,
                "created_at": "2020-07-18 13:32:07",
                "updated_at": "2020-07-17 09:41:12",
                "product_category": {
                    "id": 19,
                    "slug": "quas-natus",
                    "title": "彩妆盘",
                    "title_en": "dolorum impedit magnam",
                    "describe": "Doloremque eum delectus porro nihil sit quaerat. Est neque asperiores aliquam quo sint. Porro ut et sint minima iure fugit qui.",
                    "describe_en": "Dolores voluptatem accusantium nostrum ea sed. Quo voluptate aut sit ut odit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?66354",
                    "description": "Quaerat dolor sunt non quo.",
                    "description_en": "Veritatis quia assumenda pariatur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?36892",
                    "parent_id": 20,
                    "created_at": "2020-07-13 18:25:30",
                    "updated_at": "2020-07-27 18:45:39"
                }
            },
            {
                "id": 3,
                "product_category_id": 6,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "quos culpa quis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?13643",
                "slug": "praesentium-beatae",
                "short_description": "Voluptatem sed voluptas sequi nisi et.",
                "short_description_en": "Qui non in odio aut. Ut ex consequuntur excepturi. Et eius iusto facilis et at quas ad. Rerum animi soluta eligendi commodi ut est doloribus.",
                "price": "1815.00",
                "sale_price": "4141.00",
                "stock": 78,
                "spec": null,
                "seo_title": "autem et magni",
                "seo_keyword": "exercitationem",
                "seo_description": "Sint minus fugiat labore quam.",
                "benefit": "Dolor veniam aut aliquam odio ut quia molestiae. Id ut iure ut quas saepe. Aliquid voluptas velit ut.",
                "benefit_en": "Facilis veniam illum quas iusto omnis ducimus omnis. Vitae et adipisci reprehenderit error excepturi. Et rerum quas maiores recusandae.",
                "tech_description": "Esse aut est est est eos qui ipsam. Suscipit itaque officia ut. Qui iusto et alias.",
                "tech_description_en": "Alias porro possimus a non labore iste praesentium. Ullam in veritatis soluta voluptatem placeat. Qui porro aut maiores itaque voluptatem qui.",
                "description": "Ea sed impedit dicta officiis. Dignissimos suscipit repellat tempora soluta autem.",
                "description_en": "Sed omnis perferendis facere id vel iusto. Non ut esse quis aut ut explicabo incidunt. Alias et beatae rerum nam quidem alias sint.",
                "usage": "Sit aut voluptatem tenetur sint quia fugit. Rerum nisi quam delectus quis doloribus. Quaerat voluptate quidem dicta praesentium consequatur consequatur. Aut sed velit numquam dolor repudiandae repellendus.",
                "usage_en": "Quas labore voluptatem illum dolorem velit consequatur fuga. Voluptatem consequatur odit repellat. Veritatis omnis perferendis ducimus perspiciatis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?98607",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42498",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?25116",
                "product_video": null,
                "status": "畅销",
                "rating": 8.46,
                "sold_count": 5179,
                "review_count": 1495,
                "created_at": "2020-08-09 19:26:08",
                "updated_at": "2020-07-16 22:33:51",
                "product_category": {
                    "id": 6,
                    "slug": "voluptatem-et",
                    "title": "睫毛膏",
                    "title_en": "totam neque nulla",
                    "describe": "Itaque ratione et odio odio odio laboriosam est. Mollitia aut corporis rem quisquam. Eum at ut qui saepe quae. Ab quis rerum ratione sint autem ea.",
                    "describe_en": "Atque eos nulla sed est doloribus ea exercitationem. Perspiciatis deleniti rerum delectus. Eos amet eius eligendi error iste et sed.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?30608",
                    "description": "Ullam laudantium est impedit esse.",
                    "description_en": "Quo facilis ipsam dolore ad dolores sapiente.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?75284",
                    "parent_id": 3,
                    "created_at": "2020-08-07 09:13:20",
                    "updated_at": "2020-08-07 09:38:54"
                }
            },
            {
                "id": 4,
                "product_category_id": 2,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "quia iusto sed",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?16817",
                "slug": "voluptas-error",
                "short_description": "Perferendis quasi nihil molestiae.",
                "short_description_en": "Adipisci porro et occaecati optio illum est. Animi quis est voluptatem et.",
                "price": "9628.00",
                "sale_price": "359.00",
                "stock": 474,
                "spec": null,
                "seo_title": "quod in doloremque",
                "seo_keyword": "exercitationem",
                "seo_description": "Sit ea optio officia reprehenderit iste.",
                "benefit": "Nam sed tenetur est est. A quo odit autem velit dolor. Sunt sapiente suscipit consequuntur illum explicabo impedit.",
                "benefit_en": "Occaecati vel quae ab nesciunt. Reiciendis distinctio omnis voluptatem perspiciatis natus architecto magnam. Rerum mollitia earum magnam veniam in. Officia earum iusto provident qui.",
                "tech_description": "Occaecati quos magni repellat aut. Sed numquam non consectetur ducimus est est.",
                "tech_description_en": "Placeat doloribus nihil et voluptatem et. Vel assumenda vitae aspernatur soluta. Quia non laudantium blanditiis unde expedita in porro qui. Esse animi harum quos laborum molestiae nulla deserunt. Reiciendis id quis exercitationem facilis nesciunt deserunt sunt.",
                "description": "Debitis nostrum rerum non illum. Ipsa modi omnis voluptas corporis. Necessitatibus pariatur dolorum ut quos itaque expedita. Consequuntur quas et inventore sit necessitatibus eaque.",
                "description_en": "Tempore ullam reiciendis voluptatem labore eius quo. Quis fuga soluta odit ut reprehenderit nam est. Ea non eum ea quia iusto.",
                "usage": "Sed esse et est quis. Sit soluta odio aperiam. Voluptatem neque qui quia voluptatem et odio dignissimos. Officia quisquam maxime sed sint aut aliquam. Quia enim maiores excepturi doloribus rerum mollitia mollitia.",
                "usage_en": "Corrupti aut eveniet cupiditate illo veniam doloremque. Similique sed deleniti non quis suscipit vitae nisi possimus. Ut earum nostrum qui non enim dolorum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?16504",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?12391",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83336",
                "product_video": null,
                "status": "促销",
                "rating": 2.58,
                "sold_count": 7079,
                "review_count": 2328,
                "created_at": "2020-08-06 22:54:09",
                "updated_at": "2020-07-20 12:41:42",
                "product_category": {
                    "id": 2,
                    "slug": "amet-dolores",
                    "title": "睫毛膏",
                    "title_en": "nam voluptatibus et",
                    "describe": "Nihil error nesciunt voluptatum qui iste. Laborum rem voluptatibus reprehenderit quaerat accusamus. Vel quaerat atque non iste quia quia expedita.",
                    "describe_en": "Omnis ipsa eaque doloremque consequatur ad aliquam. Officiis ex enim praesentium exercitationem aut. Optio repudiandae ea deserunt omnis qui et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?79931",
                    "description": "Adipisci ipsa et mollitia optio.",
                    "description_en": "Molestiae iure voluptatum et.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?84432",
                    "parent_id": 20,
                    "created_at": "2020-08-01 07:48:25",
                    "updated_at": "2020-07-18 14:26:45"
                }
            },
            {
                "id": 5,
                "product_category_id": 14,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "atque assumenda vero",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?22892",
                "slug": "odit-facilis",
                "short_description": "Quaerat velit recusandae repellat nesciunt.",
                "short_description_en": "Rem ratione ut delectus ut. Vel ut ipsa qui ut. Debitis enim numquam alias voluptatem aliquam qui. Fugiat natus iure voluptatem pariatur eaque.",
                "price": "3456.00",
                "sale_price": "9724.00",
                "stock": 543,
                "spec": null,
                "seo_title": "ab officia eaque",
                "seo_keyword": "iusto",
                "seo_description": "Officia voluptatum est mollitia delectus.",
                "benefit": "Delectus tempore incidunt et aliquam est eos exercitationem. Laudantium voluptatem aspernatur velit odit labore. Necessitatibus et doloribus veritatis neque nobis aut numquam doloremque. Repellat facilis modi sit a minima optio cumque delectus.",
                "benefit_en": "Hic numquam ipsa officia odit. Quae reprehenderit sint qui doloremque repellat et et provident. Eveniet consequatur et provident quia magnam. Voluptas eum odit dignissimos qui nesciunt aut.",
                "tech_description": "Dolorem maiores est repellendus harum sit. Animi sequi veniam aliquid nulla voluptatem. Quo molestiae voluptas enim velit dolorum. Quisquam illum voluptas explicabo ullam commodi accusantium.",
                "tech_description_en": "Debitis cupiditate expedita quaerat sint accusamus omnis. Inventore esse et enim optio ea. Asperiores architecto ea quis eaque numquam. Necessitatibus et nihil nobis commodi. Corporis qui quo quia.",
                "description": "Mollitia occaecati eligendi veniam quos. Earum incidunt rerum qui eveniet non dolorum tenetur fugit. Hic ipsum ut omnis quisquam repellat ea.",
                "description_en": "Ipsum eligendi maxime est ut earum non. Adipisci mollitia nulla non iste vel error aut. Eaque sunt nam praesentium. Dolor perferendis recusandae ad.",
                "usage": "Quia ducimus totam est asperiores accusamus. Fugit sed ab et quo illum quaerat error.",
                "usage_en": "Asperiores sed id quaerat sint et molestiae sit. Qui dolorum error quis debitis repellendus nulla. Eaque odit aut et et maxime.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?75468",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?98362",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?48348",
                "product_video": null,
                "status": "促销",
                "rating": 6.6,
                "sold_count": 4825,
                "review_count": 8040,
                "created_at": "2020-07-23 10:57:48",
                "updated_at": "2020-07-16 14:44:08",
                "product_category": {
                    "id": 14,
                    "slug": "inventore-repellat",
                    "title": "腮红",
                    "title_en": "unde numquam commodi",
                    "describe": "Iusto praesentium possimus dolore perferendis possimus dicta. Quia rem nemo aliquid. Voluptates tempora doloremque molestiae adipisci qui.",
                    "describe_en": "Magni et consequuntur cupiditate sint occaecati aut nulla enim. Modi nihil incidunt perferendis sit cum. Et explicabo nesciunt id. Placeat nostrum neque consequuntur sint eaque aut alias.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?23332",
                    "description": "Sunt repudiandae sapiente est.",
                    "description_en": "Et nostrum neque dolorum rerum provident.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?96156",
                    "parent_id": 8,
                    "created_at": "2020-07-12 04:57:21",
                    "updated_at": "2020-07-15 08:25:41"
                }
            },
            {
                "id": 6,
                "product_category_id": 8,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "qui et in",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?34473",
                "slug": "est-reiciendis",
                "short_description": "Officiis ipsa quia corrupti.",
                "short_description_en": "Impedit est doloribus quis et voluptates excepturi. Doloribus est porro officiis magnam neque quod. Totam sint sunt quia quia nemo. Inventore reprehenderit molestiae numquam fugit.",
                "price": "2555.00",
                "sale_price": "4693.00",
                "stock": 601,
                "spec": null,
                "seo_title": "nam ex ipsa",
                "seo_keyword": "veritatis",
                "seo_description": "Est assumenda molestiae et et sit.",
                "benefit": "Et est quae et facere voluptas ducimus ipsum repellat. Est veniam rerum et dolorem totam. Quae rerum ut non autem sit et voluptatibus. Est autem voluptatem ut assumenda.",
                "benefit_en": "Illo autem odio rem voluptatem atque. Et exercitationem deserunt error sequi corrupti cupiditate deserunt. Blanditiis accusantium qui harum ut. Dolores facere error et nostrum quia.",
                "tech_description": "Magni ex illum quos. Minus ex ea nam consequatur enim enim explicabo voluptatibus. Recusandae est maxime aut repellat autem et voluptatibus dignissimos. Aut fugit beatae quasi molestias.",
                "tech_description_en": "Sit ipsam odit similique aut deserunt ut. Nemo voluptates alias facilis esse ut ratione.",
                "description": "Ut magni pariatur ullam aut consequatur sapiente aut distinctio. Qui sunt et quam ipsum delectus repellendus. In quo fuga ipsa temporibus consectetur tempore id. Eos quia possimus harum itaque ut. Odit ea expedita quis voluptatibus eum ut aut omnis.",
                "description_en": "Repellendus deserunt ullam sed quia. Odio occaecati eius quae neque rerum qui. Laborum atque aut voluptatem et.",
                "usage": "Ut qui minima nostrum suscipit commodi. Illo voluptatem voluptatem soluta esse. Quidem autem aliquam id nemo perferendis quis veniam.",
                "usage_en": "Molestiae voluptatibus quia eos maiores. Hic numquam et voluptatem tempore ab et. Sed doloremque consectetur vitae et commodi.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?57229",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?12002",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?28838",
                "product_video": null,
                "status": "新品",
                "rating": 7.07,
                "sold_count": 1907,
                "review_count": 6864,
                "created_at": "2020-07-22 14:41:39",
                "updated_at": "2020-08-11 13:04:05",
                "product_category": {
                    "id": 8,
                    "slug": "aliquam-cum",
                    "title": "腮红",
                    "title_en": "iure non et",
                    "describe": "Eveniet cupiditate quod praesentium molestiae. Qui voluptate voluptas tenetur nemo. Ut officia deleniti quisquam atque voluptates molestiae. Natus dolores eos nihil unde animi qui sed.",
                    "describe_en": "Ducimus perferendis id reiciendis consequatur cupiditate quae cumque. Occaecati sit fugiat et veritatis distinctio aut autem. Qui quo voluptatem nostrum impedit cumque magni.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?16490",
                    "description": "Eius quidem sed odio magnam fugiat.",
                    "description_en": "Delectus quia maxime occaecati sapiente blanditiis pariatur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?80541",
                    "parent_id": 20,
                    "created_at": "2020-07-31 22:12:28",
                    "updated_at": "2020-07-21 12:40:40"
                }
            },
            {
                "id": 7,
                "product_category_id": 13,
                "product_name": "黑钻肌光精华",
                "product_name_en": "repudiandae et voluptatibus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?15587",
                "slug": "itaque-magni",
                "short_description": "Aspernatur quisquam nisi et.",
                "short_description_en": "Ullam quia modi qui velit et. Quia neque illo eius voluptas sapiente. Optio culpa est officia non. Enim illo et voluptatem necessitatibus nemo.",
                "price": "6292.00",
                "sale_price": "5305.00",
                "stock": 210,
                "spec": null,
                "seo_title": "velit nemo rem",
                "seo_keyword": "est",
                "seo_description": "Atque aut voluptatem rerum soluta.",
                "benefit": "Quas explicabo qui provident ab. Occaecati soluta cupiditate reprehenderit fugiat voluptate. Placeat minima sint rerum similique. Recusandae odit magni minima nihil fugiat laborum.",
                "benefit_en": "Minus quas excepturi blanditiis. Voluptatem rerum autem dolorum cumque provident temporibus. Fugiat eligendi explicabo ut.",
                "tech_description": "Sed distinctio ut porro harum. Sed minima architecto voluptas vel. Porro recusandae eaque ipsum libero voluptatem. Qui dolorum fugit assumenda aperiam ea pariatur incidunt.",
                "tech_description_en": "Esse eos maiores aut quis. Veritatis fuga alias autem. Dicta sed molestiae voluptas vel nemo.",
                "description": "Est at ipsum qui atque nemo molestias at. Repellat voluptas laborum nemo id repellat dolores quaerat commodi. Exercitationem enim nihil et aut quo.",
                "description_en": "Excepturi ut adipisci omnis quia. Quo autem recusandae aut ut dolor vero quas. Quia occaecati ex nemo dolores ipsam cupiditate et. Ea quis aut est voluptatem magnam.",
                "usage": "Quia atque repellat quam ducimus. Ex dicta dignissimos quam eaque. Blanditiis optio cumque pariatur porro laboriosam. Fugiat unde omnis occaecati culpa exercitationem reiciendis fugiat.",
                "usage_en": "Et et a possimus rerum. Quos repudiandae aliquam sed assumenda corrupti quae provident. Ab asperiores excepturi tempore sunt.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?85912",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?32108",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?77672",
                "product_video": null,
                "status": "新品",
                "rating": 3.33,
                "sold_count": 8846,
                "review_count": 4197,
                "created_at": "2020-07-13 13:08:32",
                "updated_at": "2020-07-14 03:33:02",
                "product_category": {
                    "id": 13,
                    "slug": "voluptate-officia",
                    "title": "防晒",
                    "title_en": "pariatur perspiciatis quos",
                    "describe": "Quod corporis tempora magni sed rerum. Ullam doloribus ratione debitis dicta molestiae. Excepturi neque nisi omnis atque.",
                    "describe_en": "Sed quia harum consequuntur et repellendus eum. Quia earum dolor sunt rerum debitis corporis earum doloremque. Accusamus pariatur consequatur aperiam. Aliquid qui quidem est hic iure quia porro.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?66436",
                    "description": "Sint aut autem atque consequatur soluta culpa.",
                    "description_en": "Rerum quo tenetur et ullam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?84337",
                    "parent_id": 14,
                    "created_at": "2020-07-24 03:44:07",
                    "updated_at": "2020-07-14 16:20:59"
                }
            },
            {
                "id": 8,
                "product_category_id": 5,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "et nemo ipsum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54513",
                "slug": "quis-tempore",
                "short_description": "Esse assumenda repudiandae autem eos dolorem.",
                "short_description_en": "Aut est neque itaque architecto voluptas error dolorem ducimus. Perferendis delectus porro delectus sit non et repellat. Velit non possimus porro libero ipsa dignissimos. Aspernatur est possimus voluptate reiciendis nesciunt suscipit.",
                "price": "530.00",
                "sale_price": "3644.00",
                "stock": 356,
                "spec": null,
                "seo_title": "inventore laboriosam dolor",
                "seo_keyword": "repellat",
                "seo_description": "Vel amet dolor beatae officia.",
                "benefit": "Ut id ut eveniet natus consequatur qui. Accusantium illo cumque ex sed. Saepe et nemo et maiores aut.",
                "benefit_en": "Harum eius aut rem voluptatibus cupiditate consequatur veniam ratione. Eveniet est sed modi ullam. Saepe fugit placeat sed atque ut. Officia dolores explicabo non vel voluptatem et.",
                "tech_description": "Vel occaecati eos soluta sit reprehenderit voluptatum. Libero inventore suscipit ut et eum quasi doloribus. Voluptatem consequuntur hic at nemo. Omnis dolorem repudiandae architecto nulla voluptatum tenetur voluptatem. Ut ex cum excepturi ipsam aperiam.",
                "tech_description_en": "Aut pariatur et repellendus vitae eos quia delectus. Placeat sit quis sapiente soluta. Architecto praesentium ipsam dignissimos rerum commodi. Eligendi et aut eligendi maiores nam eligendi fugiat.",
                "description": "Enim aspernatur doloremque hic in. Iusto earum pariatur expedita earum atque vitae nisi.",
                "description_en": "Amet aut quae at sequi sunt voluptatem. Cupiditate maxime illo voluptatem in non natus. Et aut delectus recusandae porro qui assumenda possimus.",
                "usage": "Id similique harum sit iste. Non est qui minus ut nemo. Nam adipisci rerum et eveniet deleniti eius. Nostrum odio ut dolore eligendi dolorem.",
                "usage_en": "Dolorem quaerat sit ut eum aperiam dolor. Fuga nam similique est iure et rerum facere. Corporis numquam ipsa est et nobis dolor. Dolores reprehenderit quae et accusantium.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?51903",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?93894",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?51777",
                "product_video": null,
                "status": "新品",
                "rating": 7.59,
                "sold_count": 1702,
                "review_count": 1250,
                "created_at": "2020-08-06 05:14:55",
                "updated_at": "2020-08-08 03:20:17",
                "product_category": {
                    "id": 5,
                    "slug": "eligendi-provident",
                    "title": "身体护理",
                    "title_en": "assumenda officiis laboriosam",
                    "describe": "Qui vel recusandae minima aperiam quia et tempora. Et eius amet voluptas. Est cupiditate odio sunt magnam facilis placeat officiis.",
                    "describe_en": "Soluta beatae voluptas est et ut esse. Atque eaque nesciunt sed similique sed molestias et. Excepturi vitae veniam id quis commodi omnis. Temporibus quia et maxime cumque.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?66045",
                    "description": "Laudantium eos dolores soluta harum eveniet iure.",
                    "description_en": "Praesentium in officia laborum quis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?24170",
                    "parent_id": 5,
                    "created_at": "2020-08-06 21:55:33",
                    "updated_at": "2020-07-26 13:12:31"
                }
            },
            {
                "id": 9,
                "product_category_id": 4,
                "product_name": "钻石焕活面膜",
                "product_name_en": "non enim aut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?17750",
                "slug": "at-atque",
                "short_description": "Possimus accusamus et voluptas odit esse.",
                "short_description_en": "Dolore sed vel eveniet incidunt provident impedit. Deserunt repudiandae sed veritatis ratione exercitationem praesentium laboriosam.",
                "price": "816.00",
                "sale_price": "888.00",
                "stock": 278,
                "spec": null,
                "seo_title": "sapiente temporibus aut",
                "seo_keyword": "non",
                "seo_description": "Aliquid est dignissimos in debitis.",
                "benefit": "Facilis necessitatibus consequatur omnis rerum est enim dolore. Beatae nisi fuga deleniti ut consequatur quas doloribus perspiciatis. Est ratione quas pariatur repudiandae. Quia corporis quis labore nobis.",
                "benefit_en": "Impedit beatae est magnam temporibus. Officia explicabo ducimus ducimus omnis. Labore voluptate nesciunt maxime aspernatur.",
                "tech_description": "Accusamus ipsum et nesciunt numquam alias consequatur quasi. Dolor mollitia fugit qui. Ab porro sit dolor et earum.",
                "tech_description_en": "Omnis earum dicta rerum odit. Perferendis cupiditate iusto enim et inventore quo impedit est. Hic sed quia repellendus illo eligendi et nemo.",
                "description": "Cum dolorem alias aut vel. Beatae velit quisquam rerum necessitatibus sit sed. Quo iure eum rerum sit quam non eos.",
                "description_en": "Qui ex et rerum ut similique dignissimos. Velit ullam iure eius sunt. Ut recusandae id est at.",
                "usage": "Eveniet enim velit debitis sit tempora ut delectus. Omnis molestiae at ut laudantium. Nobis natus ipsam nostrum ratione et illum molestiae omnis.",
                "usage_en": "Et temporibus in delectus minima. Omnis amet minus aut qui. Et necessitatibus quia fugiat.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?30787",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?72780",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?46747",
                "product_video": null,
                "status": "新品",
                "rating": 6.2,
                "sold_count": 2686,
                "review_count": 4259,
                "created_at": "2020-07-14 15:33:13",
                "updated_at": "2020-08-03 18:18:29",
                "product_category": {
                    "id": 4,
                    "slug": "dolores-eligendi",
                    "title": "爽肤水",
                    "title_en": "eum officia et",
                    "describe": "Et non est eum quas. Voluptatem provident dolore est quos voluptatem impedit placeat. Quod ut in quo ipsa pariatur dolor. Laborum libero quia sunt temporibus.",
                    "describe_en": "Eum sit sunt molestiae voluptatem voluptatum. Voluptate quos a atque voluptas. Maxime provident reprehenderit reiciendis repellat. Eum qui nam voluptates error.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?97206",
                    "description": "Error earum qui id.",
                    "description_en": "A adipisci in sunt esse explicabo.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?96125",
                    "parent_id": 17,
                    "created_at": "2020-07-26 10:54:01",
                    "updated_at": "2020-08-08 19:06:55"
                }
            },
            {
                "id": 10,
                "product_category_id": 4,
                "product_name": "黑钻焕肤水",
                "product_name_en": "error ut tenetur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?28614",
                "slug": "quis-sit",
                "short_description": "Iusto illo vel et est magnam.",
                "short_description_en": "Accusantium blanditiis voluptatum et et sit ullam. Ad eligendi ex nihil natus molestias earum quia. Doloribus laboriosam et assumenda ut et.",
                "price": "6883.00",
                "sale_price": "7139.00",
                "stock": 952,
                "spec": null,
                "seo_title": "temporibus omnis id",
                "seo_keyword": "laudantium",
                "seo_description": "Mollitia aperiam fugit praesentium quam eaque voluptas.",
                "benefit": "Molestias omnis eos voluptatem velit eveniet distinctio magni. Facilis ut qui et et hic voluptates officia. Id voluptatem quasi ducimus et.",
                "benefit_en": "Aut at aut qui ratione quas doloribus dignissimos est. Vitae assumenda sed explicabo odio velit. Omnis et porro consequatur explicabo qui temporibus ipsam. Impedit alias sed et.",
                "tech_description": "Nisi et velit qui qui et temporibus. Neque vel voluptatum qui iure et. Fugiat iure maxime omnis officia. Eveniet ab eum nisi qui quaerat maxime itaque.",
                "tech_description_en": "Ut eaque tenetur minima quis et. Minima voluptatum qui dolores voluptatum exercitationem voluptates ipsa. Corporis est debitis sed doloribus amet qui ut.",
                "description": "Sed qui illum et sit explicabo dolores. Consequatur cum repellat sit molestias doloribus aut. Sit qui in consequatur excepturi dignissimos vero quia. Rem velit rerum expedita libero modi iure ratione.",
                "description_en": "Temporibus dolorem nihil eaque totam eius praesentium et. Voluptas autem quod quia iure. Consectetur aut qui ipsam est eos recusandae odio et.",
                "usage": "Id magnam assumenda corrupti aliquid id. Est ut labore autem suscipit. Voluptates deserunt omnis rerum rerum aut ut ut. Ea optio reiciendis veniam ipsum quis tempora.",
                "usage_en": "Accusamus ut explicabo qui deserunt qui. Veniam consectetur eveniet autem quidem. Suscipit quasi excepturi incidunt dolore consectetur itaque. Tempore nobis tempora vero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?35557",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?99889",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?67013",
                "product_video": null,
                "status": "新品",
                "rating": 6.51,
                "sold_count": 2221,
                "review_count": 5528,
                "created_at": "2020-08-06 21:01:47",
                "updated_at": "2020-08-07 19:30:37",
                "product_category": {
                    "id": 4,
                    "slug": "dolores-eligendi",
                    "title": "爽肤水",
                    "title_en": "eum officia et",
                    "describe": "Et non est eum quas. Voluptatem provident dolore est quos voluptatem impedit placeat. Quod ut in quo ipsa pariatur dolor. Laborum libero quia sunt temporibus.",
                    "describe_en": "Eum sit sunt molestiae voluptatem voluptatum. Voluptate quos a atque voluptas. Maxime provident reprehenderit reiciendis repellat. Eum qui nam voluptates error.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?97206",
                    "description": "Error earum qui id.",
                    "description_en": "A adipisci in sunt esse explicabo.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?96125",
                    "parent_id": 17,
                    "created_at": "2020-07-26 10:54:01",
                    "updated_at": "2020-08-08 19:06:55"
                }
            },
            {
                "id": 11,
                "product_category_id": 8,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "earum voluptas facere",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?89879",
                "slug": "amet-consequatur",
                "short_description": "Quasi temporibus vero amet repellat numquam.",
                "short_description_en": "Et nam quia culpa et. Omnis dolores nam illo consequatur dicta nostrum. Quis repellat nobis aut ut quo voluptas excepturi.",
                "price": "7191.00",
                "sale_price": "2734.00",
                "stock": 85,
                "spec": null,
                "seo_title": "et quaerat sunt",
                "seo_keyword": "a",
                "seo_description": "Quasi sint suscipit quisquam maxime sint et.",
                "benefit": "Hic occaecati sint et quo. Veritatis non adipisci voluptatum ut sit debitis magnam facilis. Voluptatem doloremque qui animi deserunt ipsa corporis. In aliquid libero quisquam suscipit est aut.",
                "benefit_en": "Ducimus aut et nostrum consequatur. Qui qui consequatur minima vel quae est non. Rem et culpa delectus voluptatem ut possimus repellat. Quae expedita doloremque quidem impedit qui ducimus.",
                "tech_description": "Sequi dolores aut ut et rerum pariatur officiis. Dolores repellat blanditiis suscipit dolores incidunt dolor nihil. Inventore dolores praesentium reprehenderit. Et natus vero ipsum tempora.",
                "tech_description_en": "Debitis nihil rerum in consequatur cumque quia earum. Iusto omnis aut repellendus. Aut laboriosam sit voluptatem consequuntur dolores ut. Est consectetur itaque voluptas voluptatem et magnam.",
                "description": "Qui et fugiat velit id eum et vero iusto. Rerum consequatur nisi fugit atque ex molestiae sint asperiores.",
                "description_en": "Esse delectus officia quis ut aut praesentium eos pariatur. Nesciunt modi libero a in eius. Accusantium itaque aut odit aliquam sit quo ratione repellendus.",
                "usage": "Tenetur suscipit similique voluptatem laudantium maxime ut. Natus dolorum minima aperiam et ratione voluptate qui et. Provident assumenda nihil quos sint optio et fugiat.",
                "usage_en": "Odio ratione minus quisquam rem ex. Voluptatum labore illo ut nobis sint. Rerum nobis rerum delectus voluptatem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?74705",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?92252",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?86784",
                "product_video": null,
                "status": "促销",
                "rating": 2.4,
                "sold_count": 3904,
                "review_count": 8067,
                "created_at": "2020-07-13 20:36:52",
                "updated_at": "2020-07-31 13:21:38",
                "product_category": {
                    "id": 8,
                    "slug": "aliquam-cum",
                    "title": "腮红",
                    "title_en": "iure non et",
                    "describe": "Eveniet cupiditate quod praesentium molestiae. Qui voluptate voluptas tenetur nemo. Ut officia deleniti quisquam atque voluptates molestiae. Natus dolores eos nihil unde animi qui sed.",
                    "describe_en": "Ducimus perferendis id reiciendis consequatur cupiditate quae cumque. Occaecati sit fugiat et veritatis distinctio aut autem. Qui quo voluptatem nostrum impedit cumque magni.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?16490",
                    "description": "Eius quidem sed odio magnam fugiat.",
                    "description_en": "Delectus quia maxime occaecati sapiente blanditiis pariatur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?80541",
                    "parent_id": 20,
                    "created_at": "2020-07-31 22:12:28",
                    "updated_at": "2020-07-21 12:40:40"
                }
            },
            {
                "id": 12,
                "product_category_id": 19,
                "product_name": "黑钻肌光精华",
                "product_name_en": "necessitatibus perspiciatis in",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?58959",
                "slug": "voluptatem-fugit",
                "short_description": "Officia tempore repellendus architecto.",
                "short_description_en": "Facere sit autem voluptatem impedit porro. Cumque dolore facere nobis eos placeat. Nobis id est accusamus esse dolor ea repellat laboriosam.",
                "price": "691.00",
                "sale_price": "5900.00",
                "stock": 465,
                "spec": null,
                "seo_title": "enim aut et",
                "seo_keyword": "explicabo",
                "seo_description": "Quia neque molestiae necessitatibus qui eum.",
                "benefit": "Eveniet blanditiis enim occaecati recusandae. Voluptates quae fugit aut. Odit nisi quidem aperiam ut eveniet alias amet voluptas. Et ratione nihil voluptatem ipsum asperiores cupiditate.",
                "benefit_en": "Sunt reprehenderit voluptatem aliquam similique in eos incidunt. Provident voluptatem aliquam illum et sed sint sint. Voluptates itaque non voluptatibus sed enim occaecati.",
                "tech_description": "Autem modi eos distinctio et. Recusandae magnam accusamus adipisci incidunt nostrum possimus voluptas laudantium. Voluptatibus esse at possimus ab veritatis.",
                "tech_description_en": "Perferendis reiciendis nisi quia repellat tenetur eum. Placeat et nulla quae fugiat quia blanditiis. Quos ut vel porro error eos quo.",
                "description": "Eaque atque rerum amet atque beatae corporis. Harum voluptatem culpa est neque. Qui maxime qui tempore quia maiores quae aut. Vel repellat quo ad atque.",
                "description_en": "Maxime nemo esse quaerat molestiae quaerat. Ut modi veniam officia veritatis corrupti nostrum. Voluptates rerum libero qui et fugiat architecto est eos. Fugit reiciendis eius nobis non harum rem.",
                "usage": "Qui odio est inventore reprehenderit eligendi eum consequatur voluptate. Aut perferendis aliquid eligendi voluptatum.",
                "usage_en": "Neque praesentium et excepturi ut. Sed quaerat sunt aut maiores numquam ea. Cumque earum provident qui a tenetur. Cumque harum voluptatem sint quia vel quia libero.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?53578",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?35960",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?66933",
                "product_video": null,
                "status": "新品",
                "rating": 9.15,
                "sold_count": 6529,
                "review_count": 5513,
                "created_at": "2020-07-17 19:31:54",
                "updated_at": "2020-08-09 05:58:52",
                "product_category": {
                    "id": 19,
                    "slug": "quas-natus",
                    "title": "彩妆盘",
                    "title_en": "dolorum impedit magnam",
                    "describe": "Doloremque eum delectus porro nihil sit quaerat. Est neque asperiores aliquam quo sint. Porro ut et sint minima iure fugit qui.",
                    "describe_en": "Dolores voluptatem accusantium nostrum ea sed. Quo voluptate aut sit ut odit.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?66354",
                    "description": "Quaerat dolor sunt non quo.",
                    "description_en": "Veritatis quia assumenda pariatur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?36892",
                    "parent_id": 20,
                    "created_at": "2020-07-13 18:25:30",
                    "updated_at": "2020-07-27 18:45:39"
                }
            },
            {
                "id": 13,
                "product_category_id": 20,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "adipisci qui laborum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?41502",
                "slug": "neque-delectus",
                "short_description": "Ex qui qui voluptatibus dolorem consequatur.",
                "short_description_en": "Earum blanditiis possimus consectetur blanditiis sed ut vel pariatur. Id recusandae atque ipsam illum quo. Optio ex eos adipisci aut autem.",
                "price": "8923.00",
                "sale_price": "6512.00",
                "stock": 659,
                "spec": null,
                "seo_title": "voluptas suscipit harum",
                "seo_keyword": "eos",
                "seo_description": "Et ipsam repellat qui atque aut.",
                "benefit": "Aut dolores atque incidunt ut voluptas veniam. Sunt est consequuntur aspernatur provident atque. Alias tempore fugiat excepturi rem labore possimus. Eos quia enim corrupti ullam quos repellat. Ex ut tenetur consequatur nulla voluptatibus.",
                "benefit_en": "Voluptatum illum omnis omnis consequatur et saepe omnis. Tempore magni nobis minima dolorem neque ex qui. Modi nulla minima quidem et sequi voluptas. Enim dignissimos qui veritatis doloremque.",
                "tech_description": "Ipsum quod fugit itaque maiores natus hic. Itaque a consequatur quos blanditiis. Ut aut sint recusandae distinctio amet tenetur.",
                "tech_description_en": "Aliquid nesciunt voluptatem doloremque facilis qui deserunt quia natus. Harum laboriosam non voluptatem et numquam. Qui ea sunt voluptas voluptate. Eos ea velit quasi laboriosam.",
                "description": "Vel doloremque consequatur sequi asperiores et deleniti maiores. Consequatur qui ea hic perferendis esse ad illum.",
                "description_en": "Quas aliquam laboriosam qui vitae. Sit ex ea aliquam sed ratione et. Quia numquam officia eligendi enim.",
                "usage": "Culpa voluptate dolore laborum officiis ut inventore perferendis impedit. Et voluptas tempora occaecati quos error sed saepe. Quo quia iure eius accusantium ex et ex. Odio explicabo sed minus. Eveniet fugit porro illo sit sit aliquid quaerat.",
                "usage_en": "Non repudiandae deleniti pariatur. Harum quaerat qui provident rerum pariatur.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?73724",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?45301",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?80700",
                "product_video": null,
                "status": "畅销",
                "rating": 7.33,
                "sold_count": 6462,
                "review_count": 7952,
                "created_at": "2020-07-21 14:24:48",
                "updated_at": "2020-07-18 15:07:19",
                "product_category": {
                    "id": 20,
                    "slug": "voluptatem-nobis",
                    "title": "面霜",
                    "title_en": "sequi consequatur aut",
                    "describe": "Voluptatem laboriosam rerum non perferendis necessitatibus dolore. Architecto incidunt atque quo distinctio aut. Hic qui ab sit. Enim qui impedit repellendus distinctio nisi cum nemo iure.",
                    "describe_en": "Ea repellat velit maxime blanditiis placeat qui. Alias voluptatibus aut consequatur minus quae laudantium in. Ex aspernatur accusantium aut.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58979",
                    "description": "Itaque voluptas numquam sunt porro illo blanditiis.",
                    "description_en": "Est vitae et ipsa.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?29166",
                    "parent_id": 3,
                    "created_at": "2020-08-01 01:57:58",
                    "updated_at": "2020-07-18 17:34:11"
                }
            },
            {
                "id": 14,
                "product_category_id": 20,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "praesentium amet rem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?66450",
                "slug": "amet-est",
                "short_description": "Vitae aut ex eveniet quidem voluptatibus est.",
                "short_description_en": "Quia et est dolor qui amet cum accusantium. Nemo est autem eaque est. Rerum et numquam sint. Eius nulla blanditiis molestiae quia autem.",
                "price": "8491.00",
                "sale_price": "516.00",
                "stock": 808,
                "spec": null,
                "seo_title": "vitae sit maxime",
                "seo_keyword": "animi",
                "seo_description": "Accusantium iste quae sunt.",
                "benefit": "Possimus dicta laboriosam mollitia nihil magnam voluptatem dolorem. Explicabo cum aut blanditiis voluptatem eaque dolore enim. Aut voluptas in nihil eum.",
                "benefit_en": "Suscipit magnam veritatis corporis tempora. Distinctio et et est vel. Dolorum quo nihil tempore fugit voluptatibus delectus aut eius.",
                "tech_description": "Dicta unde enim doloribus est voluptatem voluptatibus. Adipisci adipisci ullam quis ut ut. Cumque est et a necessitatibus ut. Nobis magnam quam mollitia facere. Modi dicta iusto illo soluta.",
                "tech_description_en": "Repellat aut maxime mollitia sit dicta. Odit labore architecto commodi laborum voluptatum accusantium amet. Quia suscipit tenetur ipsum nisi quasi omnis.",
                "description": "Illo porro dolor quidem sint minus provident quia vel. Magnam excepturi velit similique. Quidem earum dolor soluta labore magnam voluptates vel et.",
                "description_en": "Quaerat aut inventore natus officia eos ullam eos. Nulla similique aliquid totam facere eos minima velit. Mollitia blanditiis voluptatibus quis voluptatibus in sapiente ea. Eius quia rem omnis temporibus neque.",
                "usage": "Repellat et voluptas aut at. Omnis cumque alias et provident nihil quia laboriosam. In explicabo deserunt magnam quibusdam animi est nulla. Blanditiis ad nihil sit labore.",
                "usage_en": "Expedita et nesciunt omnis tempora reprehenderit est totam recusandae. Eum aut totam voluptatum eos.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?53699",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?14274",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?62714",
                "product_video": null,
                "status": "促销",
                "rating": 3.59,
                "sold_count": 5277,
                "review_count": 6506,
                "created_at": "2020-08-04 02:56:58",
                "updated_at": "2020-07-20 16:36:31",
                "product_category": {
                    "id": 20,
                    "slug": "voluptatem-nobis",
                    "title": "面霜",
                    "title_en": "sequi consequatur aut",
                    "describe": "Voluptatem laboriosam rerum non perferendis necessitatibus dolore. Architecto incidunt atque quo distinctio aut. Hic qui ab sit. Enim qui impedit repellendus distinctio nisi cum nemo iure.",
                    "describe_en": "Ea repellat velit maxime blanditiis placeat qui. Alias voluptatibus aut consequatur minus quae laudantium in. Ex aspernatur accusantium aut.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?58979",
                    "description": "Itaque voluptas numquam sunt porro illo blanditiis.",
                    "description_en": "Est vitae et ipsa.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?29166",
                    "parent_id": 3,
                    "created_at": "2020-08-01 01:57:58",
                    "updated_at": "2020-07-18 17:34:11"
                }
            },
            {
                "id": 15,
                "product_category_id": 3,
                "product_name": "钻石焕活面膜",
                "product_name_en": "voluptatem architecto consequatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?64854",
                "slug": "est-voluptatem",
                "short_description": "Culpa qui odit quo repellendus tempora.",
                "short_description_en": "Pariatur quas rerum esse magnam. Quos rerum sed ullam quis nihil. Quo amet dolorem autem inventore id minima.",
                "price": "4343.00",
                "sale_price": "3737.00",
                "stock": 941,
                "spec": null,
                "seo_title": "et reprehenderit ut",
                "seo_keyword": "a",
                "seo_description": "Non cupiditate nihil vitae sint est.",
                "benefit": "Praesentium soluta aut eius qui atque ullam. Sed numquam eligendi et nobis repudiandae et. Aut quaerat deleniti cum mollitia quos dolorem enim.",
                "benefit_en": "Maiores ullam enim et et suscipit ea. Officia repudiandae dolorem qui. Quas ea quis veniam. Corporis dicta odio omnis esse inventore.",
                "tech_description": "Dolores sunt omnis ipsa est. Veritatis suscipit ratione quasi non qui. Perspiciatis repellendus ratione itaque maiores.",
                "tech_description_en": "Ut in omnis eos id libero ut sint accusantium. Rem ad facere qui minima. Voluptas odit voluptatem vel.",
                "description": "Esse aut similique veniam quod. Quisquam nam eius et dolore enim. Non praesentium est veritatis et facilis beatae. Nam tenetur dolorum qui quidem fugiat aut.",
                "description_en": "Ut qui doloribus occaecati et et. Numquam aut sit modi ipsam velit ea quidem. Quia distinctio est voluptatem molestias et praesentium. Eum aut dicta quaerat corrupti perferendis. Ea quaerat dolores tenetur repellat.",
                "usage": "Ut suscipit autem et cumque. Natus rerum ea et sapiente explicabo. Esse cumque qui dolores quae et assumenda nobis exercitationem.",
                "usage_en": "Ea doloribus eveniet inventore fugit nostrum qui. Vero est id omnis eos culpa laboriosam. Dignissimos aperiam neque et voluptate. Vel nobis est in cumque aut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?84629",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?68352",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?82294",
                "product_video": null,
                "status": "畅销",
                "rating": 7,
                "sold_count": 9142,
                "review_count": 7658,
                "created_at": "2020-08-02 22:26:24",
                "updated_at": "2020-07-31 18:37:46",
                "product_category": {
                    "id": 3,
                    "slug": "et-architecto",
                    "title": "精油",
                    "title_en": "animi occaecati ducimus",
                    "describe": "Rem est ab quam eum. Possimus rem soluta eius.",
                    "describe_en": "Enim non eligendi dolor unde cupiditate ad quia dolore. Eligendi sit eveniet modi repudiandae.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?38360",
                    "description": "Praesentium placeat facere reprehenderit temporibus.",
                    "description_en": "Beatae at quaerat quasi voluptatem deserunt animi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?58209",
                    "parent_id": 16,
                    "created_at": "2020-07-28 11:44:46",
                    "updated_at": "2020-08-11 11:36:48"
                }
            },
            {
                "id": 16,
                "product_category_id": 9,
                "product_name": "黑钻肌光精华",
                "product_name_en": "perferendis voluptas ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?69258",
                "slug": "est-quos",
                "short_description": "Voluptates sint incidunt nisi dolor.",
                "short_description_en": "Et debitis hic quod ratione laborum. Porro eos sunt ea impedit in amet alias. Molestiae quos sunt ea molestiae ad. Quaerat assumenda eum delectus consequatur blanditiis perferendis fugiat tempore.",
                "price": "9026.00",
                "sale_price": "7724.00",
                "stock": 872,
                "spec": null,
                "seo_title": "autem dignissimos dolores",
                "seo_keyword": "modi",
                "seo_description": "Nostrum nesciunt provident commodi quia.",
                "benefit": "Ut inventore architecto molestiae vel. Voluptas quibusdam ea nisi non consequatur fuga suscipit. Temporibus qui qui enim rerum adipisci.",
                "benefit_en": "Deserunt tempora esse velit dolorem. Cupiditate ex non nesciunt earum nihil. Quidem sint non assumenda sed minus. In recusandae nostrum aut sit non et et.",
                "tech_description": "Ut commodi quas voluptate eum quisquam et quia voluptatibus. In suscipit aut adipisci id atque est. Quia esse dolore est temporibus est.",
                "tech_description_en": "Dolor numquam accusantium id voluptatem sed. Provident provident ratione sunt placeat. Maxime velit sit consequuntur omnis corrupti.",
                "description": "Dolor autem consequuntur dolore blanditiis modi eos. Dolores illum pariatur facilis. Quidem modi sint amet vel provident. Aut nemo rem autem voluptates id officiis reiciendis.",
                "description_en": "Est dolores quas reiciendis sit quibusdam eum. Et magni ducimus facilis beatae sint inventore in. Voluptatem perferendis iusto reprehenderit nihil. Dolore aut eos qui voluptates.",
                "usage": "Quaerat ratione culpa autem. Debitis enim qui laborum ut expedita ea optio atque. Facere iure minima sequi veritatis.",
                "usage_en": "Facere et iste voluptatibus modi. Est enim incidunt voluptas aut alias et. Perferendis quisquam odit iure vel. Quibusdam eaque et ut laboriosam qui aut facilis voluptas.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?45439",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?34455",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?71726",
                "product_video": null,
                "status": "新品",
                "rating": 8.16,
                "sold_count": 3824,
                "review_count": 5779,
                "created_at": "2020-07-27 07:13:59",
                "updated_at": "2020-07-21 21:11:37",
                "product_category": {
                    "id": 9,
                    "slug": "labore-repudiandae",
                    "title": "腮红",
                    "title_en": "sapiente et id",
                    "describe": "Aut ullam magnam molestias consectetur. Eligendi ut fugit aut aut sunt quos. Quia quo atque error dolore voluptatibus.",
                    "describe_en": "Sit corrupti quos illum explicabo numquam vel consequatur. Consequuntur qui doloribus quia expedita rerum quos. Rem minus sed dolorem mollitia aspernatur voluptate.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?99094",
                    "description": "Provident assumenda quam aut placeat autem autem.",
                    "description_en": "Excepturi delectus quisquam et qui earum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?42753",
                    "parent_id": 7,
                    "created_at": "2020-08-09 17:15:23",
                    "updated_at": "2020-08-06 05:17:02"
                }
            },
            {
                "id": 17,
                "product_category_id": 8,
                "product_name": "黑钻肌光精华",
                "product_name_en": "blanditiis porro sequi",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?72020",
                "slug": "est-cum",
                "short_description": "Consequuntur accusantium adipisci odit similique culpa.",
                "short_description_en": "Non aut molestiae velit vero dolore labore eaque. Voluptas vitae at explicabo quia repellat nesciunt eaque. Voluptatem expedita enim facilis in ex. Qui accusamus autem quia repellat fugit consequatur nostrum. Expedita veritatis ipsam reiciendis distinctio provident explicabo.",
                "price": "9933.00",
                "sale_price": "4503.00",
                "stock": 310,
                "spec": null,
                "seo_title": "aliquid sunt eos",
                "seo_keyword": "magnam",
                "seo_description": "Totam labore earum illum perferendis ex esse.",
                "benefit": "Omnis minus optio voluptatum dicta et accusamus ipsam. Temporibus est porro et aut quo. Doloribus sit maxime quisquam. Magni et aut sit magnam.",
                "benefit_en": "Ducimus qui consequatur porro libero pariatur omnis vero. Non quod molestiae eos aut velit mollitia quos. Consequatur et aut doloremque voluptas.",
                "tech_description": "Sunt omnis qui ex veritatis. Ea minus occaecati dignissimos esse nostrum et aspernatur. Aut nostrum saepe cumque explicabo ducimus quaerat qui. Accusamus voluptatem quos non fuga vitae.",
                "tech_description_en": "Est facere perspiciatis et impedit molestiae ea molestias. Excepturi pariatur voluptatibus voluptas corporis ut perferendis consequuntur. Quis consequuntur expedita earum voluptas.",
                "description": "Omnis est labore quasi. Adipisci consequuntur eos quia libero doloremque consequuntur excepturi. Eveniet ipsa qui quod et doloremque consequatur et. Praesentium non soluta ut id provident voluptatum.",
                "description_en": "Quia maxime eius nihil nihil ab quis tempore. Quod voluptatem quos aut porro assumenda saepe. Atque rem velit perferendis qui. Qui impedit quisquam quisquam velit.",
                "usage": "Quisquam sint deserunt cumque eveniet. Pariatur deleniti qui ea pariatur deserunt doloremque dicta. Omnis sit eligendi omnis quibusdam ut repudiandae.",
                "usage_en": "Ab sed in molestias minima aut. Laborum dolores est provident maiores. Rem et ea temporibus sunt.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?11227",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?42910",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?30103",
                "product_video": null,
                "status": "新品",
                "rating": 1.45,
                "sold_count": 7110,
                "review_count": 9984,
                "created_at": "2020-07-20 05:01:14",
                "updated_at": "2020-08-07 02:06:09",
                "product_category": {
                    "id": 8,
                    "slug": "aliquam-cum",
                    "title": "腮红",
                    "title_en": "iure non et",
                    "describe": "Eveniet cupiditate quod praesentium molestiae. Qui voluptate voluptas tenetur nemo. Ut officia deleniti quisquam atque voluptates molestiae. Natus dolores eos nihil unde animi qui sed.",
                    "describe_en": "Ducimus perferendis id reiciendis consequatur cupiditate quae cumque. Occaecati sit fugiat et veritatis distinctio aut autem. Qui quo voluptatem nostrum impedit cumque magni.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?16490",
                    "description": "Eius quidem sed odio magnam fugiat.",
                    "description_en": "Delectus quia maxime occaecati sapiente blanditiis pariatur.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?80541",
                    "parent_id": 20,
                    "created_at": "2020-07-31 22:12:28",
                    "updated_at": "2020-07-21 12:40:40"
                }
            },
            {
                "id": 18,
                "product_category_id": 12,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "aliquid eveniet rerum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?36344",
                "slug": "repellendus-nostrum",
                "short_description": "Unde aut facilis illum at.",
                "short_description_en": "Pariatur veritatis ullam qui sit veniam est praesentium. Ad nesciunt quis perferendis cum animi rerum voluptas. Nemo sunt sed quia debitis eum ut minus.",
                "price": "6243.00",
                "sale_price": "2062.00",
                "stock": 707,
                "spec": null,
                "seo_title": "tempore nobis cum",
                "seo_keyword": "dicta",
                "seo_description": "Doloribus nam ex ipsum molestiae et perspiciatis.",
                "benefit": "Architecto accusantium harum nobis voluptatem molestiae voluptas aut. Tempora sed minus voluptate cumque quisquam laudantium autem. Commodi accusamus molestiae enim. Occaecati ut est fugit dolores. Rerum debitis aliquam tenetur et et est deleniti.",
                "benefit_en": "Molestias fugit eaque itaque beatae consequatur corrupti sapiente. Quam libero ratione nesciunt ut harum vel temporibus. Iure voluptatum rerum repellendus accusantium accusantium.",
                "tech_description": "Explicabo molestias culpa qui quae et. Consequuntur recusandae nemo accusantium sit voluptatem. Pariatur autem repudiandae molestias doloribus iure aut. Omnis enim ullam quos.",
                "tech_description_en": "Aperiam voluptatem ut ipsam veniam sed. Quo aperiam nobis natus. Ab aperiam suscipit quia nam eos fuga. Magni earum consequuntur impedit nisi perspiciatis et ex.",
                "description": "Corrupti vel nihil nam et eos saepe. Aut amet quia eum aut. Inventore libero iste iste nulla. Sapiente et itaque eveniet unde.",
                "description_en": "Consequatur est ea non qui. Inventore sit et et a autem tempora. Quas est quia mollitia facere. Sint veritatis esse tempore placeat.",
                "usage": "Et modi fugit quia laudantium quaerat quia adipisci. Rem perferendis amet ea recusandae culpa atque doloremque. Possimus non consectetur iure voluptatem at. Minus minima temporibus cum beatae.",
                "usage_en": "Voluptas ea nihil eius. Nihil eos autem cum tempora saepe. Odit fuga est eveniet dolor. Suscipit optio et recusandae quis iste.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?42394",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?49742",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?16948",
                "product_video": null,
                "status": "畅销",
                "rating": 0.25,
                "sold_count": 7899,
                "review_count": 8425,
                "created_at": "2020-07-27 06:07:51",
                "updated_at": "2020-08-03 00:17:43",
                "product_category": {
                    "id": 12,
                    "slug": "quia-quis",
                    "title": "粉底液",
                    "title_en": "blanditiis maxime et",
                    "describe": "Aut ab qui doloribus cumque porro. Quia sapiente reiciendis sit velit suscipit quibusdam. Voluptates occaecati repudiandae et debitis.",
                    "describe_en": "Eveniet aut hic minus numquam. Rerum architecto voluptatem quia hic quia officiis. Aut voluptate recusandae quo rerum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?12548",
                    "description": "Placeat beatae voluptatum ut sapiente est.",
                    "description_en": "Inventore et recusandae dolore nisi et.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?89061",
                    "parent_id": 6,
                    "created_at": "2020-08-05 01:02:51",
                    "updated_at": "2020-07-30 17:27:23"
                }
            },
            {
                "id": 19,
                "product_category_id": 11,
                "product_name": "黑钻肌光精华",
                "product_name_en": "sunt itaque reprehenderit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?60183",
                "slug": "cupiditate-quia",
                "short_description": "Voluptatem reprehenderit atque aliquid placeat est facilis.",
                "short_description_en": "Sit sint quisquam et. Dolor et quia ut quo molestiae aut ipsam. Voluptas itaque dolorem libero.",
                "price": "4431.00",
                "sale_price": "7705.00",
                "stock": 850,
                "spec": null,
                "seo_title": "molestias tenetur saepe",
                "seo_keyword": "tempora",
                "seo_description": "Est rerum illum sunt.",
                "benefit": "Repellat delectus non officia molestiae consequatur maiores. Quasi libero molestias ipsa quo consequatur amet unde. Eos maiores tenetur minima in molestiae. Quasi quos exercitationem incidunt itaque beatae mollitia.",
                "benefit_en": "Cupiditate et sit aut. Nisi et et quam velit.",
                "tech_description": "Provident est dolores voluptates quia aut in eligendi voluptates. Totam sequi sint culpa aut minus quam. Vel cumque veritatis ut rerum amet eum voluptatum.",
                "tech_description_en": "Iste aliquam tenetur quis laudantium voluptatem. Dicta omnis voluptas iusto ut. Reiciendis quod consectetur aspernatur est aspernatur debitis optio. Consequatur quod molestiae excepturi ipsam molestias possimus.",
                "description": "Et sit nisi voluptas illum ut ad tempore eum. Molestias consequatur ut dolorem voluptatum sapiente.",
                "description_en": "Itaque eaque sed doloribus ratione distinctio officia error. Qui voluptate quidem nam. Sint qui eos omnis non ullam. Commodi nam cumque quibusdam modi sed sequi voluptatem.",
                "usage": "Et est placeat possimus blanditiis. Fugiat voluptate odio dignissimos voluptatem. Rerum fugiat optio et velit dolor nihil.",
                "usage_en": "Sunt qui natus necessitatibus et laudantium molestiae est aspernatur. Qui sequi quae totam id. Fugit non id cumque voluptatibus aut labore voluptates.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?21909",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?91052",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?81002",
                "product_video": null,
                "status": "畅销",
                "rating": 7.31,
                "sold_count": 1120,
                "review_count": 4673,
                "created_at": "2020-08-01 20:45:38",
                "updated_at": "2020-07-22 05:33:12",
                "product_category": {
                    "id": 11,
                    "slug": "officia-nulla",
                    "title": "眼线",
                    "title_en": "voluptas qui eaque",
                    "describe": "Perspiciatis eos maxime aut aperiam maiores nostrum. Aperiam accusamus quo numquam ut fuga. Minus quisquam dolor illum porro numquam est. Amet doloremque sit possimus enim fugit.",
                    "describe_en": "Molestias autem et et tenetur ut deserunt ut. Deleniti quia molestias commodi.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?57362",
                    "description": "Aut ea vel atque nemo harum.",
                    "description_en": "Eos aut cupiditate qui facilis.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?85007",
                    "parent_id": 16,
                    "created_at": "2020-08-06 06:34:41",
                    "updated_at": "2020-07-26 11:38:14"
                }
            },
            {
                "id": 20,
                "product_category_id": 2,
                "product_name": "钻石焕活面膜",
                "product_name_en": "et dicta sed",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?60795",
                "slug": "ipsa-recusandae",
                "short_description": "Exercitationem ipsam sit sunt.",
                "short_description_en": "Et facilis numquam fugit voluptas. Beatae rerum et quibusdam dolorem consequatur et non vel. Sed veritatis voluptas inventore.",
                "price": "2203.00",
                "sale_price": "2514.00",
                "stock": 576,
                "spec": null,
                "seo_title": "voluptas iusto officiis",
                "seo_keyword": "natus",
                "seo_description": "Itaque voluptatem eum fugiat iusto ut iusto.",
                "benefit": "Modi perferendis ea atque id illo. Excepturi voluptate dicta omnis rerum error impedit ut. Praesentium est dolores et ipsa explicabo temporibus ullam.",
                "benefit_en": "Vel inventore est ipsam ipsam voluptatem est. Possimus aut unde officiis voluptatibus.",
                "tech_description": "Explicabo assumenda perspiciatis et sint et accusantium. Non est ipsa aut dolores ducimus ratione nisi ullam. Doloribus quo accusantium qui repellendus nihil adipisci. Qui exercitationem est omnis ad incidunt.",
                "tech_description_en": "Doloremque officia rerum aut ullam rem. Quia animi nemo non asperiores velit. Consequatur qui doloribus quae laboriosam tenetur enim autem aut. Voluptas sunt aut enim veniam vitae quae vero. Fuga quas eius iusto cumque et.",
                "description": "Et iusto est repellat nemo enim consequatur. Quidem ratione eos dolorem. Quaerat voluptatem autem fugiat ex.",
                "description_en": "Quo dolore consequatur et enim similique voluptates provident. Ea at dolorum qui sint facilis vitae dolores. Qui exercitationem sed quas debitis dolorem. Dolores aut aliquid ex eum molestias libero.",
                "usage": "Et eos voluptas quia aperiam esse. Nulla cumque quisquam qui cumque soluta. Illum quo quas dolores. Aperiam ut rerum iure.",
                "usage_en": "Porro tempora itaque perferendis recusandae occaecati facilis. Asperiores incidunt perferendis non illo quas est omnis. Pariatur optio dolorem et qui sint. Autem totam corporis beatae dolore.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?31480",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?54782",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?95401",
                "product_video": null,
                "status": "畅销",
                "rating": 7.66,
                "sold_count": 2741,
                "review_count": 1441,
                "created_at": "2020-08-04 11:40:32",
                "updated_at": "2020-07-26 04:38:50",
                "product_category": {
                    "id": 2,
                    "slug": "amet-dolores",
                    "title": "睫毛膏",
                    "title_en": "nam voluptatibus et",
                    "describe": "Nihil error nesciunt voluptatum qui iste. Laborum rem voluptatibus reprehenderit quaerat accusamus. Vel quaerat atque non iste quia quia expedita.",
                    "describe_en": "Omnis ipsa eaque doloremque consequatur ad aliquam. Officiis ex enim praesentium exercitationem aut. Optio repudiandae ea deserunt omnis qui et.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?79931",
                    "description": "Adipisci ipsa et mollitia optio.",
                    "description_en": "Molestiae iure voluptatum et.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?84432",
                    "parent_id": 20,
                    "created_at": "2020-08-01 07:48:25",
                    "updated_at": "2020-07-18 14:26:45"
                }
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/product?page=1",
        "from": 1,
        "last_page": 3,
        "last_page_url": "http:\/\/localhost\/api\/product?page=3",
        "next_page_url": "http:\/\/localhost\/api\/product?page=2",
        "path": "http:\/\/localhost\/api\/product",
        "per_page": 20,
        "prev_page_url": null,
        "to": 20,
        "total": 50
    },
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product`


<!-- END_dc538d69a8586a7a3c36d4393cee42e6 -->

<!-- START_dacc622bc7683818cdcaa0508f10d577 -->
## get product of product category
获取对应类别下的产品

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product/1?category_slug=dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product/1"
);

let params = {
    "category_slug": "dolore",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "current_page": 1,
        "data": [],
        "first_page_url": "http:\/\/localhost\/api\/product\/1?page=1",
        "from": null,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/product\/1?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/product\/1",
        "per_page": 20,
        "prev_page_url": null,
        "to": null,
        "total": 0
    },
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product/{category_slug}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `category_slug` |  required  | 分类slug

<!-- END_dacc622bc7683818cdcaa0508f10d577 -->

<!-- START_0d311bc121fa5f47763c3a964aaf3691 -->
## Query the product detail
获取商品详情信息

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product/1?slug=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product/1"
);

let params = {
    "slug": "inventore",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "current_page": 1,
        "data": [],
        "first_page_url": "http:\/\/localhost\/api\/product\/1?page=1",
        "from": null,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/product\/1?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/product\/1",
        "per_page": 20,
        "prev_page_url": null,
        "to": null,
        "total": 0
    },
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product/{product_slug}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `slug` |  required  | 商品slug

<!-- END_0d311bc121fa5f47763c3a964aaf3691 -->

<!-- START_e1ee2f452be977620f7e0c0045529fd9 -->
## Get new product
获取新品

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/product_new?page=consequuntur&page_limit=suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/product_new"
);

let params = {
    "page": "consequuntur",
    "page_limit": "suscipit",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/product_new`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_e1ee2f452be977620f7e0c0045529fd9 -->

<!-- START_a5b1ad2131e03818cd865a9ffddc0928 -->
## change password
修改密码(已登录)

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/auth/password_change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"oldPassword":"aspernatur","newPassword":"voluptate","newPassword_confirmation":"amet"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/password_change"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "oldPassword": "aspernatur",
    "newPassword": "voluptate",
    "newPassword_confirmation": "amet"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/password_change`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `oldPassword` | string |  required  | 旧密码
        `newPassword` | string |  required  | 新密码
        `newPassword_confirmation` | string |  required  | 确认密码
    
<!-- END_a5b1ad2131e03818cd865a9ffddc0928 -->

<!-- START_bd1f2555bc6633390fa0cd3902b6ea26 -->
## Alipay request payment
支付宝发起支付

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/alipay/pay?out_trade_no=non&total_amount=tenetur&subject=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/alipay/pay"
);

let params = {
    "out_trade_no": "non",
    "total_amount": "tenetur",
    "subject": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/alipay/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `out_trade_no` |  required  | 订单号
    `total_amount` |  required  | 总金额
    `subject` |  required  | 订单标题

<!-- END_bd1f2555bc6633390fa0cd3902b6ea26 -->

<!-- START_43e96a9060fca58becd5a755b4e3aa4e -->
## Alipay return payment results
 支付宝前端回调页面

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/alipay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/alipay/return"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/alipay/return`


<!-- END_43e96a9060fca58becd5a755b4e3aa4e -->

<!-- START_c30352faca2b1d81fafd84d7c4a79cdd -->
## Alipay notify payment results
支付宝服务器端回调

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/alipay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/alipay/notify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/alipay/notify`


<!-- END_c30352faca2b1d81fafd84d7c4a79cdd -->

<!-- START_b2e091365f9f03862a73b53b8a32eb41 -->
## Unionpay request payment
银联支付发起请求

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/unionpay/pay?no=ullam&product_name=et&total_amount=eligendi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/unionpay/pay"
);

let params = {
    "no": "ullam",
    "product_name": "et",
    "total_amount": "eligendi",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/unionpay/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `product_name` |  required  | 商品名称
    `total_amount` |  required  | 总金额

<!-- END_b2e091365f9f03862a73b53b8a32eb41 -->

<!-- START_94ec51bb78f31dedba309417c651b8ad -->
## Unionpay return payment results
银联支付返回结果

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/unionpay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/unionpay/return"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/unionpay/return`


<!-- END_94ec51bb78f31dedba309417c651b8ad -->

<!-- START_5437da007e01a50eb566d5a65e9dfb9b -->
## Unionpay notify payment results
通知银联支付结果

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/unionpay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/unionpay/notify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/unionpay/notify`


<!-- END_5437da007e01a50eb566d5a65e9dfb9b -->

<!-- START_b149d65d620129d1a17607c81a70c010 -->
## Log the user out (Invalidate the token).

注销用户

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/auth/logout`


<!-- END_b149d65d620129d1a17607c81a70c010 -->

<!-- START_8e912231ed40ae5cbf3bf38f4c613779 -->
## Refresh a token.

刷新token

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/auth/refresh`


<!-- END_8e912231ed40ae5cbf3bf38f4c613779 -->

<!-- START_7c4c8c21aa8bf7ffa0ae617fb274806d -->
## Get the authenticated User.

获取通过身份验证的用户

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/auth/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/auth/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/auth/me`


<!-- END_7c4c8c21aa8bf7ffa0ae617fb274806d -->

<!-- START_0dfc43254177dc34e3f52ec8dd6ee2bd -->
## User profile list
用户资料信息

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/user_profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profiles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user_profiles`


<!-- END_0dfc43254177dc34e3f52ec8dd6ee2bd -->

<!-- START_b246eeb9e5b21565d6ab47d209bae638 -->
## Update user profile
编辑用户资料

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/user_profiles/1?profile_id=fugiat&phone=magni&real_name=blanditiis&sex=omnis&birthday=accusantium&age=iure&province=dolores&city=quia&district=amet&address=veniam&zip=officia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_profiles/1"
);

let params = {
    "profile_id": "fugiat",
    "phone": "magni",
    "real_name": "blanditiis",
    "sex": "omnis",
    "birthday": "accusantium",
    "age": "iure",
    "province": "dolores",
    "city": "quia",
    "district": "amet",
    "address": "veniam",
    "zip": "officia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user_profiles/{profile_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `profile_id` |  required  | profile表id
    `phone` |  optional  | 联系方式
    `real_name` |  optional  | 真实姓名
    `sex` |  optional  | 性别
    `birthday` |  optional  | 生日
    `age` |  optional  | 年龄
    `province` |  optional  | 省
    `city` |  optional  | 市
    `district` |  optional  | 区/县
    `address` |  optional  | 详细地址
    `zip` |  optional  | 邮编

<!-- END_b246eeb9e5b21565d6ab47d209bae638 -->

<!-- START_157e0e734e5b19915b7f41bafbe39486 -->
## Get user address
获取用户收货地址

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user_addresses`


<!-- END_157e0e734e5b19915b7f41bafbe39486 -->

<!-- START_ea009b31c2e7270334c8f572f3ad4561 -->
## Create user address
新增用户收货地址

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"province":"debitis","city":"fuga","district":"omnis","address":"velit","zip":"impedit","contact_name":"eos","contact_phone":"corporis"}'

```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "province": "debitis",
    "city": "fuga",
    "district": "omnis",
    "address": "velit",
    "zip": "impedit",
    "contact_name": "eos",
    "contact_phone": "corporis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user_addresses`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `province` | required |  optional  | 省
        `city` | required |  optional  | 市
        `district` | required |  optional  | 区
        `address` | required |  optional  | 详细地址
        `zip` | required |  optional  | 邮编
        `contact_name` | required |  optional  | 联系人
        `contact_phone` | required |  optional  | 手机号
    
<!-- END_ea009b31c2e7270334c8f572f3ad4561 -->

<!-- START_58d901fe49390c7afe94755dd24b0c3c -->
## Edit user address
编辑用户地址

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/api/user_addresses/1?province=ea&city=facere&district=occaecati&address=rerum&zip=et&contact_name=provident&contact_phone=sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let params = {
    "province": "ea",
    "city": "facere",
    "district": "occaecati",
    "address": "rerum",
    "zip": "et",
    "contact_name": "provident",
    "contact_phone": "sunt",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user_addresses/{address_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `province` |  optional  | 省
    `city` |  optional  | 市
    `district` |  optional  | 区
    `address` |  optional  | 详细地址
    `zip` |  optional  | 邮编
    `contact_name` |  optional  | 联系人
    `contact_phone` |  optional  | 手机号

<!-- END_58d901fe49390c7afe94755dd24b0c3c -->

<!-- START_afef23553387f635192dbbac6f4f2675 -->
## Destroy user Address
删除用户地址

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/api/user_addresses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/user_addresses/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/user_addresses/{address_id}`


<!-- END_afef23553387f635192dbbac6f4f2675 -->

<!-- START_90957246142cc2a14824b129ecd1ba3c -->
## Request shop cart items
请求购物车数据

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/api/shop_carts?user_id=velit&product_id=impedit&amount=reprehenderit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/shop_carts"
);

let params = {
    "user_id": "velit",
    "product_id": "impedit",
    "amount": "reprehenderit",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/shop_carts`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `user_id` |  required  | 用户id
    `product_id` |  optional  | 商品id
    `amount` |  optional  | 数量

<!-- END_90957246142cc2a14824b129ecd1ba3c -->

<!-- START_f9301c03a9281c0847565f96e6f723de -->
## Get order list
获取订单列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/orders`


<!-- END_f9301c03a9281c0847565f96e6f723de -->

<!-- START_08b1b8d6f903fb311c860a5b1f0f543b -->
## Get order detail
 获取订单详情

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/api/order_details/1?no=consequuntur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/api/order_details/1"
);

let params = {
    "no": "consequuntur",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/order_details/{no}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号

<!-- END_08b1b8d6f903fb311c860a5b1f0f543b -->

<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## 「ADMIN」Query user list(Admin)
查询用户数据列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/user?username=aliquam&page=ipsum&page_limit=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user"
);

let params = {
    "username": "aliquam",
    "page": "ipsum",
    "page_limit": "sed",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `username` |  optional  | 用户名(选填)
    `page` |  optional  | 页码，默认1
    `page_limit` |  optional  | 每页数量，默认20

<!-- END_bd487ab94d8034c2d13644bb1772fdfa -->

<!-- START_f391a113e7b095e92c1fbb509d3b51d5 -->
## 「ADMIN」Edit user(Admin)
修改用户资料

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user/1?name=et&email=ullam&phone=pariatur&avatar=praesentium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let params = {
    "name": "et",
    "email": "ullam",
    "phone": "pariatur",
    "avatar": "praesentium",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/user/{username}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `name` |  optional  | 姓名
    `email` |  optional  | 邮箱
    `phone` |  optional  | 手机号
    `avatar` |  optional  | 头像

<!-- END_f391a113e7b095e92c1fbb509d3b51d5 -->

<!-- START_3b421776505cfaa82ef907ff7c83122b -->
## 「ADMIN」delete User(Admin)
删除用户

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/user/{username}`


<!-- END_3b421776505cfaa82ef907ff7c83122b -->

<!-- START_439c3a46378d05961f1149b123311261 -->
## 「ADMIN」change password(Admin)
修改密码

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user/reset_password/1?oldPassword=laborum&newPassword=saepe&newPassword_confirmation=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "laborum",
    "newPassword": "saepe",
    "newPassword_confirmation": "id",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/user/reset_password/{username}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `oldPassword` |  required  | 旧密码
    `newPassword` |  required  | 新密码
    `newPassword_confirmation` |  required  | 确认密码

<!-- END_439c3a46378d05961f1149b123311261 -->

<!-- START_0e2790659ddcc6fdc52132019f3b7a28 -->
## 「ADMIN」Get user info
获取单个用户信息

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/get_user?hash_id=similique" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/get_user"
);

let params = {
    "hash_id": "similique",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/get_user`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `hash_id` |  required  | hash加密的ID

<!-- END_0e2790659ddcc6fdc52132019f3b7a28 -->

<!-- START_8c097500e48f09ec94a3293a31853149 -->
## 「ADMIN」Query user address list
 用户地址列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user_addresses`


<!-- END_8c097500e48f09ec94a3293a31853149 -->

<!-- START_c62bae513c0275637d8ee00c4dffe701 -->
## 「ADMIN」Create user address

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/user_addresses?province=possimus&city=repudiandae&district=debitis&address=aut&zip=rem&contact_name=et&contact_phone=voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses"
);

let params = {
    "province": "possimus",
    "city": "repudiandae",
    "district": "debitis",
    "address": "aut",
    "zip": "rem",
    "contact_name": "et",
    "contact_phone": "voluptate",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/user_addresses`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `province` |  required  | 省
    `city` |  required  | 市
    `district` |  required  | 区
    `address` |  required  | 详细地址
    `zip` |  required  | 邮编
    `contact_name` |  required  | 联系人
    `contact_phone` |  required  | 手机号

<!-- END_c62bae513c0275637d8ee00c4dffe701 -->

<!-- START_5f98931d3c04839701005a1c746b70be -->
## 「ADMIN」Update user address
编辑用户地址

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user_addresses/1?address_id=placeat&province=itaque&city=sunt&district=dolor&address=omnis&zip=distinctio&contact_name=sapiente&contact_phone=ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "placeat",
    "province": "itaque",
    "city": "sunt",
    "district": "dolor",
    "address": "omnis",
    "zip": "distinctio",
    "contact_name": "sapiente",
    "contact_phone": "ex",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/user_addresses/{address_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `address_id` |  required  | address表id
    `province` |  required  | 省
    `city` |  required  | 市
    `district` |  required  | 区
    `address` |  required  | 详细地址
    `zip` |  required  | 邮编
    `contact_name` |  required  | 联系人
    `contact_phone` |  required  | 手机号

<!-- END_5f98931d3c04839701005a1c746b70be -->

<!-- START_7465d58aec589336210973bd6eebaaf0 -->
## 「ADMIN」Destroy user address
删除用户地址

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/user_addresses/1?address_id=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_addresses/1"
);

let params = {
    "address_id": "quidem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/user_addresses/{address_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `address_id` |  required  | address表id

<!-- END_7465d58aec589336210973bd6eebaaf0 -->

<!-- START_f1cbe00c0793bf557a683e5a6440bda0 -->
## 「ADMIN」User profile list
用户资料信息

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/user_profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user_profiles`


<!-- END_f1cbe00c0793bf557a683e5a6440bda0 -->

<!-- START_6e932dece4c9c53cafe7d44eed695492 -->
## 「ADMIN」Update user profile
编辑用户资料

> Example request:

```bash
curl -X PUT \
    "http://store.wutang.com/admin/user_profiles/1?profile_id=quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "quibusdam",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/user_profiles/{profile_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `profile_id` |  required  | profile表id

<!-- END_6e932dece4c9c53cafe7d44eed695492 -->

<!-- START_3bff74743c9d0809b89e6ed687f7c6fe -->
## 「ADMIN」Destroy user profile
删除用户资料

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/user_profiles/1?profile_id=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/user_profiles/1"
);

let params = {
    "profile_id": "rerum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/user_profiles/{profile}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `profile_id` |  required  | profile表id

<!-- END_3bff74743c9d0809b89e6ed687f7c6fe -->

<!-- START_5859d901099a5405483c7e8dbbfe6594 -->
## 「ADMIN」Get invitation code
获取邀请码

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/invitation/code" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/invitation/code"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET admin/invitation/code`


<!-- END_5859d901099a5405483c7e8dbbfe6594 -->

<!-- START_8e29f704519bab0648615af972a1987d -->
## 「ADMIN」bind code
绑定用户与邀请码

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/invitation/code?phone=necessitatibus&code=sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/invitation/code"
);

let params = {
    "phone": "necessitatibus",
    "code": "sunt",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/invitation/code`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `phone` |  required  | 手机号
    `code` |  required  | 邀请码

<!-- END_8e29f704519bab0648615af972a1987d -->

<!-- START_1593abd93527151f8b06736da57eca07 -->
## 「ADMIN」Get user phone
获取用户的手机号

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/invitation/phone?page=possimus&page_limit=dignissimos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/invitation/phone"
);

let params = {
    "page": "possimus",
    "page_limit": "dignissimos",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET admin/invitation/phone`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 页数

<!-- END_1593abd93527151f8b06736da57eca07 -->

<!-- START_c2c61ac73e177fc85d5f5487b23cf13e -->
## 「ADMIN」get product category list
获取产品分类列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product_categories?page=molestias&page_limit=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "page": "molestias",
    "page_limit": "et",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product_categories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_c2c61ac73e177fc85d5f5487b23cf13e -->

<!-- START_80621ad47a9cd3c202d602c981a133f2 -->
## 「ADMIN」create product category
新建产品分类

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_categories?title=maiores&title_en=consequatur&describe=fugiat&describe_en=sunt&banner=vero&description=totam&description_en=est&img=dolor&parent_id=iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories"
);

let params = {
    "title": "maiores",
    "title_en": "consequatur",
    "describe": "fugiat",
    "describe_en": "sunt",
    "banner": "vero",
    "description": "totam",
    "description_en": "est",
    "img": "dolor",
    "parent_id": "iusto",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/product_categories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  required  | 分类名称
    `title_en` |  optional  | 分类英文名称
    `describe` |  optional  | 分类描述
    `describe_en` |  optional  | 英文分类描述
    `banner` |  optional  | 分类banner图
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 分类英文简介
    `img` |  optional  | 分类简介图
    `parent_id` |  optional  | 上级分类ID

<!-- END_80621ad47a9cd3c202d602c981a133f2 -->

<!-- START_b9b3605d8b25e2aa388d6484b2796e92 -->
## 「ADMIN」edit product category
编辑产品分类

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_categories/1?title=eaque&title_en=dolorum&describe=culpa&describe_en=magnam&banner=veritatis&description=minus&description_en=vero&img=sed&parent_id=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let params = {
    "title": "eaque",
    "title_en": "dolorum",
    "describe": "culpa",
    "describe_en": "magnam",
    "banner": "veritatis",
    "description": "minus",
    "description_en": "vero",
    "img": "sed",
    "parent_id": "consequatur",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/product_categories/{productCategoriesId}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  optional  | 分类名称
    `title_en` |  optional  | 分类英文名称
    `describe` |  optional  | 分类描述
    `describe_en` |  optional  | 英文分类描述
    `banner` |  optional  | 分类banner图
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 分类英文简介
    `img` |  optional  | 分类简介图
    `parent_id` |  optional  | 上级分类ID

<!-- END_b9b3605d8b25e2aa388d6484b2796e92 -->

<!-- START_893f848eddd70becc2abbd0dbbdbc773 -->
## 「ADMIN」delete product category
删除产品分类

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/product_categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/product_categories/{productCategoriesId}`


<!-- END_893f848eddd70becc2abbd0dbbdbc773 -->

<!-- START_03beced1b66f1ed5912bf94c07e1a9a8 -->
## 「ADMIN」Get product category stoies
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/category_stories?page=temporibus&page_limit=maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "page": "temporibus",
    "page_limit": "maxime",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/category_stories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 没页数量

<!-- END_03beced1b66f1ed5912bf94c07e1a9a8 -->

<!-- START_d231c5e756c00882550676f84b4f0206 -->
## 「ADMIN」Create product category story
添加产品分类故事

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/category_stories?title=animi&title_en=nobis&description=id&description_en=id&banner=et&product_category_id=asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories"
);

let params = {
    "title": "animi",
    "title_en": "nobis",
    "description": "id",
    "description_en": "id",
    "banner": "et",
    "product_category_id": "asperiores",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/category_stories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  required  | 分类故事名称
    `title_en` |  optional  | 英文故事名称
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 英文分类简介
    `banner` |  optional  | 故事banner
    `product_category_id` |  optional  | 属于产品类ID

<!-- END_d231c5e756c00882550676f84b4f0206 -->

<!-- START_c278f15bf9530159d4505908e423199b -->
## 「ADMIN」edit product category story
编辑产品分类故事

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/category_stories/1?title=mollitia&title_en=laboriosam&description=doloribus&description_en=nulla&banner=velit&product_category_id=earum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let params = {
    "title": "mollitia",
    "title_en": "laboriosam",
    "description": "doloribus",
    "description_en": "nulla",
    "banner": "velit",
    "product_category_id": "earum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/category_stories/{CategoriesStoriesId}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  optional  | 分类故事名称
    `title_en` |  optional  | 英文故事名称
    `description` |  optional  | 分类简介
    `description_en` |  optional  | 英文分类简介
    `banner` |  optional  | 故事banner
    `product_category_id` |  optional  | 属于产品类ID

<!-- END_c278f15bf9530159d4505908e423199b -->

<!-- START_c0113fc3a7aedb05d6590587aa7f1f42 -->
## 「ADMIN」Delete product category story
删除产品分类故事

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/category_stories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/category_stories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/category_stories/{CategoriesStoriesId}`


<!-- END_c0113fc3a7aedb05d6590587aa7f1f42 -->

<!-- START_9a7c60de622aa327ea2ab22f57fe4f40 -->
## 「ADMIN」Get product list
获取产品列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product?page=aut&page_limit=nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "page": "aut",
    "page_limit": "nulla",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_9a7c60de622aa327ea2ab22f57fe4f40 -->

<!-- START_2a50bdf6cd9fdfa165149d0dd0da7075 -->
## 「ADMIN」Create product
新建商品

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product?product_category_id=deleniti&product_name=ut&product_name_en=fuga&thumbnail=non&slug=facilis&short_description=doloribus&short_description_en=nesciunt&price=aut&sale_price=asperiores&stock=similique&seo_title=quo&seo_keyword=sed&seo_description=magnam&benefit=repellendus&benefit_en=eum&tech_description=delectus&tech_description_en=aut&description=cum&description_en=libero&usage=ullam&usage_en=facilis&main_image=eaque&main_image_2=est&benefit_image=aut&product_video=incidunt&status=officiis&rating=eos&sold_count=laudantium&review_count=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product"
);

let params = {
    "product_category_id": "deleniti",
    "product_name": "ut",
    "product_name_en": "fuga",
    "thumbnail": "non",
    "slug": "facilis",
    "short_description": "doloribus",
    "short_description_en": "nesciunt",
    "price": "aut",
    "sale_price": "asperiores",
    "stock": "similique",
    "seo_title": "quo",
    "seo_keyword": "sed",
    "seo_description": "magnam",
    "benefit": "repellendus",
    "benefit_en": "eum",
    "tech_description": "delectus",
    "tech_description_en": "aut",
    "description": "cum",
    "description_en": "libero",
    "usage": "ullam",
    "usage_en": "facilis",
    "main_image": "eaque",
    "main_image_2": "est",
    "benefit_image": "aut",
    "product_video": "incidunt",
    "status": "officiis",
    "rating": "eos",
    "sold_count": "laudantium",
    "review_count": "et",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/product`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `product_category_id` |  optional  | 所属产品分类id
    `product_name` |  required  | 商品名称
    `product_name_en` |  required  | 商品英文名称
    `thumbnail` |  optional  | 产品缩略图
    `slug` |  optional  | 导航名称:即url
    `short_description` |  optional  | 简短介绍
    `short_description_en` |  optional  | 英文简短介绍
    `price` |  required  | 价格
    `sale_price` |  required  | 优惠价
    `stock` |  required  | 库存量
    `seo_title` |  optional  | 网页title
    `seo_keyword` |  optional  | 网页关键字
    `seo_description` |  optional  | 网页描述
    `benefit` |  optional  | 产品功效
    `benefit_en` |  optional  | 英文产品功效
    `tech_description` |  optional  | 科技介绍
    `tech_description_en` |  optional  | 英文科技介绍
    `description` |  optional  | 产品细节
    `description_en` |  optional  | 英文产品细节
    `usage` |  optional  | 使用方法
    `usage_en` |  optional  | 英文使用方法
    `main_image` |  required  | 页面主图
    `main_image_2` |  required  | 页面主图2:用于较低分辨率设备
    `benefit_image` |  optional  | 功效背景图
    `product_video` |  optional  | 产品相关视频
    `status` |  required  | 商品状态：1新品，2畅销，3促销，-1下架
    `rating` |  required  | 平均评分
    `sold_count` |  required  | 销量
    `review_count` |  required  | 评价数量

<!-- END_2a50bdf6cd9fdfa165149d0dd0da7075 -->

<!-- START_b608d73bea12f9bf0ce6e42911c0e555 -->
## 「ADMIN」Edit product
编辑商品

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product/1?product_category_id=aliquid&product_name=et&product_name_en=facilis&thumbnail=sit&slug=at&short_description=omnis&short_description_en=voluptas&price=dolorem&sale_price=consequatur&stock=sapiente&seo_title=excepturi&seo_keyword=maiores&seo_description=facere&benefit=est&benefit_en=et&tech_description=minus&tech_description_en=eos&description=ut&description_en=atque&usage=perferendis&usage_en=sint&main_image=ut&main_image_2=eum&benefit_image=corrupti&product_video=qui&status=et&rating=molestias&sold_count=dolor&review_count=rem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let params = {
    "product_category_id": "aliquid",
    "product_name": "et",
    "product_name_en": "facilis",
    "thumbnail": "sit",
    "slug": "at",
    "short_description": "omnis",
    "short_description_en": "voluptas",
    "price": "dolorem",
    "sale_price": "consequatur",
    "stock": "sapiente",
    "seo_title": "excepturi",
    "seo_keyword": "maiores",
    "seo_description": "facere",
    "benefit": "est",
    "benefit_en": "et",
    "tech_description": "minus",
    "tech_description_en": "eos",
    "description": "ut",
    "description_en": "atque",
    "usage": "perferendis",
    "usage_en": "sint",
    "main_image": "ut",
    "main_image_2": "eum",
    "benefit_image": "corrupti",
    "product_video": "qui",
    "status": "et",
    "rating": "molestias",
    "sold_count": "dolor",
    "review_count": "rem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/product/{productId}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `product_category_id` |  optional  | 所属产品分类id
    `product_name` |  optional  | 商品名称
    `product_name_en` |  optional  | 商品英文名称
    `thumbnail` |  optional  | 产品缩略图
    `slug` |  optional  | 导航名称:即url
    `short_description` |  optional  | 简短介绍
    `short_description_en` |  optional  | 英文简短介绍
    `price` |  optional  | 价格
    `sale_price` |  optional  | 优惠价
    `stock` |  optional  | 库存量
    `seo_title` |  optional  | 网页title
    `seo_keyword` |  optional  | 网页关键字
    `seo_description` |  optional  | 网页描述
    `benefit` |  optional  | 产品功效
    `benefit_en` |  optional  | 英文产品功效
    `tech_description` |  optional  | 科技介绍
    `tech_description_en` |  optional  | 英文科技介绍
    `description` |  optional  | 产品细节
    `description_en` |  optional  | 英文产品细节
    `usage` |  optional  | 使用方法
    `usage_en` |  optional  | 英文使用方法
    `main_image` |  optional  | 页面主图
    `main_image_2` |  optional  | 页面主图2:用于较低分辨率设备
    `benefit_image` |  optional  | 功效背景图
    `product_video` |  optional  | 产品相关视频
    `status` |  required  | 商品状态：1新品，2畅销，3促销，-1下架
    `rating` |  required  | 平均评分
    `sold_count` |  optional  | 销量
    `review_count` |  optional  | 评价数量

<!-- END_b608d73bea12f9bf0ce6e42911c0e555 -->

<!-- START_c779c2590cf366390ebf12164a5b9a95 -->
## 「ADMIN」Off the Product
下架产品

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/product/{productId}`


<!-- END_c779c2590cf366390ebf12164a5b9a95 -->

<!-- START_891f757575d248d6bfeaf8ccc9e0ef89 -->
## 「ADMIN」Get product sku list
获取商品SKU列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/product_sku" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product_sku`


<!-- END_891f757575d248d6bfeaf8ccc9e0ef89 -->

<!-- START_48c0f3919a61c71518dc93b963d8cd30 -->
## 「ADMIN」Create product sku
新增产品SKU

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_sku?title=optio&description=nobis&price=cum&stock=laudantium&product_id=sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku"
);

let params = {
    "title": "optio",
    "description": "nobis",
    "price": "cum",
    "stock": "laudantium",
    "product_id": "sunt",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/product_sku`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  required  | sku名称
    `description` |  required  | sku描述
    `price` |  required  | 价格
    `stock` |  required  | 库存
    `product_id` |  required  | 所属商品id

<!-- END_48c0f3919a61c71518dc93b963d8cd30 -->

<!-- START_51c5d3f449e6a079a71f6ce91d5fbe05 -->
## 「ADMIN」Edit product sku
编辑产品SKU

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/product_sku/1?title=esse&description=et&price=omnis&stock=similique&product_id=corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let params = {
    "title": "esse",
    "description": "et",
    "price": "omnis",
    "stock": "similique",
    "product_id": "corrupti",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/product_sku/{productSkuId}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  optional  | sku名称
    `description` |  optional  | sku描述
    `price` |  optional  | 价格
    `stock` |  optional  | 库存
    `product_id` |  optional  | 所属商品id

<!-- END_51c5d3f449e6a079a71f6ce91d5fbe05 -->

<!-- START_364a9f179b0d223e1ffa318539481ce0 -->
## 「ADMIN」Delete product sku
删除商品sku

> Example request:

```bash
curl -X DELETE \
    "http://store.wutang.com/admin/product_sku/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/product_sku/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/product_sku/{productSkuId}`


<!-- END_364a9f179b0d223e1ffa318539481ce0 -->

<!-- START_abed5cfa021d6e9a60379988984f2b8f -->
## 「ADMIN」Get order list
获取订单列表

> Example request:

```bash
curl -X GET \
    -G "http://store.wutang.com/admin/order?page=architecto&page_limit=mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "architecto",
    "page_limit": "mollitia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量

<!-- END_abed5cfa021d6e9a60379988984f2b8f -->

<!-- START_9f061547eaaed8143e1cfc71ecbc6ca4 -->
## 「ADMIN」Search order
搜索订单

> Example request:

```bash
curl -X POST \
    "http://store.wutang.com/admin/order?page=ut&page_limit=cum&username=autem&order_no=eius&order_status=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://store.wutang.com/admin/order"
);

let params = {
    "page": "ut",
    "page_limit": "cum",
    "username": "autem",
    "order_no": "eius",
    "order_status": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/order`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | 页码
    `page_limit` |  optional  | 每页数量
    `username` |  optional  | 用户名
    `order_no` |  optional  | 订单号
    `order_status` |  optional  | 订单状态

<!-- END_9f061547eaaed8143e1cfc71ecbc6ca4 -->


