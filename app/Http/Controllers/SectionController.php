<?php

namespace App\Http\Controllers;

use App\BiddutFooter;
use App\BiddutHomeSection;
use App\BiddutLogo;
use App\BiddutOrderRatings;
use App\BiddutPagerParts;
use App\BiddutPersonInfo;
use App\BiddutSlider;
use App\BiddutSocialArea;
use App\Sections;
use App\BiddutMenu;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use DB;

class SectionController extends Controller
{
    public function logoCreate(Request $request)
    {
        $imagename = $request->file('bid_log_url');
        $input['bid_log_url'] = time() . '.' . $imagename->getClientOriginalExtension();
        $destinationPath = public_path('/img');

        $extension = $imagename->getClientOriginalExtension();
        $new_name = time() . '.' . $extension;
        // move file to public/images/new and use $new_name
        $imagename->move($destinationPath, $new_name);

        $data = array(
            "bid_log_url" => $new_name,
            "bid_log_status" => 1
        );

        CreateLogo($data);
        return redirect('/admin/dashboard');
    }

    public function menuCreate(Request $request)
    {
        $imagename = $request->file('bid_menu_img');
        $input['bid_menu_img'] = time() . '.' . $imagename->getClientOriginalExtension();
        $destinationPath = public_path('/img');

        $extension = $imagename->getClientOriginalExtension();
        $new_name = time() . '.' . $extension;
        // move file to public/images/new and use $new_name
        $imagename->move($destinationPath, $new_name);

        $cre = array(
            "name" => $request->input('bid_menu_name'),
            "url" => urlFriendly($request->input('bid_menu_name')),
            "img" => $new_name,
            "desc" => $request->input('bid_menu_desc'),
            "status" => 1,
            "link" => $request->input('bid_menu_link'),
            "headline" => $request->input('bid_menu_headline'),
            "position" => $request->input('bid_menu_position')
        );

        CreateMenu($cre);

        return redirect('/menu_list');
    }

    public function sliderCreate(Request $request)
    {
        $imagename = $request->file('bid_slid_img_url');
        $input['bid_slid_img_url'] = time() . '.' . $imagename->getClientOriginalExtension();
        $destinationPath = public_path('/img');

        $extension = $imagename->getClientOriginalExtension();
        $new_name = time() . '.' . $extension;
        // move file to public/images/new and use $new_name
        $imagename->move($destinationPath, $new_name);

        $cre = array(
            "url" => $new_name,
            "status" => 1,
            "position" => $request->input('bid_slid_position'),
            "content" => $request->input('bid_slid_content'),
            "content2" => $request->input('bid_slid_content2')
        );

        $sliderInfo = CreateSlider($cre);

        return redirect('/slider_list');
    }

    public function pagePartsCreate(Request $request)
    {
        // For banner url
        $imageName = $request->file('bid_banner_url');
        $inpuT['bid_banner_url'] = time() . '.' . $imageName->getClientOriginalExtension();
        $destination_path = public_path('/img');

        $ext = $imageName->getClientOriginalExtension();
        $newName = time() . '.' . $ext;
        // move file to public/images/new and use $new_name
        $imageName->move($destination_path, $newName);

        if ($request->input('bid_pager_url') != '') {
            $url = $request->input('bid_pager_url');
        } else {
            $url = ' ';
        }

        if ($request->input('bid_pager_title') != '') {
            $title = $request->input('bid_pager_title');
        } else {
            $title = ' ';
        }

        if ($request->input('bid_pager_html') != '') {
            $html = $request->input('bid_pager_html');
        } else {
            $html = ' ';
        }

        if ($request->input('bid_pager_position') != '') {
            $pos = $request->input('bid_pager_position');
        } else {
            $pos = 1;
        }
        if ($request->input('bid_pager_desc') != '') {
            $desc = $request->input('bid_pager_desc');
        } else {
            $desc = ' ';
        }
        $cre = array(
            "page_url" => $url,
            "ban_url" => $newName,
            "status" => 1,
            "title" => $title,
            "desc" => $desc,
            "html" => $html,
            "section_id" => $request->input('bid_pager_section_id'),
            "position" => $pos
        );

        CratePageParts($cre);


        return redirect('/pager_parts');
    }

