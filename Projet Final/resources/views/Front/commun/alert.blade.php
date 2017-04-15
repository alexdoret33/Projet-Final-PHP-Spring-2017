
        @if(Session::has("success"))
            <div class="box-body">
                <div class=""alert alert-success alert-dismissable>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">LOL</button>
                    <h4>
                        <i class="icon fa fa-check"></i> Réussi</h4>
                    {{ Session::get("success") }}
                </div>
            </div>
        @endif

            @if(Session::has("danger"))
                <div class="box-body">
                    <div class=""alert alert-danger alert-dismissable>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">LOL</button>
                        <h4>
                            <i class="icon fa fa-warning"></i> Loupé</h4>
                        {{ Session::get("danger") }}
                    </div>
                </div>
            @endif

            @if(Session::has("info"))
                    <div class="box-body">
                        <div class=""alert alert-info alert-dismissable>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">LOL</button>
                            <h4>
                                <i class="icon fa fa-exclamation"></i>Information</h4>
                            {{ Session::get("info") }}
                        </div>
                    </div>
            @endif