<?php $activeTab = inputGet('tab');
if (empty($activeTab)):
    $activeTab = '1';
endif; ?>


            
<div class="row">
    <div class="col-md-12">
        <form action="http://localhost/modesy/Admin/generalSettingsPost" method="post">
            <input type="hidden" name="csrf_token" value="88757ab268fdb7b6009605a6e1c61347">            <input type="hidden" name="active_tab" id="input_active_tab" value="1">
            <input type="hidden" name="lang_id" value="1">
            <div class="form-group">
                <label>Settings Language</label>
                <select name="lang_id" class="form-control" onchange="window.location.href = 'http://localhost/modesy/admin/general-settings?lang='+this.value+'&amp;tab=1';" style="max-width: 600px;">
                                            <option value="1" selected="">English</option>
                                            <option value="2">Bengali</option>
                                    </select>
            </div>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                        <li class="<?= $activeTab == '1' ? ' active' : ''; ?>"><a href="#tab_1" data-toggle="tab" onclick="$('#input_active_tab').val('1');"><?= trans('general_settings'); ?></a></li>
                        <li class="<?= $activeTab == '2' ? ' active' : ''; ?>"><a href="#tab_2" data-toggle="tab" onclick="$('#input_active_tab').val('2');"><?= trans('contact_settings'); ?></a></li>
                        <li class="<?= $activeTab == '3' ? ' active' : ''; ?>"><a href="#tab_3" data-toggle="tab" onclick="$('#input_active_tab').val('3');"><?= trans('social_media_settings'); ?></a></li>
                        <li class="<?= $activeTab == '4' ? ' active' : ''; ?>"><a href="#tab_4" data-toggle="tab" onclick="$('#input_active_tab').val('4');"><?= trans('facebook_comments'); ?></a></li>
                        <li class="<?= $activeTab == '5' ? ' active' : ''; ?>"><a href="#tab_5" data-toggle="tab" onclick="$('#input_active_tab').val('5');"><?= trans('custom_header_codes'); ?></a></li>
                        <li class="<?= $activeTab == '6' ? ' active' : ''; ?>"><a href="#tab_6" data-toggle="tab" onclick="$('#input_active_tab').val('6');"><?= trans('custom_footer_codes'); ?></a></li>
                        <li class="<?= $activeTab == '7' ? ' active' : ''; ?>"><a href="#tab_7" data-toggle="tab" onclick="$('#input_active_tab').val('7');"><?= trans('cookies_warning'); ?></a></li>
                </ul>
                <div class="tab-content settings-tab-content">
                <div class="tab-pane<?= $activeTab == '1' ? ' active' : ''; ?>" id="tab_1">
                        <div class="form-group">
                            <label class="control-label"><?= trans('app_name'); ?></label>
                            <input type="text" class="form-control" name="application_name" placeholder="<?= trans('app_name'); ?>" value="<?= esc($baseSettings->application_name); ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label"><?= trans('site_title'); ?></label>
                            <input type="text" class="form-control" name="site_title" placeholder="<?= trans('app_name'); ?>" value="<?= esc($settings->site_title); ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label"><?= trans('app_name'); ?></label>
                            <input type="text" class="form-control" name="homepage_title" placeholder="<?= trans('app_name'); ?>" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label"><?= trans('site_description'); ?></label>
                            <input type="text" class="form-control" name="site_description" placeholder="<?= trans('site_description'); ?>" value="<?= esc($settings->site_description); ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label"><?= trans('keywords'); ?></label>
                            <input type="text" class="form-control" name="keywords" placeholder="<?= trans('keywords'); ?>" value="<?= esc($settings->keywords); ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label"><?= trans('copyright'); ?></label>
                            <input type="text" class="form-control" name="copyright" placeholder="<?= trans('copyright'); ?>" value="<?= esc($settings->copyright); ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label"><?= trans('footer_about_section'); ?></label>
                            <textarea class="form-control tinyMCEsmall" name="about_footer" placeholder="<?= trans('footer_about_section'); ?>" style="min-height: 140px;"><?= esc($settings->about_footer); ?></textarea>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="text" class="form-control" name="contact_address" placeholder="Address" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email Address</label>
                            <input type="text" class="form-control" name="contact_email" placeholder="Email Address" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input type="text" class="form-control" name="contact_phone" placeholder="Phone" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Contact Text</label>
                            <textarea class="form-control tinyMCEsmall" name="contact_text" placeholder="Contact Text" id="mce_19" style="display: none;" aria-hidden="true"></textarea><div role="application" class="tox tox-tinymce" style="visibility: hidden; height: 300px;" aria-disabled="false"><div class="tox-editor-container"><div data-alloy-vertical-dir="toptobottom" class="tox-editor-header"><div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary"><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Fullscreen" title="Fullscreen" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="m15.3 10-1.2-1.3 2.9-3h-2.3a.9.9 0 1 1 0-1.7H19c.5 0 .9.4.9.9v4.4a.9.9 0 1 1-1.8 0V7l-2.9 3Zm0 4 3 3v-2.3a.9.9 0 1 1 1.7 0V19c0 .5-.4.9-.9.9h-4.4a.9.9 0 1 1 0-1.8H17l-3-2.9 1.3-1.2ZM10 15.4l-2.9 3h2.3a.9.9 0 1 1 0 1.7H5a.9.9 0 0 1-.9-.9v-4.4a.9.9 0 1 1 1.8 0V17l2.9-3 1.2 1.3ZM8.7 10 5.7 7v2.3a.9.9 0 0 1-1.7 0V5c0-.5.4-.9.9-.9h4.4a.9.9 0 0 1 0 1.8H7l3 2.9-1.3 1.2Z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Source code" title="Source code" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><g fill-rule="nonzero"><path d="M9.8 15.7c.3.3.3.8 0 1-.3.4-.9.4-1.2 0l-4.4-4.1a.8.8 0 0 1 0-1.2l4.4-4.2c.3-.3.9-.3 1.2 0 .3.3.3.8 0 1.1L6 12l3.8 3.7ZM14.2 15.7c-.3.3-.3.8 0 1 .4.4.9.4 1.2 0l4.4-4.1c.3-.3.3-.9 0-1.2l-4.4-4.2a.8.8 0 0 0-1.2 0c-.3.3-.3.8 0 1.1L18 12l-3.8 3.7Z"></path></g></svg></span></button><button aria-label="Preview" title="Preview" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M3.5 12.5c.5.8 1.1 1.6 1.8 2.3 2 2 4.2 3.2 6.7 3.2s4.7-1.2 6.7-3.2a16.2 16.2 0 0 0 2.1-2.8 15.7 15.7 0 0 0-2.1-2.8c-2-2-4.2-3.2-6.7-3.2a9.3 9.3 0 0 0-6.7 3.2A16.2 16.2 0 0 0 3.2 12c0 .2.2.3.3.5Zm-2.4-1 .7-1.2L4 7.8C6.2 5.4 8.9 4 12 4c3 0 5.8 1.4 8.1 3.8a18.2 18.2 0 0 1 2.8 3.7v1l-.7 1.2-2.1 2.5c-2.3 2.4-5 3.8-8.1 3.8-3 0-5.8-1.4-8.1-3.8a18.2 18.2 0 0 1-2.8-3.7 1 1 0 0 1 0-1Zm12-3.3a2 2 0 1 0 2.7 2.6 4 4 0 1 1-2.6-2.6Z" fill-rule="nonzero"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Undo" title="Undo" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8Z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Redo" title="Redo" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3Z" fill-rule="nonzero"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Bold" title="Bold" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8Zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4Zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Italic" title="Italic" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="m16.7 4.7-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Underline" title="Underline" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 0 1-.4 1.8l-1 1.4a5.3 5.3 0 0 1-5.5 1 5 5 0 0 1-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 0 1-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 0 0 2.2.8 3.4 3.4 0 0 0 2.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1ZM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Strikethrough" title="Strikethrough" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><g fill-rule="evenodd"><path d="M15.6 8.5c-.5-.7-1-1.1-1.3-1.3-.6-.4-1.3-.6-2-.6-2.7 0-2.8 1.7-2.8 2.1 0 1.6 1.8 2 3.2 2.3 4.4.9 4.6 2.8 4.6 3.9 0 1.4-.7 4.1-5 4.1A6.2 6.2 0 0 1 7 16.4l1.5-1.1c.4.6 1.6 2 3.7 2 1.6 0 2.5-.4 3-1.2.4-.8.3-2-.8-2.6-.7-.4-1.6-.7-2.9-1-1-.2-3.9-.8-3.9-3.6C7.6 6 10.3 5 12.4 5c2.9 0 4.2 1.6 4.7 2.4l-1.5 1.1Z"></path><path d="M5 11h14a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" fill-rule="nonzero"></path></g></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Align left" title="Align left" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Align center" title="Align center" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Align right" title="Align right" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Justify" title="Justify" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><div aria-pressed="false" aria-label="Numbered list" title="Numbered list" role="button" aria-haspopup="true" tabindex="-1" unselectable="on" class="tox-split-button" style="user-select: none;" aria-disabled="false" aria-expanded="false" aria-describedby="aria_4235696382671721416243978"><span role="presentation" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 1 1 0-2ZM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 0 1-.5-.5V5h-.5a.5.5 0 0 1 0-1H6Zm-1 8.8.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 0 1-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 0 0-.2-.2H4.5a.5.5 0 0 1-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3ZM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 0 1 0-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 1 1 0-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 1 1 0-1H6c.6 0 1 .4 1 1Z" fill-rule="evenodd"></path></svg></span></span><span role="presentation" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" style="display: none;" id="aria_4235696382671721416243978">To open the popup, press Shift+Enter</span></div><div aria-pressed="false" aria-label="Bullet list" title="Bullet list" role="button" aria-haspopup="true" tabindex="-1" unselectable="on" class="tox-split-button" style="user-select: none;" aria-disabled="false" aria-expanded="false" aria-describedby="aria_7953495942691721416243984"><span role="presentation" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M11 5h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2ZM4.5 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Z" fill-rule="evenodd"></path></svg></span></span><span role="presentation" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" style="display: none;" id="aria_7953495942691721416243984">To open the popup, press Shift+Enter</span></div></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><div aria-pressed="false" aria-label="Text color" title="Text color" role="button" aria-haspopup="true" tabindex="-1" unselectable="on" class="tox-split-button" style="user-select: none;" aria-disabled="false" aria-expanded="false" aria-describedby="aria_4425272402711721416243985"><span role="presentation" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><g fill-rule="evenodd"><path id="tox-icon-text-color__color" d="M3 18h18v3H3z" fill="#000000"></path><path d="M8.7 16h-.8a.5.5 0 0 1-.5-.6l2.7-9c.1-.3.3-.4.5-.4h2.8c.2 0 .4.1.5.4l2.7 9a.5.5 0 0 1-.5.6h-.8a.5.5 0 0 1-.4-.4l-.7-2.2c0-.3-.3-.4-.5-.4h-3.4c-.2 0-.4.1-.5.4l-.7 2.2c0 .3-.2.4-.4.4Zm2.6-7.6-.6 2a.5.5 0 0 0 .5.6h1.6a.5.5 0 0 0 .5-.6l-.6-2c0-.3-.3-.4-.5-.4h-.4c-.2 0-.4.1-.5.4Z"></path></g></svg></span></span><span role="presentation" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" style="display: none;" id="aria_4425272402711721416243985">To open the popup, press Shift+Enter</span></div><div aria-pressed="false" aria-label="Background color" title="Background color" role="button" aria-haspopup="true" tabindex="-1" unselectable="on" class="tox-split-button" style="user-select: none;" aria-disabled="false" aria-expanded="false" aria-describedby="aria_4951520892731721416243985"><span role="presentation" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><g fill-rule="evenodd"><path id="tox-icon-highlight-bg-color__color" d="M3 18h18v3H3z" fill="#000000"></path><path fill-rule="nonzero" d="M7.7 16.7H3l3.3-3.3-.7-.8L10.2 8l4 4.1-4 4.2c-.2.2-.6.2-.8 0l-.6-.7-1.1 1.1zm5-7.5L11 7.4l3-2.9a2 2 0 0 1 2.6 0L18 6c.7.7.7 2 0 2.7l-2.9 2.9-1.8-1.8-.5-.6"></path></g></svg></span></span><span role="presentation" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" style="display: none;" id="aria_4951520892731721416243985">To open the popup, press Shift+Enter</span></div><button aria-label="Clear formatting" title="Clear formatting" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M13.2 6a1 1 0 0 1 0 .2l-2.6 10a1 1 0 0 1-1 .8h-.2a.8.8 0 0 1-.8-1l2.6-10H8a1 1 0 1 1 0-2h9a1 1 0 0 1 0 2h-3.8ZM5 18h7a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Zm13 1.5L16.5 18 15 19.5a.7.7 0 0 1-1-1l1.5-1.5-1.5-1.5a.7.7 0 0 1 1-1l1.5 1.5 1.5-1.5a.7.7 0 0 1 1 1L17.5 17l1.5 1.5a.7.7 0 0 1-1 1Z" fill-rule="evenodd"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Insert/edit image" title="Insert/edit image" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="m5 15.7 3.3-3.2c.3-.3.7-.3 1 0L12 15l4.1-4c.3-.4.8-.4 1 0l2 1.9V5H5v10.7ZM5 18V19h3l2.8-2.9-2-2L5 17.9Zm14-3-2.5-2.4-6.4 6.5H19v-4ZM4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1Zm6 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Insert/edit media" title="Insert/edit media" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1Zm1 2v14h14V5H5Zm4.8 2.6 5.6 4a.5.5 0 0 1 0 .8l-5.6 4A.5.5 0 0 1 9 16V8a.5.5 0 0 1 .8-.4Z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Insert/edit link" title="Insert/edit link" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M6.2 12.3a1 1 0 0 1 1.4 1.4l-2 2a2 2 0 1 0 2.6 2.8l4.8-4.8a1 1 0 0 0 0-1.4 1 1 0 1 1 1.4-1.3 2.9 2.9 0 0 1 0 4L9.6 20a3.9 3.9 0 0 1-5.5-5.5l2-2Zm11.6-.6a1 1 0 0 1-1.4-1.4l2-2a2 2 0 1 0-2.6-2.8L11 10.3a1 1 0 0 0 0 1.4A1 1 0 1 1 9.6 13a2.9 2.9 0 0 1 0-4L14.4 4a3.9 3.9 0 0 1 5.5 5.5l-2 2Z" fill-rule="nonzero"></path></svg></span></button></div></div></div><div class="tox-anchorbar"></div></div><div class="tox-sidebar-wrap"><div class="tox-edit-area"><iframe id="mce_19_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area" class="tox-edit-area__iframe"></iframe></div><div role="complementary" class="tox-sidebar"><div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;"><div class="tox-sidebar__pane-container"></div></div></div></div></div><div class="tox-statusbar"><div class="tox-statusbar__text-container"><div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false"></div><span class="tox-statusbar__branding"><a href="https://www.tiny.cloud/powered-by-tiny?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v6" rel="noopener" target="_blank" aria-label="Powered by Tiny" tabindex="-1"><svg width="50px" height="16px" viewBox="0 0 50 16" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.143 0c2.608.015 5.186 2.178 5.186 5.331 0 0 .077 3.812-.084 4.87-.361 2.41-2.164 4.074-4.65 4.496-1.453.284-2.523.49-3.212.623-.373.071-.634.122-.785.152-.184.038-.997.145-1.35.145-2.732 0-5.21-2.04-5.248-5.33 0 0 0-3.514.03-4.442.093-2.4 1.758-4.342 4.926-4.963 0 0 3.875-.752 4.036-.782.368-.07.775-.1 1.15-.1Zm1.826 2.8L5.83 3.989v2.393l-2.455.475v5.968l6.137-1.189V9.243l2.456-.476V2.8ZM5.83 6.382l3.682-.713v3.574l-3.682.713V6.382Zm27.173-1.64-.084-1.066h-2.226v9.132h2.456V7.743c-.008-1.151.998-2.064 2.149-2.072 1.15-.008 1.987.92 1.995 2.072v5.065h2.455V7.359c-.015-2.18-1.657-3.929-3.837-3.913a3.993 3.993 0 0 0-2.908 1.296Zm-6.3-4.266L29.16 0v2.387l-2.456.475V.476Zm0 3.2v9.132h2.456V3.676h-2.456Zm18.179 11.787L49.11 3.676H46.58l-1.612 4.527-.46 1.382-.384-1.382-1.611-4.527H39.98l3.3 9.132L42.15 16l2.732-.537ZM22.867 9.738c0 .752.568 1.075.921 1.075.353 0 .668-.047.998-.154l.537 1.765c-.23.154-.92.537-2.225.537-1.305 0-2.655-.997-2.686-2.686a136.877 136.877 0 0 1 0-4.374H18.8V3.676h1.612v-1.98l2.455-.476v2.456h2.302V5.9h-2.302v3.837Z"></path>
                            </svg></a></span></div><div title="Resize" data-alloy-tabstop="true" tabindex="-1" class="tox-statusbar__resize-handle"><svg width="10" height="10" focusable="false"><g fill-rule="nonzero"><path d="M8.1 1.1A.5.5 0 1 1 9 2l-7 7A.5.5 0 1 1 1 8l7-7ZM8.1 5.1A.5.5 0 1 1 9 6l-3 3A.5.5 0 1 1 5 8l3-3Z"></path></g></svg></div></div><div aria-hidden="true" class="tox-throbber" style="display: none;"></div></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_3">
                        <div class="form-group">
                            <label class="control-label">Facebook URL</label>
                            <input type="text" class="form-control" name="facebook_url" placeholder="Facebook URL" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">X URL</label>
                            <input type="text" class="form-control" name="twitter_url" placeholder="X URL" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Instagram URL</label>
                            <input type="text" class="form-control" name="instagram_url" placeholder="Instagram URL" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pinterest URL</label>
                            <input type="text" class="form-control" name="pinterest_url" placeholder="Pinterest URL" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Linkedin URL</label>
                            <input type="text" class="form-control" name="linkedin_url" placeholder="Linkedin URL" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">VK URL</label>
                            <input type="text" class="form-control" name="vk_url" placeholder="VK URL" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">WhatsApp URL</label>
                            <input type="text" class="form-control form-input" name="whatsapp_url" placeholder="WhatsApp URL" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telegram URL</label>
                            <input type="text" class="form-control form-input" name="telegram_url" placeholder="Telegram URL" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Youtube URL</label>
                            <input type="text" class="form-control" name="youtube_url" placeholder="Youtube URL" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">TikTok URL</label>
                            <input type="text" class="form-control" name="tiktok_url" placeholder="TikTok URL" value="">
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_4">
                        <div class="form-group">
                            <label>Facebook Comments</label>
                            <div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="custom-control custom-radio">
            <input type="radio" name="facebook_comment_status" value="1" id="r669aba27463a83-88320526" class="custom-control-input">
            <label for="r669aba27463a83-88320526" class="custom-control-label">Enable</label>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
         <div class="custom-control custom-radio">
             <input type="radio" name="facebook_comment_status" value="0" id="r669aba27463b17-59990876" class="custom-control-input" checked="">
             <label for="r669aba27463b17-59990876" class="custom-control-label">Disable</label>
        </div>
    </div>
