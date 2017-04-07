<?php

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\BiddutLogo;
use App\BiddutOrderRatings;

if (!function_exists('CreateLogo')) {

    function CreateLogo($data)
    {
        BiddutLogo::truncate();
        //now create a new one
        BiddutLogo::create($data);
        return true;
    }
}

if (!function_exists('CreateMenu')) {

    function CreateMenu($menuDetails)
    {

        $menuInfo['bid_p_id'] = 2;
        $menuInfo['bid_menu_name'] = $menuDetails['name'];
        $menuInfo['bid_menu_url'] = $menuDetails['url'];
        $menuInfo['bid_menu_link'] = $menuDetails['link'];
        $menuInfo['bid_menu_headline'] = $menuDetails['headline'];
        $menuInfo['bid_menu_img'] = $menuDetails['img'];
        $menuInfo['bid_menu_desc'] = $menuDetails['desc'];
        $menuInfo['bid_menu_status'] = $menuDetails['status'];
        $menuInfo['bid_menu_position'] = $menuDetails['position'];
        $menuInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('biddut_menu')->insert(
            $menuInfo
        );

        return true;
    }
}

if (!function_exists('CreateSlider')) {
    function CreateSlider($sliderDetails)
    {
        $sliderInfo['bid_slid_img_url'] = $sliderDetails['url'];
        $sliderInfo['bid_slid_status'] = $sliderDetails['status'];
        $sliderInfo['bid_slid_position'] = $sliderDetails['position'];
        $sliderInfo['bid_slid_content'] = $sliderDetails['content'];
        $sliderInfo['bid_slid_content2'] = $sliderDetails['content2'];
        $sliderInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('biddut_slider')->insert(
            $sliderInfo
        );

        return true;
    }
}

if (!function_exists('CratePageParts')) {
    function CratePageParts($pageDetails)
    {
        $pagesInfo['bid_pager_url'] = $pageDetails['page_url'];
        $pagesInfo['bid_banner_url'] = $pageDetails['ban_url'];
        $pagesInfo['bid_pager_title'] = $pageDetails['title'];
        $pagesInfo['bid_pager_desc'] = $pageDetails['desc'];
        $pagesInfo['bid_pager_html'] = $pageDetails['html'];
        $pagesInfo['bid_pager_position'] = $pageDetails['position'];
        $pagesInfo['bid_pager_status'] = $pageDetails['status'];
        $pagesInfo['bid_pager_section_id'] = $pageDetails['section_id'];
        $pagesInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('biddut_pager_parts')->insert(
            $pagesInfo
        );

        return $pagesInfo;
    }
}

if (!function_exists('CrateServiceDetails')) {
    function CrateServiceDetails($serviceDetails)
    {
        $serviceInfo['bid_pager_url'] = $serviceDetails['page_url'];
        $serviceInfo['bid_pager_title'] = $serviceDetails['title'];
        $serviceInfo['bid_pager_desc'] = $serviceDetails['desc'];
        $serviceInfo['bid_pager_html'] = $serviceDetails['html'];
        $serviceInfo['bid_pager_position'] = $serviceDetails['position'];
        $serviceInfo['bid_pager_status'] = $serviceDetails['status'];
        $serviceInfo['bid_pager_section_id'] = $serviceDetails['section_id'];
        $serviceInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('biddut_pager_parts')->insert(
            $serviceInfo
        );

        return $serviceInfo;
    }
}

if (!function_exists('crateRiderDetails')) {
    function crateRiderDetails($riderDetails)
    {
        $riderInfo['bid_pager_url'] = $riderDetails['page_url'];
        $riderInfo['bid_pager_title'] = $riderDetails['title'];
        $riderInfo['bid_pager_desc'] = $riderDetails['desc'];
        $riderInfo['bid_pager_position'] = $riderDetails['position'];
        $riderInfo['bid_pager_status'] = $riderDetails['status'];
        $riderInfo['bid_pager_section_id'] = $riderDetails['section_id'];
        $riderInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('biddut_pager_parts')->insert(
            $riderInfo
        );

        return $riderInfo;
    }
}

