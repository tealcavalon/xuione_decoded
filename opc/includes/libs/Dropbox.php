<?php


/**
 * DropPHP v2 - A simple Dropbox client that works without cURL.
 *
 * http://fabi.me/en/php-projects/dropphp-dropbox-api-client/
 *
 *
 * @author     Fabian Schlieper <fabian@fabi.me>
 * @copyright  Fabian Schlieper 2017
 * @version    2.0.0
 * @license    See LICENSE
 *
 */
class DropboxClient
{
	public const API_URL = 'https://api.dropboxapi.com/';
	public const API_CONTENT_URL = 'https://content.dropboxapi.com/';
	public const BUFFER_SIZE = 4096;
	public const MAX_UPLOAD_CHUNK_SIZE = 157286400;
	public const UPLOAD_CHUNK_SIZE = 2097152;

	private $appParams;
	private $consumerToken;
	private $requestToken;
	private $accessToken;
	private $rootPath;
	private $useCurl;
	private $curlOptions;
	private $_redirectUri;
	static private $_curlHeadersRef;

	/**
	 * DropboxClient constructor.
	 *
	 * @param array $app_params ['app_key' => ..., 'app_secret' => ..., 'app_full_access' => ...]
	 *
	 * @param string $_deprecatedLocale Deprecated.
	 *
	 * @throws DropboxException
	 */
	public function __construct($app_params, $_deprecatedLocale)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  44  RECV_INIT/64              16?0=     ?1                   0:array (
)         	;0
		1  44  RECV_INIT/64              16?1=     ?2                   1:'en'              	;0
		2  45  ASSIGN_OBJ/136            ?0        ?2670195392          2:'appParams'       	;0
		3  45  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  46  FETCH_OBJ_R/82            $4=       ?892                 4:'appParams'       	;0
		5  46  FETCH_DIM_R/81            $5=       $4                   5:'app_key'         	;0
		6  46  INIT_ARRAY/71             #6=       $5                   6:'t'               	;10
		7  46  FETCH_OBJ_R/82            $7=       ?892                 7:'appParams'       	;0
		8  46  FETCH_DIM_R/81            $8=       $7                   8:'app_secret'      	;0
		9  46  ADD_ARRAY_ELEMENT/72      #6=       $8                   9:'s'               	;0
		10 46  ASSIGN_OBJ/136            ?1        ?2670195392          3:'consumerToken'   	;0
		11 46  OP_DATA/137               ?0        #6                   ?0                  	;0
		12 47  ISSET_ISEMPTY_DIM_OBJ/115 #10=      16?0                 11:'app_full_access'	;16777216
		13 47  JMPZ/43                   ?0        #10                  ?16                 	;0	>>16
		14 47  QM_ASSIGN/22              #11=      12:'sandbox'         ?0                  	;0
		15 47  JMP/42                    ?0        ?17                  ?0                  	;0	>>17
		16 47  QM_ASSIGN/22              #11=      13:'dropbox'         ?0                  	;0	<<13
		17 47  ASSIGN_OBJ/136            ?7        ?2670195392          10:'rootPath'       	;0	<<15
		18 47  OP_DATA/137               ?0        #11                  ?0                  	;0
		19 48  ASSIGN_OBJ/136            ?10       ?2670195392          14:'requestToken'   	;0
		20 48  OP_DATA/137               ?0        15:NULL              ?0                  	;0
		21 49  ASSIGN_OBJ/136            ?11       ?2670195392          16:'accessToken'    	;0
		22 49  OP_DATA/137               ?0        17:NULL              ?0                  	;0
		23 50  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'function_exists'	;1
		24 50  SEND_VAL_EX/116           ?80       21:'curl_init'       ?1                  	;0
		25 50  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		26 50  ASSIGN_OBJ/136            ?12       ?2670195392          18:'useCurl'        	;0
		27 50  OP_DATA/137               ?0        $15                  ?0                  	;0
		28 51  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
		*/
	}

	public function __wakeup()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  55  FETCH_OBJ_IS/91           $0=       ?1667549896          0:'accessToken'     	;0
		1  55  ISSET_ISEMPTY_DIM_OBJ/115 #1=       $0                   1:'s'               	;16777216
		2  55  BOOL_NOT/13               #2=       #1                   ?0                  	;0
		3  55  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4  56  ASSIGN_OBJ/136            ?3        ?4433110             2:'accessToken'     	;0
		5  56  OP_DATA/137               ?0        3:NULL               ?0                  	;0
		6  58  FETCH_OBJ_R/82            $5=       ?55                  5:'useCurl'         	;0	<<3
		7  58  JMPZ_EX/46                #6=       $5                   ?12                 	;0	>>12
		8  58  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'function_exists' 	;1
		9  58  SEND_VAL_EX/116           ?80       8:'curl_init'        ?1                  	;0
		10 58  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		11 58  BOOL/52                   #6=       $7                   ?0                  	;0
		12 58  ASSIGN_OBJ/136            ?4        ?1667551408          4:'useCurl'         	;0	<<7
		13 58  OP_DATA/137               ?0        #6                   ?0                  	;0
		14 59  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * Sets whether to use cURL if its available or PHP HTTP wrappers otherwise
	 *
	 * @param boolean $use_it whether to use it or not
	 * @param array $curlOptions
	 *
	 * @return bool Whether to actually use cURL (always false if not installed)
	 * @throws DropboxException
	 */
	public function SetUseCUrl($use_it, $curlOptions)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  70  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  70  RECV_INIT/64              16?1=     ?2                   0:array (
)         	;0
		2  71  BOOL_NOT/13               #2=       16?0                 ?0                  	;0
		3  71  JMPZ_EX/46                #2=       #2                   ?7                  	;0	>>7
		4  71  ISSET_ISEMPTY_CV/197      #3=       16?1                 ?0                  	;16777216
		5  71  BOOL_NOT/13               #4=       #3                   ?0                  	;0
		6  71  BOOL/52                   #2=       #4                   ?0                  	;0
		7  71  JMPZ/43                   ?0        #2                   ?12                 	;0	>>12	<<3
		8  72  NEW/68                    $5=       1:'DropboxException' ?96                 	;1
		9  72  SEND_VAL_EX/116           ?80       3:'not using cURL but specified cURL options' ?1                  	;0
		10 72  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		11 72  THROW/108                 ?0        $5                   ?0                  	;0
		12 74  ASSIGN_OBJ/136            ?5        ?2                   4:'curlOptions'     	;0	<<7
		13 74  OP_DATA/137               ?0        16?1                 ?0                  	;0
		14 76  JMPZ_EX/46                #9=       16?0                 ?19                 	;0	>>19
		15 76  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'function_exists' 	;1
		16 76  SEND_VAL_EX/116           ?80       8:'curl_init'        ?1                  	;0
		17 76  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		18 76  BOOL/52                   #9=       $10                  ?0                  	;0
		19 76  ASSIGN_OBJ/136            $8=       ?4431760             5:'useCurl'         	;0	<<14
		20 76  OP_DATA/137               ?0        #9                   ?0                  	;0
		21 76  RETURN/62                 ?0        $8                   ?0                  	;0
		22 77  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * Step 1. Returns a URL the user must be redirected to in order to connect the app to their Dropbox account
	 *
	 * @param string $redirect_uri URL users are redirected after authorization
	 * @param string $state Up to 500 bytes of arbitrary data passed back to $redirect_uri
	 *
	 * @return string URL
	 */
	public function BuildAuthorizeUrl($redirect_uri, $state)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  90  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  90  RECV_INIT/64              16?1=     ?2                   0:''                	;0
		2  91  ASSIGN_OBJ/136            ?0        ?7                   1:'_redirectUri'    	;0
		3  91  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  93  FETCH_OBJ_R/82            $3=       ?0                   2:'appParams'       	;0
		5  93  FETCH_DIM_R/81            $4=       $3                   3:'app_key'         	;0
		6  93  ROPE_INIT/54              #6=       ?0                   4:'https://www.dropbox.com/oauth2/authorize?response_type=code&client_id='	;3
		7  93  ROPE_ADD/55               #6=       #6                   $4                  	;1
		8  93  ROPE_END/56               #5=       #6                   5:'&redirect_uri='  	;2
		9  93  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'urlencode'       	;1
		10 93  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		11 93  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		12 93  CONCAT/8                  #9=       #5                   $8                  	;0
		13 93  CONCAT/8                  #10=      #9                   8:'&state='         	;0
		14 93  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'urlencode'       	;1
		15 93  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		16 93  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		17 93  CONCAT/8                  #12=      #10                  $11                 	;0
		18 93  RETURN/62                 ?0        #12                  ?0                  	;0
		19 94  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * Step 2.
	 *
	 * @param string $code The code GET param Dropbox generates when HTTP-redirecting the client
	 * @param string $redirect_uri The same redirect_uri as passed to BuildAuthorizeUrl() before, used for validation
	 *
	 * @return array
	 * @throws DropboxException
	 */
	public function GetBearerToken($code, $redirect_uri)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   106  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   106  RECV_INIT/64              16?1=     ?2                   1:''                	;0
		2   107  ISSET_ISEMPTY_PROP_OBJ/148 #3=       ?1667554296          2:'accessToken'     	;16777216
		3   107  BOOL_NOT/13               #4=       #3                   ?0                  	;0
		4   107  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
		5   108  FETCH_OBJ_R/82            $5=       ?1667555048          3:'accessToken'     	;0
		6   108  RETURN/62                 ?0        $5                   ?0                  	;0
		7   111  ISSET_ISEMPTY_CV/197      #6=       16?0                 ?0                  	;16777216	<<4
		8   111  JMPZ/43                   ?0        #6                   ?23                 	;0	>>23
		9   112  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'filter_input'    	;3
		10  112  FETCH_CONSTANT/99         #7=       ?0                   6:'INPUT_GET'       	;16
		11  112  SEND_VAL_EX/116           ?80       #7                   ?1                  	;0
		12  112  SEND_VAL_EX/116           ?96       9:'code'             ?2                  	;0
		13  112  FETCH_CONSTANT/99         #8=       ?0                   10:'FILTER_SANITIZE_STRING'	;16
		14  112  SEND_VAL_EX/116           ?112      #8                   ?3                  	;0
		15  112  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		16  112  ASSIGN/38                 ?7        16?0                 $9                  	;0
		17  113  ISSET_ISEMPTY_CV/197      #11=      16?0                 ?0                  	;16777216
		18  113  JMPZ/43                   ?0        #11                  ?23                 	;0	>>23
		19  114  NEW/68                    $12=      13:'DropboxException' ?96                 	;1
		20  114  SEND_VAL_EX/116           ?80       15:'Missing OAuth2 code parameter!' ?1                  	;0
		21  114  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		22  114  THROW/108                 ?0        $12                  ?0                  	;0
		23  118  ISSET_ISEMPTY_CV/197      #14=      16?1                 ?0                  	;16777216	<<8,18
		24  118  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		25  118  JMPZ/43                   ?0        #15                  ?28                 	;0	>>28
		26  119  ASSIGN_OBJ/136            ?13       ?4433184             16:'_redirectUri'   	;0
		27  119  OP_DATA/137               ?0        16?1                 ?0                  	;0
		28  122  ISSET_ISEMPTY_PROP_OBJ/148 #17=      ?25                  17:'_redirectUri'   	;16777216	<<25
		29  122  JMPZ/43                   ?0        #17                  ?34                 	;0	>>34
		30  123  NEW/68                    $18=      18:'DropboxException' ?96                 	;1
		31  123  SEND_VAL_EX/116           ?80       20:'Redirect URI unknown, please specify or call BuildAuthorizeUrl() before!' ?1                  	;0
		32  123  DO_FCALL/60               ?16       ?8                   ?0                  	;0
		33  123  THROW/108                 ?0        $18                  ?0                  	;0
		34  126  INIT_METHOD_CALL/112      ?0        ?4461447             21:'apiCall'        	;2	<<29
		35  126  SEND_VAL_EX/116           ?80       23:'oauth2/token'    ?1                  	;0
		36  127  INIT_ARRAY/71             #20=      16?0                 24:'code'           	;22
		37  128  ADD_ARRAY_ELEMENT/72      #20=      25:'authorization_code' 26:'grant_type'     	;0
		38  129  FETCH_OBJ_R/82            $21=      ?1                   27:'appParams'      	;0
		39  129  FETCH_DIM_R/81            $22=      $21                  28:'app_key'        	;0
		40  129  ADD_ARRAY_ELEMENT/72      #20=      $22                  29:'client_id'      	;0
		41  130  FETCH_OBJ_R/82            $23=      ?1                   30:'appParams'      	;0
		42  130  FETCH_DIM_R/81            $24=      $23                  31:'app_secret'     	;0
		43  130  ADD_ARRAY_ELEMENT/72      #20=      $24                  32:'client_secret'  	;0
		44  131  FETCH_OBJ_R/82            $25=      ?20                  33:'_redirectUri'   	;0
		45  131  ADD_ARRAY_ELEMENT/72      #20=      $25                  34:'redirect_uri'   	;0
		46  131  SEND_VAL_EX/116           ?96       #20                  ?2                  	;0
		47  131  DO_FCALL/60               $26=      ?0                   ?0                  	;0
		48  131  ASSIGN/38                 ?24       16?2                 $26                 	;0
		49  134  ISSET_ISEMPTY_CV/197      #28=      16?2                 ?0                  	;16777216
		50  134  JMPNZ_EX/47               #28=      #28                  ?53                 	;0	>>53
		51  134  ISSET_ISEMPTY_PROP_OBJ/148 #29=      16?2                 35:'access_token'   	;16777216
		52  134  BOOL/52                   #28=      #29                  ?0                  	;0
		53  134  JMPZ/43                   ?0        #28                  ?62                 	;0	>>62	<<50
		54  135  NEW/68                    $30=      36:'DropboxException' ?224                	;1
		55  135  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'sprintf'        	;2
		56  135  SEND_VAL_EX/116           ?80       40:'Could not get bearer token! (code: %s)' ?1                  	;0
		57  135  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		58  135  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		59  135  SEND_VAR_NO_REF_EX/50     ?80       $31                  ?1                  	;0
		60  135  DO_FCALL/60               ?29       ?8                   ?0                  	;0
		61  135  THROW/108                 ?0        $30                  ?0                  	;0
		62  138  FETCH_OBJ_R/82            $34=      16?2                 42:'access_token'   	;0	<<53
		63  138  INIT_ARRAY/71             #35=      $34                  43:'t'              	;10
		64  138  FETCH_OBJ_R/82            $36=      16?2                 44:'account_id'     	;0
		65  138  ADD_ARRAY_ELEMENT/72      #35=      $36                  45:'account_id'     	;0
		66  138  ASSIGN_OBJ/136            $33=      ?4397406             41:'accessToken'    	;0
		67  138  OP_DATA/137               ?0        #35                  ?0                  	;0
		68  138  RETURN/62                 ?0        $33                  ?0                  	;0
		69  139  NOP/0                     ?0        46:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * Sets a previously retrieved (and stored) bearer token.
	 *
	 * @param array|object $token
	 *
	 * @throws DropboxException
	 */
	public function SetBearerToken($token)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   148  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   149  CAST/21                   #1=       16?0                 ?0                  	;7
		2   149  ASSIGN/38                 ?1        16?0                 #1                  	;0
		3   150  ISSET_ISEMPTY_DIM_OBJ/115 #3=       16?0                 0:'t'               	;16777216
		4   150  JMPZ/43                   ?0        #3                   ?9                  	;0	>>9
		5   151  NEW/68                    $4=       1:'DropboxException' ?96                 	;1
		6   151  SEND_VAL_EX/116           ?80       3:'Passed invalid bearer token.' ?1                  	;0
		7   151  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		8   151  THROW/108                 ?0        $4                   ?0                  	;0
		9   153  ASSIGN_OBJ/136            ?5        ?1666107488          4:'accessToken'     	;0	<<4
		10  153  OP_DATA/137               ?0        16?0                 ?0                  	;0
		11  154  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * Checks if an access token has been set.
	 *
	 * @access public
	 * @return boolean Authorized or not
	 */
	public function IsAuthorized()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   165  ISSET_ISEMPTY_PROP_OBJ/148 #0=       ?2670193952          0:'accessToken'     	;16777216
		1   165  BOOL_NOT/13               #1=       #0                   ?0                  	;0
		2   165  JMPZ_EX/46                #1=       #1                   ?7                  	;0	>>7
		3   165  FETCH_OBJ_IS/91           $2=       ?138                 1:'accessToken'     	;0
		4   165  ISSET_ISEMPTY_DIM_OBJ/115 #3=       $2                   2:'account_id'      	;16777216
		5   165  BOOL_NOT/13               #4=       #3                   ?0                  	;0
		6   165  BOOL/52                   #1=       #4                   ?0                  	;0
		7   165  RETURN/62                 ?0        #1                   ?0                  	;0	<<2
		8   166  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * Retrieves information about the user's account.
	 *
	 * @access public
	 * @return object Account info object. See https://www.dropbox.com/developers/documentation/http/documentation#users-get_current_account
	 */
	public function GetAccountInfo()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   178  INIT_METHOD_CALL/112      ?0        ?1669147456          0:'apiCall'         	;1
		1   178  SEND_VAL_EX/116           ?80       2:'2/users/get_current_account' ?1                  	;0
		2   178  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		3   178  ASSIGN/38                 ?1        16?0                 $1                  	;0
		4   179  FETCH_OBJ_R/82            $4=       16?0                 4:'account_id'      	;0
		5   179  ASSIGN_OBJ/136            ?2        16?0                 3:'uid'             	;0
		6   179  OP_DATA/137               ?0        $4                   ?0                  	;0
		7   180  FETCH_OBJ_R/82            $6=       16?0                 6:'name'            	;0
		8   180  ASSIGN_OBJ/136            ?4        16?0                 5:'name_details'    	;0
		9   180  OP_DATA/137               ?0        $6                   ?0                  	;0
		10  181  FETCH_OBJ_R/82            $8=       16?0                 8:'name'            	;0
		11  181  FETCH_OBJ_R/82            $9=       $8                   9:'display_name'    	;0
		12  181  ASSIGN_OBJ/136            ?6        16?0                 7:'display_name'    	;0
		13  181  OP_DATA/137               ?0        $9                   ?0                  	;0
		14  183  RETURN/62                 ?0        16?0                 ?0                  	;0
		15  184  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * @param string $path
	 * @param bool $recursive
	 * @param bool $include_deleted
	 *
	 * @return mixed
	 * @throws DropboxException
	 */
	public function GetFiles($path, $recursive, $include_deleted)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   194  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   194  RECV_INIT/64              16?1=     ?2                   1:false             	;0
		2   194  RECV_INIT/64              16?2=     ?3                   2:false             	;0
		3   195  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'is_object'       	;1
		4   195  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   195  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		6   195  JMPZ_EX/46                #8=       $7                   ?10                 	;0	>>10
		7   195  ISSET_ISEMPTY_PROP_OBJ/148 #9=       16?0                 5:'path'            	;16777216
		8   195  BOOL_NOT/13               #10=      #9                   ?0                  	;0
		9   195  BOOL/52                   #8=       #10                  ?0                  	;0
		10  195  JMPZ/43                   ?0        #8                   ?13                 	;0	>>13	<<6
		11  196  FETCH_OBJ_R/82            $11=      16?0                 6:'path'            	;0
		12  196  ASSIGN/38                 ?5        16?0                 $11                 	;0
		13  198  IS_IDENTICAL/15           #13=      16?0                 7:'/'               	;0	<<10
		14  198  JMPZ/43                   ?0        #13                  ?16                 	;0	>>16
		15  199  ASSIGN/38                 ?7        16?0                 8:''                	;0
		16  202  INIT_METHOD_CALL/112      ?0        ?2670194080          9:'apiCall'         	;2	<<14
		17  202  SEND_VAL_EX/116           ?80       11:'2/files/list_folder' ?1                  	;0
		18  202  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'compact'        	;3
		19  202  SEND_VAL_EX/116           ?80       14:'path'            ?1                  	;0
		20  202  SEND_VAL_EX/116           ?96       15:'recursive'       ?2                  	;0
		21  202  SEND_VAL_EX/116           ?112      16:'include_deleted' ?3                  	;0
		22  202  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		23  202  SEND_VAR_NO_REF_EX/50     ?96       $15                  ?2                  	;0
		24  202  DO_FCALL/60               $16=      ?0                   ?0                  	;0
		25  202  ASSIGN/38                 ?10       16?3                 $16                 	;0
		26  203  FETCH_OBJ_R/82            $18=      16?3                 17:'entries'        	;0
		27  203  ASSIGN/38                 ?12       16?4                 $18                 	;0
		28  205  JMP/42                    ?0        ?42                  ?0                  	;0	>>42
		29  206  INIT_METHOD_CALL/112      ?0        ?4583821             18:'apiCall'        	;2	<<43
		30  206  SEND_VAL_EX/116           ?80       20:'2/files/list_folder/continue' ?1                  	;0
		31  206  FETCH_OBJ_R/82            $20=      16?3                 21:'cursor'         	;0
		32  206  INIT_ARRAY/71             #21=      $20                  22:'cursor'         	;6
		33  206  SEND_VAL_EX/116           ?96       #21                  ?2                  	;0
		34  206  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		35  206  ASSIGN/38                 ?16       16?3                 $22                 	;0
		36  207  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'array_merge'    	;2
		37  207  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		38  207  FETCH_OBJ_FUNC_ARG/94     $24=      16?3                 25:'entries'        	;2
		39  207  SEND_VAR_EX/66            ?96       $24                  ?2                  	;0
		40  207  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
		41  207  ASSIGN/38                 ?19       16?4                 $25                 	;0
		42  205  FETCH_OBJ_R/82            $27=      16?3                 26:'has_more'       	;0	<<28
		43  205  JMPNZ/44                  ?0        $27                  ?29                 	;0	>>29
		44  210  ASSIGN/38                 ?21       16?5                 27:array (
)        	;0
		45  211  FE_RESET_R/77             $29=      16?4                 ?55                 	;0
		46  211  FE_FETCH_R/78             ?0        $29                  16?6                	;55	>>55	<<54
		47  212  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'trim'           	;2
		48  212  FETCH_OBJ_FUNC_ARG/94     $30=      16?6                 30:'path_display'   	;1
		49  212  SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
		50  212  SEND_VAL_EX/116           ?96       31:'/'               ?2                  	;0
		51  212  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		52  212  ASSIGN_DIM/147            ?25       16?5                 $31                 	;0
		53  212  OP_DATA/137               ?0        16?6                 ?0                  	;0
		54  212  JMP/42                    ?0        ?46                  ?0                  	;0	>>46
		55  212  FE_FREE/127               ?0        $29                  ?0                  	;0	<<45
		56  215  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'array_map'      	;2
		57  215  SEND_VAL_EX/116           ?80       34:array (
  0 => 'DropboxClient',
  1 => 'compatMeta',
) ?1                  	;0
		58  215  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
		59  215  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
		60  215  RETURN/62                 ?0        $33                  ?0                  	;0
		61  216  NOP/0                     ?0        35:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * See https://www.dropbox.com/developers/documentation/http/documentation#files-get_metadata
	 *
	 * @param $path
	 * @param bool $include_deleted
	 * @param null $rev
	 *
	 * @return mixed
	 * @throws DropboxException
	 */
	public function GetMetadata($path, $include_deleted, $rev)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   228  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   228  RECV_INIT/64              16?1=     ?2                   0:false             	;0
		2   228  RECV_INIT/64              16?2=     ?3                   1:NULL              	;0
		3   229  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
		4   229  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   229  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		6   229  JMPZ_EX/46                #4=       $3                   ?10                 	;0	>>10
		7   229  ISSET_ISEMPTY_PROP_OBJ/148 #5=       16?0                 4:'path'            	;16777216
		8   229  BOOL_NOT/13               #6=       #5                   ?0                  	;0
		9   229  BOOL/52                   #4=       #6                   ?0                  	;0
		10  229  JMPZ/43                   ?0        #4                   ?13                 	;0	>>13	<<6
		11  230  FETCH_OBJ_R/82            $7=       16?0                 5:'path'            	;0
		12  230  ASSIGN/38                 ?5        16?0                 $7                  	;0
		13  232  ISSET_ISEMPTY_CV/197      #9=       16?2                 ?0                  	;16777216	<<10
		14  232  BOOL_NOT/13               #10=      #9                   ?0                  	;0
		15  232  JMPZ/43                   ?0        #10                  ?19                 	;0	>>19
		16  233  NOP/0                     ?0        ?0                   ?0                  	;0
		17  233  FAST_CONCAT/53            #11=      6:'rev:'             16?2                	;0
		18  233  ASSIGN/38                 ?9        16?0                 #11                 	;0
		19  236  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 7:'compatMeta'      	;1	<<15
		20  236  INIT_METHOD_CALL/112      ?0        ?2670193784          9:'apiCall'         	;2
		21  236  SEND_VAL_EX/116           ?80       11:'2/files/get_metadata' ?1                  	;0
		22  236  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'compact'        	;2
		23  236  SEND_VAL_EX/116           ?80       14:'path'            ?1                  	;0
		24  236  SEND_VAL_EX/116           ?96       15:'include_deleted' ?2                  	;0
		25  236  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		26  236  SEND_VAR_NO_REF_EX/50     ?96       $13                  ?2                  	;0
		27  236  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		28  236  SEND_VAR_NO_REF_EX/50     ?80       $14                  ?1                  	;0
		29  236  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		30  236  RETURN/62                 ?0        $15                  ?0                  	;0
		31  237  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * Download a file from user's Dropbox to the web server
	 *
	 * @param string|object $path Dropbox path or metadata object of the file to download.
	 * @param string $dest_path Local path for destination
	 * @param string $rev Optional. The revision of the file to retrieve. This defaults to the most recent revision.
	 * @param callback $progress_changed_callback Optional. Callback that will be called during download with 2 args: 1. bytes loaded, 2. file size
	 *
	 * @return object Dropbox file metadata
	 * @throws DropboxException
	 */
	public function DownloadFile($path, $dest_path, $rev, $progress_changed_callback)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   250  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   250  RECV_INIT/64              16?1=     ?2                   0:''                	;0
		2   250  RECV_INIT/64              16?2=     ?3                   1:NULL              	;0
		3   250  RECV_INIT/64              16?3=     ?4                   2:NULL              	;0
		4   251  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'is_object'       	;1
		5   251  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   251  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		7   251  JMPZ_EX/46                #14=      $13                  ?11                 	;0	>>11
		8   251  ISSET_ISEMPTY_PROP_OBJ/148 #15=      16?0                 5:'path'            	;16777216
		9   251  BOOL_NOT/13               #16=      #15                  ?0                  	;0
		10  251  BOOL/52                   #14=      #16                  ?0                  	;0
		11  251  JMPZ/43                   ?0        #14                  ?14                 	;0	>>14	<<7
		12  252  FETCH_OBJ_R/82            $17=      16?0                 6:'path'            	;0
		13  252  ASSIGN/38                 ?5        16?0                 $17                 	;0
		14  255  ISSET_ISEMPTY_CV/197      #19=      16?1                 ?0                  	;16777216	<<11
		15  255  JMPZ/43                   ?0        #19                  ?20                 	;0	>>20
		16  256  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'basename'        	;1
		17  256  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		18  256  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		19  256  ASSIGN/38                 ?8        16?1                 $20                 	;0
		20  259  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 9:'cleanUrl'        	;1	<<15
		21  259  SEND_VAL_EX/116           ?80       11:'https://content.dropboxapi.com/2/files/download' ?1                  	;0
		22  259  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		23  259  ASSIGN/38                 ?10       16?4                 $22                 	;0
		24  260  ISSET_ISEMPTY_CV/197      #24=      16?2                 ?0                  	;16777216
		25  260  BOOL_NOT/13               #25=      #24                  ?0                  	;0
		26  260  JMPZ/43                   ?0        #25                  ?30                 	;0	>>30
		27  261  NOP/0                     ?0        ?0                   ?0                  	;0
		28  261  FAST_CONCAT/53            #26=      12:'rev:'            16?2                	;0
		29  261  ASSIGN/38                 ?14       16?0                 #26                 	;0
		30  263  INIT_METHOD_CALL/112      ?0        ?2670194080          13:'createRequestContext'	;2	<<26
		31  263  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		32  263  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'compact'        	;1
		33  263  SEND_VAL_EX/116           ?80       17:'path'            ?1                  	;0
		34  263  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		35  263  SEND_VAR_NO_REF_EX/50     ?96       $28                  ?2                  	;0
		36  263  DO_FCALL/60               $29=      ?0                   ?0                  	;0
		37  263  ASSIGN/38                 ?17       16?5                 $29                 	;0
		38  265  BEGIN_SILENCE/57          #31=      ?0                   ?0                  	;0
		39  265  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'fopen'          	;2
		40  265  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		41  265  SEND_VAL_EX/116           ?96       20:'wb'              ?2                  	;0
		42  265  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
		43  265  END_SILENCE/58            ?0        #31                  ?0                  	;0
		44  265  ASSIGN/38                 ?20       16?6                 $32                 	;0
		45  266  IS_IDENTICAL/15           #34=      16?6                 21:false            	;0
		46  266  JMPZ/43                   ?0        #34                  ?54                 	;0	>>54
		47  267  NEW/68                    $35=      22:'DropboxException' ?192                	;1
		48  267  ROPE_INIT/54              #37=      ?0                   24:'Could not create file '	;3
		49  267  ROPE_ADD/55               #37=      #37                  16?1                	;1
		50  267  ROPE_END/56               #36=      #37                  25:' !'             	;2
		51  267  SEND_VAL_EX/116           ?80       #36                  ?1                  	;0
		52  267  DO_FCALL/60               ?26       ?8                   ?0                  	;0
		53  267  THROW/108                 ?0        $35                  ?0                  	;0
		54  270  FETCH_OBJ_R/82            $40=      ?4392134             26:'useCurl'        	;0	<<46
		55  270  JMPZ/43                   ?0        $40                  ?92                 	;0	>>92
		56  271  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'curl_setopt'    	;3
		57  271  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		58  271  FETCH_CONSTANT/99         #41=      ?0                   29:'CURLOPT_BINARYTRANSFER'	;16
		59  271  SEND_VAL_EX/116           ?96       #41                  ?2                  	;0
		60  271  SEND_VAL_EX/116           ?112      32:true              ?3                  	;0
		61  271  DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
		62  272  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'curl_setopt'    	;3
		63  272  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		64  272  FETCH_CONSTANT/99         #43=      ?0                   35:'CURLOPT_RETURNTRANSFER'	;16
		65  272  SEND_VAL_EX/116           ?96       #43                  ?2                  	;0
		66  272  SEND_VAL_EX/116           ?112      38:true              ?3                  	;0
		67  272  DO_FCALL_BY_NAME/131      ?31       ?0                   ?0                  	;0
		68  273  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'curl_setopt'    	;3
		69  273  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		70  273  FETCH_CONSTANT/99         #45=      ?0                   41:'CURLOPT_FILE'   	;16
		71  273  SEND_VAL_EX/116           ?96       #45                  ?2                  	;0
		72  273  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
		73  273  DO_FCALL_BY_NAME/131      ?33       ?0                   ?0                  	;0
		74  274  ASSIGN/38                 ?34       16?7                 44:array (
)        	;0
		75  275  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 45:'execCurlAndClose'	;2
		76  275  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		77  275  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
		78  275  DO_FCALL/60               ?35       ?0                   ?0                  	;0
		79  276  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'fclose'         	;1
		80  276  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		81  276  DO_FCALL_BY_NAME/131      ?36       ?0                   ?0                  	;0
		82  277  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 49:'getMetaFromHeaders'	;2
		83  277  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		84  277  SEND_VAL_EX/116           ?96       51:true              ?2                  	;0
		85  277  DO_FCALL/60               $50=      ?0                   ?0                  	;0
		86  277  ASSIGN/38                 ?38       16?8                 $50                 	;0
		87  278  INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'filesize'       	;1
		88  278  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		89  278  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
		90  278  ASSIGN/38                 ?40       16?9                 $52                 	;0
		91  278  JMP/42                    ?0        ?171                 ?0                  	;0	>>171
		92  280  BEGIN_SILENCE/57          #54=      ?0                   ?0                  	;0	<<55
		93  280  INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'fopen'          	;4
		94  280  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		95  280  SEND_VAL_EX/116           ?96       56:'rb'              ?2                  	;0
		96  280  SEND_VAL_EX/116           ?112      57:false             ?3                  	;0
		97  280  SEND_VAR_EX/66            ?128      16?5                 ?4                  	;0
		98  280  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
		99  280  END_SILENCE/58            ?0        #54                  ?0                  	;0
		100 280  ASSIGN/38                 ?43       16?10                $55                 	;0
		101 281  IS_IDENTICAL/15           #57=      16?10                58:false            	;0
		102 281  JMPZ/43                   ?0        #57                  ?110                	;0	>>110
		103 282  NEW/68                    $58=      59:'DropboxException' ?192                	;1
		104 282  ROPE_INIT/54              #60=      ?0                   61:'HTTP request to '	;3
		105 282  ROPE_ADD/55               #60=      #60                  16?4                	;1
		106 282  ROPE_END/56               #59=      #60                  62:' failed!'       	;2
		107 282  SEND_VAL_EX/116           ?80       #59                  ?1                  	;0
		108 282  DO_FCALL/60               ?49       ?8                   ?0                  	;0
		109 282  THROW/108                 ?0        $58                  ?0                  	;0
		110 287  INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'stream_get_meta_data'	;1	<<102
		111 287  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
		112 287  DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
		113 287  ASSIGN/38                 ?51       16?11                $63                 	;0
		114 288  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 65:'getMetaFromHeaders'	;2
		115 288  FETCH_DIM_FUNC_ARG/93     $65=      16?11                67:'wrapper_data'   	;1
		116 288  SEND_VAR_EX/66            ?80       $65                  ?1                  	;0
		117 288  SEND_VAL_EX/116           ?96       68:true              ?2                  	;0
		118 288  DO_FCALL/60               $66=      ?0                   ?0                  	;0
		119 288  ASSIGN/38                 ?54       16?8                 $66                 	;0
		120 289  ASSIGN/38                 ?55       16?9                 69:0                	;0
		121 290  JMP/42                    ?0        ?160                 ?0                  	;0	>>160
		122 291  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'fwrite'         	;2	<<164
		123 291  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		124 291  INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'fread'          	;2
		125 291  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
		126 291  SEND_VAL_EX/116           ?96       74:4096              ?2                  	;0
		127 291  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
		128 291  SEND_VAR_NO_REF_EX/50     ?96       $69                  ?2                  	;0
		129 291  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
		130 291  ASSIGN/38                 $71=      16?12                $70                 	;0
		131 291  IS_IDENTICAL/15           #72=      $71                  75:false            	;0
		132 291  JMPZ/43                   ?0        #72                  ?150                	;0	>>150
		133 292  BEGIN_SILENCE/57          #73=      ?0                   ?0                  	;0
		134 292  INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'fclose'         	;1
		135 292  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
		136 292  DO_FCALL_BY_NAME/131      ?61       ?0                   ?0                  	;0
		137 292  END_SILENCE/58            ?0        #73                  ?0                  	;0
		138 293  BEGIN_SILENCE/57          #75=      ?0                   ?0                  	;0
		139 293  INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'fclose'         	;1
		140 293  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		141 293  DO_FCALL_BY_NAME/131      ?63       ?0                   ?0                  	;0
		142 293  END_SILENCE/58            ?0        #75                  ?0                  	;0
		143 294  NEW/68                    $77=      80:'DropboxException' ?192                	;1
		144 294  ROPE_INIT/54              #79=      ?0                   82:'Writing to file '	;3
		145 294  ROPE_ADD/55               #79=      #79                  16?1                	;1
		146 294  ROPE_END/56               #78=      #79                  83:' failed!\''     	;2
		147 294  SEND_VAL_EX/116           ?80       #78                  ?1                  	;0
		148 294  DO_FCALL/60               ?68       ?8                   ?0                  	;0
		149 294  THROW/108                 ?0        $77                  ?0                  	;0
		150 296  ASSIGN_ADD/23             ?69       16?9                 16?12               	;0	<<132
		151 297  ISSET_ISEMPTY_CV/197      #83=      16?3                 ?0                  	;16777216
		152 297  BOOL_NOT/13               #84=      #83                  ?0                  	;0
		153 297  JMPZ/43                   ?0        #84                  ?160                	;0	>>160
		154 298  INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'call_user_func' 	;3
		155 298  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		156 298  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
		157 298  FETCH_OBJ_FUNC_ARG/94     $85=      16?8                 86:'bytes'          	;3
		158 298  SEND_VAR_EX/66            ?112      $85                  ?3                  	;0
		159 298  DO_FCALL_BY_NAME/131      ?73       ?0                   ?0                  	;0
		160 290  INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'feof'           	;1	<<121,153
		161 290  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
		162 290  DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
		163 290  BOOL_NOT/13               #88=      $87                  ?0                  	;0
		164 290  JMPNZ/44                  ?0        #88                  ?122                	;0	>>122
		165 302  INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'fclose'         	;1
		166 302  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
		167 302  DO_FCALL_BY_NAME/131      ?76       ?0                   ?0                  	;0
		168 303  INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'fclose'         	;1
		169 303  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		170 303  DO_FCALL_BY_NAME/131      ?77       ?0                   ?0                  	;0
		171 306  FETCH_OBJ_R/82            $91=      16?8                 93:'size'           	;0	<<91
		172 306  IS_NOT_EQUAL/18           #92=      $91                  16?9                	;0
		173 306  JMPZ/43                   ?0        #92                  ?187                	;0	>>187
		174 307  NEW/68                    $93=      94:'DropboxException' ?384                	;1
		175 307  FETCH_OBJ_R/82            $94=      16?8                 96:'size'           	;0
		176 307  ROPE_INIT/54              #97=      ?0                   97:'Download size mismatch! (header:'	;7
		177 307  ROPE_ADD/55               #97=      #97                  $94                 	;1
		178 307  ROPE_ADD/55               #97=      #97                  98:' vs actual:'    	;2
		179 307  ROPE_ADD/55               #97=      #97                  16?9                	;3
		180 307  FETCH_OBJ_R/82            $95=      ?208                 99:'useCurl'        	;0
		181 307  ROPE_ADD/55               #97=      #97                  100:'; curl:'       	;4
		182 307  ROPE_ADD/55               #97=      #97                  $95                 	;5
		183 307  ROPE_END/56               #96=      #97                  101:')'             	;6
		184 307  SEND_VAL_EX/116           ?80       #96                  ?1                  	;0
		185 307  DO_FCALL/60               ?88       ?8                   ?0                  	;0
		186 307  THROW/108                 ?0        $93                  ?0                  	;0
		187 310  RETURN/62                 ?0        16?8                 ?0                  	;0	<<173
		188 311  NOP/0                     ?0        102:NULL             ?0                  	;4294967295
		*/
	}

	static public function compatMeta($meta)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   314  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   315  FETCH_OBJ_R/82            $2=       16?0                 1:'.tag'            	;0
		2   315  IS_EQUAL/17               #3=       $2                   2:'folder'          	;0
		3   315  ASSIGN_OBJ/136            ?0        16?0                 0:'is_dir'          	;0
		4   315  OP_DATA/137               ?0        #3                   ?0                  	;0
		5   316  FETCH_OBJ_R/82            $5=       16?0                 4:'path_display'    	;0
		6   316  ASSIGN_OBJ/136            ?3        16?0                 3:'path'            	;0
		7   316  OP_DATA/137               ?0        $5                   ?0                  	;0
		8   317  ISSET_ISEMPTY_PROP_OBJ/148 #7=       16?0                 6:'size'            	;33554432
		9   317  JMPZ/43                   ?0        #7                   ?13                 	;0	>>13
		10  317  FETCH_OBJ_R/82            $8=       16?0                 7:'size'            	;0
		11  317  QM_ASSIGN/22              #9=       $8                   ?0                  	;0
		12  317  JMP/42                    ?0        ?14                  ?0                  	;0	>>14
		13  317  QM_ASSIGN/22              #9=       8:0                  ?0                  	;0	<<9
		14  317  ASSIGN_OBJ/136            ?5        16?0                 5:'bytes'           	;0	<<12
		15  317  OP_DATA/137               ?0        #9                   ?0                  	;0
		16  319  RETURN/62                 ?0        16?0                 ?0                  	;0
		17  320  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * Upload a file to dropbox
	 *
	 * @access public
	 *
	 * @param string $src_file Local file to upload
	 * @param string $path Dropbox path for destination
	 * @param bool $overwrite
	 *
	 * @return object Dropbox file metadata
	 * @throws DropboxException
	 */
	public function UploadFile($src_file, $path, $overwrite)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   334  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   334  RECV_INIT/64              16?1=     ?2                   0:''                	;0
		2   334  RECV_INIT/64              16?2=     ?3                   1:true              	;0
		3   335  ISSET_ISEMPTY_CV/197      #13=      16?1                 ?0                  	;16777216
		4   335  JMPZ/43                   ?0        #13                  ?9                  	;0	>>9
		5   336  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'basename'        	;1
		6   336  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		7   336  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		8   336  ASSIGN/38                 ?2        16?1                 $14                 	;0
		9   338  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 4:'toPath'          	;1	<<4
		10  338  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		11  338  DO_FCALL/60               $16=      ?0                   ?0                  	;0
		12  338  ASSIGN/38                 ?4        16?1                 $16                 	;0
		13  341  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'basename'        	;1
		14  341  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		15  341  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		16  341  ASSIGN/38                 ?6        16?3                 $18                 	;0
		17  342  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'strpos'          	;2
		18  342  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		19  342  SEND_VAL_EX/116           ?96       10:'.'               ?2                  	;0
		20  342  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		21  342  IS_IDENTICAL/15           #21=      $20                  11:false            	;0
		22  342  JMPZ/43                   ?0        #21                  ?42                 	;0	>>42
		23  344  INIT_METHOD_CALL/112      ?0        ?4583821             12:'GetMetadata'    	;1	<<41
		24  344  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		25  344  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		26  344  ASSIGN/38                 ?10       16?4                 $22                 	;0
		27  345  JMPZ_EX/46                #24=      16?4                 ?30                 	;0	>>30
		28  345  FETCH_OBJ_R/82            $25=      16?4                 14:'is_dir'         	;0
		29  345  BOOL/52                   #24=      $25                  ?0                  	;0
		30  345  JMPZ/43                   ?0        #24                  ?40                 	;0	>>40	<<27
		31  346  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 15:'toPath'         	;1
		32  346  CONCAT/8                  #26=      16?1                 17:'/'              	;0
		33  346  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'basename'       	;1
		34  346  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		35  346  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
		36  346  CONCAT/8                  #28=      #26                  $27                 	;0
		37  346  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
		38  346  DO_FCALL/60               $29=      ?0                   ?0                  	;0
		39  346  ASSIGN/38                 ?17       16?1                 $29                 	;0
		40  346  JMP/42                    ?0        ?42                  ?0                  	;0	>>42	<<30
		41  348  CATCH/107                 ?1        20:'Exception'       16?5                	;0 CB	>>42,23
		42  352  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'filesize'       	;1	<<22,40,41
		43  352  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		44  352  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		45  352  ASSIGN/38                 ?19       16?6                 $31                 	;0
		46  355  INIT_ARRAY/71             #33=      16?1                 24:'path'           	;14
		47  356  JMPZ/43                   ?0        16?2                 ?50                 	;0	>>50
		48  356  QM_ASSIGN/22              #34=      25:'overwrite'       ?0                  	;0
		49  356  JMP/42                    ?0        ?51                  ?0                  	;0	>>51
		50  356  QM_ASSIGN/22              #34=      26:'add'             ?0                  	;0	<<47
		51  356  ADD_ARRAY_ELEMENT/72      #33=      #34                  27:'mode'           	;0	<<49
		52  355  ADD_ARRAY_ELEMENT/72      #33=      28:true              29:'autorename'     	;0
		53  355  ASSIGN/38                 ?22       16?7                 #33                 	;0
		54  360  IS_SMALLER/19             #36=      30:2097152           16?6                	;0
		55  360  JMPZ/43                   ?0        #36                  ?127                	;0	>>127
		56  361  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'fopen'          	;2
		57  361  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		58  361  SEND_VAL_EX/116           ?96       33:'rb'              ?2                  	;0
		59  361  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
		60  361  ASSIGN/38                 ?25       16?8                 $37                 	;0
		61  362  IS_IDENTICAL/15           #39=      16?8                 34:false            	;0
		62  362  JMPZ/43                   ?0        #39                  ?70                 	;0	>>70
		63  363  NEW/68                    $40=      35:'DropboxException' ?192                	;1
		64  363  ROPE_INIT/54              #42=      ?0                   37:'Cannot open '   	;3
		65  363  ROPE_ADD/55               #42=      #42                  16?0                	;1
		66  363  ROPE_END/56               #41=      #42                  38:' for reading!'  	;2
		67  363  SEND_VAL_EX/116           ?80       #41                  ?1                  	;0
		68  363  DO_FCALL/60               ?31       ?8                   ?0                  	;0
		69  363  THROW/108                 ?0        $40                  ?0                  	;0
		70  366  ASSIGN/38                 ?32       16?9                 39:0                	;0	<<62
		71  368  INIT_METHOD_CALL/112      ?0        ?4461447             40:'apiCall'        	;3
		72  368  SEND_VAL_EX/116           ?80       42:'2/files/upload_session/start' ?1                  	;0
		73  368  SEND_VAL_EX/116           ?96       43:array (
)         ?2                  	;0
		74  368  SEND_VAL_EX/116           ?112      44:true              ?3                  	;0
		75  368  DO_FCALL/60               $46=      ?0                   ?0                  	;0
		76  368  ASSIGN/38                 ?34       16?10                $46                 	;0
		77  369  FETCH_OBJ_R/82            $48=      16?10                45:'session_id'     	;0
		78  369  ASSIGN/38                 ?36       16?11                $48                 	;0
		79  371  JMP/42                    ?0        ?104                 ?0                  	;0	>>104
		80  372  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'fread'          	;2	<<108
		81  372  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		82  372  SEND_VAL_EX/116           ?96       48:2097152           ?2                  	;0
		83  372  DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
		84  372  ASSIGN/38                 ?38       16?12                $50                 	;0
		85  373  INIT_METHOD_CALL/112      ?0        ?37                  49:'apiCall'        	;4
		86  373  SEND_VAL_EX/116           ?80       51:'2/files/upload_session/append_v2' ?1                  	;0
		87  373  INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'compact'        	;2
		88  373  SEND_VAL_EX/116           ?80       54:'session_id'      ?1                  	;0
		89  373  SEND_VAL_EX/116           ?96       55:'offset'          ?2                  	;0
		90  373  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
		91  373  INIT_ARRAY/71             #53=      $52                  56:'cursor'         	;6
		92  373  SEND_VAL_EX/116           ?96       #53                  ?2                  	;0
		93  373  SEND_VAL_EX/116           ?112      57:true              ?3                  	;0
		94  373  SEND_VAR_EX/66            ?128      16?12                ?4                  	;0
		95  373  DO_FCALL/60               ?41       ?0                   ?0                  	;0
		96  374  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'strlen'         	;1
		97  374  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
		98  374  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
		99  374  ASSIGN_ADD/23             ?43       16?9                 $55                 	;0
		100 375  UNSET_CV/196              ?0        16?12                ?0                  	;0
		101 376  IS_SMALLER_OR_EQUAL/20    #57=      16?6                 16?9                	;0
		102 376  JMPZ/43                   ?0        #57                  ?104                	;0	>>104
		103 377  BRK/254                   ?0        ?109                 0:1                 	;0
		104 371  INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'feof'           	;1	<<79,102
		105 371  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		106 371  DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
		107 371  BOOL_NOT/13               #59=      $58                  ?0                  	;0
		108 371  JMPNZ/44                  ?0        #59                  ?80                 	;0	>>80
		109 381  BEGIN_SILENCE/57          #60=      ?0                   ?0                  	;0
		110 381  INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'fclose'         	;1
		111 381  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		112 381  DO_FCALL_BY_NAME/131      ?48       ?0                   ?0                  	;0
		113 381  END_SILENCE/58            ?0        #60                  ?0                  	;0
		114 383  INIT_METHOD_CALL/112      ?0        ?25165824            64:'apiCall'        	;3
		115 383  SEND_VAL_EX/116           ?80       66:'2/files/upload_session/finish' ?1                  	;0
		116 384  INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'compact'        	;2
		117 384  SEND_VAL_EX/116           ?80       69:'session_id'      ?1                  	;0
		118 384  SEND_VAL_EX/116           ?96       70:'offset'          ?2                  	;0
		119 384  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
		120 384  INIT_ARRAY/71             #63=      $62                  71:'cursor'         	;10
		121 385  ADD_ARRAY_ELEMENT/72      #63=      16?7                 72:'commit'         	;0
		122 385  SEND_VAL_EX/116           ?96       #63                  ?2                  	;0
		123 386  SEND_VAL_EX/116           ?112      73:true              ?3                  	;0
		124 386  DO_FCALL/60               $64=      ?0                   ?0                  	;0
		125 386  RETURN/62                 ?0        $64                  ?0                  	;0
		126 386  JMP/42                    ?0        ?138                 ?0                  	;0	>>138
		127 388  INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'file_get_contents'	;1	<<55
		128 388  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		129 388  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
		130 388  ASSIGN/38                 ?53       16?12                $65                 	;0
		131 390  INIT_METHOD_CALL/112      ?0        ?2670193808          76:'apiCall'        	;4
		132 390  SEND_VAL_EX/116           ?80       78:'2/files/upload'  ?1                  	;0
		133 390  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
		134 390  SEND_VAL_EX/116           ?112      79:true              ?3                  	;0
		135 390  SEND_VAR_EX/66            ?128      16?12                ?4                  	;0
		136 390  DO_FCALL/60               $67=      ?0                   ?0                  	;0
		137 390  RETURN/62                 ?0        $67                  ?0                  	;0
		138 392  NOP/0                     ?0        80:NULL              ?0                  	;4294967295	<<126
		*/
	}

	/**
	 * Get thumbnail for a specified image
	 *
	 * @access public
	 *
	 * @param $dropbox_file string Path to the image
	 * @param $format string Image format of the thumbnail (jpeg or png)
	 * @param bool $echo
	 * @param $size string Thumbnail size (xs, s, m, l, xl)
	 *
	 * @return string Returns the thumbnail as binary image data
	 */
	public function GetThumbnail($dropbox_file, $size, $format, $echo)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   406  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   406  RECV_INIT/64              16?1=     ?2                   0:'s'               	;0
		2   406  RECV_INIT/64              16?2=     ?3                   1:'jpeg'            	;0
		3   406  RECV_INIT/64              16?3=     ?4                   2:false             	;0
		4   407  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 3:'toPath'          	;1
		5   407  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   407  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		7   407  ASSIGN/38                 ?1        16?4                 $9                  	;0
		8   410  ASSIGN/38                 ?2        16?5                 5:array (
  'xs' => 'w32h32',
  's' => 'w64h64',
  'm' => 'w128h128',
  'l' => 'w640h480',
  'xl' => 'w1024h768',
)	;0
		9   416  ISSET_ISEMPTY_DIM_OBJ/115 #12=      16?5                 16?1                	;33554432
		10  416  JMPZ/43                   ?0        #12                  ?13                 	;0	>>13
		11  417  FETCH_DIM_R/81            $13=      16?5                 16?1                	;0
		12  417  ASSIGN/38                 ?5        16?1                 $13                 	;0
		13  420  ASSIGN/38                 ?6        16?6                 6:'https://content.dropboxapi.com/2/files/get_thumbnail'	;0	<<10
		14  421  INIT_METHOD_CALL/112      ?0        ?1667968672          7:'createRequestContext'	;2
		15  421  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		16  421  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'compact'         	;3
		17  421  SEND_VAL_EX/116           ?80       11:'path'            ?1                  	;0
		18  421  SEND_VAL_EX/116           ?96       12:'size'            ?2                  	;0
		19  421  SEND_VAL_EX/116           ?112      13:'format'          ?3                  	;0
		20  421  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		21  421  SEND_VAR_NO_REF_EX/50     ?96       $16                  ?2                  	;0
		22  421  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		23  421  ASSIGN/38                 ?9        16?7                 $17                 	;0
		24  422  FETCH_OBJ_R/82            $19=      ?2670193536          14:'useCurl'        	;0
		25  422  JMPZ/43                   ?0        $19                  ?31                 	;0	>>31
		26  422  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 15:'execCurlAndClose'	;1
		27  422  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		28  422  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		29  422  QM_ASSIGN/22              #21=      $20                  ?0                  	;0
		30  422  JMP/42                    ?0        ?37                  ?0                  	;0	>>37
		31  422  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'file_get_contents'	;3	<<25
		32  422  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		33  422  SEND_VAL_EX/116           ?96       19:false             ?2                  	;0
		34  422  SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
		35  422  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		36  422  QM_ASSIGN/22              #21=      $22                  ?0                  	;0
		37  422  ASSIGN/38                 ?14       16?8                 #21                 	;0	<<30
		38  427  JMPZ/43                   ?0        16?3                 ?46                 	;0	>>46
		39  428  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'header'         	;1
		40  428  CONCAT/8                  #24=      22:'Content-type: image/' 16?2                	;0
		41  428  SEND_VAL_EX/116           ?80       #24                  ?1                  	;0
		42  428  DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
		43  429  ECHO/40                   ?0        16?8                 ?0                  	;0
		44  430  UNSET_CV/196              ?0        16?8                 ?0                  	;0
		45  432  RETURN/62                 ?0        23:''                ?0                  	;0
		46  435  RETURN/62                 ?0        16?8                 ?0                  	;0	<<38
		47  436  NOP/0                     ?0        24:NULL              ?0                  	;4294967295
		*/
	}

	public function GetLink($path, $preview, $_short, &$expires)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   439  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   439  RECV_INIT/64              16?1=     ?2                   0:true              	;0
		2   439  RECV_INIT/64              16?2=     ?3                   1:true              	;0
		3   439  RECV_INIT/64              16?3=     ?4                   2:NULL              	;0
		4   443  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 3:'toPath'          	;1
		5   443  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   443  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		7   443  ASSIGN/38                 ?1        16?0                 $8                  	;0
		8   445  BOOL_NOT/13               #10=      16?1                 ?0                  	;0
		9   445  JMPZ/43                   ?0        #10                  ?24                 	;0	>>24
		10  446  INIT_METHOD_CALL/112      ?0        ?1                   5:'apiCall'         	;2
		11  446  SEND_VAL_EX/116           ?80       7:'2/files/get_temporary_link' ?1                  	;0
		12  447  INIT_ARRAY/71             #11=      16?0                 8:'path'            	;6
		13  447  SEND_VAL_EX/116           ?96       #11                  ?2                  	;0
		14  447  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		15  447  ASSIGN/38                 ?5        16?4                 $12                 	;0
		16  449  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'time'            	;0
		17  449  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		18  449  ADD/1                     #15=      $14                  11:14400            	;0
		19  449  SUB/2                     #16=      #15                  12:60               	;0
		20  449  ASSIGN/38                 ?9        16?3                 #16                 	;0
		21  451  FETCH_OBJ_R/82            $18=      16?4                 13:'link'           	;0
		22  451  RETURN/62                 ?0        $18                  ?0                  	;0
		23  451  JMP/42                    ?0        ?58                  ?0                  	;0	>>58
		24  454  INIT_METHOD_CALL/112      ?0        ?2670193264          14:'apiCall'        	;2	<<9,32
		25  454  SEND_VAL_EX/116           ?80       16:'2/sharing/create_shared_link_with_settings' ?1                  	;0
		26  455  INIT_ARRAY/71             #19=      16?0                 17:'path'           	;10
		27  455  ADD_ARRAY_ELEMENT/72      #19=      18:array (
  'requested_visibility' => 'public',
) 19:'settings'       	;0
		28  455  SEND_VAL_EX/116           ?96       #19                  ?2                  	;0
		29  455  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		30  455  ASSIGN/38                 ?13       16?5                 $20                 	;0
		31  455  JMP/42                    ?0        ?56                  ?0                  	;0	>>56
		32  460  CATCH/107                 ?1        20:'DropboxException' 16?6                	;0 CB	>>56,24
		33  461  INIT_METHOD_CALL/112      ?0        16?6                 22:'getTag'         	;0
		34  461  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		35  461  IS_EQUAL/17               #23=      $22                  24:'shared_link_already_exists'	;0
		36  461  JMPZ/43                   ?0        #23                  ?55                 	;0	>>55
		37  462  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'array_filter'   	;2
		38  462  INIT_METHOD_CALL/112      ?0        ?5127                27:'apiCall'        	;2
		39  462  SEND_VAL_EX/116           ?80       29:'2/sharing/list_shared_links' ?1                  	;0
		40  462  INIT_ARRAY/71             #24=      16?0                 30:'path'           	;6
		41  462  SEND_VAL_EX/116           ?96       #24                  ?2                  	;0
		42  462  DO_FCALL/60               $25=      ?0                   ?0                  	;0
		43  462  SEPARATE/156              $25=      $25                  ?0                  	;0
		44  462  FETCH_OBJ_FUNC_ARG/94     $26=      $25                  31:'links'          	;1
		45  462  SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
		46  462  DECLARE_LAMBDA_FUNCTION/153 #27=      32:'' . "\0" . '{closure}/home/xui_main/includes/libs/Dropbox.php0x7f8d6506283b' ?0                  	;0
		47  464  SEND_VAL_EX/116           ?96       #27                  ?2                  	;0
		48  464  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		49  464  ASSIGN/38                 ?21       16?7                 $28                 	;0
		50  465  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'reset'          	;1
		51  465  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		52  465  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
		53  465  ASSIGN/38                 ?23       16?5                 $30                 	;0
		54  465  JMP/42                    ?0        ?56                  ?0                  	;0	>>56
		55  467  THROW/108                 ?0        16?6                 ?0                  	;0	<<36
		56  473  FETCH_OBJ_R/82            $32=      16?5                 35:'url'            	;0	<<31,32,54
		57  473  RETURN/62                 ?0        $32                  ?0                  	;0
		58  475  NOP/0                     ?0        36:NULL              ?0                  	;4294967295	<<23
		*/
	}

	public function Delta($cursor)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   477  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   478  INIT_METHOD_CALL/112      ?0        ?9                   0:'apiCall'         	;2
		2   478  SEND_VAL_EX/116           ?80       2:'2/files/list_folder/continue' ?1                  	;0
		3   478  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'array_merge'     	;2
		4   478  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'compact'         	;1
		5   478  SEND_VAL_EX/116           ?80       7:'cursor'           ?1                  	;0
		6   478  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		7   478  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		8   479  SEND_VAL_EX/116           ?96       8:array (
)          ?2                  	;0
		9   479  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		10  479  SEND_VAR_NO_REF_EX/50     ?96       $2                   ?2                  	;0
		11  479  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		12  479  RETURN/62                 ?0        $3                   ?0                  	;0
		13  480  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function LatestCursor($path, $include_media_info)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   482  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   482  RECV_INIT/64              16?1=     ?2                   1:false             	;0
		2   483  INIT_METHOD_CALL/112      ?0        ?4442274             2:'apiCall'         	;2
		3   483  SEND_VAL_EX/116           ?80       4:'2/files/list_folder/get_latest_cursor' ?1                  	;0
		4   483  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'compact'         	;2
		5   483  SEND_VAL_EX/116           ?80       7:'path'             ?1                  	;0
		6   483  SEND_VAL_EX/116           ?96       8:'include_media_info' ?2                  	;0
		7   483  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		8   483  SEND_VAR_NO_REF_EX/50     ?96       $3                   ?2                  	;0
		9   483  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10  483  ASSIGN/38                 ?2        16?2                 $4                  	;0
		11  485  FETCH_OBJ_R/82            $6=       16?2                 9:'cursor'          	;0
		12  485  RETURN/62                 ?0        $6                   ?0                  	;0
		13  486  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function GetRevisions($path, $limit)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   488  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   488  RECV_INIT/64              16?1=     ?2                   0:10                	;0
		2   489  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 1:'toPath'          	;1
		3   489  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   489  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		5   489  ASSIGN/38                 ?1        16?0                 $2                  	;0
		6   491  INIT_METHOD_CALL/112      ?0        ?1667624672          3:'apiCall'         	;2
		7   491  SEND_VAL_EX/116           ?80       5:'2/files/list_revisions' ?1                  	;0
		8   491  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'compact'         	;2
		9   491  SEND_VAL_EX/116           ?80       8:'path'             ?1                  	;0
		10  491  SEND_VAL_EX/116           ?96       9:'limit'            ?2                  	;0
		11  491  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		12  491  SEND_VAR_NO_REF_EX/50     ?96       $4                   ?2                  	;0
		13  491  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		14  491  FETCH_OBJ_R/82            $6=       $5                   10:'entries'        	;0
		15  491  RETURN/62                 ?0        $6                   ?0                  	;0
		16  492  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	public function Restore($dropbox_file, $rev)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   494  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   494  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   495  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_object'       	;1
		3   495  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   495  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		5   495  JMPZ_EX/46                #3=       $2                   ?9                  	;0	>>9
		6   495  ISSET_ISEMPTY_PROP_OBJ/148 #4=       16?0                 2:'path'            	;16777216
		7   495  BOOL_NOT/13               #5=       #4                   ?0                  	;0
		8   495  BOOL/52                   #3=       #5                   ?0                  	;0
		9   495  JMPZ/43                   ?0        #3                   ?12                 	;0	>>12	<<5
		10  496  FETCH_OBJ_R/82            $6=       16?0                 3:'path'            	;0
		11  496  ASSIGN/38                 ?5        16?0                 $6                  	;0
		12  499  INIT_METHOD_CALL/112      ?0        ?3                   4:'apiCall'         	;2	<<9
		13  499  FETCH_OBJ_R/82            $8=       ?0                   6:'rootPath'        	;0
		14  499  ROPE_INIT/54              #10=      ?0                   7:'restore/'        	;4
		15  499  ROPE_ADD/55               #10=      #10                  $8                  	;1
		16  499  ROPE_ADD/55               #10=      #10                  8:'/'               	;2
		17  499  ROPE_END/56               #9=       #10                  16?0                	;3
		18  499  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
		19  499  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'compact'         	;1
		20  499  SEND_VAL_EX/116           ?80       11:'rev'             ?1                  	;0
		21  499  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		22  499  SEND_VAR_NO_REF_EX/50     ?96       $12                  ?2                  	;0
		23  499  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		24  499  RETURN/62                 ?0        $13                  ?0                  	;0
		25  500  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
		*/
	}

	public function Search($path, $query, $max_results, $include_deleted)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   502  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   502  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   502  RECV_INIT/64              16?2=     ?3                   0:1000              	;0
		3   502  RECV_INIT/64              16?3=     ?4                   1:false             	;0
		4   503  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 2:'toPath'          	;1
		5   503  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   503  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		7   503  ASSIGN/38                 ?1        16?0                 $7                  	;0
		8   504  JMPZ/43                   ?0        16?3                 ?11                 	;0	>>11
		9   504  QM_ASSIGN/22              #9=       4:'deleted_filename' ?0                  	;0
		10  504  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		11  504  QM_ASSIGN/22              #9=       5:'filename'         ?0                  	;0	<<8
		12  504  ASSIGN/38                 ?3        16?4                 #9                  	;0	<<10
		13  506  ASSIGN/38                 ?4        16?5                 6:array (
)         	;0
		14  507  INIT_METHOD_CALL/112      ?0        ?0                   7:'apiCall'         	;2
		15  507  SEND_VAL_EX/116           ?80       9:'2/files/search'   ?1                  	;0
		16  507  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'compact'        	;4
		17  507  SEND_VAL_EX/116           ?80       12:'path'            ?1                  	;0
		18  507  SEND_VAL_EX/116           ?96       13:'query'           ?2                  	;0
		19  507  SEND_VAL_EX/116           ?112      14:'max_results'     ?3                  	;0
		20  507  SEND_VAL_EX/116           ?128      15:'mode'            ?4                  	;0
		21  507  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		22  507  SEND_VAR_NO_REF_EX/50     ?96       $12                  ?2                  	;0
		23  507  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		24  507  FETCH_OBJ_R/82            $14=      $13                  16:'matches'        	;0
		25  507  FE_RESET_R/77             $15=      $14                  ?34                 	;0
		26  507  FE_FETCH_R/78             ?0        $15                  16?6                	;34	>>34	<<33
		27  508  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 17:'compatMeta'     	;1
		28  508  FETCH_OBJ_R/82            $17=      16?6                 19:'metadata'       	;0
		29  508  SEND_VAR/117              ?80       $17                  ?1                  	;0
		30  508  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		31  508  ASSIGN_DIM/147            ?9        16?5                 ?4534362            	;0
		32  508  OP_DATA/137               ?0        $18                  ?0                  	;0
		33  508  JMP/42                    ?0        ?26                  ?0                  	;0	>>26
		34  508  FE_FREE/127               ?0        $15                  ?0                  	;0	<<25
		35  511  RETURN/62                 ?0        16?5                 ?0                  	;0
		36  512  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	public function GetCopyRef($dropbox_file, &$expires)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   514  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   514  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   515  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
		3   515  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   515  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		5   515  JMPZ_EX/46                #4=       $3                   ?9                  	;0	>>9
		6   515  ISSET_ISEMPTY_PROP_OBJ/148 #5=       16?0                 3:'path'            	;16777216
		7   515  BOOL_NOT/13               #6=       #5                   ?0                  	;0
		8   515  BOOL/52                   #4=       #6                   ?0                  	;0
		9   515  JMPZ/43                   ?0        #4                   ?12                 	;0	>>12	<<5
		10  516  FETCH_OBJ_R/82            $7=       16?0                 4:'path'            	;0
		11  516  ASSIGN/38                 ?5        16?0                 $7                  	;0
		12  518  INIT_METHOD_CALL/112      ?0        ?2670194080          5:'apiCall'         	;2	<<9
		13  518  FETCH_OBJ_R/82            $9=       ?2670193072          7:'rootPath'        	;0
		14  518  ROPE_INIT/54              #11=      ?0                   8:'copy_ref/'       	;4
		15  518  ROPE_ADD/55               #11=      #11                  $9                  	;1
		16  518  ROPE_ADD/55               #11=      #11                  9:'/'               	;2
		17  518  ROPE_END/56               #10=      #11                  16?0                	;3
		18  518  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
		19  518  SEND_VAL_EX/116           ?96       10:'GET'             ?2                  	;0
		20  518  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		21  518  ASSIGN/38                 ?11       16?2                 $13                 	;0
		22  519  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'strtotime'      	;1
		23  519  FETCH_OBJ_FUNC_ARG/94     $15=      16?2                 13:'expires'        	;1
		24  519  SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
		25  519  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		26  519  ASSIGN/38                 ?14       16?1                 $16                 	;0
		27  521  FETCH_OBJ_R/82            $18=      16?2                 14:'copy_ref'       	;0
		28  521  RETURN/62                 ?0        $18                  ?0                  	;0
		29  522  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	public function Copy($from_path, $to_path, $copy_ref)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   525  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   525  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   525  RECV_INIT/64              16?2=     ?3                   0:false             	;0
		3   526  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
		4   526  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   526  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		6   526  JMPZ_EX/46                #4=       $3                   ?10                 	;0	>>10
		7   526  ISSET_ISEMPTY_PROP_OBJ/148 #5=       16?0                 3:'path'            	;16777216
		8   526  BOOL_NOT/13               #6=       #5                   ?0                  	;0
		9   526  BOOL/52                   #4=       #6                   ?0                  	;0
		10  526  JMPZ/43                   ?0        #4                   ?13                 	;0	>>13	<<6
		11  527  FETCH_OBJ_R/82            $7=       16?0                 4:'path'            	;0
		12  527  ASSIGN/38                 ?5        16?0                 $7                  	;0
		13  530  INIT_METHOD_CALL/112      ?0        ?3                   5:'apiCall'         	;2	<<10
		14  530  SEND_VAL_EX/116           ?80       7:'fileops/copy'     ?1                  	;0
		15  531  FETCH_OBJ_R/82            $9=       ?1669225680          8:'rootPath'        	;0
		16  531  INIT_ARRAY/71             #10=      $9                   9:'root'            	;14
		17  532  JMPZ/43                   ?0        16?2                 ?20                 	;0	>>20
		18  532  QM_ASSIGN/22              #11=      10:'from_copy_ref'   ?0                  	;0
		19  532  JMP/42                    ?0        ?21                  ?0                  	;0	>>21
		20  532  QM_ASSIGN/22              #11=      11:'from_path'       ?0                  	;0	<<17
		21  532  ADD_ARRAY_ELEMENT/72      #10=      16?0                 #11                 	;0	<<19
		22  533  ADD_ARRAY_ELEMENT/72      #10=      16?1                 12:'to_path'        	;0
		23  533  SEND_VAL_EX/116           ?96       #10                  ?2                  	;0
		24  533  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		25  533  RETURN/62                 ?0        $12                  ?0                  	;0
		26  535  NOP/0                     ?0        13:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * Creates a new folder in the DropBox
	 *
	 * @access public
	 *
	 * @param $path string The path to the new folder to create
	 * @param bool $autorename
	 *
	 * @return object Dropbox folder metadata
	 */
	public function CreateFolder($path, $autorename)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   547  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   547  RECV_INIT/64              16?1=     ?2                   0:false             	;0
		2   548  INIT_METHOD_CALL/112      ?0        ?4442274             1:'apiCall'         	;2
		3   548  SEND_VAL_EX/116           ?80       3:'2/files/create_folder_v2' ?1                  	;0
		4   549  INIT_ARRAY/71             #3=       16?0                 4:'path'            	;10
		5   549  ADD_ARRAY_ELEMENT/72      #3=       16?1                 5:'autorename'      	;0
		6   549  SEND_VAL_EX/116           ?96       #3                   ?2                  	;0
		7   549  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   549  ASSIGN/38                 ?2        16?2                 $4                  	;0
		9   550  FETCH_OBJ_W/85            $6=       16?2                 6:'metadata'        	;0
		10  550  ASSIGN_OBJ/136            ?4        $6                   7:'.tag'            	;0
		11  550  OP_DATA/137               ?0        8:'folder'           ?0                  	;0
		12  551  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 9:'compatMeta'      	;1
		13  551  FETCH_OBJ_R/82            $8=       16?2                 11:'metadata'       	;0
		14  551  SEND_VAR/117              ?80       $8                   ?1                  	;0
		15  551  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16  551  RETURN/62                 ?0        $9                   ?0                  	;0
		17  552  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * Delete file or folder
	 *
	 * @param $path mixed The path or metadata of the file/folder to be deleted.
	 *
	 * @return object Dropbox metadata of deleted file or folder
	 */
	public function Delete($path)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   561  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   562  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_object'       	;1
		2   562  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   562  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   562  JMPZ_EX/46                #3=       $2                   ?8                  	;0	>>8
		5   562  ISSET_ISEMPTY_PROP_OBJ/148 #4=       16?0                 2:'path'            	;16777216
		6   562  BOOL_NOT/13               #5=       #4                   ?0                  	;0
		7   562  BOOL/52                   #3=       #5                   ?0                  	;0
		8   562  JMPZ/43                   ?0        #3                   ?11                 	;0	>>11	<<4
		9   563  FETCH_OBJ_R/82            $6=       16?0                 3:'path'            	;0
		10  563  ASSIGN/38                 ?5        16?0                 $6                  	;0
		11  566  INIT_METHOD_CALL/112      ?0        ?2670194080          4:'apiCall'         	;2	<<8
		12  566  SEND_VAL_EX/116           ?80       6:'2/files/delete_v2' ?1                  	;0
		13  566  INIT_ARRAY/71             #8=       16?0                 7:'path'            	;6
		14  566  SEND_VAL_EX/116           ?96       #8                   ?2                  	;0
		15  566  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16  566  ASSIGN/38                 ?8        16?1                 $9                  	;0
		17  567  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 8:'compatMeta'      	;1
		18  567  FETCH_OBJ_R/82            $11=      16?1                 10:'metadata'       	;0
		19  567  SEND_VAR/117              ?80       $11                  ?1                  	;0
		20  567  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		21  567  RETURN/62                 ?0        $12                  ?0                  	;0
		22  568  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	public function Move($from_path, $to_path)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   570  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   570  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   571  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_object'       	;1
		3   571  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   571  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		5   571  JMPZ_EX/46                #3=       $2                   ?9                  	;0	>>9
		6   571  ISSET_ISEMPTY_PROP_OBJ/148 #4=       16?0                 2:'path'            	;16777216
		7   571  BOOL_NOT/13               #5=       #4                   ?0                  	;0
		8   571  BOOL/52                   #3=       #5                   ?0                  	;0
		9   571  JMPZ/43                   ?0        #3                   ?12                 	;0	>>12	<<5
		10  572  FETCH_OBJ_R/82            $6=       16?0                 3:'path'            	;0
		11  572  ASSIGN/38                 ?5        16?0                 $6                  	;0
		12  575  INIT_METHOD_CALL/112      ?0        ?3                   4:'apiCall'         	;2	<<9
		13  575  SEND_VAL_EX/116           ?80       6:'fileops/move'     ?1                  	;0
		14  576  FETCH_OBJ_R/82            $8=       ?4388570             7:'rootPath'        	;0
		15  576  INIT_ARRAY/71             #9=       $8                   8:'root'            	;14
		16  577  ADD_ARRAY_ELEMENT/72      #9=       16?0                 9:'from_path'       	;0
		17  578  ADD_ARRAY_ELEMENT/72      #9=       16?1                 10:'to_path'        	;0
		18  578  SEND_VAL_EX/116           ?96       #9                   ?2                  	;0
		19  578  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		20  578  RETURN/62                 ?0        $10                  ?0                  	;0
		21  580  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	private function createCurl($url, $http_context)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   586  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   586  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   587  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'curl_init'       	;1
		3   587  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   587  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		5   587  ASSIGN/38                 ?1        16?2                 $4                  	;0
		6   590  FETCH_CONSTANT/99         #6=       ?0                   2:'CURLOPT_HEADER'  	;16
		7   590  INIT_ARRAY/71             #7=       5:false              #6                  	;16
		8   591  FETCH_CONSTANT/99         #8=       ?0                   6:'CURLOPT_RETURNTRANSFER'	;16
		9   590  ADD_ARRAY_ELEMENT/72      #7=       9:true               #8                  	;0
		10  592  FETCH_CONSTANT/99         #9=       ?0                   10:'CURLOPT_SSL_VERIFYPEER'	;16
		11  590  ADD_ARRAY_ELEMENT/72      #7=       13:false             #9                  	;0
		12  593  FETCH_CONSTANT/99         #10=      ?0                   14:'CURLOPT_BINARYTRANSFER'	;16
		13  590  ADD_ARRAY_ELEMENT/72      #7=       17:true              #10                 	;0
		14  590  ASSIGN/38                 ?7        16?3                 #7                  	;0
		15  596  FETCH_CONSTANT/99         #12=      ?0                   18:'CURLOPT_CUSTOMREQUEST'	;16
		16  596  FETCH_DIM_R/81            $14=      16?1                 21:'method'         	;0
		17  596  ASSIGN_DIM/147            ?9        16?3                 #12                 	;0
		18  596  OP_DATA/137               ?0        $14                  ?0                  	;0
		19  598  ISSET_ISEMPTY_DIM_OBJ/115 #15=      16?1                 22:'content'        	;16777216
		20  598  BOOL_NOT/13               #16=      #15                  ?0                  	;0
		21  598  JMPZ/43                   ?0        #16                  ?38                 	;0	>>38
		22  599  FETCH_CONSTANT/99         #17=      ?0                   23:'CURLOPT_POSTFIELDS'	;16
		23  599  FETCH_DIM_W/84            $19=      16?1                 26:'content'        	;0
		24  599  MAKE_REF/51               $20=      $19                  ?0                  	;0
		25  599  FETCH_DIM_W/84            $18=      16?3                 #17                 	;0
		26  599  ASSIGN_REF/39             ?17       $18                  $20                 	;0
		27  600  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'defined'        	;1
		28  600  SEND_VAL_EX/116           ?80       29:'CURLOPT_POSTFIELDSIZE' ?1                  	;0
		29  600  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		30  600  JMPZ/43                   ?0        $22                  ?38                 	;0	>>38
		31  601  FETCH_CONSTANT/99         #23=      ?0                   30:'CURLOPT_POSTFIELDSIZE'	;16
		32  601  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'strlen'         	;1
		33  601  FETCH_DIM_FUNC_ARG/93     $25=      16?1                 35:'content'        	;1
		34  601  SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
		35  601  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		36  601  ASSIGN_DIM/147            ?20       16?3                 #23                 	;0
		37  601  OP_DATA/137               ?0        $26                  ?0                  	;0
		38  605  FETCH_CONSTANT/99         #27=      ?0                   36:'CURLOPT_HTTPHEADER'	;16	<<21,30
		39  605  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'array_map'      	;2
		40  605  SEND_VAL_EX/116           ?80       41:'trim'            ?1                  	;0
		41  605  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'explode'        	;2
		42  605  SEND_VAL_EX/116           ?80       44:'
