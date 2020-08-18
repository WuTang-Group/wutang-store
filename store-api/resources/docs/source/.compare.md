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
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_77797615aeaa4fce9a94150989aed46f -->
## ResponseCode explain
本方法仅作返回code通用说明(无其他作用)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/response_code?10001=asperiores&10003=in&20001=culpa&40001=non&40003=tenetur&40004=minus&40005=repellat&50001=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/response_code"
);

let params = {
    "10001": "asperiores",
    "10003": "in",
    "20001": "culpa",
    "40001": "non",
    "40003": "tenetur",
    "40004": "minus",
    "40005": "repellat",
    "50001": "non",
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

<!-- START_a2f0cb2454c12a09b199d57c7e9ad462 -->
## Request to alipay gateway pay
发起支付宝网关支付请求(前端)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/aligateway/pay?no=aut&total_amount=dolores&subject=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/aligateway/pay"
);

let params = {
    "no": "aut",
    "total_amount": "dolores",
    "subject": "sed",
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
null
```

### HTTP Request
`GET api/aligateway/pay`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额
    `subject` |  required  | 交易名称

<!-- END_a2f0cb2454c12a09b199d57c7e9ad462 -->

<!-- START_6151e9304eabe9201f3887072a828260 -->
## Alipay gateway return
支付宝网关支付后的同步跳转(前端)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/aligateway/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/aligateway/return"
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
`GET api/aligateway/return`


<!-- END_6151e9304eabe9201f3887072a828260 -->

<!-- START_f9a132f378294568dd73f01143c180b3 -->
## Alipay gateway notify
支付宝网关支付后的异步通知(服务端)

> Example request:

```bash
curl -X POST \
    "http://localhost/api/aligateway/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/aligateway/notify"
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
`POST api/aligateway/notify`


<!-- END_f9a132f378294568dd73f01143c180b3 -->

<!-- START_3266c06bb58be7f09822eec02a02823c -->
## Generate captcha code and save to cache
生成验证码并写入缓存

> Example request:

```bash
curl -X POST \
    "http://localhost/api/captchas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/captchas"
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
    "http://localhost/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"autem","username":"nihil","password":"sit","captcha_key":"expedita","captcha_code":"sint","password_question_id":3,"password_answer":"aut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "autem",
    "username": "nihil",
    "password": "sit",
    "captcha_key": "expedita",
    "captcha_code": "sint",
    "password_question_id": 3,
    "password_answer": "aut"
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
    -G "http://localhost/api/question_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/question_list"
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
    -G "http://localhost/api/questions?username=atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/questions"
);

let params = {
    "username": "atque",
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
        "username": "atque"
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
    "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"id","password":"cupiditate"}'

```

```javascript
const url = new URL(
    "http://localhost/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "id",
    "password": "cupiditate"
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
    "http://localhost/api/password_reset?username=cumque&password_question_id=minus&password_answer=hic&password=qui&password_confirmation=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password_reset"
);

let params = {
    "username": "cumque",
    "password_question_id": "minus",
    "password_answer": "hic",
    "password": "qui",
    "password_confirmation": "quidem",
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
    -G "http://localhost/api/product_category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category"
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
            "slug": "et-suscipit",
            "title": "粉底液",
            "title_en": "qui placeat vitae",
            "describe": "Sint asperiores dicta magnam veritatis. Molestias in sed facilis ipsum minus expedita molestias quia. Minima dignissimos molestiae ea labore. Est eum sint delectus harum debitis.",
            "describe_en": "Unde blanditiis molestiae perspiciatis molestiae voluptatem ea ea. Libero eum molestias quae omnis nulla quis quidem. Neque ipsam nam quia voluptas consequatur a in.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?11579",
            "description": "Hic veritatis minus quas dolore.",
            "description_en": "Commodi libero cupiditate quisquam magni sunt.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?97579",
            "parent_id": 19,
            "created_at": "2020-07-31 01:34:13",
            "updated_at": "2020-08-10 10:34:31",
            "parent_title": "眼霜"
        },
        {
            "id": 2,
            "slug": "voluptate-facere",
            "title": "睫毛膏",
            "title_en": "veniam explicabo deleniti",
            "describe": "Eligendi sint animi illo dolor molestiae nisi quis. Quos soluta ut aut adipisci a. Veritatis sunt quae nesciunt unde mollitia.",
            "describe_en": "Earum ut amet veniam fugiat. Inventore temporibus est et harum omnis consequatur pariatur. Cumque nam vitae maxime hic ut. Culpa et laboriosam autem illo ipsum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?70429",
            "description": "Autem consequatur est ipsum.",
            "description_en": "Necessitatibus blanditiis sit explicabo minima quo eveniet.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?53573",
            "parent_id": 15,
            "created_at": "2020-08-06 19:37:49",
            "updated_at": "2020-08-03 12:44:20",
            "parent_title": "身体护理"
        },
        {
            "id": 3,
            "slug": "et-amet",
            "title": "乳液",
            "title_en": "voluptatem quas officia",
            "describe": "Aut non aliquam soluta id qui numquam. Qui eveniet impedit pariatur ex. Sed officiis culpa ut suscipit eveniet delectus eius.",
            "describe_en": "Sunt sunt ducimus impedit soluta harum repellat. Dolor alias magnam eveniet deserunt et veniam in.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?30884",
            "description": "Sunt saepe impedit enim.",
            "description_en": "Ipsum numquam libero nisi.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?87754",
            "parent_id": 4,
            "created_at": "2020-08-14 23:56:37",
            "updated_at": "2020-08-01 21:11:37",
            "parent_title": "面霜"
        },
        {
            "id": 4,
            "slug": "fuga-eius",
            "title": "面霜",
            "title_en": "quos provident possimus",
            "describe": "Consectetur ducimus quisquam ducimus. Qui voluptates omnis ab est commodi omnis voluptas. Dolores eum tenetur fugiat. Labore soluta debitis sit doloremque molestiae cumque atque.",
            "describe_en": "Quibusdam quia minus quo. Distinctio dolorum nesciunt earum laborum odio cupiditate repudiandae. Quis sapiente aut aut ab. Soluta et inventore est sapiente saepe voluptatem tempora ad.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?71598",
            "description": "Accusantium eveniet perspiciatis ullam.",
            "description_en": "Eveniet est nisi perspiciatis saepe id fugiat.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?23465",
            "parent_id": 20,
            "created_at": "2020-08-04 16:30:23",
            "updated_at": "2020-08-11 00:56:22",
            "parent_title": "面膜"
        },
        {
            "id": 5,
            "slug": "maxime-dolores",
            "title": "腮红",
            "title_en": "placeat fugiat dolorem",
            "describe": "Qui aut repellat vero veniam vel. Assumenda exercitationem sit sint accusantium facilis id. Eum impedit ratione excepturi saepe illum atque in. Ipsa nostrum atque aut mollitia.",
            "describe_en": "Non repudiandae aliquid assumenda voluptatum voluptas voluptas qui. Doloremque pariatur nostrum commodi quia iusto est natus sit. Est dolorem autem ratione eaque sint.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?31735",
            "description": "Labore aliquam eos possimus minima ex in.",
            "description_en": "Doloribus voluptatem et eveniet dolore aperiam.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?69209",
            "parent_id": 19,
            "created_at": "2020-07-24 09:47:00",
            "updated_at": "2020-08-05 01:03:15",
            "parent_title": "眼霜"
        },
        {
            "id": 6,
            "slug": "et-soluta",
            "title": "粉底液",
            "title_en": "vero doloribus aut",
            "describe": "Sed voluptas provident perferendis sed. Odio dolores praesentium neque repudiandae modi. Dolore deleniti sit debitis et quia sed at.",
            "describe_en": "Et enim et et error dolor expedita. Natus illo inventore qui accusamus. Distinctio voluptate eos vitae a ea.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?40808",
            "description": "Itaque odit minima labore quia.",
            "description_en": "Eos consequatur cum omnis sint.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?31002",
            "parent_id": 17,
            "created_at": "2020-07-20 07:39:26",
            "updated_at": "2020-07-22 01:20:15",
            "parent_title": "爽肤水"
        },
        {
            "id": 7,
            "slug": "veritatis-rerum",
            "title": "隔离",
            "title_en": "rerum rerum dicta",
            "describe": "Id ut veritatis magni a cumque maiores dolorem. Dignissimos non labore et dignissimos est et rerum. Officia aliquid sequi occaecati beatae aut.",
            "describe_en": "Voluptatem quibusdam non sint saepe harum nemo dolores officia. Assumenda sint debitis sed ea. Tempora sint voluptatem totam aut at. Dolores voluptas non voluptatem sed.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?36148",
            "description": "Iste veritatis quaerat qui labore.",
            "description_en": "Qui et nesciunt voluptatibus ducimus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?20837",
            "parent_id": 14,
            "created_at": "2020-08-17 04:31:53",
            "updated_at": "2020-07-18 14:51:20",
            "parent_title": "睫毛膏"
        },
        {
            "id": 8,
            "slug": "autem-aspernatur",
            "title": "身体护理",
            "title_en": "velit soluta dolore",
            "describe": "Dolorem accusamus minima quia veniam cupiditate eaque. Rerum omnis saepe deleniti saepe et itaque.",
            "describe_en": "Numquam qui expedita illum libero nihil soluta nemo. Vero rem culpa deserunt maxime nam. Neque dolores saepe dolorum in exercitationem et. Aut quod aliquid itaque quia cumque.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?72053",
            "description": "Fugiat quae enim officia assumenda.",
            "description_en": "Sunt maiores aut maxime quod dolor cum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?97404",
            "parent_id": 4,
            "created_at": "2020-07-26 19:12:26",
            "updated_at": "2020-08-01 15:37:59",
            "parent_title": "面霜"
        },
        {
            "id": 9,
            "slug": "et-provident",
            "title": "BB霜",
            "title_en": "ut sit et",
            "describe": "Sit aliquid et nam consequuntur fuga adipisci impedit. Voluptatem et sed quaerat vero. Ut unde architecto voluptatem voluptatibus et. Debitis veniam assumenda deleniti neque in voluptatem.",
            "describe_en": "Et laboriosam libero praesentium ut. Beatae amet impedit ut ad consequatur. Debitis dolorum omnis quas nihil rerum enim et. Atque id est mollitia laborum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?71803",
            "description": "Et vitae accusamus aut magni.",
            "description_en": "Facere error enim in aut.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?75239",
            "parent_id": 13,
            "created_at": "2020-08-06 18:13:22",
            "updated_at": "2020-08-16 03:01:46",
            "parent_title": "腮红"
        },
        {
            "id": 10,
            "slug": "libero-nam",
            "title": "腮红",
            "title_en": "vitae est eum",
            "describe": "Aut ex ratione inventore nihil soluta et. Ad dolorem itaque quibusdam. Magnam quaerat aut debitis officia debitis sunt. Impedit voluptas velit in earum qui exercitationem.",
            "describe_en": "Iure officiis eveniet accusamus sed at vel. Et aut et consectetur. Officia provident nesciunt est quia sunt quo.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?21527",
            "description": "Fuga nihil in ut enim sed.",
            "description_en": "Assumenda aliquid quas illum quia.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?83780",
            "parent_id": 10,
            "created_at": "2020-07-21 03:30:34",
            "updated_at": "2020-08-01 08:01:03",
            "parent_title": "腮红"
        },
        {
            "id": 11,
            "slug": "delectus-officiis",
            "title": "唇膏",
            "title_en": "laborum cupiditate labore",
            "describe": "Illo vero rerum perspiciatis pariatur maiores fuga qui. Autem enim possimus doloribus. Ut ut voluptatem vero. Aut et aut dolorem aut magnam et inventore.",
            "describe_en": "Ullam quia consequuntur aut corrupti rerum aut et. Beatae dolorum et cupiditate. Velit facere illo cumque sequi officiis labore.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?89950",
            "description": "Sit nobis odio quidem aut.",
            "description_en": "Rem eum explicabo autem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?63750",
            "parent_id": 6,
            "created_at": "2020-08-02 02:56:12",
            "updated_at": "2020-08-08 04:09:31",
            "parent_title": "粉底液"
        },
        {
            "id": 12,
            "slug": "velit-ut",
            "title": "乳液",
            "title_en": "velit rem dignissimos",
            "describe": "Id at sed eaque error id. Amet pariatur et fuga itaque facere qui aut. Nemo voluptatem omnis molestiae qui iure atque. Ut quia tenetur ea ipsa officiis velit.",
            "describe_en": "Illum et ipsam ipsam est aliquid eum. Quisquam harum dolores enim excepturi eius omnis aut. Dignissimos repellat omnis est harum quas enim possimus. Cum quaerat ut ratione culpa sequi.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?10825",
            "description": "Enim aut dicta earum ut et ea.",
            "description_en": "Molestiae voluptatem eum rerum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?30617",
            "parent_id": 7,
            "created_at": "2020-08-03 06:03:51",
            "updated_at": "2020-08-06 01:24:42",
            "parent_title": "隔离"
        },
        {
            "id": 13,
            "slug": "asperiores-minus",
            "title": "腮红",
            "title_en": "enim ipsa voluptatem",
            "describe": "Eaque aperiam ullam eius voluptas officiis. Harum deserunt sit delectus deserunt. Dicta optio expedita ex repellat et.",
            "describe_en": "Debitis nesciunt qui possimus incidunt quia. Ea minima molestiae quam ut itaque ut laboriosam.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?32971",
            "description": "Minus natus odio est consequatur.",
            "description_en": "Est excepturi omnis aut quibusdam ipsum ut.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?89437",
            "parent_id": 6,
            "created_at": "2020-08-10 21:42:08",
            "updated_at": "2020-07-24 08:59:30",
            "parent_title": "粉底液"
        },
        {
            "id": 14,
            "slug": "vel-omnis",
            "title": "睫毛膏",
            "title_en": "molestias fuga ex",
            "describe": "Vero provident enim quia magnam cumque omnis. Dolores dolores placeat eum aut. Quis autem laborum sit voluptatem molestiae qui dicta.",
            "describe_en": "Fuga suscipit repellat architecto mollitia aliquam quod. Atque doloremque aliquam soluta sit. Veniam voluptas pariatur quis tenetur dolore maxime consequatur.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?25415",
            "description": "Molestias qui ut qui aut.",
            "description_en": "Et officiis quibusdam et hic aliquid.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?28772",
            "parent_id": 17,
            "created_at": "2020-08-15 14:33:01",
            "updated_at": "2020-08-16 10:35:29",
            "parent_title": "爽肤水"
        },
        {
            "id": 15,
            "slug": "provident-ea",
            "title": "身体护理",
            "title_en": "dolorem quam ipsum",
            "describe": "Mollitia molestiae ut et quae vero. Vel ipsum nemo ut ut. Consequuntur rerum numquam ut id. Eum necessitatibus magnam fugiat. Id quo repellendus est voluptatem eum enim omnis.",
            "describe_en": "Non a consequuntur quos voluptates repellat perspiciatis. Sapiente dolores corrupti voluptatum aut dolorem quis est. Est dolorum aperiam qui culpa.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?36709",
            "description": "Voluptatem aut quo mollitia maiores.",
            "description_en": "Est alias reiciendis explicabo est consequatur doloribus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?96875",
            "parent_id": 10,
            "created_at": "2020-08-05 08:16:15",
            "updated_at": "2020-08-17 18:12:09",
            "parent_title": "腮红"
        },
        {
            "id": 16,
            "slug": "ratione-eos",
            "title": "睫毛膏",
            "title_en": "nobis dignissimos quod",
            "describe": "Architecto nihil hic nulla minima quo. Minima excepturi dolor commodi. Officia hic qui eligendi.",
            "describe_en": "Asperiores quis aperiam tenetur voluptas rem est error. Nobis dicta et impedit et repudiandae provident qui. Sint sapiente eligendi occaecati ea at beatae.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?76712",
            "description": "Ut illo et minus nesciunt quae.",
            "description_en": "Atque eum maiores et.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?35622",
            "parent_id": 17,
            "created_at": "2020-08-02 21:55:33",
            "updated_at": "2020-07-28 05:06:44",
            "parent_title": "爽肤水"
        },
        {
            "id": 17,
            "slug": "praesentium-tempore",
            "title": "爽肤水",
            "title_en": "atque omnis illum",
            "describe": "Maiores laboriosam voluptas corporis voluptatum. Sequi sed ut ut. Quis autem dolor corrupti debitis.",
            "describe_en": "Eos consequatur et est aspernatur. Error vero repudiandae in accusantium aut et sint. Fuga eos sint maiores natus. Sint voluptates ipsum repudiandae voluptatem. Non qui eos cupiditate vel.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?16619",
            "description": "Velit quia at illo.",
            "description_en": "Voluptates ut aut ut repellendus.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?29128",
            "parent_id": 11,
            "created_at": "2020-07-29 08:12:54",
            "updated_at": "2020-07-31 02:30:12",
            "parent_title": "唇膏"
        },
        {
            "id": 18,
            "slug": "ut-nihil",
            "title": "精华",
            "title_en": "est sint ad",
            "describe": "Ut fugit accusantium adipisci quas aut aut itaque doloremque. Nostrum et provident dolor. Eveniet est voluptatem nam. Vero aut ea vero praesentium. Odit consequatur voluptatem in illo.",
            "describe_en": "Est quo fugit nulla placeat laborum exercitationem architecto. Aliquid saepe quam saepe similique occaecati maiores et.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?94652",
            "description": "Quos delectus aut ipsam.",
            "description_en": "Velit itaque illum laborum.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?62061",
            "parent_id": 14,
            "created_at": "2020-08-17 07:20:04",
            "updated_at": "2020-08-12 20:41:14",
            "parent_title": "睫毛膏"
        },
        {
            "id": 19,
            "slug": "aliquam-velit",
            "title": "眼霜",
            "title_en": "qui porro adipisci",
            "describe": "Consectetur praesentium autem soluta suscipit nemo. Aut numquam aliquid inventore. Nobis vero commodi magni amet. Cumque ea quia quisquam vel maxime voluptatum.",
            "describe_en": "Qui omnis aperiam quae cum distinctio. Eos asperiores tenetur quibusdam officiis et rerum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?95203",
            "description": "Placeat veniam dolor qui non quod error.",
            "description_en": "Similique aut id delectus earum modi recusandae.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?51200",
            "parent_id": 7,
            "created_at": "2020-08-04 19:25:48",
            "updated_at": "2020-08-17 20:26:08",
            "parent_title": "隔离"
        },
        {
            "id": 20,
            "slug": "qui-quidem",
            "title": "面膜",
            "title_en": "qui unde rem",
            "describe": "A fugit quidem quis voluptatibus. Nam facere non nostrum ea omnis minima est. Doloremque voluptatum in animi labore ab.",
            "describe_en": "Deleniti natus officiis ut omnis ipsum commodi. Eveniet itaque quia eos voluptatem. Et eum placeat sint enim. Rerum odit nemo exercitationem optio sunt. Eum voluptatum temporibus cupiditate nostrum.",
            "banner": "https:\/\/lorempixel.com\/640\/480\/?60301",
            "description": "Quae vel sapiente harum tempore.",
            "description_en": "Exercitationem itaque odit exercitationem.",
            "img": "https:\/\/lorempixel.com\/640\/480\/?20458",
            "parent_id": 4,
            "created_at": "2020-08-16 05:52:38",
            "updated_at": "2020-08-10 17:32:33",
            "parent_title": "面霜"
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
    -G "http://localhost/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product"
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
                "product_category_id": 8,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "molestiae iste natus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?76265",
                "slug": "eaque-quaerat",
                "short_description": "Voluptas eos ut molestias.",
                "short_description_en": "Doloribus maiores qui quasi nam. Nemo voluptatum enim impedit delectus soluta est nulla. Quasi veritatis maxime tenetur eos ipsum velit. Sint vel maxime et.",
                "price": "7046.00",
                "sale_price": "7311.00",
                "stock": 810,
                "spec": null,
                "seo_title": "at ea aut",
                "seo_keyword": "voluptas",
                "seo_description": "Neque fuga aliquam in odio odio.",
                "benefit": "Nihil eveniet cumque est eligendi sed. Ea animi ex aperiam dolore dignissimos ad. Unde aut numquam dolores est asperiores recusandae. Quaerat autem vitae velit consectetur.",
                "benefit_en": "Laudantium optio dolorum tempora sed ut deleniti laudantium. Laudantium quia nostrum ut dolor voluptatum a. Eaque assumenda perferendis ut consectetur itaque provident. Amet dolores assumenda quidem et officiis voluptates numquam.",
                "tech_description": "Eum eveniet voluptatem tempore necessitatibus harum quos. Odit nisi pariatur qui eos. Quaerat quia aut maxime ut omnis est similique. Sit odit vero eveniet quia aperiam excepturi. Itaque cupiditate similique et odio.",
                "tech_description_en": "Quo officiis amet maxime et omnis unde. Voluptatem velit voluptas eius repellendus. Aut architecto veniam accusantium deserunt aliquam ad aliquam.",
                "description": "Provident voluptatem aspernatur atque voluptas et et voluptas. Dolor ea dolor et modi occaecati fugiat et. Facere dignissimos sint consequatur et. Incidunt sequi at libero voluptatem facilis.",
                "description_en": "Voluptatem illum harum culpa est. Minus veritatis officiis tempora accusantium. Id aut vel dolor rerum ad.",
                "usage": "Non provident enim aspernatur numquam. Quos et sint ab est occaecati est quia. Sequi eum qui adipisci et ut dolorum porro. Voluptatibus asperiores iusto magnam omnis mollitia.",
                "usage_en": "Ut eaque vel rerum et qui. Aliquid in nemo totam at qui velit excepturi. Tempore quo sint fugit sit reiciendis ea velit dolorem. Dolor expedita iste ut velit asperiores. Nemo corporis sed aut quod porro quisquam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?81977",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?81855",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?87021",
                "product_video": null,
                "status": 2,
                "rating": 3.18,
                "sold_count": 9982,
                "review_count": 6651,
                "created_at": "2020-07-20 09:38:27",
                "updated_at": "2020-07-22 02:05:45",
                "product_category": {
                    "id": 8,
                    "slug": "autem-aspernatur",
                    "title": "身体护理",
                    "title_en": "velit soluta dolore",
                    "describe": "Dolorem accusamus minima quia veniam cupiditate eaque. Rerum omnis saepe deleniti saepe et itaque.",
                    "describe_en": "Numquam qui expedita illum libero nihil soluta nemo. Vero rem culpa deserunt maxime nam. Neque dolores saepe dolorum in exercitationem et. Aut quod aliquid itaque quia cumque.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72053",
                    "description": "Fugiat quae enim officia assumenda.",
                    "description_en": "Sunt maiores aut maxime quod dolor cum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97404",
                    "parent_id": 4,
                    "created_at": "2020-07-26 19:12:26",
                    "updated_at": "2020-08-01 15:37:59"
                }
            },
            {
                "id": 2,
                "product_category_id": 12,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "accusantium sit magnam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54856",
                "slug": "velit-dicta",
                "short_description": "Vel aut eaque facere autem odit velit.",
                "short_description_en": "Non cumque ipsam possimus voluptas molestiae reprehenderit voluptatum iure. Consequatur ea nisi enim accusamus a. Libero quo libero ut aliquid adipisci. Error fugit et et minus similique omnis quas.",
                "price": "8102.00",
                "sale_price": "6807.00",
                "stock": 320,
                "spec": null,
                "seo_title": "aut sint blanditiis",
                "seo_keyword": "consequuntur",
                "seo_description": "Aut magni temporibus quis nihil natus.",
                "benefit": "Error assumenda quasi autem vel omnis deleniti magnam. Omnis aut vel quidem ea natus quod. Est sint et voluptatibus maiores.",
                "benefit_en": "Velit et ipsa asperiores reprehenderit qui. Et voluptatem ea impedit voluptate omnis.",
                "tech_description": "Quis nemo sed velit rem. Repellat vel sunt nam aut tenetur. Nostrum culpa maiores consequatur nemo quia accusamus. Est vero aspernatur autem.",
                "tech_description_en": "Autem architecto sint itaque excepturi. Voluptatem quos cupiditate vero dicta consequatur est alias.",
                "description": "Minus sed nesciunt labore. Voluptatum natus ea incidunt et. Optio quas ea odit ratione totam et quia. Exercitationem odio velit officiis voluptate.",
                "description_en": "Dolor aut consequatur iure aut. Non accusantium rerum officiis facere veniam assumenda. Et dolor totam autem recusandae. Est distinctio est totam.",
                "usage": "Optio nostrum veniam doloribus tempore facere explicabo. Itaque sint corrupti asperiores dolore quod voluptatum odio neque. Est maxime aut mollitia alias quaerat asperiores omnis. Dicta quasi nulla ad.",
                "usage_en": "Est sunt aut ut voluptatem quas ab aut placeat. Et sint mollitia incidunt vel cumque qui. Possimus fuga odio voluptatem quia quis. Eaque cupiditate et corporis aut numquam id eos.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?49811",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?20968",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?15086",
                "product_video": null,
                "status": 1,
                "rating": 1.7,
                "sold_count": 3070,
                "review_count": 5171,
                "created_at": "2020-08-04 14:57:41",
                "updated_at": "2020-08-05 12:18:43",
                "product_category": {
                    "id": 12,
                    "slug": "velit-ut",
                    "title": "乳液",
                    "title_en": "velit rem dignissimos",
                    "describe": "Id at sed eaque error id. Amet pariatur et fuga itaque facere qui aut. Nemo voluptatem omnis molestiae qui iure atque. Ut quia tenetur ea ipsa officiis velit.",
                    "describe_en": "Illum et ipsam ipsam est aliquid eum. Quisquam harum dolores enim excepturi eius omnis aut. Dignissimos repellat omnis est harum quas enim possimus. Cum quaerat ut ratione culpa sequi.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?10825",
                    "description": "Enim aut dicta earum ut et ea.",
                    "description_en": "Molestiae voluptatem eum rerum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?30617",
                    "parent_id": 7,
                    "created_at": "2020-08-03 06:03:51",
                    "updated_at": "2020-08-06 01:24:42"
                }
            },
            {
                "id": 3,
                "product_category_id": 11,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "est officiis perspiciatis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?12875",
                "slug": "ipsa-voluptatum",
                "short_description": "Veritatis laboriosam eius eaque et velit.",
                "short_description_en": "Quaerat non amet delectus labore velit corporis. Eaque sunt architecto mollitia ad reprehenderit nisi qui et. Rerum laudantium pariatur repellat possimus.",
                "price": "6639.00",
                "sale_price": "7788.00",
                "stock": 869,
                "spec": null,
                "seo_title": "et quae voluptate",
                "seo_keyword": "est",
                "seo_description": "Mollitia laudantium officia temporibus vel et rerum.",
                "benefit": "Libero culpa ad et quidem. Dolorem at occaecati debitis aut quis repellat vel. Cumque aliquid perferendis explicabo maiores. Non facilis fuga adipisci et illo est. Sit suscipit qui ullam voluptatibus non nihil.",
                "benefit_en": "Rerum sequi sit voluptates et et. Ipsam aut et labore facere delectus et commodi. Vel repellat necessitatibus perspiciatis molestiae.",
                "tech_description": "Soluta nihil enim laborum. Praesentium omnis similique aut. Minus omnis doloribus nostrum quam qui ipsam. Ex quasi quia eaque vel dolorem.",
                "tech_description_en": "Ad rerum asperiores minus similique labore mollitia. Consequatur autem dolor nobis. Et reiciendis architecto rerum sint. Vero dolores dolores rerum voluptates et asperiores atque.",
                "description": "Eos dolores sed facilis illum enim neque. Asperiores sed quos voluptatem eum dicta occaecati expedita.",
                "description_en": "Dolores ut quaerat ipsam libero. Odit aut et ut consequatur. Nihil quae molestiae enim harum.",
                "usage": "Delectus odio nihil et officiis. Itaque natus cumque sed libero est est ut. Sunt itaque laudantium animi fugiat dolores placeat quis. Nihil earum quaerat similique iste sit et.",
                "usage_en": "Ullam et quidem eos labore eius reiciendis ullam. Odio sit neque dolores consequatur nihil ea. Est nihil laboriosam minus deleniti fugit quibusdam veritatis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?55241",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?36110",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?93227",
                "product_video": null,
                "status": 2,
                "rating": 0.43,
                "sold_count": 2795,
                "review_count": 7426,
                "created_at": "2020-07-23 11:44:14",
                "updated_at": "2020-07-26 12:08:42",
                "product_category": {
                    "id": 11,
                    "slug": "delectus-officiis",
                    "title": "唇膏",
                    "title_en": "laborum cupiditate labore",
                    "describe": "Illo vero rerum perspiciatis pariatur maiores fuga qui. Autem enim possimus doloribus. Ut ut voluptatem vero. Aut et aut dolorem aut magnam et inventore.",
                    "describe_en": "Ullam quia consequuntur aut corrupti rerum aut et. Beatae dolorum et cupiditate. Velit facere illo cumque sequi officiis labore.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?89950",
                    "description": "Sit nobis odio quidem aut.",
                    "description_en": "Rem eum explicabo autem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?63750",
                    "parent_id": 6,
                    "created_at": "2020-08-02 02:56:12",
                    "updated_at": "2020-08-08 04:09:31"
                }
            },
            {
                "id": 4,
                "product_category_id": 19,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "eum exercitationem qui",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?57023",
                "slug": "blanditiis-in",
                "short_description": "Tenetur dicta harum id molestias et.",
                "short_description_en": "Vero magni iste ducimus neque deserunt doloribus veniam. Repellendus in est ut. Consectetur voluptatem architecto quod impedit error dolores.",
                "price": "703.00",
                "sale_price": "1942.00",
                "stock": 451,
                "spec": null,
                "seo_title": "animi quos placeat",
                "seo_keyword": "iusto",
                "seo_description": "Perferendis voluptas saepe sed eligendi quam.",
                "benefit": "Non ducimus officiis corporis eaque voluptatem. In beatae possimus quae hic quos. Quia eos ipsum quia aut voluptatem aliquid voluptate animi. Autem quibusdam nihil molestias dolor est.",
                "benefit_en": "Accusantium aut fuga repellendus sunt non occaecati nesciunt molestias. Quasi veniam aut velit. Qui non incidunt et voluptatem amet soluta aspernatur.",
                "tech_description": "Consectetur ad et reprehenderit ipsa. Accusantium eos est sed et aliquam. Rerum dolores molestiae aut eum.",
                "tech_description_en": "Delectus et tempora necessitatibus animi labore ut. Possimus ducimus autem inventore voluptas ut ut voluptas. Totam minus labore illum vero architecto ea quia provident. Quia rem consectetur aperiam qui.",
                "description": "Impedit quos assumenda cumque cupiditate totam. Deserunt consequatur sequi praesentium tempora nobis sed ducimus. Est dolorem laudantium in id explicabo.",
                "description_en": "Incidunt quos provident sed id. Ad praesentium laboriosam veritatis veritatis nisi qui quibusdam. Est enim et odio sint sit vel hic sed.",
                "usage": "Deleniti nihil illo qui maxime perferendis est doloribus. Asperiores tenetur voluptates perspiciatis non accusamus officiis.",
                "usage_en": "Voluptatibus sint quae veniam dolorum asperiores ullam. Sit voluptatem maiores voluptate consequuntur excepturi ea. Qui et reprehenderit provident assumenda.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?52904",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?45909",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?67470",
                "product_video": null,
                "status": 3,
                "rating": 3.42,
                "sold_count": 5629,
                "review_count": 4787,
                "created_at": "2020-07-24 05:59:21",
                "updated_at": "2020-08-02 04:35:19",
                "product_category": {
                    "id": 19,
                    "slug": "aliquam-velit",
                    "title": "眼霜",
                    "title_en": "qui porro adipisci",
                    "describe": "Consectetur praesentium autem soluta suscipit nemo. Aut numquam aliquid inventore. Nobis vero commodi magni amet. Cumque ea quia quisquam vel maxime voluptatum.",
                    "describe_en": "Qui omnis aperiam quae cum distinctio. Eos asperiores tenetur quibusdam officiis et rerum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95203",
                    "description": "Placeat veniam dolor qui non quod error.",
                    "description_en": "Similique aut id delectus earum modi recusandae.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?51200",
                    "parent_id": 7,
                    "created_at": "2020-08-04 19:25:48",
                    "updated_at": "2020-08-17 20:26:08"
                }
            },
            {
                "id": 5,
                "product_category_id": 14,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "aut quo necessitatibus",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?27473",
                "slug": "distinctio-laudantium",
                "short_description": "Aliquam magnam dolor facilis quos ut.",
                "short_description_en": "Adipisci provident rerum at ex sed omnis cupiditate. Corporis iure vel nobis soluta cum. Corporis repellat dolorum fugiat sunt qui illum laudantium.",
                "price": "8553.00",
                "sale_price": "4864.00",
                "stock": 155,
                "spec": null,
                "seo_title": "voluptates explicabo repudiandae",
                "seo_keyword": "quibusdam",
                "seo_description": "Assumenda quia soluta aliquam qui dolorem ut.",
                "benefit": "Magni veritatis aut voluptatem temporibus ullam eveniet. Eos voluptate nobis maiores corrupti quae beatae. Sequi est nam quia non. Esse reprehenderit error non explicabo.",
                "benefit_en": "Illo sit occaecati ut tenetur amet amet. Non in debitis blanditiis. Ullam est fugiat enim id.",
                "tech_description": "Consequatur nobis eos tempore quo laboriosam est. Illum ut quia qui maxime et non velit. Minima atque impedit distinctio occaecati. Sequi autem optio minus et in aut consequuntur.",
                "tech_description_en": "Eveniet culpa omnis voluptate voluptatibus beatae eveniet excepturi. Ut et debitis ipsam velit. Eos ut ut ad non minima eum. Consequatur explicabo eos natus dolores qui et repellendus.",
                "description": "Amet ut sint hic est ab. Deserunt voluptatem vero id iure. Et occaecati ea similique et. Autem fuga neque eos rerum molestiae.",
                "description_en": "Voluptatem dolorem expedita in sunt ullam porro. Ut facilis nesciunt sit placeat. Unde illum qui assumenda deleniti. Eum asperiores ab iste doloribus aspernatur.",
                "usage": "Deserunt fugit voluptas expedita et deleniti et et. Nihil labore enim esse. In voluptate inventore non illo a praesentium sunt velit. Rem assumenda qui quia delectus quos voluptatibus tenetur. A autem nobis molestiae saepe doloremque.",
                "usage_en": "Quia aut qui asperiores quos. Sed possimus iste deleniti. Cupiditate sit aut a similique enim magni. Nemo soluta cum quia quos tempore veritatis. Tempora asperiores aut fugit enim et sint.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?86478",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?33262",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?63559",
                "product_video": null,
                "status": 3,
                "rating": 4.42,
                "sold_count": 4368,
                "review_count": 4753,
                "created_at": "2020-07-30 05:31:51",
                "updated_at": "2020-07-31 18:40:57",
                "product_category": {
                    "id": 14,
                    "slug": "vel-omnis",
                    "title": "睫毛膏",
                    "title_en": "molestias fuga ex",
                    "describe": "Vero provident enim quia magnam cumque omnis. Dolores dolores placeat eum aut. Quis autem laborum sit voluptatem molestiae qui dicta.",
                    "describe_en": "Fuga suscipit repellat architecto mollitia aliquam quod. Atque doloremque aliquam soluta sit. Veniam voluptas pariatur quis tenetur dolore maxime consequatur.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?25415",
                    "description": "Molestias qui ut qui aut.",
                    "description_en": "Et officiis quibusdam et hic aliquid.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?28772",
                    "parent_id": 17,
                    "created_at": "2020-08-15 14:33:01",
                    "updated_at": "2020-08-16 10:35:29"
                }
            },
            {
                "id": 6,
                "product_category_id": 2,
                "product_name": "钻石焕活面膜",
                "product_name_en": "dolorem quibusdam id",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?52368",
                "slug": "asperiores-quibusdam",
                "short_description": "Vel dolorem vel debitis.",
                "short_description_en": "Sit molestiae quibusdam consectetur odio et. Voluptatem sequi laudantium exercitationem eos officiis. Temporibus numquam quia odit quos amet doloribus. A aliquid quia aspernatur voluptates repellendus ut.",
                "price": "4629.00",
                "sale_price": "8159.00",
                "stock": 339,
                "spec": null,
                "seo_title": "sapiente rem ut",
                "seo_keyword": "animi",
                "seo_description": "Exercitationem laudantium nulla dolor illo ad.",
                "benefit": "Nam nihil aut dolorem. Tempore in at illum omnis perferendis non.",
                "benefit_en": "Laudantium beatae repellat accusantium. Aut impedit aut qui quo.",
                "tech_description": "Voluptate ut dolorem fuga non voluptas. Ad incidunt in aut esse. Ratione quia nulla sit numquam ab porro facilis.",
                "tech_description_en": "Error non tempore dolore quae impedit ea. Voluptatibus facere sequi provident. Voluptates fugiat rem porro odio tenetur vel. Incidunt quis sunt provident incidunt.",
                "description": "Debitis atque aut quia repellat. Sint rerum quidem et nisi. Provident sed aut illo consequatur ullam. Blanditiis non doloremque aut aliquam aut.",
                "description_en": "Laborum expedita laudantium accusamus est aperiam. Aliquam modi deserunt porro iste blanditiis qui. Et est et voluptates ut quis vel.",
                "usage": "Enim eius aut rerum quia fugiat velit natus facilis. Ducimus omnis fugiat officiis non ut. Rerum alias qui minima voluptas. Molestiae vel voluptas et quasi quo. Laboriosam aperiam perferendis ut exercitationem.",
                "usage_en": "Molestias voluptatem maxime qui dolores beatae ad nesciunt. Aliquam iure veniam nam aspernatur ad. Ut consequatur consequatur corrupti.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?44065",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?69706",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?77584",
                "product_video": null,
                "status": 2,
                "rating": 7.93,
                "sold_count": 9927,
                "review_count": 3074,
                "created_at": "2020-07-25 17:25:33",
                "updated_at": "2020-08-12 03:17:08",
                "product_category": {
                    "id": 2,
                    "slug": "voluptate-facere",
                    "title": "睫毛膏",
                    "title_en": "veniam explicabo deleniti",
                    "describe": "Eligendi sint animi illo dolor molestiae nisi quis. Quos soluta ut aut adipisci a. Veritatis sunt quae nesciunt unde mollitia.",
                    "describe_en": "Earum ut amet veniam fugiat. Inventore temporibus est et harum omnis consequatur pariatur. Cumque nam vitae maxime hic ut. Culpa et laboriosam autem illo ipsum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?70429",
                    "description": "Autem consequatur est ipsum.",
                    "description_en": "Necessitatibus blanditiis sit explicabo minima quo eveniet.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?53573",
                    "parent_id": 15,
                    "created_at": "2020-08-06 19:37:49",
                    "updated_at": "2020-08-03 12:44:20"
                }
            },
            {
                "id": 7,
                "product_category_id": 20,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "consequatur magnam quod",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?85917",
                "slug": "vero-accusantium",
                "short_description": "Quae aut voluptatum aperiam laboriosam.",
                "short_description_en": "Earum soluta veniam dolorem occaecati. Quo nisi ut suscipit eius. Perspiciatis unde ipsum esse quaerat accusamus animi. Aut quis rerum incidunt similique maiores deserunt saepe.",
                "price": "7461.00",
                "sale_price": "6472.00",
                "stock": 903,
                "spec": null,
                "seo_title": "veritatis laboriosam qui",
                "seo_keyword": "rerum",
                "seo_description": "Nihil delectus architecto iste quae quidem qui.",
                "benefit": "Accusamus ducimus aut perspiciatis praesentium sit est. Voluptatem omnis ullam beatae ut iusto corporis consequuntur. Magnam consequatur est atque quia consequatur velit facilis voluptatibus. Aliquid hic molestias sed sunt non et veritatis.",
                "benefit_en": "Ratione totam vel fugit sapiente nulla vel molestiae. Est nam quo debitis. Quibusdam praesentium nostrum at qui. Harum quo dolore consequuntur ea.",
                "tech_description": "Consequatur sed error aut ullam id. Laboriosam assumenda quo dignissimos commodi omnis atque. Assumenda ut voluptatem officiis ad libero. Et cupiditate qui fuga ipsum illum ipsum.",
                "tech_description_en": "Est impedit nemo ut cumque adipisci. Dolorum voluptatem eos repellat est. Et recusandae aut suscipit aut qui aspernatur.",
                "description": "Culpa dicta vel repudiandae ut eveniet est. Eos perferendis qui nobis illum et in eos. Est corporis saepe voluptas sit qui.",
                "description_en": "Voluptates mollitia praesentium voluptates aut. Sunt consequuntur ducimus placeat voluptatem exercitationem. Qui sequi repellendus sequi. Excepturi repellendus rem culpa distinctio et.",
                "usage": "Ad totam cum enim et ducimus dolores. Enim temporibus dolores facere et et debitis minus cum. Ab modi libero autem quo eos animi saepe.",
                "usage_en": "Dolor soluta earum est ex rem nihil id explicabo. Possimus voluptas et incidunt mollitia similique rem. Et ea aliquid et expedita saepe in aperiam. Non nam repudiandae accusantium consectetur alias alias voluptatem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?17236",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?46711",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?88533",
                "product_video": null,
                "status": 2,
                "rating": 6.44,
                "sold_count": 8504,
                "review_count": 7435,
                "created_at": "2020-07-23 17:30:41",
                "updated_at": "2020-07-19 03:24:54",
                "product_category": {
                    "id": 20,
                    "slug": "qui-quidem",
                    "title": "面膜",
                    "title_en": "qui unde rem",
                    "describe": "A fugit quidem quis voluptatibus. Nam facere non nostrum ea omnis minima est. Doloremque voluptatum in animi labore ab.",
                    "describe_en": "Deleniti natus officiis ut omnis ipsum commodi. Eveniet itaque quia eos voluptatem. Et eum placeat sint enim. Rerum odit nemo exercitationem optio sunt. Eum voluptatum temporibus cupiditate nostrum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?60301",
                    "description": "Quae vel sapiente harum tempore.",
                    "description_en": "Exercitationem itaque odit exercitationem.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?20458",
                    "parent_id": 4,
                    "created_at": "2020-08-16 05:52:38",
                    "updated_at": "2020-08-10 17:32:33"
                }
            },
            {
                "id": 8,
                "product_category_id": 4,
                "product_name": "黑钻焕肤水",
                "product_name_en": "corporis ut vitae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?99805",
                "slug": "accusantium-omnis",
                "short_description": "Aliquam qui expedita et ad voluptatibus architecto.",
                "short_description_en": "Sequi nulla deserunt ut voluptatem blanditiis quia. Fugit quidem est est aut. Dolorem quidem laudantium beatae nesciunt molestiae.",
                "price": "7267.00",
                "sale_price": "5179.00",
                "stock": 314,
                "spec": null,
                "seo_title": "voluptates eos assumenda",
                "seo_keyword": "necessitatibus",
                "seo_description": "Nulla non quia error perferendis deleniti.",
                "benefit": "Voluptas impedit omnis laudantium non voluptatibus sed voluptatem consequatur. Qui eaque earum et earum alias. Ipsa quia sed est odio sint. Tempora modi illum quasi deserunt consequatur sit aut.",
                "benefit_en": "Ut natus consequatur natus saepe beatae sit eius. Blanditiis eos voluptatem eius quo perferendis fugiat error. Quasi explicabo doloribus suscipit qui debitis aut odit. Quae aspernatur sapiente mollitia non.",
                "tech_description": "Esse et quibusdam et molestiae. Nostrum expedita et nihil omnis qui est. Aspernatur voluptates odio aspernatur non alias quisquam pariatur.",
                "tech_description_en": "Quia maiores molestias est fugit voluptates. Magnam amet inventore corporis voluptas. Quisquam harum dolorum id nostrum dolor dicta qui.",
                "description": "Magni autem fuga adipisci nesciunt quidem doloribus exercitationem. Reprehenderit dolorem deserunt nobis et enim omnis veritatis doloremque. Eum ex illo sit eum inventore. Fuga quia inventore ea. Non voluptatem dolorem eos tenetur exercitationem ad aut voluptatem.",
                "description_en": "Voluptas et ducimus iusto aliquam voluptates facere. Veritatis voluptatem et tempore aut. Magni et eaque quia sit.",
                "usage": "Minus voluptatem dolor doloremque sint odit tenetur. Et eligendi nemo asperiores et. Ut repellendus saepe fugit ut.",
                "usage_en": "Autem et iusto vel accusantium blanditiis dolores. Facilis quis exercitationem reprehenderit consequuntur aspernatur officia. Architecto dolor nesciunt non occaecati.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?83955",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?60885",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?91433",
                "product_video": null,
                "status": 2,
                "rating": 5.02,
                "sold_count": 1831,
                "review_count": 9910,
                "created_at": "2020-08-11 04:51:04",
                "updated_at": "2020-08-05 15:16:33",
                "product_category": {
                    "id": 4,
                    "slug": "fuga-eius",
                    "title": "面霜",
                    "title_en": "quos provident possimus",
                    "describe": "Consectetur ducimus quisquam ducimus. Qui voluptates omnis ab est commodi omnis voluptas. Dolores eum tenetur fugiat. Labore soluta debitis sit doloremque molestiae cumque atque.",
                    "describe_en": "Quibusdam quia minus quo. Distinctio dolorum nesciunt earum laborum odio cupiditate repudiandae. Quis sapiente aut aut ab. Soluta et inventore est sapiente saepe voluptatem tempora ad.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?71598",
                    "description": "Accusantium eveniet perspiciatis ullam.",
                    "description_en": "Eveniet est nisi perspiciatis saepe id fugiat.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?23465",
                    "parent_id": 20,
                    "created_at": "2020-08-04 16:30:23",
                    "updated_at": "2020-08-11 00:56:22"
                }
            },
            {
                "id": 9,
                "product_category_id": 5,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "minus ratione odit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?91218",
                "slug": "est-quis",
                "short_description": "Non quasi neque voluptate beatae aut.",
                "short_description_en": "Delectus quae minus debitis voluptatem. Non repudiandae mollitia enim aliquid laudantium nemo quo. Voluptatum cum excepturi repudiandae impedit eius. Quibusdam architecto voluptas soluta modi officia qui minima.",
                "price": "1282.00",
                "sale_price": "1546.00",
                "stock": 565,
                "spec": null,
                "seo_title": "omnis et quam",
                "seo_keyword": "consectetur",
                "seo_description": "Voluptatem nesciunt consequatur officiis aut.",
                "benefit": "Fugiat quis odio earum et qui. Unde eaque et architecto nam architecto. Delectus sequi et dolore aut voluptate reprehenderit. Aut aspernatur provident suscipit natus ut omnis.",
                "benefit_en": "Impedit nam neque ipsum ipsum eum id similique quos. Sequi iusto blanditiis enim delectus ipsa. Dolores non ut cum in autem eos aut.",
                "tech_description": "Magni ratione amet illum consequatur. Corporis et recusandae inventore nihil voluptatum.",
                "tech_description_en": "Cupiditate voluptatem consectetur suscipit eaque et esse. Ut nam voluptatibus quia molestias non. Quis omnis voluptas reprehenderit doloribus officiis.",
                "description": "Voluptas dicta velit cum et voluptatum excepturi. Quasi autem dicta suscipit consequatur dolorem quaerat quia velit. Illum qui et quia et ea harum.",
                "description_en": "Sunt optio reiciendis saepe. Provident et aut eos quas. Est et voluptatem minus sed ut.",
                "usage": "Earum veritatis odit libero. Sunt dolores dolor quos vero aliquid. Et laboriosam veritatis necessitatibus animi qui.",
                "usage_en": "Assumenda tempore occaecati eligendi eligendi. Eveniet ad nihil odio doloremque et et. Recusandae aut nulla ea ut fugit eaque aut libero. Commodi impedit voluptatum dolor quaerat ducimus qui consequuntur. Eaque ratione amet porro ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?61725",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?20564",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?95388",
                "product_video": null,
                "status": 1,
                "rating": 1.73,
                "sold_count": 7957,
                "review_count": 6681,
                "created_at": "2020-08-16 00:41:06",
                "updated_at": "2020-07-27 04:20:07",
                "product_category": {
                    "id": 5,
                    "slug": "maxime-dolores",
                    "title": "腮红",
                    "title_en": "placeat fugiat dolorem",
                    "describe": "Qui aut repellat vero veniam vel. Assumenda exercitationem sit sint accusantium facilis id. Eum impedit ratione excepturi saepe illum atque in. Ipsa nostrum atque aut mollitia.",
                    "describe_en": "Non repudiandae aliquid assumenda voluptatum voluptas voluptas qui. Doloremque pariatur nostrum commodi quia iusto est natus sit. Est dolorem autem ratione eaque sint.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31735",
                    "description": "Labore aliquam eos possimus minima ex in.",
                    "description_en": "Doloribus voluptatem et eveniet dolore aperiam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?69209",
                    "parent_id": 19,
                    "created_at": "2020-07-24 09:47:00",
                    "updated_at": "2020-08-05 01:03:15"
                }
            },
            {
                "id": 10,
                "product_category_id": 1,
                "product_name": "黑钻肌光精华",
                "product_name_en": "neque ipsa dolor",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?37350",
                "slug": "nam-voluptatum",
                "short_description": "Labore qui dicta excepturi ducimus.",
                "short_description_en": "Rerum officia architecto dicta optio ab aut reiciendis. In quis unde qui aspernatur est enim. Nihil dolorem enim et pariatur eum esse voluptatem.",
                "price": "4021.00",
                "sale_price": "1379.00",
                "stock": 694,
                "spec": null,
                "seo_title": "voluptas voluptatem at",
                "seo_keyword": "et",
                "seo_description": "Atque eaque hic vel sequi.",
                "benefit": "Est dolor qui reiciendis dolores eum itaque. Voluptatem in iusto architecto vel assumenda ut nemo. Beatae ex qui ducimus maiores nihil et. Laboriosam blanditiis voluptatem ex tenetur quos.",
                "benefit_en": "Similique ex id qui non in dignissimos ullam. Ipsam id cumque nesciunt eum blanditiis excepturi. Dolorum occaecati ex quis sequi molestiae dolorum. Aperiam non omnis voluptatem.",
                "tech_description": "Est repudiandae architecto perspiciatis similique asperiores. Eum voluptate soluta ipsa vero. Rerum quisquam dolores repellendus provident cupiditate. Sed ut sint impedit vero.",
                "tech_description_en": "Fuga nemo nam vero quod accusamus. Ea qui consequatur cumque placeat. At veritatis minima voluptatem officia non autem. Aspernatur fugiat quod dolores culpa ab aut laudantium.",
                "description": "Vero corporis rerum et. Laudantium sit minima temporibus. Aliquam eum quo neque a ex. Voluptates nobis doloremque aut praesentium.",
                "description_en": "Sint expedita commodi consequatur voluptatem. Non accusamus maxime ad rerum. Ad dolores soluta veniam rerum voluptates ut. Facilis harum voluptates aut sint qui.",
                "usage": "Deleniti mollitia cupiditate sint nesciunt fuga. Quia occaecati cupiditate vel odio id. Eius in laudantium quibusdam dicta asperiores.",
                "usage_en": "Ratione earum ut et et. Quam minus voluptatem aut voluptatem expedita molestias. Aut qui sed animi sed magni. Culpa ea quasi aut natus illum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?20726",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?31371",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10087",
                "product_video": null,
                "status": 1,
                "rating": 7.27,
                "sold_count": 8486,
                "review_count": 5953,
                "created_at": "2020-07-31 08:09:51",
                "updated_at": "2020-08-12 05:45:30",
                "product_category": {
                    "id": 1,
                    "slug": "et-suscipit",
                    "title": "粉底液",
                    "title_en": "qui placeat vitae",
                    "describe": "Sint asperiores dicta magnam veritatis. Molestias in sed facilis ipsum minus expedita molestias quia. Minima dignissimos molestiae ea labore. Est eum sint delectus harum debitis.",
                    "describe_en": "Unde blanditiis molestiae perspiciatis molestiae voluptatem ea ea. Libero eum molestias quae omnis nulla quis quidem. Neque ipsam nam quia voluptas consequatur a in.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?11579",
                    "description": "Hic veritatis minus quas dolore.",
                    "description_en": "Commodi libero cupiditate quisquam magni sunt.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97579",
                    "parent_id": 19,
                    "created_at": "2020-07-31 01:34:13",
                    "updated_at": "2020-08-10 10:34:31"
                }
            },
            {
                "id": 11,
                "product_category_id": 19,
                "product_name": "黑钻肌光精华",
                "product_name_en": "vitae quasi molestiae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?46796",
                "slug": "nisi-aliquid",
                "short_description": "Nesciunt consequuntur sunt sed accusantium.",
                "short_description_en": "Itaque non sequi aliquam eaque sapiente cupiditate deserunt. Distinctio reiciendis id consectetur. Nihil provident vel ut qui iusto dolorem enim.",
                "price": "6096.00",
                "sale_price": "6984.00",
                "stock": 254,
                "spec": null,
                "seo_title": "quas animi error",
                "seo_keyword": "quaerat",
                "seo_description": "Tempora vel incidunt laborum autem.",
                "benefit": "Et velit harum et est eos voluptas exercitationem quae. Doloremque quia architecto accusamus labore. Reprehenderit molestiae dolorem rerum ipsam qui expedita.",
                "benefit_en": "Non incidunt explicabo voluptates tenetur fugit. Neque est culpa culpa nostrum iusto quis.",
                "tech_description": "Accusamus sed nisi possimus. Quod deleniti magnam unde ut voluptatum velit enim. Autem quia eveniet voluptatibus laudantium doloremque reiciendis. Nemo eligendi et aliquid alias.",
                "tech_description_en": "Ad quia nostrum officiis aut porro. Quae consequuntur dolorum placeat libero quisquam illum sunt. Dolore vel ipsam reprehenderit voluptates pariatur aut et.",
                "description": "Molestias odit tempore voluptatem exercitationem voluptatibus fugit. Est fuga vel sit sed.",
                "description_en": "Et magnam atque itaque dolorem quam quae. Sed accusantium rerum illum. Perferendis aut aut doloremque odio voluptas consequatur quas. Iure debitis dolorem quam.",
                "usage": "Ut omnis consequuntur blanditiis dolore omnis cum iusto. Labore omnis quia nostrum unde qui numquam voluptatem. Necessitatibus nisi sed voluptas inventore architecto nihil suscipit officiis. Enim delectus sequi ut dolorem sapiente deleniti quia est.",
                "usage_en": "Nihil est consequatur eum molestiae corrupti eligendi sit. Dolor repellat hic animi rerum. Similique aliquid omnis aliquid corporis. Nam esse minus voluptatem id placeat aut harum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?14236",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?98161",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?79091",
                "product_video": null,
                "status": 2,
                "rating": 1.96,
                "sold_count": 1447,
                "review_count": 9508,
                "created_at": "2020-08-17 12:38:42",
                "updated_at": "2020-07-28 19:02:58",
                "product_category": {
                    "id": 19,
                    "slug": "aliquam-velit",
                    "title": "眼霜",
                    "title_en": "qui porro adipisci",
                    "describe": "Consectetur praesentium autem soluta suscipit nemo. Aut numquam aliquid inventore. Nobis vero commodi magni amet. Cumque ea quia quisquam vel maxime voluptatum.",
                    "describe_en": "Qui omnis aperiam quae cum distinctio. Eos asperiores tenetur quibusdam officiis et rerum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95203",
                    "description": "Placeat veniam dolor qui non quod error.",
                    "description_en": "Similique aut id delectus earum modi recusandae.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?51200",
                    "parent_id": 7,
                    "created_at": "2020-08-04 19:25:48",
                    "updated_at": "2020-08-17 20:26:08"
                }
            },
            {
                "id": 12,
                "product_category_id": 7,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "minima unde ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26026",
                "slug": "quidem-sit",
                "short_description": "Quis tempore molestiae quidem.",
                "short_description_en": "Vitae commodi eveniet recusandae modi. Quia ullam id sapiente. Nemo voluptatum optio vel natus eum laborum placeat nesciunt. Nesciunt alias minus quae eveniet omnis consequuntur.",
                "price": "4103.00",
                "sale_price": "9901.00",
                "stock": 895,
                "spec": null,
                "seo_title": "consectetur adipisci labore",
                "seo_keyword": "aliquam",
                "seo_description": "Hic labore fuga rerum.",
                "benefit": "Dolores repellendus architecto non et. Blanditiis et saepe minima quisquam itaque in inventore doloremque. Vitae voluptas optio debitis nemo magni. Soluta est doloribus ducimus dolorem qui ipsum.",
                "benefit_en": "Ea perspiciatis aspernatur atque repudiandae. Repellendus quia aspernatur perferendis at. Sit suscipit vel corporis. Vero at enim optio nulla. Repellendus et ipsum velit et minus quasi magnam.",
                "tech_description": "Culpa nesciunt qui eaque quae tempora neque nobis maiores. Magnam dignissimos corporis aut voluptas enim. Voluptas ipsum incidunt dolor et delectus illo. In vitae occaecati vitae.",
                "tech_description_en": "Quis quis amet qui eius. Officia voluptatem sed aut nulla enim laudantium quidem. Qui ratione sunt sint voluptatibus reprehenderit consequatur accusantium.",
                "description": "Est est qui illo. Voluptatum deserunt non et totam.",
                "description_en": "Magnam fugiat animi cum sed. Id voluptatibus perspiciatis rerum nihil consectetur rerum. Aut quia vero ut maiores dolorem excepturi inventore. Molestias adipisci totam aut commodi laboriosam odio voluptatem.",
                "usage": "Facere et quo rem itaque inventore. Aliquam corporis impedit et fuga in qui autem. At recusandae consequatur perferendis dolorum.",
                "usage_en": "Consectetur porro consequatur veniam est veritatis voluptatem. Repellat molestiae consequatur non et. Sequi nesciunt impedit recusandae officiis deleniti.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?63172",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?96238",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17971",
                "product_video": null,
                "status": 1,
                "rating": 6.6899999999999995,
                "sold_count": 1048,
                "review_count": 6398,
                "created_at": "2020-07-26 04:35:20",
                "updated_at": "2020-08-06 01:33:42",
                "product_category": {
                    "id": 7,
                    "slug": "veritatis-rerum",
                    "title": "隔离",
                    "title_en": "rerum rerum dicta",
                    "describe": "Id ut veritatis magni a cumque maiores dolorem. Dignissimos non labore et dignissimos est et rerum. Officia aliquid sequi occaecati beatae aut.",
                    "describe_en": "Voluptatem quibusdam non sint saepe harum nemo dolores officia. Assumenda sint debitis sed ea. Tempora sint voluptatem totam aut at. Dolores voluptas non voluptatem sed.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?36148",
                    "description": "Iste veritatis quaerat qui labore.",
                    "description_en": "Qui et nesciunt voluptatibus ducimus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?20837",
                    "parent_id": 14,
                    "created_at": "2020-08-17 04:31:53",
                    "updated_at": "2020-07-18 14:51:20"
                }
            },
            {
                "id": 13,
                "product_category_id": 2,
                "product_name": "黑钻肌光精华",
                "product_name_en": "voluptatem assumenda laudantium",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?10625",
                "slug": "voluptatum-sapiente",
                "short_description": "Distinctio omnis aut molestias.",
                "short_description_en": "Fugiat asperiores quo illo sed molestiae. Consequatur iste voluptatem et est repudiandae. Incidunt eos qui qui amet aliquid earum.",
                "price": "399.00",
                "sale_price": "997.00",
                "stock": 635,
                "spec": null,
                "seo_title": "asperiores porro voluptas",
                "seo_keyword": "a",
                "seo_description": "Et nobis optio dolorem.",
                "benefit": "Omnis ut amet nam sed amet quis blanditiis omnis. Asperiores molestiae esse tempore voluptas consequatur veritatis placeat consequatur. Itaque illo maiores cupiditate in. In tenetur eos vel quasi et sed. Aperiam vel voluptas possimus quia optio dolorem quo suscipit.",
                "benefit_en": "Harum suscipit quia unde quaerat ut quaerat doloremque saepe. Vel aliquid voluptas doloremque inventore voluptas dolor ab. Qui aperiam earum consequatur autem. A nobis dolor illo autem ullam architecto.",
                "tech_description": "Qui adipisci asperiores eaque voluptatem. Aut est nihil et incidunt. Placeat iusto ducimus vel aut. Sit deserunt tempore architecto earum tempore nemo alias quia. Ut aut et harum sapiente quia voluptatem.",
                "tech_description_en": "Id et quae consectetur ut nam. Voluptatem est et sapiente doloremque blanditiis. Unde quasi fugit consequuntur doloribus iure.",
                "description": "Rerum aut eum sed hic minus. Porro harum eum ducimus est neque. Sit assumenda molestiae aut culpa vero quaerat.",
                "description_en": "Et quisquam est dolores dolor neque. Quibusdam amet ut enim harum veniam. Quia non ut dolor facere.",
                "usage": "Quas officiis consequatur ratione ipsa animi. Itaque qui fuga sed praesentium facilis. Consequatur odit cumque similique eos. Eum repellendus cupiditate rerum ullam.",
                "usage_en": "Minus qui excepturi veniam architecto velit soluta id. At ducimus et consequatur vel quis. Qui quia sit blanditiis dolores. Quidem itaque architecto impedit numquam consectetur sint.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?57389",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?93578",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?62870",
                "product_video": null,
                "status": 3,
                "rating": 0.79,
                "sold_count": 6330,
                "review_count": 6097,
                "created_at": "2020-08-13 14:11:34",
                "updated_at": "2020-07-28 06:43:45",
                "product_category": {
                    "id": 2,
                    "slug": "voluptate-facere",
                    "title": "睫毛膏",
                    "title_en": "veniam explicabo deleniti",
                    "describe": "Eligendi sint animi illo dolor molestiae nisi quis. Quos soluta ut aut adipisci a. Veritatis sunt quae nesciunt unde mollitia.",
                    "describe_en": "Earum ut amet veniam fugiat. Inventore temporibus est et harum omnis consequatur pariatur. Cumque nam vitae maxime hic ut. Culpa et laboriosam autem illo ipsum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?70429",
                    "description": "Autem consequatur est ipsum.",
                    "description_en": "Necessitatibus blanditiis sit explicabo minima quo eveniet.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?53573",
                    "parent_id": 15,
                    "created_at": "2020-08-06 19:37:49",
                    "updated_at": "2020-08-03 12:44:20"
                }
            },
            {
                "id": 14,
                "product_category_id": 13,
                "product_name": "黑钻焕肤水",
                "product_name_en": "et earum minima",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?40606",
                "slug": "aliquam-illo",
                "short_description": "Quas et id totam quia pariatur maxime.",
                "short_description_en": "Ut aut porro corporis. Numquam a sit eligendi consequatur. Et et repudiandae sit dolore vel. Commodi dolores dicta voluptatem minus et et voluptatem. Accusantium dolore velit vel tenetur saepe est.",
                "price": "2051.00",
                "sale_price": "7527.00",
                "stock": 80,
                "spec": null,
                "seo_title": "autem autem saepe",
                "seo_keyword": "voluptas",
                "seo_description": "Ex nihil qui dolorem ut.",
                "benefit": "Veniam qui aut pariatur voluptas voluptate et vel dolor. Et quo voluptatem velit id praesentium dolore.",
                "benefit_en": "Sit placeat iusto illum consequatur aut ipsam repellat est. Omnis non et qui voluptatem quidem saepe. Ipsum enim explicabo doloribus ipsa. In necessitatibus ipsum eum enim.",
                "tech_description": "Modi et iusto officiis debitis est. Autem voluptas sed quam et minima. Et quasi officia aspernatur et. Non numquam iure doloremque tenetur rerum illo fuga. Ut inventore culpa dolores corrupti.",
                "tech_description_en": "Ab illum voluptatum ratione rerum maiores sed. Officia non dolorum sit facilis et dignissimos adipisci quos. Rem aut iure aliquid reprehenderit quae consequatur.",
                "description": "Mollitia aliquam error ut distinctio sed non et voluptas. Vitae quam minus molestiae ex rerum recusandae suscipit. Pariatur aspernatur veritatis ex.",
                "description_en": "Et atque possimus illum. Magni non excepturi aut quod omnis perspiciatis. Est nostrum sit saepe occaecati corrupti et. Quo doloribus occaecati assumenda sit distinctio quis ea.",
                "usage": "Facere amet repellendus alias fugiat debitis. Qui qui voluptas quae molestiae sed praesentium magnam. Vero dolorem veniam incidunt sed ea iste.",
                "usage_en": "Saepe illum voluptas quia ullam possimus et. Architecto excepturi est est animi. Et rerum accusantium rerum doloribus enim temporibus sed. Doloremque sit voluptates ut nam eos laboriosam est sed.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?57615",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?52847",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?95119",
                "product_video": null,
                "status": 3,
                "rating": 1.97,
                "sold_count": 9203,
                "review_count": 2189,
                "created_at": "2020-08-05 14:30:16",
                "updated_at": "2020-07-22 15:20:16",
                "product_category": {
                    "id": 13,
                    "slug": "asperiores-minus",
                    "title": "腮红",
                    "title_en": "enim ipsa voluptatem",
                    "describe": "Eaque aperiam ullam eius voluptas officiis. Harum deserunt sit delectus deserunt. Dicta optio expedita ex repellat et.",
                    "describe_en": "Debitis nesciunt qui possimus incidunt quia. Ea minima molestiae quam ut itaque ut laboriosam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?32971",
                    "description": "Minus natus odio est consequatur.",
                    "description_en": "Est excepturi omnis aut quibusdam ipsum ut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?89437",
                    "parent_id": 6,
                    "created_at": "2020-08-10 21:42:08",
                    "updated_at": "2020-07-24 08:59:30"
                }
            },
            {
                "id": 15,
                "product_category_id": 3,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "consequatur ut aspernatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?98070",
                "slug": "laboriosam-occaecati",
                "short_description": "Ea vel omnis dolores totam exercitationem numquam.",
                "short_description_en": "Aperiam fugit aut consequuntur porro architecto iste et aut. Ex autem quasi non. Quod omnis sint quo non voluptatem.",
                "price": "4459.00",
                "sale_price": "876.00",
                "stock": 838,
                "spec": null,
                "seo_title": "cumque debitis amet",
                "seo_keyword": "minima",
                "seo_description": "Qui consequatur quas qui.",
                "benefit": "Sed non sit consequuntur. Autem commodi et ipsam aut in occaecati. Provident veritatis sed debitis velit facilis. Illo aut voluptatem occaecati non non et.",
                "benefit_en": "Pariatur repudiandae atque ab voluptate quis dolor repudiandae. Est qui eius quaerat qui occaecati et optio. Qui sint commodi in sint nisi. Libero quos eum aliquam exercitationem.",
                "tech_description": "Debitis repellendus sit rerum ex deserunt. Corporis ratione aut laboriosam alias dolor. Dolor ut quia dolorem sed.",
                "tech_description_en": "Maxime nemo provident nobis et aut soluta. Aut et et sunt consequatur cupiditate est voluptas. Fugiat voluptatem et explicabo ducimus.",
                "description": "Non voluptas ex iusto eaque cum. Error sint aperiam fuga cumque. Eaque beatae minima natus expedita voluptatem non vitae eligendi.",
                "description_en": "Maxime quisquam eaque vero magnam officia omnis sit. Et officiis soluta neque enim omnis est eveniet. Rerum eveniet quisquam mollitia unde molestiae voluptatem eum. Voluptatem non fugit sequi voluptatem eum iure itaque et.",
                "usage": "Nemo dolores eum voluptas vel praesentium facilis saepe fugit. Fugit aut autem sint quia.",
                "usage_en": "Et nihil labore quidem dolorem. Laborum itaque aliquam inventore nihil quia inventore. Dolorem ratione aperiam est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?48955",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?49261",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?87285",
                "product_video": null,
                "status": 1,
                "rating": 3.11,
                "sold_count": 4016,
                "review_count": 9536,
                "created_at": "2020-07-30 12:17:41",
                "updated_at": "2020-07-24 23:05:57",
                "product_category": {
                    "id": 3,
                    "slug": "et-amet",
                    "title": "乳液",
                    "title_en": "voluptatem quas officia",
                    "describe": "Aut non aliquam soluta id qui numquam. Qui eveniet impedit pariatur ex. Sed officiis culpa ut suscipit eveniet delectus eius.",
                    "describe_en": "Sunt sunt ducimus impedit soluta harum repellat. Dolor alias magnam eveniet deserunt et veniam in.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?30884",
                    "description": "Sunt saepe impedit enim.",
                    "description_en": "Ipsum numquam libero nisi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?87754",
                    "parent_id": 4,
                    "created_at": "2020-08-14 23:56:37",
                    "updated_at": "2020-08-01 21:11:37"
                }
            },
            {
                "id": 16,
                "product_category_id": 13,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "quam qui et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?91326",
                "slug": "sed-numquam",
                "short_description": "Tempora qui officiis dolorem aliquam.",
                "short_description_en": "A itaque consequatur voluptatibus distinctio doloremque odit recusandae quia. Accusantium corrupti possimus iste praesentium velit laborum est. Sunt praesentium cumque tempore ipsum omnis voluptatem.",
                "price": "165.00",
                "sale_price": "185.00",
                "stock": 524,
                "spec": null,
                "seo_title": "et eius ut",
                "seo_keyword": "necessitatibus",
                "seo_description": "Consequuntur aliquam non in.",
                "benefit": "Quia vel deleniti minus praesentium rerum repudiandae. Libero rerum quaerat deserunt totam sapiente sed. Saepe possimus provident molestiae eos non dignissimos dolorem. Ut ut magnam quaerat perferendis laboriosam.",
                "benefit_en": "Fugit eum et nostrum soluta. Cumque ipsa facere saepe placeat molestias aut. At rerum consequatur qui facere. Voluptas optio fuga dolore sit.",
                "tech_description": "Est labore quo odit totam. Numquam itaque sed aliquid facere dicta ad rerum. Esse est unde et numquam nobis minima et eligendi.",
                "tech_description_en": "Velit a voluptas qui quae consequatur id est iusto. Vel exercitationem sed explicabo ullam numquam exercitationem. Dolorum omnis impedit eum beatae veritatis ex voluptatem.",
                "description": "Nobis ut soluta asperiores possimus inventore. Provident et velit odit sapiente libero magnam sit.",
                "description_en": "Quia nisi delectus non non. Mollitia debitis error et ab eos. Commodi doloremque vel et nam sint pariatur tenetur. Ut voluptates consequatur laudantium maiores qui repellat.",
                "usage": "Quae fugiat sed numquam velit velit amet deleniti. Perferendis ipsam eaque adipisci eaque atque reprehenderit. Eos minus labore provident quia quidem. Non voluptatum rerum est dolor commodi dolorem enim laboriosam.",
                "usage_en": "Illo nihil voluptatem est itaque quis ut. Nobis et et et rerum voluptatem unde cupiditate. Id eaque tempore perspiciatis. Ipsa porro ut quia deleniti id soluta.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?17774",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?66845",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?89723",
                "product_video": null,
                "status": 1,
                "rating": 8.31,
                "sold_count": 1523,
                "review_count": 8482,
                "created_at": "2020-07-23 22:44:58",
                "updated_at": "2020-08-12 16:29:08",
                "product_category": {
                    "id": 13,
                    "slug": "asperiores-minus",
                    "title": "腮红",
                    "title_en": "enim ipsa voluptatem",
                    "describe": "Eaque aperiam ullam eius voluptas officiis. Harum deserunt sit delectus deserunt. Dicta optio expedita ex repellat et.",
                    "describe_en": "Debitis nesciunt qui possimus incidunt quia. Ea minima molestiae quam ut itaque ut laboriosam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?32971",
                    "description": "Minus natus odio est consequatur.",
                    "description_en": "Est excepturi omnis aut quibusdam ipsum ut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?89437",
                    "parent_id": 6,
                    "created_at": "2020-08-10 21:42:08",
                    "updated_at": "2020-07-24 08:59:30"
                }
            },
            {
                "id": 17,
                "product_category_id": 1,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "vel qui recusandae",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?21472",
                "slug": "est-ratione",
                "short_description": "Ratione aliquam dicta ratione cupiditate placeat.",
                "short_description_en": "Sint dolorem repudiandae aut quis. Sunt laudantium aliquid illum ad temporibus est. Quasi consectetur odio eveniet quia quidem dolorem.",
                "price": "9447.00",
                "sale_price": "6502.00",
                "stock": 848,
                "spec": null,
                "seo_title": "ullam autem vitae",
                "seo_keyword": "fugit",
                "seo_description": "Officiis repudiandae dignissimos voluptas adipisci.",
                "benefit": "Aut commodi quo optio accusantium necessitatibus. Omnis omnis quae ut.",
                "benefit_en": "Vero dolores sed voluptatem unde quibusdam. Ipsam quos nulla illo omnis. Dolores enim culpa quos. Voluptatem ut fugit sed distinctio nostrum molestiae. In laboriosam ut quia placeat pariatur vel est.",
                "tech_description": "Placeat est in in beatae cumque iure. Natus similique quo aliquid. Ipsum placeat architecto debitis consectetur quia repellat. Non aut nostrum praesentium culpa officiis tempora numquam.",
                "tech_description_en": "Qui eum saepe nihil autem sunt. Odio odio nisi cupiditate qui in nulla officiis. Ipsum et omnis quibusdam quo quam.",
                "description": "Minima quam unde eos placeat sint inventore beatae. Eum ex qui voluptate sed eum ut ipsum. Consequatur alias sunt dolor id ab libero unde libero.",
                "description_en": "Assumenda aut in molestiae voluptatum et repudiandae. Accusamus cumque sapiente cum blanditiis. Voluptatem aut beatae doloribus voluptatum est. Perferendis doloribus incidunt aliquam sit veritatis provident quisquam.",
                "usage": "Perferendis beatae inventore eaque et delectus itaque a alias. Aut doloribus placeat quae eveniet ex. Rem sit molestiae explicabo. Excepturi in sequi hic quae sapiente eum dolore.",
                "usage_en": "Tempora aut aut error numquam odio voluptate. Ut labore et aliquam sapiente reiciendis eos reprehenderit. Veritatis sit aut magni nemo.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?60581",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?27341",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?92931",
                "product_video": null,
                "status": 2,
                "rating": 1.29,
                "sold_count": 1664,
                "review_count": 6100,
                "created_at": "2020-08-12 03:48:14",
                "updated_at": "2020-07-28 06:52:25",
                "product_category": {
                    "id": 1,
                    "slug": "et-suscipit",
                    "title": "粉底液",
                    "title_en": "qui placeat vitae",
                    "describe": "Sint asperiores dicta magnam veritatis. Molestias in sed facilis ipsum minus expedita molestias quia. Minima dignissimos molestiae ea labore. Est eum sint delectus harum debitis.",
                    "describe_en": "Unde blanditiis molestiae perspiciatis molestiae voluptatem ea ea. Libero eum molestias quae omnis nulla quis quidem. Neque ipsam nam quia voluptas consequatur a in.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?11579",
                    "description": "Hic veritatis minus quas dolore.",
                    "description_en": "Commodi libero cupiditate quisquam magni sunt.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97579",
                    "parent_id": 19,
                    "created_at": "2020-07-31 01:34:13",
                    "updated_at": "2020-08-10 10:34:31"
                }
            },
            {
                "id": 18,
                "product_category_id": 5,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "expedita laudantium earum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?92802",
                "slug": "nulla-ut",
                "short_description": "Quia totam eveniet et saepe facilis.",
                "short_description_en": "Molestias consequatur ipsa harum vel et ut. Earum hic sequi quis incidunt deleniti. Eaque autem pariatur sed expedita sed.",
                "price": "1178.00",
                "sale_price": "9883.00",
                "stock": 207,
                "spec": null,
                "seo_title": "et consequuntur officia",
                "seo_keyword": "voluptatem",
                "seo_description": "Quos ab rerum facere delectus.",
                "benefit": "Possimus ullam est eum. Molestias maxime corporis aut aliquid molestiae. Nihil omnis omnis harum perspiciatis doloremque. Eligendi ex non quos nisi.",
                "benefit_en": "Rerum alias ab harum et ex. Eius et veritatis optio impedit occaecati et adipisci suscipit. Qui odit unde sed qui aut corrupti. Autem dolores reiciendis autem libero est aliquam non ut.",
                "tech_description": "Et aspernatur quae aliquam ex vero. Officiis adipisci eos non qui minima corrupti qui. Odit distinctio sit odio ab. Quaerat dolor quos tenetur totam in nisi dolores temporibus.",
                "tech_description_en": "Natus quo maxime omnis quibusdam odio harum. Dolorem dignissimos temporibus quidem amet quidem. Quam nam non in occaecati alias quo et.",
                "description": "Id inventore debitis at. Et ea occaecati eius rerum facere. Ducimus est similique vitae. Ipsam ea vero doloribus.",
                "description_en": "Voluptas distinctio beatae qui iusto ut ipsa. Sequi id qui excepturi voluptates omnis quo ullam perferendis. Sit doloremque nobis et sit. Iure quibusdam qui nesciunt repellat et repellendus similique laboriosam.",
                "usage": "Aut illo non qui vero accusamus. Suscipit ut qui nisi aspernatur tenetur et. Et error sint dolor atque.",
                "usage_en": "Debitis necessitatibus aspernatur harum saepe voluptatem aut. Debitis dolore fuga sint dolorem. Aut recusandae pariatur sunt vitae voluptatem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?21447",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?52017",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17265",
                "product_video": null,
                "status": 2,
                "rating": 9.52,
                "sold_count": 2195,
                "review_count": 6140,
                "created_at": "2020-07-22 08:33:31",
                "updated_at": "2020-08-12 12:38:56",
                "product_category": {
                    "id": 5,
                    "slug": "maxime-dolores",
                    "title": "腮红",
                    "title_en": "placeat fugiat dolorem",
                    "describe": "Qui aut repellat vero veniam vel. Assumenda exercitationem sit sint accusantium facilis id. Eum impedit ratione excepturi saepe illum atque in. Ipsa nostrum atque aut mollitia.",
                    "describe_en": "Non repudiandae aliquid assumenda voluptatum voluptas voluptas qui. Doloremque pariatur nostrum commodi quia iusto est natus sit. Est dolorem autem ratione eaque sint.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31735",
                    "description": "Labore aliquam eos possimus minima ex in.",
                    "description_en": "Doloribus voluptatem et eveniet dolore aperiam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?69209",
                    "parent_id": 19,
                    "created_at": "2020-07-24 09:47:00",
                    "updated_at": "2020-08-05 01:03:15"
                }
            },
            {
                "id": 19,
                "product_category_id": 14,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "et quo rerum",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?98344",
                "slug": "suscipit-excepturi",
                "short_description": "Molestiae occaecati sint quos tempore at deserunt ducimus.",
                "short_description_en": "Aspernatur itaque aut dicta. Alias repellat totam laboriosam ut. Dolorem deleniti accusamus dolorem.",
                "price": "5432.00",
                "sale_price": "6645.00",
                "stock": 112,
                "spec": null,
                "seo_title": "et quibusdam quasi",
                "seo_keyword": "asperiores",
                "seo_description": "Qui repellendus asperiores optio quia sed.",
                "benefit": "Provident eum repudiandae voluptatibus. Est velit praesentium ad sint rem dolore et. Saepe fugiat consequatur eius. Suscipit magnam sit quia occaecati et ad assumenda.",
                "benefit_en": "Ad sapiente voluptates saepe eum accusantium hic cum. Labore ut alias aut ut sit. Laboriosam aut ratione provident labore aut excepturi.",
                "tech_description": "Aut eveniet voluptas accusantium nam atque. Repellat nemo nulla occaecati est perspiciatis cum voluptate aut. Voluptatum quia culpa inventore animi doloribus aut totam doloremque. Aut porro aut placeat ut nulla totam.",
                "tech_description_en": "Veniam quia et earum et aut. Adipisci et recusandae ullam ullam nisi veritatis minus labore. Nihil quod possimus quis soluta tempora repudiandae voluptate.",
                "description": "Quidem cumque aut tempora porro et. Ratione nobis sequi ducimus. Facilis blanditiis ut dolores rem sit.",
                "description_en": "Qui hic quas provident consequatur recusandae aperiam voluptate provident. Provident delectus ut porro cupiditate.",
                "usage": "Vel ut quidem necessitatibus dolore deserunt non. Ut deleniti fuga explicabo dolores praesentium tenetur. Repudiandae laudantium dicta quas voluptas.",
                "usage_en": "Aut architecto ut recusandae. Fugiat vel officiis qui sed ea error. Et in voluptatibus sit et sit. Alias deleniti dolorem veritatis et molestiae magnam a sed. Debitis iste a recusandae aspernatur odio adipisci sunt voluptatem.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?35253",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?49742",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?83474",
                "product_video": null,
                "status": 3,
                "rating": 8.64,
                "sold_count": 4024,
                "review_count": 9560,
                "created_at": "2020-08-09 07:46:17",
                "updated_at": "2020-07-31 23:02:52",
                "product_category": {
                    "id": 14,
                    "slug": "vel-omnis",
                    "title": "睫毛膏",
                    "title_en": "molestias fuga ex",
                    "describe": "Vero provident enim quia magnam cumque omnis. Dolores dolores placeat eum aut. Quis autem laborum sit voluptatem molestiae qui dicta.",
                    "describe_en": "Fuga suscipit repellat architecto mollitia aliquam quod. Atque doloremque aliquam soluta sit. Veniam voluptas pariatur quis tenetur dolore maxime consequatur.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?25415",
                    "description": "Molestias qui ut qui aut.",
                    "description_en": "Et officiis quibusdam et hic aliquid.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?28772",
                    "parent_id": 17,
                    "created_at": "2020-08-15 14:33:01",
                    "updated_at": "2020-08-16 10:35:29"
                }
            },
            {
                "id": 20,
                "product_category_id": 8,
                "product_name": "黑钻焕肤水",
                "product_name_en": "qui quo saepe",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?85765",
                "slug": "consectetur-dicta",
                "short_description": "Atque enim et fugiat culpa aperiam.",
                "short_description_en": "Iure repellendus ut eius ab. Ut qui culpa debitis unde. Praesentium molestias pariatur reprehenderit cupiditate voluptatem.",
                "price": "9769.00",
                "sale_price": "234.00",
                "stock": 876,
                "spec": null,
                "seo_title": "voluptatum aspernatur tempora",
                "seo_keyword": "nostrum",
                "seo_description": "Quia est omnis praesentium quisquam.",
                "benefit": "Et sequi itaque perspiciatis aut voluptatum. Aut quod aliquid aspernatur blanditiis vel.",
                "benefit_en": "Blanditiis nemo debitis harum est. Harum aliquam et dolores mollitia magnam ea occaecati. Iusto praesentium velit molestias. Laboriosam laborum voluptas qui laboriosam.",
                "tech_description": "Vel vero sit tempore id consectetur. Sint et eum cum nulla quo nihil doloribus unde. Et consequatur eveniet similique voluptas at explicabo.",
                "tech_description_en": "Hic similique quidem qui est et. Sit rerum labore totam rerum. Reprehenderit blanditiis molestiae quos qui vel sit et quaerat. Molestiae est quae voluptatem assumenda voluptatum non reiciendis.",
                "description": "Sint tempore id est. Commodi consequatur a dolores dicta occaecati. Aut soluta quia fugiat qui repudiandae sed dolor minus. Veritatis officiis aliquid dolores eum. Fuga consequatur tempora ea quis aut.",
                "description_en": "Eius voluptate enim repellendus non labore exercitationem quam. Officia suscipit dolores dolor deleniti. Aut iusto rerum aliquam dolorem. Ea error recusandae est sint. Blanditiis quod aliquam quaerat et cumque.",
                "usage": "Quis voluptatem eveniet aliquam architecto consequatur deleniti deserunt. Ipsam quae esse qui nobis nesciunt praesentium. Autem esse suscipit ut dolor rerum incidunt facilis.",
                "usage_en": "Aut mollitia aliquid libero cum. Quia repellat iste et eum consequatur non corrupti voluptatibus. Consequuntur tenetur est minus voluptatibus eos esse quo. Labore quod fuga quidem vero eos reiciendis qui.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?35174",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?32574",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?43810",
                "product_video": null,
                "status": 3,
                "rating": 3.4,
                "sold_count": 9751,
                "review_count": 1213,
                "created_at": "2020-08-11 06:06:02",
                "updated_at": "2020-08-13 08:55:29",
                "product_category": {
                    "id": 8,
                    "slug": "autem-aspernatur",
                    "title": "身体护理",
                    "title_en": "velit soluta dolore",
                    "describe": "Dolorem accusamus minima quia veniam cupiditate eaque. Rerum omnis saepe deleniti saepe et itaque.",
                    "describe_en": "Numquam qui expedita illum libero nihil soluta nemo. Vero rem culpa deserunt maxime nam. Neque dolores saepe dolorum in exercitationem et. Aut quod aliquid itaque quia cumque.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?72053",
                    "description": "Fugiat quae enim officia assumenda.",
                    "description_en": "Sunt maiores aut maxime quod dolor cum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97404",
                    "parent_id": 4,
                    "created_at": "2020-07-26 19:12:26",
                    "updated_at": "2020-08-01 15:37:59"
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

<!-- START_780e33b02e03b4552400dedc5e68f35e -->
## get product of product category
获取对应类别下的产品

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_category/1?category_slug=repellendus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_category/1"
);

let params = {
    "category_slug": "repellendus",
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
    "data": [],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/product_category/{category_slug}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `category_slug` |  required  | 分类slug

<!-- END_780e33b02e03b4552400dedc5e68f35e -->

<!-- START_0d311bc121fa5f47763c3a964aaf3691 -->
## Query the product detail
获取商品详情信息

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product/1?slug=porro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let params = {
    "slug": "porro",
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
    "data": null,
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

<!-- START_e74135bde1e41803ad4087410acd02b8 -->
## Get product category story
获取产品分类故事

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category_story/1?category_slug=accusamus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category_story/1"
);

let params = {
    "category_slug": "accusamus",
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
    "data": [],
    "code": 20001,
    "msg": "操作成功"
}
```

### HTTP Request
`GET api/category_story/{category_slug}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `category_slug` |  required  | 分类slug

<!-- END_e74135bde1e41803ad4087410acd02b8 -->

<!-- START_e1ee2f452be977620f7e0c0045529fd9 -->
## Get new product
获取新品

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product_new?page=rem&page_limit=sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product_new"
);

let params = {
    "page": "rem",
    "page_limit": "sapiente",
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
        "data": [
            {
                "id": 2,
                "product_category_id": 12,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "accusantium sit magnam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?54856",
                "slug": "velit-dicta",
                "short_description": "Vel aut eaque facere autem odit velit.",
                "short_description_en": "Non cumque ipsam possimus voluptas molestiae reprehenderit voluptatum iure. Consequatur ea nisi enim accusamus a. Libero quo libero ut aliquid adipisci. Error fugit et et minus similique omnis quas.",
                "price": "8102.00",
                "sale_price": "6807.00",
                "stock": 320,
                "spec": null,
                "seo_title": "aut sint blanditiis",
                "seo_keyword": "consequuntur",
                "seo_description": "Aut magni temporibus quis nihil natus.",
                "benefit": "Error assumenda quasi autem vel omnis deleniti magnam. Omnis aut vel quidem ea natus quod. Est sint et voluptatibus maiores.",
                "benefit_en": "Velit et ipsa asperiores reprehenderit qui. Et voluptatem ea impedit voluptate omnis.",
                "tech_description": "Quis nemo sed velit rem. Repellat vel sunt nam aut tenetur. Nostrum culpa maiores consequatur nemo quia accusamus. Est vero aspernatur autem.",
                "tech_description_en": "Autem architecto sint itaque excepturi. Voluptatem quos cupiditate vero dicta consequatur est alias.",
                "description": "Minus sed nesciunt labore. Voluptatum natus ea incidunt et. Optio quas ea odit ratione totam et quia. Exercitationem odio velit officiis voluptate.",
                "description_en": "Dolor aut consequatur iure aut. Non accusantium rerum officiis facere veniam assumenda. Et dolor totam autem recusandae. Est distinctio est totam.",
                "usage": "Optio nostrum veniam doloribus tempore facere explicabo. Itaque sint corrupti asperiores dolore quod voluptatum odio neque. Est maxime aut mollitia alias quaerat asperiores omnis. Dicta quasi nulla ad.",
                "usage_en": "Est sunt aut ut voluptatem quas ab aut placeat. Et sint mollitia incidunt vel cumque qui. Possimus fuga odio voluptatem quia quis. Eaque cupiditate et corporis aut numquam id eos.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?49811",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?20968",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?15086",
                "product_video": null,
                "status": 1,
                "rating": 1.7,
                "sold_count": 3070,
                "review_count": 5171,
                "created_at": "2020-08-04 14:57:41",
                "updated_at": "2020-08-05 12:18:43",
                "product_category": {
                    "id": 12,
                    "slug": "velit-ut",
                    "title": "乳液",
                    "title_en": "velit rem dignissimos",
                    "describe": "Id at sed eaque error id. Amet pariatur et fuga itaque facere qui aut. Nemo voluptatem omnis molestiae qui iure atque. Ut quia tenetur ea ipsa officiis velit.",
                    "describe_en": "Illum et ipsam ipsam est aliquid eum. Quisquam harum dolores enim excepturi eius omnis aut. Dignissimos repellat omnis est harum quas enim possimus. Cum quaerat ut ratione culpa sequi.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?10825",
                    "description": "Enim aut dicta earum ut et ea.",
                    "description_en": "Molestiae voluptatem eum rerum.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?30617",
                    "parent_id": 7,
                    "created_at": "2020-08-03 06:03:51",
                    "updated_at": "2020-08-06 01:24:42"
                }
            },
            {
                "id": 9,
                "product_category_id": 5,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "minus ratione odit",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?91218",
                "slug": "est-quis",
                "short_description": "Non quasi neque voluptate beatae aut.",
                "short_description_en": "Delectus quae minus debitis voluptatem. Non repudiandae mollitia enim aliquid laudantium nemo quo. Voluptatum cum excepturi repudiandae impedit eius. Quibusdam architecto voluptas soluta modi officia qui minima.",
                "price": "1282.00",
                "sale_price": "1546.00",
                "stock": 565,
                "spec": null,
                "seo_title": "omnis et quam",
                "seo_keyword": "consectetur",
                "seo_description": "Voluptatem nesciunt consequatur officiis aut.",
                "benefit": "Fugiat quis odio earum et qui. Unde eaque et architecto nam architecto. Delectus sequi et dolore aut voluptate reprehenderit. Aut aspernatur provident suscipit natus ut omnis.",
                "benefit_en": "Impedit nam neque ipsum ipsum eum id similique quos. Sequi iusto blanditiis enim delectus ipsa. Dolores non ut cum in autem eos aut.",
                "tech_description": "Magni ratione amet illum consequatur. Corporis et recusandae inventore nihil voluptatum.",
                "tech_description_en": "Cupiditate voluptatem consectetur suscipit eaque et esse. Ut nam voluptatibus quia molestias non. Quis omnis voluptas reprehenderit doloribus officiis.",
                "description": "Voluptas dicta velit cum et voluptatum excepturi. Quasi autem dicta suscipit consequatur dolorem quaerat quia velit. Illum qui et quia et ea harum.",
                "description_en": "Sunt optio reiciendis saepe. Provident et aut eos quas. Est et voluptatem minus sed ut.",
                "usage": "Earum veritatis odit libero. Sunt dolores dolor quos vero aliquid. Et laboriosam veritatis necessitatibus animi qui.",
                "usage_en": "Assumenda tempore occaecati eligendi eligendi. Eveniet ad nihil odio doloremque et et. Recusandae aut nulla ea ut fugit eaque aut libero. Commodi impedit voluptatum dolor quaerat ducimus qui consequuntur. Eaque ratione amet porro ut.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?61725",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?20564",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?95388",
                "product_video": null,
                "status": 1,
                "rating": 1.73,
                "sold_count": 7957,
                "review_count": 6681,
                "created_at": "2020-08-16 00:41:06",
                "updated_at": "2020-07-27 04:20:07",
                "product_category": {
                    "id": 5,
                    "slug": "maxime-dolores",
                    "title": "腮红",
                    "title_en": "placeat fugiat dolorem",
                    "describe": "Qui aut repellat vero veniam vel. Assumenda exercitationem sit sint accusantium facilis id. Eum impedit ratione excepturi saepe illum atque in. Ipsa nostrum atque aut mollitia.",
                    "describe_en": "Non repudiandae aliquid assumenda voluptatum voluptas voluptas qui. Doloremque pariatur nostrum commodi quia iusto est natus sit. Est dolorem autem ratione eaque sint.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?31735",
                    "description": "Labore aliquam eos possimus minima ex in.",
                    "description_en": "Doloribus voluptatem et eveniet dolore aperiam.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?69209",
                    "parent_id": 19,
                    "created_at": "2020-07-24 09:47:00",
                    "updated_at": "2020-08-05 01:03:15"
                }
            },
            {
                "id": 10,
                "product_category_id": 1,
                "product_name": "黑钻肌光精华",
                "product_name_en": "neque ipsa dolor",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?37350",
                "slug": "nam-voluptatum",
                "short_description": "Labore qui dicta excepturi ducimus.",
                "short_description_en": "Rerum officia architecto dicta optio ab aut reiciendis. In quis unde qui aspernatur est enim. Nihil dolorem enim et pariatur eum esse voluptatem.",
                "price": "4021.00",
                "sale_price": "1379.00",
                "stock": 694,
                "spec": null,
                "seo_title": "voluptas voluptatem at",
                "seo_keyword": "et",
                "seo_description": "Atque eaque hic vel sequi.",
                "benefit": "Est dolor qui reiciendis dolores eum itaque. Voluptatem in iusto architecto vel assumenda ut nemo. Beatae ex qui ducimus maiores nihil et. Laboriosam blanditiis voluptatem ex tenetur quos.",
                "benefit_en": "Similique ex id qui non in dignissimos ullam. Ipsam id cumque nesciunt eum blanditiis excepturi. Dolorum occaecati ex quis sequi molestiae dolorum. Aperiam non omnis voluptatem.",
                "tech_description": "Est repudiandae architecto perspiciatis similique asperiores. Eum voluptate soluta ipsa vero. Rerum quisquam dolores repellendus provident cupiditate. Sed ut sint impedit vero.",
                "tech_description_en": "Fuga nemo nam vero quod accusamus. Ea qui consequatur cumque placeat. At veritatis minima voluptatem officia non autem. Aspernatur fugiat quod dolores culpa ab aut laudantium.",
                "description": "Vero corporis rerum et. Laudantium sit minima temporibus. Aliquam eum quo neque a ex. Voluptates nobis doloremque aut praesentium.",
                "description_en": "Sint expedita commodi consequatur voluptatem. Non accusamus maxime ad rerum. Ad dolores soluta veniam rerum voluptates ut. Facilis harum voluptates aut sint qui.",
                "usage": "Deleniti mollitia cupiditate sint nesciunt fuga. Quia occaecati cupiditate vel odio id. Eius in laudantium quibusdam dicta asperiores.",
                "usage_en": "Ratione earum ut et et. Quam minus voluptatem aut voluptatem expedita molestias. Aut qui sed animi sed magni. Culpa ea quasi aut natus illum.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?20726",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?31371",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?10087",
                "product_video": null,
                "status": 1,
                "rating": 7.27,
                "sold_count": 8486,
                "review_count": 5953,
                "created_at": "2020-07-31 08:09:51",
                "updated_at": "2020-08-12 05:45:30",
                "product_category": {
                    "id": 1,
                    "slug": "et-suscipit",
                    "title": "粉底液",
                    "title_en": "qui placeat vitae",
                    "describe": "Sint asperiores dicta magnam veritatis. Molestias in sed facilis ipsum minus expedita molestias quia. Minima dignissimos molestiae ea labore. Est eum sint delectus harum debitis.",
                    "describe_en": "Unde blanditiis molestiae perspiciatis molestiae voluptatem ea ea. Libero eum molestias quae omnis nulla quis quidem. Neque ipsam nam quia voluptas consequatur a in.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?11579",
                    "description": "Hic veritatis minus quas dolore.",
                    "description_en": "Commodi libero cupiditate quisquam magni sunt.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?97579",
                    "parent_id": 19,
                    "created_at": "2020-07-31 01:34:13",
                    "updated_at": "2020-08-10 10:34:31"
                }
            },
            {
                "id": 12,
                "product_category_id": 7,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "minima unde ut",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26026",
                "slug": "quidem-sit",
                "short_description": "Quis tempore molestiae quidem.",
                "short_description_en": "Vitae commodi eveniet recusandae modi. Quia ullam id sapiente. Nemo voluptatum optio vel natus eum laborum placeat nesciunt. Nesciunt alias minus quae eveniet omnis consequuntur.",
                "price": "4103.00",
                "sale_price": "9901.00",
                "stock": 895,
                "spec": null,
                "seo_title": "consectetur adipisci labore",
                "seo_keyword": "aliquam",
                "seo_description": "Hic labore fuga rerum.",
                "benefit": "Dolores repellendus architecto non et. Blanditiis et saepe minima quisquam itaque in inventore doloremque. Vitae voluptas optio debitis nemo magni. Soluta est doloribus ducimus dolorem qui ipsum.",
                "benefit_en": "Ea perspiciatis aspernatur atque repudiandae. Repellendus quia aspernatur perferendis at. Sit suscipit vel corporis. Vero at enim optio nulla. Repellendus et ipsum velit et minus quasi magnam.",
                "tech_description": "Culpa nesciunt qui eaque quae tempora neque nobis maiores. Magnam dignissimos corporis aut voluptas enim. Voluptas ipsum incidunt dolor et delectus illo. In vitae occaecati vitae.",
                "tech_description_en": "Quis quis amet qui eius. Officia voluptatem sed aut nulla enim laudantium quidem. Qui ratione sunt sint voluptatibus reprehenderit consequatur accusantium.",
                "description": "Est est qui illo. Voluptatum deserunt non et totam.",
                "description_en": "Magnam fugiat animi cum sed. Id voluptatibus perspiciatis rerum nihil consectetur rerum. Aut quia vero ut maiores dolorem excepturi inventore. Molestias adipisci totam aut commodi laboriosam odio voluptatem.",
                "usage": "Facere et quo rem itaque inventore. Aliquam corporis impedit et fuga in qui autem. At recusandae consequatur perferendis dolorum.",
                "usage_en": "Consectetur porro consequatur veniam est veritatis voluptatem. Repellat molestiae consequatur non et. Sequi nesciunt impedit recusandae officiis deleniti.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?63172",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?96238",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?17971",
                "product_video": null,
                "status": 1,
                "rating": 6.6899999999999995,
                "sold_count": 1048,
                "review_count": 6398,
                "created_at": "2020-07-26 04:35:20",
                "updated_at": "2020-08-06 01:33:42",
                "product_category": {
                    "id": 7,
                    "slug": "veritatis-rerum",
                    "title": "隔离",
                    "title_en": "rerum rerum dicta",
                    "describe": "Id ut veritatis magni a cumque maiores dolorem. Dignissimos non labore et dignissimos est et rerum. Officia aliquid sequi occaecati beatae aut.",
                    "describe_en": "Voluptatem quibusdam non sint saepe harum nemo dolores officia. Assumenda sint debitis sed ea. Tempora sint voluptatem totam aut at. Dolores voluptas non voluptatem sed.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?36148",
                    "description": "Iste veritatis quaerat qui labore.",
                    "description_en": "Qui et nesciunt voluptatibus ducimus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?20837",
                    "parent_id": 14,
                    "created_at": "2020-08-17 04:31:53",
                    "updated_at": "2020-07-18 14:51:20"
                }
            },
            {
                "id": 15,
                "product_category_id": 3,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "consequatur ut aspernatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?98070",
                "slug": "laboriosam-occaecati",
                "short_description": "Ea vel omnis dolores totam exercitationem numquam.",
                "short_description_en": "Aperiam fugit aut consequuntur porro architecto iste et aut. Ex autem quasi non. Quod omnis sint quo non voluptatem.",
                "price": "4459.00",
                "sale_price": "876.00",
                "stock": 838,
                "spec": null,
                "seo_title": "cumque debitis amet",
                "seo_keyword": "minima",
                "seo_description": "Qui consequatur quas qui.",
                "benefit": "Sed non sit consequuntur. Autem commodi et ipsam aut in occaecati. Provident veritatis sed debitis velit facilis. Illo aut voluptatem occaecati non non et.",
                "benefit_en": "Pariatur repudiandae atque ab voluptate quis dolor repudiandae. Est qui eius quaerat qui occaecati et optio. Qui sint commodi in sint nisi. Libero quos eum aliquam exercitationem.",
                "tech_description": "Debitis repellendus sit rerum ex deserunt. Corporis ratione aut laboriosam alias dolor. Dolor ut quia dolorem sed.",
                "tech_description_en": "Maxime nemo provident nobis et aut soluta. Aut et et sunt consequatur cupiditate est voluptas. Fugiat voluptatem et explicabo ducimus.",
                "description": "Non voluptas ex iusto eaque cum. Error sint aperiam fuga cumque. Eaque beatae minima natus expedita voluptatem non vitae eligendi.",
                "description_en": "Maxime quisquam eaque vero magnam officia omnis sit. Et officiis soluta neque enim omnis est eveniet. Rerum eveniet quisquam mollitia unde molestiae voluptatem eum. Voluptatem non fugit sequi voluptatem eum iure itaque et.",
                "usage": "Nemo dolores eum voluptas vel praesentium facilis saepe fugit. Fugit aut autem sint quia.",
                "usage_en": "Et nihil labore quidem dolorem. Laborum itaque aliquam inventore nihil quia inventore. Dolorem ratione aperiam est.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?48955",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?49261",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?87285",
                "product_video": null,
                "status": 1,
                "rating": 3.11,
                "sold_count": 4016,
                "review_count": 9536,
                "created_at": "2020-07-30 12:17:41",
                "updated_at": "2020-07-24 23:05:57",
                "product_category": {
                    "id": 3,
                    "slug": "et-amet",
                    "title": "乳液",
                    "title_en": "voluptatem quas officia",
                    "describe": "Aut non aliquam soluta id qui numquam. Qui eveniet impedit pariatur ex. Sed officiis culpa ut suscipit eveniet delectus eius.",
                    "describe_en": "Sunt sunt ducimus impedit soluta harum repellat. Dolor alias magnam eveniet deserunt et veniam in.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?30884",
                    "description": "Sunt saepe impedit enim.",
                    "description_en": "Ipsum numquam libero nisi.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?87754",
                    "parent_id": 4,
                    "created_at": "2020-08-14 23:56:37",
                    "updated_at": "2020-08-01 21:11:37"
                }
            },
            {
                "id": 16,
                "product_category_id": 13,
                "product_name": "黑钻臻活眼部精华",
                "product_name_en": "quam qui et",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?91326",
                "slug": "sed-numquam",
                "short_description": "Tempora qui officiis dolorem aliquam.",
                "short_description_en": "A itaque consequatur voluptatibus distinctio doloremque odit recusandae quia. Accusantium corrupti possimus iste praesentium velit laborum est. Sunt praesentium cumque tempore ipsum omnis voluptatem.",
                "price": "165.00",
                "sale_price": "185.00",
                "stock": 524,
                "spec": null,
                "seo_title": "et eius ut",
                "seo_keyword": "necessitatibus",
                "seo_description": "Consequuntur aliquam non in.",
                "benefit": "Quia vel deleniti minus praesentium rerum repudiandae. Libero rerum quaerat deserunt totam sapiente sed. Saepe possimus provident molestiae eos non dignissimos dolorem. Ut ut magnam quaerat perferendis laboriosam.",
                "benefit_en": "Fugit eum et nostrum soluta. Cumque ipsa facere saepe placeat molestias aut. At rerum consequatur qui facere. Voluptas optio fuga dolore sit.",
                "tech_description": "Est labore quo odit totam. Numquam itaque sed aliquid facere dicta ad rerum. Esse est unde et numquam nobis minima et eligendi.",
                "tech_description_en": "Velit a voluptas qui quae consequatur id est iusto. Vel exercitationem sed explicabo ullam numquam exercitationem. Dolorum omnis impedit eum beatae veritatis ex voluptatem.",
                "description": "Nobis ut soluta asperiores possimus inventore. Provident et velit odit sapiente libero magnam sit.",
                "description_en": "Quia nisi delectus non non. Mollitia debitis error et ab eos. Commodi doloremque vel et nam sint pariatur tenetur. Ut voluptates consequatur laudantium maiores qui repellat.",
                "usage": "Quae fugiat sed numquam velit velit amet deleniti. Perferendis ipsam eaque adipisci eaque atque reprehenderit. Eos minus labore provident quia quidem. Non voluptatum rerum est dolor commodi dolorem enim laboriosam.",
                "usage_en": "Illo nihil voluptatem est itaque quis ut. Nobis et et et rerum voluptatem unde cupiditate. Id eaque tempore perspiciatis. Ipsa porro ut quia deleniti id soluta.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?17774",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?66845",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?89723",
                "product_video": null,
                "status": 1,
                "rating": 8.31,
                "sold_count": 1523,
                "review_count": 8482,
                "created_at": "2020-07-23 22:44:58",
                "updated_at": "2020-08-12 16:29:08",
                "product_category": {
                    "id": 13,
                    "slug": "asperiores-minus",
                    "title": "腮红",
                    "title_en": "enim ipsa voluptatem",
                    "describe": "Eaque aperiam ullam eius voluptas officiis. Harum deserunt sit delectus deserunt. Dicta optio expedita ex repellat et.",
                    "describe_en": "Debitis nesciunt qui possimus incidunt quia. Ea minima molestiae quam ut itaque ut laboriosam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?32971",
                    "description": "Minus natus odio est consequatur.",
                    "description_en": "Est excepturi omnis aut quibusdam ipsum ut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?89437",
                    "parent_id": 6,
                    "created_at": "2020-08-10 21:42:08",
                    "updated_at": "2020-07-24 08:59:30"
                }
            },
            {
                "id": 22,
                "product_category_id": 15,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "tenetur illo asperiores",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?33189",
                "slug": "doloribus-expedita",
                "short_description": "Et cum est reprehenderit aut recusandae.",
                "short_description_en": "Rerum molestiae temporibus a id sint aut exercitationem. Qui rem molestias dolorum ut iusto. Illo reprehenderit ea eos nemo quibusdam.",
                "price": "4634.00",
                "sale_price": "8829.00",
                "stock": 873,
                "spec": null,
                "seo_title": "odit neque et",
                "seo_keyword": "libero",
                "seo_description": "Est rem perspiciatis enim quia.",
                "benefit": "Sed iure rerum minima consectetur ut ipsa. Consequuntur et tenetur nihil ut. Eaque nesciunt quasi inventore recusandae sint quod reprehenderit dicta.",
                "benefit_en": "Vel quidem eum amet nemo. Cupiditate temporibus expedita deleniti id. Quod voluptatum nisi dolorem ipsum.",
                "tech_description": "Fuga iusto architecto aliquam aut ut eveniet soluta modi. Reprehenderit sit accusamus tempora sed voluptatem rerum. Unde excepturi voluptas illo optio quos mollitia.",
                "tech_description_en": "Sunt consequuntur perspiciatis mollitia omnis id numquam. Quas esse qui dolor sapiente dignissimos quas assumenda. Hic et necessitatibus facilis laudantium. Tenetur itaque atque cumque autem totam occaecati.",
                "description": "Error non est autem nostrum accusantium. Voluptate tenetur quod quam eveniet molestiae eaque iure. Facilis quia numquam maxime aut est id.",
                "description_en": "Rerum aut debitis autem nemo omnis quis. Quo fuga id earum nisi quaerat hic est. Aut ut ipsam voluptas sed.",
                "usage": "Impedit voluptate atque animi. Officia nihil voluptatibus hic officiis vel. Consequatur quibusdam officiis nesciunt labore eos eligendi praesentium.",
                "usage_en": "Nihil cum itaque minus harum. Quos in vel corrupti tempora voluptatem quod.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?66578",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?43306",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?87676",
                "product_video": null,
                "status": 1,
                "rating": 3.67,
                "sold_count": 5250,
                "review_count": 6792,
                "created_at": "2020-08-16 09:39:04",
                "updated_at": "2020-07-26 05:05:35",
                "product_category": {
                    "id": 15,
                    "slug": "provident-ea",
                    "title": "身体护理",
                    "title_en": "dolorem quam ipsum",
                    "describe": "Mollitia molestiae ut et quae vero. Vel ipsum nemo ut ut. Consequuntur rerum numquam ut id. Eum necessitatibus magnam fugiat. Id quo repellendus est voluptatem eum enim omnis.",
                    "describe_en": "Non a consequuntur quos voluptates repellat perspiciatis. Sapiente dolores corrupti voluptatum aut dolorem quis est. Est dolorum aperiam qui culpa.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?36709",
                    "description": "Voluptatem aut quo mollitia maiores.",
                    "description_en": "Est alias reiciendis explicabo est consequatur doloribus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?96875",
                    "parent_id": 10,
                    "created_at": "2020-08-05 08:16:15",
                    "updated_at": "2020-08-17 18:12:09"
                }
            },
            {
                "id": 24,
                "product_category_id": 6,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "odit sint magnam",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?72659",
                "slug": "error-fugit",
                "short_description": "Laborum laborum omnis recusandae repellat porro.",
                "short_description_en": "Commodi velit laudantium voluptatibus enim dolore. Ad provident libero nobis. Rerum omnis fugiat nisi. Quas eum aut sed non tempore repellat.",
                "price": "7965.00",
                "sale_price": "985.00",
                "stock": 302,
                "spec": null,
                "seo_title": "recusandae cupiditate rerum",
                "seo_keyword": "quo",
                "seo_description": "Et voluptatem et id.",
                "benefit": "Quis enim tenetur nihil earum. Qui id dolorem facilis ab nemo ea impedit. Quis beatae cum et minus quo earum saepe.",
                "benefit_en": "Incidunt nam culpa autem minus soluta accusantium minus aut. Provident perferendis et consectetur id. Cum non consequatur harum quibusdam quia quis. Beatae vitae nobis dicta ut laboriosam consequatur. Voluptatem tempore qui ratione et.",
                "tech_description": "Vero asperiores est et aut illum quia nihil. Ipsum placeat voluptate tempore qui enim modi nam. Corporis aliquam consequatur provident omnis.",
                "tech_description_en": "Libero omnis necessitatibus reiciendis iusto est. Minima nisi repudiandae enim excepturi odit ut vitae. Consectetur animi architecto repudiandae sint ratione. Aliquid ullam tempora soluta voluptate natus non incidunt.",
                "description": "Minima molestiae sint est facilis aliquam ut. Cupiditate enim a soluta. Dolor laudantium ex est vero eaque unde velit quibusdam. Quia itaque numquam culpa non sit tempora qui.",
                "description_en": "Eligendi accusamus asperiores porro distinctio tempore sunt. Ut sunt doloribus quia et. Facere ad dolor eveniet explicabo ullam dolorem. Et fugit et quidem qui iure qui.",
                "usage": "Voluptatem debitis quia tempora tempore rerum sed voluptatem. Iusto quia vel odio iure odio pariatur. Molestiae ipsam nisi illum quasi quia et. Minus molestiae culpa sit repellat officia.",
                "usage_en": "Eum repudiandae qui ut minus tempore unde dolores. Quos fugit perspiciatis non recusandae iure exercitationem. Ex voluptatem enim temporibus illum. Voluptatem iure omnis aliquid occaecati.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?79245",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?58395",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?70530",
                "product_video": null,
                "status": 1,
                "rating": 9.76,
                "sold_count": 9678,
                "review_count": 3789,
                "created_at": "2020-08-09 00:39:39",
                "updated_at": "2020-07-21 05:14:17",
                "product_category": {
                    "id": 6,
                    "slug": "et-soluta",
                    "title": "粉底液",
                    "title_en": "vero doloribus aut",
                    "describe": "Sed voluptas provident perferendis sed. Odio dolores praesentium neque repudiandae modi. Dolore deleniti sit debitis et quia sed at.",
                    "describe_en": "Et enim et et error dolor expedita. Natus illo inventore qui accusamus. Distinctio voluptate eos vitae a ea.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?40808",
                    "description": "Itaque odit minima labore quia.",
                    "description_en": "Eos consequatur cum omnis sint.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?31002",
                    "parent_id": 17,
                    "created_at": "2020-07-20 07:39:26",
                    "updated_at": "2020-07-22 01:20:15"
                }
            },
            {
                "id": 25,
                "product_category_id": 13,
                "product_name": "钻石焕活面膜",
                "product_name_en": "distinctio reiciendis omnis",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?48484",
                "slug": "non-et",
                "short_description": "Ipsum ipsam voluptates nulla eius.",
                "short_description_en": "Minus eos fugiat et. Eos doloribus sunt sint soluta in nisi. Distinctio eligendi molestiae vel aliquam iusto. Qui distinctio neque et mollitia est.",
                "price": "7618.00",
                "sale_price": "6901.00",
                "stock": 981,
                "spec": null,
                "seo_title": "quia velit ut",
                "seo_keyword": "veniam",
                "seo_description": "Reiciendis itaque aliquid pariatur eum impedit.",
                "benefit": "Molestiae dolore et ea harum sapiente ut. Earum voluptatem omnis quaerat quia optio assumenda. Quisquam et exercitationem aliquid beatae vel ea voluptatibus ipsa.",
                "benefit_en": "Ipsa quo perspiciatis similique ut molestiae omnis. Voluptatem unde vitae itaque est non iusto. Assumenda eum expedita sequi commodi asperiores sint illo.",
                "tech_description": "Qui asperiores et voluptatem quo eligendi illo voluptatibus. Quo quaerat iste ex optio et. Eaque ut explicabo repellendus aut.",
                "tech_description_en": "Deserunt quidem reiciendis expedita pariatur sit rem repudiandae. Illo eum consectetur necessitatibus doloremque odit incidunt. Et ut sed recusandae dolor voluptatum eius. Aperiam magnam exercitationem quia labore qui id.",
                "description": "Ratione aut quam ipsa sed sed eos quae. Dicta voluptatem ratione minus. Amet nisi aut at error earum. Et magni sit soluta nostrum.",
                "description_en": "Aut quaerat unde est temporibus ipsum ut. Qui sit maxime consequatur non sed consequatur ut et. Voluptate a vel est quibusdam.",
                "usage": "Impedit vel cumque placeat architecto beatae. Nihil animi saepe repudiandae facilis rerum aut. Numquam repellat dicta porro sint occaecati. Provident reprehenderit velit nihil voluptate.",
                "usage_en": "Porro officiis nostrum quae nulla dolore et laudantium. Enim suscipit ut saepe itaque. Consequuntur vitae voluptatibus fugit corrupti. Cumque rerum aperiam et dolores et veritatis.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?67406",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?21070",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?58384",
                "product_video": null,
                "status": 1,
                "rating": 6.91,
                "sold_count": 3076,
                "review_count": 8720,
                "created_at": "2020-08-05 18:42:35",
                "updated_at": "2020-08-05 22:15:14",
                "product_category": {
                    "id": 13,
                    "slug": "asperiores-minus",
                    "title": "腮红",
                    "title_en": "enim ipsa voluptatem",
                    "describe": "Eaque aperiam ullam eius voluptas officiis. Harum deserunt sit delectus deserunt. Dicta optio expedita ex repellat et.",
                    "describe_en": "Debitis nesciunt qui possimus incidunt quia. Ea minima molestiae quam ut itaque ut laboriosam.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?32971",
                    "description": "Minus natus odio est consequatur.",
                    "description_en": "Est excepturi omnis aut quibusdam ipsum ut.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?89437",
                    "parent_id": 6,
                    "created_at": "2020-08-10 21:42:08",
                    "updated_at": "2020-07-24 08:59:30"
                }
            },
            {
                "id": 26,
                "product_category_id": 6,
                "product_name": "黑钻焕肤水",
                "product_name_en": "explicabo esse cumque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?42875",
                "slug": "et-repudiandae",
                "short_description": "Iure voluptas esse sint.",
                "short_description_en": "Vel est optio fugit rerum sed eos. Quia pariatur quia corrupti et omnis ipsam hic voluptatibus. Aut sit commodi et quis et omnis commodi. Et eveniet doloribus id incidunt voluptatem.",
                "price": "9301.00",
                "sale_price": "1012.00",
                "stock": 530,
                "spec": null,
                "seo_title": "placeat ut possimus",
                "seo_keyword": "temporibus",
                "seo_description": "Dolorem aut eligendi et laudantium quia dolor.",
                "benefit": "Explicabo enim vero iure quia voluptatibus odit dolores. Qui est unde esse molestiae expedita est. Sequi nam dicta suscipit quod. Eligendi voluptatem exercitationem ut ipsa qui doloribus occaecati. Sit aut voluptas aliquid cum officia.",
                "benefit_en": "Doloribus quia et omnis. Pariatur placeat nulla quam non blanditiis eum eum doloribus. Voluptate amet laborum id sed rerum. Et temporibus vero non occaecati voluptatem ut aut exercitationem.",
                "tech_description": "Excepturi quia aut unde veritatis est voluptas. Sint necessitatibus inventore sunt ad non id exercitationem. Molestias officiis nam distinctio quaerat. Dolor omnis sunt aliquam vitae consequatur eum.",
                "tech_description_en": "Id ducimus et qui illo. Asperiores illo deleniti inventore cum quaerat quo. Occaecati quibusdam ut et voluptatem.",
                "description": "Adipisci eligendi optio enim quibusdam maxime ut distinctio. Qui delectus error laudantium quasi asperiores ad unde. Recusandae dolorem quia dolor architecto voluptas. Ut odio et sit laboriosam.",
                "description_en": "Sequi recusandae occaecati voluptatem sit neque quasi soluta. Modi quia quis et et ea deleniti. Omnis odit dolorem quam ut sint aut iste.",
                "usage": "Exercitationem perspiciatis quo et laborum qui quisquam. Quo minus nemo laboriosam fugiat suscipit assumenda. Repellendus cumque nostrum occaecati dolorem sapiente illo deleniti. Eum voluptatem ullam culpa asperiores sint quis quisquam odio.",
                "usage_en": "Sed blanditiis id repellat consequuntur. Harum earum non libero et beatae eos quas laboriosam. Consequatur blanditiis ea est architecto distinctio quo. Dignissimos sequi eos vel et deleniti.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?93122",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?95706",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?97837",
                "product_video": null,
                "status": 1,
                "rating": 6.9399999999999995,
                "sold_count": 5258,
                "review_count": 7790,
                "created_at": "2020-08-05 21:28:21",
                "updated_at": "2020-07-26 20:45:53",
                "product_category": {
                    "id": 6,
                    "slug": "et-soluta",
                    "title": "粉底液",
                    "title_en": "vero doloribus aut",
                    "describe": "Sed voluptas provident perferendis sed. Odio dolores praesentium neque repudiandae modi. Dolore deleniti sit debitis et quia sed at.",
                    "describe_en": "Et enim et et error dolor expedita. Natus illo inventore qui accusamus. Distinctio voluptate eos vitae a ea.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?40808",
                    "description": "Itaque odit minima labore quia.",
                    "description_en": "Eos consequatur cum omnis sint.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?31002",
                    "parent_id": 17,
                    "created_at": "2020-07-20 07:39:26",
                    "updated_at": "2020-07-22 01:20:15"
                }
            },
            {
                "id": 31,
                "product_category_id": 19,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "fugit porro voluptas",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?26082",
                "slug": "accusantium-est",
                "short_description": "Omnis aspernatur explicabo assumenda.",
                "short_description_en": "Vitae et voluptatem similique et voluptatibus. Cum quaerat enim alias nobis expedita. Non quasi sed qui.",
                "price": "4956.00",
                "sale_price": "6211.00",
                "stock": 723,
                "spec": null,
                "seo_title": "maiores reiciendis velit",
                "seo_keyword": "saepe",
                "seo_description": "Recusandae odio dolorum voluptas quos.",
                "benefit": "Soluta sint ullam vel soluta ab. Ut eligendi eos amet aut sed non saepe expedita. Incidunt voluptatem et odio fugiat nihil.",
                "benefit_en": "Molestiae sint qui rerum officiis dolores fugit fuga. At inventore quia ullam est. Dolore ducimus rerum in et. Tempora nihil in ex natus quisquam sed.",
                "tech_description": "Ipsam nostrum rerum sapiente ut est maxime. Est sit corrupti quo porro eveniet ex perferendis.",
                "tech_description_en": "Facilis cumque perferendis architecto voluptatem. Quibusdam sint maxime corrupti. Reprehenderit distinctio fugiat voluptate libero sed voluptates iste.",
                "description": "Neque vitae nihil numquam modi nostrum unde. Qui ad commodi vel a perferendis.",
                "description_en": "Repudiandae fuga et porro. Excepturi temporibus cupiditate sit est ea commodi ad ipsum. Facilis pariatur quisquam asperiores. Consequuntur neque consequatur consequuntur impedit amet velit molestiae. Iste omnis voluptas id facere quae officiis vel.",
                "usage": "Delectus quisquam accusantium qui. Commodi perferendis nemo facere. Temporibus similique ipsum vero occaecati laudantium qui magnam officia. Natus rerum occaecati adipisci.",
                "usage_en": "Autem ab placeat incidunt aut et est. Assumenda et sed sequi dolor. Odit enim earum voluptatem perferendis cumque.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?92005",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?80239",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?45790",
                "product_video": null,
                "status": 1,
                "rating": 9.49,
                "sold_count": 7346,
                "review_count": 9768,
                "created_at": "2020-08-02 12:10:03",
                "updated_at": "2020-08-04 12:27:00",
                "product_category": {
                    "id": 19,
                    "slug": "aliquam-velit",
                    "title": "眼霜",
                    "title_en": "qui porro adipisci",
                    "describe": "Consectetur praesentium autem soluta suscipit nemo. Aut numquam aliquid inventore. Nobis vero commodi magni amet. Cumque ea quia quisquam vel maxime voluptatum.",
                    "describe_en": "Qui omnis aperiam quae cum distinctio. Eos asperiores tenetur quibusdam officiis et rerum.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?95203",
                    "description": "Placeat veniam dolor qui non quod error.",
                    "description_en": "Similique aut id delectus earum modi recusandae.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?51200",
                    "parent_id": 7,
                    "created_at": "2020-08-04 19:25:48",
                    "updated_at": "2020-08-17 20:26:08"
                }
            },
            {
                "id": 34,
                "product_category_id": 10,
                "product_name": "黑钻洁净滋养面膜",
                "product_name_en": "laboriosam quia atque",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?75780",
                "slug": "enim-dolorem",
                "short_description": "Amet laboriosam expedita sed ipsam.",
                "short_description_en": "Rerum ut iure veniam. Eius odio ut dolorum cupiditate corrupti. Aut exercitationem repellat explicabo dolor dolores consequatur. Aut veniam sed nostrum nemo repudiandae facere facere sequi.",
                "price": "9520.00",
                "sale_price": "2741.00",
                "stock": 363,
                "spec": null,
                "seo_title": "ea reprehenderit eum",
                "seo_keyword": "consequatur",
                "seo_description": "Aut rerum incidunt et.",
                "benefit": "Voluptates harum rem nostrum ut ipsam. Voluptas odit autem eligendi.",
                "benefit_en": "Nesciunt neque consequuntur iusto quae non. Rerum et aut dolores dicta quibusdam error. Qui ullam id tenetur eum ratione nihil.",
                "tech_description": "Et et ea asperiores facere voluptatem ut repudiandae. Placeat consectetur sint est fugiat ipsam ut est.",
                "tech_description_en": "Reprehenderit earum sapiente officia rerum ut deserunt inventore. Libero est distinctio culpa ad autem aut ratione. Placeat cum tempore fuga. Incidunt neque consequatur et consectetur nisi facere soluta.",
                "description": "Repellat quas quisquam vero hic. Debitis id quaerat voluptatem exercitationem id rem blanditiis. Praesentium et nam odit perspiciatis totam.",
                "description_en": "Et ut ab dignissimos. Quas numquam quas quia molestias voluptas neque corrupti. Quia veniam rerum ut sequi vero. Quia perferendis est sapiente et asperiores excepturi qui provident.",
                "usage": "Quibusdam quas ut doloribus minus qui. Ut omnis error nemo aut et aut. Nulla quod modi et voluptatem a est. Eaque magnam a quas libero. Soluta debitis reiciendis sunt placeat recusandae sed ut.",
                "usage_en": "Commodi laboriosam quam quibusdam illo eos illum id commodi. Corporis ea reiciendis quidem quia expedita. Magnam temporibus quod ex non consequatur corporis deserunt. Facilis quia necessitatibus autem quos fugiat. Blanditiis tempora possimus sint est repellat in eveniet.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?36535",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?99346",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?63434",
                "product_video": null,
                "status": 1,
                "rating": 7.6899999999999995,
                "sold_count": 5455,
                "review_count": 8842,
                "created_at": "2020-08-04 15:38:18",
                "updated_at": "2020-08-09 17:51:19",
                "product_category": {
                    "id": 10,
                    "slug": "libero-nam",
                    "title": "腮红",
                    "title_en": "vitae est eum",
                    "describe": "Aut ex ratione inventore nihil soluta et. Ad dolorem itaque quibusdam. Magnam quaerat aut debitis officia debitis sunt. Impedit voluptas velit in earum qui exercitationem.",
                    "describe_en": "Iure officiis eveniet accusamus sed at vel. Et aut et consectetur. Officia provident nesciunt est quia sunt quo.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?21527",
                    "description": "Fuga nihil in ut enim sed.",
                    "description_en": "Assumenda aliquid quas illum quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?83780",
                    "parent_id": 10,
                    "created_at": "2020-07-21 03:30:34",
                    "updated_at": "2020-08-01 08:01:03"
                }
            },
            {
                "id": 40,
                "product_category_id": 10,
                "product_name": "黑钻璀璨晶透肌底精华",
                "product_name_en": "quia nihil dolorem",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?42694",
                "slug": "numquam-quasi",
                "short_description": "Rerum non veniam eligendi.",
                "short_description_en": "Ullam vitae molestiae recusandae soluta quam autem. Molestiae quidem beatae quis nostrum dolores consequatur et laudantium. Eveniet et fugiat rem dolor.",
                "price": "6019.00",
                "sale_price": "9824.00",
                "stock": 181,
                "spec": null,
                "seo_title": "velit et quas",
                "seo_keyword": "eos",
                "seo_description": "Impedit nemo velit cum dolor.",
                "benefit": "Eum laboriosam quisquam at occaecati assumenda. Odit et et nisi in. Cumque dolor dicta repellat vero pariatur nemo et. Voluptatem enim quod architecto vitae.",
                "benefit_en": "Temporibus et magnam ea. Repellat aliquam mollitia laborum. Magni et voluptate recusandae eum.",
                "tech_description": "Ut facere enim sequi sint. Sit ut atque cumque repudiandae amet. Corporis quis tempora veniam est natus. Repudiandae voluptatem ut aut.",
                "tech_description_en": "Quas dignissimos voluptatem consequatur quisquam id omnis. Omnis veritatis impedit quas quia dolore ad. Saepe occaecati nisi et aut voluptatem qui debitis aperiam.",
                "description": "Nisi quos eveniet ducimus qui et voluptatum quos. Asperiores qui id dolores et sint deserunt voluptatem. Omnis laborum rem eveniet reprehenderit dolorem atque.",
                "description_en": "Et aut sunt sequi et est. Laborum consectetur exercitationem similique. Animi temporibus quos iste.",
                "usage": "Dolor quae provident nam non laborum et doloremque. Reiciendis animi voluptate accusamus enim. Et non ut corporis in.",
                "usage_en": "Odit voluptatibus optio voluptatem eveniet quisquam assumenda et harum. Voluptas labore consequatur eum unde. Cumque ut dolores aut. Non cumque magni eaque accusamus qui aliquid quam.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?80406",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?83040",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?47069",
                "product_video": null,
                "status": 1,
                "rating": 8.86,
                "sold_count": 3560,
                "review_count": 9692,
                "created_at": "2020-08-01 21:11:47",
                "updated_at": "2020-08-07 20:50:01",
                "product_category": {
                    "id": 10,
                    "slug": "libero-nam",
                    "title": "腮红",
                    "title_en": "vitae est eum",
                    "describe": "Aut ex ratione inventore nihil soluta et. Ad dolorem itaque quibusdam. Magnam quaerat aut debitis officia debitis sunt. Impedit voluptas velit in earum qui exercitationem.",
                    "describe_en": "Iure officiis eveniet accusamus sed at vel. Et aut et consectetur. Officia provident nesciunt est quia sunt quo.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?21527",
                    "description": "Fuga nihil in ut enim sed.",
                    "description_en": "Assumenda aliquid quas illum quia.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?83780",
                    "parent_id": 10,
                    "created_at": "2020-07-21 03:30:34",
                    "updated_at": "2020-08-01 08:01:03"
                }
            },
            {
                "id": 45,
                "product_category_id": 15,
                "product_name": "钻石冰莹面膜",
                "product_name_en": "voluptatum rerum quia",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?89162",
                "slug": "voluptas-cum",
                "short_description": "Et sit dolorem quia culpa voluptatem atque.",
                "short_description_en": "Ut commodi iure vel quo. Non est sint ut a at omnis voluptas ab. Quo modi omnis est eligendi dolore. Aperiam officiis iste quia fugiat laudantium.",
                "price": "2629.00",
                "sale_price": "8414.00",
                "stock": 539,
                "spec": null,
                "seo_title": "ut ab expedita",
                "seo_keyword": "et",
                "seo_description": "Suscipit tempora ad nihil in.",
                "benefit": "Omnis inventore vero et quibusdam quo expedita. Id praesentium et et id. Qui consequuntur quidem et quia qui praesentium.",
                "benefit_en": "Sed omnis necessitatibus ipsum est distinctio quo. Dolor molestiae est odit assumenda omnis hic itaque. Exercitationem assumenda quaerat voluptate reiciendis. Qui et laudantium sed laborum dolores illum eligendi unde.",
                "tech_description": "Accusantium sed aut ab consectetur sit excepturi aut. Ut sit ut iure nulla alias magnam. Ut ut dolor enim fugit odit.",
                "tech_description_en": "Dolor impedit necessitatibus nisi quis in. Minima quibusdam tenetur eveniet et sit. Veritatis est a rerum aut vel tenetur.",
                "description": "Non quisquam pariatur beatae ipsam odio. Est quibusdam suscipit non consequatur ratione vero. Officiis sed est facere sit exercitationem consequuntur. Et itaque qui cupiditate numquam. Et maxime libero et quia omnis sit.",
                "description_en": "Ab impedit illo minus. Quibusdam vel nam a tempora dolor libero aperiam iusto.",
                "usage": "Fugit voluptas fuga totam at eos eius quas aut. Inventore sed blanditiis deleniti fuga itaque atque error rerum. Vitae atque harum voluptatum ipsam a eius. Modi ut dolorum autem ut laudantium et nulla.",
                "usage_en": "Rerum itaque eius exercitationem dolorem consequuntur eius. Rerum et quae voluptate possimus. At voluptatibus fuga asperiores eum dolor.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?14968",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?89789",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?77942",
                "product_video": null,
                "status": 1,
                "rating": 3.07,
                "sold_count": 7056,
                "review_count": 7238,
                "created_at": "2020-07-27 16:11:17",
                "updated_at": "2020-08-13 00:22:50",
                "product_category": {
                    "id": 15,
                    "slug": "provident-ea",
                    "title": "身体护理",
                    "title_en": "dolorem quam ipsum",
                    "describe": "Mollitia molestiae ut et quae vero. Vel ipsum nemo ut ut. Consequuntur rerum numquam ut id. Eum necessitatibus magnam fugiat. Id quo repellendus est voluptatem eum enim omnis.",
                    "describe_en": "Non a consequuntur quos voluptates repellat perspiciatis. Sapiente dolores corrupti voluptatum aut dolorem quis est. Est dolorum aperiam qui culpa.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?36709",
                    "description": "Voluptatem aut quo mollitia maiores.",
                    "description_en": "Est alias reiciendis explicabo est consequatur doloribus.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?96875",
                    "parent_id": 10,
                    "created_at": "2020-08-05 08:16:15",
                    "updated_at": "2020-08-17 18:12:09"
                }
            },
            {
                "id": 48,
                "product_category_id": 6,
                "product_name": "黑钻赋颜面霜",
                "product_name_en": "aliquam quod consequatur",
                "thumbnail": "https:\/\/lorempixel.com\/640\/480\/?86635",
                "slug": "quisquam-molestiae",
                "short_description": "In aliquid quo et ut et.",
                "short_description_en": "Maiores minima porro at in deleniti. Saepe molestiae ducimus aliquid quibusdam molestiae quia sit. Voluptatibus commodi quia aspernatur odit sunt mollitia aliquam modi. Reiciendis dignissimos corporis laudantium quia et.",
                "price": "9511.00",
                "sale_price": "1078.00",
                "stock": 366,
                "spec": null,
                "seo_title": "necessitatibus nihil perferendis",
                "seo_keyword": "occaecati",
                "seo_description": "Qui et unde et iste ut dolor.",
                "benefit": "Dolores cum quod inventore minima eos. Neque aut hic quis voluptatem ipsa quis totam. Dolor magnam numquam est voluptas possimus sapiente.",
                "benefit_en": "Laboriosam ut corporis quas aut vel amet est. Voluptatem et perferendis dolores pariatur maxime inventore. Ipsa esse ducimus excepturi ut aut corporis.",
                "tech_description": "A optio inventore officia tempore inventore quia id. Quia eaque non doloribus et vero porro. Ea eum ea esse nihil quos natus soluta.",
                "tech_description_en": "Dolorem blanditiis ullam sit ipsum a molestiae cumque. Natus eum voluptatem quis aliquam animi. Ipsum minima est voluptatem ipsam pariatur.",
                "description": "Eveniet quia in officia nihil. In ea expedita dicta tempore deleniti nulla. Hic reprehenderit nulla qui eaque. In a laborum aut dolores.",
                "description_en": "Quia a sunt aut voluptas impedit quasi. Asperiores enim quas veritatis ex. Voluptatem et est occaecati doloremque eum beatae voluptas.",
                "usage": "Porro aut porro blanditiis perferendis aliquam qui. Atque commodi labore ex illo incidunt minus. Vel voluptate reiciendis itaque. Dolores ullam autem quia expedita est molestias. Dolor dolorem officia amet eaque eos quos sit.",
                "usage_en": "Perferendis soluta officiis repudiandae dolore et. Voluptatibus similique laborum dignissimos qui incidunt provident molestiae. Necessitatibus mollitia nihil omnis itaque.",
                "main_image": "https:\/\/lorempixel.com\/640\/480\/?88413",
                "main_image_2": "https:\/\/lorempixel.com\/640\/480\/?40993",
                "benefit_image": "https:\/\/lorempixel.com\/640\/480\/?99787",
                "product_video": null,
                "status": 1,
                "rating": 9.9,
                "sold_count": 1328,
                "review_count": 2148,
                "created_at": "2020-08-08 09:41:49",
                "updated_at": "2020-08-04 10:40:11",
                "product_category": {
                    "id": 6,
                    "slug": "et-soluta",
                    "title": "粉底液",
                    "title_en": "vero doloribus aut",
                    "describe": "Sed voluptas provident perferendis sed. Odio dolores praesentium neque repudiandae modi. Dolore deleniti sit debitis et quia sed at.",
                    "describe_en": "Et enim et et error dolor expedita. Natus illo inventore qui accusamus. Distinctio voluptate eos vitae a ea.",
                    "banner": "https:\/\/lorempixel.com\/640\/480\/?40808",
                    "description": "Itaque odit minima labore quia.",
                    "description_en": "Eos consequatur cum omnis sint.",
                    "img": "https:\/\/lorempixel.com\/640\/480\/?31002",
                    "parent_id": 17,
                    "created_at": "2020-07-20 07:39:26",
                    "updated_at": "2020-07-22 01:20:15"
                }
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/product_new?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/product_new?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/product_new",
        "per_page": 15,
        "prev_page_url": null,
        "to": 15,
        "total": 15
    },
    "code": 20001,
    "msg": "操作成功"
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

<!-- START_1ef07b0ecf45b714ae20bddaef2adcf6 -->
## Get product detail by product id list
根据商品ID列表获取商品详情列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/productList?id_list=explicabo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/productList"
);

let params = {
    "id_list": "explicabo",
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
`GET api/productList`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id_list` |  required  | 商品id列表（数组）

<!-- END_1ef07b0ecf45b714ae20bddaef2adcf6 -->

<!-- START_a5b1ad2131e03818cd865a9ffddc0928 -->
## change password
修改密码(已登录)

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/password_change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"oldPassword":"et","newPassword":"eveniet","newPassword_confirmation":"id"}'

