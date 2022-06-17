@extends('layouts.layoutss')

@section('content')
<h6 style="text-decoration:underline;text-align:center">Feedback of Canada Inspire</h6>
<div class="col-md-10" style="margin-left:auto !important;margin-right:auto;margin-top:3%">
    <h6 style="">Your feedback is very important for us to improve and enhance our Application and Services. Kindly leave your valuable feedback here.</h6>

    <div class="uk-card ">

        <div class="uk-card-body sc-padding-medium">
            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">

                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" name="Comment" value="{{$feedback}}" disabled>
                            Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. 

A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. 

Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the “controlling idea,” because it controls what happens in the rest of the paragraph.
                        </textarea>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("textarea").each(function(index) {
            console.log(index,$(this)[0].scrollHeight)
            $(this).height($(this)[0].scrollHeight);
        });
        $('.page-active').removeClass('sc-page-active')
        $('.page-Feedback').addClass('sc-page-active')
    });
</script>

@endsection