'               ?1                  	;0
		43  605  FETCH_DIM_FUNC_ARG/93     $29=      16?1                 45:'header'         	;2
		44  605  SEND_VAR_EX/66            ?96       $29                  ?2                  	;0
		45  605  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
		46  605  SEND_VAR_NO_REF_EX/50     ?96       $30                  ?2                  	;0
		47  605  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		48  605  ASSIGN_DIM/147            ?24       16?3                 #27                 	;0
		49  605  OP_DATA/137               ?0        $31                  ?0                  	;0
		50  607  ISSET_ISEMPTY_PROP_OBJ/148 #32=      ?2670193392          46:'curlOptions'    	;16777216
		51  607  BOOL_NOT/13               #33=      #32                  ?0                  	;0
		52  607  JMPZ_EX/46                #33=      #33                  ?58                 	;0	>>58
		53  607  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'is_array'       	;1
		54  607  FETCH_OBJ_FUNC_ARG/94     $34=      ?1668319424          49:'curlOptions'    	;1
		55  607  SEND_VAR_EX/66            ?80       $34                  ?1                  	;0
		56  607  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
		57  607  BOOL/52                   #33=      $35                  ?0                  	;0
		58  607  JMPZ/43                   ?0        #33                  ?65                 	;0	>>65	<<52
		59  608  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'array_merge'    	;2
		60  608  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		61  608  FETCH_OBJ_FUNC_ARG/94     $36=      ?2670193696          52:'curlOptions'    	;2
		62  608  SEND_VAR_EX/66            ?96       $36                  ?2                  	;0
		63  608  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
		64  608  ASSIGN/38                 ?34       16?3                 $37                 	;0
		65  611  INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'curl_setopt_array'	;2	<<58
		66  611  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		67  611  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
		68  611  DO_FCALL_BY_NAME/131      ?35       ?0                   ?0                  	;0
		69  613  RETURN/62                 ?0        16?2                 ?0                  	;0
		70  614  NOP/0                     ?0        55:NULL              ?0                  	;4294967295
		*/
	}

	static private function _curlHeaderCallback($ch, $header)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   618  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   618  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   622  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'trim'            	;1
		3   622  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		4   622  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		5   622  FETCH_STATIC_PROP_W/174   $2=       0:'_curlHeadersRef'  ?513                	;0
		6   622  ASSIGN_DIM/147            ?1        $2                   ?4442274            	;0
		7   622  OP_DATA/137               ?0        $4                   ?0                  	;0
		8   624  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'strlen'          	;1
		9   624  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		10  624  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		11  624  RETURN/62                 ?0        $5                   ?0                  	;0
		12  625  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static private function &execCurlAndClose($ch, &$out_response_headers)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   627  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   627  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   628  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_array'        	;1
		3   628  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		4   628  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		5   628  JMPZ/43                   ?0        $5                   ?14                 	;0	>>14
		6   629  FETCH_STATIC_PROP_W/174   $6=       3:'_curlHeadersRef'  ?513                	;0
		7   629  ASSIGN_REF/39             ?2        $6                   16?1                	;0
		8   630  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'curl_setopt'     	;3
		9   630  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		10  630  FETCH_CONSTANT/99         #8=       ?0                   6:'CURLOPT_HEADERFUNCTION'	;16
		11  630  SEND_VAL_EX/116           ?96       #8                   ?2                  	;0
		12  630  SEND_VAL_EX/116           ?112      9:array (
  0 => 'DropboxClient',
  1 => '_curlHeaderCallback',
) ?3                  	;0
		13  630  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
		14  632  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'curl_exec'      	;1	<<5
		15  632  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		16  632  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		17  632  ASSIGN/38                 ?6        16?2                 $10                 	;0
		18  633  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'curl_errno'     	;1
		19  633  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		20  633  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		21  633  ASSIGN/38                 ?8        16?3                 $12                 	;0
		22  634  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'curl_error'     	;1
		23  634  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		24  634  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		25  634  ASSIGN/38                 ?10       16?4                 $14                 	;0
		26  635  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'curl_close'     	;1
		27  635  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		28  635  DO_FCALL_BY_NAME/131      ?11       ?0                   ?0                  	;0
		29  636  JMPNZ_EX/47               #17=      16?3                 ?32                 	;0	>>32
		30  636  IS_IDENTICAL/15           #18=      16?2                 18:false            	;0
		31  636  BOOL/52                   #17=      #18                  ?0                  	;0
		32  636  JMPZ/43                   ?0        #17                  ?41                 	;0	>>41	<<29
		33  637  NEW/68                    $19=      19:'DropboxException' ?224                	;1
		34  637  ROPE_INIT/54              #21=      ?0                   21:'cURL-Error ('   	;4
		35  637  ROPE_ADD/55               #21=      #21                  16?3                	;1
		36  637  ROPE_ADD/55               #21=      #21                  22:'): '            	;2
		37  637  ROPE_END/56               #20=      #21                  16?4                	;3
		38  637  SEND_VAL_EX/116           ?80       #20                  ?1                  	;0
		39  637  DO_FCALL/60               ?18       ?8                   ?0                  	;0
		40  637  THROW/108                 ?0        $19                  ?0                  	;0
		41  640  RETURN_BY_REF/111         ?0        16?2                 ?0                  	;0	<<32
		42  641  RETURN_BY_REF/111         ?0        23:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * @param $url string
	 * @param $params
	 * @param string $content
	 * @param int $bearer_token
	 *
	 * @return resource
	 */
	private function createRequestContext($url, $params, &$content, $bearer_token)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   651  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   651  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   651  RECV_INIT/64              16?2=     ?3                   0:''                	;0
		3   651  RECV_INIT/64              16?3=     ?4                   1:-1                	;0
		4   652  IS_IDENTICAL/15           #5=       16?3                 2:-1                	;0
		5   652  JMPZ/43                   ?0        #5                   ?9                  	;0	>>9
		6   653  FETCH_OBJ_R/82            $6=       ?1668346576          3:'accessToken'     	;0
		7   653  FETCH_DIM_R/81            $7=       $6                   4:'t'               	;0
		8   653  ASSIGN/38                 ?3        16?3                 $7                  	;0
		9   656  ASSIGN/38                 ?4        16?4                 5:array (
  'method' => 'POST',
  'header' => '',
  'content' => '',
)	;0	<<5
		10  658  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'strpos'          	;2
		11  658  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		12  658  SEND_VAL_EX/116           ?96       8:'/oauth2/token'    ?2                  	;0
		13  658  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		14  658  IS_NOT_IDENTICAL/16       #11=      $10                  9:false             	;0
		15  658  JMPZ/43                   ?0        #11                  ?24                 	;0	>>24
		16  659  ASSIGN_CONCAT/30          ?7        16?4                 10:'header'         	;147
		17  659  OP_DATA/137               ?0        11:'Content-Type: application/x-www-form-urlencoded