```

```javascript
const url = new URL(
    "http://localhost/api/auth/password_change"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "oldPassword": "et",
    "newPassword": "eveniet",
    "newPassword_confirmation": "id"
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
    -G "http://localhost/api/alipay/pay?no=officiis&total_amount=doloremque&subject=aliquid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/alipay/pay"
);

let params = {
    "no": "officiis",
    "total_amount": "doloremque",
    "subject": "aliquid",
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
    `no` |  required  | 订单号
    `total_amount` |  required  | 总金额
    `subject` |  required  | 订单标题

<!-- END_bd1f2555bc6633390fa0cd3902b6ea26 -->

<!-- START_43e96a9060fca58becd5a755b4e3aa4e -->
## Alipay return payment results
 支付宝前端回调页面

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/alipay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/alipay/return"
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
    "http://localhost/api/alipay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/alipay/notify"
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
    -G "http://localhost/api/unionpay/pay?no=reprehenderit&subject=sunt&total_amount=eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/unionpay/pay"
);

let params = {
    "no": "reprehenderit",
    "subject": "sunt",
    "total_amount": "eius",
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
    `subject` |  required  | 商品名称
    `total_amount` |  required  | 总金额

<!-- END_b2e091365f9f03862a73b53b8a32eb41 -->

<!-- START_94ec51bb78f31dedba309417c651b8ad -->
## Unionpay return payment results
银联支付返回结果

> Example request:

```bash
curl -X POST \
    "http://localhost/api/unionpay/return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/unionpay/return"
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
    "http://localhost/api/unionpay/notify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/unionpay/notify"
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
    "http://localhost/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/logout"
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
    "http://localhost/api/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/refresh"
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
    -G "http://localhost/api/auth/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/me"
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
    -G "http://localhost/api/user_profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profiles"
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

<!-- START_a8828153e88b176a13181f37c109ad54 -->
## Update user profile
编辑用户资料

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user_profiles?profile_id=qui&phone=aperiam&real_name=doloremque&sex=nobis&birthday=aut&age=molestiae&province=molestiae&city=molestiae&district=officiis&address=corrupti&zip=veritatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_profiles"
);

let params = {
    "profile_id": "qui",
    "phone": "aperiam",
    "real_name": "doloremque",
    "sex": "nobis",
    "birthday": "aut",
    "age": "molestiae",
    "province": "molestiae",
    "city": "molestiae",
    "district": "officiis",
    "address": "corrupti",
    "zip": "veritatis",
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
`PUT api/user_profiles`

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

<!-- END_a8828153e88b176a13181f37c109ad54 -->

<!-- START_157e0e734e5b19915b7f41bafbe39486 -->
## Get user address
获取用户收货地址

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses"
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
    "http://localhost/api/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"province":"velit","city":"fuga","district":"magni","address":"est","zip":"expedita","contact_name":"tempore","contact_phone":"neque"}'

```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "province": "velit",
    "city": "fuga",
    "district": "magni",
    "address": "est",
    "zip": "expedita",
    "contact_name": "tempore",
    "contact_phone": "neque"
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
    "http://localhost/api/user_addresses/1?province=sed&city=exercitationem&district=voluptatem&address=distinctio&zip=non&contact_name=saepe&contact_phone=quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
);

