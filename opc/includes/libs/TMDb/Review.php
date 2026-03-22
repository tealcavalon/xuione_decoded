<?php


/**
 *  This class handles all the data you can get from a Review
 *
 *  @author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 *  @version 0.1
 *  @date 31/03/2016
 *  @link https://github.com/Alvaroctal/TMDB-PHP-API
 *  @copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class Review
{
	private $_data;

	/**
     *  Construct Class
     *
     *  @param array $data An array with the data of a Review
     */
	public function __construct($data)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  26  ASSIGN_OBJ/136            ?0        ?1669234928          0:'_data'           	;0
		2  26  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  27  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Review's id
     *
     *  @return int
     **/
	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  39  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  39  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  39  RETURN/62                 ?0        $1                   ?0                  	;0
		3  40  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Review's author
     *
     *  @return string
     */
	public function getAuthor()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  48  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  48  FETCH_DIM_R/81            $1=       $0                   1:'author'          	;0
		2  48  RETURN/62                 ?0        $1                   ?0                  	;0
		3  49  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Review's content
     *
     *  @return string
     */
	public function getContent()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  57  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  57  FETCH_DIM_R/81            $1=       $0                   1:'content'         	;0
		2  57  RETURN/62                 ?0        $1                   ?0                  	;0
		3  58  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Review's url
     *
     *  @return string
     */
	public function getURL()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  66  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  66  FETCH_DIM_R/81            $1=       $0                   1:'url'             	;0
		2  66  RETURN/62                 ?0        $1                   ?0                  	;0
		3  67  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
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
		0  76  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  77  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  77  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  77  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4  77  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  77  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  77  FETCH_OBJ_R/82            $4=       ?1667550088          2:'_data'           	;0	<<2
		7  77  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  77  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  77  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 78  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
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
		0  90  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1  90  FETCH_OBJ_FUNC_ARG/94     $0=       ?4294967040          2:'_data'           	;1
		2  90  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3  90  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4  90  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5  90  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6  90  RETURN/62                 ?0        $2                   ?0                  	;0
		7  91  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  12  NOP/0                     ?0        ?0                   ?0                  	;0
1  93  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>