##1. find products

**POST find_product.php**

Params(form data):

`model`
`brand` may be multiple
`color` may be multiple
`min-price`
`max-price`
`use_time` possible value: "0-1", "1-3", "3-infinity"
`state` possible value: 0, 1
`userID` sellerID

Return:

```
[
    {
        "PID":"00001",
        "brand": "Apple",
        "model": "iPhone X",
        "year": "2017-10-01",
        "color": "grey",
        "use_time": "0.2",
        "price": "892.08",
        "state": "0",
        "image": "2",
        "sell_time": "2015-08-31 13 : 05 : 28",
        "sellerID": "00002"
    },
    {
       ......//same
    }
]
```

##2. add product
**POST add_product.php**

Params(form data):

`model`
`brand` may be multiple
`color` may be multiple
`price`
`use_time` possible value: "0-1", "1-3", "3-infinity"
`userID` sellerID

Return:

```
[
    {
        "PID":"00001",
        "brand": "Apple",
        "model": "iPhone X",
        "year": "2017-10-01",
        "color": "grey",
        "use_time": "0.2",
        "price": "892.08",
        "state": "0",
        "image": "2",
        "sell_time": "2015-08-31 13 : 05 : 28",
        "sellerID": "00002"
    },
    {
       ......//same
    }
]
```

##3. find user

**POST find_product.php**

Params(form data):
`userName`
`password`

Return:
```
[
    {
        "userID": "20160001"
        "userName": "Marcelo83"
        "password": "BEaARV4sIJ8otpJ"
    }
]
```