if (!function_exists('CreateHomeSection')) {
    function CreateHomeSection($homeInfo)
    {
        $homeSecInfo['home_sec_title'] = $homeInfo['title'];
        $homeSecInfo['home_sec_desc'] = $homeInfo['desc'];
        $homeSecInfo['home_sec_position'] = $homeInfo['position'];
        $homeSecInfo['home_sec_status'] = $homeInfo['status'];
        $homeSecInfo['home_sec_ban_url'] = $homeInfo['url'];
        $homeSecInfo['home_sec_ban_type'] = $homeInfo['ban_type'];
        $homeSecInfo['home_sec_services'] = $homeInfo['services'];
        $homeSecInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('biddut_home_section')->insert(
            $homeSecInfo
        );

        return true;
    }
}

if (!function_exists('CreatePerson')) {
    function CreatePerson($info)
    {
        $personInfo['person_name'] = $info['name'];
        $personInfo['person_designation'] = $info['desig'];
        $personInfo['person_desc'] = $info['desc'];
        $personInfo['person_img_url'] = $info['url'];
        $personInfo['person_fb_link'] = $info['fb_link'];
        $personInfo['person_linkedin_link'] = $info['linkedin'];
        $personInfo['person_twit_link'] = $info['twit'];
        $personInfo['person_position'] = $info['position'];
        $personInfo['person_status'] = $info['status'];
        $personInfo['person_type'] = $info['type'];
        $personInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('biddut_person_info')->insert(
            $personInfo
        );

        return true;
    }
}

if (!function_exists('CreateFooter')) {
    function CreateFooter($info)
    {
        DB::table('biddut_footer')->where('fot_status', 1)
            ->update([
                'fot_status' => 0
            ]);

        $footerInfo['fot_about_us'] = $info['about'];
        $footerInfo['fot_serv_menu'] = $info['ser_menu'];
        $footerInfo['fot_bid_menu'] = $info['bid_menu'];
        $footerInfo['fot_news_letter'] = $info['letter'];
        $footerInfo['fot_bid_copyright'] = $info['copyright'];
        $footerInfo['fot_status'] = $info['status'];
        $footerInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('biddut_footer')->insert(
            $footerInfo
        );

        return true;
    }
}

if (!function_exists('CreateSocialArea')) {
    function CreateSocialArea($info)
    {
        DB::table('biddut_social_area')->where('socl_status', 1)
            ->update([
                'socl_status' => 0
            ]);

        $socialInfo['socl_fb'] = $info['fb'];
        $socialInfo['socl_gp'] = $info['gp'];
        $socialInfo['socl_yt'] = $info['yt'];
        $socialInfo['socl_linkdin'] = $info['linkdin'];
        $socialInfo['socl_twit'] = $info['twit'];
        $socialInfo['socl_insta'] = $info['insta'];
        $socialInfo['socl_status'] = $info['status'];
        $socialInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('biddut_social_area')->insert(
            $socialInfo
        );

        return true;
    }


}

// Edit Section
if (!function_exists('getMenuData')) {
    function getMenuData($id)
    {
        $users = DB::table('biddut_menu')->where('bid_menu_id', '=', $id)->get();

        return $users;
    }


}

if (!function_exists('getSliderData')){
    function getSliderData($id)
    {
        $users = DB::table('biddut_slider')->where('bid_slid_id', '=', $id)->get();

        return $users;
    }


}

if (!function_exists('getHomeSectionData')){
    function getHomeSectionData($id)
    {
        $users = DB::table('biddut_home_section')->where('home_sec_id', '=', $id)->get();

        return $users;
    }
}

if (!function_exists('getPagerPartsData')){
    function getPagerPartsData($id)
    {
        $users = DB::table('biddut_pager_parts')->where('bid_pager_id', '=', $id)->get();

        return $users;
    }
}

if (!function_exists('getPersonData')){
    function getPersonData($id)
    {
        $users = DB::table('biddut_person_info')->where('person_id', '=', $id)->get();

        return $users;
    }
}

if (!function_exists('getsocialIconData')){
    function getsocialIconData($id)
    {
        $users = DB::table('biddut_social_area')->where('socl_id', '=', $id)->get();

        return $users;
    }
}

if (!function_exists('getFooterData')){
    function getFooterData($id)
    {
        $users = DB::table('biddut_footer')->where('fot_id', '=', $id)->get();

        return $users;
    }
}

