<form action={{ $action }} method="POST" class="form-new-product form-style-1" enctype="multipart/form-data">
    {{ csrf_field() }}
    <fieldset class="name">
        <div class="body-title">Tên danh mục <span class="tf-color-1">*</span></div>
        <input class="flex-grow" type="text" placeholder="Tên danh mục" name="name" tabindex="0"
            value="{{ old('name') ?? ($data->name ?? '') }}" aria-required="true" required>
    </fieldset>
    <fieldset>
        <div class="body-title">Tải lên hình ảnh <span class="tf-color-1">*</span></div>
        <div class="upload-image flex-grow">
            <div class="item up-load">
                <label class="uploadfile" for="image">
                    <span class="icon">
                        <i class="icon-upload-cloud"></i>
                    </span>
                    <span class="body-text">Thả hình ảnh của bạn ở đây hoặc chọn <span class="tf-color">nhấp để
                            duyệt</span></span>
                    <input type="file" id="image" name="image">
                </label>
                <img id="pathImage" src="{{ $data?->image ? asset('storage/' . $data->image) : '' }}" class="absolute path-custom" onerror="this.onerror=null;">
            </div>
        </div>
    </fieldset>
    <fieldset>
        <div class="body-title">Tải lên icon <span class="tf-color-1">*</span></div>
        <div class="upload-image flex-grow">
            <div class="item up-load">
                <label class="uploadfile" for="icon">
                    <span class="icon">
                        <i class="icon-upload-cloud"></i>
                    </span>
                    <span class="body-text">Thả icon của bạn ở đây hoặc chọn <span class="tf-color">nhấp để
                            duyệt</span></span>
                    <input type="file" id="icon" name="icon">
                </label>
                <img id="pathIcon" src="{{ $data?->icon ? asset('storage/' . $data->icon) : '' }}" class="absolute path-custom" onerror="this.onerror=null;">
            </div>
        </div>
    </fieldset>
    <div class="bot">
        <div></div>
        <button class="tf-button w208" type="submit">Save</button>
    </div>
</form>