' ?0                  	;0
		18  660  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'http_build_query'	;1
		19  660  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		20  660  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		21  660  ASSIGN_DIM/147            ?8        16?4                 12:'content'        	;0
		22  660  OP_DATA/137               ?0        $14                  ?0                  	;0
		23  660  JMP/42                    ?0        ?72                  ?0                  	;0	>>72
		24  663  ISSET_ISEMPTY_CV/197      #15=      16?3                 ?0                  	;16777216	<<15
		25  663  BOOL_NOT/13               #16=      #15                  ?0                  	;0
		26  663  JMPZ/43                   ?0        #16                  ?32                 	;0	>>32
		27  664  ROPE_INIT/54              #19=      ?0                   16:'Authorization: Bearer '	;3
		28  664  ROPE_ADD/55               #19=      #19                  16?3                	;1
		29  664  ROPE_END/56               #18=      #19                  17:'
'             	;2
		30  664  ASSIGN_CONCAT/30          ?12       16?4                 15:'header'         	;147
		31  664  OP_DATA/137               ?0        #18                  ?0                  	;0
		32  667  ISSET_ISEMPTY_CV/197      #21=      16?2                 ?0                  	;16777216	<<26
		33  667  JMPZ_EX/46                #21=      #21                  ?40                 	;0	>>40
		34  667  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'strpos'         	;2
		35  667  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		36  667  SEND_VAL_EX/116           ?96       20:'https://content.dropboxapi.com/' ?2                  	;0
		37  667  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		38  667  IS_IDENTICAL/15           #23=      $22                  21:false            	;0
		39  667  BOOL/52                   #21=      #23                  ?0                  	;0
		40  667  JMPZ/43                   ?0        #21                  ?52                 	;0	>>52	<<33
		41  668  ISSET_ISEMPTY_CV/197      #24=      16?1                 ?0                  	;16777216
		42  668  BOOL_NOT/13               #25=      #24                  ?0                  	;0
		43  668  JMPZ/43                   ?0        #25                  ?51                 	;0	>>51
		44  669  ASSIGN_CONCAT/30          ?21       16?4                 22:'header'         	;147
		45  669  OP_DATA/137               ?0        23:'Content-Type: application/json
