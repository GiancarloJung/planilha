using System;
using System.Collections.Generic;
using System.Net;
using System.IO;
using System.Text;
using System.Web;

namespace HTTP
{
    class HTTP_basics
    {        
        private static void start_post(string strPage, string strBuffer)
        {
            byte[]  buffer = Encoding.ASCII.GetBytes(strBuffer);
            HttpWebRequest WebReq = (HttpWebRequest)WebRequest.Create(strPage);
            WebReq.Method = "POST";
            WebReq.ContentType ="application/x-www-form-urlencoded";
            WebReq.ContentLength = buffer.Length;
            Stream PostData = WebReq.GetRequestStream();
            PostData.Write(buffer, 0, buffer.Length);
            PostData.Close();
            HttpWebResponse WebResp = (HttpWebResponse)WebReq.GetResponse();
            Console.WriteLine(WebResp.StatusCode);
            Console.WriteLine(WebResp.Server);
           
            Stream Answer = WebResp.GetResponseStream();
            StreamReader _Answer = new StreamReader(Answer);
            Console.WriteLine(_Answer.ReadToEnd());
        }   

        private static void start_get(string storename, string entiti, string fields, string range, string appkey, string apptoken)
        {
                       

            HttpWebRequest request = (HttpWebRequest)WebRequest.Create("http://api.vtex.com/" + storename +"/dataentities/"+ entiti +"/search?_fields="+fields);
            request.Method = "GET";
            request.Accept = "application/vnd.vtex.ds.v10+json";
            request.ContentType = "application/json";
            request.Headers["x-vtex-api-appKey"] = appkey;
            request.Headers["x-vtex-api-appToken"] = apptoken;     
            request.Headers["REST-Range"] = "resources=0-"+range;
            HttpWebResponse response = (HttpWebResponse)request.GetResponse();
    
            Stream dataStream = response.GetResponseStream();
            StreamReader reader = new StreamReader(dataStream);
            string strResponse = reader.ReadToEnd();
            
            makeText(strResponse);
            
        }
        
        public static void makeText(string text){
            
            string filePath = "" + "masterdataexport.json";
            if (!File.Exists(filePath))
            {
                File.Create(filePath).Close();
            }
            string delimiter = ",";
            string[][] output = new string[][]{
            new string[]{text} 
            };
            int length = output.GetLength(0);
            StringBuilder sb = new StringBuilder();
            for (int index = 0; index < length; index++)
            sb.AppendLine(string.Join(delimiter, output[index]));
            File.AppendAllText(filePath, sb.ToString());                                       
            
        }

        public static void Main(string[] args)
        {
            
            Console.WriteLine("store name?");
            string storename = Console.ReadLine();
            
            Console.WriteLine("entiti?");
            string entiti = Console.ReadLine();
            
            Console.WriteLine("fields? (separated by commas)");
            string fields = Console.ReadLine();
            
            Console.WriteLine("range? (Ex: 100)");
            string range = Console.ReadLine();
            
            Console.WriteLine("appkey?");
            string appkey = Console.ReadLine();
            
            Console.WriteLine("apptoken?");
            string apptoken = Console.ReadLine();
            
            start_get(storename,entiti,fields,range,appkey,apptoken);
            
            Console.WriteLine("To convert to csv, please visit http://konklone.io/json/ and paste the json file.");
            //while (true)
            //{
               // Console.WriteLine("What type? 1:Get, 2:POST, 3:MakeCsv, 4:Exit");
               // int i = 1;//Int32.Parse(Console.ReadLine());
                //Console.WriteLine("What page?");
                //string page = Console.ReadLine();
                //Console.WriteLine("Vars? (ENTER for none)");
                //string vars = Console.ReadLine();
               // switch (i)
               // {
                 //   case 1: start_get("",""); break;
                 //   case 2: start_post("",""); break;
                 //   case 3: makeCsv(""); return;
                 ///   case 4: return;
                //}

                
           // }
        }
    }
} 
