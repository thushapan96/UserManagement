                       <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                       <div class="sc-list-body">
                           <p class="uk-margin-remove uk-text-wrap">Enquiry-Graduation:{{$row->currentGraduation}}/{{$row->limitedEnquiryGraduation == '' ? 0  :$row->limitedEnquiryPost_Graduation}}</p>
                           <p class="uk-margin-remove uk-text-wrap">Enquiry-Post Graduation:{{$row->currentPost_Graduation}}/{{$row->limitedEnquiryPost_Graduation == '' ? 0  :$row->limitedEnquiryPost_Graduation}}</p>
                           <p class="uk-margin-remove uk-text-wrap">Enquiry-Doctorate:{{$row->currentDoctorate}}/{{$row->limitedEnquiryDoctorate == '' ? 0  :$row->limitedEnquiryDoctorate}}</p>
                       </div>