// Update Sections

if (!function_exists('updateHomeSectionData')){
    function updateHomeSectionData($id, $isImage, $info)
    {
        $data = [
            'home_sec_title' => $info['title'],
            'home_sec_desc' => $info['desc'],
            'home_sec_position' => $info['position'],
            'home_sec_status' => $info['status'],
            'home_sec_services' => $info['services'],
            'home_sec_ban_type' => $info['ban_type']
        ];
        if ($isImage){
            $data['home_sec_ban_url'] = $info['url'];
        }

        $update = DB::table('biddut_home_section')->where('home_sec_id', $id)
            ->update($data);

        return $update;
    }
}

if (!function_exists('updateFooterData')){
    function updateFooterData($id, $info)
    {
        $update = DB::table('biddut_footer')->where('fot_id', $id)
            ->update([
                'fot_about_us' => $info['about'],
                'fot_bid_menu' => $info['menu'],
                'fot_status' => $info['status'],
                'fot_news_letter' => $info['news'],
                'fot_bid_copyright' => $info['copyright'],
                'fot_serv_menu' => $info['serv']
            ]);

        return $update;
    }
}

if (!function_exists('updateMenuData')){
    function updateMenuData($id, $isImage, $info)
    {
        $data = [
            'bid_menu_name' => $info['menu'],
            'bid_menu_url' => $info['url'],
            'bid_menu_desc' => $info['desc'],
            'bid_menu_status' => $info['status'],
            'bid_menu_link' => $info['link'],
            'bid_menu_headline' => $info['headline'],
            'bid_menu_position' => $info['pos']
        ];
        if ($isImage){
            $data['bid_menu_img'] = $info['img'];
        }
        $update = DB::table('biddut_menu')->where('bid_menu_id', $id)
            ->update($data);

        return $update;
    }
}

if (!function_exists('updatePagerParts')){
    function updatePagerParts($id, $isImage, $info)
    {
        $data = [
            'bid_pager_url' => $info['pg_url'],
            'bid_pager_title' => $info['title'],
            'bid_pager_desc' => $info['desc'],
            'bid_pager_html' => $info['html'],
            'bid_pager_status' => $info['status'],
            'bid_pager_position' => $info['pos'],
            'bid_pager_section_id' => $info['sec_id']
        ];
        if ($isImage){
            $data['bid_banner_url'] = $info['ban_url'];
        }
        $update = DB::table('biddut_pager_parts')->where('bid_pager_id', $id)
            ->update($data);

        return $update;
    }
}

if (!function_exists('updatePersonInfo')){
    function updatePersonData($id, $isImage, $info)
    {
        $data = [
            'person_name' => $info['name'],
            'person_designation' => $info['desig'],
            'person_desc' => $info['desc'],
            'person_status' => $info['status'],
            'person_fb_link' => $info['fb_link'],
            'person_linkedin_link' => $info['linkedin'],
            'person_twit_link' => $info['twit'],
            'person_position' => $info['position'],
            'person_type' => $info['type']
        ];
        if($isImage)
        {
            $data['person_img_url'] = $info['url'];
        }
        $update = DB::table('biddut_person_info')->where('person_id', $id)
            ->update($data);

        return $update;
    }
}

if (!function_exists('updateSlider')){
    function updateSlider($id, $isImage, $info)
    {
        $data = [
            'bid_slid_status' => $info['status'],
            'bid_slid_position' => $info['position'],
            'bid_slid_content' => $info['content'],
            'bid_slid_content2' => $info['content2']
        ];

        if ($isImage){
            $data['bid_slid_img_url'] = $info['url'];
        }
        $update = DB::table('biddut_slider')->where('bid_slid_id', $id)
            ->update($data);

        return $update;
    }
}


if (!function_exists('Sections')){
    function SectionsList($name)
    {
        $sectionName['section_name'] = $name['name'];
        $sectionName['section_status'] = $name['status'];
        $sectionName['created_at'] = new \DateTime(date('Y-m-d H:i:s'));
    }
}