' ?0                  	;0
		46  670  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'json_encode'    	;1
		47  670  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		48  670  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		49  670  ASSIGN_DIM/147            ?22       16?4                 24:'content'        	;0
		50  670  OP_DATA/137               ?0        $28                  ?0                  	;0
		51  670  JMP/42                    ?0        ?72                  ?0                  	;0	>>72	<<43
		52  673  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'str_replace'    	;3	<<40
		53  673  SEND_VAL_EX/116           ?80       30:'"'               ?1                  	;0
		54  673  SEND_VAL_EX/116           ?96       31:'"'               ?2                  	;0
		55  673  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'json_encode'    	;1
		56  673  CAST/21                   #30=      16?1                 ?0                  	;8
		57  673  SEND_VAL_EX/116           ?80       #30                  ?1                  	;0
		58  673  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		59  673  SEND_VAR_NO_REF_EX/50     ?112      $31                  ?3                  	;0
		60  673  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
		61  673  CONCAT/8                  #33=      34:'Dropbox-API-Arg: ' $32                 	;0
		62  673  CONCAT/8                  #34=      #33                  35:'
'             	;0
		63  673  ASSIGN_CONCAT/30          ?24       16?4                 27:'header'         	;147
		64  673  OP_DATA/137               ?0        #34                  ?0                  	;0
		65  674  ASSIGN_CONCAT/30          ?30       16?4                 36:'header'         	;147
		66  674  OP_DATA/137               ?0        37:'Content-Type: application/octet-stream
