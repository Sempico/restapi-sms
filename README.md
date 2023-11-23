# SAAS Sempico SMS Library
Sempico solutions sms api library for admins


## Requirements

- PHP with Curl Extension Support
- Sempico Account

## How to use
### Install with Composer
Recommended install via [composer](http://getcomposer.org)
```bash
composer require sempico/sempico-php
```

#### Simple usage
```php
use Sempico\Api\ApiClient;

$accessToken = 'Dfdda23vwWv2khHs'; // It's your access token
$domain = 'https://app.sempico.solutions/'; // It's your domain

// create api cient for usage
$client = new ApiClient($accessToken, $domain); 
```

#### Source price
```php
use Sempico\Api\SourcePrice;

$sourcePrice = new SourcePrice($client); //parameter $client is ApiClient object

//Get all source prices
$all = $sourcePrice->getAll([
  "MCC" => "255",
  "MNC" => "5",
  "id_aggregating" => "1",
  "id_aggregating_type" => "1",
  "type_sms" => "sms",
  "limit" => "1000",
  "page" => "1"
]);

//Update
$sourcePriceId = 33;
$updateResult = $sourcePrice->update($sourcePriceId, [
  "MCC" => "255",
  "MNC" => "5",
  "id_aggregating" => "1",
  "id_aggregating_type" => "1",
  "type_sms" => "sms",
  "id_currency" => "1",
  "price" => "0.02"
]);

//Create
$createResult = $sourcePrice->create([
  "MCC" => "255",
  "MNC" => "5",
  "id_aggregating" => "1",
  "id_aggregating_type" => "1",
  "type_sms" => "sms",
  "id_currency" => "1",
  "price" => "0.04"
]);

// Delete
$sourcePriceId = 33;
$deleteResult = $sourcePrice->delete($sourcePriceId);

...
```

#### Statistic
```php
use Sempico\Api\Statistic;

$statistic = new Statistic($client); //parameter $client is ApiClient object

//Get all quick statistic
$quickResult = $statistic->quickSearch([
  "MCC" => 255,
  "users_ids" => [1],
  "id_aggregating" => 1,
  "limit" => 1000,
  "page" => 1
]);

//Get sms full data statistic
$smsFullData = $statistic->smsFullData(53, [
  "MCC" => 25500,
  "id_user" => [1],
  "id_aggregating" => 1,
  "limit" => 1000,
  "page" => 1
]);

//Get general statistic
$generalResult = $statistic->general([
  "MCC_choose" => [2551],
  "id_user_choose" => [1],
  "id_aggregating_choose" => [1],
  "type_sms" => ['sms'],
  "date_range_choose" => "2023-07-20 - 2023-07-22"
]);
```

#### Aggregator
```php
use Sempico\Api\Aggregator;

$aggregator = new Statistic($client); //parameter $client is ApiClient object

//Get data about aggregators
$aggregatorsResult = $aggregator->getAll([
  "name": "Main",
  "login": "Diar",
  "manager_ids": [34, 3],
  "onlyWorks": 1,
  "socket_type": ['tcp'],
  "connection": 2,
  "ip": "234.00.54.033"
]);
```

## Credits and License
### Author
Taras [winclain91@gmail.com]

### License
MIT License
