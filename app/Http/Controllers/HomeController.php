<?php

namespace App\Http\Controllers;

use App\BiddutFooter;
use App\BiddutHomeSection;
use App\BiddutLogo;
use App\BiddutMenu;
use App\BiddutPagerParts;
use App\BiddutPersonInfo;
use App\BiddutSlider;
use App\BiddutSocialArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $data = $request->session()->all();

        $request->session()->put("key", 121211);
        $request->session()->save();

        $value = $request->session()->get('key');


        print_r($value);

        return view('welcome', ['name' => 'James']);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function home(Request $request){
//        $list = BiddutHomeSection::all();

        //get the logo
        $logoUrl = getLogoInfo();
        $menuItems = getMenuItems();
        $sliderItems = getSliderItems();
        $personInfoItems = getPersonInfoItems();
        $getClientInfoItems = getClientInfoItems();
        $getSocialAreaItems = getSocialAreaItems();
        $getFooterItems = getFooterItems();
        $getSectionsItems = getSectionsItems();
        $getServiceSection = getServiceSection();
        $getSpeciltySection = getSpeciltySection();
        $getLatestNewsSection = getLatestNewsSection();
        $getWorkWithUsSection = getWorkWithUsSection();
        $getLogoSection = getLogoSection();
        $getQuestionSection = getQuestionSection();
        $getContactSection = getContactSection();
        $getCalculateSection = getCalculateSection();
        $getCountSection = getCountSection();
        $getServiceDetailsSection = getServiceDetailsSection();
        $getTeamAndClientSection = getTeamAndClientSection();
        $getClientSection = getClientSection();
        $getAboutUsSection = getAboutUsSection();
        $getHomeSectionItems = getHomeSectionItems();
        $getSingleSection = getSingleSection();
        $getSpecilityItems = getSpecilityItems();
        $getLatestNewsItems = getLatestNewsItems();
        $getBrandLogoItems = getBrandLogoItems();
        $getContactsInfo = getContactsInfo();
        $getQuestionsItems = getQuestionsItems();
        $getCalculateItems = getCalculateItems();
        $getFeaturesItems = getFeaturesItems();
        $getCountItems = getCountItems();
        $getDivision = getDivision();
        $getCatagoryId = getProductCatagoryId();

        return view('home',[
            'logo'=>$logoUrl,
            'menuItems' => $menuItems,
            'sliderItems' => $sliderItems,
            'personInfoItems' => $personInfoItems,
            'getClientInfoItems' => $getClientInfoItems,
            'getSocialAreaItems' => $getSocialAreaItems,
            'getFooterItems' => $getFooterItems,
            'getSectionsItems' => $getSectionsItems,
            'getHomeSectionItems' => $getHomeSectionItems,
            'getServiceSection' => $getServiceSection,
            'getSpeciltySection' => $getSpeciltySection,
            'getTeamAndClientSection' => $getTeamAndClientSection,
            'getClientSection' => $getClientSection,
            'getLatestNewsSection' => $getLatestNewsSection,
            'getLogoSection' => $getLogoSection,
            'getQuestionSection' => $getQuestionSection,
            'getContactSection' => $getContactSection,
            'getCalculateSection' => $getCalculateSection,
            'getWorkWithUsSection' => $getWorkWithUsSection,
            'getCountSection' => $getCountSection,
            'getAboutUsSection' => $getAboutUsSection,
            'getServiceDetailsSection' => $getServiceDetailsSection,
            'getSingleSection' => $getSingleSection,
            'getSpecilityItems' => $getSpecilityItems,
            'getLatestNewsItems' => $getLatestNewsItems,
            'getBrandLogoItems' => $getBrandLogoItems,
            'getQuestionsItems' => $getQuestionsItems,
            'getContactsInfo' => $getContactsInfo,
            'getCalculateItems' => $getCalculateItems,
            'getFeaturesItems' => $getFeaturesItems,
            'getCountItems' => $getCountItems,
            'getDivision' => $getDivision,
            'getCatagoryId' => $getCatagoryId,
        ]);

    }

    public function homeLogo(Request $request)
    {
        $logo = BiddutLogo::all();
        return view('home',['logo'=>$logo]);
    }

    public function homeMenuData(Request $request)
    {
      $menuData = BiddutMenu::all();
        return view('home',['menuData'=>$menuData]);
    }

    public function homePagerParts(Request $request)
    {
        $pager = BiddutPagerParts::all();
        return view('home',['$pager'=>$pager]);
    }

    public function homePersonInfo()
    {
        $info = BiddutPersonInfo::all();
        return view('home',['info'=>$info]);
    }

    public function homeSliderData()
    {
        $slider = BiddutSlider::all();
        return view('home',['slider'=>$slider]);
    }

    public function homeSocialData(Request $request)
    {
        $social = BiddutSocialArea::all();
        return view('home',['social'=>$social]);
    }

    public function homeFooterData(Request $request)
    {
        $footer = BiddutFooter::all();
        return view('home', ['footer'=>$footer]);
    }

    public function contactPage(){
        $logoUrl = getLogoInfo();
        $getFooterItems = getFooterItems();
        $getSocialAreaItems = getSocialAreaItems();
        $menuItems = getMenuItems();


        $contactDetails = DB::table('biddut_menu')->where('bid_menu_link', '=', '/contact')
            ->get();
        return view('subPages.contact', [
            'logo'=>$logoUrl,
            'menuItems'=> $menuItems,
            'getSocialAreaItems'=>$getSocialAreaItems,
            'getFooterItems'=>$getFooterItems,
            'contactDetails'=>$contactDetails,
        ]);
    }

    public function aboutUsPage(){
        $logoUrl = getLogoInfo();
        $getHomeSectionItems = getHomeSectionItems();
        $getFooterItems = getFooterItems();
        $getSocialAreaItems = getSocialAreaItems();
        $menuItems = getMenuItems();
//        $personInfoItems = getPersonInfoItems();
//        $getSpecilityItems = getSpecilityItems();

        $aboutUsDetails = DB::table('biddut_menu')->where('bid_menu_link', '=', '/about-us')
            ->get();

        return view ('subPages.about-us',[
            'logo'=>$logoUrl,
            'getHomeSectionItems'=>$getHomeSectionItems,
            'getFooterItems'=>$getFooterItems,
            'getSocialAreaItems'=>$getSocialAreaItems,
            'menuItems'=> $menuItems,
            'aboutUsDetails'=> $aboutUsDetails,
//            'personInfoItems'=> $personInfoItems,
//            'getSpecilityItems'=> $getSpecilityItems,
        ]);
    }

    public function extraPageAdded($pageName){
        $logoUrl = getLogoInfo();
        $getFooterItems = getFooterItems();
        $getSocialAreaItems = getSocialAreaItems();
        $menuItems = getMenuItems();


        $pageContant = DB::table('biddut_menu')->where('bid_menu_link', '=', '/page/'.$pageName)
            ->get();

        return view('subPages.newPage', [
            'logo'=>$logoUrl,
            'menuItems'=> $menuItems,
            'getSocialAreaItems'=>$getSocialAreaItems,
            'getFooterItems'=>$getFooterItems,
            'menuInfo'=>$pageContant,
        ]);
    }

    public function servicesPage(){
        $logoUrl = getLogoInfo();
        $getFooterItems = getFooterItems();
        $getSocialAreaItems = getSocialAreaItems();
        $menuItems = getMenuItems();
        $getServiceDetails = getServiceDetails();
        $getSingleSection = getSingleSection();


        $serviceContant = DB::table('biddut_menu')->where('bid_menu_link', '=', '/services')
            ->get();
        return view('subPages.services', [
            'logo'=>$logoUrl,
            'menuItems'=> $menuItems,
            'getSocialAreaItems'=>$getSocialAreaItems,
            'getFooterItems'=>$getFooterItems,
            'serviceContant'=>$serviceContant,
            'getServiceDetails'=>$getServiceDetails,
            'getSingleSection'=>$getSingleSection,
        ]);
    }

    public function getFeaturesPages(){
        $logoUrl = getLogoInfo();
        $getFooterItems = getFooterItems();
        $getSocialAreaItems = getSocialAreaItems();
        $menuItems = getMenuItems();


        $riderPageUpper = BiddutHomeSection::where('home_sec_position',14)
            ->where('home_sec_status',1)->get();

        $riderPageInfo = BiddutPagerParts::where('bid_pager_section_id',14)
            ->where('bid_pager_status',1)
            ->orderBy('bid_pager_position','asc')
            ->get();

        return view ('subPages.featuresPage',[
            'logo'=>$logoUrl,
            'getFooterItems'=>$getFooterItems,
            'getSocialAreaItems'=>$getSocialAreaItems,
            'menuItems'=> $menuItems,
            'riderPageUpper'=> $riderPageUpper,
            'riderPageInfo'=> $riderPageInfo,
        ]);
    }

    public function getCareerPage(){
        $logoUrl = getLogoInfo();
        $getFooterItems = getFooterItems();
        $getSocialAreaItems = getSocialAreaItems();
        $menuItems = getMenuItems();
//        $getSpecilityItems = getSpecilityItems();

        $careerPageDetails = DB::table('biddut_menu')->where('bid_menu_link', '=', '/career')
            ->get();
        return view('subPages.career',[
            'logo'=>$logoUrl,
            'getFooterItems'=>$getFooterItems,
            'getSocialAreaItems'=>$getSocialAreaItems,
            'menuItems'=> $menuItems,
//            'getSpecilityItems' => $getSpecilityItems,
            'careerPageDetails' => $careerPageDetails

        ]);
    }

    public function getApplyPage(){
        $logoUrl = getLogoInfo();
        $getFooterItems = getFooterItems();
        $getSocialAreaItems = getSocialAreaItems();
        $menuItems = getMenuItems();
        return view('subPages.apply-page',[
            'logo'=>$logoUrl,
            'getFooterItems'=>$getFooterItems,
            'getSocialAreaItems'=>$getSocialAreaItems,
            'menuItems'=> $menuItems,
        ]);
    }

    public function getLatestNews($id){
        $logoUrl = getLogoInfo();
        $getFooterItems = getFooterItems();
        $getSocialAreaItems = getSocialAreaItems();
        $menuItems = getMenuItems();
        $getLatestNewsItems = getPagerPartsData($id);
        return view('subPages.latestNews',[
            'logo'=>$logoUrl,
            'getFooterItems'=>$getFooterItems,
            'getSocialAreaItems'=>$getSocialAreaItems,
            'menuItems'=> $menuItems,
            'getLatestNewsItems' => $getLatestNewsItems,
        ]);
    }

    public function services(){
        $logoUrl = getLogoInfo();
        $getHomeSectionItems = getHomeSectionItems();
        $getFooterItems = getFooterItems();
        $getSocialAreaItems = getSocialAreaItems();
        $menuItems = getMenuItems();

        return view ('subPages.services',[
            //user.registration
            'logo'=>$logoUrl,
            'getHomeSectionItems'=>$getHomeSectionItems,
            'getFooterItems'=>$getFooterItems,
            'getSocialAreaItems'=>$getSocialAreaItems,
            'menuItems'=> $menuItems,
        ]);
    }
   }