' ?0                  	;0
		67  675  ISSET_ISEMPTY_CV/197      #36=      16?2                 ?0                  	;16777216
		68  675  BOOL_NOT/13               #37=      #36                  ?0                  	;0
		69  675  JMPZ/43                   ?0        #37                  ?72                 	;0	>>72
		70  676  ASSIGN_DIM/147            ?33       16?4                 38:'content'        	;0
		71  676  OP_DATA/137               ?0        16?2                 ?0                  	;0
		72  682  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'strpos'         	;2	<<23,51,69
		73  682  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		74  682  SEND_VAL_EX/116           ?96       41:'https://content.dropboxapi.com/' ?2                  	;0
		75  682  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
		76  682  IS_IDENTICAL/15           #40=      $39                  42:false            	;0
		77  682  JMPZ/43                   ?0        #40                  ?85                 	;0	>>85
		78  683  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'strlen'         	;1
		79  683  FETCH_DIM_FUNC_ARG/93     $42=      16?4                 46:'content'        	;1
		80  683  SEND_VAR_EX/66            ?80       $42                  ?1                  	;0
		81  683  DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
		82  683  CONCAT/8                  #44=      47:'Content-Length: ' $43                 	;0
		83  683  ASSIGN_CONCAT/30          ?36       16?4                 43:'header'         	;147
		84  683  OP_DATA/137               ?0        #44                  ?0                  	;0
		85  686  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'trim'           	;1	<<77
		86  686  FETCH_DIM_FUNC_ARG/93     $46=      16?4                 51:'header'         	;1
		87  686  SEND_VAR_EX/66            ?80       $46                  ?1                  	;0
		88  686  DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
		89  686  ASSIGN_DIM/147            ?40       16?4                 48:'header'         	;0
		90  686  OP_DATA/137               ?0        $47                  ?0                  	;0
		91  689  ASSIGN_DIM/147            ?43       16?4                 52:'ignore_errors'  	;0
		92  689  OP_DATA/137               ?0        53:true              ?0                  	;0
		93  693  FETCH_OBJ_R/82            $49=      ?0                   54:'useCurl'        	;0
		94  693  JMPZ/43                   ?0        $49                  ?101                	;0	>>101
		95  693  INIT_METHOD_CALL/112      ?0        ?2670193984          55:'createCurl'     	;2
		96  693  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		97  693  SEND_VAR/117              ?96       16?4                 ?2                  	;0
		98  693  DO_FCALL/60               $50=      ?0                   ?0                  	;0
		99  693  QM_ASSIGN/22              #51=      $50                  ?0                  	;0
		100 693  JMP/42                    ?0        ?106                 ?0                  	;0	>>106
		101 693  INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'stream_context_create'	;1	<<94
		102 693  INIT_ARRAY/71             #52=      16?4                 59:'http'           	;6
		103 693  SEND_VAL_EX/116           ?80       #52                  ?1                  	;0
		104 693  DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
		105 693  QM_ASSIGN/22              #51=      $53                  ?0                  	;0
		106 693  RETURN/62                 ?0        #51                  ?0                  	;0	<<100
		107 694  NOP/0                     ?0        60:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * @param object $resp
	 * @param string $context
	 *
	 * @return object
	 * @throws DropboxException
	 */
	static private function checkForError($resp, $context)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   704  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   704  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   707  ISSET_ISEMPTY_PROP_OBJ/148 #2=       16?0                 1:'error'           	;16777216
		3   707  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		4   707  JMPZ/43                   ?0        #3                   ?10                 	;0	>>10
		5   708  NEW/68                    $4=       2:'DropboxException' ?128                	;2
		6   708  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		7   708  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		8   708  DO_FCALL/60               ?3        ?8                   ?0                  	;0
		9   708  THROW/108                 ?0        $4                   ?0                  	;0
		10  711  RETURN/62                 ?0        16?0                 ?0                  	;0	<<4
		11  712  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * @param string $path
	 * @param array $params
	 * @param bool $content_call
	 * @param string $content
	 *
	 * @return object
	 * @throws DropboxException
	 */
	private function doSingleCall($path, $params, $content_call, &$content)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   724  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   724  RECV_INIT/64              16?1=     ?2                   0:array (
)         	;0
		2   724  RECV_INIT/64              16?2=     ?3                   1:false             	;0
		3   724  RECV_INIT/64              16?3=     ?4                   2:NULL              	;0
		4   725  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 3:'cleanUrl'        	;1
		5   725  JMPZ/43                   ?0        16?2                 ?8                  	;0	>>8
		6   725  QM_ASSIGN/22              #8=       5:'https://content.dropboxapi.com/' ?0                  	;0
		7   725  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		8   725  QM_ASSIGN/22              #8=       6:'https://api.dropboxapi.com/' ?0                  	;0	<<5
		9   725  CONCAT/8                  #9=       #8                   16?0                	;0	<<7
		10  725  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
		11  725  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		12  725  ASSIGN/38                 ?3        16?4                 $10                 	;0
		13  726  INIT_METHOD_CALL/112      ?0        ?513                 7:'createRequestContext'	;3
		14  726  SEND_VAR/117              ?80       16?4                 ?1                  	;0
		15  726  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		16  726  SEND_REF/67               ?112      16?3                 ?3                  	;0
		17  726  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		18  726  ASSIGN/38                 ?5        16?5                 $12                 	;0
		19  728  FETCH_OBJ_R/82            $14=      ?1668356368          9:'useCurl'         	;0
		20  728  JMPZ/43                   ?0        $14                  ?26                 	;0	>>26
		21  728  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 10:'execCurlAndClose'	;1
		22  728  SEND_VAR/117              ?80       16?5                 ?1                  	;0
		23  728  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		24  728  QM_ASSIGN/22              #16=      $15                  ?0                  	;0
		25  728  JMP/42                    ?0        ?32                  ?0                  	;0	>>32
		26  728  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'file_get_contents'	;3	<<20
		27  728  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		28  728  SEND_VAL_EX/116           ?96       14:false             ?2                  	;0
		29  728  SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
		30  728  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		31  728  QM_ASSIGN/22              #16=      $17                  ?0                  	;0
		32  728  ASSIGN/38                 ?10       16?6                 #16                 	;0	<<25
		33  729  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'json_decode'    	;1
		34  729  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		35  729  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		36  729  ASSIGN/38                 ?12       16?7                 $19                 	;0
		37  731  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'is_null'        	;1
		38  731  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		39  731  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		40  731  JMPZ_EX/46                #22=      $21                  ?42                 	;0	>>42
		41  731  BOOL/52                   #22=      16?2                 ?0                  	;0
		42  731  JMPZ/43                   ?0        #22                  ?44                 	;0	>>44	<<40
		43  732  RETURN/62                 ?0        19:NULL              ?0                  	;0
		44  735  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'is_null'        	;1	<<42
		45  735  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		46  735  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		47  735  JMPZ_EX/46                #24=      $23                  ?51                 	;0	>>51
		48  735  ISSET_ISEMPTY_CV/197      #25=      16?6                 ?0                  	;16777216
		49  735  BOOL_NOT/13               #26=      #25                  ?0                  	;0
		50  735  BOOL/52                   #24=      #26                  ?0                  	;0
		51  735  JMPZ/43                   ?0        #24                  ?63                 	;0	>>63	<<47
		52  736  NEW/68                    $27=      22:'DropboxException' ?320                	;1
		53  736  ROPE_INIT/54              #29=      ?0                   24:'apiCall('       	;7
		54  736  ROPE_ADD/55               #29=      #29                  16?0                	;1
		55  736  ROPE_ADD/55               #29=      #29                  25:') failed: '     	;2
		56  736  ROPE_ADD/55               #29=      #29                  16?6                	;3
		57  736  ROPE_ADD/55               #29=      #29                  26:' (URL was '     	;4
		58  736  ROPE_ADD/55               #29=      #29                  16?4                	;5
		59  736  ROPE_END/56               #28=      #29                  27:')'              	;6
		60  736  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
		61  736  DO_FCALL/60               ?25       ?8                   ?0                  	;0
		62  736  THROW/108                 ?0        $27                  ?0                  	;0
		63  738  IS_IDENTICAL/15           #34=      16?7                 28:false            	;0	<<51
		64  738  JMPNZ_EX/47               #34=      #34                  ?69                 	;0	>>69
		65  738  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'is_null'        	;1
		66  738  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		67  738  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
		68  738  BOOL/52                   #34=      $35                  ?0                  	;0
		69  738  JMPZ_EX/46                #34=      #34                  ?73                 	;0	>>73	<<64
		70  738  ISSET_ISEMPTY_CV/197      #36=      16?6                 ?0                  	;16777216
		71  738  BOOL_NOT/13               #37=      #36                  ?0                  	;0
		72  738  BOOL/52                   #34=      #37                  ?0                  	;0
		73  738  JMPZ_EX/46                #34=      #34                  ?76                 	;0	>>76	<<69
		74  738  BOOL_NOT/13               #38=      16?2                 ?0                  	;0
		75  738  BOOL/52                   #34=      #38                  ?0                  	;0
		76  738  JMPZ/43                   ?0        #34                  ?85                 	;0	>>85	<<73
		77  739  NEW/68                    $39=      31:'DropboxException' ?224                	;1
		78  739  ROPE_INIT/54              #41=      ?0                   33:'Error apiCall(' 	;4
		79  739  ROPE_ADD/55               #41=      #41                  16?0                	;1
		80  739  ROPE_ADD/55               #41=      #41                  34:'): '            	;2
		81  739  ROPE_END/56               #40=      #41                  16?6                	;3
		82  739  SEND_VAL_EX/116           ?80       #40                  ?1                  	;0
		83  739  DO_FCALL/60               ?35       ?8                   ?0                  	;0
		84  739  THROW/108                 ?0        $39                  ?0                  	;0
		85  742  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 35:'checkForError'  	;2	<<76
		86  742  SEND_VAR/117              ?80       16?7                 ?1                  	;0
		87  742  ROPE_INIT/54              #45=      ?0                   37:'apiCall('       	;3
		88  742  ROPE_ADD/55               #45=      #45                  16?0                	;1
		89  742  ROPE_END/56               #44=      #45                  38:')'              	;2
		90  742  SEND_VAL/65               ?96       #44                  ?2                  	;0
		91  742  DO_FCALL/60               $47=      ?0                   ?0                  	;0
		92  742  RETURN/62                 ?0        $47                  ?0                  	;0
		93  743  NOP/0                     ?0        39:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * @param object $target
	 * @param object $part
	 */
	static private function mergeContinue(&$target, $part)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   750  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   750  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   751  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'array_keys'      	;1
		3   751  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'get_object_vars' 	;1
		4   751  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   751  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		6   751  SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
		7   751  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		8   751  ASSIGN/38                 ?2        16?2                 $5                  	;0
		9   752  FE_RESET_R/77             $7=       16?2                 ?35                 	;0
		10  752  FE_FETCH_R/78             ?0        $7                   16?3                	;35	>>35	<<34
		11  753  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'is_array'        	;1
		12  753  FETCH_OBJ_FUNC_ARG/94     $8=       16?0                 16?3                	;1
		13  753  SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
		14  753  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		15  753  JMPZ_EX/46                #10=      $9                   ?19                 	;0	>>19
		16  753  ISSET_ISEMPTY_PROP_OBJ/148 #11=      16?1                 16?3                	;16777216
		17  753  BOOL_NOT/13               #12=      #11                  ?0                  	;0
		18  753  BOOL/52                   #10=      #12                  ?0                  	;0
		19  753  JMPZ_EX/46                #10=      #10                  ?25                 	;0	>>25	<<15
		20  753  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'is_array'        	;1
		21  753  FETCH_OBJ_FUNC_ARG/94     $13=      16?1                 16?3                	;1
		22  753  SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
		23  753  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		24  753  BOOL/52                   #10=      $14                  ?0                  	;0
		25  753  JMPZ/43                   ?0        #10                  ?34                 	;0	>>34	<<19
		26  754  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'array_merge'     	;2
		27  754  FETCH_OBJ_FUNC_ARG/94     $16=      16?0                 16?3                	;1
		28  754  SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
		29  754  FETCH_OBJ_FUNC_ARG/94     $17=      16?1                 16?3                	;2
		30  754  SEND_VAR_EX/66            ?96       $17                  ?2                  	;0
		31  754  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		32  754  ASSIGN_OBJ/136            ?11       16?0                 16?3                	;0
		33  754  OP_DATA/137               ?0        $18                  ?0                  	;0
		34  754  JMP/42                    ?0        ?10                  ?0                  	;0	>>10	<<25
		35  754  FE_FREE/127               ?0        $7                   ?0                  	;0	<<9
		36  757  FETCH_OBJ_R/82            $20=      16?1                 11:'has_more'       	;0
		37  757  ASSIGN_OBJ/136            ?15       16?0                 10:'has_more'       	;0
		38  757  OP_DATA/137               ?0        $20                  ?0                  	;0
		39  758  FETCH_OBJ_R/82            $22=      16?1                 13:'cursor'         	;0
		40  758  ASSIGN_OBJ/136            ?17       16?0                 12:'cursor'         	;0
		41  758  OP_DATA/137               ?0        $22                  ?0                  	;0
		42  759  NOP/0                     ?0        14:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * @param string $path
	 * @param array $params
	 * @param bool $content_call
	 * @param string $content
	 *
	 * @return object
	 * @throws DropboxException
	 */
	private function apiCall($path, $params, $content_call, &$content)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   772  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   772  RECV_INIT/64              16?1=     ?2                   0:array (
)         	;0
		2   772  RECV_INIT/64              16?2=     ?3                   1:false             	;0
		3   772  RECV_INIT/64              16?3=     ?4                   2:NULL              	;0
		4   775  INIT_METHOD_CALL/112      ?0        ?2670194048          3:'doSingleCall'    	;4
		5   775  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		6   775  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		7   775  SEND_VAR/117              ?112      16?2                 ?3                  	;0
		8   775  SEND_REF/67               ?128      16?3                 ?4                  	;0
		9   775  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		10  775  ASSIGN/38                 ?1        16?4                 $5                  	;0
		11  778  ISSET_ISEMPTY_PROP_OBJ/148 #7=       16?4                 5:'has_more'        	;16777216
		12  778  BOOL_NOT/13               #8=       #7                   ?0                  	;0
		13  778  JMPZ_EX/46                #8=       #8                   ?20                 	;0	>>20
		14  778  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'strpos'          	;2
		15  778  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		16  778  SEND_VAL_EX/116           ?96       8:'/continue'        ?2                  	;0
		17  778  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		18  778  IS_IDENTICAL/15           #10=      $9                   9:false             	;0
		19  778  BOOL/52                   #8=       #10                  ?0                  	;0
		20  778  JMPZ/43                   ?0        #8                   ?22                 	;0	>>22	<<13
		21  779  ASSIGN_CONCAT/30          ?6        16?0                 10:'/continue'      	;0
		22  782  JMP/42                    ?0        ?55                  ?0                  	;0	>>55	<<20
		23  783  ISSET_ISEMPTY_PROP_OBJ/148 #12=      16?4                 11:'cursor'         	;16777216	<<60
		24  783  JMPZ/43                   ?0        #12                  ?32                 	;0	>>32
		25  784  NEW/68                    $13=      12:'DropboxException' ?192                	;1
		26  784  ROPE_INIT/54              #15=      ?0                   14:'Unexpected response from '	;3
		27  784  ROPE_ADD/55               #15=      #15                  16?0                	;1
		28  784  ROPE_END/56               #14=      #15                  15:': has_more without cursor!'	;2
		29  784  SEND_VAL_EX/116           ?80       #14                  ?1                  	;0
		30  784  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		31  784  THROW/108                 ?0        $13                  ?0                  	;0
		32  786  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'is_string'      	;1	<<24
		33  786  FETCH_OBJ_FUNC_ARG/94     $19=      16?4                 19:'cursor'         	;1
		34  786  SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
		35  786  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		36  786  JMPZ/43                   ?0        $20                  ?40                 	;0	>>40
		37  786  FETCH_OBJ_R/82            $21=      16?4                 20:'cursor'         	;0
		38  786  QM_ASSIGN/22              #22=      $21                  ?0                  	;0
		39  786  JMP/42                    ?0        ?43                  ?0                  	;0	>>43
		40  786  FETCH_OBJ_R/82            $23=      16?4                 21:'cursor'         	;0	<<36
		41  786  FETCH_OBJ_R/82            $24=      $23                  22:'value'          	;0
		42  786  QM_ASSIGN/22              #22=      $24                  ?0                  	;0
		43  786  ASSIGN_DIM/147            ?13       16?1                 16:'cursor'         	;0	<<39
		44  786  OP_DATA/137               ?0        #22                  ?0                  	;0
		45  787  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 23:'mergeContinue'  	;2
		46  787  SEND_REF/67               ?80       16?4                 ?1                  	;0
		47  787  INIT_METHOD_CALL/112      ?0        ?1667634944          25:'doSingleCall'   	;4
		48  787  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		49  787  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		50  787  SEND_VAR/117              ?112      16?2                 ?3                  	;0
		51  787  SEND_REF/67               ?128      16?3                 ?4                  	;0
		52  787  DO_FCALL/60               $25=      ?0                   ?0                  	;0
		53  787  SEND_VAR/117              ?96       $25                  ?2                  	;0
		54  787  DO_FCALL/60               ?21       ?0                   ?0                  	;0
		55  782  BOOL_NOT/13               #27=      16?2                 ?0                  	;0	<<22
		56  782  JMPZ_EX/46                #27=      #27                  ?60                 	;0	>>60
		57  782  ISSET_ISEMPTY_PROP_OBJ/148 #28=      16?4                 27:'has_more'       	;16777216
		58  782  BOOL_NOT/13               #29=      #28                  ?0                  	;0
		59  782  BOOL/52                   #27=      #29                  ?0                  	;0
		60  782  JMPNZ/44                  ?0        #27                  ?23                 	;0	>>23	<<56
		61  790  RETURN/62                 ?0        16?4                 ?0                  	;0
		62  791  NOP/0                     ?0        28:NULL              ?0                  	;4294967295
		*/
	}

	static private function getMetaFromHeaders(&$header_array, $throw_on_error)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   795  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   795  RECV_INIT/64              16?1=     ?2                   0:false             	;0
		2   798  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'json_decode'     	;1
		3   798  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'substr'          	;2
		4   798  BEGIN_SILENCE/57          #3=       ?0                   ?0                  	;0
		5   798  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'array_shift'     	;1
		6   798  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'array_filter'    	;2
		7   798  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		8   798  DECLARE_LAMBDA_FUNCTION/153 #4=       9:'' . "\0" . '{closure}/home/xui_main/includes/libs/Dropbox.php0x7f8d65064f92' ?0                  	;0
		9   800  SEND_VAL_EX/116           ?96       #4                   ?2                  	;0
		10  800  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		11  800  SEND_VAR_NO_REF_EX/50     ?80       $5                   ?1                  	;0
		12  800  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		13  800  END_SILENCE/58            ?0        #3                   ?0                  	;0
		14  800  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		15  800  SEND_VAL_EX/116           ?96       10:20                ?2                  	;0
		16  800  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		17  800  SEND_VAR_NO_REF_EX/50     ?80       $7                   ?1                  	;0
		18  800  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		19  800  ASSIGN/38                 ?6        16?2                 $8                  	;0
		20  801  JMPZ_EX/46                #10=      16?1                 ?29                 	;0	>>29
		21  801  ISSET_ISEMPTY_CV/197      #11=      16?2                 ?0                  	;16777216
		22  801  JMPNZ_EX/47               #11=      #11                  ?28                 	;0	>>28
		23  801  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'is_object'      	;1
		24  801  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		25  801  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		26  801  BOOL_NOT/13               #13=      $12                  ?0                  	;0
		27  801  BOOL/52                   #11=      #13                  ?0                  	;0
		28  801  BOOL/52                   #10=      #11                  ?0                  	;0	<<22
		29  801  JMPZ/43                   ?0        #10                  ?39                 	;0	>>39	<<20
		30  802  NEW/68                    $14=      13:'DropboxException' ?256                	;1
		31  802  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'print_r'        	;2
		32  802  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		33  802  SEND_VAL_EX/116           ?96       17:true              ?2                  	;0
		34  802  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		35  802  CONCAT/8                  #16=      18:'Could not retrieve meta data from header data: ' $15                 	;0
		36  802  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
		37  802  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		38  802  THROW/108                 ?0        $14                  ?0                  	;0
		39  804  JMPZ/43                   ?0        16?1                 ?44                 	;0	>>44	<<29
		40  805  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 19:'checkForError'  	;2
		41  805  SEND_VAR/117              ?80       16?2                 ?1                  	;0
		42  805  SEND_VAL/65               ?96       21:'getMetaFromHeaders' ?2                  	;0
		43  805  DO_FCALL/60               ?15       ?0                   ?0                  	;0
		44  808  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 22:'compatMeta'     	;1	<<39
		45  808  SEND_VAR/117              ?80       16?2                 ?1                  	;0
		46  808  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		47  808  RETURN/62                 ?0        $19                  ?0                  	;0
		48  809  NOP/0                     ?0        24:NULL              ?0                  	;4294967295
		*/
	}

	static private function toPath($file_or_path)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   811  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   812  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_object'       	;1
		2   812  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   812  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   812  JMPZ/43                   ?0        $1                   ?7                  	;0	>>7
		5   813  FETCH_OBJ_R/82            $2=       16?0                 2:'path'            	;0
		6   813  ASSIGN/38                 ?2        16?0                 $2                  	;0
		7   815  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'trim'            	;2	<<4
		8   815  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   815  SEND_VAL_EX/116           ?96       5:'/'                ?2                  	;0
		10  815  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		11  815  CONCAT/8                  #5=       6:'/'                $4                  	;0
		12  815  ASSIGN/38                 ?5        16?0                 #5                  	;0
		13  816  IS_EQUAL/17               #7=       16?0                 7:'/'               	;0
		14  816  JMPZ/43                   ?0        #7                   ?16                 	;0	>>16
		15  817  ASSIGN/38                 ?7        16?0                 8:''                	;0
		16  820  RETURN/62                 ?0        16?0                 ?0                  	;0	<<14
		17  821  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static private function cleanUrl($url)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   824  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   825  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'substr'          	;3
		2   825  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   825  SEND_VAL_EX/116           ?96       2:0                  ?2                  	;0
		4   825  SEND_VAL_EX/116           ?112      3:8                  ?3                  	;0
		5   825  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6   825  ASSIGN/38                 ?1        16?1                 $2                  	;0
		7   826  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'str_replace'     	;3
		8   826  SEND_VAL_EX/116           ?80       6:'//'               ?1                  	;0
		9   826  SEND_VAL_EX/116           ?96       7:'/'                ?2                  	;0
		10  826  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'str_replace'     	;3
		11  826  SEND_VAL_EX/116           ?80       10:'\\'              ?1                  	;0
		12  826  SEND_VAL_EX/116           ?96       11:'/'               ?2                  	;0
		13  826  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'substr'         	;2
		14  826  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		15  826  SEND_VAL_EX/116           ?96       14:8                 ?2                  	;0
		16  826  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		17  826  SEND_VAR_NO_REF_EX/50     ?112      $4                   ?3                  	;0
		18  826  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		19  826  SEND_VAR_NO_REF_EX/50     ?112      $5                   ?3                  	;0
		20  826  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		21  826  ASSIGN/38                 ?5        16?0                 $6                  	;0
		22  827  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'rawurlencode'   	;1
		23  827  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		24  827  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		25  827  ASSIGN/38                 ?7        16?0                 $8                  	;0
		26  828  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'str_replace'    	;3
		27  828  SEND_VAL_EX/116           ?80       19:'%2F'             ?1                  	;0
		28  828  SEND_VAL_EX/116           ?96       20:'/'               ?2                  	;0
		29  828  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		30  828  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		31  828  ASSIGN/38                 ?9        16?0                 $10                 	;0
		32  830  CONCAT/8                  #12=      16?1                 16?0                	;0
		33  830  RETURN/62                 ?0        #12                  ?0                  	;0
		34  831  NOP/0                     ?0        21:NULL              ?0                  	;4294967295
		*/
	}

	static public function contentHashStream($stream, $chunksize)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   833  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   833  RECV_INIT/64              16?1=     ?2                   0:8192              	;0
		2   834  BIND_STATIC/183           ?0        16?2                 1:'BLOCK_SIZE'      	;1
		3   835  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'hash_init'       	;1
		4   835  SEND_VAL_EX/116           ?80       4:'sha256'           ?1                  	;0
		5   835  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		6   835  ASSIGN/38                 ?1        16?3                 $10                 	;0
		7   836  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'hash_init'       	;1
		8   836  SEND_VAL_EX/116           ?80       7:'sha256'           ?1                  	;0
		9   836  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		10  836  ASSIGN/38                 ?3        16?4                 $12                 	;0
		11  837  ASSIGN/38                 ?4        16?5                 8:1                 	;0
		12  838  ASSIGN/38                 ?5        16?6                 9:0                 	;0
		13  839  JMP/42                    ?0        ?53                  ?0                  	;0	>>53
		14  840  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'min'            	;2	<<57
		15  840  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		16  840  SUB/2                     #16=      16?2                 16?6                	;0
		17  840  SEND_VAL_EX/116           ?96       #16                  ?2                  	;0
		18  840  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		19  840  ASSIGN/38                 ?8        16?7                 $17                 	;0
		20  841  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'fread'          	;2
		21  841  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		22  841  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
		23  841  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		24  841  ASSIGN/38                 ?10       16?8                 $19                 	;0
		25  842  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'strlen'         	;1
		26  842  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		27  842  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		28  842  IS_EQUAL/17               #22=      $21                  16:0                	;0
		29  842  JMPZ/43                   ?0        #22                  ?31                 	;0	>>31
		30  843  BRK/254                   ?0        ?58                  0:1                 	;0
		31  845  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'hash_update'    	;2	<<29
		32  845  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		33  845  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
		34  845  DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
		35  846  ASSIGN_ADD/23             ?14       16?6                 16?7                	;0
		36  847  IS_EQUAL/17               #25=      16?6                 16?2                	;0
		37  847  JMPZ/43                   ?0        #25                  ?53                 	;0	>>53
		38  848  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'hash_final'     	;2
		39  848  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		40  848  SEND_VAL_EX/116           ?96       21:true              ?2                  	;0
		41  848  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		42  848  ASSIGN/38                 ?17       16?9                 $26                 	;0
		43  849  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'hash_update'    	;2
		44  849  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		45  849  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
		46  849  DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
		47  850  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'hash_init'      	;1
		48  850  SEND_VAL_EX/116           ?80       26:'sha256'          ?1                  	;0
		49  850  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
		50  850  ASSIGN/38                 ?20       16?4                 $29                 	;0
		51  851  PRE_INC/34                ?21       16?5                 ?0                  	;0
		52  852  ASSIGN/38                 ?22       16?6                 27:0                	;0
		53  839  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'feof'           	;1	<<13,37
		54  839  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		55  839  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
		56  839  BOOL_NOT/13               #34=      $33                  ?0                  	;0
		57  839  JMPNZ/44                  ?0        #34                  ?14                 	;0	>>14
		58  856  IS_SMALLER/19             #35=      30:0                 16?6                	;0
		59  856  JMPZ/43                   ?0        #35                  ?69                 	;0	>>69
		60  857  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'hash_final'     	;2
		61  857  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		62  857  SEND_VAL_EX/116           ?96       33:true              ?2                  	;0
		63  857  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
		64  857  ASSIGN/38                 ?27       16?9                 $36                 	;0
		65  858  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'hash_update'    	;2
		66  858  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		67  858  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
		68  858  DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
		69  861  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'hash_final'     	;1	<<59
		70  861  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		71  861  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
		72  861  RETURN/62                 ?0        $39                  ?0                  	;0
		73  862  NOP/0                     ?0        38:NULL              ?0                  	;4294967295
		*/
	}

	static public function contentHashFile($localFileName)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   864  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   865  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'fopen'           	;2
		2   865  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   865  SEND_VAL_EX/116           ?96       2:'r'                ?2                  	;0
		4   865  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		5   865  ASSIGN/38                 ?1        16?1                 $3                  	;0
		6   866  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 3:'contentHashStream'	;1
		7   866  SEND_VAR/117              ?80       16?1                 ?1                  	;0
		8   866  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		9   866  ASSIGN/38                 ?3        16?2                 $5                  	;0
		10  867  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'fclose'          	;1
		11  867  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		12  867  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
		13  869  RETURN/62                 ?0        16?2                 ?0                  	;0
		14  870  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * @deprecated
	 * @throws DropboxException
	 */
	public function GetRequestToken()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   878  NEW/68                    $0=       0:'DropboxException' ?96                 	;1
		1   878  SEND_VAL_EX/116           ?80       2:'GetRequestToken() has been removed with v2 API. Request tokens do not exist in OAuth2 anymore.' ?1                  	;0
		2   878  DO_FCALL/60               ?1        ?8                   ?0                  	;0
		3   878  THROW/108                 ?0        $0                   ?0                  	;0
		4   879  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * @deprecated
	 * @throws DropboxException
	 */
	public function GetAccessToken()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   887  NEW/68                    $0=       0:'DropboxException' ?96                 	;1
		1   887  SEND_VAL_EX/116           ?80       2:'GetAccessToken() has been removed with v2 API. Use GetBearerToken() instead!' ?1                  	;0
		2   887  DO_FCALL/60               ?1        ?8                   ?0                  	;0
		3   887  THROW/108                 ?0        $0                   ?0                  	;0
		4   888  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}
}

