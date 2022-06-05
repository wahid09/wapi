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


<!-- START_c6c5c00d6ac7f771f157dff4a2889b1a -->
## _debugbar/open
> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/open" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/open"
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


> Example response (404):

```json
{
    "errors": "Incorrect route"
}
```

### HTTP Request
`GET _debugbar/open`


<!-- END_c6c5c00d6ac7f771f157dff4a2889b1a -->

<!-- START_7b167949c615f4a7e7b673f8d5fdaf59 -->
## Return Clockwork output

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/clockwork/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/clockwork/1"
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


> Example response (404):

```json
{
    "errors": "Incorrect route"
}
```

### HTTP Request
`GET _debugbar/clockwork/{id}`


<!-- END_7b167949c615f4a7e7b673f8d5fdaf59 -->

<!-- START_5f8a640000f5db43332951f0d77378c4 -->
## Return the stylesheets for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/assets/stylesheets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/assets/stylesheets"
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


> Example response (404):

```json
{
    "errors": "Incorrect route"
}
```

### HTTP Request
`GET _debugbar/assets/stylesheets`


<!-- END_5f8a640000f5db43332951f0d77378c4 -->

<!-- START_db7a887cf930ce3c638a8708fd1a75ee -->
## Return the javascript for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/assets/javascript" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/assets/javascript"
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


> Example response (404):

```json
{
    "errors": "Incorrect route"
}
```

### HTTP Request
`GET _debugbar/assets/javascript`


<!-- END_db7a887cf930ce3c638a8708fd1a75ee -->

<!-- START_0973671c4f56e7409202dc85c868d442 -->
## Forget a cache key

> Example request:

```bash
curl -X DELETE \
    "http://localhost/_debugbar/cache/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/cache/1/"
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
`DELETE _debugbar/cache/{key}/{tags?}`


<!-- END_0973671c4f56e7409202dc85c868d442 -->

<!-- START_b5d3b174e3bda1c03ffb8aef0bd5c0c2 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/module" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/module"
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
    "isSuccess": true,
    "message": "Successfully get module list",
    "data": [
        {
            "id": 1,
            "name": "Admin Dashboard",
            "name_bn": "অ্যাডমিন ড্যাশবোর্ড",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 2,
            "name": "Role Management",
            "name_bn": "রোল ম্যানেজমেন্ট",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 3,
            "name": "User Management",
            "name_bn": "ইউসার ম্যানেজমেন্ট",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 4,
            "name": "Backups",
            "name_bn": "ব্যাকআপ",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 5,
            "name": "Areas",
            "name_bn": "অঞ্চল",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 6,
            "name": "Module",
            "name_bn": "Module",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 7,
            "name": "Permission",
            "name_bn": "Permission",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 8,
            "name": "page",
            "name_bn": "পেজ",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 9,
            "name": "Slider",
            "name_bn": "স্লাইডার",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 10,
            "name": "Message",
            "name_bn": "বাণী",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 11,
            "name": "Program",
            "name_bn": "কর্মসূচী",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 12,
            "name": "Event",
            "name_bn": "ইভেন্টস",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 13,
            "name": "Page Content",
            "name_bn": "পেজ কনটেন্ট",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 14,
            "name": "Category",
            "name_bn": "ক্যাটাগরি",
            "status": 0,
            "created": "May Mon 2022"
        }
    ]
}
```

### HTTP Request
`GET api/v1/module`


<!-- END_b5d3b174e3bda1c03ffb8aef0bd5c0c2 -->

<!-- START_f5a721cad3094ea1009f5400ce68d23f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/module" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/module"
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
`POST api/v1/module`


<!-- END_f5a721cad3094ea1009f5400ce68d23f -->

