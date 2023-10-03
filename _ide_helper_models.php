<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\CategoriesServicesMain
 *
 * @property int $idCategoryMain
 * @property string $nameCategoryMain
 * @property int|null $idSubCategory
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Companies> $Companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Services> $FunctionName
 * @property-read int|null $function_name_count
 * @property-read CategoriesServicesMain|null $SelfBe
 * @property-read \Illuminate\Database\Eloquent\Collection<int, CategoriesServicesMain> $SelfHas
 * @property-read int|null $self_has_count
 * @method static \Illuminate\Database\Eloquent\Builder|CategoriesServicesMain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoriesServicesMain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoriesServicesMain query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoriesServicesMain whereIdCategoryMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoriesServicesMain whereIdSubCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoriesServicesMain whereNameCategoryMain($value)
 */
	class CategoriesServicesMain extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Chat
 *
 * @property int $id
 * @property int $idCus
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\Customers $Customers
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereIdCus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereTimeUpdate($value)
 */
	class Chat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChatContaint
 *
 * @property int $id
 * @property string $containt
 * @property int $idChat
 * @property int|null $idEmp
 * @property bool $isRecive
 * @property mixed $0
 * @method static \Illuminate\Database\Eloquent\Builder|ChatContaint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatContaint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatContaint query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatContaint whereContaint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatContaint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatContaint whereIdChat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatContaint whereIdEmp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatContaint whereIsRecive($value)
 */
	class ChatContaint extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cities
 *
 * @property int $idCity
 * @property int $idCountry
 * @property string $cityName
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Countries $Countries
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PlacePirthCustomers> $PlacePirthCustomers
 * @property-read int|null $place_pirth_customers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Trips> $Trips
 * @property-read int|null $trips_count
 * @method static \Illuminate\Database\Eloquent\Builder|Cities newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cities newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cities query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cities whereCityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cities whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cities whereIdCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cities whereIdCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cities whereUpdatedAt($value)
 */
	class Cities extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Companies
 *
 * @property int $idCompanes
 * @property string $companiyName
 * @property string $numberPhone
 * @property string $addressCompaniy
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\CategoriesServicesMain|null $CategoriesServicesMain
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CompaniesServices> $CompaniesServices
 * @property-read int|null $companies_services_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Trips> $Trips
 * @property-read int|null $trips_count
 * @method static \Illuminate\Database\Eloquent\Builder|Companies newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Companies newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Companies query()
 * @method static \Illuminate\Database\Eloquent\Builder|Companies whereAddressCompaniy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Companies whereCompaniyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Companies whereIdCompanes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Companies whereNumberPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Companies whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Companies whereTimeUpdate($value)
 */
	class Companies extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CompaniesServices
 *
 * @property int $idCompanes
 * @property int $idServ
 * @property-read \App\Models\Companies $Companies
 * @property-read \App\Models\Services $Services
 * @method static \Illuminate\Database\Eloquent\Builder|CompaniesServices newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompaniesServices newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompaniesServices query()
 * @method static \Illuminate\Database\Eloquent\Builder|CompaniesServices whereIdCompanes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompaniesServices whereIdServ($value)
 */
	class CompaniesServices extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Countries
 *
 * @property int $id
 * @property string $countryName
 * @property bool $isLocal
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property mixed $0
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cities> $Cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PlacePirthCustomers> $PlacePirthCustomers
 * @property-read int|null $place_pirth_customers_count
 * @method static \Illuminate\Database\Eloquent\Builder|Countries newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Countries newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Countries query()
 * @method static \Illuminate\Database\Eloquent\Builder|Countries whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Countries whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Countries whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Countries whereIsLocal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Countries whereUpdatedAt($value)
 */
	class Countries extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Currencies
 *
 * @property int $id
 * @property string $name
 * @property string $codeAr
 * @property string $codeEn
 * @property float $conversionRate
 * @property bool $isDefaulte
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property mixed $1
 * @property mixed $2
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Trips> $Trips
 * @property-read int|null $trips_count
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies whereCodeAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies whereCodeEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies whereConversionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies whereIsDefaulte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currencies whereTimeUpdate($value)
 */
	class Currencies extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CustomeNotificationRequest
 *
 * @property int $idCustomerRequsts
 * @property string $enterDate
 * @property string $exitDate
 * @property int $idCus
 * @method static \Illuminate\Database\Eloquent\Builder|CustomeNotificationRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomeNotificationRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomeNotificationRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomeNotificationRequest whereEnterDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomeNotificationRequest whereExitDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomeNotificationRequest whereIdCus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomeNotificationRequest whereIdCustomerRequsts($value)
 */
	class CustomeNotificationRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CustomerName
 *
 * @property int $idCusIdentity
 * @property string $frisName
 * @property string $lastName
 * @property string $surName
 * @property-read \App\Models\IdentityCustomers|null $FunctionName
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerName query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerName whereFrisName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerName whereIdCusIdentity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerName whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerName whereSurName($value)
 */
	class CustomerName extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CustomerRequests
 *
 * @property int $idCustomerRequsts
 * @property int $idServ
 * @property int $idState
 * @property int $idCus
 * @property int|null $idEmp
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\Customers $Customers
 * @property-read \App\Models\Employees|null $Employees
 * @property-read \App\Models\Services $Services
 * @property-read \App\Models\ServicesBookinng|null $ServicesBookinng
 * @property-read \App\Models\StateRequest $StateRequest
 * @property-read \App\Models\TripsBookings|null $TripsBookings
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerRequests newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerRequests newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerRequests query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerRequests whereIdCus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerRequests whereIdCustomerRequsts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerRequests whereIdEmp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerRequests whereIdServ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerRequests whereIdState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerRequests whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerRequests whereTimeUpdate($value)
 */
	class CustomerRequests extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CustomerWithIdentity
 *
 * @property int $identityCustmerId
 * @property int $idCus
 * @property bool $isMe
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\Customers $Customers
 * @property-read \App\Models\IdentityCustomers $IdentityCustomers
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerWithIdentity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerWithIdentity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerWithIdentity query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerWithIdentity whereIdCus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerWithIdentity whereIdentityCustmerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerWithIdentity whereIsMe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerWithIdentity whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerWithIdentity whereTimeUpdate($value)
 */
	class CustomerWithIdentity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Customers
 *
 * @property int $idCus
 * @property string $nikName
 * @property string $numberPhone
 * @property string $emailAddress
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property mixed $1
 * @property mixed $2
 * @property mixed $3
 * @property-read \App\Models\Chat|null $Chat
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CustomerRequests> $CustomerRequests
 * @property-read int|null $customer_requests_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CustomerWithIdentity> $CustomerWithIdentity
 * @property-read int|null $customer_with_identity_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Customers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customers query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereEmailAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereIdCus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereNikName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereNumberPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereTimeUpdate($value)
 */
	class Customers extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DayScheduler
 *
 * @property int $idScheduler
 * @property int $idDay
 * @property-read \App\Models\Days $Days
 * @property-read \App\Models\SchedulerTrip $SchedulerTrip
 * @method static \Illuminate\Database\Eloquent\Builder|DayScheduler newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DayScheduler newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DayScheduler query()
 * @method static \Illuminate\Database\Eloquent\Builder|DayScheduler whereIdDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DayScheduler whereIdScheduler($value)
 */
	class DayScheduler extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Days
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DayScheduler> $DayScheduler
 * @property-read int|null $day_scheduler_count
 * @method static \Illuminate\Database\Eloquent\Builder|Days newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Days newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Days query()
 * @method static \Illuminate\Database\Eloquent\Builder|Days whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Days whereName($value)
 */
	class Days extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EmployeeNames
 *
 * @property int $idEmp
 * @property string $frisName
 * @property string $lastName
 * @property string $surName
 * @property mixed $0
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNames newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNames newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNames query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNames whereFrisName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNames whereIdEmp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNames whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNames whereSurName($value)
 */
	class EmployeeNames extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employees
 *
 * @property int $idEmp
 * @property string $numberPhone
 * @property string $address
 * @property string $password
 * @property bool $isAdmin
 * @property bool $isActive
 * @property float $salary
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property mixed $1
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CustomerRequests> $CustomerRequests
 * @property-read int|null $customer_requests_count
 * @property-read \App\Models\EmployeeNames|null $EmployeeNames
 * @method static \Illuminate\Database\Eloquent\Builder|Employees newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employees newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employees query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereIdEmp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereNumberPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereTimeUpdate($value)
 */
	class Employees extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gender
 *
 * @property int $idGender
 * @property string $nameAr
 * @property string $nameEn
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\IdentityCustomers> $IdentityCustomers
 * @property-read int|null $identity_customers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubRequiremnts> $SubRequiremnts
 * @property-read int|null $sub_requiremnts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Gender newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereIdGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereNameEn($value)
 */
	class Gender extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IdentityCustomers
 *
 * @property int $ID
 * @property string|null $idCard
 * @property string $datePirth
 * @property int $idTypeIdentity
 * @property string|null $releaseDate
 * @property int $idGender
 * @property int $idMartial
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\CustomerName|null $CustomerName
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CustomerWithIdentity> $CustomerWithIdentity
 * @property-read int|null $customer_with_identity_count
 * @property-read \App\Models\Gender $Gender
 * @property-read \App\Models\IdentityType $IdentityType
 * @property-read \App\Models\MartialStatus $MartialStatus
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers query()
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers whereDatePirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers whereIdCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers whereIdGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers whereIdMartial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers whereIdTypeIdentity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityCustomers whereTimeUpdate($value)
 */
	class IdentityCustomers extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IdentityType
 *
 * @property int $id
 * @property string $name
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ServicesAndIdentify> $ServicesAndIdentify
 * @property-read int|null $services_and_identify_count
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityType query()
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityType whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityType whereTimeUpdate($value)
 */
	class IdentityType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MainRequiremnts
 *
 * @property int $idMainRequire
 * @property int $idServ
 * @property int $idTypeFile
 * @property string $nameRequirment
 * @property int|null $idMainRequireSub
 * @property int $isActive
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property mixed $1
 * @property mixed $2
 * @property-read \App\Models\Services $Services
 * @property-read \App\Models\TypeOfFild $TypeOfFild
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\chooseMainRequerment> $chooseMainRequerment
 * @property-read int|null $choose_main_requerment_count
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts query()
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts whereIdMainRequire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts whereIdMainRequireSub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts whereIdServ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts whereIdTypeFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts whereNameRequirment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainRequiremnts whereTimeUpdate($value)
 */
	class MainRequiremnts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MartialStatus
 *
 * @property int $idMartial
 * @property string $nameAr
 * @property string|null $nameEn
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\IdentityCustomers> $FunctionName
 * @property-read int|null $function_name_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubRequiremnts> $SubRequiremnts
 * @property-read int|null $sub_requiremnts_count
 * @method static \Illuminate\Database\Eloquent\Builder|MartialStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MartialStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MartialStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|MartialStatus whereIdMartial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MartialStatus whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MartialStatus whereNameEn($value)
 */
	class MartialStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MethodScheduler
 *
 * @property int $id
 * @property string $name
 * @property int $isActive
 * @property mixed $0
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SchedulerTrip> $SchedulerTrip
 * @property-read int|null $scheduler_trip_count
 * @method static \Illuminate\Database\Eloquent\Builder|MethodScheduler newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MethodScheduler newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MethodScheduler query()
 * @method static \Illuminate\Database\Eloquent\Builder|MethodScheduler whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MethodScheduler whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MethodScheduler whereName($value)
 */
	class MethodScheduler extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NotificationDetails
 *
 * @property int $id
 * @property int|null $idCustomerRequsts
 * @property int $idNotificationTemplete
 * @property int $idCus
 * @property bool $isRecive
 * @property-read \App\Models\NotificationTemplets $NotificationTemplets
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationDetails whereIdCus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationDetails whereIdCustomerRequsts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationDetails whereIdNotificationTemplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationDetails whereIsRecive($value)
 */
	class NotificationDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NotificationTemplets
 *
 * @property int $id
 * @property string $titleTemplet
 * @property string $titleNotification
 * @property string $body
 * @property string|null $summury
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationTemplets newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationTemplets newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationTemplets query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationTemplets whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationTemplets whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationTemplets whereSummury($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationTemplets whereTitleNotification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationTemplets whereTitleTemplet($value)
 */
	class NotificationTemplets extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PlacePirthCustomers
 *
 * @property int $ID
 * @property int $idcountry
 * @property int $idcity
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\Cities $Cities
 * @property-read \App\Models\Countries $Countries
 * @method static \Illuminate\Database\Eloquent\Builder|PlacePirthCustomers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlacePirthCustomers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlacePirthCustomers query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlacePirthCustomers whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlacePirthCustomers whereIdcity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlacePirthCustomers whereIdcountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlacePirthCustomers whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlacePirthCustomers whereTimeUpdate($value)
 */
	class PlacePirthCustomers extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PlanTrips
 *
 * @property int $id
 * @property string $name
 * @property int $isActive
 * @property mixed $0
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TripsBookings> $TripsBookings
 * @property-read int|null $trips_bookings_count
 * @method static \Illuminate\Database\Eloquent\Builder|PlanTrips newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanTrips newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanTrips query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanTrips whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanTrips whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanTrips whereName($value)
 */
	class PlanTrips extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RelativeRelation
 *
 * @property int $id
 * @property string $name
 * @property int $idGender
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\Gender $Genders
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RelativeRelationAndSubRequerment> $RelativeRelationAndSubRequerment
 * @property-read int|null $relative_relation_and_sub_requerment_count
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelation query()
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelation whereIdGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelation whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelation whereTimeUpdate($value)
 */
	class RelativeRelation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RelativeRelationAndSubRequerment
 *
 * @property int $idRelativRel
 * @property int $idSubRequire
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\RelativeRelation $RelativeRelation
 * @property-read \App\Models\SubRequiremnts $SubRequiremnts
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelationAndSubRequerment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelationAndSubRequerment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelationAndSubRequerment query()
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelationAndSubRequerment whereIdRelativRel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelationAndSubRequerment whereIdSubRequire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelationAndSubRequerment whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelativeRelationAndSubRequerment whereTimeUpdate($value)
 */
	class RelativeRelationAndSubRequerment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RequermentCustommerServicesBookinng
 *
 * @property int $id
 * @property int $idServiceBookDetails
 * @property int|null $idMainRequire
 * @property int|null $idSubReqDetail
 * @property string|null $textValue
 * @property int $idTypeFiled
 * @property string|null $urlFile
 * @property int|null $idChoice
 * @property int $stateOfRequiremnt
 * @property int $idState
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property mixed $1
 * @property-read \App\Models\MainRequiremnts|null $MainRequiremnts
 * @property-read \App\Models\ServicesBookinngDetails $ServicesBookinngDetails
 * @property-read \App\Models\StateRequerment $StateRequerment
 * @property-read \App\Models\SubRequiremntsDetails|null $SubRequiremntsDetails
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereIdChoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereIdMainRequire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereIdServiceBookDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereIdState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereIdSubReqDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereIdTypeFiled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereStateOfRequiremnt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereTextValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereTimeUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequermentCustommerServicesBookinng whereUrlFile($value)
 */
	class RequermentCustommerServicesBookinng extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RequiremntsCustomerToBooking
 *
 * @property int $id
 * @property int $idDetailsTripBooking
 * @property int|null $idMainRequire
 * @property int|null $idSubReqDetail
 * @property string|null $textValue
 * @property int $idTypeFiled
 * @property string|null $urlFile
 * @property int|null $idChoice
 * @property int $idState
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property mixed $1
 * @property-read \App\Models\MainRequiremnts|null $MainRequiremnts
 * @property-read \App\Models\StateRequerment $StateRequerment
 * @property-read \App\Models\SubRequiremntsDetails|null $SubRequiremntsDetails
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereIdChoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereIdDetailsTripBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereIdMainRequire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereIdState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereIdSubReqDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereIdTypeFiled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereTextValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereTimeUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequiremntsCustomerToBooking whereUrlFile($value)
 */
	class RequiremntsCustomerToBooking extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ResidencePlaceCustomers
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ResidencePlaceCustomers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResidencePlaceCustomers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResidencePlaceCustomers query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResidencePlaceCustomers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResidencePlaceCustomers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResidencePlaceCustomers whereUpdatedAt($value)
 */
	class ResidencePlaceCustomers extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SchedulerTrip
 *
 * @property int $idScheduler
 * @property int $idMethod
 * @property int $idTrips
 * @property int $atCount
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DayScheduler> $DayScheduler
 * @property-read int|null $day_scheduler_count
 * @property-read \App\Models\MethodScheduler $MethodScheduler
 * @property-read \App\Models\Trips $Trips
 * @method static \Illuminate\Database\Eloquent\Builder|SchedulerTrip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchedulerTrip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchedulerTrip query()
 * @method static \Illuminate\Database\Eloquent\Builder|SchedulerTrip whereAtCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchedulerTrip whereIdMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchedulerTrip whereIdScheduler($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchedulerTrip whereIdTrips($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchedulerTrip whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchedulerTrip whereTimeUpdate($value)
 */
	class SchedulerTrip extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Services
 *
 * @property int $idServ
 * @property string $serviceName
 * @property int $idCategoryMain
 * @property string|null $pathImage
 * @property int $isActive
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property mixed $1
 * @property mixed $2
 * @property-read \App\Models\CategoriesServicesMain $CategoriesServicesMain
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CompaniesServices> $CompaniesServices
 * @property-read int|null $companies_services_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CustomerRequests> $CustomerRequests
 * @property-read int|null $customer_requests_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MainRequiremnts> $MainRequiremnts
 * @property-read int|null $main_requiremnts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ServicesAndIdentify> $ServicesAndIdentify
 * @property-read int|null $services_and_identify_count
 * @property-read \App\Models\ServicesDetails|null $ServicesDetails
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubRequiremnts> $SubRequiremnts
 * @property-read int|null $sub_requiremnts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Services newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Services newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Services query()
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereIdCategoryMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereIdServ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services wherePathImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereServiceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereTimeUpdate($value)
 */
	class Services extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServicesAndIdentify
 *
 * @property int $idServ
 * @property int $idIdentity
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\IdentityType $IdentityType
 * @property-read \App\Models\Services $Services
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesAndIdentify newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesAndIdentify newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesAndIdentify query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesAndIdentify whereIdIdentity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesAndIdentify whereIdServ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesAndIdentify whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesAndIdentify whereTimeUpdate($value)
 */
	class ServicesAndIdentify extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServicesBookinng
 *
 * @property int $idServicesBooking
 * @property int $idCustomerRequsts
 * @property string $bookingServicesDate
 * @property string|null $dateEndDurtion
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property mixed $1
 * @property-read \App\Models\CustomerRequests $CustomerRequests
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ServicesBookinngDetails> $ServicesBookinngDetails
 * @property-read int|null $services_bookinng_details_count
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinng newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinng newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinng query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinng whereBookingServicesDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinng whereDateEndDurtion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinng whereIdCustomerRequsts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinng whereIdServicesBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinng whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinng whereTimeUpdate($value)
 */
	class ServicesBookinng extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServicesBookinngDetails
 *
 * @property int $idServiceBookDetails
 * @property int $idServicesBooking
 * @property int $identityCustmerId
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\IdentityCustomers $IdentityCustomers
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RequermentCustommerServicesBookinng> $RequermentCustommerServicesBookinng
 * @property-read int|null $requerment_custommer_services_bookinng_count
 * @property-read \App\Models\ServicesBookinng $ServicesBookinng
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinngDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinngDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinngDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinngDetails whereIdServiceBookDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinngDetails whereIdServicesBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinngDetails whereIdentityCustmerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinngDetails whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesBookinngDetails whereTimeUpdate($value)
 */
	class ServicesBookinngDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServicesCompanies
 *
 * @property int $idCompanes
 * @property int $idServ
 * @property-read \App\Models\Companies $Companies
 * @property-read \App\Models\Services $Services
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCompanies newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCompanies newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCompanies query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCompanies whereIdCompanes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCompanies whereIdServ($value)
 */
	class ServicesCompanies extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServicesDetails
 *
 * @property int $idServ
 * @property int $idServiceDetail
 * @property float $priceService
 * @property int|null $DurationOfServiceByDays
 * @property string|null $lineServices
 * @property mixed $0
 * @property-read \App\Models\Services $Services
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesDetails whereDurationOfServiceByDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesDetails whereIdServ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesDetails whereIdServiceDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesDetails whereLineServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesDetails wherePriceService($value)
 */
	class ServicesDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StateRequerment
 *
 * @property int $id
 * @property string $name
 * @property mixed $0
 * @method static \Illuminate\Database\Eloquent\Builder|StateRequerment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StateRequerment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StateRequerment query()
 * @method static \Illuminate\Database\Eloquent\Builder|StateRequerment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StateRequerment whereName($value)
 */
	class StateRequerment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StateRequest
 *
 * @property int $id
 * @property string $name
 * @property mixed $0
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CustomerRequests> $CustomerRequests
 * @property-read int|null $customer_requests_count
 * @method static \Illuminate\Database\Eloquent\Builder|StateRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StateRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StateRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|StateRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StateRequest whereName($value)
 */
	class StateRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubRequiremnts
 *
 * @property int $idSubRequire
 * @property int $idServ
 * @property int $idGender
 * @property int $isfamely
 * @property int $idMartial
 * @property int $moreThanAge
 * @property int $LessThanAge
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property mixed $1
 * @property-read \App\Models\Gender $Gender
 * @property-read \App\Models\MartialStatus $MartialStatus
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RelativeRelationAndSubRequerment> $RelativeRelationAndSubRequerment
 * @property-read int|null $relative_relation_and_sub_requerment_count
 * @property-read \App\Models\Services $Services
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubRequiremntsDetails> $SubRequiremntsDetails
 * @property-read int|null $sub_requiremnts_details_count
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts whereIdGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts whereIdMartial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts whereIdServ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts whereIdSubRequire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts whereIsfamely($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts whereLessThanAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts whereMoreThanAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremnts whereTimeUpdate($value)
 */
	class SubRequiremnts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubRequiremntsDetails
 *
 * @property int $idSubReqDetail
 * @property int $idSubRequire
 * @property int $idTypeFild
 * @property string $textRerequiremnts
 * @property int $isActive
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\SubRequiremnts $SubRequiremnts
 * @property-read \App\Models\TypeOfFild $TypeOfFild
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\chooseSubRequerment> $chooseSubRequerment
 * @property-read int|null $choose_sub_requerment_count
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremntsDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremntsDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremntsDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremntsDetails whereIdSubReqDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremntsDetails whereIdSubRequire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremntsDetails whereIdTypeFild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremntsDetails whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremntsDetails whereTextRerequiremnts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremntsDetails whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubRequiremntsDetails whereTimeUpdate($value)
 */
	class SubRequiremntsDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TripAndBookings
 *
 * @property int $idTrips
 * @property int $idBooking
 * @property string $dateGo
 * @property string|null $dataBack
 * @property mixed $0
 * @property mixed $1
 * @property-read \App\Models\Trips $Trips
 * @property-read \App\Models\TripsBookings $TripsBookings
 * @method static \Illuminate\Database\Eloquent\Builder|TripAndBookings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripAndBookings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripAndBookings query()
 * @method static \Illuminate\Database\Eloquent\Builder|TripAndBookings whereDataBack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripAndBookings whereDateGo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripAndBookings whereIdBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripAndBookings whereIdTrips($value)
 */
	class TripAndBookings extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TripBookingDetails
 *
 * @property int $idDetailsTripBooking
 * @property int $idBooking
 * @property int $identityCustmerId
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\IdentityCustomers $IdentityCustomers
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RequiremntsCustomerToBooking> $RequiremntsCustomerToBooking
 * @property-read int|null $requiremnts_customer_to_booking_count
 * @method static \Illuminate\Database\Eloquent\Builder|TripBookingDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripBookingDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripBookingDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|TripBookingDetails whereIdBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripBookingDetails whereIdDetailsTripBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripBookingDetails whereIdentityCustmerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripBookingDetails whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripBookingDetails whereTimeUpdate($value)
 */
	class TripBookingDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Trips
 *
 * @property int $idTrips
 * @property int $idCompany
 * @property int $idServ
 * @property int $fromCity
 * @property int $toCity
 * @property int $idCurrencies
 * @property string $timeLeave
 * @property float $price
 * @property int|null $availableSeats
 * @property int $isActive
 * @property mixed $0
 * @property mixed $1
 * @property mixed $2
 * @property-read \App\Models\Companies $Companies
 * @property-read \App\Models\Currencies|null $Currencies
 * @property-read \App\Models\Cities $FromCity
 * @property-read \App\Models\SchedulerTrip|null $SchedulerTrip
 * @property-read \App\Models\Services $Services
 * @property-read \App\Models\Cities $ToCity
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TripAndBookings> $TripAndBookings
 * @property-read int|null $trip_and_bookings_count
 * @method static \Illuminate\Database\Eloquent\Builder|Trips newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trips newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trips query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trips whereAvailableSeats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trips whereFromCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trips whereIdCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trips whereIdCurrencies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trips whereIdServ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trips whereIdTrips($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trips whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trips wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trips whereTimeLeave($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trips whereToCity($value)
 */
	class Trips extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TripsBookingCustomer
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookingCustomer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookingCustomer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookingCustomer query()
 */
	class TripsBookingCustomer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TripsBookings
 *
 * @property int $idBooking
 * @property int $idCustomerRequsts
 * @property int $idPlan
 * @property string $BookingTime
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property-read \App\Models\PlanTrips $PlanTrips
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TripAndBookings> $TripAndBookings
 * @property-read int|null $trip_and_bookings_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TripBookingDetails> $TripBookingDetails
 * @property-read int|null $trip_booking_details_count
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookings query()
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookings whereBookingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookings whereIdBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookings whereIdCustomerRequsts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookings whereIdPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookings whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripsBookings whereTimeUpdate($value)
 */
	class TripsBookings extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeOfFild
 *
 * @property int $idTypeFild
 * @property string $nameType
 * @property string $value
 * @property int $isActive
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MainRequiremnts> $MainRequemnt
 * @property-read int|null $main_requemnt_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubRequiremntsDetails> $SubRequiremntsDetails
 * @property-read int|null $sub_requiremnts_details_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfFild newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfFild newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfFild query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfFild whereIdTypeFild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfFild whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfFild whereNameType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfFild whereValue($value)
 */
	class TypeOfFild extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeOfFildDetialMainReq
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfFildDetialMainReq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfFildDetialMainReq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfFildDetialMainReq query()
 */
	class TypeOfFildDetialMainReq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\chooseMainRequerment
 *
 * @property int $idChooseMain
 * @property int $idMainRequire
 * @property string $containt
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property-read \App\Models\MainRequiremnts $MainRequiremnts
 * @method static \Illuminate\Database\Eloquent\Builder|chooseMainRequerment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|chooseMainRequerment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|chooseMainRequerment query()
 * @method static \Illuminate\Database\Eloquent\Builder|chooseMainRequerment whereContaint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|chooseMainRequerment whereIdChooseMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|chooseMainRequerment whereIdMainRequire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|chooseMainRequerment whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|chooseMainRequerment whereTimeUpdate($value)
 */
	class chooseMainRequerment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\chooseSubRequerment
 *
 * @property int $idChooseSub
 * @property int $idSubReqDetail
 * @property string $containt
 * @property string|null $timeUpdate
 * @property string|null $timeAdd
 * @property mixed $0
 * @property-read \App\Models\SubRequiremntsDetails $SubRequiremntsDetails
 * @method static \Illuminate\Database\Eloquent\Builder|chooseSubRequerment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|chooseSubRequerment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|chooseSubRequerment query()
 * @method static \Illuminate\Database\Eloquent\Builder|chooseSubRequerment whereContaint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|chooseSubRequerment whereIdChooseSub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|chooseSubRequerment whereIdSubReqDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|chooseSubRequerment whereTimeAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|chooseSubRequerment whereTimeUpdate($value)
 */
	class chooseSubRequerment extends \Eloquent {}
}

