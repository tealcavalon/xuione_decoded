<?php


/**
 *  This class handles all the data you can get from a Company
 *
 *  @author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 *  @version 0.1
 *  @date 11/01/2015
 *  @link https://github.com/Alvaroctal/TMDB-PHP-API
 *  @copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class Company
{
	private $_data;

	/**
     *  Construct Class
     *
     *  @param array $data An array with the data of a Company
     */
	public function __construct($data)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  26  ASSIGN_OBJ/136            ?0        ?1                   0:'_data'           	;0
		2  26  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  27  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Company's name
     *
     *  @return string
     */
	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  39  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  39  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  39  RETURN/62                 ?0        $1                   ?0                  	;0
		3  40  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Company's id
     *
     *  @return int
     */
	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  48  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  48  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  48  RETURN/62                 ?0        $1                   ?0                  	;0
		3  49  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Company's description
     *
     *  @return string
     */
	public function getDescription()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  57  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  57  FETCH_DIM_R/81            $1=       $0                   1:'description'     	;0
		2  57  RETURN/62                 ?0        $1                   ?0                  	;0
		3  58  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Company's headquearters
     *
     *  @return string
     */
	public function getHeadquarters()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  66  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  66  FETCH_DIM_R/81            $1=       $0                   1:'headquarters'    	;0
		2  66  RETURN/62                 ?0        $1                   ?0                  	;0
		3  67  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Company's homepage
     *
     *  @return string
     */
	public function getHomepage()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  75  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  75  FETCH_DIM_R/81            $1=       $0                   1:'homepage'        	;0
		2  75  RETURN/62                 ?0        $1                   ?0                  	;0
		3  76  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Company's logo
     *
     *  @return string
     */
	public function getLogo()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  84  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  84  FETCH_DIM_R/81            $1=       $0                   1:'logo_path'       	;0
		2  84  RETURN/62                 ?0        $1                   ?0                  	;0
		3  85  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Company's parent company id
     *
     *  @return int
     */
	public function getParentCompanyID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  93  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  93  FETCH_DIM_R/81            $1=       $0                   1:'parent_company'  	;0
		2  93  RETURN/62                 ?0        $1                   ?0                  	;0
		3  94  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the Company's Movies
     *
     *  @return Movie[]
     */
	public function getMovies()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   102  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   104  FETCH_OBJ_R/82            $3=       ?1667551008          1:'_data'           	;0
		2   104  FETCH_DIM_R/81            $4=       $3                   2:'movies'          	;0
		3   104  FETCH_DIM_R/81            $5=       $4                   3:'results'         	;0
		4   104  FE_RESET_R/77             $6=       $5                   ?12                 	;0
		5   104  FE_FETCH_R/78             ?0        $6                   16?1                	;12	>>12	<<11
		6   105  NEW/68                    $8=       4:'Movie'            ?96                 	;1
		7   105  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8   105  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		9   105  ASSIGN_DIM/147            ?5        16?0                 ?2670193456         	;0
		10  105  OP_DATA/137               ?0        $8                   ?0                  	;0
		11  105  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		12  105  FE_FREE/127               ?0        $6                   ?0                  	;0	<<4
		13  108  RETURN/62                 ?0        16?0                 ?0                  	;0
		14  109  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get Generic.<br>
     *  Get a item of the array, you should not get used to use this, better use specific get's.
     *
     *  @param string $item The item of the $data array you want
     *  @return array
     */
	public function get($item)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   118  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   119  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2   119  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   119  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4   119  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5   119  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6   119  FETCH_OBJ_R/82            $4=       ?1667551096          2:'_data'           	;0	<<2
		7   119  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8   119  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9   119  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10  120  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the JSON representation of the Movie
     *
     *  @return string
     */
	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   132  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1   132  FETCH_OBJ_FUNC_ARG/94     $0=       ?4294967040          2:'_data'           	;1
		2   132  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3   132  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4   132  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5   132  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6   132  RETURN/62                 ?0        $2                   ?0                  	;0
		7   133  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   12   NOP/0                     ?0        ?0                   ?0                  	;0
1   135  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>