class DropboxException
{
	private $tag;

	public function __construct($resp, $context)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   895  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   895  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
		2   896  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_null'         	;1
		3   896  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   896  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		5   896  JMPZ/43                   ?0        $3                   ?19                 	;0	>>19
		6   897  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'error_get_last'  	;0
		7   897  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		8   897  ASSIGN/38                 ?2        16?2                 $4                  	;0
		9   898  FETCH_DIM_R/81            $7=       16?2                 7:'message'         	;0
		10  898  ASSIGN_OBJ/136            ?3        ?2670193808          6:'message'         	;0
		11  898  OP_DATA/137               ?0        $7                   ?0                  	;0
		12  899  FETCH_DIM_R/81            $9=       16?2                 9:'file'            	;0
		13  899  ASSIGN_OBJ/136            ?5        ?2670193808          8:'file'            	;0
		14  899  OP_DATA/137               ?0        $9                   ?0                  	;0
		15  900  FETCH_DIM_R/81            $11=      16?2                 11:'line'           	;0
		16  900  ASSIGN_OBJ/136            ?7        ?2670193808          10:'line'           	;0
		17  900  OP_DATA/137               ?0        $11                  ?0                  	;0
		18  900  JMP/42                    ?0        ?67                  ?0                  	;0	>>67
		19  901  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'is_object'      	;1	<<5
		20  901  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		21  901  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		22  901  JMPZ_EX/46                #13=      $12                  ?25                 	;0	>>25
		23  901  ISSET_ISEMPTY_PROP_OBJ/148 #14=      16?0                 14:'error'          	;33554432
		24  901  BOOL/52                   #13=      #14                  ?0                  	;0
		25  901  JMPZ/43                   ?0        #13                  ?58                 	;0	>>58	<<22
		26  902  ISSET_ISEMPTY_PROP_OBJ/148 #16=      16?0                 16:'error_description'	;16777216
		27  902  JMPZ/43                   ?0        #16                  ?40                 	;0	>>40
		28  902  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'json_encode'    	;1
		29  902  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		30  902  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		31  902  JMPZ/43                   ?0        16?1                 ?36                 	;0	>>36
		32  902  NOP/0                     ?0        ?0                   ?0                  	;0
		33  902  FAST_CONCAT/53            #18=      19:', in '           16?1                	;0
		34  902  QM_ASSIGN/22              #19=      #18                  ?0                  	;0
		35  902  JMP/42                    ?0        ?37                  ?0                  	;0	>>37
		36  902  QM_ASSIGN/22              #19=      20:''                ?0                  	;0	<<31
		37  902  CONCAT/8                  #20=      $17                  #19                 	;0	<<35
		38  902  QM_ASSIGN/22              #21=      #20                  ?0                  	;0
		39  902  JMP/42                    ?0        ?42                  ?0                  	;0	>>42
		40  902  FETCH_OBJ_R/82            $22=      16?0                 21:'error_description'	;0	<<27
		41  902  QM_ASSIGN/22              #21=      $22                  ?0                  	;0
		42  902  ASSIGN_OBJ/136            ?12       ?4428375             15:'message'        	;0	<<39
		43  902  OP_DATA/137               ?0        #21                  ?0                  	;0
		44  904  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'is_object'      	;1
		45  904  FETCH_OBJ_FUNC_ARG/94     $24=      16?0                 25:'error'          	;1
		46  904  SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
		47  904  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
		48  904  JMPZ/43                   ?0        $25                  ?53                 	;0	>>53
		49  904  FETCH_OBJ_R/82            $26=      16?0                 26:'error'          	;0
		50  904  FETCH_OBJ_R/82            $27=      $26                  27:'.tag'           	;0
		51  904  QM_ASSIGN/22              #28=      $27                  ?0                  	;0
		52  904  JMP/42                    ?0        ?55                  ?0                  	;0	>>55
		53  904  FETCH_OBJ_R/82            $29=      16?0                 28:'error'          	;0	<<48
		54  904  QM_ASSIGN/22              #28=      $29                  ?0                  	;0
		55  904  ASSIGN_OBJ/136            ?20       ?4428375             22:'tag'            	;0	<<52
		56  904  OP_DATA/137               ?0        #28                  ?0                  	;0
		57  904  JMP/42                    ?0        ?67                  ?0                  	;0	>>67
		58  906  JMPZ/43                   ?0        16?1                 ?63                 	;0	>>63	<<25
		59  906  NOP/0                     ?0        ?0                   ?0                  	;0
		60  906  FAST_CONCAT/53            #31=      30:', in '           16?1                	;0
		61  906  QM_ASSIGN/22              #32=      #31                  ?0                  	;0
		62  906  JMP/42                    ?0        ?64                  ?0                  	;0	>>64
		63  906  QM_ASSIGN/22              #32=      31:''                ?0                  	;0	<<58
		64  906  CONCAT/8                  #33=      16?0                 #32                 	;0	<<62
		65  906  ASSIGN_OBJ/136            ?27       ?4428375             29:'message'        	;0
		66  906  OP_DATA/137               ?0        #33                  ?0                  	;0
		67  908  NOP/0                     ?0        32:NULL              ?0                  	;4294967295	<<18,57
		*/
	}

	public function getTag()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   911  FETCH_OBJ_R/82            $0=       ?1668850200          0:'tag'             	;0
		1   911  RETURN/62                 ?0        $0                   ?0                  	;0
		2   912  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}