if (!function_exists('updateSocialIcon')){
    function updateSocialIcon($id, $info)
    {
        $update = DB::table('biddut_social_area')->where('socl_id', $id)
            ->update([
                'socl_fb' => $info['fb'],
                'socl_gp' => $info['gp'],
                'socl_yt' => $info['yt'],
                'socl_status' => $info['status'],
                'socl_linkdin' => $info['linkdin'],
                'socl_twit' => $info['twit'],
                'socl_insta' => $info['insta']
            ]);

        return $update;
    }
}


if (!function_exists('getLogoInfo')){
    function getLogoInfo(){
        $result = DB::table('biddut_logo')->where('bid_log_status', '=', 1)->get();
        return $result[0]->bid_log_url;
    }

}


if (! function_exists ('urlFriendly'))
{
    function urlFriendly ($string)
    {
        // too many recursive functions
        return strtolower (trim (preg_replace ('~[^0-9a-z.]+~i', '-', html_entity_decode (preg_replace
        ('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities
        ($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
    }
}

if (!function_exists('getMenuItems')){
    function getMenuItems(){
        $result = DB::table('biddut_menu')->where('bid_menu_status', '=', 1)
            ->orderBy('bid_menu_position', 'asc')
            ->get();
        return $result;
    }

}

if (!function_exists('getSliderItems')){
    function getSliderItems(){
        $result = DB::table('biddut_slider')->where('bid_slid_status', '=', 1)
            ->orderBy('bid_slid_position', 'asc')
            ->get();
        return $result;
    }

}

if (!function_exists('getPersonInfoItems')){
    function getPersonInfoItems(){
        $result = DB::table('biddut_person_info')->where('person_status', '=', 1)
            ->where('person_type', '=', 1)->take(4)
            ->orderBy('person_position', 'desc')
            ->get();
        return $result;
    }
}

if (!function_exists('getClientInfoItems')){
    function getClientInfoItems(){
        $result = DB::table('biddut_person_info')->where('person_status', '=', 1)
            ->where('person_type', '=', 2)
            ->orderBy('person_position', 'asc')
            ->get();
        return $result;
    }
}

if (!function_exists('getSocialAreaItems')){
    function getSocialAreaItems(){
        $result = DB::table('biddut_social_area')->where('socl_status', '=', 1)->get();

        return $result;
    }
}

if (!function_exists('getFooterItems')){
    function getFooterItems(){
        $result = DB::table('biddut_footer')->where('fot_status', '=', 1)->get();

        return $result;
    }
}

if (!function_exists('getPagerPartsItems')){
    function getPagerPartsItems(){
        $result = DB::table('biddut_pager_parts')
            ->where('bid_pager_status', '=', 1)
            ->orderBy('bid_pager_position', 'desc')->take(3)
            ->get();

        return $result;
    }
}

if (!function_exists('getHomeSectionItems')){
    function getHomeSectionItems(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 1)
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

/**
 * HOME SECTIONS HIDE
 */
if (!function_exists('getServiceSection')){
    function getServiceSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 1)      // SERVICES
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getSpeciltySection')){
    function getSpeciltySection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 2)      // SPECIALTY
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}


if (!function_exists('getLatestNewsSection')){
    function getLatestNewsSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 3)      // LATEST NEWS
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getLogoSection')){
    function getLogoSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 4)      // BRAND LOGO
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getQuestionSection')){
    function getQuestionSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 5)      // QUESTIONS
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getContactSection')){
    function getContactSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 6)      // CONTACT
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getCalculateSection')){
    function getCalculateSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 7)      //CALCULATE
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getWorkWithUsSection')){
    function getWorkWithUsSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 8)      // WORK WITH US
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getCountSection')){
    function getCountSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 9)      // COUNT
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getServiceDetailsSection')){
    function getServiceDetailsSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 10)     // SERVICE DETAILS
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getTeamAndClientSection')){
    function getTeamAndClientSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 11)     // CREATIVE TEAMS
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getClientSection')){
    function getClientSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 12)     // CLIENTS
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getAboutUsSection')){
    function getAboutUsSection(){
        $result = DB::table('biddut_home_section')->where('home_sec_position', '=', 13)     // HOME ABOUT US
            ->where('home_sec_status', '=', 1)
            ->get();

        return $result;
    }
}
/*END HOME SECTION HIDE*/

