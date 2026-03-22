<?php


class M3uParser
{
	/**
     * Parse m3u file.
     */
	public function parseFile(string $file): M3uData
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  9   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  11  BEGIN_SILENCE/57          #2=       ?0                   ?0                  	;0
		2  11  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'file_get_contents'	;1
		3  11  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4  11  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		5  11  END_SILENCE/58            ?0        #2                   ?0                  	;0
		6  11  ASSIGN/38                 ?2        16?1                 $3                  	;0
		7  12  IS_IDENTICAL/15           #5=       2:false              16?1                	;0
		8  12  JMPZ/43                   ?0        #5                   ?13                 	;0	>>13
		9  13  NEW/68                    $6=       3:'Exception'        ?96                 	;1
		10 13  SEND_VAL_EX/116           ?80       5:'Can\'t read file.' ?1                  	;0
		11 13  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		12 13  THROW/108                 ?0        $6                   ?0                  	;0
		13 16  INIT_METHOD_CALL/112      ?0        ?2670194080          6:'parse'           	;1	<<8
		14 16  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		15 16  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		16 16  VERIFY_RETURN_TYPE/124    ?0        $8                   ?64                 	;0
		17 16  RETURN/62                 ?0        $8                   ?0                  	;0
		18 17  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?80                 	;0
		19 17  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Parse m3u string.
     */
	public function parse(string $str): M3uData
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  22  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  24  INIT_METHOD_CALL/112      ?0        ?4377971             0:'removeBom'       	;1
		2  24  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3  24  DO_FCALL/60               ?0        ?0                   ?0                  	;0
		4  26  INIT_METHOD_CALL/112      ?0        ?0                   2:'createM3uData'   	;0
		5  26  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		6  26  ASSIGN/38                 ?2        16?1                 $8                  	;0
		7  27  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'explode'         	;2
		8  27  SEND_VAL_EX/116           ?80       6:'
'                ?1                  	;0
		9  27  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		10 27  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		11 27  ASSIGN/38                 ?4        16?2                 $10                 	;0
		12 29  ASSIGN/38                 ?5        16?3                 7:0                 	;0
		13 29  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'count'           	;1
		14 29  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		15 29  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		16 29  ASSIGN/38                 ?7        16?4                 $13                 	;0
		17 29  JMP/42                    ?0        ?56                  ?0                  	;0	>>56
		18 30  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'trim'           	;1	<<57
		19 30  FETCH_DIM_FUNC_ARG/93     $15=      16?2                 16?3                	;1
		20 30  SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
		21 30  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		22 30  ASSIGN/38                 ?10       16?5                 $16                 	;0
		23 31  IS_IDENTICAL/15           #18=      12:''                16?5                	;0
		24 31  JMPNZ_EX/47               #18=      #18                  ?29                 	;0	>>29
		25 31  INIT_METHOD_CALL/112      ?0        ?160                 13:'isComment'      	;1
		26 31  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		27 31  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		28 31  BOOL/52                   #18=      $19                  ?0                  	;0
		29 31  JMPZ/43                   ?0        #18                  ?31                 	;0	>>31	<<24
		30 32  JMP/42                    ?0        ?55                  ?0                  	;0	>>55
		31 35  INIT_METHOD_CALL/112      ?0        ?4397406             15:'isExtM3u'       	;1	<<29
		32 35  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		33 35  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		34 35  JMPZ/43                   ?0        $20                  ?48                 	;0	>>48
		35 36  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'trim'           	;1
		36 36  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'substr'         	;2
		37 36  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		38 36  SEND_VAL_EX/116           ?96       21:7                 ?2                  	;0
		39 36  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		40 36  SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
		41 36  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		42 36  ASSIGN/38                 ?16       16?6                 $22                 	;0
		43 37  JMPZ/43                   ?0        16?6                 ?47                 	;0	>>47
		44 38  INIT_METHOD_CALL/112      ?0        16?1                 22:'initAttributes' 	;1
		45 38  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		46 38  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		47 41  JMP/42                    ?0        ?55                  ?0                  	;0	>>55	<<43
		48 44  INIT_METHOD_CALL/112      ?0        16?1                 24:'append'         	;1	<<34
		49 44  INIT_METHOD_CALL/112      ?0        ?0                   26:'parseLine'      	;2
		50 44  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		51 44  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		52 44  DO_FCALL/60               $25=      ?0                   ?0                  	;0
		53 44  SEND_VAR_NO_REF_EX/50     ?80       $25                  ?1                  	;0
		54 44  DO_FCALL/60               ?19       ?0                   ?0                  	;0
		55 29  PRE_INC/34                ?20       16?3                 ?0                  	;0	<<30,47
		56 29  IS_SMALLER/19             #28=      16?3                 16?4                	;0	<<17
		57 29  JMPNZ/44                  ?0        #28                  ?18                 	;0	>>18
		58 47  VERIFY_RETURN_TYPE/124    ?0        16?1                 ?304                	;0
		59 47  RETURN/62                 ?0        16?1                 ?0                  	;0
		60 48  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?320                	;0
		61 48  NOP/0                     ?0        28:NULL              ?0                  	;4294967295
		*/
	}

	protected function createM3uEntry(): M3uEntry
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  52  NEW/68                    $0=       0:'M3uEntry'         ?64                 	;0
		1  52  DO_FCALL/60               ?1        ?8                   ?0                  	;0
		2  52  VERIFY_RETURN_TYPE/124    ?0        $0                   ?16                 	;0
		3  52  RETURN/62                 ?0        $0                   ?0                  	;0
		4  53  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?32                 	;0
		5  53  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	protected function createM3uData(): M3uData
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  57  NEW/68                    $0=       0:'M3uData'          ?64                 	;0
		1  57  DO_FCALL/60               ?1        ?8                   ?0                  	;0
		2  57  VERIFY_RETURN_TYPE/124    ?0        $0                   ?16                 	;0
		3  57  RETURN/62                 ?0        $0                   ?0                  	;0
		4  58  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?32                 	;0
		5  58  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Parse one line.
     *
     * @param string[] $linesStr
     */
	protected function parseLine(int &$lineNumber, array $linesStr): M3uEntry
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  65  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  65  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  67  INIT_METHOD_CALL/112      ?0        ?4410621             0:'createM3uEntry'  	;0
		3  67  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		4  67  ASSIGN/38                 ?1        16?2                 $7                  	;0
		5  69  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'count'           	;1
		6  69  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7  69  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		8  69  ASSIGN/38                 ?3        16?3                 $9                  	;0
		9  69  JMP/42                    ?0        ?57                  ?0                  	;0	>>57
		10 70  FETCH_DIM_R/81            $11=      16?1                 16?0                	;0	<<58
		11 70  ASSIGN/38                 ?5        16?4                 $11                 	;0
		12 71  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'trim'            	;1
		13 71  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		14 71  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		15 71  ASSIGN/38                 ?7        16?4                 $13                 	;0
		16 73  IS_IDENTICAL/15           #15=      6:''                 16?4                	;0
		17 73  JMPNZ_EX/47               #15=      #15                  ?22                 	;0	>>22
		18 73  INIT_METHOD_CALL/112      ?0        ?144                 7:'isComment'       	;1
		19 73  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		20 73  DO_FCALL/60               $16=      ?0                   ?0                  	;0
		21 73  BOOL/52                   #15=      $16                  ?0                  	;0
		22 73  JMPNZ_EX/47               #15=      #15                  ?27                 	;0	>>27	<<17
		23 73  INIT_METHOD_CALL/112      ?0        ?4419182             9:'isExtM3u'        	;1
		24 73  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		25 73  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		26 73  BOOL/52                   #15=      $17                  ?0                  	;0
		27 73  JMPZ/43                   ?0        #15                  ?29                 	;0	>>29	<<22
		28 74  JMP/42                    ?0        ?56                  ?0                  	;0	>>56
		29 77  ASSIGN/38                 ?11       16?5                 11:false            	;0	<<27
		30 78  INIT_METHOD_CALL/112      ?0        ?4375657             12:'getTags'        	;0
		31 78  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		32 78  FE_RESET_R/77             $20=      $19                  ?49                 	;0
		33 78  FE_FETCH_R/78             ?0        $20                  16?6                	;49	>>49	<<48
		34 79  FETCH_CLASS/109           $21=      ?0                   16?6                	;512
		35 79  INIT_STATIC_METHOD_CALL/113 ?0        $21                  14:'isMatch'        	;1
		36 79  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		37 79  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		38 79  JMPZ/43                   ?0        $22                  ?48                 	;0	>>48
		39 80  ASSIGN/38                 ?16       16?5                 16:true             	;0
		40 81  INIT_METHOD_CALL/112      ?0        16?2                 17:'addExtTag'      	;1
		41 81  FETCH_CLASS/109           $24=      ?0                   16?6                	;512
		42 81  NEW/68                    $25=      $24                  ?96                 	;1
		43 81  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		44 81  DO_FCALL/60               ?19       ?8                   ?0                  	;0
		45 81  SEND_VAR_NO_REF_EX/50     ?80       $25                  ?1                  	;0
		46 81  DO_FCALL/60               ?20       ?0                   ?0                  	;0
		47 83  BRK/254                   ?0        ?49                  0:1                 	;0
		48 83  JMP/42                    ?0        ?33                  ?0                  	;0	>>33	<<38
		49 83  FE_FREE/127               ?0        $20                  ?0                  	;0	<<32
		50 87  BOOL_NOT/13               #28=      16?5                 ?0                  	;0
		51 87  JMPZ/43                   ?0        #28                  ?56                 	;0	>>56
		52 88  INIT_METHOD_CALL/112      ?0        16?2                 19:'setPath'        	;1
		53 88  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		54 88  DO_FCALL/60               ?22       ?0                   ?0                  	;0
		55 90  BRK/254                   ?0        ?59                  0:1                 	;0
		56 69  PRE_INC/34                ?23       16?0                 ?0                  	;0	<<28,51
		57 69  IS_SMALLER/19             #31=      16?0                 16?3                	;0	<<9
		58 69  JMPNZ/44                  ?0        #31                  ?10                 	;0	>>10
		59 94  VERIFY_RETURN_TYPE/124    ?0        16?2                 ?256                	;0
		60 94  RETURN/62                 ?0        16?2                 ?0                  	;0
		61 95  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?272                	;0
		62 95  NOP/0                     ?0        21:NULL              ?0                  	;4294967295
		*/
	}

	protected function removeBom(string &$str): void
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   97   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   99   INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'strpos'          	;2
		2   99   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   99   SEND_VAL_EX/116           ?96       2:'﻿'              ?2                  	;0
		4   99   DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		5   99   IS_IDENTICAL/15           #2=       3:0                  $1                  	;0
		6   99   JMPZ/43                   ?0        #2                   ?12                 	;0	>>12
		7   100  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'substr'          	;2
		8   100  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   100  SEND_VAL_EX/116           ?96       6:3                  ?2                  	;0
		10  100  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		11  100  ASSIGN/38                 ?3        16?0                 $3                  	;0
		12  102  NOP/0                     ?0        7:NULL               ?0                  	;4294967295	<<6
		*/
	}

	protected function isExtM3u(string $lineStr): bool
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   104  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   106  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'stripos'         	;2
		2   106  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   106  SEND_VAL_EX/116           ?96       2:'#EXTM3U'          ?2                  	;0
		4   106  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		5   106  IS_IDENTICAL/15           #2=       3:0                  $1                  	;0
		6   106  VERIFY_RETURN_TYPE/124    ?0        #2                   ?4294967294         	;0
		7   106  RETURN/62                 ?0        #2                   ?0                  	;0
		8   107  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		9   107  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	protected function isComment(string $lineStr): bool
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   109  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   111  ASSIGN/38                 ?0        16?1                 0:false             	;0
		2   112  INIT_METHOD_CALL/112      ?0        ?4375657             1:'getTags'         	;0
		3   112  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		4   112  FE_RESET_R/77             $5=       $4                   ?14                 	;0
		5   112  FE_FETCH_R/78             ?0        $5                   16?2                	;14	>>14	<<13
		6   113  FETCH_CLASS/109           $6=       ?0                   16?2                	;512
		7   113  INIT_STATIC_METHOD_CALL/113 ?0        $6                   3:'isMatch'         	;1
		8   113  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   113  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		10  113  JMPZ/43                   ?0        $7                   ?13                 	;0	>>13
		11  114  ASSIGN/38                 ?5        16?1                 5:true              	;0
		12  116  BRK/254                   ?0        ?14                  0:1                 	;0
		13  116  JMP/42                    ?0        ?5                   ?0                  	;0	>>5	<<10
		14  116  FE_FREE/127               ?0        $5                   ?0                  	;0	<<4
		15  120  BOOL_NOT/13               #9=       16?1                 ?0                  	;0
		16  120  JMPZ_EX/46                #9=       #9                   ?23                 	;0	>>23
		17  120  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'strpos'          	;2
		18  120  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		19  120  SEND_VAL_EX/116           ?96       8:'#'                ?2                  	;0
		20  120  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		21  120  IS_IDENTICAL/15           #11=      9:0                  $10                 	;0
		22  120  BOOL/52                   #9=       #11                  ?0                  	;0
		23  120  JMPZ_EX/46                #9=       #9                   ?29                 	;0	>>29	<<16
		24  120  INIT_METHOD_CALL/112      ?0        ?0                   10:'isExtM3u'       	;1
		25  120  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		26  120  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		27  120  BOOL_NOT/13               #13=      $12                  ?0                  	;0
		28  120  BOOL/52                   #9=       #13                  ?0                  	;0
		29  120  VERIFY_RETURN_TYPE/124    ?0        #9                   ?4294967294         	;0	<<23
		30  120  RETURN/62                 ?0        #9                   ?0                  	;0
		31  121  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		32  121  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
		*/
	}
}

