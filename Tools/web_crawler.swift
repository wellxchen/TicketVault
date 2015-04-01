//
//  web_crawler
//  
//
//  Created by HuangHanxun on 14/11/17.
//
//

import Foundation
//Setup baseurl
var i = 0;
var baseurl = "https://boilerlink.purdue.edu/Organizations?SearchType=None&SelectedCategoryId=0&CurrentPage="
var inserturl = "http://ticketvault.cu.cc/php/tools.php?orz="
var index = 0
var targeturl:String
var key = "target="+"\u{0022}"+"_self"+"\u{0022}"+">"
let myRegex = "[t][a][r][g][e][t][=][\u{0022}][_][s][e][l][f][\u{0022}][>](.){1,}[>]"
let remove_extra = "[(](.){1,}[)]"
var key_length = countElements(key)
var j = 0;
var m = 0;
var error:NSError?
var organizationsName:String
//println(key)
for(i=1;i<103;i++){
    index = i
    targeturl = baseurl + String(index)
    //println(targeturl)
    var targeturl_NSURL = NSURL(string:targeturl);
    var data = NSData(contentsOfURL: targeturl_NSURL!, options: nil, error: nil)
    var datastring_NSString = NSString(data: data!, encoding: NSUTF8StringEncoding)
    //println(datastring_NSString)
    var datastring = String(datastring_NSString!)
    var data_string_length = countElements(datastring)
    while var match = datastring.rangeOfString(myRegex, options: .RegularExpressionSearch){
        organizationsName = String(datastring[match])
        var remove = organizationsName.rangeOfString(key, options:nil)
        organizationsName.replaceRange(remove!, with: "")
        remove = organizationsName.rangeOfString("</a>", options:nil)
        organizationsName.replaceRange(remove!, with: "")
        
        remove = organizationsName.rangeOfString("360&#176;", options:nil)
        if(remove != nil){
            organizationsName.replaceRange(remove!, with: "")
        }
        
        remove = organizationsName.rangeOfString("&#39;s", options:nil)
        if(remove != nil){
            organizationsName.replaceRange(remove!, with: "")
        }
        
        remove = organizationsName.rangeOfString("&#39;", options:nil)
        if(remove != nil){
            organizationsName.replaceRange(remove!, with: "")
        }
        
        remove = organizationsName.rangeOfString("&quot;", options:nil)
        if(remove != nil){
            organizationsName.replaceRange(remove!, with: "")
        }
        
        remove = organizationsName.rangeOfString("&quot;", options:nil)
        if(remove != nil){
            organizationsName.replaceRange(remove!, with: "")
        }

        remove = organizationsName.rangeOfString(remove_extra, options: .RegularExpressionSearch)
        if(remove != nil){
            organizationsName.replaceRange(remove!, with: "")
        }

        if(organizationsName=="Manage Your Interests"||organizationsName=="View Recommended Organizations"){
        }else{
            //println(organizationsName)
            println("Succeed: " + organizationsName);
            println("==========Inserting=========");
            var bodyData = "orz=" + organizationsName //To get them in php: $_POST['name']
            let URL: NSURL = NSURL(string:inserturl)!
            let request:NSMutableURLRequest = NSMutableURLRequest(URL:URL)
            request.HTTPMethod = "POST"
            request.HTTPBody = bodyData.dataUsingEncoding(NSUTF8StringEncoding);
            NSURLConnection.sendAsynchronousRequest(request, queue: NSOperationQueue.mainQueue())
                {
                    (response, data, error) in
                    var output = NSString(data: data, encoding: NSUTF8StringEncoding) // new output variable
            }
            sleep(1)

        }
        //datastring[match].writeToFile("data.txt", atomically: false, encoding: NSUTF8StringEncoding, error: nil)
        datastring.replaceRange(match, with: "")
    }
}
