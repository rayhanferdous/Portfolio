@extends('admin.layouts.admin')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Settings</h4>
                <p class="card-description"> Website Setting Informations </p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="{{ route('admin.setting.update') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="form-group">
                            <label for="logoHeader">Top Logo</label>
                            <input type="file" class="form-control" id="logoHeader" name="logo_header"
                                placeholder="Logo Header" value="{{ $setting->logo_header ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="logoFooter">Logo Footer</label>
                            <input type="file" class="form-control" id="logoFooter" name="logo_footer"
                                placeholder="Logo Footer" value="{{ $setting->logo_footer ?? '' }}" required>
                        </div>

                        <div class="form-group">
                            <label for="footerLogoText">Footer logo text</label>
                            <textarea class="form-control" id="footerLogoText" rows="4" maxlength="255" name="footer_logo_text">{{ $setting->footer_logo_text ?? '' }}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fbUrl">FB Url</label>
                            <input class="form-control" id="fbUrl" rows="4" maxlength="255" name="fb_url"
                                value={{ $setting->fb_url ?? '' }}>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="skypeUrl">Skype Url</label>
                            <input class="form-control" id="skypeUrl" rows="4" maxlength="255" name="skype_url"
                                value={{ $setting->skype_url ?? '' }}>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Linkedin URL</label>
                            <input type="text" class="form-control" name="linkedin_url"
                                value="{{ $setting->linkedin_url ?? '' }}" />

                        </div>

                        <div class="form-group col-md-6">
                            <label>Telegram URL</label>

                            <input type="text" class="form-control" name="telegram_url"
                                value="{{ $setting->telegram_url ?? '' }}" />

                        </div>
                        <div class="form-group col-md-6">
                            <label>WhatsApp URL</label>

                            <input type="text" class="form-control" name="whatsapp_url"
                                value="{{ $setting->whatsapp_url ?? '' }}" />

                        </div>


                        <div class="form-group col-md-6">
                            <label>Contact mail</label>

                            <input type="text" class="form-control" name="contact_mail"
                                value="{{ $setting->contact_mail ?? '' }}" />

                        </div>

                        <div class="form-group col-md-12">
                            <label for="menuLink">Menu Links</label>
                            <div id="menuLinksContainer">
                                <!-- Dynamically added fields will go here -->
                                @if (isset($setting->menu_link) && is_array($setting->menu_link) && count($setting->menu_link) > 0)
                                    @foreach ($setting->menu_link as $menuItem)
                                        @if ($menuItem !== null)
                                            <!-- Only show menu items that are not null -->
                                            <div class="menu-link-item">
                                                <input type="text" class="form-control" name="menu_link[name][]"
                                                    value="{{ $menuItem['name'] ?? '' }}" placeholder="Menu Item Name" />
                                                <input type="text" class="form-control" name="menu_link[link][]"
                                                    value="{{ $menuItem['link'] ?? '' }}" placeholder="Menu Item Link" />
                                                <button type="button"
                                                    class="remove-menu-item btn btn-danger">Remove</button>
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    <!-- If no menu links exist, show one empty set of fields -->
                                    <div class="menu-link-item">
                                        <input type="text" class="form-control" name="menu_link[name][]"
                                            placeholder="Menu Item Name" />
                                        <input type="text" class="form-control" name="menu_link[link][]"
                                            placeholder="Menu Item Link" />
                                        <button type="button" class="remove-menu-item btn btn-danger">Remove</button>
                                    </div>
                                @endif
                            </div>
                            <button type="button" id="addMenuLink" class="btn btn-primary mt-3">Add Menu Link</button>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                // Add a new menu link input group
                $('#addMenuLink').click(function() {
                    const newMenuLinkItem = `
                        <div class="menu-link-item">
                            <input type="text" class="form-control" name="menu_link[name][]" placeholder="Menu Item Name" />
                            <input type="text" class="form-control" name="menu_link[link][]" placeholder="Menu Item Link" />
                            <button type="button" class="remove-menu-item btn btn-danger">Remove</button>
                        </div>
                    `;
                    $('#menuLinksContainer').append(newMenuLinkItem);
                });

                // Remove a menu link input group
                $(document).on('click', '.remove-menu-item', function() {
                    $(this).closest('.menu-link-item').remove();
                });
            });
        </script>
    @endpush
@endsection
