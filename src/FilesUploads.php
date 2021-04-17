<?php

namespace hum\mediafile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
class FilesUploads
{
    public function postImages($images,$storeurl)
    {
        $validator = Validator::make($images, [
            'images.*' => 'required|mimes:jpg,jpeg,png,bmp|max:2048'
        ]);
        $responsearr = $imgarray = array();
        if ($validator->fails()) {
            //return error if validation fails
            $errors = $validator->errors();
            $responsearr['output']['status'] = 'failure';
            $responsearr['output']['message'] = $errors->first('images.*');
        } else{
            //for multiple file upload
            foreach($images as $key=>$file){
                $profileImage = time().$file->getClientOriginalName();
                $file->move($storeurl, $profileImage);
                $imgarray[] = $profileImage;
            }
            // Upload Orginal Image  
            $responsearr['output']['images'] =  $imgarray;        
            $responsearr['output']['status'] = 'Success';
            $responsearr['output']['message'] = 'Images Uploded Successfully.';
        }                    
        return response()->json($responsearr);
    }
}