trait TagAttributesTrait
{
	/**
     * @var array
     */
	private $attributes = [];

	/**
     * example string: tvg-ID="" tvg-name="MEDI 1 SAT" tvg-logo="" group-title="ARABIC".
     */
	public function initAttributes(string $attrString): void
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   134  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   136  INIT_METHOD_CALL/112      ?0        ?0                   0:'parseQuotedAttributes'	;1
		2   136  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   136  DO_FCALL/60               ?0        ?0                   ?0                  	;0
		4   137  INIT_METHOD_CALL/112      ?0        ?0                   2:'parseNotQuotedAttributes'	;1
		5   137  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   137  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		7   138  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function getAttributes(): array
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   142  FETCH_OBJ_R/82            $0=       ?5126                0:'attributes'      	;0
		1   142  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   142  RETURN/62                 ?0        $0                   ?0                  	;0
		3   143  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   143  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getAttribute(string $name): ?string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   145  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   147  FETCH_OBJ_IS/91           $1=       ?2670194000          0:'attributes'      	;0
		2   147  FETCH_DIM_IS/90           $2=       $1                   16?0                	;0
		3   147  COALESCE/169              #3=       $2                   ?5                  	;0
		4   147  QM_ASSIGN/22              #3=       1:NULL               ?0                  	;0
		5   147  VERIFY_RETURN_TYPE/124    ?0        #3                   ?4294967294         	;0
		6   147  RETURN/62                 ?0        #3                   ?0                  	;0
		7   148  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		8   148  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function hasAttribute(string $name): bool
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   150  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   152  FETCH_OBJ_IS/91           $1=       ?1666132064          0:'attributes'      	;0
		2   152  ISSET_ISEMPTY_DIM_OBJ/115 #2=       $1                   16?0                	;33554432
		3   152  VERIFY_RETURN_TYPE/124    ?0        #2                   ?4294967294         	;0
		4   152  RETURN/62                 ?0        #2                   ?0                  	;0
		5   153  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		6   153  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return $this
     */
	public function setAttributes(array $attributes): TagAttributesTrait
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   158  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   160  ASSIGN_OBJ/136            ?0        ?4433110             0:'attributes'      	;0
		2   160  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   162  FETCH_THIS/184            $2=       ?0                   ?0                  	;0
		4   162  VERIFY_RETURN_TYPE/124    ?0        $2                   ?32                 	;0
		5   162  RETURN/62                 ?0        $2                   ?0                  	;0
		6   163  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		7   163  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return $this
     */
	public function setAttribute(string $name, string $value): TagAttributesTrait
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   168  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   168  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   170  FETCH_OBJ_W/85            $2=       ?4414262             0:'attributes'      	;0
		3   170  ASSIGN_DIM/147            ?1        $2                   16?0                	;0
		4   170  OP_DATA/137               ?0        16?1                 ?0                  	;0
		5   172  FETCH_THIS/184            $4=       ?0                   ?0                  	;0
		6   172  VERIFY_RETURN_TYPE/124    ?0        $4                   ?32                 	;0
		7   172  RETURN/62                 ?0        $4                   ?0                  	;0
		8   173  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		9   173  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	protected function getAttributesString(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   177  ASSIGN/38                 ?0        16?0                 0:''                	;0
		1   179  INIT_METHOD_CALL/112      ?0        ?0                   1:'getAttributes'   	;0
		2   179  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		3   179  FE_RESET_R/77             $5=       $4                   ?11                 	;0
		4   179  FE_FETCH_R/78             #6=       $5                   16?1                	;11	>>11	<<10
		5   179  ASSIGN/38                 ?4        16?2                 #6                  	;0
		6   180  CONCAT/8                  #8=       16?2                 3:'="'              	;0
		7   180  CONCAT/8                  #9=       #8                   16?1                	;0
		8   180  CONCAT/8                  #10=      #9                   4:'" '              	;0
		9   180  ASSIGN_CONCAT/30          ?8        16?0                 #10                 	;0
		10  180  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		11  180  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		12  183  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'rtrim'           	;1
		13  183  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		14  183  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		15  183  VERIFY_RETURN_TYPE/124    ?0        $12                  ?4294967294         	;0
		16  183  RETURN/62                 ?0        $12                  ?0                  	;0
		17  184  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		18  184  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	private function parseQuotedAttributes(string $attrString): void
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   186  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   188  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'preg_match_all'  	;4
		2   188  SEND_VAL_EX/116           ?80       2:'/([a-zA-Z0-9\\-]+)="([^"]*)"/' ?1                  	;0
		3   188  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		4   188  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		5   188  FETCH_CONSTANT/99         #3=       ?0                   3:'PREG_SET_ORDER'  	;0
		6   188  SEND_VAL_EX/116           ?128      #3                   ?4                  	;0
		7   188  DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
		8   190  FE_RESET_R/77             $5=       16?1                 ?17                 	;0
		9   190  FE_FETCH_R/78             ?0        $5                   16?2                	;17	>>17	<<16
		10  191  INIT_METHOD_CALL/112      ?0        ?7                   6:'setAttribute'    	;2
		11  191  FETCH_DIM_FUNC_ARG/93     $6=       16?2                 8:1                 	;1
		12  191  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		13  191  FETCH_DIM_FUNC_ARG/93     $7=       16?2                 9:2                 	;2
		14  191  SEND_VAR_EX/66            ?96       $7                   ?2                  	;0
		15  191  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		16  191  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		17  191  FE_FREE/127               ?0        $5                   ?0                  	;0	<<8
		18  193  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	private function parseNotQuotedAttributes(string $attrString): void
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   195  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   197  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'preg_match_all'  	;4
		2   197  SEND_VAL_EX/116           ?80       2:'/([a-zA-Z0-9\\-]+)=([^ "]+)/' ?1                  	;0
		3   197  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		4   197  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		5   197  FETCH_CONSTANT/99         #3=       ?0                   3:'PREG_SET_ORDER'  	;0
		6   197  SEND_VAL_EX/116           ?128      #3                   ?4                  	;0
		7   197  DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
		8   199  FE_RESET_R/77             $5=       16?1                 ?17                 	;0
		9   199  FE_FETCH_R/78             ?0        $5                   16?2                	;17	>>17	<<16
		10  200  INIT_METHOD_CALL/112      ?0        ?7                   6:'setAttribute'    	;2
		11  200  FETCH_DIM_FUNC_ARG/93     $6=       16?2                 8:1                 	;1
		12  200  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		13  200  FETCH_DIM_FUNC_ARG/93     $7=       16?2                 9:2                 	;2
		14  200  SEND_VAR_EX/66            ?96       $7                   ?2                  	;0
		15  200  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		16  200  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		17  200  FE_FREE/127               ?0        $5                   ?0                  	;0	<<8
		18  202  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}
}