let params = {
    "province": "sed",
    "city": "exercitationem",
    "district": "voluptatem",
    "address": "distinctio",
    "zip": "non",
    "contact_name": "saepe",
    "contact_phone": "quibusdam",
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
    "http://localhost/api/user_addresses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user_addresses/1"
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

<!-- START_f422763f18217564020435e1877230b4 -->
## Request shop cart items
请求购物车数据

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/shop_carts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts"
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
`GET api/shop_carts`


<!-- END_f422763f18217564020435e1877230b4 -->

<!-- START_90957246142cc2a14824b129ecd1ba3c -->
## Request store cart items
保存/更新购物车商品

> Example request:

```bash
curl -X POST \
    "http://localhost/api/shop_carts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"product_id":"itaque","amount":"quas"}'

```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": "itaque",
    "amount": "quas"
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
`POST api/shop_carts`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `product_id` | required |  optional  | 商品slug
        `amount` | required |  optional  | 数量
    
<!-- END_90957246142cc2a14824b129ecd1ba3c -->

<!-- START_8339f6e25cba6f16577dbb5c09cafe73 -->
## Request delete the cart items
删除购物车商品

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/shop_carts/1?product_id=dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shop_carts/1"
);

let params = {
    "product_id": "dolore",
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
`DELETE api/shop_carts/{product_id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `product_id` |  required  | 商品id

<!-- END_8339f6e25cba6f16577dbb5c09cafe73 -->

<!-- START_f9301c03a9281c0847565f96e6f723de -->
## Get order list
获取订单列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders"
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
    -G "http://localhost/api/order_details/1?no=maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order_details/1"
);

let params = {
    "no": "maxime",
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

<!-- START_285c87403b6cfdebe26bc357f22e870f -->
## Request create order
 订单创建发起

> Example request:

```bash
curl -X POST \
    "http://localhost/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"address_id":"repellat","remark":"dolores","items":[{"product_id":15,"amount":9}]}'

```

```javascript
const url = new URL(
    "http://localhost/api/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "address_id": "repellat",
    "remark": "dolores",
    "items": [
        {
            "product_id": 15,
            "amount": 9
        }
    ]
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
`POST api/orders`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `address_id` | interger |  required  | 地址id
        `remark` | string |  optional  | optional 订单备注
        `items` | array |  required  | 商品项目
        `items.*.product_id` | integer |  required  | 商品id
        `items.*.amount` | integer |  required  | 购买数量
    
<!-- END_285c87403b6cfdebe26bc357f22e870f -->

<!-- START_9d8ded196d3036ace16c0ed016057385 -->
## Check the order status
查询订单状态

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders/pay_check?no=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/pay_check"
);

let params = {
    "no": "et",
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
`GET api/orders/pay_check`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `no` |  required  | 订单号

<!-- END_9d8ded196d3036ace16c0ed016057385 -->

<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## 「ADMIN」Query user list(Admin)
查询用户数据列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user?username=nihil&page=est&page_limit=dolorum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let params = {
    "username": "nihil",
    "page": "est",
    "page_limit": "dolorum",
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
    "http://localhost/admin/user/1?name=ratione&email=odit&phone=soluta&avatar=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let params = {
    "name": "ratione",
    "email": "odit",
    "phone": "soluta",
    "avatar": "consequatur",
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
    "http://localhost/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
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
    "http://localhost/admin/user/reset_password/1?oldPassword=iure&newPassword=dolores&newPassword_confirmation=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/reset_password/1"
);

let params = {
    "oldPassword": "iure",
    "newPassword": "dolores",
    "newPassword_confirmation": "voluptatem",
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
    -G "http://localhost/admin/get_user?hash_id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/get_user"
);

let params = {
    "hash_id": "et",
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
    -G "http://localhost/admin/user_addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
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
    "http://localhost/admin/user_addresses?province=ut&city=aut&district=dicta&address=aliquam&zip=porro&contact_name=voluptates&contact_phone=odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses"
);

let params = {
    "province": "ut",
    "city": "aut",
    "district": "dicta",
    "address": "aliquam",
    "zip": "porro",
    "contact_name": "voluptates",
    "contact_phone": "odio",
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
    "http://localhost/admin/user_addresses/1?address_id=cupiditate&province=rerum&city=ducimus&district=eum&address=quo&zip=et&contact_name=ducimus&contact_phone=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "cupiditate",
    "province": "rerum",
    "city": "ducimus",
    "district": "eum",
    "address": "quo",
    "zip": "et",
    "contact_name": "ducimus",
    "contact_phone": "qui",
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
    "http://localhost/admin/user_addresses/1?address_id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_addresses/1"
);

let params = {
    "address_id": "et",
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
    -G "http://localhost/admin/user_profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles"
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
    "http://localhost/admin/user_profiles/1?profile_id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "qui",
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
    "http://localhost/admin/user_profiles/1?profile_id=ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user_profiles/1"
);

let params = {
    "profile_id": "ratione",
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
    -G "http://localhost/admin/invitation/code" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/invitation/code"
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
    "http://localhost/admin/invitation/code?phone=tempore&code=aliquid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/invitation/code"
);

let params = {
    "phone": "tempore",
    "code": "aliquid",
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
    -G "http://localhost/admin/invitation/phone?page=dolor&page_limit=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/invitation/phone"
);

let params = {
    "page": "dolor",
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
    -G "http://localhost/admin/product_categories?page=ut&page_limit=totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "page": "ut",
    "page_limit": "totam",
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
    "http://localhost/admin/product_categories?title=est&title_en=dolor&describe=aspernatur&describe_en=voluptatem&banner=ratione&description=suscipit&description_en=dolor&img=itaque&parent_id=repudiandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories"
);

let params = {
    "title": "est",
    "title_en": "dolor",
    "describe": "aspernatur",
    "describe_en": "voluptatem",
    "banner": "ratione",
    "description": "suscipit",
    "description_en": "dolor",
    "img": "itaque",
    "parent_id": "repudiandae",
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
    "http://localhost/admin/product_categories/1?title=est&title_en=adipisci&describe=molestiae&describe_en=velit&banner=similique&description=ut&description_en=sequi&img=explicabo&parent_id=expedita" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
);

let params = {
    "title": "est",
    "title_en": "adipisci",
    "describe": "molestiae",
    "describe_en": "velit",
    "banner": "similique",
    "description": "ut",
    "description_en": "sequi",
    "img": "explicabo",
    "parent_id": "expedita",
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
    "http://localhost/admin/product_categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_categories/1"
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
    -G "http://localhost/admin/category_stories?page=exercitationem&page_limit=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "page": "exercitationem",
    "page_limit": "qui",
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
    "http://localhost/admin/category_stories?title=quidem&title_en=aut&description=aliquid&description_en=rem&banner=voluptas&product_category_id=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories"
);

let params = {
    "title": "quidem",
    "title_en": "aut",
    "description": "aliquid",
    "description_en": "rem",
    "banner": "voluptas",
    "product_category_id": "dolorem",
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
    "http://localhost/admin/category_stories/1?title=dolorum&title_en=atque&description=dignissimos&description_en=autem&banner=et&product_category_id=nobis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
);

let params = {
    "title": "dolorum",
    "title_en": "atque",
    "description": "dignissimos",
    "description_en": "autem",
    "banner": "et",
    "product_category_id": "nobis",
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
    "http://localhost/admin/category_stories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category_stories/1"
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
    -G "http://localhost/admin/product?page=nesciunt&page_limit=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "page": "nesciunt",
    "page_limit": "qui",
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
    "http://localhost/admin/product?product_category_id=eaque&product_name=ipsum&product_name_en=voluptatem&thumbnail=non&slug=facere&short_description=nihil&short_description_en=dolorem&price=quia&sale_price=placeat&stock=eaque&seo_title=similique&seo_keyword=ea&seo_description=adipisci&benefit=iure&benefit_en=vitae&tech_description=sapiente&tech_description_en=ut&description=dolore&description_en=est&usage=repudiandae&usage_en=numquam&main_image=explicabo&main_image_2=error&benefit_image=nihil&product_video=rerum&status=doloribus&rating=quibusdam&sold_count=dicta&review_count=exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let params = {
    "product_category_id": "eaque",
    "product_name": "ipsum",
    "product_name_en": "voluptatem",
    "thumbnail": "non",
    "slug": "facere",
    "short_description": "nihil",
    "short_description_en": "dolorem",
    "price": "quia",
    "sale_price": "placeat",
    "stock": "eaque",
    "seo_title": "similique",
    "seo_keyword": "ea",
    "seo_description": "adipisci",
    "benefit": "iure",
    "benefit_en": "vitae",
    "tech_description": "sapiente",
    "tech_description_en": "ut",
    "description": "dolore",
    "description_en": "est",
    "usage": "repudiandae",
    "usage_en": "numquam",
    "main_image": "explicabo",
    "main_image_2": "error",
    "benefit_image": "nihil",
    "product_video": "rerum",
    "status": "doloribus",
    "rating": "quibusdam",
    "sold_count": "dicta",
    "review_count": "exercitationem",
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
    "http://localhost/admin/product/1?product_category_id=ut&product_name=harum&product_name_en=iure&thumbnail=pariatur&slug=saepe&short_description=suscipit&short_description_en=aut&price=facilis&sale_price=commodi&stock=et&seo_title=ad&seo_keyword=quia&seo_description=et&benefit=commodi&benefit_en=soluta&tech_description=iure&tech_description_en=nisi&description=iste&description_en=et&usage=necessitatibus&usage_en=voluptatibus&main_image=quidem&main_image_2=recusandae&benefit_image=rerum&product_video=qui&status=cumque&rating=quam&sold_count=eius&review_count=modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let params = {
    "product_category_id": "ut",
    "product_name": "harum",
    "product_name_en": "iure",
    "thumbnail": "pariatur",
    "slug": "saepe",
    "short_description": "suscipit",
    "short_description_en": "aut",
    "price": "facilis",
    "sale_price": "commodi",
    "stock": "et",
    "seo_title": "ad",
    "seo_keyword": "quia",
    "seo_description": "et",
    "benefit": "commodi",
    "benefit_en": "soluta",
    "tech_description": "iure",
    "tech_description_en": "nisi",
    "description": "iste",
    "description_en": "et",
    "usage": "necessitatibus",
    "usage_en": "voluptatibus",
    "main_image": "quidem",
    "main_image_2": "recusandae",
    "benefit_image": "rerum",
    "product_video": "qui",
    "status": "cumque",
    "rating": "quam",
    "sold_count": "eius",
    "review_count": "modi",
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
    "http://localhost/admin/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
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
    -G "http://localhost/admin/product_sku" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
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
    "http://localhost/admin/product_sku?title=error&description=voluptate&price=aut&stock=deleniti&product_id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku"
);

let params = {
    "title": "error",
    "description": "voluptate",
    "price": "aut",
    "stock": "deleniti",
    "product_id": "qui",
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
    "http://localhost/admin/product_sku/1?title=molestiae&description=ut&price=ut&stock=vitae&product_id=voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
);

let params = {
    "title": "molestiae",
    "description": "ut",
    "price": "ut",
    "stock": "vitae",
    "product_id": "voluptas",
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
    "http://localhost/admin/product_sku/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product_sku/1"
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
    -G "http://localhost/admin/order?page=sequi&page_limit=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "sequi",
    "page_limit": "consequatur",
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
    "http://localhost/admin/order?page=expedita&page_limit=ex&username=nihil&order_no=minus&order_status=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let params = {
    "page": "expedita",
    "page_limit": "ex",
    "username": "nihil",
    "order_no": "minus",
    "order_status": "consequatur",
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

<!-- START_fdc2ff2366ce21167235c78796573398 -->
## 「ADMIN」Get logs list
获取日志列表

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/logs/1?page=non&page_limit=voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "page": "non",
    "page_limit": "voluptas",
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
`GET admin/logs/{collection}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | optional 页码
    `page_limit` |  optional  | optional 每页显示数目

<!-- END_fdc2ff2366ce21167235c78796573398 -->

<!-- START_3d3d1cecfbfa6d14f79ba39a4a048994 -->
## 「ADMIN」 destroy logs
删除日志(支持删除多条数据)

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/logs/1?ids=repellendus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logs/1"
);

let params = {
    "ids": "repellendus",
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
`DELETE admin/logs/{collection}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `ids` |  required  | ID值(array)

<!-- END_3d3d1cecfbfa6d14f79ba39a4a048994 -->