    /**
     * Service page's 6 services
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postServiceDetailsCreate(Request $request)
    {
        if ($request->input('bid_pager_url') != '') {
            $url = $request->input('bid_pager_url');
        } else {
            $url = ' ';
        }

        if ($request->input('bid_pager_title') != '') {
            $title = $request->input('bid_pager_title');
        } else {
            $title = ' ';
        }

        if ($request->input('bid_pager_html') != '') {
            $html = $request->input('bid_pager_html');
        } else {
            $html = ' ';
        }

        if ($request->input('bid_pager_position') != '') {
            $pos = $request->input('bid_pager_position');
        } else {
            $pos = 1;
        }
        if ($request->input('bid_pager_desc') != '') {
            $desc = $request->input('bid_pager_desc');
        } else {
            $desc = ' ';
        }
        $cre = array(
            "page_url" => $url,
            "status" => 1,
            "title" => $title,
            "desc" => $desc,
            "html" => $html,
            "section_id" => $request->input('bid_pager_section_id'),
            "position" => $pos
        );

        CrateServiceDetails($cre);


        return redirect('/pager_parts');
    }

    public function postRiderPageCreate(Request $request)
    {
        if ($request->input('bid_pager_url') != '') {
            $url = $request->input('bid_pager_url');
        } else {
            $url = ' ';
        }

        if ($request->input('bid_pager_title') != '') {
            $title = $request->input('bid_pager_title');
        } else {
            $title = ' ';
        }

        if ($request->input('bid_pager_html') != '') {
            $html = $request->input('bid_pager_html');
        } else {
            $html = ' ';
        }

        if ($request->input('bid_pager_position') != '') {
            $pos = $request->input('bid_pager_position');
        } else {
            $pos = 1;
        }
        if ($request->input('bid_pager_desc') != '') {
            $desc = $request->input('bid_pager_desc');
        } else {
            $desc = ' ';
        }
        $cre = array(
            "status" => 1,
            "title" => $title,
            "page_url" => $url,
            "desc" => $desc,
            "section_id" => $request->input('bid_pager_section_id'),
            "position" => $pos
        );

        crateRiderDetails($cre);


        return redirect('/pager_parts');
    }

    public function homeSectionCreate(Request $request)
    {
        $imagename = $request->file('home_sec_ban_url');
        $input['home_sec_ban_url'] = time() . '.' . $imagename->getClientOriginalExtension();
        $destinationPath = public_path('/img');

        $extension = $imagename->getClientOriginalExtension();
        $new_name = time() . '.' . $extension;
        // move file to public/images/new and use $new_name
        $imagename->move($destinationPath, $new_name);

        $cre = array(
            "title" => $request->input('home_sec_title'),
            "desc" => $request->input('home_sec_desc'),
            "position" => $request->input('home_sec_position'),
            "services" => $request->input('home_sec_services'),
            "status" => 1,
            "url" => $new_name,
            "ban_type" => $request->input('home_sec_ban_type')
        );

        CreateHomeSection($cre);

        return redirect('/home_section_list');
    }

    public function personCreate(Request $request)
    {
        $imagename = $request->file('person_img_url');
        $input['person_img_url'] = time() . '.' . $imagename->getClientOriginalExtension();
        $destinationPath = public_path('/img');

        $extension = $imagename->getClientOriginalExtension();
        $new_name = time() . '.' . $extension;
        // move file to public/images/new and use $new_name
        $imagename->move($destinationPath, $new_name);

        $cre = array(
            "name" => $request->input('person_name'),
            "desig" => $request->input('person_designation'),
            "desc" => $request->input('person_desc'),
            "url" => $new_name,
            "fb_link" => $request->input('person_fb_link'),
            "linkedin" => $request->input('person_linkedin_link'),
            "twit" => $request->input('person_twit_link'),
            "position" => $request->input('person_position'),
            "status" => 1,
            "type" => $request->input('person_type')
        );

        CreatePerson($cre);

        return redirect('/person_info_list');
    }

    public function footerCreate(Request $request)
    {
        $cre = array(
            "about" => $request->input('fot_about_us'),
            "ser_menu" => $request->input('fot_serv_menu'),
            "status" => 1,
            "bid_menu" => $request->input('fot_bid_menu'),
            "letter" => $request->input('fot_news_letter'),
            "copyright" => $request->input('fot_bid_copyright')
        );

        CreateFooter($cre);

        return redirect('/footer_list');
    }

    public function socialIconCreate(Request $request)
    {
        $cre = array(
            "fb" => $request->input('socl_fb'),
            "gp" => $request->input('socl_gp'),
            "yt" => $request->input('socl_yt'),
            "linkdin" => $request->input('socl_linkdin'),
            "twit" => $request->input('socl_twit'),
            "insta" => $request->input('socl_insta'),
            "status" => 1
        );

        CreateSocialArea($cre);

        return redirect('/social_area_list');
    }


    /**
     * Sections view page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sections(Request $request)
    {

        // Sections list
        $list = Sections::all();

        return view('admin.sections.homeControl', ['list' => $list]);
    }

    // !...........Sub Sections list...........!
    public function menuList(Request $request)
    {
        $menuList = BiddutMenu::all();
        return view('admin.sections.sub_sections.menuList', ['menuList' => $menuList]);
    }

    public function sliderList(Request $request)
    {
        $sliderList = BiddutSlider::all();
        return view('admin.sections.sub_sections.sliderList', ['sliderList' => $sliderList]);
    }

    public function homeSectionList(Request $request)
    {

        $homeSectionList = BiddutHomeSection::all();
        return view('admin.sections.sub_sections.homeSectionList', ['homeSectionList' => $homeSectionList]);
    }

    public function personInfoList(Request $request)
    {
        $personInfoList = BiddutPersonInfo::all();
        return view('admin.sections.sub_sections.personInfoList', ['personInfoList' => $personInfoList]);
    }
    // ........................Pages all parts view..............................
    public function pagesPartsList()
    {
        $services = BiddutPagerParts::all()->where('bid_pager_section_id',1);
        $specialties = BiddutPagerParts::all()->where('bid_pager_section_id',2);
        $latestNews = BiddutPagerParts::all()->where('bid_pager_section_id',3);
        $brandLogos = BiddutPagerParts::all()->where('bid_pager_section_id',4);
        $questions = BiddutPagerParts::all()->where('bid_pager_section_id',5);
        $contacts = BiddutPagerParts::all()->where('bid_pager_section_id',6);
        $calculate = BiddutPagerParts::all()->where('bid_pager_section_id',7);
        $workWithUs = BiddutPagerParts::all()->where('bid_pager_section_id',8);
        $counts = BiddutPagerParts::all()->where('bid_pager_section_id',9);
        $servicesDetails = BiddutPagerParts::all()->where('bid_pager_section_id',10);
        $riderDetails = BiddutPagerParts::all()->where('bid_pager_section_id',14);
        return view('admin.sections.sub_sections.pagerPartsList', [
            'services' => $services,
            'specialties' => $specialties,
            'latestNews' => $latestNews,
            'brandLogos' => $brandLogos,
            'questions' => $questions,
            'contacts' => $contacts,
            'calculate' => $calculate,
            'workWithUs' => $workWithUs,
            'counts' => $counts,
            'servicesDetails' => $servicesDetails,
            'riderDetails' => $riderDetails,
        ]);
    }
    // ........................End Pages all parts view.............................

    public function footerList(Request $request)
    {
        $footerList = BiddutFooter::all();
        return view('admin.sections.sub_sections.footerList', ['footerList' => $footerList]);
    }

    public function socialIconList(Request $request)
    {
        $socialIconList = BiddutSocialArea::all();
        return view('admin.sections.sub_sections.socialIconList', ['socialIconList' => $socialIconList]);
    }

    // !......... End sub sections...........!

    // !.......... Sections Crate Page......!
    public function getLogoCreate(Request $request)
    {
        return view('admin.sections.logoCreate');
    }

    public function getMenuCreate(Request $request)
    {
        return view('admin.sections.menuBar');
    }

    public function getSliderCreate(Request $request)
    {
        return view('admin.sections.slider');
    }

    public function getHomeSectionCreate(Request $request)
    {
        return view('admin.sections.homeSection');
    }

    public function getPersonInfoCreate(Request $request)
    {
        return view('admin.sections.personInfo');
    }

    public function getFooterCreate(Request $request)
    {
        return view('admin.sections.footerSection');
    }

    public function getSocialIconCreate(Request $request)
    {
        return view('admin.sections.social_icon');
    }

    public function getPagerPartCreate(Request $request)
    {
        $sections = BiddutHomeSection::pluck('home_sec_title', 'home_sec_position');
        return view('admin.sections.pagerParts', ['sections' => $sections]);
    }

    public function getServiceDetailsCreate(){
        $sections = BiddutHomeSection::pluck('home_sec_title', 'home_sec_position');
        return view('admin.sections.serviceDetailsCreate', ['sections' => $sections]);
    }

    public function getRiderPageCreate()
    {
        return view('admin.sections.riderDetailsCreate');
    }

    // Edit all sections
    public function menuEdit($menuId)
    {
        $items = getMenuData($menuId);

        return view('admin.sections.sectionsEdit.menuEdit')->with('items', $items);
    }

    public function sliderEdit($sliderId)
    {
        $items = getSliderData($sliderId);

        return view('admin.sections.sectionsEdit.sliderEdit')->with('items', $items);
    }

    public function homeSectionEdit($homeId)
    {
        $items = getHomeSectionData($homeId);

        return view('admin.sections.sectionsEdit.homeSectionEdit')->with('items', $items);
    }

    public function pagerPartsEdit($pagerId)
    {
        $items = getPagerPartsData($pagerId);

        return view('admin.sections.sectionsEdit.pagerPartsEdit')->with('items', $items);
    }

    public function personInfoEdit($personId)
    {
        $items = getPersonData($personId);

        return view('admin.sections.sectionsEdit.personInfoEdit')->with('items', $items);
    }

    public function socialIconEdit($socialId)
    {
        $items = getsocialIconData($socialId);

        return view('admin.sections.sectionsEdit.social_iconEdit')->with('items', $items);
    }

    public function footerEdit($footerId)
    {
        $items = getFooterData($footerId);

        return view('admin.sections.sectionsEdit.footerEdit')->with('items', $items);
    }


    // Update .............Sections
    public function updateHomeSection(Request $request)
    {
        $menuId = $request->input('home_sec_id');
        $Image = $request->hasFile('home_sec_ban_url');
        $checkbox = $request->input('home_sec_status');

        $new_name = "";
        if ($Image){
            $imagename = $request->file('home_sec_ban_url');
            $input['home_sec_ban_url'] = time() . '.' . $imagename->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $extension = $imagename->getClientOriginalExtension();
            $new_name = time() . '.' . $extension;
            // move file to public/images/new and use $new_name
            $imagename->move($destinationPath, $new_name);
        }
        if (($checkbox) == 1) {

            $checkbox = $request->input('home_sec_status');
        } else {
            $checkbox = 0;
        }

        $cre = array(
            "title" => $request->input('home_sec_title'),
            "desc" => $request->input('home_sec_desc'),
            "position" => $request->input('home_sec_position'),
            "services" => $request->input('home_sec_services'),
            "url" => $new_name,
            "status" => $checkbox,
            "ban_type" => $request->input('home_sec_ban_type')
        );

        updateHomeSectionData($menuId, $Image, $cre);

        return redirect('/home_section_list');
    }

    public function updateMenu(Request $request)
    {
        $menuId = $request->input('bid_menu_id');
        $Image = $request->hasFile('bid_menu_img');

        $checkbox = $request->input('bid_menu_status');
        if (($checkbox) == 1) {

            $checkbox = $request->input('bid_menu_status');
        } else {
            $checkbox = 0;
        }
        $new_name = "";
        if ($Image){
            $imagename = $request->file('bid_menu_img');
            $input['bid_menu_img'] = time() . '.' . $imagename->getClientOriginalExtension();
            $destinationPath = public_path('/img');

            $extension = $imagename->getClientOriginalExtension();
            $new_name = time() . '.' . $extension;
            // move file to public/images/new and use $new_name
            $imagename->move($destinationPath, $new_name);
        }
        $cre = array(
            "menu" => $request->input('bid_menu_name'),
            "url" => urlFriendly($request->input('bid_menu_name')),
            "status" => $checkbox,
            "link" => $request->input('bid_menu_link'),
            "headline" => $request->input('bid_menu_headline'),
            "img" => $new_name,
            "desc" => $request->input('bid_menu_desc'),
            "services" => $request->input('home_sec_services'),
            "pos" => $request->input('bid_menu_position')
        );

        updateMenuData($menuId, $Image, $cre);

        return redirect('/menu_list');
    }

    public function updatePagerParts(Request $request)
    {
        $pagerId = $request->input('bid_pager_id');
        $Image = $request->hasFile('bid_banner_url');
        $checkbox = $request->input('bid_pager_status');
        if (($checkbox) == 1) {

            $checkbox = $request->input('bid_pager_status');
        } else {
            $checkbox = 0;
        }
        if ($request->input('bid_pager_url') != '') {
            $url = $request->input('bid_pager_url');
        } else {
            $url = ' ';
        }
        if ($request->input('bid_pager_title') != '') {
            $title = $request->input('bid_pager_title');
        } else {
            $title = ' ';
        }
        if ($request->input('bid_pager_html') != '') {
            $html = $request->input('bid_pager_html');
        } else {
            $html = ' ';
        }
        if ($request->input('bid_pager_desc') != '') {
            $desc = $request->input('bid_pager_desc');
        } else {
            $desc = ' ';
        }
        $new_name = "";
        if ($Image){
            $imagename = $request->file('bid_banner_url');
            $input['bid_banner_url'] = time() . '.' . $imagename->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $extension = $imagename->getClientOriginalExtension();
            $new_name = time() . '.' . $extension;
            // move file to public/images/new and use $new_name
            $imagename->move($destinationPath, $new_name);
        }
        $cre = array(
            "ban_url" => $new_name,
            "status" => $checkbox,
            "title" => $title,
            "pg_url" => $url,
            "desc" => $desc,
            "html" => $html,
            "sec_id" => $request->input('bid_pager_section_id'),
            "pos" => $request->input('bid_pager_position')
        );

        updatePagerParts($pagerId, $Image, $cre);

        return redirect('/pager_parts');
    }

    public function updatePersonInfo(Request $request)
    {
        $personId = $request->input('person_id');
        $Image = $request->hasFile('person_img_url');

        $checkbox = $request->input('person_status');
        if (($checkbox) == 1) {

            $checkbox = $request->input('person_status');
        } else {
            $checkbox = 0;
        }
        $new_name = "";
        if ($Image){
            $imagename = $request->file('person_img_url');
            $input['person_img_url'] = time() . '.' . $imagename->getClientOriginalExtension();
            $destinationPath = public_path('/img');

            $extension = $imagename->getClientOriginalExtension();
            $new_name = time() . '.' . $extension;
            // move file to public/images/new and use $new_name
            $imagename->move($destinationPath, $new_name);
        }
        $cre = array(
            "name" => $request->input('person_name'),
            "desig" => $request->input('person_designation'),
            "desc" => $request->input('person_desc'),
            "url" => $new_name,
            "status" => $checkbox,
            "fb_link" => $request->input('person_fb_link'),
            "linkedin" => $request->input('person_linkedin_link'),
            "twit" => $request->input('person_twit_link'),
            "position" => $request->input('person_position'),
            "type" => $request->input('person_type')
        );

        updatePersonData($personId, $Image, $cre);
        return redirect('/person_info_list');
    }

    public function updateSliderInfo(Request $request)
    {
        $sliderId = $request->input('bid_slid_id');
        $Image = $request->hasFile('bid_slid_img_url');

        $checkbox = $request->input('bid_slid_status');
        if (($checkbox) == 1) {

            $checkbox = $request->input('bid_slid_status');
        } else {
            $checkbox = 0;
        }
        $new_name = "";
        if ($Image){
            $imagename = $request->file('bid_slid_img_url');
            $input['bid_slid_img_url'] = time() . '.' . $imagename->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $extension = $imagename->getClientOriginalExtension();
            $new_name = time() . '.' . $extension;
            // move file to public/images/new and use $new_name
            $imagename->move($destinationPath, $new_name);
        }
        $cre = array(
            "url" => $new_name,
            "status" => $checkbox,
            "position" => $request->input('bid_slid_position'),
            "content" => $request->input('bid_slid_content'),
            "content2" => $request->input('bid_slid_content2')
        );

        updateSlider($sliderId, $Image, $cre);

        return redirect('/slider_list');
    }

    public function updateSocialIcon(Request $request)
    {
        $soclId = $request->input('socl_id');

        $checkbox = $request->input('socl_status');
        if (($checkbox) == 1) {

            $checkbox = $request->input('socl_status');
        } else {
            $checkbox = 0;
        }
        $cre = array(
            "fb" => $request->input('socl_fb'),
            "gp" => $request->input('socl_gp'),
            "yt" => $request->input('socl_yt'),
            "status" => $checkbox,
            "linkdin" => $request->input('socl_linkdin'),
            "twit" => $request->input('socl_twit'),
            "insta" => $request->input('socl_insta'),
        );
        updateSocialIcon($soclId, $cre);

        return redirect('/social_area_list');
    }

    public function updateFooter(Request $request)
    {
        $fotId = $request->input('fot_id');

        $checkbox = $request->input('fot_status');
        if (($checkbox) == 1) {

            $checkbox = $request->input('fot_status');
        } else {
            $checkbox = 0;
        }
        $cre = array(
            "about" => $request->input('fot_about_us'),
            "serv" => $request->input('fot_serv_menu'),
            "status" => $checkbox,
            "menu" => $request->input('fot_bid_menu'),
            "news" => $request->input('fot_news_letter'),
            "copyright" => $request->input('fot_bid_copyright')
        );

        updateFooterData($fotId, $cre);

        return redirect('/footer_list');

    }

    //Destroy Sections list

    public function menu_delete($id)
    {

       DB::table('biddut_menu')->where('bid_menu_id', '=',$id)->delete();
        return back()->with('Success','Menu DELETED Successfully');

    }

    public function footer_menu_delete($id)
    {

       DB::table('biddut_footer')->where('fot_id', '=',$id)->delete();
        return back()->with('Success','Footer Menu DELETED Successfully');

    }

    public function pager_menu_delete($id)
    {

       DB::table('biddut_pager_parts')->where('bid_pager_id', '=',$id)->delete();
        return back()->with('Success','Page DELETED Successfully');

    }

    public function person_menu_delete($id)
    {

       DB::table('biddut_person_info')->where('person_id', '=',$id)->delete();
        return back()->with('Success','Person Informatin DELETED Successfully');

    }

    public function slider_delete($id)
    {

       DB::table('biddut_slider')->where('bid_slid_id', '=',$id)->delete();
        return back()->with('Success','Slider DELETED Successfully');

    }

    public function social_icon_delete($id)
    {

       DB::table('biddut_social_area')->where('socl_id', '=',$id)->delete();
        return back()->with('Success','Social Icon DELETED Successfully');

    }

    public function getReviewList()
    {
        $reviewList = BiddutOrderRatings::all();
        return view('admin.sections.sub_sections.reviewList', ['reviewList' => $reviewList]);
    }

    public function reviewDelete($id)
    {

        DB::table('order_ratings')->where('id', '=',$id)->delete();

        return redirect()->back();

    }

}