function {closure}($link)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   462  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   463  FETCH_OBJ_R/82            $1=       16?0                 0:'.tag'            	;0
	2   463  IS_EQUAL/17               #2=       $1                   1:'file'            	;0
	3   463  JMPZ_EX/46                #2=       #2                   ?9                  	;0	>>9
	4   463  FETCH_OBJ_R/82            $3=       16?0                 2:'link_permissions'	;0
	5   463  FETCH_OBJ_R/82            $4=       $3                   3:'resolved_visibility'	;0
	6   463  FETCH_OBJ_R/82            $5=       $4                   4:'.tag'            	;0
	7   463  IS_EQUAL/17               #6=       $5                   5:'public'          	;0
	8   463  BOOL/52                   #2=       #6                   ?0                  	;0
	9   463  RETURN/62                 ?0        #2                   ?0                  	;0	<<3
	10  464  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}
function {closure}($s)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   798  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   799  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'stripos'         	;2
	2   799  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   799  SEND_VAL_EX/116           ?96       2:'dropbox-api-result:' ?2                  	;0
	4   799  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	5   799  IS_IDENTICAL/15           #2=       $1                   3:0                 	;0
	6   799  RETURN/62                 ?0        #2                   ?0                  	;0
	7   800  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
	*/
}
/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   14   NOP/0                     ?0        ?0                   ?0                  	;0
1   892  FETCH_CLASS/109           $1=       ?0                   0:'Exception'       	;0
2   892  DECLARE_INHERITED_CLASS/140 $2=       2:'dropboxexception' $1                  	;4294967295
3   913  NOP/0                     ?0        4:1                  ?0                  	;4294967295
*/
?>