<!-- START_561feedb7f58e914f43d08bbe4314473 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/module/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/module/1"
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
    "isSuccess": true,
    "message": "Module show successfully",
    "data": {
        "id": 1,
        "name": "Admin Dashboard",
        "name_bn": "অ্যাডমিন ড্যাশবোর্ড",
        "isActive": 0,
        "created": "May Mon 2022",
        "updated": "May Mon 2022"
    }
}
```

### HTTP Request
`GET api/v1/module/{module}`


<!-- END_561feedb7f58e914f43d08bbe4314473 -->

<!-- START_41053f59516dd8e96b063d2a52e428d5 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/module/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/module/1"
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
`PUT api/v1/module/{module}`

`PATCH api/v1/module/{module}`


<!-- END_41053f59516dd8e96b063d2a52e428d5 -->

<!-- START_5f86566880c8ab1873422108f6475927 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/module/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/module/1"
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
`DELETE api/v1/module/{module}`


<!-- END_5f86566880c8ab1873422108f6475927 -->

<!-- START_1ce0fe0e80463a33f46daf1a14ca48cc -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/permission" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/permission"
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
    "isSuccess": true,
    "message": "Successfully show permission list",
    "data": [
        {
            "id": 1,
            "module_name": "Admin Dashboard",
            "name": "Access Dashboard",
            "url": "access-dashboard",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 2,
            "module_name": "Role Management",
            "name": "Access Role",
            "url": "role-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 3,
            "module_name": "Role Management",
            "name": "Create Role",
            "url": "role-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 4,
            "module_name": "Role Management",
            "name": "Update Role",
            "url": "role-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 5,
            "module_name": "Role Management",
            "name": "Delete Role",
            "url": "role-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 6,
            "module_name": "User Management",
            "name": "Access User",
            "url": "user-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 7,
            "module_name": "User Management",
            "name": "Create User",
            "url": "user-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 8,
            "module_name": "User Management",
            "name": "Update User",
            "url": "user-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 9,
            "module_name": "User Management",
            "name": "Delete User",
            "url": "user-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 10,
            "module_name": "Backups",
            "name": "Access Backup",
            "url": "backup-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 11,
            "module_name": "Backups",
            "name": "Create Backup",
            "url": "backup-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 12,
            "module_name": "Backups",
            "name": "Update Backup",
            "url": "backup-download",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 13,
            "module_name": "Backups",
            "name": "Delete Backup",
            "url": "backup-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 14,
            "module_name": "Areas",
            "name": "Access Area",
            "url": "area-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 15,
            "module_name": "Areas",
            "name": "Create Area",
            "url": "area-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 16,
            "module_name": "Areas",
            "name": "Update Area",
            "url": "area-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 17,
            "module_name": "Areas",
            "name": "Delete Area",
            "url": "area-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 18,
            "module_name": "Module",
            "name": "Access Module",
            "url": "module-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 19,
            "module_name": "Module",
            "name": "Create Module",
            "url": "module-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 20,
            "module_name": "Module",
            "name": "Update Module",
            "url": "module-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 21,
            "module_name": "Module",
            "name": "Delete Module",
            "url": "module-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 22,
            "module_name": "Permission",
            "name": "Access Permission",
            "url": "permission-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 23,
            "module_name": "Permission",
            "name": "Create Permission",
            "url": "permission-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 24,
            "module_name": "Permission",
            "name": "Update Permission",
            "url": "permission-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 25,
            "module_name": "Permission",
            "name": "Delete Permission",
            "url": "permission-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 26,
            "module_name": "page",
            "name": "Access Page",
            "url": "page-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 27,
            "module_name": "page",
            "name": "Create Page",
            "url": "page-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 28,
            "module_name": "page",
            "name": "Update page",
            "url": "page-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 29,
            "module_name": "page",
            "name": "Delete Page",
            "url": "page-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 30,
            "module_name": "Slider",
            "name": "Access Slider",
            "url": "slider-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 31,
            "module_name": "Slider",
            "name": "Create Slider",
            "url": "slider-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 32,
            "module_name": "Slider",
            "name": "Update Slider",
            "url": "slider-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 33,
            "module_name": "Slider",
            "name": "Delete Slider",
            "url": "slider-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 34,
            "module_name": "Message",
            "name": "Access Message",
            "url": "message-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 35,
            "module_name": "Message",
            "name": "Create Message",
            "url": "message-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 36,
            "module_name": "Message",
            "name": "Update Message",
            "url": "message-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 37,
            "module_name": "Message",
            "name": "Delete Message",
            "url": "message-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 38,
            "module_name": "Program",
            "name": "Access Program",
            "url": "program-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 39,
            "module_name": "Program",
            "name": "Create Program",
            "url": "program-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 40,
            "module_name": "Program",
            "name": "Update Program",
            "url": "program-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 41,
            "module_name": "Program",
            "name": "Delete Program",
            "url": "program-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 42,
            "module_name": "Event",
            "name": "Access Event",
            "url": "event-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 43,
            "module_name": "Event",
            "name": "Create Event",
            "url": "event-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 44,
            "module_name": "Event",
            "name": "Update Event",
            "url": "event-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 45,
            "module_name": "Event",
            "name": "Delete Event",
            "url": "event-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 46,
            "module_name": "Page Content",
            "name": "Access Content",
            "url": "content-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 47,
            "module_name": "Page Content",
            "name": "Create Content",
            "url": "content-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 48,
            "module_name": "Page Content",
            "name": "Update Content",
            "url": "content-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 49,
            "module_name": "Page Content",
            "name": "Delete Content",
            "url": "content-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 50,
            "module_name": "Category",
            "name": "Access Category",
            "url": "category-index",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 51,
            "module_name": "Category",
            "name": "Create Category",
            "url": "category-create",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 52,
            "module_name": "Category",
            "name": "Update Category",
            "url": "category-update",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 53,
            "module_name": "Category",
            "name": "Delete Category",
            "url": "category-delete",
            "status": 0,
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        }
    ]
}
```