trait TagsManagerTrait
{
	/**
     * @var array
     */
	private $tags = [];

	/**
     * Add tag.
     *
     * @param string $tag class name must be implement ExtTagInterface interface
     *
     * @return $this
     */
	public function addTag(string $tag): TagsManagerTrait
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   219  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   221  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'in_array'        	;3
		2   221  SEND_VAL_EX/116           ?80       2:'ExtTagInterface'  ?1                  	;0
		3   221  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'class_implements'	;1
		4   221  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   221  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		6   221  SEND_VAR_NO_REF_EX/50     ?96       $1                   ?2                  	;0
		7   221  SEND_VAL_EX/116           ?112      5:true               ?3                  	;0
		8   221  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		9   221  BOOL_NOT/13               #3=       $2                   ?0                  	;0
		10  221  JMPZ/43                   ?0        #3                   ?20                 	;0	>>20
		11  222  NEW/68                    $4=       6:'Exception'        ?256                	;1
		12  222  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'sprintf'         	;3
		13  222  SEND_VAL_EX/116           ?80       10:'The class %s must be implement interface %s' ?1                  	;0
		14  222  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15  222  SEND_VAL_EX/116           ?112      11:'ExtTagInterface' ?3                  	;0
		16  222  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		17  222  SEND_VAR_NO_REF_EX/50     ?80       $5                   ?1                  	;0
		18  222  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		19  222  THROW/108                 ?0        $4                   ?0                  	;0
		20  225  FETCH_OBJ_W/85            $7=       ?4410621             12:'tags'           	;0	<<10
		21  225  ASSIGN_DIM/147            ?7        $7                   ?0                  	;0
		22  225  OP_DATA/137               ?0        16?0                 ?0                  	;0
		23  227  FETCH_THIS/184            $9=       ?0                   ?0                  	;0
		24  227  VERIFY_RETURN_TYPE/124    ?0        $9                   ?96                 	;0
		25  227  RETURN/62                 ?0        $9                   ?0                  	;0
		26  228  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?112                	;0
		27  228  NOP/0                     ?0        13:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Add default tags (EXTINF, EXTTV, EXTLOGO).
     *
     * @return $this
     */
	public function addDefaultTags(): TagsManagerTrait
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   237  INIT_METHOD_CALL/112      ?0        ?4377971             0:'addTag'          	;1
		1   237  SEND_VAL_EX/116           ?80       2:'ExtInf'           ?1                  	;0
		2   237  DO_FCALL/60               ?0        ?0                   ?0                  	;0
		3   238  INIT_METHOD_CALL/112      ?0        ?4377971             3:'addTag'          	;1
		4   238  SEND_VAL_EX/116           ?80       5:'ExtTv'            ?1                  	;0
		5   238  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		6   239  INIT_METHOD_CALL/112      ?0        ?4377971             6:'addTag'          	;1
		7   239  SEND_VAL_EX/116           ?80       8:'ExtLogo'          ?1                  	;0
		8   239  DO_FCALL/60               ?2        ?0                   ?0                  	;0
		9   240  FETCH_THIS/184            $3=       ?0                   ?0                  	;0
		10  240  VERIFY_RETURN_TYPE/124    ?0        $3                   ?96                 	;0
		11  240  RETURN/62                 ?0        $3                   ?0                  	;0
		12  241  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?112                	;0
		13  241  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Remove all previously defined tags.
     *
     * @return $this
     */
	public function clearTags(): TagsManagerTrait
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   250  ASSIGN_OBJ/136            ?0        ?2670194352          0:'tags'            	;0
		1   250  OP_DATA/137               ?0        1:array (
)          ?0                  	;0
		2   252  FETCH_THIS/184            $1=       ?0                   ?0                  	;0
		3   252  VERIFY_RETURN_TYPE/124    ?0        $1                   ?32                 	;0
		4   252  RETURN/62                 ?0        $1                   ?0                  	;0
		5   253  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		6   253  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Get all active tags.
     *
     * @return string[]
     */
	protected function getTags(): array
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   262  FETCH_OBJ_R/82            $0=       ?2670194256          0:'tags'            	;0
		1   262  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   262  RETURN/62                 ?0        $0                   ?0                  	;0
		3   263  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   263  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

class M3uEntry
{
	/**
     * @var string
     */
	protected $lineDelimiter = "\n";
	/**
     * @var ExtTagInterface[]
     */
	private $extTags = [];
	/**
     * @var null|string
     */
	private $path;

