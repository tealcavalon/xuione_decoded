<?php


/**
 * TMDB API v3 PHP class - wrapper to API version 3 of 'themoviedb.org
 * API Documentation: http://help.themoviedb.org/kb/api/about-3
 * Documentation and usage in README file
 *
 * @pakage TMDB_V3_API_PHP
 * @author adangq <adangq@gmail.com>
 * @copyright 2012 pixelead0
 * @date 2012-02-12
 * @link http://www.github.com/pixelead
 * @version 0.0.2
 * @license BSD http://www.opensource.org/licenses/bsd-license.php
 *
 *
 * Portions of this file are based on pieces of TMDb PHP API class - API 'themoviedb.org'
 * @Copyright Jonas De Smet - Glamorous | https://github.com/glamorous/TMDb-PHP-API
 * Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 * @date 10.12.2010
 * @version 0.9.10
 * @author Jonas De Smet - Glamorous
 * @link {https://github.com/glamorous/TMDb-PHP-API}
 *
 * Added config file + some formal corrections inside comments + some code changes to use config + (hopefully) corrected versioning
 * @Copyright Deso85 | https://github.com/deso85/tmdb_v3-PHP-API-
 * Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 * @date 01.04.2016
 * @version 0.4
 * @author Deso85
 * @link {https://github.com/deso85/tmdb_v3-PHP-API-}
 *
 * 	Function List
 *   	public function  __construct($apikey,$lang,$adult,$debug)
 *   	public function setLang($lang="en")
 *   	public function getLang()
 *   	public function setAdult($adult=false);
 *   	public function getAdult();
 *   	public function setDebug($debug=false);
 *   	public function getDebug();
 *   	public function setImageURL($config)
 *   	public function getImageURL($size="original")
 *   	public function movieTitles($idMovie)
 *   	public function movieTrans($idMovie)
 *   	public function movieTrailer($idMovie,$source="")
 *   	public function movieDetail($idMovie)
 *   	public function moviePoster($idMovie)
 *   	public function movieCast($idMovie)
 *   	public function movieInfo($idMovie,$option="",$print=false)
 *   	public function searchMovie($movieTitle)
 *   	public function getAPIConfig()
 *   	public function latestMovie()
 *   	public function nowPlayingMovies($page=1)
 *
 *   	private function _getDataArray($action,$text,$lang="")
 *   	private function setApikey($apikey)
 *   	private function getApikey()
 *
 *
 * 	URL LIST:
 *   	configuration		http://api.themoviedb.org/3/configuration
 * 		Image				http://cf2.imgobject.com/t/p/original/IMAGEN.jpg #### echar un ojo ####
 * 		Search Movie		http://api.themoviedb.org/3/search/movie
 * 		Search Person		http://api.themoviedb.org/3/search/person
 * 		Movie Info			http://api.themoviedb.org/3/movie/11
 * 		Casts				http://api.themoviedb.org/3/movie/11/casts
 * 		Posters				http://api.themoviedb.org/3/movie/11/images
 * 		Trailers			http://api.themoviedb.org/3/movie/11/trailers
 * 		translations		http://api.themoviedb.org/3/movie/11/translations
 * 		Alternative titles 	http://api.themoviedb.org/3/movie/11/alternative_titles
 *
 * 		Collection Info 	http://api.themoviedb.org/3/collection/11
 * 		Person images		http://api.themoviedb.org/3/person/287/images
 */
class TMDB
{
	public const _API_URL_ = 'http://api.themoviedb.org/3/';
	public const VERSION = '0.0.3.0';

	private $_config;
	private $_apikey;
	private $_lang;
	private $_adult;
	private $_apiconfiguration;
	private $_debug;