### HTTP Request
`GET api/v1/permission`


<!-- END_1ce0fe0e80463a33f46daf1a14ca48cc -->

<!-- START_7ae99daa4c685955a0bb1957dc7c7125 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/permission" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/permission"
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
`POST api/v1/permission`


<!-- END_7ae99daa4c685955a0bb1957dc7c7125 -->

<!-- START_1cc5c9c7f7eb948f7a4cdf0569007e7e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/permission/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/permission/1"
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
    "isSuccess": true,
    "message": "Successfully show permission",
    "data": {
        "id": 1,
        "module_id": 1,
        "name": "Access Dashboard",
        "isActive": 0,
        "created": "May Mon 2022",
        "updated": "May Mon 2022"
    }
}
```

### HTTP Request
`GET api/v1/permission/{permission}`


<!-- END_1cc5c9c7f7eb948f7a4cdf0569007e7e -->

<!-- START_02593a89d7299e12fbe17b2a19fbeac2 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/permission/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/permission/1"
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
`PUT api/v1/permission/{permission}`

`PATCH api/v1/permission/{permission}`


<!-- END_02593a89d7299e12fbe17b2a19fbeac2 -->

<!-- START_44ad155ad0de0418e9d1794951e82dfc -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/permission/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/permission/1"
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
`DELETE api/v1/permission/{permission}`


<!-- END_44ad155ad0de0418e9d1794951e82dfc -->

<!-- START_e7e28d5abb6f2e2aebbd819249e3df74 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/role"
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
    "isSuccess": true,
    "message": "Successfully show role list",
    "data": [
        {
            "id": 1,
            "name": "Super Admin",
            "name_bn": "সুপার অ্যাডমিন",
            "url": "super-admin",
            "description": "super admin can do everything",
            "status": 0,
            "isDeleteable": "Deleteable",
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        },
        {
            "id": 2,
            "name": "User",
            "name_bn": "ইউসার",
            "url": "user",
            "description": "User can not do anything",
            "status": 0,
            "isDeleteable": "Deleteable",
            "created": "May Mon 2022",
            "updated": "May Mon 2022"
        }
    ]
}
```

### HTTP Request
`GET api/v1/role`


<!-- END_e7e28d5abb6f2e2aebbd819249e3df74 -->

<!-- START_7408b91c74ccb01e841c74113e2aa06b -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/role"
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
`POST api/v1/role`


<!-- END_7408b91c74ccb01e841c74113e2aa06b -->

<!-- START_6aa1bd6d788e97f52dbc7e808a931475 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/role/1"
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
    "isSuccess": true,
    "message": "Response Success",
    "role": {
        "id": 1,
        "name": "Super Admin",
        "name_bn": "সুপার অ্যাডমিন",
        "url": "super-admin",
        "description": "super admin can do everything",
        "isActive": 0,
        "isDeleteable": "Deleteable",
        "created": "May Mon 2022"
    }
}
```

### HTTP Request
`GET api/v1/role/{role}`


<!-- END_6aa1bd6d788e97f52dbc7e808a931475 -->

<!-- START_9d5385513313fa336cae20cc1932a8db -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/role/1"
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
`PUT api/v1/role/{role}`

`PATCH api/v1/role/{role}`


<!-- END_9d5385513313fa336cae20cc1932a8db -->

<!-- START_667d996228ea23bc174f18c141bb356c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/role/1"
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
`DELETE api/v1/role/{role}`


<!-- END_667d996228ea23bc174f18c141bb356c -->

<!-- START_861353e1b6768a0f1461ac66bd0b0316 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/category"
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
    "isSuccess": true,
    "message": "Successfully get category list",
    "data": [
        {
            "id": 1,
            "name": "Dashboard",
            "name_bn": "Dashboard",
            "url": "dashboard",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 2,
            "name": "Category1",
            "name_bn": "Category1",
            "url": "category_1",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 3,
            "name": "Category2",
            "name_bn": "Category2",
            "url": "category_2",
            "status": 0,
            "created": "May Mon 2022"
        },
        {
            "id": 4,
            "name": "Category3",
            "name_bn": "Category3",
            "url": "category_3",
            "status": 0,
            "created": "May Mon 2022"
        }
    ]
}
```

