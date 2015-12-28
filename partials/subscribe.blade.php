<form class="frm-subs clearfix" action="{{@$mailing->action}}" method="post" class="validate" target="_blank">
    <label for="subscribe-input" class="subscribe-title">Subscribe to our newsletter : </label>
    <div>
        <input type="text" id="subscribe-input" class="subscribe-input" placeholder="Your email address" {{ @$mailing->action==''? 'disabled=""' : ''}} />
        <button class="btn btn-primary button-sbsr" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}>Submit</button>
    </div>
</form>