if (!function_exists('getSectionsItems')){
    function getSectionsItems(){
        $query = DB::table('biddut_home_section')
                ->join('biddut_pager_parts', 'biddut_home_section.home_sec_id', '=', 'biddut_pager_parts.bid_pager_section_id')
                ->where('biddut_home_section.home_sec_status', '=', 1)
                ->where('biddut_pager_parts.bid_pager_status', '=', 1)
                ->orderBy('biddut_pager_parts.bid_pager_position', 'asc');

        return $query;
    }
}


if (!function_exists('getSingleSection')){
    function getSingleSection()
    {
        $result = DB::table('biddut_pager_parts')->where('bid_pager_section_id', '=', 1)    // SERVICES
        ->where('bid_pager_status', '=', 1)->take(3)
            ->orderBy('bid_pager_position', 'asc')
            ->get();
        return $result;
    }
}

if (!function_exists('getSpecilityItems')){
    function getSpecilityItems()
    {
        $result = DB::table('biddut_pager_parts')->where('bid_pager_section_id', '=', 2)    // SPECIALITY
        ->where('bid_pager_status', '=', 1)->take(4)
            ->orderBy('bid_pager_position', 'desc')
            ->get();
        return $result;
    }
}

if (!function_exists('getLatestNewsItems')){
    function getLatestNewsItems()
    {
        $result = DB::table('biddut_pager_parts')->where('bid_pager_section_id', '=', 3)    // LATEST NEWS
            ->where('bid_pager_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getBrandLogoItems')){
    function getBrandLogoItems()
    {
        $result = DB::table('biddut_pager_parts')->where('bid_pager_section_id', '=', 4)    //BRAND LOGO
        ->where('bid_pager_status', '=', 1)->take(6)
            ->orderBy('bid_pager_position', 'desc')
            ->get();
        return $result;
    }
}

if (!function_exists('getQuestionsItems')){
    function getQuestionsItems()
    {
        $result = DB::table('biddut_pager_parts')->where('bid_pager_section_id', '=', 5)    //QUESTIONS
        ->where('bid_pager_status', '=', 1)
            ->orderBy('bid_pager_position', 'asc')
            ->get();
        return $result;
    }
}

if (!function_exists('getContactsInfo')){
    function getContactsInfo()
    {
        $result = DB::table('biddut_pager_parts')->where('bid_pager_section_id', '=', 6)    //CONTACT
            ->where('bid_pager_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getCalculateItems')){
    function getCalculateItems()
    {
        $result = DB::table('biddut_pager_parts')->where('bid_pager_section_id', '=', 7)    //CALCULATE
            ->where('bid_pager_status', '=', 1)
            ->get();

        return $result;
    }
}

if (!function_exists('getFeaturesItems')){
    function getFeaturesItems()
    {
        $result = DB::table('biddut_pager_parts')->where('bid_pager_section_id', '=', 8)    //FEATURES
        ->where('bid_pager_status', '=', 1)->take(3)
            ->orderBy('bid_pager_position', 'desc')
            ->get();
        return $result;
    }
}
if (!function_exists('getCountItems')){
    function getCountItems()
    {
        $result = DB::table('biddut_pager_parts')->where('bid_pager_section_id', '=', 9)    //COUNT
        ->where('bid_pager_status', '=', 1)->take(3)
            ->orderBy('bid_pager_position', 'desc')
            ->get();
        return $result;
    }
}

if (!function_exists('getServiceDetails')){
    function getServiceDetails()
    {
        $result = DB::table('biddut_pager_parts')->where('bid_pager_section_id', '=', 10)    //SERVICE DETAILS
        ->where('bid_pager_status', '=', 1)->take(6)
            ->orderBy('bid_pager_position', 'desc')
            ->get();
        return $result;
    }
}

/**
 * Order Rating by Order Id
 */
if (!function_exists('getReview'))
{
    function getReview($trackId)
    {
        $reviewInfo = BiddutOrderRatings::where('order_tracking_number', $trackId)->get();
        return $reviewInfo;
    }
}

if (!function_exists('getAllReview'))
{
    function getAllReview()
    {
        $reviewInfo = BiddutOrderRatings::all();
        return $reviewInfo;
    }
}

// Get date for view page
function customDateFormat($date)
{
    $MyDate = Carbon::parse($date)->format('j/M');

    return $MyDate;
}
