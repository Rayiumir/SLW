<x-AdminLayout>
    <button type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-user-plus"></i> افزودن کاربر </button>
    <table class="table table-bordered mt-2 text-center">
        <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">عکس</th>
                <th scope="col">نام و نام خانوادگی</th>
                <th scope="col">ایمیل</th>
                <th scope="col">موبایل</th>
                <th scope="col">نقش کاربر</th>
                <th scope="col">وضعیت</th>
                <th scope="col">تاریخ ایجاد</th>
                <th scope="col">عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $index=>$row)
                <tr>
                    <th scope="row">{{$users->firstItem()+$index}}</th>
                    <td>Mark</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->mobile}}</td>
                    <td><span class="badge text-bg-secondary rounded-5">عادی</span></td>
                    <td>
                        @if($row->status==\App\Enums\UserStatus::Active->value)
                            <span class="badge text-bg-secondary rounded-5">فعال</span>
                        @else
                            <span class="badge text-bg-secondary rounded-5">غیر فعال</span>
                        @endif
                    </td>
                    <td>{{$row->getCreateAtShamsi()}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm rounded-5" title="ویرایش کاربر"><i class="fa-duotone fa-edit"></i></button>
                        <button type="button" class="btn btn-primary btn-sm rounded-5" title="حذف کاربر"><i class="fa-duotone fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-AdminLayout>