</div>                        </div>
                        <div class="form-group">
                            <label class="control-label">Facebook Comments Plugin Code</label>
                            <textarea class="form-control text-area" name="facebook_comment" placeholder="Facebook Comments Plugin Code" style="min-height: 140px;"></textarea>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_5">
                        <div class="form-group">
                            <label class="control-label">Custom Header Codes</label>&nbsp;<small class="small-title-inline">(These codes will be added to the header of the site)</small>
                            <textarea class="form-control text-area" name="custom_header_codes" placeholder="Custom Header Codes" style="min-height: 200px;"></textarea>
                        </div>
                        E.g. &lt;style&gt; body {background-color: #00a65a;} &lt;/style&gt;                    </div>
                    <div class="tab-pane" id="tab_6">
                        <div class="form-group">
                            <label class="control-label">Custom Footer Codes</label>&nbsp;<small class="small-title-inline">(These codes will be added to the footer of the site)</small>
                            <textarea class="form-control text-area" name="custom_footer_codes" placeholder="Custom Footer Codes" style="min-height: 200px;"></textarea>
                        </div>
                        E.g. &lt;script&gt; alert('Hello!'); &lt;/script&gt;                    </div>
                    <div class="tab-pane" id="tab_7">
                        <div class="form-group">
                            <label>Show Cookies Warning</label>
                            <div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="custom-control custom-radio">
            <input type="radio" name="cookies_warning" value="1" id="r669aba27463bf0-22859287" class="custom-control-input">
            <label for="r669aba27463bf0-22859287" class="custom-control-label">Yes</label>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
         <div class="custom-control custom-radio">
             <input type="radio" name="cookies_warning" value="0" id="r669aba27463c11-49269696" class="custom-control-input" checked="">
             <label for="r669aba27463c11-49269696" class="custom-control-label">No</label>
        </div>
    </div>
</div>                        </div>
                        <div class="form-group">
                            <label class="control-label"></label>
                            <textarea class="form-control tinyMCEsmall" name="cookies_warning_text" id="mce_20" style="display: none;" aria-hidden="true"></textarea><div role="application" class="tox tox-tinymce" style="visibility: hidden; height: 300px;" aria-disabled="false"><div class="tox-editor-container"><div data-alloy-vertical-dir="toptobottom" class="tox-editor-header"><div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary"><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Fullscreen" title="Fullscreen" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="m15.3 10-1.2-1.3 2.9-3h-2.3a.9.9 0 1 1 0-1.7H19c.5 0 .9.4.9.9v4.4a.9.9 0 1 1-1.8 0V7l-2.9 3Zm0 4 3 3v-2.3a.9.9 0 1 1 1.7 0V19c0 .5-.4.9-.9.9h-4.4a.9.9 0 1 1 0-1.8H17l-3-2.9 1.3-1.2ZM10 15.4l-2.9 3h2.3a.9.9 0 1 1 0 1.7H5a.9.9 0 0 1-.9-.9v-4.4a.9.9 0 1 1 1.8 0V17l2.9-3 1.2 1.3ZM8.7 10 5.7 7v2.3a.9.9 0 0 1-1.7 0V5c0-.5.4-.9.9-.9h4.4a.9.9 0 0 1 0 1.8H7l3 2.9-1.3 1.2Z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Source code" title="Source code" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><g fill-rule="nonzero"><path d="M9.8 15.7c.3.3.3.8 0 1-.3.4-.9.4-1.2 0l-4.4-4.1a.8.8 0 0 1 0-1.2l4.4-4.2c.3-.3.9-.3 1.2 0 .3.3.3.8 0 1.1L6 12l3.8 3.7ZM14.2 15.7c-.3.3-.3.8 0 1 .4.4.9.4 1.2 0l4.4-4.1c.3-.3.3-.9 0-1.2l-4.4-4.2a.8.8 0 0 0-1.2 0c-.3.3-.3.8 0 1.1L18 12l-3.8 3.7Z"></path></g></svg></span></button><button aria-label="Preview" title="Preview" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M3.5 12.5c.5.8 1.1 1.6 1.8 2.3 2 2 4.2 3.2 6.7 3.2s4.7-1.2 6.7-3.2a16.2 16.2 0 0 0 2.1-2.8 15.7 15.7 0 0 0-2.1-2.8c-2-2-4.2-3.2-6.7-3.2a9.3 9.3 0 0 0-6.7 3.2A16.2 16.2 0 0 0 3.2 12c0 .2.2.3.3.5Zm-2.4-1 .7-1.2L4 7.8C6.2 5.4 8.9 4 12 4c3 0 5.8 1.4 8.1 3.8a18.2 18.2 0 0 1 2.8 3.7v1l-.7 1.2-2.1 2.5c-2.3 2.4-5 3.8-8.1 3.8-3 0-5.8-1.4-8.1-3.8a18.2 18.2 0 0 1-2.8-3.7 1 1 0 0 1 0-1Zm12-3.3a2 2 0 1 0 2.7 2.6 4 4 0 1 1-2.6-2.6Z" fill-rule="nonzero"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Undo" title="Undo" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8Z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Redo" title="Redo" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3Z" fill-rule="nonzero"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Bold" title="Bold" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8Zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4Zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Italic" title="Italic" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="m16.7 4.7-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Underline" title="Underline" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 0 1-.4 1.8l-1 1.4a5.3 5.3 0 0 1-5.5 1 5 5 0 0 1-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 0 1-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 0 0 2.2.8 3.4 3.4 0 0 0 2.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1ZM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Strikethrough" title="Strikethrough" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><g fill-rule="evenodd"><path d="M15.6 8.5c-.5-.7-1-1.1-1.3-1.3-.6-.4-1.3-.6-2-.6-2.7 0-2.8 1.7-2.8 2.1 0 1.6 1.8 2 3.2 2.3 4.4.9 4.6 2.8 4.6 3.9 0 1.4-.7 4.1-5 4.1A6.2 6.2 0 0 1 7 16.4l1.5-1.1c.4.6 1.6 2 3.7 2 1.6 0 2.5-.4 3-1.2.4-.8.3-2-.8-2.6-.7-.4-1.6-.7-2.9-1-1-.2-3.9-.8-3.9-3.6C7.6 6 10.3 5 12.4 5c2.9 0 4.2 1.6 4.7 2.4l-1.5 1.1Z"></path><path d="M5 11h14a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" fill-rule="nonzero"></path></g></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Align left" title="Align left" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Align center" title="Align center" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Align right" title="Align right" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Justify" title="Justify" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><div aria-pressed="false" aria-label="Numbered list" title="Numbered list" role="button" aria-haspopup="true" tabindex="-1" unselectable="on" class="tox-split-button" style="user-select: none;" aria-disabled="false" aria-expanded="false" aria-describedby="aria_8325044733311721416244019"><span role="presentation" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 1 1 0-2ZM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 0 1-.5-.5V5h-.5a.5.5 0 0 1 0-1H6Zm-1 8.8.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 0 1-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 0 0-.2-.2H4.5a.5.5 0 0 1-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3ZM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 0 1 0-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 1 1 0-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 1 1 0-1H6c.6 0 1 .4 1 1Z" fill-rule="evenodd"></path></svg></span></span><span role="presentation" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" style="display: none;" id="aria_8325044733311721416244019">To open the popup, press Shift+Enter</span></div><div aria-pressed="false" aria-label="Bullet list" title="Bullet list" role="button" aria-haspopup="true" tabindex="-1" unselectable="on" class="tox-split-button" style="user-select: none;" aria-disabled="false" aria-expanded="false" aria-describedby="aria_3847599103331721416244019"><span role="presentation" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M11 5h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2ZM4.5 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Z" fill-rule="evenodd"></path></svg></span></span><span role="presentation" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" style="display: none;" id="aria_3847599103331721416244019">To open the popup, press Shift+Enter</span></div></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><div aria-pressed="false" aria-label="Text color" title="Text color" role="button" aria-haspopup="true" tabindex="-1" unselectable="on" class="tox-split-button" style="user-select: none;" aria-disabled="false" aria-expanded="false" aria-describedby="aria_7578335593351721416244020"><span role="presentation" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><g fill-rule="evenodd"><path id="tox-icon-text-color__color" d="M3 18h18v3H3z" fill="#000000"></path><path d="M8.7 16h-.8a.5.5 0 0 1-.5-.6l2.7-9c.1-.3.3-.4.5-.4h2.8c.2 0 .4.1.5.4l2.7 9a.5.5 0 0 1-.5.6h-.8a.5.5 0 0 1-.4-.4l-.7-2.2c0-.3-.3-.4-.5-.4h-3.4c-.2 0-.4.1-.5.4l-.7 2.2c0 .3-.2.4-.4.4Zm2.6-7.6-.6 2a.5.5 0 0 0 .5.6h1.6a.5.5 0 0 0 .5-.6l-.6-2c0-.3-.3-.4-.5-.4h-.4c-.2 0-.4.1-.5.4Z"></path></g></svg></span></span><span role="presentation" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" style="display: none;" id="aria_7578335593351721416244020">To open the popup, press Shift+Enter</span></div><div aria-pressed="false" aria-label="Background color" title="Background color" role="button" aria-haspopup="true" tabindex="-1" unselectable="on" class="tox-split-button" style="user-select: none;" aria-disabled="false" aria-expanded="false" aria-describedby="aria_7128321743371721416244020"><span role="presentation" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><g fill-rule="evenodd"><path id="tox-icon-highlight-bg-color__color" d="M3 18h18v3H3z" fill="#000000"></path><path fill-rule="nonzero" d="M7.7 16.7H3l3.3-3.3-.7-.8L10.2 8l4 4.1-4 4.2c-.2.2-.6.2-.8 0l-.6-.7-1.1 1.1zm5-7.5L11 7.4l3-2.9a2 2 0 0 1 2.6 0L18 6c.7.7.7 2 0 2.7l-2.9 2.9-1.8-1.8-.5-.6"></path></g></svg></span></span><span role="presentation" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" style="display: none;" id="aria_7128321743371721416244020">To open the popup, press Shift+Enter</span></div><button aria-label="Clear formatting" title="Clear formatting" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M13.2 6a1 1 0 0 1 0 .2l-2.6 10a1 1 0 0 1-1 .8h-.2a.8.8 0 0 1-.8-1l2.6-10H8a1 1 0 1 1 0-2h9a1 1 0 0 1 0 2h-3.8ZM5 18h7a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Zm13 1.5L16.5 18 15 19.5a.7.7 0 0 1-1-1l1.5-1.5-1.5-1.5a.7.7 0 0 1 1-1l1.5 1.5 1.5-1.5a.7.7 0 0 1 1 1L17.5 17l1.5 1.5a.7.7 0 0 1-1 1Z" fill-rule="evenodd"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Insert/edit image" title="Insert/edit image" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="m5 15.7 3.3-3.2c.3-.3.7-.3 1 0L12 15l4.1-4c.3-.4.8-.4 1 0l2 1.9V5H5v10.7ZM5 18V19h3l2.8-2.9-2-2L5 17.9Zm14-3-2.5-2.4-6.4 6.5H19v-4ZM4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1Zm6 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Insert/edit media" title="Insert/edit media" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1Zm1 2v14h14V5H5Zm4.8 2.6 5.6 4a.5.5 0 0 1 0 .8l-5.6 4A.5.5 0 0 1 9 16V8a.5.5 0 0 1 .8-.4Z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Insert/edit link" title="Insert/edit link" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M6.2 12.3a1 1 0 0 1 1.4 1.4l-2 2a2 2 0 1 0 2.6 2.8l4.8-4.8a1 1 0 0 0 0-1.4 1 1 0 1 1 1.4-1.3 2.9 2.9 0 0 1 0 4L9.6 20a3.9 3.9 0 0 1-5.5-5.5l2-2Zm11.6-.6a1 1 0 0 1-1.4-1.4l2-2a2 2 0 1 0-2.6-2.8L11 10.3a1 1 0 0 0 0 1.4A1 1 0 1 1 9.6 13a2.9 2.9 0 0 1 0-4L14.4 4a3.9 3.9 0 0 1 5.5 5.5l-2 2Z" fill-rule="nonzero"></path></svg></span></button></div></div></div><div class="tox-anchorbar"></div></div><div class="tox-sidebar-wrap"><div class="tox-edit-area"><iframe id="mce_20_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area" class="tox-edit-area__iframe"></iframe></div><div role="complementary" class="tox-sidebar"><div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;"><div class="tox-sidebar__pane-container"></div></div></div></div></div><div class="tox-statusbar"><div class="tox-statusbar__text-container"><div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false"></div><span class="tox-statusbar__branding"><a href="https://www.tiny.cloud/powered-by-tiny?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v6" rel="noopener" target="_blank" aria-label="Powered by Tiny" tabindex="-1"><svg width="50px" height="16px" viewBox="0 0 50 16" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.143 0c2.608.015 5.186 2.178 5.186 5.331 0 0 .077 3.812-.084 4.87-.361 2.41-2.164 4.074-4.65 4.496-1.453.284-2.523.49-3.212.623-.373.071-.634.122-.785.152-.184.038-.997.145-1.35.145-2.732 0-5.21-2.04-5.248-5.33 0 0 0-3.514.03-4.442.093-2.4 1.758-4.342 4.926-4.963 0 0 3.875-.752 4.036-.782.368-.07.775-.1 1.15-.1Zm1.826 2.8L5.83 3.989v2.393l-2.455.475v5.968l6.137-1.189V9.243l2.456-.476V2.8ZM5.83 6.382l3.682-.713v3.574l-3.682.713V6.382Zm27.173-1.64-.084-1.066h-2.226v9.132h2.456V7.743c-.008-1.151.998-2.064 2.149-2.072 1.15-.008 1.987.92 1.995 2.072v5.065h2.455V7.359c-.015-2.18-1.657-3.929-3.837-3.913a3.993 3.993 0 0 0-2.908 1.296Zm-6.3-4.266L29.16 0v2.387l-2.456.475V.476Zm0 3.2v9.132h2.456V3.676h-2.456Zm18.179 11.787L49.11 3.676H46.58l-1.612 4.527-.46 1.382-.384-1.382-1.611-4.527H39.98l3.3 9.132L42.15 16l2.732-.537ZM22.867 9.738c0 .752.568 1.075.921 1.075.353 0 .668-.047.998-.154l.537 1.765c-.23.154-.92.537-2.225.537-1.305 0-2.655-.997-2.686-2.686a136.877 136.877 0 0 1 0-4.374H18.8V3.676h1.612v-1.98l2.455-.476v2.456h2.302V5.9h-2.302v3.837Z"></path>
</svg></a></span></div><div title="Resize" data-alloy-tabstop="true" tabindex="-1" class="tox-statusbar__resize-handle"><svg width="10" height="10" focusable="false"><g fill-rule="nonzero"><path d="M8.1 1.1A.5.5 0 1 1 9 2l-7 7A.5.5 0 1 1 1 8l7-7ZM8.1 5.1A.5.5 0 1 1 9 6l-3 3A.5.5 0 1 1 5 8l3-3Z"></path></g></svg></div></div><div aria-hidden="true" class="tox-throbber" style="display: none;"></div></div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
                </div>
            </div>
        <input type="hidden" name="back_url" value="http://localhost/modesy/admin/general-settings?lang=1"></form>
    </div>
</div>













<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= trans('google_recaptcha'); ?></h3>
            </div>
            <form action="<?= base_url('Admin/recaptchaSettingsPost'); ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="lang_id" value="<?= cleanNumber(inputGet('lang')); ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label"><?= trans('site_key'); ?></label>
                        <input type="text" class="form-control" name="recaptcha_site_key" placeholder="<?= trans('site_key'); ?>" value="<?= esc($generalSettings->recaptcha_site_key); ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?= trans('secret_key'); ?></label>
                        <input type="text" class="form-control" name="recaptcha_secret_key" placeholder="<?= trans('secret_key'); ?>" value="<?= esc($generalSettings->recaptcha_secret_key); ?>">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right"><?= trans('save_changes'); ?></button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= trans('maintenance_mode'); ?></h3>
            </div>
            <form action="<?= base_url('Admin/maintenanceModePost'); ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="lang_id" value="<?= cleanNumber(inputGet('lang')); ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label"><?= trans('title'); ?></label>
                        <input type="text" class="form-control" name="maintenance_mode_title" placeholder="<?= trans('title'); ?>" value="<?= esc($generalSettings->maintenance_mode_title); ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?= trans('description'); ?></label>
                        <textarea class="form-control text-area" name="maintenance_mode_description" placeholder="<?= trans('description'); ?>" style="min-height: 100px;"><?= esc($generalSettings->maintenance_mode_description); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label><?= trans("status"); ?></label>
                        <?= formRadio('maintenance_mode_status', 1, 0, trans("enable"), trans("disable"), $generalSettings->maintenance_mode_status); ?>
                    </div>
                    <div class="form-group">
                        <label><?= trans('image'); ?></label>: assets/img/maintenance_bg.jpg
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right"><?= trans('save_changes'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>












