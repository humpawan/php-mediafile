<?php

namespace hum\mediafile;
use Illuminate\Support\Facades\File;
class FilesUploads
{
    public function postImages($images,$storeurl)
    {                    
        //for multiple file upload
        foreach($images as $key=>$file){
            $profileImage = time().$file->getClientOriginalName();
            $file->move($storeurl, $profileImage);
            $imgarray[] = $profileImage;
        }
        // Upload Orginal Image  
        $responsearr['output']['images'] =  $imgarray;        
        $responsearr['output']['status'] = 'Success';
        $responsearr['output']['message'] = 'Uploded Successfully.';
        return response()->json($responsearr);
    }
}