	/**
	 * 	Construct Class<br />
	 * 	If any param is not specified, will load from config.
	 *
	 * 	@param string $apikey The API key token
	 * 	@param string $lang The language to work with
	 *  @param boolean $adult The flag for adult content
	 *  @param boolean $debug The flag for debug output
	 */
	public function __construct($apikey, $lang, $adult, $debug)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   125  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   125  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
		2   125  RECV_INIT/64              16?2=     ?3                   2:NULL              	;0
		3   125  RECV_INIT/64              16?3=     ?4                   3:NULL              	;0
		4   126  INCLUDE_OR_EVAL/73        ?0        4:'TMDb/config/config.php' ?0                  	;16
		5   129  INIT_METHOD_CALL/112      ?0        ?0                   5:'setConfig'       	;1
		6   129  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		7   129  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		8   132  INIT_METHOD_CALL/112      ?0        ?0                   7:'setApikey'       	;1
		9   132  ISSET_ISEMPTY_CV/197      #7=       16?0                 ?0                  	;33554432
		10  132  JMPZ/43                   ?0        #7                   ?13                 	;0	>>13
		11  132  QM_ASSIGN/22              #8=       16?0                 ?0                  	;0
		12  132  JMP/42                    ?0        ?15                  ?0                  	;0	>>15
		13  132  FETCH_DIM_R/81            $9=       16?4                 9:'apikey'          	;0	<<10
		14  132  QM_ASSIGN/22              #8=       $9                   ?0                  	;0
		15  132  SEND_VAL_EX/116           ?80       #8                   ?1                  	;0	<<12
		16  132  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		17  135  INIT_METHOD_CALL/112      ?0        ?0                   10:'setLang'        	;1
		18  135  ISSET_ISEMPTY_CV/197      #11=      16?1                 ?0                  	;33554432
		19  135  JMPZ/43                   ?0        #11                  ?22                 	;0	>>22
		20  135  QM_ASSIGN/22              #12=      16?1                 ?0                  	;0
		21  135  JMP/42                    ?0        ?24                  ?0                  	;0	>>24
		22  135  FETCH_DIM_R/81            $13=      16?4                 12:'lang'           	;0	<<19
		23  135  QM_ASSIGN/22              #12=      $13                  ?0                  	;0
		24  135  SEND_VAL_EX/116           ?80       #12                  ?1                  	;0	<<21
		25  135  DO_FCALL/60               ?9        ?0                   ?0                  	;0
		26  138  INIT_METHOD_CALL/112      ?0        ?0                   13:'setAdult'       	;1
		27  138  ISSET_ISEMPTY_CV/197      #15=      16?2                 ?0                  	;33554432
		28  138  JMPZ/43                   ?0        #15                  ?31                 	;0	>>31
		29  138  QM_ASSIGN/22              #16=      16?2                 ?0                  	;0
		30  138  JMP/42                    ?0        ?33                  ?0                  	;0	>>33
		31  138  FETCH_DIM_R/81            $17=      16?4                 15:'adult'          	;0	<<28
		32  138  QM_ASSIGN/22              #16=      $17                  ?0                  	;0
		33  138  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0	<<30
		34  138  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		35  141  INIT_METHOD_CALL/112      ?0        ?0                   16:'setDebug'       	;1
		36  141  ISSET_ISEMPTY_CV/197      #19=      16?3                 ?0                  	;33554432
		37  141  JMPZ/43                   ?0        #19                  ?40                 	;0	>>40
		38  141  QM_ASSIGN/22              #20=      16?3                 ?0                  	;0
		39  141  JMP/42                    ?0        ?42                  ?0                  	;0	>>42
		40  141  FETCH_DIM_R/81            $21=      16?4                 18:'debug'          	;0	<<37
		41  141  QM_ASSIGN/22              #20=      $21                  ?0                  	;0
		42  141  SEND_VAL_EX/116           ?80       #20                  ?1                  	;0	<<39
		43  141  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		44  144  INIT_METHOD_CALL/112      ?0        ?4368321             19:'_loadConfig'    	;0
		45  144  DO_FCALL/60               $23=      ?0                   ?0                  	;0
		46  144  BOOL_NOT/13               #24=      $23                  ?0                  	;0
		47  144  JMPZ/43                   ?0        #24                  ?53                 	;0	>>53
		48  145  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'_'              	;1
		49  145  SEND_VAL_EX/116           ?80       23:'Unable to read configuration, verify that the API key is valid' ?1                  	;0
		50  145  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
		51  145  ECHO/40                   ?0        $25                  ?0                  	;0
		52  146  EXIT/79                   ?0        ?0                   ?0                  	;0
		53  148  NOP/0                     ?0        24:NULL              ?0                  	;4294967295	<<47
		*/
	}

	/**
	 *  Set configuration parameters
	 *
	 * 	@param array $config
	 */
	private function setConfig($config)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   159  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   160  ASSIGN_OBJ/136            ?0        ?1667551336          0:'_config'         	;0
		2   160  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   161  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get the config parameters
	 *
	 * 	@return array $config
	 */
	private function getConfig()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   169  FETCH_OBJ_R/82            $0=       ?0                   0:'_config'         	;0
		1   169  RETURN/62                 ?0        $0                   ?0                  	;0
		2   170  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Set the API key
	 *
	 * 	@param string $apikey
	 * 	@return void
	 */
	private function setApikey($apikey)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   182  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   183  CAST/21                   #2=       16?0                 ?0                  	;6
		2   183  ASSIGN_OBJ/136            ?0        ?2670194256          0:'_apikey'         	;0
		3   183  OP_DATA/137               ?0        #2                   ?0                  	;0
		4   184  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get the API key
	 *
	 * 	@return string
	 */
	private function getApikey()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   192  FETCH_OBJ_R/82            $0=       ?0                   0:'_apikey'         	;0
		1   192  RETURN/62                 ?0        $0                   ?0                  	;0
		2   193  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Set the language
	 *	By default english
	 *
	 * 	@param string $lang
	 */
	public function setLang($lang)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   205  RECV_INIT/64              16?0=     ?1                   0:'en'              	;0
		1   206  CAST/21                   #2=       16?0                 ?0                  	;6
		2   206  ASSIGN_OBJ/136            ?0        ?2670194256          1:'_lang'           	;0
		3   206  OP_DATA/137               ?0        #2                   ?0                  	;0
		4   207  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get the language
	 *
	 * 	@return string
	 */
	public function getLang()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   215  FETCH_OBJ_R/82            $0=       ?0                   0:'_lang'           	;0
		1   215  RETURN/62                 ?0        $0                   ?0                  	;0
		2   216  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Set adult content flag
	 *	By default false
	 *
	 * 	@param boolean $adult
	 */
	public function setAdult($adult)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   228  RECV_INIT/64              16?0=     ?1                   0:false             	;0
		1   229  ASSIGN_OBJ/136            ?0        ?2670194256          1:'_adult'          	;0
		2   229  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   230  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get the adult content flag
	 *
	 * 	@return string
	 */
	public function getAdult()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   238  FETCH_OBJ_R/82            $0=       ?2670193760          0:'_adult'          	;0
		1   238  JMPZ/43                   ?0        $0                   ?4                  	;0	>>4
		2   238  QM_ASSIGN/22              #1=       1:'true'             ?0                  	;0
		3   238  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		4   238  QM_ASSIGN/22              #1=       2:'false'            ?0                  	;0	<<1
		5   238  RETURN/62                 ?0        #1                   ?0                  	;0	<<3
		6   239  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Set debug mode
	 *	By default false
	 *
	 * 	@param boolean $debug
	 */
	public function setDebug($debug)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   251  RECV_INIT/64              16?0=     ?1                   0:false             	;0
		1   252  ASSIGN_OBJ/136            ?0        ?1664884288          1:'_debug'          	;0
		2   252  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   253  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get debug status
	 *
	 * 	@return boolean
	 */
	public function getDebug()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   261  FETCH_OBJ_R/82            $0=       ?0                   0:'_debug'          	;0
		1   261  RETURN/62                 ?0        $0                   ?0                  	;0
		2   262  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Loads the configuration of the API
	 *
	 * 	@return boolean
	 */
	private function _loadConfig()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   274  NEW/68                    $1=       1:'APIConfiguration' ?192                	;1
		1   274  INIT_METHOD_CALL/112      ?0        ?238                 3:'_call'           	;1
		2   274  SEND_VAL_EX/116           ?80       5:'configuration'    ?1                  	;0
		3   274  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   274  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		5   274  DO_FCALL/60               ?3        ?8                   ?0                  	;0
		6   274  ASSIGN_OBJ/136            ?0        ?2670194256          0:'_apiconfiguration'	;0
		7   274  OP_DATA/137               ?0        $1                   ?0                  	;0
		8   276  ISSET_ISEMPTY_PROP_OBJ/148 #4=       ?8                   6:'_apiconfiguration'	;16777216
		9   276  BOOL_NOT/13               #5=       #4                   ?0                  	;0
		10  276  RETURN/62                 ?0        #5                   ?0                  	;0
		11  277  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get Configuration of the API (Revisar)
	 *
	 * 	@return Configuration
	 */
	public function getAPIConfig()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   285  FETCH_OBJ_R/82            $0=       ?0                   0:'_apiconfiguration'	;0
		1   285  RETURN/62                 ?0        $0                   ?0                  	;0
		2   286  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *	Get the URL images
	 * 	You can specify the width, by default original
	 *
	 * 	@param String $size A String like 'w185' where you specify the image width
	 * 	@return string
	 */
	public function getImageURL($size)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   299  RECV_INIT/64              16?0=     ?1                   0:'original'        	;0
		1   300  FETCH_OBJ_R/82            $1=       ?4397406             1:'_apiconfiguration'	;0
		2   300  INIT_METHOD_CALL/112      ?0        $1                   2:'getImageBaseURL' 	;0
		3   300  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   300  CONCAT/8                  #3=       $2                   16?0                	;0
		5   300  RETURN/62                 ?0        #3                   ?0                  	;0
		6   301  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Discover Movies
	 *	@add by tnsws
	 *
	 * 	@return Movie[]
	 */
	public function getDiscoverMovies($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   313  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   315  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   317  INIT_METHOD_CALL/112      ?0        ?1667557272          2:'_call'           	;2
		3   317  SEND_VAL_EX/116           ?80       4:'discover/movie'   ?1                  	;0
		4   317  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   317  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   317  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   317  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   319  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   319  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  319  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  320  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  320  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  320  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  320  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  320  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  320  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  320  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  323  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  324  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Discover TVShows
	 *	@add by tnsws
	 *
	 * 	@return TVShow[]
	 */
	public function getDiscoverTVShows($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   332  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   334  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   336  INIT_METHOD_CALL/112      ?0        ?1667557272          2:'_call'           	;2
		3   336  SEND_VAL_EX/116           ?80       4:'discover/tv'      ?1                  	;0
		4   336  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   336  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   336  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   336  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   338  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   338  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  338  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  339  NEW/68                    $11=      7:'TVShow'           ?96                 	;1
		12  339  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  339  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  339  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  339  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  339  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  339  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  342  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  343  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get latest Movie
	 *	@add by tnsws
	 *
	 * 	@return Movie
	 */
	public function getDiscoverMovie($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   355  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   357  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   359  INIT_METHOD_CALL/112      ?0        ?1667557272          2:'_call'           	;2
		3   359  SEND_VAL_EX/116           ?80       4:'discover/movie'   ?1                  	;0
		4   359  CONCAT/8                  #5=       5:'page='            16?0                	;0
		5   359  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   359  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   359  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   361  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   361  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  361  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  362  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  362  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  362  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  362  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  362  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  362  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  362  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  365  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  366  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get latest Movie
	 *
	 * 	@return Movie
	 */
	public function getLatestMovie()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   378  NEW/68                    $0=       0:'Movie'            ?192                	;1
		1   378  INIT_METHOD_CALL/112      ?0        ?4294967040          2:'_call'           	;1
		2   378  SEND_VAL_EX/116           ?80       4:'movie/latest'     ?1                  	;0
		3   378  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		4   378  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		5   378  DO_FCALL/60               ?2        ?8                   ?0                  	;0
		6   378  RETURN/62                 ?0        $0                   ?0                  	;0
		7   379  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Get Now Playing Movies
	 *
	 * 	@param integer $page
	 * 	@return Movie[]
	 */
	public function getNowPlayingMovies($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   387  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   389  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   391  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		3   391  SEND_VAL_EX/116           ?80       4:'movie/now_playing' ?1                  	;0
		4   391  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   391  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   391  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   391  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   393  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   393  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  393  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  394  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  394  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  394  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  394  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  394  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  394  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  394  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  397  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  398  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Get Popular Movies
	 *
	 * 	@param integer $page
	 * 	@return Movie[]
	 */
	public function getPopularMovies($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   406  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   408  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   410  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		3   410  SEND_VAL_EX/116           ?80       4:'movie/popular'    ?1                  	;0
		4   410  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   410  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   410  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   410  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   412  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   412  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  412  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  413  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  413  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  413  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  413  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  413  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  413  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  413  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  416  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  417  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Get Top Rated Movies
	 *	@add by tnsws
	 *
	 * 	@param integer $page
	 * 	@return Movie[]
	 */
	public function getTopRatedMovies($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   426  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   428  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   430  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		3   430  SEND_VAL_EX/116           ?80       4:'movie/top_rated'  ?1                  	;0
		4   430  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   430  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   430  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   430  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   432  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   432  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  432  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  433  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  433  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  433  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  433  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  433  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  433  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  433  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  436  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  437  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Get Upcoming Movies
	 *	@add by tnsws
	 *
	 * 	@param integer $page
	 * 	@return Movie[]
	 */
	public function getUpcomingMovies($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   446  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   448  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   450  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		3   450  SEND_VAL_EX/116           ?80       4:'movie/upcoming'   ?1                  	;0
		4   450  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   450  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   450  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   450  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   452  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   452  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  452  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  453  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  453  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  453  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  453  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  453  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  453  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  453  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  456  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  457  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getSimilarMovies($id, $page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   459  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   459  RECV_INIT/64              16?1=     ?2                   0:1                 	;0
		2   461  ASSIGN/38                 ?0        16?2                 1:array (
)         	;0
		3   463  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		4   463  CONCAT/8                  #6=       4:'movie/'           16?0                	;0
		5   463  CONCAT/8                  #7=       #6                   5:'/similar'        	;0
		6   463  SEND_VAL_EX/116           ?80       #7                   ?1                  	;0
		7   463  CONCAT/8                  #8=       6:'&page='           16?1                	;0
		8   463  SEND_VAL_EX/116           ?96       #8                   ?2                  	;0
		9   463  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		10  463  ASSIGN/38                 ?5        16?3                 $9                  	;0
		11  465  FETCH_DIM_R/81            $11=      16?3                 7:'results'         	;0
		12  465  FE_RESET_R/77             $12=      $11                  ?20                 	;0
		13  465  FE_FETCH_R/78             ?0        $12                  16?4                	;20	>>20	<<19
		14  466  NEW/68                    $14=      8:'Movie'            ?96                 	;1
		15  466  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		16  466  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		17  466  ASSIGN_DIM/147            ?8        16?2                 ?2                  	;0
		18  466  OP_DATA/137               ?0        $14                  ?0                  	;0
		19  466  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  466  FE_FREE/127               ?0        $12                  ?0                  	;0	<<12
		21  469  RETURN/62                 ?0        16?2                 ?0                  	;0
		22  470  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get latest TVShow
	 *
	 * 	@return TVShow
	 */
	public function getLatestTVShow()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   482  NEW/68                    $0=       0:'TVShow'           ?192                	;1
		1   482  INIT_METHOD_CALL/112      ?0        ?4294967040          2:'_call'           	;1
		2   482  SEND_VAL_EX/116           ?80       4:'tv/latest'        ?1                  	;0
		3   482  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		4   482  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		5   482  DO_FCALL/60               ?2        ?8                   ?0                  	;0
		6   482  RETURN/62                 ?0        $0                   ?0                  	;0
		7   483  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Get On The Air TVShows
	 *
	 * 	@param integer $page
	 * 	@return TVShow[]
	 */
	public function getOnTheAirTVShows($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   491  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   493  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   495  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		3   495  SEND_VAL_EX/116           ?80       4:'tv/on_the_air'    ?1                  	;0
		4   495  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   495  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   495  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   495  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   497  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   497  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  497  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  498  NEW/68                    $11=      7:'TVShow'           ?96                 	;1
		12  498  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  498  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  498  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  498  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  498  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  498  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  501  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  502  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getSimilarSeries($id, $page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   504  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   504  RECV_INIT/64              16?1=     ?2                   0:1                 	;0
		2   505  INIT_METHOD_CALL/112      ?0        ?5126                1:'_call'           	;2
		3   505  CONCAT/8                  #3=       3:'tv/'              16?0                	;0
		4   505  CONCAT/8                  #4=       #3                   4:'/similar'        	;0
		5   505  SEND_VAL_EX/116           ?80       #4                   ?1                  	;0
		6   505  CONCAT/8                  #5=       5:'&page='           16?1                	;0
		7   505  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		8   505  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		9   505  ASSIGN/38                 ?4        16?2                 $6                  	;0
		10  506  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		11  506  RETURN/62                 ?0        $8                   ?0                  	;0
		12  507  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Get Airing Today TVShows
	 *
	 * 	@param integer $page
	 * 	@param string $timezone
	 * 	@return TVShow[]
	 */
	public function getAiringTodayTVShows($page, $timeZone)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   516  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   516  RECV_INIT/64              16?1=     ?2                   1:'Europe/Madrid'   	;0
		2   518  ASSIGN/38                 ?0        16?2                 2:array (
)         	;0
		3   520  INIT_METHOD_CALL/112      ?0        ?1663076000          3:'_call'           	;2
		4   520  SEND_VAL_EX/116           ?80       5:'tv/airing_today'  ?1                  	;0
		5   520  CONCAT/8                  #6=       6:'&page='           16?0                	;0
		6   520  SEND_VAL_EX/116           ?96       #6                   ?2                  	;0
		7   520  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		8   520  ASSIGN/38                 ?3        16?3                 $7                  	;0
		9   522  FETCH_DIM_R/81            $9=       16?3                 7:'results'         	;0
		10  522  FE_RESET_R/77             $10=      $9                   ?18                 	;0
		11  522  FE_FETCH_R/78             ?0        $10                  16?4                	;18	>>18	<<17
		12  523  NEW/68                    $12=      8:'TVShow'           ?96                 	;1
		13  523  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		14  523  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		15  523  ASSIGN_DIM/147            ?6        16?2                 ?2                  	;0
		16  523  OP_DATA/137               ?0        $12                  ?0                  	;0
		17  523  JMP/42                    ?0        ?11                  ?0                  	;0	>>11
		18  523  FE_FREE/127               ?0        $10                  ?0                  	;0	<<10
		19  526  RETURN/62                 ?0        16?2                 ?0                  	;0
		20  527  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 *  Get Top Rated TVShows
	 *
	 * 	@param integer $page
	 * 	@return TVShow[]
	 */
	public function getTopRatedTVShows($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   535  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   537  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   539  INIT_METHOD_CALL/112      ?0        ?1663076000          2:'_call'           	;2
		3   539  SEND_VAL_EX/116           ?80       4:'tv/top_rated'     ?1                  	;0
		4   539  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   539  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   539  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   539  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   541  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   541  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  541  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  542  NEW/68                    $11=      7:'TVShow'           ?96                 	;1
		12  542  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  542  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  542  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  542  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  542  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  542  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  545  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  546  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Get Popular TVShows
	 *
	 * 	@param integer $page
	 * 	@return TVShow[]
	 */
	public function getPopularTVShows($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   554  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   556  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   558  INIT_METHOD_CALL/112      ?0        ?1663076000          2:'_call'           	;2
		3   558  SEND_VAL_EX/116           ?80       4:'tv/popular'       ?1                  	;0
		4   558  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   558  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   558  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   558  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   560  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   560  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  560  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  561  NEW/68                    $11=      7:'TVShow'           ?96                 	;1
		12  561  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  561  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  561  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  561  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  561  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  561  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  564  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  565  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get latest Person
	 *
	 * 	@return Person
	 */
	public function getLatestPerson()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   577  NEW/68                    $0=       0:'Person'           ?192                	;1
		1   577  INIT_METHOD_CALL/112      ?0        ?4294967040          2:'_call'           	;1
		2   577  SEND_VAL_EX/116           ?80       4:'person/latest'    ?1                  	;0
		3   577  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		4   577  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		5   577  DO_FCALL/60               ?2        ?8                   ?0                  	;0
		6   577  RETURN/62                 ?0        $0                   ?0                  	;0
		7   578  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get Popular Persons
	 *
	 * 	@return Person[]
	 */
	public function getPopularPersons($page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   585  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   586  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   588  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		3   588  SEND_VAL_EX/116           ?80       4:'person/popular'   ?1                  	;0
		4   588  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   588  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   588  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   588  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   590  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   590  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  590  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  591  NEW/68                    $11=      7:'Person'           ?96                 	;1
		12  591  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  591  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  591  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  591  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  591  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  591  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  594  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  595  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Makes the call to the API and retrieves the data as a JSON
	 *
	 * 	@param string $action	API specific function name for in the URL
	 * 	@param string $appendToResponse	The extra append of the request
	 * 	@return string
	 */
	private function _call($action, $appendToResponse)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   608  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   608  RECV_INIT/64              16?1=     ?2                   0:''                	;0
		2   610  CONCAT/8                  #5=       1:'http://api.themoviedb.org/3/' 16?0                	;0
		3   610  CONCAT/8                  #6=       #5                   2:'?api_key='       	;0
		4   610  INIT_METHOD_CALL/112      ?0        ?1663634720          3:'getApikey'       	;0
		5   610  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		6   610  CONCAT/8                  #8=       #6                   $7                  	;0
		7   610  CONCAT/8                  #9=       #8                   5:'&language='      	;0
		8   610  INIT_METHOD_CALL/112      ?0        ?1663634640          6:'getLang'         	;0
		9   610  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		10  610  CONCAT/8                  #11=      #9                   $10                 	;0
		11  610  CONCAT/8                  #12=      #11                  8:'&append_to_response='	;0
		12  610  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'implode'         	;2
		13  610  SEND_VAL_EX/116           ?80       11:','               ?1                  	;0
		14  610  CAST/21                   #13=      16?1                 ?0                  	;7
		15  610  SEND_VAL_EX/116           ?96       #13                  ?2                  	;0
		16  610  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		17  610  CONCAT/8                  #15=      #12                  $14                 	;0
		18  610  CONCAT/8                  #16=      #15                  12:'&include_adult='	;0
		19  610  INIT_METHOD_CALL/112      ?0        ?1663607664          13:'getAdult'       	;0
		20  610  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		21  610  CONCAT/8                  #18=      #16                  $17                 	;0
		22  610  ASSIGN/38                 ?14       16?2                 #18                 	;0
		23  612  FETCH_OBJ_R/82            $20=      ?1668928992          15:'_debug'         	;0
		24  612  JMPZ/43                   ?0        $20                  ?28                 	;0	>>28
		25  613  CONCAT/8                  #21=      16:'<pre><a href="'  16?2                	;0
		26  613  CONCAT/8                  #22=      #21                  17:'">check request</a></pre>'	;0
		27  613  ECHO/40                   ?0        #22                  ?0                  	;0
		28  616  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'curl_init'      	;0	<<24
		29  616  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		30  616  ASSIGN/38                 ?19       16?3                 $23                 	;0
		31  617  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'curl_setopt'    	;3
		32  617  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		33  617  FETCH_CONSTANT/99         #25=      ?0                   22:'CURLOPT_URL'    	;16
		34  617  SEND_VAL_EX/116           ?96       #25                  ?2                  	;0
		35  617  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		36  617  DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
		37  618  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'curl_setopt'    	;3
		38  618  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		39  618  FETCH_CONSTANT/99         #27=      ?0                   27:'CURLOPT_HEADER' 	;16
		40  618  SEND_VAL_EX/116           ?96       #27                  ?2                  	;0
		41  618  SEND_VAL_EX/116           ?112      30:0                 ?3                  	;0
		42  618  DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
		43  619  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'curl_setopt'    	;3
		44  619  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		45  619  FETCH_CONSTANT/99         #29=      ?0                   33:'CURLOPT_RETURNTRANSFER'	;16
		46  619  SEND_VAL_EX/116           ?96       #29                  ?2                  	;0
		47  619  SEND_VAL_EX/116           ?112      36:1                 ?3                  	;0
		48  619  DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
		49  620  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'curl_setopt'    	;3
		50  620  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		51  620  FETCH_CONSTANT/99         #31=      ?0                   39:'CURLOPT_FAILONERROR'	;16
		52  620  SEND_VAL_EX/116           ?96       #31                  ?2                  	;0
		53  620  SEND_VAL_EX/116           ?112      42:1                 ?3                  	;0
		54  620  DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
		55  622  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'curl_exec'      	;1
		56  622  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		57  622  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
		58  622  ASSIGN/38                 ?29       16?4                 $33                 	;0
		59  624  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'curl_close'     	;1
		60  624  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		61  624  DO_FCALL_BY_NAME/131      ?30       ?0                   ?0                  	;0
		62  626  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'json_decode'    	;2
		63  626  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		64  626  SEND_VAL_EX/116           ?96       49:true              ?2                  	;0
		65  626  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
		66  626  CAST/21                   #37=      $36                  ?0                  	;7
		67  626  RETURN/62                 ?0        #37                  ?0                  	;0
		68  627  NOP/0                     ?0        50:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get a Movie
	 *
	 * 	@param int $idMovie The Movie id
	 * 	@param array $appendToResponse The extra append of the request
	 * 	@return Movie
	 */
	public function getMovie($idMovie, $appendToResponse)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   640  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   640  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   641  ISSET_ISEMPTY_CV/197      #2=       16?1                 ?0                  	;33554432
		3   641  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4   641  QM_ASSIGN/22              #3=       16?1                 ?0                  	;0
		5   641  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		6   641  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<3
		7   641  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   641  FETCH_DIM_R/81            $5=       $4                   3:'appender'        	;0
		9   641  FETCH_DIM_R/81            $6=       $5                   4:'movie'           	;0
		10  641  FETCH_DIM_R/81            $7=       $6                   5:'default'         	;0
		11  641  QM_ASSIGN/22              #3=       $7                   ?0                  	;0
		12  641  ASSIGN/38                 ?6        16?1                 #3                  	;0	<<5
		13  643  NEW/68                    $9=       6:'Movie'            ?256                	;1
		14  643  INIT_METHOD_CALL/112      ?0        ?1663634120          8:'_call'           	;2
		15  643  CONCAT/8                  #10=      10:'movie/'          16?0                	;0
		16  643  SEND_VAL/65               ?80       #10                  ?1                  	;0
		17  643  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		18  643  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19  643  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		20  643  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		21  643  RETURN/62                 ?0        $9                   ?0                  	;0
		22  644  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	public function getMovieTitles($idMovie)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   646  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   647  INIT_METHOD_CALL/112      ?0        ?4461447             0:'_call'           	;1
		2   647  CONCAT/8                  #1=       2:'movie/'           16?0                	;0
		3   647  CONCAT/8                  #2=       #1                   3:'/alternative_titles'	;0
		4   647  SEND_VAL/65               ?80       #2                   ?1                  	;0
		5   647  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		6   647  RETURN/62                 ?0        $3                   ?0                  	;0
		7   648  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function getSeriesTitles($idTVShow)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   650  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   651  INIT_METHOD_CALL/112      ?0        ?4461447             0:'_call'           	;1
		2   651  CONCAT/8                  #1=       2:'tv/'              16?0                	;0
		3   651  CONCAT/8                  #2=       #1                   3:'/alternative_titles'	;0
		4   651  SEND_VAL/65               ?80       #2                   ?1                  	;0
		5   651  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		6   651  RETURN/62                 ?0        $3                   ?0                  	;0
		7   652  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get a TVShow
	 *
	 * 	@param int $idTVShow The TVShow id
	 * 	@param array $appendToResponse The extra append of the request
	 * 	@return TVShow
	 */
	public function getTVShow($idTVShow, $appendToResponse)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   661  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   661  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   662  ISSET_ISEMPTY_CV/197      #2=       16?1                 ?0                  	;33554432
		3   662  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4   662  QM_ASSIGN/22              #3=       16?1                 ?0                  	;0
		5   662  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		6   662  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<3
		7   662  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   662  FETCH_DIM_R/81            $5=       $4                   3:'appender'        	;0
		9   662  FETCH_DIM_R/81            $6=       $5                   4:'tvshow'          	;0
		10  662  FETCH_DIM_R/81            $7=       $6                   5:'default'         	;0
		11  662  QM_ASSIGN/22              #3=       $7                   ?0                  	;0
		12  662  ASSIGN/38                 ?6        16?1                 #3                  	;0	<<5
		13  664  NEW/68                    $9=       6:'TVShow'           ?256                	;1
		14  664  INIT_METHOD_CALL/112      ?0        ?1                   8:'_call'           	;2
		15  664  CONCAT/8                  #10=      10:'tv/'             16?0                	;0
		16  664  SEND_VAL/65               ?80       #10                  ?1                  	;0
		17  664  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		18  664  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19  664  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		20  664  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		21  664  RETURN/62                 ?0        $9                   ?0                  	;0
		22  665  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get a Season
	 *
	 *  @param int $idTVShow The TVShow id
	 *  @param int $numSeason The Season number
	 * 	@param array $appendToResponse The extra append of the request
	 * 	@return Season
	 */
	public function getSeason($idTVShow, $numSeason, $appendToResponse)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   675  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   675  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   675  RECV_INIT/64              16?2=     ?3                   0:NULL              	;0
		3   676  ISSET_ISEMPTY_CV/197      #3=       16?2                 ?0                  	;33554432
		4   676  JMPZ/43                   ?0        #3                   ?7                  	;0	>>7
		5   676  QM_ASSIGN/22              #4=       16?2                 ?0                  	;0
		6   676  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		7   676  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<4
		8   676  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		9   676  FETCH_DIM_R/81            $6=       $5                   3:'appender'        	;0
		10  676  FETCH_DIM_R/81            $7=       $6                   4:'season'          	;0
		11  676  FETCH_DIM_R/81            $8=       $7                   5:'default'         	;0
		12  676  QM_ASSIGN/22              #4=       $8                   ?0                  	;0
		13  676  ASSIGN/38                 ?6        16?2                 #4                  	;0	<<6
		14  678  NEW/68                    $10=      6:'Season'           ?352                	;2
		15  678  INIT_METHOD_CALL/112      ?0        ?1                   8:'_call'           	;2
		16  678  CONCAT/8                  #11=      10:'tv/'             16?0                	;0
		17  678  CONCAT/8                  #12=      #11                  11:'/season/'       	;0
		18  678  CONCAT/8                  #13=      #12                  16?1                	;0
		19  678  SEND_VAL/65               ?80       #13                  ?1                  	;0
		20  678  SEND_VAR/117              ?96       16?2                 ?2                  	;0
		21  678  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		22  678  SEND_VAR_NO_REF_EX/50     ?80       $14                  ?1                  	;0
		23  678  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		24  678  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		25  678  RETURN/62                 ?0        $10                  ?0                  	;0
		26  679  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get a Episode
	 *
	 *  @param int $idTVShow The TVShow id
	 *  @param int $numSeason The Season number
	 *  @param int $numEpisode the Episode number
	 * 	@param array $appendToResponse The extra append of the request
	 * 	@return Episode
	 */
	public function getEpisode($idTVShow, $numSeason, $numEpisode, $appendToResponse)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   690  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   690  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   690  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3   690  RECV_INIT/64              16?3=     ?4                   0:NULL              	;0
		4   691  ISSET_ISEMPTY_CV/197      #4=       16?3                 ?0                  	;33554432
		5   691  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		6   691  QM_ASSIGN/22              #5=       16?3                 ?0                  	;0
		7   691  JMP/42                    ?0        ?14                  ?0                  	;0	>>14
		8   691  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<5
		9   691  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		10  691  FETCH_DIM_R/81            $7=       $6                   3:'appender'        	;0
		11  691  FETCH_DIM_R/81            $8=       $7                   4:'episode'         	;0
		12  691  FETCH_DIM_R/81            $9=       $8                   5:'default'         	;0
		13  691  QM_ASSIGN/22              #5=       $9                   ?0                  	;0
		14  691  ASSIGN/38                 ?6        16?3                 #5                  	;0	<<7
		15  693  NEW/68                    $11=      6:'Episode'          ?416                	;2
		16  693  INIT_METHOD_CALL/112      ?0        ?1663633040          8:'_call'           	;2
		17  693  CONCAT/8                  #12=      10:'tv/'             16?0                	;0
		18  693  CONCAT/8                  #13=      #12                  11:'/season/'       	;0
		19  693  CONCAT/8                  #14=      #13                  16?1                	;0
		20  693  CONCAT/8                  #15=      #14                  12:'/episode/'      	;0
		21  693  CONCAT/8                  #16=      #15                  16?2                	;0
		22  693  SEND_VAL/65               ?80       #16                  ?1                  	;0
		23  693  SEND_VAR/117              ?96       16?3                 ?2                  	;0
		24  693  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		25  693  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
		26  693  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		27  693  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		28  693  RETURN/62                 ?0        $11                  ?0                  	;0
		29  694  NOP/0                     ?0        13:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get a Person
	 *
	 * 	@param int $idPerson The Person id
	 * 	@param array $appendToResponse The extra append of the request
	 * 	@return Person
	 */
	public function getPerson($idPerson, $appendToResponse)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   703  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   703  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   704  ISSET_ISEMPTY_CV/197      #2=       16?1                 ?0                  	;33554432
		3   704  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4   704  QM_ASSIGN/22              #3=       16?1                 ?0                  	;0
		5   704  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		6   704  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<3
		7   704  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   704  FETCH_DIM_R/81            $5=       $4                   3:'appender'        	;0
		9   704  FETCH_DIM_R/81            $6=       $5                   4:'person'          	;0
		10  704  FETCH_DIM_R/81            $7=       $6                   5:'default'         	;0
		11  704  QM_ASSIGN/22              #3=       $7                   ?0                  	;0
		12  704  ASSIGN/38                 ?6        16?1                 #3                  	;0	<<5
		13  706  NEW/68                    $9=       6:'Person'           ?256                	;1
		14  706  INIT_METHOD_CALL/112      ?0        ?1663069352          8:'_call'           	;2
		15  706  CONCAT/8                  #10=      10:'person/'         16?0                	;0
		16  706  SEND_VAL/65               ?80       #10                  ?1                  	;0
		17  706  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		18  706  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19  706  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		20  706  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		21  706  RETURN/62                 ?0        $9                   ?0                  	;0
		22  707  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get a Collection
	 *
	 * 	@param int $idCollection The Person id
	 * 	@param array $appendToResponse The extra append of the request
	 * 	@return Collection
	 */
	public function getCollection($idCollection, $appendToResponse)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   716  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   716  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   717  ISSET_ISEMPTY_CV/197      #2=       16?1                 ?0                  	;33554432
		3   717  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4   717  QM_ASSIGN/22              #3=       16?1                 ?0                  	;0
		5   717  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		6   717  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<3
		7   717  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   717  FETCH_DIM_R/81            $5=       $4                   3:'appender'        	;0
		9   717  FETCH_DIM_R/81            $6=       $5                   4:'collection'      	;0
		10  717  FETCH_DIM_R/81            $7=       $6                   5:'default'         	;0
		11  717  QM_ASSIGN/22              #3=       $7                   ?0                  	;0
		12  717  ASSIGN/38                 ?6        16?1                 #3                  	;0	<<5
		13  719  NEW/68                    $9=       6:'Collection'       ?256                	;1
		14  719  INIT_METHOD_CALL/112      ?0        ?1663069352          8:'_call'           	;2
		15  719  CONCAT/8                  #10=      10:'collection/'     16?0                	;0
		16  719  SEND_VAL/65               ?80       #10                  ?1                  	;0
		17  719  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		18  719  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19  719  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		20  719  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		21  719  RETURN/62                 ?0        $9                   ?0                  	;0
		22  720  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get a Company
	 *
	 * 	@param int $idCompany The Person id
	 * 	@param array $appendToResponse The extra append of the request
	 * 	@return Company
	 */
	public function getCompany($idCompany, $appendToResponse)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   729  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   729  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   730  ISSET_ISEMPTY_CV/197      #2=       16?1                 ?0                  	;33554432
		3   730  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4   730  QM_ASSIGN/22              #3=       16?1                 ?0                  	;0
		5   730  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		6   730  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<3
		7   730  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   730  FETCH_DIM_R/81            $5=       $4                   3:'appender'        	;0
		9   730  FETCH_DIM_R/81            $6=       $5                   4:'company'         	;0
		10  730  FETCH_DIM_R/81            $7=       $6                   5:'default'         	;0
		11  730  QM_ASSIGN/22              #3=       $7                   ?0                  	;0
		12  730  ASSIGN/38                 ?6        16?1                 #3                  	;0	<<5
		13  732  NEW/68                    $9=       6:'Company'          ?256                	;1
		14  732  INIT_METHOD_CALL/112      ?0        ?1663069352          8:'_call'           	;2
		15  732  CONCAT/8                  #10=      10:'company/'        16?0                	;0
		16  732  SEND_VAL/65               ?80       #10                  ?1                  	;0
		17  732  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		18  732  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19  732  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		20  732  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		21  732  RETURN/62                 ?0        $9                   ?0                  	;0
		22  733  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 *  Search Movie
	 *
	 * 	@param string $movieTitle The title of a Movie
	 * 	@return Movie[]
	 */
	public function searchMovie($movieTitle, $rYear)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   745  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   745  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   747  ASSIGN/38                 ?0        16?2                 1:array (
)         	;0
		3   749  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		4   749  SEND_VAL/65               ?80       4:'search/movie'     ?1                  	;0
		5   749  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'urlencode'       	;1
		6   749  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		7   749  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		8   749  CONCAT/8                  #7=       7:'&query='          $6                  	;0
		9   749  JMPZ/43                   ?0        16?1                 ?16                 	;0	>>16
		10  749  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'intval'          	;1
		11  749  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		12  749  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		13  749  CONCAT/8                  #9=       10:'&primary_release_year=' $8                  	;0
		14  749  QM_ASSIGN/22              #10=      #9                   ?0                  	;0
		15  749  JMP/42                    ?0        ?17                  ?0                  	;0	>>17
		16  749  QM_ASSIGN/22              #10=      11:''                ?0                  	;0	<<9
		17  749  CONCAT/8                  #11=      #7                   #10                 	;0	<<15
		18  749  SEND_VAL/65               ?96       #11                  ?2                  	;0
		19  749  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		20  749  ASSIGN/38                 ?8        16?3                 $12                 	;0
		21  751  FETCH_DIM_R/81            $14=      16?3                 12:'results'        	;0
		22  751  FE_RESET_R/77             $15=      $14                  ?30                 	;0
		23  751  FE_FETCH_R/78             ?0        $15                  16?4                	;30	>>30	<<29
		24  752  NEW/68                    $17=      13:'Movie'           ?96                 	;1
		25  752  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		26  752  DO_FCALL/60               ?13       ?8                   ?0                  	;0
		27  752  ASSIGN_DIM/147            ?11       16?2                 ?2                  	;0
		28  752  OP_DATA/137               ?0        $17                  ?0                  	;0
		29  752  JMP/42                    ?0        ?23                  ?0                  	;0	>>23
		30  752  FE_FREE/127               ?0        $15                  ?0                  	;0	<<22
		31  755  RETURN/62                 ?0        16?2                 ?0                  	;0
		32  756  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 *  Search TVShow
	 *
	 * 	@param string $tvShowTitle The title of a TVShow
	 * 	@return TVShow[]
	 */
	public function searchTVShow($tvShowTitle, $rYear)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   764  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   764  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   766  ASSIGN/38                 ?0        16?2                 1:array (
)         	;0
		3   768  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		4   768  SEND_VAL/65               ?80       4:'search/tv'        ?1                  	;0
		5   768  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'urlencode'       	;1
		6   768  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		7   768  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		8   768  CONCAT/8                  #7=       7:'&query='          $6                  	;0
		9   768  JMPZ/43                   ?0        16?1                 ?16                 	;0	>>16
		10  768  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'intval'          	;1
		11  768  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		12  768  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		13  768  CONCAT/8                  #9=       10:'&first_air_date_year=' $8                  	;0
		14  768  QM_ASSIGN/22              #10=      #9                   ?0                  	;0
		15  768  JMP/42                    ?0        ?17                  ?0                  	;0	>>17
		16  768  QM_ASSIGN/22              #10=      11:''                ?0                  	;0	<<9
		17  768  CONCAT/8                  #11=      #7                   #10                 	;0	<<15
		18  768  SEND_VAL/65               ?96       #11                  ?2                  	;0
		19  768  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		20  768  ASSIGN/38                 ?8        16?3                 $12                 	;0
		21  770  FETCH_DIM_R/81            $14=      16?3                 12:'results'        	;0
		22  770  FE_RESET_R/77             $15=      $14                  ?30                 	;0
		23  770  FE_FETCH_R/78             ?0        $15                  16?4                	;30	>>30	<<29
		24  771  NEW/68                    $17=      13:'TVShow'          ?96                 	;1
		25  771  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		26  771  DO_FCALL/60               ?13       ?8                   ?0                  	;0
		27  771  ASSIGN_DIM/147            ?11       16?2                 ?2                  	;0
		28  771  OP_DATA/137               ?0        $17                  ?0                  	;0
		29  771  JMP/42                    ?0        ?23                  ?0                  	;0	>>23
		30  771  FE_FREE/127               ?0        $15                  ?0                  	;0	<<22
		31  774  RETURN/62                 ?0        16?2                 ?0                  	;0
		32  775  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 *  Search Person
	 *
	 * 	@param string $personName The name of the Person
	 * 	@return Person[]
	 */
	public function searchPerson($personName)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   783  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   785  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   787  INIT_METHOD_CALL/112      ?0        ?5126                1:'_call'           	;2
		3   787  SEND_VAL/65               ?80       3:'search/person'    ?1                  	;0
		4   787  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'urlencode'       	;1
		5   787  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   787  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   787  CONCAT/8                  #6=       6:'&query='          $5                  	;0
		8   787  SEND_VAL/65               ?96       #6                   ?2                  	;0
		9   787  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		10  787  ASSIGN/38                 ?4        16?2                 $7                  	;0
		11  789  FETCH_DIM_R/81            $9=       16?2                 7:'results'         	;0
		12  789  FE_RESET_R/77             $10=      $9                   ?20                 	;0
		13  789  FE_FETCH_R/78             ?0        $10                  16?3                	;20	>>20	<<19
		14  790  NEW/68                    $12=      8:'Person'           ?96                 	;1
		15  790  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		16  790  DO_FCALL/60               ?9        ?8                   ?0                  	;0
		17  790  ASSIGN_DIM/147            ?7        16?1                 ?2                  	;0
		18  790  OP_DATA/137               ?0        $12                  ?0                  	;0
		19  790  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  790  FE_FREE/127               ?0        $10                  ?0                  	;0	<<12
		21  793  RETURN/62                 ?0        16?1                 ?0                  	;0
		22  794  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 *  Search Collection
	 *
	 * 	@param string $collectionName The name of the Collection
	 * 	@return Collection[]
	 */
	public function searchCollection($collectionName)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   802  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   804  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   806  INIT_METHOD_CALL/112      ?0        ?5126                1:'_call'           	;2
		3   806  SEND_VAL/65               ?80       3:'search/collection' ?1                  	;0
		4   806  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'urlencode'       	;1
		5   806  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   806  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   806  CONCAT/8                  #6=       6:'&query='          $5                  	;0
		8   806  SEND_VAL/65               ?96       #6                   ?2                  	;0
		9   806  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		10  806  ASSIGN/38                 ?4        16?2                 $7                  	;0
		11  808  FETCH_DIM_R/81            $9=       16?2                 7:'results'         	;0
		12  808  FE_RESET_R/77             $10=      $9                   ?20                 	;0
		13  808  FE_FETCH_R/78             ?0        $10                  16?3                	;20	>>20	<<19
		14  809  NEW/68                    $12=      8:'Collection'       ?96                 	;1
		15  809  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		16  809  DO_FCALL/60               ?9        ?8                   ?0                  	;0
		17  809  ASSIGN_DIM/147            ?7        16?1                 ?2                  	;0
		18  809  OP_DATA/137               ?0        $12                  ?0                  	;0
		19  809  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  809  FE_FREE/127               ?0        $10                  ?0                  	;0	<<12
		21  812  RETURN/62                 ?0        16?1                 ?0                  	;0
		22  813  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 *  Search Company
	 *
	 * 	@param string $companyName The name of the Company
	 * 	@return Company[]
	 */
	public function searchCompany($companyName)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   821  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   823  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   825  INIT_METHOD_CALL/112      ?0        ?5126                1:'_call'           	;2
		3   825  SEND_VAL/65               ?80       3:'search/company'   ?1                  	;0
		4   825  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'urlencode'       	;1
		5   825  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   825  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   825  CONCAT/8                  #6=       6:'&query='          $5                  	;0
		8   825  SEND_VAL/65               ?96       #6                   ?2                  	;0
		9   825  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		10  825  ASSIGN/38                 ?4        16?2                 $7                  	;0
		11  827  FETCH_DIM_R/81            $9=       16?2                 7:'results'         	;0
		12  827  FE_RESET_R/77             $10=      $9                   ?20                 	;0
		13  827  FE_FETCH_R/78             ?0        $10                  16?3                	;20	>>20	<<19
		14  828  NEW/68                    $12=      8:'Company'          ?96                 	;1
		15  828  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		16  828  DO_FCALL/60               ?9        ?8                   ?0                  	;0
		17  828  ASSIGN_DIM/147            ?7        16?1                 ?2                  	;0
		18  828  OP_DATA/137               ?0        $12                  ?0                  	;0
		19  828  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  828  FE_FREE/127               ?0        $10                  ?0                  	;0	<<12
		21  831  RETURN/62                 ?0        16?1                 ?0                  	;0
		22  832  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 *  Find
	 *
	 * 	@param string $companyName The name of the Company
	 * 	@return array
	 */
	public function find($id, $external_source)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   844  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   844  RECV_INIT/64              16?1=     ?2                   0:'imdb_id'         	;0
		2   846  ASSIGN/38                 ?0        16?2                 1:array (
)         	;0
		3   848  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		4   848  CONCAT/8                  #6=       4:'find/'            16?0                	;0
		5   848  SEND_VAL/65               ?80       #6                   ?1                  	;0
		6   848  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'urlencode'       	;1
		7   848  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8   848  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		9   848  CONCAT/8                  #8=       7:'&external_source=' $7                  	;0
		10  848  SEND_VAL/65               ?96       #8                   ?2                  	;0
		11  848  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		12  848  ASSIGN/38                 ?5        16?3                 $9                  	;0
		13  850  FETCH_DIM_R/81            $11=      16?3                 8:'movie_results'   	;0
		14  850  FE_RESET_R/77             $12=      $11                  ?23                 	;0
		15  850  FE_FETCH_R/78             ?0        $12                  16?4                	;23	>>23	<<22
		16  851  NEW/68                    $15=      10:'Movie'           ?96                 	;1
		17  851  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		18  851  DO_FCALL/60               ?11       ?8                   ?0                  	;0
		19  851  FETCH_DIM_W/84            $13=      16?2                 9:'movies'          	;0
		20  851  ASSIGN_DIM/147            ?9        $13                  ?2                  	;0
		21  851  OP_DATA/137               ?0        $15                  ?0                  	;0
		22  851  JMP/42                    ?0        ?15                  ?0                  	;0	>>15
		23  851  FE_FREE/127               ?0        $12                  ?0                  	;0	<<14
		24  853  FETCH_DIM_R/81            $17=      16?3                 12:'person_results' 	;0
		25  853  FE_RESET_R/77             $18=      $17                  ?34                 	;0
		26  853  FE_FETCH_R/78             ?0        $18                  16?4                	;34	>>34	<<33
		27  854  NEW/68                    $21=      14:'Person'          ?96                 	;1
		28  854  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		29  854  DO_FCALL/60               ?17       ?8                   ?0                  	;0
		30  854  FETCH_DIM_W/84            $19=      16?2                 13:'persons'        	;0
		31  854  ASSIGN_DIM/147            ?15       $19                  ?0                  	;0
		32  854  OP_DATA/137               ?0        $21                  ?0                  	;0
		33  854  JMP/42                    ?0        ?26                  ?0                  	;0	>>26
		34  854  FE_FREE/127               ?0        $18                  ?0                  	;0	<<25
		35  856  FETCH_DIM_R/81            $23=      16?3                 16:'tv_results'     	;0
		36  856  FE_RESET_R/77             $24=      $23                  ?45                 	;0
		37  856  FE_FETCH_R/78             ?0        $24                  16?4                	;45	>>45	<<44
		38  857  NEW/68                    $27=      18:'TVShow'          ?96                 	;1
		39  857  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		40  857  DO_FCALL/60               ?23       ?8                   ?0                  	;0
		41  857  FETCH_DIM_W/84            $25=      16?2                 17:'tvshows'        	;0
		42  857  ASSIGN_DIM/147            ?21       $25                  ?0                  	;0
		43  857  OP_DATA/137               ?0        $27                  ?0                  	;0
		44  857  JMP/42                    ?0        ?37                  ?0                  	;0	>>37
		45  857  FE_FREE/127               ?0        $24                  ?0                  	;0	<<36
		46  859  FETCH_DIM_R/81            $29=      16?3                 20:'tv_season_results'	;0
		47  859  FE_RESET_R/77             $30=      $29                  ?56                 	;0
		48  859  FE_FETCH_R/78             ?0        $30                  16?4                	;56	>>56	<<55
		49  860  NEW/68                    $33=      22:'Season'          ?96                 	;1
		50  860  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		51  860  DO_FCALL/60               ?29       ?8                   ?0                  	;0
		52  860  FETCH_DIM_W/84            $31=      16?2                 21:'seasons'        	;0
		53  860  ASSIGN_DIM/147            ?27       $31                  ?0                  	;0
		54  860  OP_DATA/137               ?0        $33                  ?0                  	;0
		55  860  JMP/42                    ?0        ?48                  ?0                  	;0	>>48
		56  860  FE_FREE/127               ?0        $30                  ?0                  	;0	<<47
		57  862  FETCH_DIM_R/81            $35=      16?3                 24:'tv_episode_results'	;0
		58  862  FE_RESET_R/77             $36=      $35                  ?67                 	;0
		59  862  FE_FETCH_R/78             ?0        $36                  16?4                	;67	>>67	<<66
		60  863  NEW/68                    $39=      26:'Episode'         ?96                 	;1
		61  863  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		62  863  DO_FCALL/60               ?35       ?8                   ?0                  	;0
		63  863  FETCH_DIM_W/84            $37=      16?2                 25:'episodes'       	;0
		64  863  ASSIGN_DIM/147            ?33       $37                  ?0                  	;0
		65  863  OP_DATA/137               ?0        $39                  ?0                  	;0
		66  863  JMP/42                    ?0        ?59                  ?0                  	;0	>>59
		67  863  FE_FREE/127               ?0        $36                  ?0                  	;0	<<58
		68  866  RETURN/62                 ?0        16?2                 ?0                  	;0
		69  867  NOP/0                     ?0        28:NULL              ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get Timezones
	 *
	 * 	@return array
	 */
	public function getTimezones()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   879  INIT_METHOD_CALL/112      ?0        ?1668108416          0:'_call'           	;1
		1   879  SEND_VAL/65               ?80       2:'timezones/list'   ?1                  	;0
		2   879  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		3   879  RETURN/62                 ?0        $0                   ?0                  	;0
		4   880  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get Jobs
	 *
	 * 	@return array
	 */
	public function getJobs()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   888  INIT_METHOD_CALL/112      ?0        ?1668108416          0:'_call'           	;1
		1   888  SEND_VAL/65               ?80       2:'job/list'         ?1                  	;0
		2   888  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		3   888  RETURN/62                 ?0        $0                   ?0                  	;0
		4   889  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get Movie Genres
	 *
	 * 	@return Genre[]
	 */
	public function getMovieGenres()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   898  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   900  INIT_METHOD_CALL/112      ?0        ?4442274             1:'_call'           	;1
		2   900  SEND_VAL/65               ?80       3:'genre/movie/list' ?1                  	;0
		3   900  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		4   900  ASSIGN/38                 ?2        16?1                 $4                  	;0
		5   902  FETCH_DIM_R/81            $6=       16?1                 4:'genres'          	;0
		6   902  FE_RESET_R/77             $7=       $6                   ?14                 	;0
		7   902  FE_FETCH_R/78             ?0        $7                   16?2                	;14	>>14	<<13
		8   903  NEW/68                    $9=       5:'Genre'            ?96                 	;1
		9   903  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		10  903  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		11  903  ASSIGN_DIM/147            ?5        16?0                 ?1                  	;0
		12  903  OP_DATA/137               ?0        $9                   ?0                  	;0
		13  903  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
		14  903  FE_FREE/127               ?0        $7                   ?0                  	;0	<<6
		15  906  RETURN/62                 ?0        16?0                 ?0                  	;0
		16  907  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 * 	Get TV Genres
	 *
	 * 	@return Genre[]
	 */
	public function getTVGenres()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   916  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   918  INIT_METHOD_CALL/112      ?0        ?4442274             1:'_call'           	;1
		2   918  SEND_VAL/65               ?80       3:'genre/tv/list'    ?1                  	;0
		3   918  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		4   918  ASSIGN/38                 ?2        16?1                 $4                  	;0
		5   920  FETCH_DIM_R/81            $6=       16?1                 4:'genres'          	;0
		6   920  FE_RESET_R/77             $7=       $6                   ?14                 	;0
		7   920  FE_FETCH_R/78             ?0        $7                   16?2                	;14	>>14	<<13
		8   921  NEW/68                    $9=       5:'Genre'            ?96                 	;1
		9   921  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		10  921  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		11  921  ASSIGN_DIM/147            ?5        16?0                 ?1                  	;0
		12  921  OP_DATA/137               ?0        $9                   ?0                  	;0
		13  921  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
		14  921  FE_FREE/127               ?0        $7                   ?0                  	;0	<<6
		15  924  RETURN/62                 ?0        16?0                 ?0                  	;0
		16  925  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	/**
	 *  Get Movies by Genre
	 *
	 *  @param integer $idGenre
	 * 	@param integer $page
	 * 	@return Movie[]
	 */
	public function getMoviesByGenre($idGenre, $page)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   938  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   938  RECV_INIT/64              16?1=     ?2                   0:1                 	;0
		2   940  ASSIGN/38                 ?0        16?2                 1:array (
)         	;0
		3   942  INIT_METHOD_CALL/112      ?0        ?4442274             2:'_call'           	;2
		4   942  CONCAT/8                  #6=       4:'genre/'           16?0                	;0
		5   942  CONCAT/8                  #7=       #6                   5:'/movies'         	;0
		6   942  SEND_VAL/65               ?80       #7                   ?1                  	;0
		7   942  CONCAT/8                  #8=       6:'&page='           16?1                	;0
		8   942  SEND_VAL/65               ?96       #8                   ?2                  	;0
		9   942  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		10  942  ASSIGN/38                 ?5        16?3                 $9                  	;0
		11  944  FETCH_DIM_R/81            $11=      16?3                 7:'results'         	;0
		12  944  FE_RESET_R/77             $12=      $11                  ?20                 	;0
		13  944  FE_FETCH_R/78             ?0        $12                  16?4                	;20	>>20	<<19
		14  945  NEW/68                    $14=      8:'Movie'            ?96                 	;1
		15  945  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		16  945  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		17  945  ASSIGN_DIM/147            ?8        16?2                 ?2                  	;0
		18  945  OP_DATA/137               ?0        $14                  ?0                  	;0
		19  945  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  945  FE_FREE/127               ?0        $12                  ?0                  	;0	<<12
		21  948  RETURN/62                 ?0        16?2                 ?0                  	;0
		22  949  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   75   INCLUDE_OR_EVAL/73        ?0        0:'TMDb/Movie.php'   ?0                  	;2
1   76   INCLUDE_OR_EVAL/73        ?1        1:'TMDb/TVShow.php'  ?0                  	;2
2   77   INCLUDE_OR_EVAL/73        ?2        2:'TMDb/Season.php'  ?0                  	;2
3   78   INCLUDE_OR_EVAL/73        ?3        3:'TMDb/Episode.php' ?0                  	;2
4   79   INCLUDE_OR_EVAL/73        ?4        4:'TMDb/Person.php'  ?0                  	;2
5   80   INCLUDE_OR_EVAL/73        ?5        5:'TMDb/Role.php'    ?0                  	;2
6   81   INCLUDE_OR_EVAL/73        ?6        6:'TMDb/roles/MovieRole.php' ?0                  	;2
7   82   INCLUDE_OR_EVAL/73        ?7        7:'TMDb/roles/TVShowRole.php' ?0                  	;2
8   83   INCLUDE_OR_EVAL/73        ?8        8:'TMDb/Collection.php' ?0                  	;2
9   84   INCLUDE_OR_EVAL/73        ?9        9:'TMDb/Company.php' ?0                  	;2
10  85   INCLUDE_OR_EVAL/73        ?10       10:'TMDb/Genre.php'  ?0                  	;2
11  86   INCLUDE_OR_EVAL/73        ?11       11:'TMDb/config/APIConfiguration.php' ?0                  	;2
12  88   NOP/0                     ?0        ?0                   ?0                  	;0
13  951  NOP/0                     ?0        12:1                 ?0                  	;4294967295
*/

?>