### HTTP Request
`GET api/v1/category`


<!-- END_861353e1b6768a0f1461ac66bd0b0316 -->

<!-- START_c5ef86a407a7b87c648bcaa4591381fd -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/category"
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
`POST api/v1/category`


<!-- END_c5ef86a407a7b87c648bcaa4591381fd -->

<!-- START_3472a3f42a5b1dc76bb66947128507de -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/category/1"
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
    "isSuccess": true,
    "message": "Successfully show category",
    "data": {
        "id": 1,
        "name": "Dashboard",
        "name_bn": "Dashboard",
        "url": "dashboard",
        "isActive": 0,
        "created": "May Mon 2022",
        "updated": "May Mon 2022"
    }
}
```

### HTTP Request
`GET api/v1/category/{category}`


<!-- END_3472a3f42a5b1dc76bb66947128507de -->

<!-- START_1db2d190ad189a02f319863757b20317 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/category/1"
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
`PUT api/v1/category/{category}`

`PATCH api/v1/category/{category}`


<!-- END_1db2d190ad189a02f319863757b20317 -->

<!-- START_6a1a0789d7f1fd66545b46c16f81e028 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/category/1"
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
`DELETE api/v1/category/{category}`


<!-- END_6a1a0789d7f1fd66545b46c16f81e028 -->

<!-- START_6db5b532efea875f42f2c035b2d3122a -->
## api/v1/module_with_permission
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/module_with_permission" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/module_with_permission"
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
    "isSuccess": true,
    "message": "Successfully show role list",
    "data": [
        {
            "id": 1,
            "name": "Admin Dashboard",
            "name_bn": "অ্যাডমিন ড্যাশবোর্ড",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 1,
                    "module_id": 1,
                    "name": "Access Dashboard",
                    "slug": "access-dashboard",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 2,
            "name": "Role Management",
            "name_bn": "রোল ম্যানেজমেন্ট",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 2,
                    "module_id": 2,
                    "name": "Access Role",
                    "slug": "role-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 3,
                    "module_id": 2,
                    "name": "Create Role",
                    "slug": "role-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 4,
                    "module_id": 2,
                    "name": "Update Role",
                    "slug": "role-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 5,
                    "module_id": 2,
                    "name": "Delete Role",
                    "slug": "role-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 3,
            "name": "User Management",
            "name_bn": "ইউসার ম্যানেজমেন্ট",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 6,
                    "module_id": 3,
                    "name": "Access User",
                    "slug": "user-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 7,
                    "module_id": 3,
                    "name": "Create User",
                    "slug": "user-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 8,
                    "module_id": 3,
                    "name": "Update User",
                    "slug": "user-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 9,
                    "module_id": 3,
                    "name": "Delete User",
                    "slug": "user-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 4,
            "name": "Backups",
            "name_bn": "ব্যাকআপ",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 10,
                    "module_id": 4,
                    "name": "Access Backup",
                    "slug": "backup-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 11,
                    "module_id": 4,
                    "name": "Create Backup",
                    "slug": "backup-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 12,
                    "module_id": 4,
                    "name": "Update Backup",
                    "slug": "backup-download",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 13,
                    "module_id": 4,
                    "name": "Delete Backup",
                    "slug": "backup-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 5,
            "name": "Areas",
            "name_bn": "অঞ্চল",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 14,
                    "module_id": 5,
                    "name": "Access Area",
                    "slug": "area-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 15,
                    "module_id": 5,
                    "name": "Create Area",
                    "slug": "area-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 16,
                    "module_id": 5,
                    "name": "Update Area",
                    "slug": "area-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 17,
                    "module_id": 5,
                    "name": "Delete Area",
                    "slug": "area-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 6,
            "name": "Module",
            "name_bn": "Module",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 18,
                    "module_id": 6,
                    "name": "Access Module",
                    "slug": "module-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 19,
                    "module_id": 6,
                    "name": "Create Module",
                    "slug": "module-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 20,
                    "module_id": 6,
                    "name": "Update Module",
                    "slug": "module-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 21,
                    "module_id": 6,
                    "name": "Delete Module",
                    "slug": "module-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 7,
            "name": "Permission",
            "name_bn": "Permission",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 22,
                    "module_id": 7,
                    "name": "Access Permission",
                    "slug": "permission-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 23,
                    "module_id": 7,
                    "name": "Create Permission",
                    "slug": "permission-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 24,
                    "module_id": 7,
                    "name": "Update Permission",
                    "slug": "permission-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 25,
                    "module_id": 7,
                    "name": "Delete Permission",
                    "slug": "permission-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 8,
            "name": "page",
            "name_bn": "পেজ",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 26,
                    "module_id": 8,
                    "name": "Access Page",
                    "slug": "page-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 27,
                    "module_id": 8,
                    "name": "Create Page",
                    "slug": "page-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 28,
                    "module_id": 8,
                    "name": "Update page",
                    "slug": "page-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 29,
                    "module_id": 8,
                    "name": "Delete Page",
                    "slug": "page-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 9,
            "name": "Slider",
            "name_bn": "স্লাইডার",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 30,
                    "module_id": 9,
                    "name": "Access Slider",
                    "slug": "slider-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 31,
                    "module_id": 9,
                    "name": "Create Slider",
                    "slug": "slider-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 32,
                    "module_id": 9,
                    "name": "Update Slider",
                    "slug": "slider-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 33,
                    "module_id": 9,
                    "name": "Delete Slider",
                    "slug": "slider-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 10,
            "name": "Message",
            "name_bn": "বাণী",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 34,
                    "module_id": 10,
                    "name": "Access Message",
                    "slug": "message-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 35,
                    "module_id": 10,
                    "name": "Create Message",
                    "slug": "message-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 36,
                    "module_id": 10,
                    "name": "Update Message",
                    "slug": "message-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 37,
                    "module_id": 10,
                    "name": "Delete Message",
                    "slug": "message-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 11,
            "name": "Program",
            "name_bn": "কর্মসূচী",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 38,
                    "module_id": 11,
                    "name": "Access Program",
                    "slug": "program-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 39,
                    "module_id": 11,
                    "name": "Create Program",
                    "slug": "program-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 40,
                    "module_id": 11,
                    "name": "Update Program",
                    "slug": "program-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 41,
                    "module_id": 11,
                    "name": "Delete Program",
                    "slug": "program-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 12,
            "name": "Event",
            "name_bn": "ইভেন্টস",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 42,
                    "module_id": 12,
                    "name": "Access Event",
                    "slug": "event-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 43,
                    "module_id": 12,
                    "name": "Create Event",
                    "slug": "event-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 44,
                    "module_id": 12,
                    "name": "Update Event",
                    "slug": "event-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 45,
                    "module_id": 12,
                    "name": "Delete Event",
                    "slug": "event-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 13,
            "name": "Page Content",
            "name_bn": "পেজ কনটেন্ট",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 46,
                    "module_id": 13,
                    "name": "Access Content",
                    "slug": "content-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 47,
                    "module_id": 13,
                    "name": "Create Content",
                    "slug": "content-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 48,
                    "module_id": 13,
                    "name": "Update Content",
                    "slug": "content-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 49,
                    "module_id": 13,
                    "name": "Delete Content",
                    "slug": "content-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 14,
            "name": "Category",
            "name_bn": "ক্যাটাগরি",
            "isActive": 0,
            "deleted_at": null,
            "created_at": "2022-05-30T05:28:07.000000Z",
            "updated_at": "2022-05-30T05:28:07.000000Z",
            "permissions": [
                {
                    "id": 50,
                    "module_id": 14,
                    "name": "Access Category",
                    "slug": "category-index",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 51,
                    "module_id": 14,
                    "name": "Create Category",
                    "slug": "category-create",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 52,
                    "module_id": 14,
                    "name": "Update Category",
                    "slug": "category-update",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                },
                {
                    "id": 53,
                    "module_id": 14,
                    "name": "Delete Category",
                    "slug": "category-delete",
                    "isActive": 0,
                    "deleted_at": null,
                    "created_at": "2022-05-30T05:28:07.000000Z",
                    "updated_at": "2022-05-30T05:28:07.000000Z"
                }
            ]
        },
        {
            "id": 15,
            "name": "local",
            "name_bn": "local",
            "isActive": 1,
            "deleted_at": "2022-05-30T06:32:04.000000Z",
            "created_at": "2022-05-30T06:31:28.000000Z",
            "updated_at": "2022-05-30T06:32:04.000000Z",
            "permissions": []
        }
    ]
}
```

### HTTP Request
`GET api/v1/module_with_permission`


<!-- END_6db5b532efea875f42f2c035b2d3122a -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
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
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
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
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
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
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
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
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
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
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
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
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
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
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
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
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
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
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
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
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
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
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
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
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_5dc2eb8c2e4e10776de3279d251681b0 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/1"
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
`GET {path}`


<!-- END_5dc2eb8c2e4e10776de3279d251681b0 -->