	public function __toString(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   283  ASSIGN/38                 ?0        16?0                 0:''                	;0
		1   284  INIT_METHOD_CALL/112      ?0        ?4397406             1:'getExtTags'      	;0
		2   284  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		3   284  FE_RESET_R/77             $4=       $3                   ?9                  	;0
		4   284  FE_FETCH_R/78             ?0        $4                   16?1                	;9	>>9	<<8
		5   285  FETCH_OBJ_R/82            $5=       ?2670194352          3:'lineDelimiter'   	;0
		6   285  CONCAT/8                  #6=       16?1                 $5                  	;0
		7   285  ASSIGN_CONCAT/30          ?5        16?0                 #6                  	;0
		8   285  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		9   285  FE_FREE/127               ?0        $4                   ?0                  	;0	<<3
		10  288  INIT_METHOD_CALL/112      ?0        ?1669224040          4:'getPath'         	;0
		11  288  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		12  288  ASSIGN_CONCAT/30          ?7        16?0                 $8                  	;0
		13  290  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'rtrim'           	;1
		14  290  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		15  290  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		16  290  VERIFY_RETURN_TYPE/124    ?0        $10                  ?4294967294         	;0
		17  290  RETURN/62                 ?0        $10                  ?0                  	;0
		18  291  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		19  291  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return ExtTagInterface[]
     */
	public function getExtTags(): array
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   298  FETCH_OBJ_R/82            $0=       ?25165824            0:'extTags'         	;0
		1   298  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   298  RETURN/62                 ?0        $0                   ?0                  	;0
		3   299  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   299  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return $this
     */
	public function addExtTag(ExtTagInterface $extTag): M3uEntry
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   304  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   306  FETCH_OBJ_W/85            $1=       ?4633841             0:'extTags'         	;0
		2   306  ASSIGN_DIM/147            ?1        $1                   ?25165824           	;0
		3   306  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4   308  FETCH_THIS/184            $3=       ?0                   ?0                  	;0
		5   308  VERIFY_RETURN_TYPE/124    ?0        $3                   ?48                 	;0
		6   308  RETURN/62                 ?0        $3                   ?0                  	;0
		7   309  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?64                 	;0
		8   309  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Remove all previously defined tags.
     *
     * @return $this
     */
	public function clearExtTags(): M3uEntry
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   318  ASSIGN_OBJ/136            ?0        ?0                   0:'extTags'         	;0
		1   318  OP_DATA/137               ?0        1:array (
)          ?0                  	;0
		2   320  FETCH_THIS/184            $1=       ?0                   ?0                  	;0
		3   320  VERIFY_RETURN_TYPE/124    ?0        $1                   ?32                 	;0
		4   320  RETURN/62                 ?0        $1                   ?0                  	;0
		5   321  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		6   321  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getPath(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   325  FETCH_OBJ_R/82            $0=       ?2670194256          0:'path'            	;0
		1   325  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   325  RETURN/62                 ?0        $0                   ?0                  	;0
		3   326  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   326  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return $this
     */
	public function setPath(string $path): M3uEntry
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   331  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   333  ASSIGN_OBJ/136            ?0        ?2670194256          0:'path'            	;0
		2   333  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   335  FETCH_THIS/184            $2=       ?0                   ?0                  	;0
		4   335  VERIFY_RETURN_TYPE/124    ?0        $2                   ?32                 	;0
		5   335  RETURN/62                 ?0        $2                   ?0                  	;0
		6   336  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		7   336  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

class M3uData
{
	public function __toString(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   345  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'rtrim'           	;1
		1   345  INIT_METHOD_CALL/112      ?0        ?4414262             2:'getAttributesString'	;0
		2   345  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   345  CONCAT/8                  #3=       4:'#EXTM3U '         $2                  	;0
		4   345  SEND_VAL_EX/116           ?80       #3                   ?1                  	;0
		5   345  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		6   345  CONCAT/8                  #5=       $4                   5:'
'               	;0
		7   345  ASSIGN/38                 ?4        16?0                 #5                  	;0
		8   347  FETCH_THIS/184            $7=       ?0                   ?0                  	;0
		9   347  FE_RESET_R/77             $8=       $7                   ?14                 	;0
		10  347  FE_FETCH_R/78             ?0        $8                   16?1                	;14	>>14	<<13
		11  348  CONCAT/8                  #9=       16?1                 6:'
'               	;0
		12  348  ASSIGN_CONCAT/30          ?8        16?0                 #9                  	;0
		13  348  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		14  348  FE_FREE/127               ?0        $8                   ?0                  	;0	<<9
		15  351  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'rtrim'           	;1
		16  351  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		17  351  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		18  351  VERIFY_RETURN_TYPE/124    ?0        $11                  ?4294967294         	;0
		19  351  RETURN/62                 ?0        $11                  ?0                  	;0
		20  352  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		21  352  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}
}

class ExtInf
{
	/**
     * @var string
     */
	private $title;
	/**
     * @var int
     */
	private $duration;

	/**
     * #EXTINF:-1 tvg-name=Первый_HD tvg-logo="Первый канал" deinterlace=4 group-title="Эфирные каналы",Первый канал HD.
     */
	public function __construct(?string $lineStr)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   371  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   373  IS_NOT_IDENTICAL/16       #1=       1:NULL               16?0                	;0
		2   373  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   374  INIT_METHOD_CALL/112      ?0        ?1                   2:'make'            	;1
		4   374  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   374  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		6   376  NOP/0                     ?0        4:NULL               ?0                  	;4294967295	<<2
		*/
	}

	public function __toString(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   380  INIT_METHOD_CALL/112      ?0        ?2670192640          0:'getDuration'     	;0
		1   380  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		2   380  CONCAT/8                  #1=       2:'#EXTINF: '        $0                  	;0
		3   380  CONCAT/8                  #2=       #1                   3:' '               	;0
		4   380  INIT_METHOD_CALL/112      ?0        ?1669058240          4:'getAttributesString'	;0
		5   380  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		6   380  CONCAT/8                  #4=       #2                   $3                  	;0
		7   380  CONCAT/8                  #5=       #4                   6:', '              	;0
		8   380  INIT_METHOD_CALL/112      ?0        ?1669221888          7:'getTitle'        	;0
		9   380  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		10  380  CONCAT/8                  #7=       #5                   $6                  	;0
		11  380  VERIFY_RETURN_TYPE/124    ?0        #7                   ?4294967294         	;0
		12  380  RETURN/62                 ?0        #7                   ?0                  	;0
		13  381  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		14  381  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return $this
     */
	public function setTitle(string $title): ExtInf
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   386  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   388  ASSIGN_OBJ/136            ?0        ?6                   0:'title'           	;0
		2   388  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   390  FETCH_THIS/184            $2=       ?0                   ?0                  	;0
		4   390  VERIFY_RETURN_TYPE/124    ?0        $2                   ?32                 	;0
		5   390  RETURN/62                 ?0        $2                   ?0                  	;0
		6   391  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		7   391  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getTitle(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   395  FETCH_OBJ_R/82            $0=       ?2670194256          0:'title'           	;0
		1   395  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   395  RETURN/62                 ?0        $0                   ?0                  	;0
		3   396  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   396  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return $this
     */
	public function setDuration(int $duration): ExtInf
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   401  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   403  ASSIGN_OBJ/136            ?0        ?2670194256          0:'duration'        	;0
		2   403  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   405  FETCH_THIS/184            $2=       ?0                   ?0                  	;0
		4   405  VERIFY_RETURN_TYPE/124    ?0        $2                   ?32                 	;0
		5   405  RETURN/62                 ?0        $2                   ?0                  	;0
		6   406  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		7   406  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getDuration(): int
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   410  FETCH_OBJ_R/82            $0=       ?2670194256          0:'duration'        	;0
		1   410  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   410  RETURN/62                 ?0        $0                   ?0                  	;0
		3   411  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   411  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	static public function isMatch(string $lineStr): bool
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   413  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   415  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'stripos'         	;2
		2   415  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   415  SEND_VAL_EX/116           ?96       2:'#EXTINF:'         ?2                  	;0
		4   415  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		5   415  IS_IDENTICAL/15           #2=       3:0                  $1                  	;0
		6   415  VERIFY_RETURN_TYPE/124    ?0        #2                   ?4294967294         	;0
		7   415  RETURN/62                 ?0        #2                   ?0                  	;0
		8   416  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		9   416  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @see http://l189-238-14.cn.ru/api-doc/m3u-extending.html
     */
	protected function make(string $lineStr): void
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   421  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   429  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'substr'          	;2
		2   429  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   429  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'strlen'          	;1
		4   429  SEND_VAL_EX/116           ?80       4:'#EXTINF:'         ?1                  	;0
		5   429  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		6   429  SEND_VAR_NO_REF_EX/50     ?96       $6                   ?2                  	;0
		7   429  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		8   429  ASSIGN/38                 ?2        16?1                 $7                  	;0
		9   430  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'trim'            	;1
		10  430  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		11  430  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		12  430  ASSIGN/38                 ?4        16?1                 $9                  	;0
		13  433  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'preg_match'      	;3
		14  433  SEND_VAL_EX/116           ?80       9:'/^(-?\\d+)\\s*(?:(?:[^=]+=["\'][^"\']*["\'])|(?:[^=]+=[^ ]*))*,(.*)$/' ?1                  	;0
		15  433  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		16  433  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		17  433  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		18  435  INIT_METHOD_CALL/112      ?0        ?1668917240          10:'setDuration'    	;1
		19  435  FETCH_DIM_R/81            $12=      16?2                 12:1                	;0
		20  435  CAST/21                   #13=      $12                  ?0                  	;4
		21  435  SEND_VAL_EX/116           ?80       #13                  ?1                  	;0
		22  435  DO_FCALL/60               ?8        ?0                   ?0                  	;0
		23  436  INIT_METHOD_CALL/112      ?0        ?1668917240          13:'setTitle'       	;1
		24  436  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'trim'           	;1
		25  436  FETCH_DIM_FUNC_ARG/93     $15=      16?2                 17:2                	;1
		26  436  SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
		27  436  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		28  436  SEND_VAR_NO_REF_EX/50     ?80       $16                  ?1                  	;0
		29  436  DO_FCALL/60               ?11       ?0                   ?0                  	;0
		30  439  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'preg_replace'   	;3
		31  439  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'preg_quote'     	;2
		32  439  FETCH_DIM_FUNC_ARG/93     $18=      16?2                 22:1                	;1
		33  439  SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
		34  439  SEND_VAL_EX/116           ?96       23:'/'               ?2                  	;0
		35  439  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		36  439  CONCAT/8                  #20=      24:'/^'              $19                 	;0
		37  439  CONCAT/8                  #21=      #20                  25:'(.*)'           	;0
		38  439  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'preg_quote'     	;2
		39  439  FETCH_DIM_FUNC_ARG/93     $22=      16?2                 28:2                	;1
		40  439  SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
		41  439  SEND_VAL_EX/116           ?96       29:'/'               ?2                  	;0
		42  439  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		43  439  CONCAT/8                  #24=      #21                  $23                 	;0
		44  439  CONCAT/8                  #25=      #24                  30:'$/'             	;0
		45  439  SEND_VAL_EX/116           ?80       #25                  ?1                  	;0
		46  439  SEND_VAL_EX/116           ?96       31:'$1'              ?2                  	;0
		47  439  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		48  439  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		49  439  ASSIGN/38                 ?21       16?3                 $26                 	;0
		50  441  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'explode'        	;3
		51  441  SEND_VAL_EX/116           ?80       34:' '               ?1                  	;0
		52  441  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
		53  441  SEND_VAL_EX/116           ?112      35:2                 ?3                  	;0
		54  441  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		55  441  ASSIGN/38                 ?23       16?4                 $28                 	;0
		56  443  ISSET_ISEMPTY_DIM_OBJ/115 #30=      16?4                 36:1                	;33554432
		57  443  JMPZ_EX/46                #30=      #30                  ?64                 	;0	>>64
		58  443  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'trim'           	;1
		59  443  FETCH_DIM_FUNC_ARG/93     $31=      16?4                 39:1                	;1
		60  443  SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
		61  443  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
		62  443  ASSIGN/38                 $33=      16?5                 $32                 	;0
		63  443  BOOL/52                   #30=      $33                  ?0                  	;0
		64  443  JMPZ/43                   ?0        #30                  ?68                 	;0	>>68	<<57
		65  444  INIT_METHOD_CALL/112      ?0        ?1668923136          40:'initAttributes' 	;1
		66  444  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		67  444  DO_FCALL/60               ?28       ?0                   ?0                  	;0
		68  446  NOP/0                     ?0        42:NULL              ?0                  	;4294967295	<<64
		*/
	}
}

class ExtLogo
{
	/**
     * @var string
     */
	private $logo;

	/**
     * #EXTLOGO:http://cdn1.siol.tv/logo/93x78/slo2.png.
     */
	public function __construct(?string $lineStr)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   459  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   461  IS_NOT_IDENTICAL/16       #1=       1:NULL               16?0                	;0
		2   461  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   462  INIT_METHOD_CALL/112      ?0        ?1668923136          2:'makeData'        	;1
		4   462  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   462  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		6   464  NOP/0                     ?0        4:NULL               ?0                  	;4294967295	<<2
		*/
	}

	public function __toString(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   468  INIT_METHOD_CALL/112      ?0        ?5126                0:'getLogo'         	;0
		1   468  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		2   468  CONCAT/8                  #1=       2:'#EXTLOGO: '       $0                  	;0
		3   468  VERIFY_RETURN_TYPE/124    ?0        #1                   ?4294967294         	;0
		4   468  RETURN/62                 ?0        #1                   ?0                  	;0
		5   469  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		6   469  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getLogo(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   473  FETCH_OBJ_R/82            $0=       ?2670194256          0:'logo'            	;0
		1   473  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   473  RETURN/62                 ?0        $0                   ?0                  	;0
		3   474  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   474  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return $this
     */
	public function setLogo(string $logo): ExtLogo
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   479  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   481  ASSIGN_OBJ/136            ?0        ?2670194256          0:'logo'            	;0
		2   481  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   483  FETCH_THIS/184            $2=       ?0                   ?0                  	;0
		4   483  VERIFY_RETURN_TYPE/124    ?0        $2                   ?32                 	;0
		5   483  RETURN/62                 ?0        $2                   ?0                  	;0
		6   484  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		7   484  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	static public function isMatch(string $lineStr): bool
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   486  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   488  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'stripos'         	;2
		2   488  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   488  SEND_VAL_EX/116           ?96       2:'#EXTLOGO:'        ?2                  	;0
		4   488  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		5   488  IS_IDENTICAL/15           #2=       3:0                  $1                  	;0
		6   488  VERIFY_RETURN_TYPE/124    ?0        #2                   ?4294967294         	;0
		7   488  RETURN/62                 ?0        #2                   ?0                  	;0
		8   489  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		9   489  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	protected function makeData(string $lineStr): void
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   491  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   500  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'substr'          	;2
		2   500  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   500  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'strlen'          	;1
		4   500  SEND_VAL_EX/116           ?80       4:'#EXTLOGO:'        ?1                  	;0
		5   500  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		6   500  SEND_VAR_NO_REF_EX/50     ?96       $3                   ?2                  	;0
		7   500  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		8   500  ASSIGN/38                 ?2        16?1                 $4                  	;0
		9   501  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'trim'            	;1
		10  501  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		11  501  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		12  501  ASSIGN/38                 ?4        16?2                 $6                  	;0
		13  503  INIT_METHOD_CALL/112      ?0        ?3                   7:'setLogo'         	;1
		14  503  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		15  503  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		16  504  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}
}

interface ExtTagInterface
{
	public function __construct(?string $lineStr);
	public function __toString(): string;
	static public function isMatch(string $lineStr): bool;
}

class ExtTv
{
	/**
     * @var string[]
     */
	private $tags;
	/**
     * @var string
     */
	private $language;
	/**
     * @var string
     */
	private $xmlTvId;
	/**
     * @var null|string
     */
	private $iconUrl;

	/**
     * #EXTTV:nacionalni,hd;slovenski;SLO1;http://cdn1.siol.tv/logo/93x78/slo2.png.
     */
	public function __construct(?string $lineStr)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   538  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   540  IS_NOT_IDENTICAL/16       #1=       1:NULL               16?0                	;0
		2   540  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   541  INIT_METHOD_CALL/112      ?0        ?1                   2:'makeData'        	;1
		4   541  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   541  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		6   543  NOP/0                     ?0        4:NULL               ?0                  	;4294967295	<<2
		*/
	}

	public function __toString(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   547  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'implode'         	;2
		1   547  SEND_VAL_EX/116           ?80       2:','                ?1                  	;0
		2   547  INIT_METHOD_CALL/112      ?0        ?4397406             3:'getTags'         	;0
		3   547  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		4   547  SEND_VAR_NO_REF_EX/50     ?96       $0                   ?2                  	;0
		5   547  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		6   547  CONCAT/8                  #2=       5:'#EXTTV: '         $1                  	;0
		7   547  CONCAT/8                  #3=       #2                   6:';'               	;0
		8   547  INIT_METHOD_CALL/112      ?0        ?1669055744          7:'getLanguage'     	;0
		9   547  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10  547  CONCAT/8                  #5=       #3                   $4                  	;0
		11  547  CONCAT/8                  #6=       #5                   9:';'               	;0
		12  547  INIT_METHOD_CALL/112      ?0        ?1669078880          10:'getXmlTvId'     	;0
		13  547  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		14  547  CONCAT/8                  #8=       #6                   $7                  	;0
		15  547  INIT_METHOD_CALL/112      ?0        ?4443006             12:'getIconUrl'     	;0
		16  547  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		17  547  JMPZ/43                   ?0        $9                   ?23                 	;0	>>23
		18  547  INIT_METHOD_CALL/112      ?0        ?320                 14:'getIconUrl'     	;0
		19  547  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		20  547  CONCAT/8                  #11=      16:';'               $10                 	;0
		21  547  QM_ASSIGN/22              #12=      #11                  ?0                  	;0
		22  547  JMP/42                    ?0        ?24                  ?0                  	;0	>>24
		23  547  QM_ASSIGN/22              #12=      17:''                ?0                  	;0	<<17
		24  547  CONCAT/8                  #13=      #8                   #12                 	;0	<<22
		25  547  VERIFY_RETURN_TYPE/124    ?0        #13                  ?4294967294         	;0
		26  547  RETURN/62                 ?0        #13                  ?0                  	;0
		27  548  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		28  548  NOP/0                     ?0        18:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * @return string[]
     */
	public function getTags(): array
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   555  FETCH_OBJ_R/82            $0=       ?25165824            0:'tags'            	;0
		1   555  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   555  RETURN/62                 ?0        $0                   ?0                  	;0
		3   556  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   556  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @param string[] $tags
     *
     * @return $this
     */
	public function setTags(array $tags): ExtTv
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   563  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   565  ASSIGN_OBJ/136            ?0        ?2670194256          0:'tags'            	;0
		2   565  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   567  FETCH_THIS/184            $2=       ?0                   ?0                  	;0
		4   567  VERIFY_RETURN_TYPE/124    ?0        $2                   ?32                 	;0
		5   567  RETURN/62                 ?0        $2                   ?0                  	;0
		6   568  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		7   568  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getLanguage(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   572  FETCH_OBJ_R/82            $0=       ?2670194256          0:'language'        	;0
		1   572  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   572  RETURN/62                 ?0        $0                   ?0                  	;0
		3   573  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   573  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return $this
     */
	public function setLanguage(string $language): ExtTv
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   578  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   580  ASSIGN_OBJ/136            ?0        ?2670194256          0:'language'        	;0
		2   580  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   582  FETCH_THIS/184            $2=       ?0                   ?0                  	;0
		4   582  VERIFY_RETURN_TYPE/124    ?0        $2                   ?32                 	;0
		5   582  RETURN/62                 ?0        $2                   ?0                  	;0
		6   583  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		7   583  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getXmlTvId(): string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   587  FETCH_OBJ_R/82            $0=       ?2670194256          0:'xmlTvId'         	;0
		1   587  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   587  RETURN/62                 ?0        $0                   ?0                  	;0
		3   588  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   588  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return $this
     */
	public function setXmlTvId(string $xmlTvId): ExtTv
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   593  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   595  ASSIGN_OBJ/136            ?0        ?2670194256          0:'xmlTvId'         	;0
		2   595  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   597  FETCH_THIS/184            $2=       ?0                   ?0                  	;0
		4   597  VERIFY_RETURN_TYPE/124    ?0        $2                   ?32                 	;0
		5   597  RETURN/62                 ?0        $2                   ?0                  	;0
		6   598  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		7   598  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getIconUrl(): ?string
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   602  FETCH_OBJ_R/82            $0=       ?2670194256          0:'iconUrl'         	;0
		1   602  VERIFY_RETURN_TYPE/124    ?0        $0                   ?4294967294         	;0
		2   602  RETURN/62                 ?0        $0                   ?0                  	;0
		3   603  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		4   603  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @return $this
     */
	public function setIconUrl(?string $iconUrl): ExtTv
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   608  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   610  ASSIGN_OBJ/136            ?0        ?2670194256          0:'iconUrl'         	;0
		2   610  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   612  FETCH_THIS/184            $2=       ?0                   ?0                  	;0
		4   612  VERIFY_RETURN_TYPE/124    ?0        $2                   ?32                 	;0
		5   612  RETURN/62                 ?0        $2                   ?0                  	;0
		6   613  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?48                 	;0
		7   613  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	static public function isMatch(string $lineStr): bool
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   615  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   617  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'stripos'         	;2
		2   617  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   617  SEND_VAL_EX/116           ?96       2:'#EXTTV:'          ?2                  	;0
		4   617  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		5   617  IS_IDENTICAL/15           #2=       3:0                  $1                  	;0
		6   617  VERIFY_RETURN_TYPE/124    ?0        #2                   ?4294967294         	;0
		7   617  RETURN/62                 ?0        #2                   ?0                  	;0
		8   618  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
		9   618  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	protected function makeData(string $lineStr): void
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   620  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   629  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'substr'          	;2
		2   629  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   629  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'strlen'          	;1
		4   629  SEND_VAL_EX/116           ?80       4:'#EXTTV:'          ?1                  	;0
		5   629  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		6   629  SEND_VAR_NO_REF_EX/50     ?96       $3                   ?2                  	;0
		7   629  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		8   629  ASSIGN/38                 ?2        16?1                 $4                  	;0
		9   630  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'explode'         	;3
		10  630  SEND_VAL_EX/116           ?80       7:';'                ?1                  	;0
		11  630  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		12  630  SEND_VAL_EX/116           ?112      8:4                  ?3                  	;0
		13  630  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		14  630  ASSIGN/38                 ?4        16?2                 $6                  	;0
		15  632  INIT_METHOD_CALL/112      ?0        ?3                   9:'setTags'         	;1
		16  632  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'array_map'      	;2
		17  632  SEND_VAL_EX/116           ?80       13:'trim'            ?1                  	;0
		18  632  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'explode'        	;2
		19  632  SEND_VAL_EX/116           ?80       16:','               ?1                  	;0
		20  632  FETCH_DIM_FUNC_ARG/93     $8=       16?2                 17:0                	;2
		21  632  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		22  632  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		23  632  SEND_VAR_NO_REF_EX/50     ?96       $9                   ?2                  	;0
		24  632  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		25  632  SEND_VAR_NO_REF_EX/50     ?80       $10                  ?1                  	;0
		26  632  DO_FCALL/60               ?8        ?0                   ?0                  	;0
		27  633  INIT_METHOD_CALL/112      ?0        ?3                   18:'setLanguage'    	;1
		28  633  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'trim'           	;1
		29  633  FETCH_DIM_FUNC_ARG/93     $12=      16?2                 22:1                	;1
		30  633  SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
		31  633  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		32  633  SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
		33  633  DO_FCALL/60               ?11       ?0                   ?0                  	;0
		34  634  INIT_METHOD_CALL/112      ?0        ?3                   23:'setXmlTvId'     	;1
		35  634  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'trim'           	;1
		36  634  FETCH_DIM_FUNC_ARG/93     $15=      16?2                 27:2                	;1
		37  634  SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
		38  634  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		39  634  SEND_VAR_NO_REF_EX/50     ?80       $16                  ?1                  	;0
		40  634  DO_FCALL/60               ?14       ?0                   ?0                  	;0
		41  635  ISSET_ISEMPTY_DIM_OBJ/115 #18=      16?2                 28:3                	;33554432
		42  635  JMPZ/43                   ?0        #18                  ?50                 	;0	>>50
		43  636  INIT_METHOD_CALL/112      ?0        ?2670193840          29:'setIconUrl'     	;1
		44  636  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'trim'           	;1
		45  636  FETCH_DIM_FUNC_ARG/93     $19=      16?2                 33:3                	;1
		46  636  SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
		47  636  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		48  636  SEND_VAR_NO_REF_EX/50     ?80       $20                  ?1                  	;0
		49  636  DO_FCALL/60               ?18       ?0                   ?0                  	;0
		50  638  NOP/0                     ?0        34:NULL              ?0                  	;4294967295	<<42
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   2    DECLARE_CLASS/139         $0=       0:'m3uparser'        ?0                  	;0
1   4    ADD_TRAIT/154             ?0        $0                   2:'TagsManagerTrait'	;0
2   2    BIND_TRAITS/155           ?0        $0                   ?0                  	;0
3   124  NOP/0                     ?0        ?0                   ?0                  	;0
4   205  NOP/0                     ?0        ?0                   ?0                  	;0
5   266  NOP/0                     ?0        ?0                   ?0                  	;0
6   339  FETCH_CLASS/109           $4=       ?0                   4:'ArrayIterator'   	;0
7   339  DECLARE_INHERITED_CLASS/140 $5=       6:'m3udata'          $4                  	;4294967295
8   341  ADD_TRAIT/154             ?0        $5                   8:'TagAttributesTrait'	;0
9   339  BIND_TRAITS/155           ?0        $5                   ?0                  	;0
10  355  DECLARE_CLASS/139         $6=       10:'extinf'          ?0                  	;0
11  357  ADD_TRAIT/154             ?0        $6                   12:'TagAttributesTrait'	;0
12  355  BIND_TRAITS/155           ?0        $6                   ?0                  	;0
13  355  ADD_INTERFACE/144         ?0        $6                   14:'ExtTagInterface'	;0
14  355  VERIFY_ABSTRACT_CLASS/146 ?0        $6                   ?0                  	;0
15  449  DECLARE_CLASS/139         $7=       16:'extlogo'         ?0                  	;0
16  449  ADD_INTERFACE/144         ?0        $7                   18:'ExtTagInterface'	;0
17  449  VERIFY_ABSTRACT_CLASS/146 ?0        $7                   ?0                  	;0
18  507  NOP/0                     ?0        ?0                   ?0                  	;0
19  516  DECLARE_CLASS/139         $9=       20:'exttv'           ?0                  	;0
20  516  ADD_INTERFACE/144         ?0        $9                   22:'ExtTagInterface'	;0
21  516  VERIFY_ABSTRACT_CLASS/146 ?0        $9                   ?0                  	;0
22  639  NOP/0                     ?0        24:1                 ?0                  	;4294967295
*/

?>