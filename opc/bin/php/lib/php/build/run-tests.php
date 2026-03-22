<?php


class RuntestsValgrind
{
	protected $version = '';
	protected $header = '';
	protected $version_3_3_0 = false;
	protected $version_3_8_0 = false;
	protected $tool;

	public function getVersion()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    3612  FETCH_OBJ_R/82            $0=       ?1679853464          0:'version'         	;0
		1    3612  RETURN/62                 ?0        $0                   ?0                  	;0
		2    3613  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getHeader()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    3617  FETCH_OBJ_R/82            $0=       ?24                  0:'header'          	;0
		1    3617  RETURN/62                 ?0        $0                   ?0                  	;0
		2    3618  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function __construct(array $environment, string $tool)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    3620  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    3620  RECV_INIT/64              16?1=     ?2                   0:'memcheck'        	;0
		2    3622  ASSIGN_OBJ/136            ?0        ?2670194064          1:'tool'            	;0
		3    3622  OP_DATA/137               ?0        16?1                 ?0                  	;0
		4    3623  INIT_FCALL/61             ?0        ?1424                2:'system_with_timeout'	;2
		5    3623  FETCH_OBJ_R/82            $6=       ?4294967295          3:'tool'            	;0
		6    3623  ROPE_INIT/54              #8=       ?0                   4:'valgrind --tool='	;3
		7    3623  ROPE_ADD/55               #8=       #8                   $6                  	;1
		8    3623  ROPE_END/56               #7=       #8                   5:' --version'      	;2
		9    3623  SEND_VAL/65               ?80       #7                   ?1                  	;0
		10   3623  SEND_VAR/117              ?96       16?0                 ?2                  	;0
		11   3623  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		12   3623  ASSIGN/38                 ?6        16?2                 $10                 	;0
		13   3624  BOOL_NOT/13               #12=      16?2                 ?0                  	;0
		14   3624  JMPZ/43                   ?0        #12                  ?23                 	;0	>>23
		15   3625  INIT_FCALL/61             ?0        ?144                 6:'error'           	;1
		16   3625  FETCH_OBJ_R/82            $13=      ?1683195292          7:'tool'            	;0
		17   3625  ROPE_INIT/54              #15=      ?0                   8:'Valgrind returned no version info for '	;3
		18   3625  ROPE_ADD/55               #15=      #15                  $13                 	;1
		19   3625  ROPE_END/56               #14=      #15                  9:', cannot proceed.
'	;2
		20   3626  CONCAT/8                  #17=      #14                  10:'Please check if Valgrind is installed and the tool is named correctly.'	;0
		21   3626  SEND_VAL/65               ?80       #17                  ?1                  	;0
		22   3626  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		23   3628  ASSIGN/38                 ?14       16?3                 11:0                	;0	<<14
		24   3629  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'preg_replace'   	;5
		25   3629  SEND_VAL_EX/116           ?80       14:'/valgrind-(\\d+)\\.(\\d+)\\.(\\d+)([.\\w_-]+)?(\\s+)/' ?1                  	;0
		26   3629  SEND_VAL_EX/116           ?96       15:'$1.$2.$3'        ?2                  	;0
		27   3629  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		28   3629  SEND_VAL_EX/116           ?128      16:1                 ?4                  	;0
		29   3629  SEND_VAR_EX/66            ?144      16?3                 ?5                  	;0
		30   3629  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		31   3629  ASSIGN/38                 ?16       16?4                 $20                 	;0
		32   3630  IS_NOT_EQUAL/18           #22=      16?3                 17:1                	;0
		33   3630  JMPZ/43                   ?0        #22                  ?43                 	;0	>>43
		34   3631  INIT_FCALL/61             ?0        ?144                 18:'error'          	;1
		35   3631  ROPE_INIT/54              #25=      ?0                   19:'Valgrind returned invalid version info ("'	;5
		36   3631  ROPE_ADD/55               #25=      #25                  16?2                	;1
		37   3631  FETCH_OBJ_R/82            $23=      ?1663797856          20:'tool'           	;0
		38   3631  ROPE_ADD/55               #25=      #25                  21:'") for '        	;2
		39   3631  ROPE_ADD/55               #25=      #25                  $23                 	;3
		40   3631  ROPE_END/56               #24=      #25                  22:', cannot proceed.'	;4
		41   3631  SEND_VAL/65               ?80       #24                  ?1                  	;0
		42   3631  DO_FCALL/60               ?23       ?0                   ?0                  	;0
		43   3633  ASSIGN_OBJ/136            ?24       ?2670193888          23:'version'        	;0	<<33
		44   3633  OP_DATA/137               ?0        16?4                 ?0                  	;0
		45   3634  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'sprintf'        	;3
		46   3635  SEND_VAL_EX/116           ?80       27:'%s (%s)'         ?1                  	;0
		47   3635  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'trim'           	;1
		48   3635  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		49   3635  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		50   3635  SEND_VAR_NO_REF_EX/50     ?96       $31                  ?2                  	;0
		51   3635  FETCH_OBJ_FUNC_ARG/94     $32=      ?1                   30:'tool'           	;3
		52   3635  SEND_VAR_EX/66            ?112      $32                  ?3                  	;0
		53   3635  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
		54   3634  ASSIGN_OBJ/136            ?25       ?2670193888          24:'header'         	;0
		55   3635  OP_DATA/137               ?0        $33                  ?0                  	;0
		56   3636  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'version_compare'	;3
		57   3636  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		58   3636  SEND_VAL_EX/116           ?96       34:'3.3.0'           ?2                  	;0
		59   3636  SEND_VAL_EX/116           ?112      35:'>='              ?3                  	;0
		60   3636  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
		61   3636  ASSIGN_OBJ/136            ?29       ?2670193888          31:'version_3_3_0'  	;0
		62   3636  OP_DATA/137               ?0        $35                  ?0                  	;0
		63   3637  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'version_compare'	;3
		64   3637  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		65   3637  SEND_VAL_EX/116           ?96       39:'3.8.0'           ?2                  	;0
		66   3637  SEND_VAL_EX/116           ?112      40:'>='              ?3                  	;0
		67   3637  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
		68   3637  ASSIGN_OBJ/136            ?31       ?2670193888          36:'version_3_8_0'  	;0
		69   3637  OP_DATA/137               ?0        $37                  ?0                  	;0
		70   3638  NOP/0                     ?0        41:NULL              ?0                  	;4294967295
		*/
	}

	public function wrapCommand($cmd, $memcheck_filename, $check_all)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    3640  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    3640  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    3640  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3    3642  FETCH_OBJ_R/82            $4=       ?4397406             0:'tool'            	;0
		4    3642  ROPE_INIT/54              #6=       ?0                   1:'valgrind -q --tool='	;3
		5    3642  ROPE_ADD/55               #6=       #6                   $4                  	;1
		6    3642  ROPE_END/56               #5=       #6                   2:' --trace-children=yes'	;2
		7    3642  ASSIGN/38                 ?4        16?3                 #5                  	;0
		8    3643  JMPZ/43                   ?0        16?2                 ?10                 	;0	>>10
		9    3644  ASSIGN_CONCAT/30          ?5        16?3                 3:' --smc-check=all'	;0
		10   3648  FETCH_OBJ_R/82            $10=      ?1669303488          4:'version_3_8_0'   	;0	<<8
		11   3648  JMPZ/43                   ?0        $10                  ?19                 	;0	>>19
		12   3650  ROPE_INIT/54              #12=      ?0                   16?3                	;5
		13   3650  ROPE_ADD/55               #12=      #12                  5:' --vex-iropt-register-updates=allregs-at-mem-access --log-file='	;1
		14   3650  ROPE_ADD/55               #12=      #12                  16?1                	;2
		15   3650  ROPE_ADD/55               #12=      #12                  6:' '               	;3
		16   3650  ROPE_END/56               #11=      #12                  16?0                	;4
		17   3650  RETURN/62                 ?0        #11                  ?0                  	;0
		18   3650  JMP/42                    ?0        ?34                  ?0                  	;0	>>34
		19   3651  FETCH_OBJ_R/82            $15=      ?1669303488          7:'version_3_3_0'   	;0	<<11
		20   3651  JMPZ/43                   ?0        $15                  ?28                 	;0	>>28
		21   3652  ROPE_INIT/54              #17=      ?0                   16?3                	;5
		22   3652  ROPE_ADD/55               #17=      #17                  8:' --vex-iropt-precise-memory-exns=yes --log-file='	;1
		23   3652  ROPE_ADD/55               #17=      #17                  16?1                	;2
		24   3652  ROPE_ADD/55               #17=      #17                  9:' '               	;3
		25   3652  ROPE_END/56               #16=      #17                  16?0                	;4
		26   3652  RETURN/62                 ?0        #16                  ?0                  	;0
		27   3652  JMP/42                    ?0        ?34                  ?0                  	;0	>>34
		28   3654  ROPE_INIT/54              #21=      ?0                   16?3                	;5	<<20
		29   3654  ROPE_ADD/55               #21=      #21                  10:' --vex-iropt-precise-memory-exns=yes --log-file-exactly='	;1
		30   3654  ROPE_ADD/55               #21=      #21                  16?1                	;2
		31   3654  ROPE_ADD/55               #21=      #21                  11:' '              	;3
		32   3654  ROPE_END/56               #20=      #21                  16?0                	;4
		33   3654  RETURN/62                 ?0        #20                  ?0                  	;0
		34   3656  NOP/0                     ?0        12:NULL              ?0                  	;4294967295	<<18,27
		*/
	}
}

/**
 * One function to rule them all, one function to find them, one function to
 * bring them all and in the darkness bind them.
 * This is the entry point and exit point überfunction. It contains all the
 * code that was previously found at the top level. It could and should be
 * refactored to be smaller and more manageable.
 */
function main()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    48    BIND_GLOBAL/168           ?0        16?0                 0:'DETAILED'        	;0
	1    48    BIND_GLOBAL/168           ?0        16?1                 1:'PHP_FAILED_TESTS'	;0
	2    48    BIND_GLOBAL/168           ?0        16?2                 2:'SHOW_ONLY_GROUPS'	;0
	3    48    BIND_GLOBAL/168           ?0        16?3                 3:'argc'            	;0
	4    48    BIND_GLOBAL/168           ?0        16?4                 4:'argv'            	;0
	5    48    BIND_GLOBAL/168           ?0        16?5                 5:'cfg'             	;0
	6    49    BIND_GLOBAL/168           ?0        16?6                 6:'cfgfiles'        	;0
	7    49    BIND_GLOBAL/168           ?0        16?7                 7:'cfgtypes'        	;0
	8    49    BIND_GLOBAL/168           ?0        16?8                 8:'conf_passed'     	;0
	9    49    BIND_GLOBAL/168           ?0        16?9                 9:'end_time'        	;0
	10   49    BIND_GLOBAL/168           ?0        16?10                10:'environment'    	;0
	11   50    BIND_GLOBAL/168           ?0        16?11                11:'exts_skipped'   	;0
	12   50    BIND_GLOBAL/168           ?0        16?12                12:'exts_tested'    	;0
	13   50    BIND_GLOBAL/168           ?0        16?13                13:'exts_to_test'   	;0
	14   50    BIND_GLOBAL/168           ?0        16?14                14:'failed_tests_file'	;0
	15   51    BIND_GLOBAL/168           ?0        16?15                15:'html_file'      	;0
	16   51    BIND_GLOBAL/168           ?0        16?16                16:'html_output'    	;0
	17   51    BIND_GLOBAL/168           ?0        16?17                17:'ignored_by_ext' 	;0
	18   51    BIND_GLOBAL/168           ?0        16?18                18:'ini_overwrites' 	;0
	19   51    BIND_GLOBAL/168           ?0        16?19                19:'is_switch'      	;0
	20   52    BIND_GLOBAL/168           ?0        16?20                20:'just_save_results'	;0
	21   52    BIND_GLOBAL/168           ?0        16?21                21:'log_format'     	;0
	22   52    BIND_GLOBAL/168           ?0        16?22                22:'matches'        	;0
	23   52    BIND_GLOBAL/168           ?0        16?23                23:'no_clean'       	;0
	24   52    BIND_GLOBAL/168           ?0        16?24                24:'no_file_cache'  	;0
	25   53    BIND_GLOBAL/168           ?0        16?25                25:'optionals'      	;0
	26   53    BIND_GLOBAL/168           ?0        16?26                26:'output_file'    	;0
	27   53    BIND_GLOBAL/168           ?0        16?27                27:'pass_option_n'  	;0
	28   53    BIND_GLOBAL/168           ?0        16?28                28:'pass_options'   	;0
	29   54    BIND_GLOBAL/168           ?0        16?29                29:'pattern_match'  	;0
	30   54    BIND_GLOBAL/168           ?0        16?30                30:'php'            	;0
	31   54    BIND_GLOBAL/168           ?0        16?31                31:'php_cgi'        	;0
	32   54    BIND_GLOBAL/168           ?0        16?32                32:'phpdbg'         	;0
	33   54    BIND_GLOBAL/168           ?0        16?33                33:'preload'        	;0
	34   54    BIND_GLOBAL/168           ?0        16?34                34:'redir_tests'    	;0
	35   55    BIND_GLOBAL/168           ?0        16?35                35:'repeat'         	;0
	36   55    BIND_GLOBAL/168           ?0        16?36                36:'result_tests_file'	;0
	37   55    BIND_GLOBAL/168           ?0        16?37                37:'slow_min_ms'    	;0
	38   55    BIND_GLOBAL/168           ?0        16?38                38:'start_time'     	;0
	39   55    BIND_GLOBAL/168           ?0        16?39                39:'switch'         	;0
	40   56    BIND_GLOBAL/168           ?0        16?40                40:'temp_source'    	;0
	41   56    BIND_GLOBAL/168           ?0        16?41                41:'temp_target'    	;0
	42   56    BIND_GLOBAL/168           ?0        16?42                42:'temp_urlbase'   	;0
	43   56    BIND_GLOBAL/168           ?0        16?43                43:'test_cnt'       	;0
	44   56    BIND_GLOBAL/168           ?0        16?44                44:'test_dirs'      	;0
	45   57    BIND_GLOBAL/168           ?0        16?45                45:'test_files'     	;0
	46   57    BIND_GLOBAL/168           ?0        16?46                46:'test_idx'       	;0
	47   57    BIND_GLOBAL/168           ?0        16?47                47:'test_list'      	;0
	48   57    BIND_GLOBAL/168           ?0        16?48                48:'test_results'   	;0
	49   57    BIND_GLOBAL/168           ?0        16?49                49:'testfile'       	;0
	50   58    BIND_GLOBAL/168           ?0        16?50                50:'user_tests'     	;0
	51   58    BIND_GLOBAL/168           ?0        16?51                51:'valgrind'       	;0
	52   58    BIND_GLOBAL/168           ?0        16?52                52:'sum_results'    	;0
	53   58    BIND_GLOBAL/168           ?0        16?53                53:'shuffle'        	;0
	54   60    BIND_GLOBAL/168           ?0        16?54                54:'workers'        	;0
	55   60    BIND_GLOBAL/168           ?0        16?55                55:'workerID'       	;0
	56   62    ASSIGN/38                 ?0        16?55                56:0                	;0
	57   63    INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'getenv'         	;1
	58   63    SEND_VAL_EX/116           ?80       59:'TEST_PHP_WORKER' ?1                  	;0
	59   63    DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
	60   63    JMPZ/43                   ?0        $65                  ?71                 	;0	>>71
	61   64    INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'intval'         	;1
	62   64    INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'getenv'         	;1
	63   64    SEND_VAL_EX/116           ?80       64:'TEST_PHP_WORKER' ?1                  	;0
	64   64    DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
	65   64    SEND_VAR_NO_REF_EX/50     ?80       $66                  ?1                  	;0
	66   64    DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
	67   64    ASSIGN/38                 ?4        16?55                $67                 	;0
	68   65    INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'run_worker'     	;0
	69   65    DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
	70   66    RETURN/62                 ?0        67:NULL              ?0                  	;0
	71   69    INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'define'         	;2	<<60
	72   69    SEND_VAL_EX/116           ?80       70:'INIT_DIR'        ?1                  	;0
	73   69    INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'getcwd'         	;0
	74   69    DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
	75   69    SEND_VAR_NO_REF_EX/50     ?96       $70                  ?2                  	;0
	76   69    DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
	77   72    INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'getenv'         	;1
	78   72    SEND_VAL_EX/116           ?80       75:'TEST_PHP_SRCDIR' ?1                  	;0
	79   72    DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
	80   72    JMPZ/43                   ?0        $72                  ?89                 	;0	>>89
	81   73    BEGIN_SILENCE/57          #73=      ?0                   ?0                  	;0
	82   73    INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'chdir'          	;1
	83   73    INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'getenv'         	;1
	84   73    SEND_VAL_EX/116           ?80       80:'TEST_PHP_SRCDIR' ?1                  	;0
	85   73    DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
	86   73    SEND_VAR_NO_REF_EX/50     ?80       $74                  ?1                  	;0
	87   73    DO_FCALL_BY_NAME/131      ?11       ?0                   ?0                  	;0
	88   73    END_SILENCE/58            ?0        #73                  ?0                  	;0
	89   75    INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'define'         	;2	<<80
	90   75    SEND_VAL_EX/116           ?80       83:'TEST_PHP_SRCDIR' ?1                  	;0
	91   75    INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'getcwd'         	;0
	92   75    DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
	93   75    SEND_VAR_NO_REF_EX/50     ?96       $76                  ?2                  	;0
	94   75    DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
	95   77    INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'function_exists'	;1
	96   77    SEND_VAL_EX/116           ?80       88:'proc_open'       ?1                  	;0
	97   77    DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
	98   77    BOOL_NOT/13               #79=      $78                  ?0                  	;0
	99   77    JMPZ/43                   ?0        #79                  ?102                	;0	>>102
	100  79    ECHO/40                   ?0        89:'
+-----------------------------------------------------------+
|                       ! ERROR !                           |
| The test-suite requires that proc_open() is available.    |
| Please check if you disabled it in php.ini.               |
+-----------------------------------------------------------+
' ?0                  	;0
	101  87    EXIT/79                   ?0        90:1                 ?0                  	;0
	102  91    INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'ini_get'        	;1	<<99
	103  91    SEND_VAL_EX/116           ?80       93:'date.timezone'   ?1                  	;0
	104  91    DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
	105  91    IS_EQUAL/17               #81=      $80                  94:''               	;0
	106  91    JMPZ/43                   ?0        #81                  ?110                	;0	>>110
	107  92    INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'date_default_timezone_set'	;1
	108  92    SEND_VAL_EX/116           ?80       97:'UTC'             ?1                  	;0
	109  92    DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
	110  96    INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'putenv'         	;1	<<106
	111  96    SEND_VAL_EX/116           ?80       100:'SSH_CLIENT=deleted' ?1                  	;0
	112  96    DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
	113  97    INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'putenv'        	;1
	114  97    SEND_VAL_EX/116           ?80       103:'SSH_AUTH_SOCK=deleted' ?1                  	;0
	115  97    DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
	116  98    INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'putenv'        	;1
	117  98    SEND_VAL_EX/116           ?80       106:'SSH_TTY=deleted' ?1                  	;0
	118  98    DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
	119  99    INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'putenv'        	;1
	120  99    SEND_VAL_EX/116           ?80       109:'SSH_CONNECTION=deleted' ?1                  	;0
	121  99    DO_FCALL_BY_NAME/131      ?22       ?0                   ?0                  	;0
	122  101   INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'set_time_limit'	;1
	123  101   SEND_VAL_EX/116           ?80       112:0                ?1                  	;0
	124  101   DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
	125  103   INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'ini_set'       	;2
	126  103   SEND_VAL_EX/116           ?80       115:'pcre.backtrack_limit' ?1                  	;0
	127  103   FETCH_CONSTANT/99         #88=      ?0                   116:'PHP_INT_MAX'   	;16
	128  103   SEND_VAL_EX/116           ?96       #88                  ?2                  	;0
	129  103   DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
	130  106   JMP/42                    ?0        ?131                 ?0                  	;0	>>131
	131  106   BEGIN_SILENCE/57          #90=      ?0                   ?0                  	;0	<<130,135
	132  106   INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'ob_end_clean'  	;0
	133  106   DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
	134  106   END_SILENCE/58            ?0        #90                  ?0                  	;0
	135  106   JMPNZ/44                  ?0        $91                  ?131                	;0	>>131
	136  109   INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'ob_get_level'  	;0
	137  109   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	138  109   JMPZ/43                   ?0        $92                  ?140                	;0	>>140
	139  110   ECHO/40                   ?0        123:'Not all buffers were deleted.
' ?0                  	;0
	140  113   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'error_reporting'	;1	<<138
	141  113   SEND_VAL_EX/116           ?80       126:32767            ?1                  	;0
	142  113   DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
	143  115   FETCH_IS/89               $94=      127:'_ENV'           ?0                  	;0
	144  115   COALESCE/169              #95=      $94                  ?146                	;0
	145  115   QM_ASSIGN/22              #95=      128:array (
)        ?0                  	;0
	146  115   ASSIGN/38                 ?32       16?10                #95                 	;0
	147  118   ISSET_ISEMPTY_CV/197      #97=      16?10                ?0                  	;16777216
	148  118   JMPZ/43                   ?0        #97                  ?152                	;0	>>152
	149  120   INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'getenv'        	;0
	150  120   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
	151  120   ASSIGN/38                 ?35       16?10                $98                 	;0
	152  122   ISSET_ISEMPTY_DIM_OBJ/115 #100=     16?10                131:'TEMP'          	;16777216	<<148
	153  122   JMPZ/43                   ?0        #100                 ?170                	;0	>>170
	154  123   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'sys_get_temp_dir'	;0
	155  123   DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
	156  123   ASSIGN_DIM/147            ?37       16?10                132:'TEMP'          	;0
	157  123   OP_DATA/137               ?0        $102                 ?0                  	;0
	158  125   ISSET_ISEMPTY_DIM_OBJ/115 #103=     16?10                135:'TEMP'          	;16777216
	159  125   JMPZ/43                   ?0        #103                 ?162                	;0	>>162
	160  130   EXIT/79                   ?0        136:'TEMP environment is NOT set' ?0                  	;0
	161  130   JMP/42                    ?0        ?170                 ?0                  	;0	>>170
	162  132   INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'count'         	;1	<<159
	163  132   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	164  132   DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
	165  132   IS_EQUAL/17               #105=     $104                 139:1               	;0
	166  132   JMPZ/43                   ?0        #105                 ?170                	;0	>>170
	167  135   FETCH_CONSTANT/99         #106=     ?0                   140:'PHP_EOL'       	;16
	168  135   CONCAT/8                  #107=     143:'WARNING: Only 1 environment variable will be available to tests(TEMP environment variable)' #106                	;0
	169  135   ECHO/40                   ?0        #107                 ?0                  	;0
	170  140   INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'substr'        	;3	<<153,161,166
	171  140   FETCH_CONSTANT/99         #108=     ?0                   146:'PHP_OS'        	;16
	172  140   SEND_VAL_EX/116           ?80       #108                 ?1                  	;0
	173  140   SEND_VAL_EX/116           ?96       149:0                ?2                  	;0
	174  140   SEND_VAL_EX/116           ?112      150:3                ?3                  	;0
	175  140   DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
	176  140   IS_EQUAL/17               #110=     $109                 151:'WIN'           	;0
	177  140   JMPZ_EX/46                #110=     #110                 ?180                	;0	>>180
	178  140   ISSET_ISEMPTY_DIM_OBJ/115 #111=     16?10                152:'SystemRoot'    	;16777216
	179  140   BOOL/52                   #110=     #111                 ?0                  	;0
	180  140   JMPZ/43                   ?0        #110                 ?186                	;0	>>186	<<177
	181  141   INIT_FCALL_BY_NAME/59     ?0        ?0                   154:'getenv'        	;1
	182  141   SEND_VAL_EX/116           ?80       156:'SystemRoot'     ?1                  	;0
	183  141   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
	184  141   ASSIGN_DIM/147            ?48       16?10                153:'SystemRoot'    	;0
	185  141   OP_DATA/137               ?0        $113                 ?0                  	;0
	186  144   ASSIGN/38                 ?50       16?30                157:NULL            	;0	<<180
	187  145   ASSIGN/38                 ?51       16?31                158:NULL            	;0
	188  146   ASSIGN/38                 ?52       16?32                159:NULL            	;0
	189  148   INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'getenv'        	;1
	190  148   SEND_VAL_EX/116           ?80       162:'TEST_PHP_EXECUTABLE' ?1                  	;0
	191  148   DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
	192  148   JMPZ/43                   ?0        $117                 ?228                	;0	>>228
	193  149   INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'getenv'        	;1
	194  149   SEND_VAL_EX/116           ?80       165:'TEST_PHP_EXECUTABLE' ?1                  	;0
	195  149   DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
	196  149   ASSIGN/38                 ?55       16?30                $118                	;0
	197  151   IS_EQUAL/17               #120=     16?30                166:'auto'          	;0
	198  151   JMPZ/43                   ?0        #120                 ?226                	;0	>>226
	199  152   FETCH_CONSTANT/99         #121=     ?0                   167:'TEST_PHP_SRCDIR'	;16
	200  152   CONCAT/8                  #122=     #121                 170:'/sapi/cli/php' 	;0
	201  152   ASSIGN/38                 ?59       16?30                #122                	;0
	202  153   INIT_FCALL_BY_NAME/59     ?0        ?0                   171:'putenv'        	;1
	203  153   NOP/0                     ?0        ?0                   ?0                  	;0
	204  153   FAST_CONCAT/53            #124=     173:'TEST_PHP_EXECUTABLE=' 16?30               	;0
	205  153   SEND_VAL_EX/116           ?80       #124                 ?1                  	;0
	206  153   DO_FCALL_BY_NAME/131      ?61       ?0                   ?0                  	;0
	207  155   INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'getenv'        	;1
	208  155   SEND_VAL_EX/116           ?80       176:'TEST_PHP_CGI_EXECUTABLE' ?1                  	;0
	209  155   DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
	210  155   BOOL_NOT/13               #127=     $126                 ?0                  	;0
	211  155   JMPZ/43                   ?0        #127                 ?226                	;0	>>226
	212  156   FETCH_CONSTANT/99         #128=     ?0                   177:'TEST_PHP_SRCDIR'	;16
	213  156   CONCAT/8                  #129=     #128                 180:'/sapi/cgi/php-cgi'	;0
	214  156   ASSIGN/38                 ?66       16?31                #129                	;0
	215  158   INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'file_exists'   	;1
	216  158   SEND_VAR_EX/66            ?80       16?31                ?1                  	;0
	217  158   DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
	218  158   JMPZ/43                   ?0        $131                 ?225                	;0	>>225
	219  159   INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'putenv'        	;1
	220  159   NOP/0                     ?0        ?0                   ?0                  	;0
	221  159   FAST_CONCAT/53            #132=     185:'TEST_PHP_CGI_EXECUTABLE=' 16?31               	;0
	222  159   SEND_VAL_EX/116           ?80       #132                 ?1                  	;0
	223  159   DO_FCALL_BY_NAME/131      ?69       ?0                   ?0                  	;0
	224  159   JMP/42                    ?0        ?226                 ?0                  	;0	>>226
	225  161   ASSIGN/38                 ?70       16?31                186:NULL            	;0	<<218
	226  165   ASSIGN_DIM/147            ?71       16?10                187:'TEST_PHP_EXECUTABLE'	;0	<<198,211,224
	227  165   OP_DATA/137               ?0        16?30                ?0                  	;0
	228  168   INIT_FCALL_BY_NAME/59     ?0        ?0                   188:'getenv'        	;1	<<192
	229  168   SEND_VAL_EX/116           ?80       190:'TEST_PHP_CGI_EXECUTABLE' ?1                  	;0
	230  168   DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
	231  168   JMPZ/43                   ?0        $136                 ?248                	;0	>>248
	232  169   INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'getenv'        	;1
	233  169   SEND_VAL_EX/116           ?80       193:'TEST_PHP_CGI_EXECUTABLE' ?1                  	;0
	234  169   DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
	235  169   ASSIGN/38                 ?74       16?31                $137                	;0
	236  171   IS_EQUAL/17               #139=     16?31                194:'auto'          	;0
	237  171   JMPZ/43                   ?0        #139                 ?246                	;0	>>246
	238  172   FETCH_CONSTANT/99         #140=     ?0                   195:'TEST_PHP_SRCDIR'	;16
	239  172   CONCAT/8                  #141=     #140                 198:'/sapi/cgi/php-cgi'	;0
	240  172   ASSIGN/38                 ?78       16?31                #141                	;0
	241  173   INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'putenv'        	;1
	242  173   NOP/0                     ?0        ?0                   ?0                  	;0
	243  173   FAST_CONCAT/53            #143=     201:'TEST_PHP_CGI_EXECUTABLE=' 16?31               	;0
	244  173   SEND_VAL_EX/116           ?80       #143                 ?1                  	;0
	245  173   DO_FCALL_BY_NAME/131      ?80       ?0                   ?0                  	;0
	246  176   ASSIGN_DIM/147            ?81       16?10                202:'TEST_PHP_CGI_EXECUTABLE'	;0	<<237
	247  176   OP_DATA/137               ?0        16?31                ?0                  	;0
	248  179   INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'getenv'        	;1	<<231
	249  179   SEND_VAL_EX/116           ?80       205:'TEST_PHPDBG_EXECUTABLE' ?1                  	;0
	250  179   DO_FCALL_BY_NAME/131      $146=     ?0                   ?0                  	;0
	251  179   BOOL_NOT/13               #147=     $146                 ?0                  	;0
	252  179   JMPZ/43                   ?0        #147                 ?329                	;0	>>329
	253  180   INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'strncasecmp'   	;3
	254  180   FETCH_CONSTANT/99         #148=     ?0                   208:'PHP_OS'        	;16
	255  180   SEND_VAL_EX/116           ?80       #148                 ?1                  	;0
	256  180   SEND_VAL_EX/116           ?96       211:'win'            ?2                  	;0
	257  180   SEND_VAL_EX/116           ?112      212:3                ?3                  	;0
	258  180   DO_FCALL_BY_NAME/131      $149=     ?0                   ?0                  	;0
	259  180   BOOL_NOT/13               #150=     $149                 ?0                  	;0
	260  180   JMPZ_EX/46                #150=     #150                 ?269                	;0	>>269
	261  180   INIT_FCALL_BY_NAME/59     ?0        ?0                   213:'file_exists'   	;1
	262  180   INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'dirname'       	;1
	263  180   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
	264  180   DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
	265  180   CONCAT/8                  #152=     $151                 217:'/phpdbg.exe'   	;0
	266  180   SEND_VAL_EX/116           ?80       #152                 ?1                  	;0
	267  180   DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
	268  180   BOOL/52                   #150=     $153                 ?0                  	;0
	269  180   JMPZ/43                   ?0        #150                 ?279                	;0	>>279	<<260
	270  181   INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'realpath'      	;1
	271  181   INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'dirname'       	;1
	272  181   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
	273  181   DO_FCALL_BY_NAME/131      $154=     ?0                   ?0                  	;0
	274  181   CONCAT/8                  #155=     $154                 222:'/phpdbg.exe'   	;0
	275  181   SEND_VAL_EX/116           ?80       #155                 ?1                  	;0
	276  181   DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
	277  181   ASSIGN/38                 ?93       16?32                $156                	;0
	278  181   JMP/42                    ?0        ?323                 ?0                  	;0	>>323
	279  182   INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'file_exists'   	;1	<<269
	280  182   INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'dirname'       	;1
	281  182   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
	282  182   DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
	283  182   CONCAT/8                  #159=     $158                 227:'/../../sapi/phpdbg/phpdbg'	;0
	284  182   SEND_VAL_EX/116           ?80       #159                 ?1                  	;0
	285  182   DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
	286  182   JMPZ/43                   ?0        $160                 ?296                	;0	>>296
	287  183   INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'realpath'      	;1
	288  183   INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'dirname'       	;1
	289  183   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
	290  183   DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
	291  183   CONCAT/8                  #162=     $161                 232:'/../../sapi/phpdbg/phpdbg'	;0
	292  183   SEND_VAL_EX/116           ?80       #162                 ?1                  	;0
	293  183   DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
	294  183   ASSIGN/38                 ?100      16?32                $163                	;0
	295  183   JMP/42                    ?0        ?323                 ?0                  	;0	>>323
	296  184   INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'file_exists'   	;1	<<286
	297  184   SEND_VAL_EX/116           ?80       235:'./sapi/phpdbg/phpdbg' ?1                  	;0
	298  184   DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
	299  184   JMPZ/43                   ?0        $165                 ?305                	;0	>>305
	300  185   INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'realpath'      	;1
	301  185   SEND_VAL_EX/116           ?80       238:'./sapi/phpdbg/phpdbg' ?1                  	;0
	302  185   DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
	303  185   ASSIGN/38                 ?103      16?32                $166                	;0
	304  185   JMP/42                    ?0        ?323                 ?0                  	;0	>>323
	305  186   INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'file_exists'   	;1	<<299
	306  186   INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'dirname'       	;1
	307  186   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
	308  186   DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
	309  186   CONCAT/8                  #169=     $168                 243:'/phpdbg'       	;0
	310  186   SEND_VAL_EX/116           ?80       #169                 ?1                  	;0
	311  186   DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
	312  186   JMPZ/43                   ?0        $170                 ?322                	;0	>>322
	313  187   INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'realpath'      	;1
	314  187   INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'dirname'       	;1
	315  187   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
	316  187   DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
	317  187   CONCAT/8                  #172=     $171                 248:'/phpdbg'       	;0
	318  187   SEND_VAL_EX/116           ?80       #172                 ?1                  	;0
	319  187   DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
	320  187   ASSIGN/38                 ?110      16?32                $173                	;0
	321  187   JMP/42                    ?0        ?323                 ?0                  	;0	>>323
	322  189   ASSIGN/38                 ?111      16?32                249:NULL            	;0	<<312
	323  191   JMPZ/43                   ?0        16?32                ?329                	;0	>>329	<<278,295,304,321
	324  192   INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'putenv'        	;1
	325  192   NOP/0                     ?0        ?0                   ?0                  	;0
	326  192   FAST_CONCAT/53            #176=     252:'TEST_PHPDBG_EXECUTABLE=' 16?32               	;0
	327  192   SEND_VAL_EX/116           ?80       #176                 ?1                  	;0
	328  192   DO_FCALL_BY_NAME/131      ?113      ?0                   ?0                  	;0
	329  196   INIT_FCALL_BY_NAME/59     ?0        ?0                   253:'getenv'        	;1	<<252,323
	330  196   SEND_VAL_EX/116           ?80       255:'TEST_PHPDBG_EXECUTABLE' ?1                  	;0
	331  196   DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
	332  196   JMPZ/43                   ?0        $178                 ?349                	;0	>>349
	333  197   INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'getenv'        	;1
	334  197   SEND_VAL_EX/116           ?80       258:'TEST_PHPDBG_EXECUTABLE' ?1                  	;0
	335  197   DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
	336  197   ASSIGN/38                 ?116      16?32                $179                	;0
	337  199   IS_EQUAL/17               #181=     16?32                259:'auto'          	;0
	338  199   JMPZ/43                   ?0        #181                 ?347                	;0	>>347
	339  200   FETCH_CONSTANT/99         #182=     ?0                   260:'TEST_PHP_SRCDIR'	;16
	340  200   CONCAT/8                  #183=     #182                 263:'/sapi/phpdbg/phpdbg'	;0
	341  200   ASSIGN/38                 ?120      16?32                #183                	;0
	342  201   INIT_FCALL_BY_NAME/59     ?0        ?0                   264:'putenv'        	;1
	343  201   NOP/0                     ?0        ?0                   ?0                  	;0
	344  201   FAST_CONCAT/53            #185=     266:'TEST_PHPDBG_EXECUTABLE=' 16?32               	;0
	345  201   SEND_VAL_EX/116           ?80       #185                 ?1                  	;0
	346  201   DO_FCALL_BY_NAME/131      ?122      ?0                   ?0                  	;0
	347  204   ASSIGN_DIM/147            ?123      16?10                267:'TEST_PHPDBG_EXECUTABLE'	;0	<<338
	348  204   OP_DATA/137               ?0        16?32                ?0                  	;0
	349  207   INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'getenv'        	;1	<<332
	350  207   SEND_VAL_EX/116           ?80       270:'TEST_PHP_LOG_FORMAT' ?1                  	;0
	351  207   DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
	352  207   JMPZ/43                   ?0        $188                 ?361                	;0	>>361
	353  208   INIT_FCALL_BY_NAME/59     ?0        ?0                   271:'strtoupper'    	;1
	354  208   INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'getenv'        	;1
	355  208   SEND_VAL_EX/116           ?80       275:'TEST_PHP_LOG_FORMAT' ?1                  	;0
	356  208   DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
	357  208   SEND_VAR_NO_REF_EX/50     ?80       $189                 ?1                  	;0
	358  208   DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
	359  208   ASSIGN/38                 ?127      16?21                $190                	;0
	360  208   JMP/42                    ?0        ?362                 ?0                  	;0	>>362
	361  210   ASSIGN/38                 ?128      16?21                276:'LEODS'         	;0	<<352
	362  214   INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'getenv'        	;1	<<360
	363  214   SEND_VAL_EX/116           ?80       279:'TEST_PHP_DETAILED' ?1                  	;0
	364  214   DO_FCALL_BY_NAME/131      $193=     ?0                   ?0                  	;0
	365  214   JMPZ/43                   ?0        $193                 ?371                	;0	>>371
	366  215   INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'getenv'        	;1
	367  215   SEND_VAL_EX/116           ?80       282:'TEST_PHP_DETAILED' ?1                  	;0
	368  215   DO_FCALL_BY_NAME/131      $194=     ?0                   ?0                  	;0
	369  215   ASSIGN/38                 ?131      16?0                 $194                	;0
	370  215   JMP/42                    ?0        ?372                 ?0                  	;0	>>372
	371  217   ASSIGN/38                 ?132      16?0                 283:0               	;0	<<365
	372  220   INIT_FCALL_BY_NAME/59     ?0        ?0                   284:'junit_init'    	;0	<<370
	373  220   DO_FCALL_BY_NAME/131      ?133      ?0                   ?0                  	;0
	374  222   INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'getenv'        	;1
	375  222   SEND_VAL_EX/116           ?80       288:'SHOW_ONLY_GROUPS' ?1                  	;0
	376  222   DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
	377  222   JMPZ/43                   ?0        $198                 ?387                	;0	>>387
	378  223   INIT_FCALL_BY_NAME/59     ?0        ?0                   289:'explode'       	;2
	379  223   SEND_VAL_EX/116           ?80       291:','              ?1                  	;0
	380  223   INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'getenv'        	;1
	381  223   SEND_VAL_EX/116           ?80       294:'SHOW_ONLY_GROUPS' ?1                  	;0
	382  223   DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
	383  223   SEND_VAR_NO_REF_EX/50     ?96       $199                 ?2                  	;0
	384  223   DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
	385  223   ASSIGN/38                 ?137      16?2                 $200                	;0
	386  223   JMP/42                    ?0        ?388                 ?0                  	;0	>>388
	387  225   ASSIGN/38                 ?138      16?2                 295:array (
)       	;0	<<377
	388  229   INIT_FCALL_BY_NAME/59     ?0        ?0                   296:'getenv'        	;1	<<386
	389  229   SEND_VAL_EX/116           ?80       298:'TEST_PHP_USER'  ?1                  	;0
	390  229   DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
	391  229   JMPZ/43                   ?0        $203                 ?401                	;0	>>401
	392  230   INIT_FCALL_BY_NAME/59     ?0        ?0                   299:'explode'       	;2
	393  230   SEND_VAL_EX/116           ?80       301:','              ?1                  	;0
	394  230   INIT_FCALL_BY_NAME/59     ?0        ?0                   302:'getenv'        	;1
	395  230   SEND_VAL_EX/116           ?80       304:'TEST_PHP_USER'  ?1                  	;0
	396  230   DO_FCALL_BY_NAME/131      $204=     ?0                   ?0                  	;0
	397  230   SEND_VAR_NO_REF_EX/50     ?96       $204                 ?2                  	;0
	398  230   DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
	399  230   ASSIGN/38                 ?142      16?50                $205                	;0
	400  230   JMP/42                    ?0        ?402                 ?0                  	;0	>>402
	401  232   ASSIGN/38                 ?143      16?50                305:array (
)       	;0	<<391
	402  235   ASSIGN/38                 ?144      16?13                306:array (
)       	;0	<<400
	403  237   ASSIGN/38                 ?145      16?18                307:array (
  0 => 'output_handler=',
  1 => 'open_basedir=',
  2 => 'disable_functions=',
  3 => 'output_buffering=Off',
  4 => 'error_reporting=32767',
  5 => 'display_errors=1',
  6 => 'display_startup_errors=1',
  7 => 'log_errors=0',
  8 => 'html_errors=0',
  9 => 'track_errors=0',
  10 => 'report_memleaks=1',
  11 => 'report_zend_debug=0',
  12 => 'docref_root=',
  13 => 'docref_ext=.html',
  14 => 'error_prepend_string=',
  15 => 'error_append_string=',
  16 => 'auto_prepend_file=',
  17 => 'auto_append_file=',
  18 => 'ignore_repeated_errors=0',
  19 => 'precision=14',
  20 => 'memory_limit=128M',
  21 => 'log_errors_max_len=0',
  22 => 'opcache.fast_shutdown=0',
  23 => 'opcache.file_update_protection=0',
  24 => 'opcache.revalidate_freq=0',
  25 => 'zend.assertions=1',
  26 => 'zend.exception_ignore_args=0',
)	;0
	404  266   ASSIGN/38                 ?146      16?24                308:'-d opcache.file_cache= -d opcache.file_cache_only=0'	;0
	405  268   INIT_FCALL_BY_NAME/59     ?0        ?0                   309:'define'        	;2
	406  268   SEND_VAL_EX/116           ?80       311:'PHP_QA_EMAIL'   ?1                  	;0
	407  268   SEND_VAL_EX/116           ?96       312:'qa-reports@lists.php.net' ?2                  	;0
	408  268   DO_FCALL_BY_NAME/131      ?147      ?0                   ?0                  	;0
	409  269   INIT_FCALL_BY_NAME/59     ?0        ?0                   313:'define'        	;2
	410  269   SEND_VAL_EX/116           ?80       315:'QA_SUBMISSION_PAGE' ?1                  	;0
	411  269   SEND_VAL_EX/116           ?96       316:'http://qa.php.net/buildtest-process.php' ?2                  	;0
	412  269   DO_FCALL_BY_NAME/131      ?148      ?0                   ?0                  	;0
	413  270   INIT_FCALL_BY_NAME/59     ?0        ?0                   317:'define'        	;2
	414  270   SEND_VAL_EX/116           ?80       319:'QA_REPORTS_PAGE' ?1                  	;0
	415  270   SEND_VAL_EX/116           ?96       320:'http://qa.php.net/reports' ?2                  	;0
	416  270   DO_FCALL_BY_NAME/131      ?149      ?0                   ?0                  	;0
	417  271   INIT_FCALL_BY_NAME/59     ?0        ?0                   321:'define'        	;2
	418  271   SEND_VAL_EX/116           ?80       323:'TRAVIS_CI'      ?1                  	;0
	419  271   INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'getenv'        	;1
	420  271   SEND_VAL_EX/116           ?80       326:'TRAVIS'         ?1                  	;0
	421  271   DO_FCALL_BY_NAME/131      $214=     ?0                   ?0                  	;0
	422  271   CAST/21                   #215=     $214                 ?0                  	;13
	423  271   SEND_VAL_EX/116           ?96       #215                 ?2                  	;0
	424  271   DO_FCALL_BY_NAME/131      ?152      ?0                   ?0                  	;0
	425  275   ASSIGN/38                 ?153      16?45                327:array (
)       	;0
	426  276   ASSIGN/38                 ?154      16?34                328:array (
)       	;0
	427  277   ASSIGN/38                 ?155      16?48                329:array (
)       	;0
	428  279   ASSIGN/38                 ?156      16?1                 330:array (
  'BORKED' => 
  array (
  ),
  'FAILED' => 
  array (
  ),
  'WARNED' => 
  array (
  ),
  'LEAKED' => 
  array (
  ),
  'XFAILED' => 
  array (
  ),
  'XLEAKED' => 
  array (
  ),
  'SLOW' => 
  array (
  ),
)	;0
	429  289   ASSIGN/38                 ?157      16?36                331:false           	;0
	430  290   ASSIGN/38                 ?158      16?14                332:false           	;0
	431  291   ASSIGN/38                 ?159      16?27                333:false           	;0
	432  292   ASSIGN/38                 ?160      16?28                334:''              	;0
	433  294   FETCH_CONSTANT/99         #225=     ?0                   335:'INIT_DIR'      	;16
	434  294   CONCAT/8                  #226=     #225                 338:'/php_test_results_'	;0
	435  294   INIT_FCALL_BY_NAME/59     ?0        ?0                   339:'date'          	;1
	436  294   SEND_VAL_EX/116           ?80       341:'Ymd_Hi'         ?1                  	;0
	437  294   DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
	438  294   CONCAT/8                  #228=     #226                 $227                	;0
	439  294   CONCAT/8                  #229=     #228                 342:'.txt'          	;0
	440  294   ASSIGN/38                 ?166      16?26                #229                	;0
	441  296   ASSIGN/38                 ?167      16?20                343:false           	;0
	442  297   ASSIGN/38                 ?168      16?51                344:NULL            	;0
	443  298   ASSIGN/38                 ?169      16?16                345:false           	;0
	444  299   ASSIGN/38                 ?170      16?15                346:NULL            	;0
	445  300   ASSIGN/38                 ?171      16?40                347:NULL            	;0
	446  301   ASSIGN/38                 ?172      16?41                348:NULL            	;0
	447  302   ASSIGN/38                 ?173      16?42                349:NULL            	;0
	448  303   ASSIGN/38                 ?174      16?8                 350:NULL            	;0
	449  304   ASSIGN/38                 ?175      16?23                351:false           	;0
	450  305   FETCH_CONSTANT/99         #240=     ?0                   352:'INF'           	;16
	451  305   ASSIGN/38                 ?177      16?37                #240                	;0
	452  306   ASSIGN/38                 ?178      16?33                355:false           	;0
	453  307   ASSIGN/38                 ?179      16?53                356:false           	;0
	454  308   ASSIGN/38                 ?180      16?54                357:NULL            	;0
	455  310   ASSIGN/38                 ?181      16?7                 358:array (
  0 => 'show',
  1 => 'keep',
)	;0
	456  311   ASSIGN/38                 ?182      16?6                 359:array (
  0 => 'skip',
  1 => 'php',
  2 => 'clean',
  3 => 'out',
  4 => 'diff',
  5 => 'exp',
  6 => 'mem',
)	;0
	457  312   ASSIGN/38                 ?183      16?5                 360:array (
)       	;0
	458  314   FE_RESET_R/77             $248=     16?7                 ?470                	;0
	459  314   FE_FETCH_R/78             ?0        $248                 16?56               	;470	>>470	<<469
	460  315   ASSIGN_DIM/147            ?185      16?5                 16?56               	;0
	461  315   OP_DATA/137               ?0        361:array (
)        ?0                  	;0
	462  317   FE_RESET_R/77             $250=     16?6                 ?468                	;0
	463  317   FE_FETCH_R/78             ?0        $250                 16?57               	;468	>>468	<<467
	464  318   FETCH_DIM_W/84            $251=     16?5                 16?56               	;0
	465  318   ASSIGN_DIM/147            ?188      $251                 16?57               	;0
	466  318   OP_DATA/137               ?0        362:false            ?0                  	;0
	467  318   JMP/42                    ?0        ?463                 ?0                  	;0	>>463
	468  318   FE_FREE/127               ?0        $250                 ?0                  	;0	<<462
	469  318   JMP/42                    ?0        ?459                 ?0                  	;0	>>459
	470  318   FE_FREE/127               ?0        $248                 ?0                  	;0	<<458
	471  322   ISSET_ISEMPTY_CV/197      #253=     16?3                 ?0                  	;33554432
	472  322   JMPZ_EX/46                #253=     #253                 ?475                	;0	>>475
	473  322   ISSET_ISEMPTY_CV/197      #254=     16?4                 ?0                  	;33554432
	474  322   BOOL/52                   #253=     #254                 ?0                  	;0
	475  322   BOOL_NOT/13               #255=     #253                 ?0                  	;0	<<472
	476  322   JMPNZ_EX/47               #255=     #255                 ?479                	;0	>>479
	477  322   BOOL_NOT/13               #256=     16?3                 ?0                  	;0
	478  322   BOOL/52                   #255=     #256                 ?0                  	;0
	479  322   JMPZ/43                   ?0        #255                 ?482                	;0	>>482	<<476
	480  323   ASSIGN/38                 ?193      16?4                 363:array (
  0 => 'bin\\php\\lib\\php\\build\\run-tests.php',
)	;0
	481  324   ASSIGN/38                 ?194      16?3                 364:1               	;0
	482  327   INIT_FCALL_BY_NAME/59     ?0        ?0                   365:'getenv'        	;1	<<479
	483  327   SEND_VAL_EX/116           ?80       367:'TEST_PHP_ARGS'  ?1                  	;0
	484  327   DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
	485  327   JMPZ/43                   ?0        $259                 ?502                	;0	>>502
	486  328   INIT_FCALL_BY_NAME/59     ?0        ?0                   368:'array_merge'   	;2
	487  328   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	488  328   INIT_FCALL_BY_NAME/59     ?0        ?0                   370:'explode'       	;2
	489  328   SEND_VAL_EX/116           ?80       372:' '              ?1                  	;0
	490  328   INIT_FCALL_BY_NAME/59     ?0        ?0                   373:'getenv'        	;1
	491  328   SEND_VAL_EX/116           ?80       375:'TEST_PHP_ARGS'  ?1                  	;0
	492  328   DO_FCALL_BY_NAME/131      $260=     ?0                   ?0                  	;0
	493  328   SEND_VAR_NO_REF_EX/50     ?96       $260                 ?2                  	;0
	494  328   DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
	495  328   SEND_VAR_NO_REF_EX/50     ?96       $261                 ?2                  	;0
	496  328   DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
	497  328   ASSIGN/38                 ?199      16?4                 $262                	;0
	498  329   INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'count'         	;1
	499  329   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	500  329   DO_FCALL_BY_NAME/131      $264=     ?0                   ?0                  	;0
	501  329   ASSIGN/38                 ?201      16?3                 $264                	;0
	502  332   ASSIGN/38                 ?202      16?58                378:1               	;0	<<485
	503  332   JMP/42                    ?0        ?990                 ?0                  	;0	>>990
	504  333   ASSIGN/38                 ?203      16?19                379:false           	;0	<<991
	505  334   INIT_FCALL_BY_NAME/59     ?0        ?0                   380:'substr'        	;3
	506  334   FETCH_DIM_FUNC_ARG/93     $268=     16?4                 16?58               	;1
	507  334   SEND_VAR_EX/66            ?80       $268                 ?1                  	;0
	508  334   SEND_VAL_EX/116           ?96       382:1                ?2                  	;0
	509  334   SEND_VAL_EX/116           ?112      383:1                ?3                  	;0
	510  334   DO_FCALL_BY_NAME/131      $269=     ?0                   ?0                  	;0
	511  334   ASSIGN/38                 ?206      16?39                $269                	;0
	512  335   INIT_FCALL_BY_NAME/59     ?0        ?0                   384:'substr'        	;3
	513  335   FETCH_DIM_FUNC_ARG/93     $271=     16?4                 16?58               	;1
	514  335   SEND_VAR_EX/66            ?80       $271                 ?1                  	;0
	515  335   SEND_VAL_EX/116           ?96       386:0                ?2                  	;0
	516  335   SEND_VAL_EX/116           ?112      387:1                ?3                  	;0
	517  335   DO_FCALL_BY_NAME/131      $272=     ?0                   ?0                  	;0
	518  335   IS_EQUAL/17               #273=     $272                 388:'-'             	;0
	519  335   ASSIGN/38                 ?210      16?35                #273                	;0
	520  337   JMP/42                    ?0        ?900                 ?0                  	;0	>>900
	521  339   BOOL_NOT/13               #275=     16?19                ?0                  	;0	<<900
	522  339   JMPZ/43                   ?0        #275                 ?530                	;0	>>530
	523  340   INIT_FCALL_BY_NAME/59     ?0        ?0                   389:'substr'        	;3
	524  340   FETCH_DIM_FUNC_ARG/93     $276=     16?4                 16?58               	;1
	525  340   SEND_VAR_EX/66            ?80       $276                 ?1                  	;0
	526  340   SEND_VAL_EX/116           ?96       391:1                ?2                  	;0
	527  340   SEND_VAL_EX/116           ?112      392:1                ?3                  	;0
	528  340   DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
	529  340   ASSIGN/38                 ?214      16?39                $277                	;0
	530  343   ASSIGN/38                 ?215      16?19                393:true            	;0	<<522
	531  345   JMPZ/43                   ?0        16?35                ?557                	;0	>>557
	532  346   FE_RESET_R/77             $280=     16?7                 ?556                	;0
	533  346   FE_FETCH_R/78             ?0        $280                 16?56               	;556	>>556	<<555
	534  347   INIT_FCALL_BY_NAME/59     ?0        ?0                   394:'strpos'        	;2
	535  347   SEND_VAR_EX/66            ?80       16?39                ?1                  	;0
	536  347   CONCAT/8                  #281=     396:'--'             16?56               	;0
	537  347   SEND_VAL_EX/116           ?96       #281                 ?2                  	;0
	538  347   DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
	539  347   IS_IDENTICAL/15           #283=     $282                 397:0               	;0
	540  347   JMPZ/43                   ?0        #283                 ?555                	;0	>>555
	541  348   FE_RESET_R/77             $284=     16?6                 ?554                	;0
	542  348   FE_FETCH_R/78             ?0        $284                 16?57               	;554	>>554	<<553
	543  349   CONCAT/8                  #285=     398:'--'             16?56               	;0
	544  349   CONCAT/8                  #286=     #285                 399:'-'             	;0
	545  349   CONCAT/8                  #287=     #286                 16?57               	;0
	546  349   IS_EQUAL/17               #288=     16?39                #287                	;0
	547  349   JMPZ/43                   ?0        #288                 ?553                	;0	>>553
	548  350   FETCH_DIM_W/84            $289=     16?5                 16?56               	;0
	549  350   ASSIGN_DIM/147            ?226      $289                 16?57               	;0
	550  350   OP_DATA/137               ?0        400:true             ?0                  	;0
	551  351   ASSIGN/38                 ?227      16?19                401:false           	;0
	552  352   BRK/254                   ?0        ?554                 0:1                 	;0
	553  352   JMP/42                    ?0        ?542                 ?0                  	;0	>>542	<<547
	554  352   FE_FREE/127               ?0        $284                 ?0                  	;0	<<541
	555  352   JMP/42                    ?0        ?533                 ?0                  	;0	>>533	<<540
	556  352   FE_FREE/127               ?0        $280                 ?0                  	;0	<<532
	557  359   BOOL_NOT/13               #292=     16?19                ?0                  	;0	<<531
	558  359   JMPZ/43                   ?0        #292                 ?561                	;0	>>561
	559  360   ASSIGN/38                 ?229      16?19                402:true            	;0
	560  361   BRK/254                   ?0        ?901                 0:1                 	;0
	561  364   ASSIGN/38                 ?230      16?35                403:false           	;0	<<558
	562  366   SWITCH_STRING/188         ?0        16?39                404:array (
  'j' => 640,
  'r' => 670,
  'l' => 670,
  'w' => 709,
  'a' => 717,
  'W' => 725,
  'c' => 733,
  'd' => 737,
  'g' => 742,
  '--keep-all' => 750,
  'm' => 758,
  'M' => 763,
  'n' => 771,
  'e' => 776,
  '--preload' => 778,
  '--no-clean' => 780,
  'p' => 782,
  'P' => 793,
  'q' => 803,
  's' => 809,
  '--set-timeout' => 814,
  '--show-all' => 819,
  '--show-slow' => 827,
  '--temp-source' => 831,
  '--temp-target' => 835,
  '--temp-urlbase' => 841,
  'v' => 845,
  '--verbose' => 845,
  'x' => 847,
  '--offline' => 850,
  '--shuffle' => 853,
  '--asan' => 855,
  '-' => 874,
  '--html' => 880,
  '--version' => 892,
  'h' => 898,
  '-help' => 898,
  '--help' => 898,
)	;894
	563  367   CASE/48                   #295=     16?39                405:'j'             	;0	>>565
	564  367   JMPNZ/44                  ?0        #295                 ?640                	;0	>>640
	565  378   CASE/48                   #295=     16?39                406:'r'             	;0	>>567	<<563
	566  378   JMPNZ/44                  ?0        #295                 ?670                	;0	>>670
	567  379   CASE/48                   #295=     16?39                407:'l'             	;0	>>569	<<565
	568  379   JMPNZ/44                  ?0        #295                 ?670                	;0	>>670
	569  398   CASE/48                   #295=     16?39                408:'w'             	;0	>>571	<<567
	570  398   JMPNZ/44                  ?0        #295                 ?709                	;0	>>709
	571  401   CASE/48                   #295=     16?39                409:'a'             	;0	>>573	<<569
	572  401   JMPNZ/44                  ?0        #295                 ?717                	;0	>>717
	573  404   CASE/48                   #295=     16?39                410:'W'             	;0	>>575	<<571
	574  404   JMPNZ/44                  ?0        #295                 ?725                	;0	>>725
	575  407   CASE/48                   #295=     16?39                411:'c'             	;0	>>577	<<573
	576  407   JMPNZ/44                  ?0        #295                 ?733                	;0	>>733
	577  410   CASE/48                   #295=     16?39                412:'d'             	;0	>>579	<<575
	578  410   JMPNZ/44                  ?0        #295                 ?737                	;0	>>737
	579  413   CASE/48                   #295=     16?39                413:'g'             	;0	>>581	<<577
	580  413   JMPNZ/44                  ?0        #295                 ?742                	;0	>>742
	581  417   CASE/48                   #295=     16?39                414:'--keep-all'    	;0	>>583	<<579
	582  417   JMPNZ/44                  ?0        #295                 ?750                	;0	>>750
	583  423   CASE/48                   #295=     16?39                415:'m'             	;0	>>585	<<581
	584  423   JMPNZ/44                  ?0        #295                 ?758                	;0	>>758
	585  426   CASE/48                   #295=     16?39                416:'M'             	;0	>>587	<<583
	586  426   JMPNZ/44                  ?0        #295                 ?763                	;0	>>763
	587  429   CASE/48                   #295=     16?39                417:'n'             	;0	>>589	<<585
	588  429   JMPNZ/44                  ?0        #295                 ?771                	;0	>>771
	589  435   CASE/48                   #295=     16?39                418:'e'             	;0	>>591	<<587
	590  435   JMPNZ/44                  ?0        #295                 ?776                	;0	>>776
	591  438   CASE/48                   #295=     16?39                419:'--preload'     	;0	>>593	<<589
	592  438   JMPNZ/44                  ?0        #295                 ?778                	;0	>>778
	593  441   CASE/48                   #295=     16?39                420:'--no-clean'    	;0	>>595	<<591
	594  441   JMPNZ/44                  ?0        #295                 ?780                	;0	>>780
	595  444   CASE/48                   #295=     16?39                421:'p'             	;0	>>597	<<593
	596  444   JMPNZ/44                  ?0        #295                 ?782                	;0	>>782
	597  449   CASE/48                   #295=     16?39                422:'P'             	;0	>>599	<<595
	598  449   JMPNZ/44                  ?0        #295                 ?793                	;0	>>793
	599  454   CASE/48                   #295=     16?39                423:'q'             	;0	>>601	<<597
	600  454   JMPNZ/44                  ?0        #295                 ?803                	;0	>>803
	601  459   CASE/48                   #295=     16?39                424:'s'             	;0	>>603	<<599
	602  459   JMPNZ/44                  ?0        #295                 ?809                	;0	>>809
	603  463   CASE/48                   #295=     16?39                425:'--set-timeout' 	;0	>>605	<<601
	604  463   JMPNZ/44                  ?0        #295                 ?814                	;0	>>814
	605  466   CASE/48                   #295=     16?39                426:'--show-all'    	;0	>>607	<<603
	606  466   JMPNZ/44                  ?0        #295                 ?819                	;0	>>819
	607  471   CASE/48                   #295=     16?39                427:'--show-slow'   	;0	>>609	<<605
	608  471   JMPNZ/44                  ?0        #295                 ?827                	;0	>>827
	609  474   CASE/48                   #295=     16?39                428:'--temp-source' 	;0	>>611	<<607
	610  474   JMPNZ/44                  ?0        #295                 ?831                	;0	>>831
	611  477   CASE/48                   #295=     16?39                429:'--temp-target' 	;0	>>613	<<609
	612  477   JMPNZ/44                  ?0        #295                 ?835                	;0	>>835
	613  483   CASE/48                   #295=     16?39                430:'--temp-urlbase'	;0	>>615	<<611
	614  483   JMPNZ/44                  ?0        #295                 ?841                	;0	>>841
	615  486   CASE/48                   #295=     16?39                431:'v'             	;0	>>617	<<613
	616  486   JMPNZ/44                  ?0        #295                 ?845                	;0	>>845
	617  487   CASE/48                   #295=     16?39                432:'--verbose'     	;0	>>619	<<615
	618  487   JMPNZ/44                  ?0        #295                 ?845                	;0	>>845
	619  490   CASE/48                   #295=     16?39                433:'x'             	;0	>>621	<<617
	620  490   JMPNZ/44                  ?0        #295                 ?847                	;0	>>847
	621  493   CASE/48                   #295=     16?39                434:'--offline'     	;0	>>623	<<619
	622  493   JMPNZ/44                  ?0        #295                 ?850                	;0	>>850
	623  496   CASE/48                   #295=     16?39                435:'--shuffle'     	;0	>>625	<<621
	624  496   JMPNZ/44                  ?0        #295                 ?853                	;0	>>853
	625  499   CASE/48                   #295=     16?39                436:'--asan'        	;0	>>627	<<623
	626  499   JMPNZ/44                  ?0        #295                 ?855                	;0	>>855
	627  512   CASE/48                   #295=     16?39                437:'-'             	;0	>>629	<<625
	628  512   JMPNZ/44                  ?0        #295                 ?874                	;0	>>874
	629  519   CASE/48                   #295=     16?39                438:'--html'        	;0	>>631	<<627
	630  519   JMPNZ/44                  ?0        #295                 ?880                	;0	>>880
	631  523   CASE/48                   #295=     16?39                439:'--version'     	;0	>>633	<<629
	632  523   JMPNZ/44                  ?0        #295                 ?892                	;0	>>892
	633  529   CASE/48                   #295=     16?39                440:'h'             	;0	>>635	<<631
	634  529   JMPNZ/44                  ?0        #295                 ?898                	;0	>>898
	635  530   CASE/48                   #295=     16?39                441:'-help'         	;0	>>637	<<633
	636  530   JMPNZ/44                  ?0        #295                 ?898                	;0	>>898
	637  531   CASE/48                   #295=     16?39                442:'--help'        	;0	>>639	<<635
	638  531   JMPNZ/44                  ?0        #295                 ?898                	;0	>>898
	639  531   JMP/42                    ?0        ?894                 ?0                  	;0	>>894	<<637
	640  368   INIT_FCALL_BY_NAME/59     ?0        ?0                   443:'substr'        	;2	<<564
	641  368   FETCH_DIM_FUNC_ARG/93     $296=     16?4                 16?58               	;1
	642  368   SEND_VAR_EX/66            ?80       $296                 ?1                  	;0
	643  368   SEND_VAL_EX/116           ?96       445:2                ?2                  	;0
	644  368   DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
	645  368   ASSIGN/38                 ?234      16?54                $297                	;0
	646  369   INIT_FCALL_BY_NAME/59     ?0        ?0                   446:'preg_match'    	;2
	647  369   SEND_VAL_EX/116           ?80       448:'/^\\d+$/'       ?1                  	;0
	648  369   SEND_VAR_EX/66            ?96       16?54                ?2                  	;0
	649  369   DO_FCALL_BY_NAME/131      $299=     ?0                   ?0                  	;0
	650  369   BOOL_NOT/13               #300=     $299                 ?0                  	;0
	651  369   JMPNZ_EX/47               #300=     #300                 ?654                	;0	>>654
	652  369   IS_EQUAL/17               #301=     16?54                449:0               	;0
	653  369   BOOL/52                   #300=     #301                 ?0                  	;0
	654  369   JMPZ/43                   ?0        #300                 ?661                	;0	>>661	<<651
	655  370   INIT_FCALL_BY_NAME/59     ?0        ?0                   450:'error'         	;1
	656  370   ROPE_INIT/54              #303=     ?0                   452:'\''            	;3
	657  370   ROPE_ADD/55               #303=     #303                 16?54               	;1
	658  370   ROPE_END/56               #302=     #303                 453:'\' is not a valid number of workers, try e.g. -j16 for 16 workers'	;2
	659  370   SEND_VAL_EX/116           ?80       #302                 ?1                  	;0
	660  370   DO_FCALL_BY_NAME/131      ?241      ?0                   ?0                  	;0
	661  372   INIT_FCALL_BY_NAME/59     ?0        ?0                   454:'intval'        	;2	<<654
	662  372   SEND_VAR_EX/66            ?80       16?54                ?1                  	;0
	663  372   SEND_VAL_EX/116           ?96       456:10               ?2                  	;0
	664  372   DO_FCALL_BY_NAME/131      $306=     ?0                   ?0                  	;0
	665  372   ASSIGN/38                 ?243      16?54                $306                	;0
	666  374   IS_IDENTICAL/15           #308=     16?54                457:1               	;0
	667  374   JMPZ/43                   ?0        #308                 ?669                	;0	>>669
	668  375   ASSIGN/38                 ?245      16?54                458:NULL            	;0
	669  377   CONT/255                  ?0        ?900                 0:2                 	;0	<<667
	670  380   INIT_FCALL_BY_NAME/59     ?0        ?0                   459:'file'          	;1	<<566,568
	671  380   PRE_INC/34                $310=     16?58                ?0                  	;0
	672  380   FETCH_DIM_FUNC_ARG/93     $311=     16?4                 $310                	;1
	673  380   SEND_VAR_EX/66            ?80       $311                 ?1                  	;0
	674  380   DO_FCALL_BY_NAME/131      $312=     ?0                   ?0                  	;0
	675  380   ASSIGN/38                 ?249      16?47                $312                	;0
	676  381   JMPZ/43                   ?0        16?47                ?704                	;0	>>704
	677  382   FE_RESET_R/77             $314=     16?47                ?703                	;0
	678  382   FE_FETCH_R/78             ?0        $314                 16?59               	;703	>>703	<<702
	679  383   ASSIGN/38                 ?251      16?22                461:array (
)       	;0
	680  384   INIT_FCALL_BY_NAME/59     ?0        ?0                   462:'preg_match'    	;3
	681  384   SEND_VAL_EX/116           ?80       464:'/^#.*\\[(.*)\\]\\:\\s+(.*)$/' ?1                  	;0
	682  384   SEND_VAR_EX/66            ?96       16?59                ?2                  	;0
	683  384   SEND_VAR_EX/66            ?112      16?22                ?3                  	;0
	684  384   DO_FCALL_BY_NAME/131      $316=     ?0                   ?0                  	;0
	685  384   JMPZ/43                   ?0        $316                 ?693                	;0	>>693
	686  385   FETCH_DIM_R/81            $318=     16?22                465:1               	;0
	687  385   INIT_ARRAY/71             #319=     $318                 ?0                  	;8
	688  385   FETCH_DIM_R/81            $320=     16?22                466:2               	;0
	689  385   ADD_ARRAY_ELEMENT/72      #319=     $320                 ?0                  	;0
	690  385   ASSIGN_DIM/147            ?253      16?34                ?4437168            	;0
	691  385   OP_DATA/137               ?0        #319                 ?0                  	;0
	692  385   JMP/42                    ?0        ?702                 ?0                  	;0	>>702
	693  387   INIT_FCALL_BY_NAME/59     ?0        ?0                   467:'strlen'        	;1	<<685
	694  387   SEND_VAR_EX/66            ?80       16?59                ?1                  	;0
	695  387   DO_FCALL_BY_NAME/131      $321=     ?0                   ?0                  	;0
	696  387   JMPZ/43                   ?0        $321                 ?702                	;0	>>702
	697  388   INIT_FCALL_BY_NAME/59     ?0        ?0                   469:'trim'          	;1
	698  388   SEND_VAR_EX/66            ?80       16?59                ?1                  	;0
	699  388   DO_FCALL_BY_NAME/131      $323=     ?0                   ?0                  	;0
	700  388   ASSIGN_DIM/147            ?258      16?45                ?4437614            	;0
	701  388   OP_DATA/137               ?0        $323                 ?0                  	;0
	702  388   JMP/42                    ?0        ?678                 ?0                  	;0	>>678	<<692,696
	703  388   FE_FREE/127               ?0        $314                 ?0                  	;0	<<677
	704  393   IS_NOT_EQUAL/18           #324=     16?39                471:'l'             	;0	<<676
	705  393   JMPZ/43                   ?0        #324                 ?707                	;0	>>707
	706  394   CONT/255                  ?0        ?900                 0:2                 	;0
	707  396   POST_DEC/37               #325=     16?58                ?0                  	;0	<<705
	708  396   FREE/70                   ?0        #325                 ?0                  	;0
	709  399   INIT_FCALL_BY_NAME/59     ?0        ?0                   472:'fopen'         	;2	<<570
	710  399   PRE_INC/34                $326=     16?58                ?0                  	;0
	711  399   FETCH_DIM_FUNC_ARG/93     $327=     16?4                 $326                	;1
	712  399   SEND_VAR_EX/66            ?80       $327                 ?1                  	;0
	713  399   SEND_VAL_EX/116           ?96       474:'w+t'            ?2                  	;0
	714  399   DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
	715  399   ASSIGN/38                 ?265      16?14                $328                	;0
	716  400   CONT/255                  ?0        ?900                 0:2                 	;0
	717  402   INIT_FCALL_BY_NAME/59     ?0        ?0                   475:'fopen'         	;2	<<572
	718  402   PRE_INC/34                $330=     16?58                ?0                  	;0
	719  402   FETCH_DIM_FUNC_ARG/93     $331=     16?4                 $330                	;1
	720  402   SEND_VAR_EX/66            ?80       $331                 ?1                  	;0
	721  402   SEND_VAL_EX/116           ?96       477:'a+t'            ?2                  	;0
	722  402   DO_FCALL_BY_NAME/131      $332=     ?0                   ?0                  	;0
	723  402   ASSIGN/38                 ?269      16?14                $332                	;0
	724  403   CONT/255                  ?0        ?900                 0:2                 	;0
	725  405   INIT_FCALL_BY_NAME/59     ?0        ?0                   478:'fopen'         	;2	<<574
	726  405   PRE_INC/34                $334=     16?58                ?0                  	;0
	727  405   FETCH_DIM_FUNC_ARG/93     $335=     16?4                 $334                	;1
	728  405   SEND_VAR_EX/66            ?80       $335                 ?1                  	;0
	729  405   SEND_VAL_EX/116           ?96       480:'w+t'            ?2                  	;0
	730  405   DO_FCALL_BY_NAME/131      $336=     ?0                   ?0                  	;0
	731  405   ASSIGN/38                 ?273      16?36                $336                	;0
	732  406   CONT/255                  ?0        ?900                 0:2                 	;0
	733  408   PRE_INC/34                $338=     16?58                ?0                  	;0	<<576
	734  408   FETCH_DIM_R/81            $339=     16?4                 $338                	;0
	735  408   ASSIGN/38                 ?276      16?8                 $339                	;0
	736  409   CONT/255                  ?0        ?900                 0:2                 	;0
	737  411   PRE_INC/34                $342=     16?58                ?0                  	;0	<<578
	738  411   FETCH_DIM_R/81            $343=     16?4                 $342                	;0
	739  411   ASSIGN_DIM/147            ?277      16?18                ?2670193696         	;0
	740  411   OP_DATA/137               ?0        $343                 ?0                  	;0
	741  412   CONT/255                  ?0        ?900                 0:2                 	;0
	742  414   INIT_FCALL_BY_NAME/59     ?0        ?0                   481:'explode'       	;2	<<580
	743  414   SEND_VAL_EX/116           ?80       483:','              ?1                  	;0
	744  414   PRE_INC/34                $344=     16?58                ?0                  	;0
	745  414   FETCH_DIM_FUNC_ARG/93     $345=     16?4                 $344                	;2
	746  414   SEND_VAR_EX/66            ?96       $345                 ?2                  	;0
	747  414   DO_FCALL_BY_NAME/131      $346=     ?0                   ?0                  	;0
	748  414   ASSIGN/38                 ?283      16?2                 $346                	;0
	749  415   CONT/255                  ?0        ?900                 0:2                 	;0
	750  418   FE_RESET_R/77             $348=     16?6                 ?756                	;0	<<582
	751  418   FE_FETCH_R/78             ?0        $348                 16?57               	;756	>>756	<<755
	752  419   FETCH_DIM_W/84            $349=     16?5                 484:'keep'          	;0
	753  419   ASSIGN_DIM/147            ?286      $349                 16?57               	;0
	754  419   OP_DATA/137               ?0        485:true             ?0                  	;0
	755  419   JMP/42                    ?0        ?751                 ?0                  	;0	>>751
	756  419   FE_FREE/127               ?0        $348                 ?0                  	;0	<<750
	757  421   CONT/255                  ?0        ?900                 0:2                 	;0
	758  424   NEW/68                    $351=     486:'RuntestsValgrind' ?96                 	;1	<<584
	759  424   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	760  424   DO_FCALL/60               ?288      ?8                   ?0                  	;0
	761  424   ASSIGN/38                 ?289      16?51                $351                	;0
	762  425   CONT/255                  ?0        ?900                 0:2                 	;0
	763  427   NEW/68                    $354=     488:'RuntestsValgrind' ?192                	;2	<<586
	764  427   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	765  427   PRE_INC/34                $355=     16?58                ?0                  	;0
	766  427   FETCH_DIM_FUNC_ARG/93     $356=     16?4                 $355                	;2
	767  427   SEND_VAR_EX/66            ?96       $356                 ?2                  	;0
	768  427   DO_FCALL/60               ?293      ?8                   ?0                  	;0
	769  427   ASSIGN/38                 ?294      16?51                $354                	;0
	770  428   CONT/255                  ?0        ?900                 0:2                 	;0
	771  430   BOOL_NOT/13               #359=     16?27                ?0                  	;0	<<588
	772  430   JMPZ/43                   ?0        #359                 ?774                	;0	>>774
	773  431   ASSIGN_CONCAT/30          ?296      16?28                490:' -n'           	;0
	774  433   ASSIGN/38                 ?297      16?27                491:true            	;0	<<772
	775  434   CONT/255                  ?0        ?900                 0:2                 	;0
	776  436   ASSIGN_CONCAT/30          ?298      16?28                492:' -e'           	;0	<<590
	777  437   CONT/255                  ?0        ?900                 0:2                 	;0
	778  439   ASSIGN/38                 ?299      16?33                493:true            	;0	<<592
	779  440   CONT/255                  ?0        ?900                 0:2                 	;0
	780  442   ASSIGN/38                 ?300      16?23                494:true            	;0	<<594
	781  443   CONT/255                  ?0        ?900                 0:2                 	;0
	782  445   PRE_INC/34                $365=     16?58                ?0                  	;0	<<596
	783  445   FETCH_DIM_R/81            $366=     16?4                 $365                	;0
	784  445   ASSIGN/38                 ?303      16?30                $366                	;0
	785  446   INIT_FCALL_BY_NAME/59     ?0        ?0                   495:'putenv'        	;1
	786  446   NOP/0                     ?0        ?0                   ?0                  	;0
	787  446   FAST_CONCAT/53            #368=     497:'TEST_PHP_EXECUTABLE=' 16?30               	;0
	788  446   SEND_VAL_EX/116           ?80       #368                 ?1                  	;0
	789  446   DO_FCALL_BY_NAME/131      ?305      ?0                   ?0                  	;0
	790  447   ASSIGN_DIM/147            ?306      16?10                498:'TEST_PHP_EXECUTABLE'	;0
	791  447   OP_DATA/137               ?0        16?30                ?0                  	;0
	792  448   CONT/255                  ?0        ?900                 0:2                 	;0
	793  450   FETCH_CONSTANT/99         #371=     ?0                   499:'PHP_BINARY'    	;16	<<598
	794  450   ASSIGN/38                 ?308      16?30                #371                	;0
	795  451   INIT_FCALL_BY_NAME/59     ?0        ?0                   502:'putenv'        	;1
	796  451   NOP/0                     ?0        ?0                   ?0                  	;0
	797  451   FAST_CONCAT/53            #373=     504:'TEST_PHP_EXECUTABLE=' 16?30               	;0
	798  451   SEND_VAL_EX/116           ?80       #373                 ?1                  	;0
	799  451   DO_FCALL_BY_NAME/131      ?310      ?0                   ?0                  	;0
	800  452   ASSIGN_DIM/147            ?311      16?10                505:'TEST_PHP_EXECUTABLE'	;0
	801  452   OP_DATA/137               ?0        16?30                ?0                  	;0
	802  453   CONT/255                  ?0        ?900                 0:2                 	;0
	803  455   INIT_FCALL_BY_NAME/59     ?0        ?0                   506:'putenv'        	;1	<<600
	804  455   SEND_VAL_EX/116           ?80       508:'NO_INTERACTION=1' ?1                  	;0
	805  455   DO_FCALL_BY_NAME/131      ?312      ?0                   ?0                  	;0
	806  456   ASSIGN_DIM/147            ?313      16?10                509:'NO_INTERACTION'	;0
	807  456   OP_DATA/137               ?0        510:1                ?0                  	;0
	808  457   CONT/255                  ?0        ?900                 0:2                 	;0
	809  460   PRE_INC/34                $378=     16?58                ?0                  	;0	<<602
	810  460   FETCH_DIM_R/81            $379=     16?4                 $378                	;0
	811  460   ASSIGN/38                 ?316      16?26                $379                	;0
	812  461   ASSIGN/38                 ?317      16?20                511:true            	;0
	813  462   CONT/255                  ?0        ?900                 0:2                 	;0
	814  464   PRE_INC/34                $383=     16?58                ?0                  	;0	<<604
	815  464   FETCH_DIM_R/81            $384=     16?4                 $383                	;0
	816  464   ASSIGN_DIM/147            ?318      16?10                512:'TEST_TIMEOUT'  	;0
	817  464   OP_DATA/137               ?0        $384                 ?0                  	;0
	818  465   CONT/255                  ?0        ?900                 0:2                 	;0
	819  467   FE_RESET_R/77             $385=     16?6                 ?825                	;0	<<606
	820  467   FE_FETCH_R/78             ?0        $385                 16?57               	;825	>>825	<<824
	821  468   FETCH_DIM_W/84            $386=     16?5                 513:'show'          	;0
	822  468   ASSIGN_DIM/147            ?323      $386                 16?57               	;0
	823  468   OP_DATA/137               ?0        514:true             ?0                  	;0
	824  468   JMP/42                    ?0        ?820                 ?0                  	;0	>>820
	825  468   FE_FREE/127               ?0        $385                 ?0                  	;0	<<819
	826  470   CONT/255                  ?0        ?900                 0:2                 	;0
	827  472   PRE_INC/34                $388=     16?58                ?0                  	;0	<<608
	828  472   FETCH_DIM_R/81            $389=     16?4                 $388                	;0
	829  472   ASSIGN/38                 ?326      16?37                $389                	;0
	830  473   CONT/255                  ?0        ?900                 0:2                 	;0
	831  475   PRE_INC/34                $391=     16?58                ?0                  	;0	<<610
	832  475   FETCH_DIM_R/81            $392=     16?4                 $391                	;0
	833  475   ASSIGN/38                 ?329      16?40                $392                	;0
	834  476   CONT/255                  ?0        ?900                 0:2                 	;0
	835  478   PRE_INC/34                $394=     16?58                ?0                  	;0	<<612
	836  478   FETCH_DIM_R/81            $395=     16?4                 $394                	;0
	837  478   ASSIGN/38                 ?332      16?41                $395                	;0
	838  479   JMPZ/43                   ?0        16?42                ?840                	;0	>>840
	839  480   ASSIGN/38                 ?333      16?42                16?41               	;0
	840  482   CONT/255                  ?0        ?900                 0:2                 	;0	<<838
	841  484   PRE_INC/34                $398=     16?58                ?0                  	;0	<<614
	842  484   FETCH_DIM_R/81            $399=     16?4                 $398                	;0
	843  484   ASSIGN/38                 ?336      16?42                $399                	;0
	844  485   CONT/255                  ?0        ?900                 0:2                 	;0
	845  488   ASSIGN/38                 ?337      16?0                 515:true            	;0	<<616,618
	846  489   CONT/255                  ?0        ?900                 0:2                 	;0
	847  491   ASSIGN_DIM/147            ?338      16?10                516:'SKIP_SLOW_TESTS'	;0	<<620
	848  491   OP_DATA/137               ?0        517:1                ?0                  	;0
	849  492   CONT/255                  ?0        ?900                 0:2                 	;0
	850  494   ASSIGN_DIM/147            ?339      16?10                518:'SKIP_ONLINE_TESTS'	;0	<<622
	851  494   OP_DATA/137               ?0        519:1                ?0                  	;0
	852  495   CONT/255                  ?0        ?900                 0:2                 	;0
	853  497   ASSIGN/38                 ?340      16?53                520:true            	;0	<<624
	854  498   CONT/255                  ?0        ?900                 0:2                 	;0
	855  500   ASSIGN_DIM/147            ?341      16?10                521:'USE_ZEND_ALLOC'	;0	<<626
	856  500   OP_DATA/137               ?0        522:0                ?0                  	;0
	857  501   ASSIGN_DIM/147            ?342      16?10                523:'USE_TRACKED_ALLOC'	;0
	858  501   OP_DATA/137               ?0        524:1                ?0                  	;0
	859  502   ASSIGN_DIM/147            ?343      16?10                525:'SKIP_ASAN'     	;0
	860  502   OP_DATA/137               ?0        526:1                ?0                  	;0
	861  503   ASSIGN_DIM/147            ?344      16?10                527:'SKIP_PERF_SENSITIVE'	;0
	862  503   OP_DATA/137               ?0        528:1                ?0                  	;0
	863  505   CONCAT/8                  #409=     529:'bin\\php\\lib\\php\\build' 530:'/azure/lsan-suppressions.txt'	;0
	864  505   ASSIGN/38                 ?346      16?60                #409                	;0
	865  506   INIT_FCALL_BY_NAME/59     ?0        ?0                   531:'file_exists'   	;1
	866  506   SEND_VAR_EX/66            ?80       16?60                ?1                  	;0
	867  506   DO_FCALL_BY_NAME/131      $411=     ?0                   ?0                  	;0
	868  506   JMPZ/43                   ?0        $411                 ?873                	;0	>>873
	869  507   CONCAT/8                  #413=     534:'suppressions='  16?60               	;0
	870  508   CONCAT/8                  #414=     #413                 535:':print_suppressions=0'	;0
	871  507   ASSIGN_DIM/147            ?348      16?10                533:'LSAN_OPTIONS'  	;0
	872  508   OP_DATA/137               ?0        #414                 ?0                  	;0
	873  510   CONT/255                  ?0        ?900                 0:2                 	;0	<<868
	874  514   FETCH_DIM_R/81            $415=     16?4                 16?58               	;0	<<628
	875  514   ASSIGN/38                 ?352      16?39                $415                	;0
	876  515   IS_NOT_EQUAL/18           #417=     16?39                536:'-'             	;0
	877  515   JMPZ/43                   ?0        #417                 ?879                	;0	>>879
	878  516   ASSIGN/38                 ?354      16?35                537:true            	;0
	879  518   CONT/255                  ?0        ?900                 0:2                 	;0	<<877
	880  520   INIT_FCALL_BY_NAME/59     ?0        ?0                   538:'fopen'         	;2	<<630
	881  520   PRE_INC/34                $419=     16?58                ?0                  	;0
	882  520   FETCH_DIM_FUNC_ARG/93     $420=     16?4                 $419                	;1
	883  520   SEND_VAR_EX/66            ?80       $420                 ?1                  	;0
	884  520   SEND_VAL_EX/116           ?96       540:'wt'             ?2                  	;0
	885  520   DO_FCALL_BY_NAME/131      $421=     ?0                   ?0                  	;0
	886  520   ASSIGN/38                 ?358      16?15                $421                	;0
	887  521   INIT_FCALL_BY_NAME/59     ?0        ?0                   541:'is_resource'   	;1
	888  521   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	889  521   DO_FCALL_BY_NAME/131      $423=     ?0                   ?0                  	;0
	890  521   ASSIGN/38                 ?360      16?16                $423                	;0
	891  522   CONT/255                  ?0        ?900                 0:2                 	;0
	892  524   ECHO/40                   ?0        543:'$Id: ce16b4fbf0aba210a673410ad92c7fc42ebd9365 $
' ?0                  	;0	<<632
	893  525   EXIT/79                   ?0        544:1                ?0                  	;0
	894  528   ROPE_INIT/54              #426=     ?0                   545:'Illegal switch \''	;3	<<639
	895  528   ROPE_ADD/55               #426=     #426                 16?39               	;1
	896  528   ROPE_END/56               #425=     #426                 546:'\' specified!
'	;2
	897  528   ECHO/40                   ?0        #425                 ?0                  	;0
	898  533   ECHO/40                   ?0        547:'Synopsis:
    php run-tests.php [options] [files] [directories]

Options:
    -j<workers> Run <workers> simultaneous testing processes in parallel for
                quicker testing on systems with multiple logical processors.
                Note that this is experimental feature.

    -l <file>   Read the testfiles to be executed from <file>. After the test
                has finished all failed tests are written to the same <file>.
                If the list is empty and no further test is specified then
                all tests are executed (same as: -r <file> -w <file>).

    -r <file>   Read the testfiles to be executed from <file>.

    -w <file>   Write a list of all failed tests to <file>.

    -a <file>   Same as -w but append rather then truncating <file>.

    -W <file>   Write a list of all tests and their result status to <file>.

    -c <file>   Look for php.ini in directory <file> or use <file> as ini.

    -n          Pass -n option to the php binary (Do not use a php.ini).

    -d foo=bar  Pass -d option to the php binary (Define INI entry foo
                with value \'bar\').

    -g          Comma separated list of groups to show during test run
                (possible values: PASS, FAIL, XFAIL, XLEAK, SKIP, BORK, WARN, LEAK, REDIRECT).

    -m          Test for memory leaks with Valgrind (equivalent to -M memcheck).

    -M <tool>   Test for errors with Valgrind tool.

    -p <php>    Specify PHP executable to run.

    -P          Use PHP_BINARY as PHP executable to run (default).

    -q          Quiet, no user interaction (same as environment NO_INTERACTION).

    -s <file>   Write output to <file>.

    -x          Sets \'SKIP_SLOW_TESTS\' environmental variable.

    --offline   Sets \'SKIP_ONLINE_TESTS\' environmental variable.

    --verbose
    -v          Verbose mode.

    --help
    -h          This Help.

    --html <file> Generate HTML output.

    --temp-source <sdir>  --temp-target <tdir> [--temp-urlbase <url>]
                Write temporary files to <tdir> by replacing <sdir> from the
                filenames to generate with <tdir>. If --html is being used and
                <url> given then the generated links are relative and prefixed
                with the given url. In general you want to make <sdir> the path
                to your source files and <tdir> some patch in your web page
                hierarchy with <url> pointing to <tdir>.

    --keep-[all|php|skip|clean]
                Do not delete \'all\' files, \'php\' test file, \'skip\' or \'clean\'
                file.

    --set-timeout [n]
                Set timeout for individual tests, where [n] is the number of
                seconds. The default value is 60 seconds, or 300 seconds when
                testing for memory leaks.

    --show-[all|php|skip|clean|exp|diff|out|mem]
                Show \'all\' files, \'php\' test file, \'skip\' or \'clean\' file. You
                can also use this to show the output \'out\', the expected result
                \'exp\', the difference between them \'diff\' or the valgrind log
                \'mem\'. The result types get written independent of the log format,
                however \'diff\' only exists when a test fails.

    --show-slow [n]
                Show all tests that took longer than [n] milliseconds to run.

    --no-clean  Do not execute clean section if any.
' ?0                  	;0	<<634,636,638
	899  618   EXIT/79                   ?0        548:1                ?0                  	;0
	900  337   JMPNZ/44                  ?0        16?35                ?521                	;0	>>521	<<520
	901  622   BOOL_NOT/13               #428=     16?19                ?0                  	;0
	902  622   JMPZ/43                   ?0        #428                 ?988                	;0	>>988
	903  623   INIT_FCALL_BY_NAME/59     ?0        ?0                   549:'realpath'      	;1
	904  623   FETCH_DIM_FUNC_ARG/93     $429=     16?4                 16?58               	;1
	905  623   SEND_VAR_EX/66            ?80       $429                 ?1                  	;0
	906  623   DO_FCALL_BY_NAME/131      $430=     ?0                   ?0                  	;0
	907  623   ASSIGN/38                 ?367      16?49                $430                	;0
	908  625   BOOL_NOT/13               #432=     16?49                ?0                  	;0
	909  625   JMPZ_EX/46                #432=     #432                 ?917                	;0	>>917
	910  625   INIT_FCALL_BY_NAME/59     ?0        ?0                   551:'strpos'        	;2
	911  625   FETCH_DIM_FUNC_ARG/93     $433=     16?4                 16?58               	;1
	912  625   SEND_VAR_EX/66            ?80       $433                 ?1                  	;0
	913  625   SEND_VAL_EX/116           ?96       553:'*'              ?2                  	;0
	914  625   DO_FCALL_BY_NAME/131      $434=     ?0                   ?0                  	;0
	915  625   IS_NOT_IDENTICAL/16       #435=     $434                 554:false           	;0
	916  625   BOOL/52                   #432=     #435                 ?0                  	;0
	917  625   JMPZ_EX/46                #432=     #432                 ?922                	;0	>>922	<<909
	918  625   INIT_FCALL_BY_NAME/59     ?0        ?0                   555:'function_exists'	;1
	919  625   SEND_VAL_EX/116           ?80       557:'glob'           ?1                  	;0
	920  625   DO_FCALL_BY_NAME/131      $436=     ?0                   ?0                  	;0
	921  625   BOOL/52                   #432=     $436                 ?0                  	;0
	922  625   JMPZ/43                   ?0        #432                 ?965                	;0	>>965	<<917
	923  627   INIT_FCALL_BY_NAME/59     ?0        ?0                   558:'substr'        	;2
	924  627   FETCH_DIM_FUNC_ARG/93     $437=     16?4                 16?58               	;1
	925  627   SEND_VAR_EX/66            ?80       $437                 ?1                  	;0
	926  627   SEND_VAL_EX/116           ?96       560:-5               ?2                  	;0
	927  627   DO_FCALL_BY_NAME/131      $438=     ?0                   ?0                  	;0
	928  627   IS_EQUAL/17               #439=     $438                 561:'.phpt'         	;0
	929  627   JMPZ/43                   ?0        #439                 ?936                	;0	>>936
	930  628   INIT_FCALL_BY_NAME/59     ?0        ?0                   562:'glob'          	;1
	931  628   FETCH_DIM_FUNC_ARG/93     $440=     16?4                 16?58               	;1
	932  628   SEND_VAR_EX/66            ?80       $440                 ?1                  	;0
	933  628   DO_FCALL_BY_NAME/131      $441=     ?0                   ?0                  	;0
	934  628   ASSIGN/38                 ?378      16?29                $441                	;0
	935  628   JMP/42                    ?0        ?955                 ?0                  	;0	>>955
	936  630   INIT_FCALL_BY_NAME/59     ?0        ?0                   564:'preg_match'    	;2	<<929
	937  630   SEND_VAL_EX/116           ?80       566:'/\\*$/'         ?1                  	;0
	938  630   FETCH_DIM_FUNC_ARG/93     $443=     16?4                 16?58               	;2
	939  630   SEND_VAR_EX/66            ?96       $443                 ?2                  	;0
	940  630   DO_FCALL_BY_NAME/131      $444=     ?0                   ?0                  	;0
	941  630   JMPZ/43                   ?0        $444                 ?949                	;0	>>949
	942  631   INIT_FCALL_BY_NAME/59     ?0        ?0                   567:'glob'          	;1
	943  631   FETCH_DIM_R/81            $445=     16?4                 16?58               	;0
	944  631   CONCAT/8                  #446=     $445                 569:'.phpt'         	;0
	945  631   SEND_VAL_EX/116           ?80       #446                 ?1                  	;0
	946  631   DO_FCALL_BY_NAME/131      $447=     ?0                   ?0                  	;0
	947  631   ASSIGN/38                 ?384      16?29                $447                	;0
	948  631   JMP/42                    ?0        ?955                 ?0                  	;0	>>955
	949  633   FETCH_DIM_R/81            $449=     16?4                 16?58               	;0	<<941
	950  633   CONCAT/8                  #450=     570:'Cannot find test file "' $449                	;0
	951  633   CONCAT/8                  #451=     #450                 571:'".'            	;0
	952  633   FETCH_CONSTANT/99         #452=     ?0                   572:'PHP_EOL'       	;16
	953  633   CONCAT/8                  #453=     #451                 #452                	;0
	954  633   EXIT/79                   ?0        #453                 ?0                  	;0
	955  637   INIT_FCALL_BY_NAME/59     ?0        ?0                   575:'is_array'      	;1	<<935,948
	956  637   SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	957  637   DO_FCALL_BY_NAME/131      $454=     ?0                   ?0                  	;0
	958  637   JMPZ/43                   ?0        $454                 ?964                	;0	>>964
	959  638   INIT_FCALL_BY_NAME/59     ?0        ?0                   577:'array_merge'   	;2
	960  638   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	961  638   SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
	962  638   DO_FCALL_BY_NAME/131      $455=     ?0                   ?0                  	;0
	963  638   ASSIGN/38                 ?392      16?45                $455                	;0
	964  638   CONT/255                  ?0        ?988                 0:1                 	;0	<<958
	965  642   INIT_FCALL_BY_NAME/59     ?0        ?0                   579:'is_dir'        	;1	<<922
	966  642   SEND_VAR_EX/66            ?80       16?49                ?1                  	;0
	967  642   DO_FCALL_BY_NAME/131      $457=     ?0                   ?0                  	;0
	968  642   JMPZ/43                   ?0        $457                 ?973                	;0	>>973
	969  643   INIT_FCALL_BY_NAME/59     ?0        ?0                   581:'find_files'    	;1
	970  643   SEND_VAR_EX/66            ?80       16?49                ?1                  	;0
	971  643   DO_FCALL_BY_NAME/131      ?394      ?0                   ?0                  	;0
	972  643   CONT/255                  ?0        ?988                 0:1                 	;0
	973  645   INIT_FCALL_BY_NAME/59     ?0        ?0                   583:'substr'        	;2	<<968
	974  645   SEND_VAR_EX/66            ?80       16?49                ?1                  	;0
	975  645   SEND_VAL_EX/116           ?96       585:-5               ?2                  	;0
	976  645   DO_FCALL_BY_NAME/131      $459=     ?0                   ?0                  	;0
	977  645   IS_EQUAL/17               #460=     $459                 586:'.phpt'         	;0
	978  645   JMPZ/43                   ?0        #460                 ?982                	;0	>>982
	979  646   ASSIGN_DIM/147            ?397      16?45                ?2670193216         	;0
	980  646   OP_DATA/137               ?0        16?49                ?0                  	;0
	981  646   CONT/255                  ?0        ?988                 0:1                 	;0
	982  648   FETCH_DIM_R/81            $462=     16?4                 16?58               	;0	<<978
	983  648   CONCAT/8                  #463=     587:'Cannot find test file "' $462                	;0
	984  648   CONCAT/8                  #464=     #463                 588:'".'            	;0
	985  648   FETCH_CONSTANT/99         #465=     ?0                   589:'PHP_EOL'       	;16
	986  648   CONCAT/8                  #466=     #464                 #465                	;0
	987  648   EXIT/79                   ?0        #466                 ?0                  	;0
	988  332   POST_INC/36               #467=     16?58                ?0                  	;0	<<902
	989  332   FREE/70                   ?0        #467                 ?0                  	;0
	990  332   IS_SMALLER/19             #468=     16?58                16?3                	;0	<<503
	991  332   JMPNZ/44                  ?0        #468                 ?504                	;0	>>504
	992  656   ISSET_ISEMPTY_DIM_OBJ/115 #469=     16?10                592:'TEST_PHP_EXECUTABLE'	;33554432
	993  656   BOOL_NOT/13               #470=     #469                 ?0                  	;0
	994  656   JMPZ/43                   ?0        #470                 ?1004               	;0	>>1004
	995  657   FETCH_CONSTANT/99         #471=     ?0                   593:'PHP_BINARY'    	;16
	996  657   ASSIGN/38                 ?408      16?30                #471                	;0
	997  658   INIT_FCALL_BY_NAME/59     ?0        ?0                   596:'putenv'        	;1
	998  658   NOP/0                     ?0        ?0                   ?0                  	;0
	999  658   FAST_CONCAT/53            #473=     598:'TEST_PHP_EXECUTABLE=' 16?30               	;0
	1000 658   SEND_VAL_EX/116           ?80       #473                 ?1                  	;0
	1001 658   DO_FCALL_BY_NAME/131      ?410      ?0                   ?0                  	;0
	1002 659   ASSIGN_DIM/147            ?411      16?10                599:'TEST_PHP_EXECUTABLE'	;0
	1003 659   OP_DATA/137               ?0        16?30                ?0                  	;0
	1004 662   INIT_FCALL_BY_NAME/59     ?0        ?0                   600:'strlen'        	;1	<<994
	1005 662   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	1006 662   DO_FCALL_BY_NAME/131      $476=     ?0                   ?0                  	;0
	1007 662   JMPZ/43                   ?0        $476                 ?1028               	;0	>>1028
	1008 663   INIT_FCALL_BY_NAME/59     ?0        ?0                   602:'substr'        	;3
	1009 663   FETCH_CONSTANT/99         #477=     ?0                   604:'PHP_OS'        	;16
	1010 663   SEND_VAL_EX/116           ?80       #477                 ?1                  	;0
	1011 663   SEND_VAL_EX/116           ?96       607:0                ?2                  	;0
	1012 663   SEND_VAL_EX/116           ?112      608:3                ?3                  	;0
	1013 663   DO_FCALL_BY_NAME/131      $478=     ?0                   ?0                  	;0
	1014 663   IS_EQUAL/17               #479=     $478                 609:'WIN'           	;0
	1015 663   JMPZ/43                   ?0        #479                 ?1022               	;0	>>1022
	1016 664   INIT_FCALL_BY_NAME/59     ?0        ?0                   610:'escapeshellarg'	;1
	1017 664   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	1018 664   DO_FCALL_BY_NAME/131      $480=     ?0                   ?0                  	;0
	1019 664   CONCAT/8                  #481=     612:' -c '           $480                	;0
	1020 664   ASSIGN_CONCAT/30          ?418      16?28                #481                	;0
	1021 664   JMP/42                    ?0        ?1028                ?0                  	;0	>>1028
	1022 666   INIT_FCALL_BY_NAME/59     ?0        ?0                   613:'realpath'      	;1	<<1015
	1023 666   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	1024 666   DO_FCALL_BY_NAME/131      $483=     ?0                   ?0                  	;0
	1025 666   CONCAT/8                  #484=     615:' -c \''         $483                	;0
	1026 666   CONCAT/8                  #485=     #484                 616:'\''            	;0
	1027 666   ASSIGN_CONCAT/30          ?422      16?28                #485                	;0
	1028 670   INIT_FCALL_BY_NAME/59     ?0        ?0                   617:'array_unique'  	;1	<<1007,1021
	1029 670   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	1030 670   DO_FCALL_BY_NAME/131      $487=     ?0                   ?0                  	;0
	1031 670   ASSIGN/38                 ?424      16?45                $487                	;0
	1032 671   INIT_FCALL_BY_NAME/59     ?0        ?0                   619:'array_merge'   	;2
	1033 671   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	1034 671   SEND_VAR_EX/66            ?96       16?34                ?2                  	;0
	1035 671   DO_FCALL_BY_NAME/131      $489=     ?0                   ?0                  	;0
	1036 671   ASSIGN/38                 ?426      16?45                $489                	;0
	1037 674   INIT_FCALL_BY_NAME/59     ?0        ?0                   621:'count'         	;1
	1038 674   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	1039 674   DO_FCALL_BY_NAME/131      $491=     ?0                   ?0                  	;0
	1040 674   ASSIGN/38                 ?428      16?43                $491                	;0
	1041 676   JMPZ/43                   ?0        16?43                ?1135               	;0	>>1135
	1042 677   INIT_FCALL_BY_NAME/59     ?0        ?0                   623:'putenv'        	;1
	1043 677   SEND_VAL_EX/116           ?80       625:'NO_INTERACTION=1' ?1                  	;0
	1044 677   DO_FCALL_BY_NAME/131      ?429      ?0                   ?0                  	;0
	1045 678   INIT_FCALL_BY_NAME/59     ?0        ?0                   626:'verify_config' 	;0
	1046 678   DO_FCALL_BY_NAME/131      ?430      ?0                   ?0                  	;0
	1047 679   INIT_FCALL_BY_NAME/59     ?0        ?0                   628:'write_information'	;0
	1048 679   DO_FCALL_BY_NAME/131      ?431      ?0                   ?0                  	;0
	1049 680   INIT_FCALL_BY_NAME/59     ?0        ?0                   630:'usort'         	;2
	1050 680   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	1051 680   SEND_VAL_EX/116           ?96       632:'test_sort'      ?2                  	;0
	1052 680   DO_FCALL_BY_NAME/131      ?432      ?0                   ?0                  	;0
	1053 681   INIT_FCALL_BY_NAME/59     ?0        ?0                   633:'time'          	;0
	1054 681   DO_FCALL_BY_NAME/131      $497=     ?0                   ?0                  	;0
	1055 681   ASSIGN/38                 ?434      16?38                $497                	;0
	1056 683   BOOL_NOT/13               #499=     16?16                ?0                  	;0
	1057 683   JMPZ/43                   ?0        #499                 ?1060               	;0	>>1060
	1058 684   ECHO/40                   ?0        635:'Running selected tests.
' ?0                  	;0
	1059 684   JMP/42                    ?0        ?1063                ?0                  	;0	>>1063
	1060 686   INIT_FCALL_BY_NAME/59     ?0        ?0                   636:'show_start'    	;1	<<1057
	1061 686   SEND_VAR_EX/66            ?80       16?38                ?1                  	;0
	1062 686   DO_FCALL_BY_NAME/131      ?436      ?0                   ?0                  	;0
	1063 689   ASSIGN/38                 ?437      16?46                638:0               	;0	<<1059
	1064 690   INIT_FCALL_BY_NAME/59     ?0        ?0                   639:'run_all_tests' 	;2
	1065 690   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	1066 690   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
	1067 690   DO_FCALL_BY_NAME/131      ?438      ?0                   ?0                  	;0
	1068 691   INIT_FCALL_BY_NAME/59     ?0        ?0                   641:'time'          	;0
	1069 691   DO_FCALL_BY_NAME/131      $503=     ?0                   ?0                  	;0
	1070 691   ASSIGN/38                 ?440      16?9                 $503                	;0
	1071 693   JMPZ/43                   ?0        16?16                ?1075               	;0	>>1075
	1072 694   INIT_FCALL_BY_NAME/59     ?0        ?0                   643:'show_end'      	;1
	1073 694   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	1074 694   DO_FCALL_BY_NAME/131      ?441      ?0                   ?0                  	;0
	1075 697   JMPZ/43                   ?0        16?14                ?1079               	;0	>>1079	<<1071
	1076 698   INIT_FCALL_BY_NAME/59     ?0        ?0                   645:'fclose'        	;1
	1077 698   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	1078 698   DO_FCALL_BY_NAME/131      ?442      ?0                   ?0                  	;0
	1079 701   JMPZ/43                   ?0        16?36                ?1083               	;0	>>1083	<<1075
	1080 702   INIT_FCALL_BY_NAME/59     ?0        ?0                   647:'fclose'        	;1
	1081 702   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	1082 702   DO_FCALL_BY_NAME/131      ?443      ?0                   ?0                  	;0
	1083 705   INIT_FCALL_BY_NAME/59     ?0        ?0                   649:'compute_summary'	;0	<<1079
	1084 705   DO_FCALL_BY_NAME/131      ?444      ?0                   ?0                  	;0
	1085 706   JMPZ/43                   ?0        16?16                ?1095               	;0	>>1095
	1086 707   INIT_FCALL_BY_NAME/59     ?0        ?0                   651:'fwrite'        	;2
	1087 707   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	1088 707   INIT_FCALL_BY_NAME/59     ?0        ?0                   653:'get_summary'   	;2
	1089 707   SEND_VAL_EX/116           ?80       655:false            ?1                  	;0
	1090 707   SEND_VAL_EX/116           ?96       656:true             ?2                  	;0
	1091 707   DO_FCALL_BY_NAME/131      $509=     ?0                   ?0                  	;0
	1092 707   CONCAT/8                  #510=     657:'<hr/>
'         $509                	;0
	1093 707   SEND_VAL_EX/116           ?96       #510                 ?2                  	;0
	1094 707   DO_FCALL_BY_NAME/131      ?447      ?0                   ?0                  	;0
	1095 709   ECHO/40                   ?0        658:'=====================================================================' ?0                  	;0	<<1085
	1096 710   INIT_FCALL_BY_NAME/59     ?0        ?0                   659:'get_summary'   	;2
	1097 710   SEND_VAL_EX/116           ?80       661:false            ?1                  	;0
	1098 710   SEND_VAL_EX/116           ?96       662:false            ?2                  	;0
	1099 710   DO_FCALL_BY_NAME/131      $512=     ?0                   ?0                  	;0
	1100 710   ECHO/40                   ?0        $512                 ?0                  	;0
	1101 712   JMPZ/43                   ?0        16?16                ?1105               	;0	>>1105
	1102 713   INIT_FCALL_BY_NAME/59     ?0        ?0                   663:'fclose'        	;1
	1103 713   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	1104 713   DO_FCALL_BY_NAME/131      ?449      ?0                   ?0                  	;0
	1105 716   IS_NOT_EQUAL/18           #514=     16?26                665:''              	;0	<<1101
	1106 716   JMPZ_EX/46                #514=     #514                 ?1108               	;0	>>1108
	1107 716   BOOL/52                   #514=     16?20                ?0                  	;0
	1108 716   JMPZ/43                   ?0        #514                 ?1111               	;0	>>1111	<<1106
	1109 717   INIT_FCALL_BY_NAME/59     ?0        ?0                   666:'save_or_mail_results'	;0
	1110 717   DO_FCALL_BY_NAME/131      ?451      ?0                   ?0                  	;0
	1111 720   INIT_FCALL_BY_NAME/59     ?0        ?0                   668:'junit_save_xml'	;0	<<1108
	1112 720   DO_FCALL_BY_NAME/131      ?452      ?0                   ?0                  	;0
	1113 722   INIT_FCALL_BY_NAME/59     ?0        ?0                   670:'getenv'        	;1
	1114 722   SEND_VAL_EX/116           ?80       672:'REPORT_EXIT_STATUS' ?1                  	;0
	1115 722   DO_FCALL_BY_NAME/131      $517=     ?0                   ?0                  	;0
	1116 722   IS_NOT_IDENTICAL/16       #518=     $517                 673:'0'             	;0
	1117 722   JMPZ_EX/46                #518=     #518                 ?1123               	;0	>>1123
	1118 723   INIT_FCALL_BY_NAME/59     ?0        ?0                   674:'getenv'        	;1
	1119 723   SEND_VAL_EX/116           ?80       676:'REPORT_EXIT_STATUS' ?1                  	;0
	1120 723   DO_FCALL_BY_NAME/131      $519=     ?0                   ?0                  	;0
	1121 723   IS_NOT_IDENTICAL/16       #520=     $519                 677:'no'            	;0
	1122 723   BOOL/52                   #518=     #520                 ?0                  	;0
	1123 723   JMPZ_EX/46                #518=     #518                 ?1132               	;0	>>1132	<<1117
	1124 723   FETCH_DIM_R/81            $521=     16?52                678:'FAILED'        	;0
	1125 723   JMPNZ_EX/47               #522=     $521                 ?1128               	;0	>>1128
	1126 723   FETCH_DIM_R/81            $523=     16?52                679:'BORKED'        	;0
	1127 723   BOOL/52                   #522=     $523                 ?0                  	;0
	1128 723   JMPNZ_EX/47               #522=     #522                 ?1131               	;0	>>1131	<<1125
	1129 723   FETCH_DIM_R/81            $524=     16?52                680:'LEAKED'        	;0
	1130 723   BOOL/52                   #522=     $524                 ?0                  	;0
	1131 723   BOOL/52                   #518=     #522                 ?0                  	;0	<<1128
	1132 723   JMPZ/43                   ?0        #518                 ?1134               	;0	>>1134	<<1123
	1133 724   EXIT/79                   ?0        681:1                ?0                  	;0
	1134 727   RETURN/62                 ?0        682:NULL             ?0                  	;0	<<1132
	1135 730   INIT_FCALL_BY_NAME/59     ?0        ?0                   683:'verify_config' 	;0	<<1041
	1136 730   DO_FCALL_BY_NAME/131      ?461      ?0                   ?0                  	;0
	1137 731   INIT_FCALL_BY_NAME/59     ?0        ?0                   685:'write_information'	;0
	1138 731   DO_FCALL_BY_NAME/131      ?462      ?0                   ?0                  	;0
	1139 734   ASSIGN/38                 ?463      16?45                687:array (
)       	;0
	1140 735   INIT_FCALL_BY_NAME/59     ?0        ?0                   688:'count'         	;1
	1141 735   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
	1142 735   DO_FCALL_BY_NAME/131      $528=     ?0                   ?0                  	;0
	1143 735   ASSIGN/38                 ?465      16?12                $528                	;0
	1144 736   ASSIGN/38                 ?466      16?11                690:0               	;0
	1145 737   ASSIGN/38                 ?467      16?17                691:0               	;0
	1146 738   INIT_FCALL_BY_NAME/59     ?0        ?0                   692:'sort'          	;1
	1147 738   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
	1148 738   DO_FCALL_BY_NAME/131      ?468      ?0                   ?0                  	;0
	1149 739   ASSIGN/38                 ?469      16?44                694:array (
)       	;0
	1150 740   ASSIGN/38                 ?470      16?25                695:array (
  0 => 'Zend',
  1 => 'tests',
  2 => 'ext',
  3 => 'sapi',
)	;0
	1151 742   FE_RESET_R/77             $535=     16?25                ?1160               	;0
	1152 742   FE_FETCH_R/78             ?0        $535                 16?61               	;1160	>>1160	<<1159
	1153 743   INIT_FCALL_BY_NAME/59     ?0        ?0                   696:'is_dir'        	;1
	1154 743   SEND_VAR_EX/66            ?80       16?61                ?1                  	;0
	1155 743   DO_FCALL_BY_NAME/131      $536=     ?0                   ?0                  	;0
	1156 743   JMPZ/43                   ?0        $536                 ?1159               	;0	>>1159
	1157 744   ASSIGN_DIM/147            ?473      16?44                ?1664793728         	;0
	1158 744   OP_DATA/137               ?0        16?61                ?0                  	;0
	1159 744   JMP/42                    ?0        ?1152                ?0                  	;0	>>1152	<<1156
	1160 744   FE_FREE/127               ?0        $535                 ?0                  	;0	<<1151
	1161 749   FE_RESET_R/77             $538=     16?13                ?1170               	;0
	1162 749   FE_FETCH_R/78             #539=     $538                 16?62               	;1170	>>1170	<<1169
	1163 749   ASSIGN/38                 ?476      16?63                #539                	;0
	1164 750   INIT_FCALL_BY_NAME/59     ?0        ?0                   698:'strtolower'    	;1
	1165 750   SEND_VAR_EX/66            ?80       16?62                ?1                  	;0
	1166 750   DO_FCALL_BY_NAME/131      $542=     ?0                   ?0                  	;0
	1167 750   ASSIGN_DIM/147            ?477      16?13                16?63               	;0
	1168 750   OP_DATA/137               ?0        $542                 ?0                  	;0
	1169 750   JMP/42                    ?0        ?1162                ?0                  	;0	>>1162
	1170 750   FE_FREE/127               ?0        $538                 ?0                  	;0	<<1161
	1171 753   FE_RESET_R/77             $543=     16?44                ?1183               	;0
	1172 753   FE_FETCH_R/78             ?0        $543                 16?61               	;1183	>>1183	<<1182
	1173 754   INIT_FCALL_BY_NAME/59     ?0        ?0                   700:'find_files'    	;2
	1174 754   FETCH_CONSTANT/99         #544=     ?0                   702:'TEST_PHP_SRCDIR'	;16
	1175 754   NOP/0                     ?0        ?0                   ?0                  	;0
	1176 754   FAST_CONCAT/53            #545=     705:'/'              16?61               	;0
	1177 754   CONCAT/8                  #546=     #544                 #545                	;0
	1178 754   SEND_VAL_EX/116           ?80       #546                 ?1                  	;0
	1179 754   IS_EQUAL/17               #547=     16?61                706:'ext'           	;0
	1180 754   SEND_VAL_EX/116           ?96       #547                 ?2                  	;0
	1181 754   DO_FCALL_BY_NAME/131      ?484      ?0                   ?0                  	;0
	1182 754   JMP/42                    ?0        ?1172                ?0                  	;0	>>1172
	1183 754   FE_FREE/127               ?0        $543                 ?0                  	;0	<<1171
	1184 757   FE_RESET_R/77             $549=     16?50                ?1192               	;0
	1185 757   FE_FETCH_R/78             ?0        $549                 16?61               	;1192	>>1192	<<1191
	1186 758   INIT_FCALL_BY_NAME/59     ?0        ?0                   707:'find_files'    	;2
	1187 758   SEND_VAR_EX/66            ?80       16?61                ?1                  	;0
	1188 758   IS_EQUAL/17               #550=     16?61                709:'ext'           	;0
	1189 758   SEND_VAL_EX/116           ?96       #550                 ?2                  	;0
	1190 758   DO_FCALL_BY_NAME/131      ?487      ?0                   ?0                  	;0
	1191 758   JMP/42                    ?0        ?1185                ?0                  	;0	>>1185
	1192 758   FE_FREE/127               ?0        $549                 ?0                  	;0	<<1184
	1193 761   INIT_FCALL_BY_NAME/59     ?0        ?0                   710:'array_unique'  	;1
	1194 761   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	1195 761   DO_FCALL_BY_NAME/131      $552=     ?0                   ?0                  	;0
	1196 761   ASSIGN/38                 ?489      16?45                $552                	;0
	1197 762   INIT_FCALL_BY_NAME/59     ?0        ?0                   712:'usort'         	;2
	1198 762   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	1199 762   SEND_VAL_EX/116           ?96       714:'test_sort'      ?2                  	;0
	1200 762   DO_FCALL_BY_NAME/131      ?490      ?0                   ?0                  	;0
	1201 764   INIT_FCALL_BY_NAME/59     ?0        ?0                   715:'time'          	;0
	1202 764   DO_FCALL_BY_NAME/131      $555=     ?0                   ?0                  	;0
	1203 764   ASSIGN/38                 ?492      16?38                $555                	;0
	1204 765   INIT_FCALL_BY_NAME/59     ?0        ?0                   717:'show_start'    	;1
	1205 765   SEND_VAR_EX/66            ?80       16?38                ?1                  	;0
	1206 765   DO_FCALL_BY_NAME/131      ?493      ?0                   ?0                  	;0
	1207 767   INIT_FCALL_BY_NAME/59     ?0        ?0                   719:'count'         	;1
	1208 767   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	1209 767   DO_FCALL_BY_NAME/131      $558=     ?0                   ?0                  	;0
	1210 767   ASSIGN/38                 ?495      16?43                $558                	;0
	1211 768   ASSIGN/38                 ?496      16?46                721:0               	;0
	1212 769   INIT_FCALL_BY_NAME/59     ?0        ?0                   722:'run_all_tests' 	;2
	1213 769   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	1214 769   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
	1215 769   DO_FCALL_BY_NAME/131      ?497      ?0                   ?0                  	;0
	1216 770   INIT_FCALL_BY_NAME/59     ?0        ?0                   724:'time'          	;0
	1217 770   DO_FCALL_BY_NAME/131      $562=     ?0                   ?0                  	;0
	1218 770   ASSIGN/38                 ?499      16?9                 $562                	;0
	1219 772   JMPZ/43                   ?0        16?14                ?1223               	;0	>>1223
	1220 773   INIT_FCALL_BY_NAME/59     ?0        ?0                   726:'fclose'        	;1
	1221 773   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	1222 773   DO_FCALL_BY_NAME/131      ?500      ?0                   ?0                  	;0
	1223 776   JMPZ/43                   ?0        16?36                ?1227               	;0	>>1227	<<1219
	1224 777   INIT_FCALL_BY_NAME/59     ?0        ?0                   728:'fclose'        	;1
	1225 777   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	1226 777   DO_FCALL_BY_NAME/131      ?501      ?0                   ?0                  	;0
	1227 782   INIT_FCALL_BY_NAME/59     ?0        ?0                   730:'count'         	;1	<<1223
	1228 782   SEND_VAR_EX/66            ?80       16?48                ?1                  	;0
	1229 782   DO_FCALL_BY_NAME/131      $566=     ?0                   ?0                  	;0
	1230 782   IS_EQUAL/17               #567=     732:0                $566                	;0
	1231 782   JMPZ/43                   ?0        #567                 ?1234               	;0	>>1234
	1232 783   ECHO/40                   ?0        733:'No tests were run.
' ?0                  	;0
	1233 784   RETURN/62                 ?0        734:NULL             ?0                  	;0
	1234 787   INIT_FCALL_BY_NAME/59     ?0        ?0                   735:'compute_summary'	;0	<<1231
	1235 787   DO_FCALL_BY_NAME/131      ?504      ?0                   ?0                  	;0
	1236 789   INIT_FCALL_BY_NAME/59     ?0        ?0                   737:'show_end'      	;1
	1237 789   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	1238 789   DO_FCALL_BY_NAME/131      ?505      ?0                   ?0                  	;0
	1239 790   INIT_FCALL_BY_NAME/59     ?0        ?0                   739:'show_summary'  	;0
	1240 790   DO_FCALL_BY_NAME/131      ?506      ?0                   ?0                  	;0
	1241 792   JMPZ/43                   ?0        16?16                ?1245               	;0	>>1245
	1242 793   INIT_FCALL_BY_NAME/59     ?0        ?0                   741:'fclose'        	;1
	1243 793   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	1244 793   DO_FCALL_BY_NAME/131      ?507      ?0                   ?0                  	;0
	1245 796   INIT_FCALL_BY_NAME/59     ?0        ?0                   743:'save_or_mail_results'	;0	<<1241
	1246 796   DO_FCALL_BY_NAME/131      ?508      ?0                   ?0                  	;0
	1247 798   INIT_FCALL_BY_NAME/59     ?0        ?0                   745:'junit_save_xml'	;0
	1248 798   DO_FCALL_BY_NAME/131      ?509      ?0                   ?0                  	;0
	1249 799   INIT_FCALL_BY_NAME/59     ?0        ?0                   747:'getenv'        	;1
	1250 799   SEND_VAL_EX/116           ?80       749:'REPORT_EXIT_STATUS' ?1                  	;0
	1251 799   DO_FCALL_BY_NAME/131      $574=     ?0                   ?0                  	;0
	1252 799   IS_NOT_IDENTICAL/16       #575=     $574                 750:'0'             	;0
	1253 799   JMPZ_EX/46                #575=     #575                 ?1259               	;0	>>1259
	1254 800   INIT_FCALL_BY_NAME/59     ?0        ?0                   751:'getenv'        	;1
	1255 800   SEND_VAL_EX/116           ?80       753:'REPORT_EXIT_STATUS' ?1                  	;0
	1256 800   DO_FCALL_BY_NAME/131      $576=     ?0                   ?0                  	;0
	1257 800   IS_NOT_IDENTICAL/16       #577=     $576                 754:'no'            	;0
	1258 800   BOOL/52                   #575=     #577                 ?0                  	;0
	1259 800   JMPZ_EX/46                #575=     #575                 ?1265               	;0	>>1265	<<1253
	1260 800   FETCH_DIM_R/81            $578=     16?52                755:'FAILED'        	;0
	1261 800   JMPNZ_EX/47               #579=     $578                 ?1264               	;0	>>1264
	1262 800   FETCH_DIM_R/81            $580=     16?52                756:'LEAKED'        	;0
	1263 800   BOOL/52                   #579=     $580                 ?0                  	;0
	1264 800   BOOL/52                   #575=     #579                 ?0                  	;0	<<1261
	1265 800   JMPZ/43                   ?0        #575                 ?1267               	;0	>>1267	<<1259
	1266 801   EXIT/79                   ?0        757:1                ?0                  	;0
	1267 803   EXIT/79                   ?0        758:0                ?0                  	;0	<<1265
	1268 804   NOP/0                     ?0        759:NULL             ?0                  	;4294967295
	*/
}

function hrtime(bool $as_num)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   807  RECV_INIT/64              16?0=     ?1                   0:false             	;0
	1   809  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'microtime'       	;1
	2   809  SEND_VAL_EX/116           ?80       3:true               ?1                  	;0
	3   809  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	4   809  ASSIGN/38                 ?1        16?1                 $3                  	;0
	5   811  JMPZ/43                   ?0        16?0                 ?8                  	;0	>>8
	6   812  MUL/3                     #5=       16?1                 4:1000000000        	;0
	7   812  RETURN/62                 ?0        #5                   ?0                  	;0
	8   815  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'floor'           	;1	<<5
	9   815  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	10  815  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	11  815  ASSIGN/38                 ?4        16?2                 $6                  	;0
	12  816  INIT_ARRAY/71             #8=       16?2                 7:0                 	;8
	13  816  SUB/2                     #9=       16?1                 16?2                	;0
	14  816  MUL/3                     #10=      #9                   8:1000000000        	;0
	15  816  ADD_ARRAY_ELEMENT/72      #8=       #10                  9:1                 	;0
	16  816  RETURN/62                 ?0        #8                   ?0                  	;0
	17  817  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
	*/
}

function verify_config()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   822  BIND_GLOBAL/168           ?0        16?0                 0:'php'             	;0
	1   824  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
	2   824  JMPNZ_EX/47               #1=       #1                   ?8                  	;0	>>8
	3   824  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_exists'     	;1
	4   824  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	5   824  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	6   824  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	7   824  BOOL/52                   #1=       #3                   ?0                  	;0
	8   824  JMPZ/43                   ?0        #1                   ?12                 	;0	>>12	<<2
	9   825  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'error'           	;1
	10  825  SEND_VAL_EX/116           ?80       5:'environment variable TEST_PHP_EXECUTABLE must be set to specify PHP executable!' ?1                  	;0
	11  825  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
	12  828  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'is_executable'   	;1	<<8
	13  828  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	14  828  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	15  828  BOOL_NOT/13               #6=       $5                   ?0                  	;0
	16  828  JMPZ/43                   ?0        #6                   ?22                 	;0	>>22
	17  829  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'error'           	;1
	18  829  NOP/0                     ?0        ?0                   ?0                  	;0
	19  829  FAST_CONCAT/53            #7=       10:'invalid PHP executable specified by TEST_PHP_EXECUTABLE  = ' 16?0                	;0
	20  829  SEND_VAL_EX/116           ?80       #7                   ?1                  	;0
	21  829  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
	22  831  NOP/0                     ?0        11:NULL              ?0                  	;4294967295	<<16
	*/
}

function write_information()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   835  BIND_GLOBAL/168           ?0        16?0                 0:'php'             	;0
	1   835  BIND_GLOBAL/168           ?0        16?1                 1:'php_cgi'         	;0
	2   835  BIND_GLOBAL/168           ?0        16?2                 2:'phpdbg'          	;0
	3   835  BIND_GLOBAL/168           ?0        16?3                 3:'php_info'        	;0
	4   835  BIND_GLOBAL/168           ?0        16?4                 4:'user_tests'      	;0
	5   835  BIND_GLOBAL/168           ?0        16?5                 5:'ini_overwrites'  	;0
	6   835  BIND_GLOBAL/168           ?0        16?6                 6:'pass_options'    	;0
	7   835  BIND_GLOBAL/168           ?0        16?7                 7:'exts_to_test'    	;0
	8   835  BIND_GLOBAL/168           ?0        16?8                 8:'valgrind'        	;0
	9   835  BIND_GLOBAL/168           ?0        16?9                 9:'no_file_cache'   	;0
	10  838  CONCAT/8                  #20=      10:'bin\\php\\lib\\php\\build' 11:'/run-test-info.php'	;0
	11  838  ASSIGN/38                 ?1        16?10                #20                 	;0
	12  839  BEGIN_SILENCE/57          #22=      ?0                   ?0                  	;0
	13  839  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'unlink'         	;1
	14  839  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	15  839  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
	16  839  END_SILENCE/58            ?0        #22                  ?0                  	;0
	17  840  ASSIGN/38                 ?4        16?3                 14:'<?php echo "
PHP_SAPI    : " , PHP_SAPI , "
PHP_VERSION : " , phpversion() , "
ZEND_VERSION: " , zend_version() , "
PHP_OS      : " , PHP_OS , " - " , php_uname() , "
INI actual  : " , realpath(get_cfg_var("cfg_file_path")) , "
More .INIs  : " , (function_exists(\'php_ini_scanned_files\') ? str_replace("\\n","", php_ini_scanned_files()) : "** not determined **"); ?>'	;0
	18  847  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'save_text'      	;2
	19  847  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	20  847  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	21  847  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
	22  848  ASSIGN/38                 ?6        16?11                17:array (
)        	;0
	23  849  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'settings2array' 	;2
	24  849  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	25  849  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
	26  849  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
	27  850  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'settings2params'	;1
	28  850  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	29  850  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
	30  850  ASSIGN/38                 ?9        16?11                $28                 	;0
	31  851  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'shell_exec'     	;1
	32  851  ROPE_INIT/54              #31=      ?0                   16?0                	;10
	33  851  ROPE_ADD/55               #31=      #31                  24:' '              	;1
	34  851  ROPE_ADD/55               #31=      #31                  16?6                	;2
	35  851  ROPE_ADD/55               #31=      #31                  25:' '              	;3
	36  851  ROPE_ADD/55               #31=      #31                  16?11               	;4
	37  851  ROPE_ADD/55               #31=      #31                  26:' '              	;5
	38  851  ROPE_ADD/55               #31=      #31                  16?9                	;6
	39  851  ROPE_ADD/55               #31=      #31                  27:' "'             	;7
	40  851  ROPE_ADD/55               #31=      #31                  16?10               	;8
	41  851  ROPE_END/56               #30=      #31                  28:'"'              	;9
	42  851  SEND_VAL_EX/116           ?80       #30                  ?1                  	;0
	43  851  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	44  851  ASSIGN/38                 ?17       16?3                 $36                 	;0
	45  852  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'define'         	;2
	46  852  SEND_VAL_EX/116           ?80       31:'TESTED_PHP_VERSION' ?1                  	;0
	47  852  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'shell_exec'     	;1
	48  852  NOP/0                     ?0        ?0                   ?0                  	;0
	49  852  FAST_CONCAT/53            #38=      16?0                 34:' -n -r "echo PHP_VERSION;"'	;0
	50  852  SEND_VAL_EX/116           ?80       #38                  ?1                  	;0
	51  852  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
	52  852  SEND_VAR_NO_REF_EX/50     ?96       $39                  ?2                  	;0
	53  852  DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
	54  854  JMPZ_EX/46                #41=      16?1                 ?57                 	;0	>>57
	55  854  IS_NOT_EQUAL/18           #42=      16?0                 16?1                	;0
	56  854  BOOL/52                   #41=      #42                  ?0                  	;0
	57  854  JMPZ/43                   ?0        #41                  ?81                 	;0	>>81	<<54
	58  855  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'shell_exec'     	;1
	59  855  ROPE_INIT/54              #44=      ?0                   16?1                	;10
	60  855  ROPE_ADD/55               #44=      #44                  37:' '              	;1
	61  855  ROPE_ADD/55               #44=      #44                  16?6                	;2
	62  855  ROPE_ADD/55               #44=      #44                  38:' '              	;3
	63  855  ROPE_ADD/55               #44=      #44                  16?11               	;4
	64  855  ROPE_ADD/55               #44=      #44                  39:' '              	;5
	65  855  ROPE_ADD/55               #44=      #44                  16?9                	;6
	66  855  ROPE_ADD/55               #44=      #44                  40:' -q "'          	;7
	67  855  ROPE_ADD/55               #44=      #44                  16?10               	;8
	68  855  ROPE_END/56               #43=      #44                  41:'"'              	;9
	69  855  SEND_VAL_EX/116           ?80       #43                  ?1                  	;0
	70  855  DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
	71  855  ASSIGN/38                 ?30       16?12                $49                 	;0
	72  856  ASSIGN/38                 ?31       16?13                42:'
---------------------------------------------------------------------'	;0
	73  857  ROPE_INIT/54              #53=      ?0                   16?13               	;6
	74  857  ROPE_ADD/55               #53=      #53                  43:'
PHP         : '	;1
	75  857  ROPE_ADD/55               #53=      #53                  16?1                	;2
	76  857  ROPE_ADD/55               #53=      #53                  44:' '              	;3
	77  857  ROPE_ADD/55               #53=      #53                  16?12               	;4
	78  857  ROPE_END/56               #52=      #53                  16?13               	;5
	79  857  ASSIGN/38                 ?36       16?14                #52                 	;0
	80  857  JMP/42                    ?0        ?82                  ?0                  	;0	>>82
	81  859  ASSIGN/38                 ?37       16?14                45:''               	;0	<<57
	82  862  JMPZ/43                   ?0        16?2                 ?106                	;0	>>106	<<80
	83  863  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'shell_exec'     	;1
	84  863  ROPE_INIT/54              #59=      ?0                   16?2                	;10
	85  863  ROPE_ADD/55               #59=      #59                  48:' '              	;1
	86  863  ROPE_ADD/55               #59=      #59                  16?6                	;2
	87  863  ROPE_ADD/55               #59=      #59                  49:' '              	;3
	88  863  ROPE_ADD/55               #59=      #59                  16?11               	;4
	89  863  ROPE_ADD/55               #59=      #59                  50:' '              	;5
	90  863  ROPE_ADD/55               #59=      #59                  16?9                	;6
	91  863  ROPE_ADD/55               #59=      #59                  51:' -qrr "'        	;7
	92  863  ROPE_ADD/55               #59=      #59                  16?10               	;8
	93  863  ROPE_END/56               #58=      #59                  52:'"'              	;9
	94  863  SEND_VAL_EX/116           ?80       #58                  ?1                  	;0
	95  863  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
	96  863  ASSIGN/38                 ?45       16?15                $64                 	;0
	97  864  ASSIGN/38                 ?46       16?13                53:'
---------------------------------------------------------------------'	;0
	98  865  ROPE_INIT/54              #68=      ?0                   16?13               	;6
	99  865  ROPE_ADD/55               #68=      #68                  54:'
PHP         : '	;1
	100 865  ROPE_ADD/55               #68=      #68                  16?2                	;2
	101 865  ROPE_ADD/55               #68=      #68                  55:' '              	;3
	102 865  ROPE_ADD/55               #68=      #68                  16?15               	;4
	103 865  ROPE_END/56               #67=      #68                  16?13               	;5
	104 865  ASSIGN/38                 ?51       16?15                #67                 	;0
	105 865  JMP/42                    ?0        ?107                 ?0                  	;0	>>107
	106 867  ASSIGN/38                 ?52       16?15                56:''               	;0	<<82
	107 870  INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'function_exists'	;1	<<105
	108 870  SEND_VAL_EX/116           ?80       59:'opcache_invalidate' ?1                  	;0
	109 870  DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
	110 870  JMPZ/43                   ?0        $73                  ?115                	;0	>>115
	111 871  INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'opcache_invalidate'	;2
	112 871  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	113 871  SEND_VAL_EX/116           ?96       62:true              ?2                  	;0
	114 871  DO_FCALL_BY_NAME/131      ?54       ?0                   ?0                  	;0
	115 873  BEGIN_SILENCE/57          #75=      ?0                   ?0                  	;0	<<110
	116 873  INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'unlink'         	;1
	117 873  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	118 873  DO_FCALL_BY_NAME/131      ?56       ?0                   ?0                  	;0
	119 873  END_SILENCE/58            ?0        #75                  ?0                  	;0
	120 876  INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'save_text'      	;2
	121 876  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	122 877  SEND_VAL_EX/116           ?96       67:'<?php echo str_replace("Zend OPcache", "opcache", implode(",", get_loaded_extensions())); ?>' ?2                  	;0
	123 877  DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
	124 878  INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'explode'        	;2
	125 878  SEND_VAL_EX/116           ?80       70:','               ?1                  	;0
	126 878  INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'shell_exec'     	;1
	127 878  ROPE_INIT/54              #79=      ?0                   16?0                	;10
	128 878  ROPE_ADD/55               #79=      #79                  73:' '              	;1
	129 878  ROPE_ADD/55               #79=      #79                  16?6                	;2
	130 878  ROPE_ADD/55               #79=      #79                  74:' '              	;3
	131 878  ROPE_ADD/55               #79=      #79                  16?11               	;4
	132 878  ROPE_ADD/55               #79=      #79                  75:' '              	;5
	133 878  ROPE_ADD/55               #79=      #79                  16?9                	;6
	134 878  ROPE_ADD/55               #79=      #79                  76:' "'             	;7
	135 878  ROPE_ADD/55               #79=      #79                  16?10               	;8
	136 878  ROPE_END/56               #78=      #79                  77:'"'              	;9
	137 878  SEND_VAL_EX/116           ?80       #78                  ?1                  	;0
	138 878  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
	139 878  SEND_VAR_NO_REF_EX/50     ?96       $84                  ?2                  	;0
	140 878  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
	141 878  ASSIGN/38                 ?66       16?7                 $85                 	;0
	142 881  ASSIGN/38                 ?67       16?16                78:array (
  'session' => 
  array (
    0 => 'session.auto_start=0',
  ),
  'tidy' => 
  array (
    0 => 'tidy.clean_output=0',
  ),
  'zlib' => 
  array (
    0 => 'zlib.output_compression=Off',
  ),
  'xdebug' => 
  array (
    0 => 'xdebug.default_enable=0',
    1 => 'xdebug.mode=off',
  ),
  'mbstring' => 
  array (
    0 => 'mbstring.func_overload=0',
  ),
)	;0
	143 888  FE_RESET_R/77             $88=      16?16                ?157                	;0
	144 888  FE_FETCH_R/78             #89=      $88                  16?17               	;157	>>157	<<156
	145 888  ASSIGN/38                 ?70       16?18                #89                 	;0
	146 889  INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'in_array'       	;2
	147 889  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
	148 889  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	149 889  DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
	150 889  JMPZ/43                   ?0        $91                  ?156                	;0	>>156
	151 890  INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'array_merge'    	;2
	152 890  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	153 890  SEND_VAR_EX/66            ?96       16?17                ?2                  	;0
	154 890  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	155 890  ASSIGN/38                 ?73       16?5                 $92                 	;0
	156 890  JMP/42                    ?0        ?144                 ?0                  	;0	>>144	<<150
	157 890  FE_FREE/127               ?0        $88                  ?0                  	;0	<<143
	158 894  INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'function_exists'	;1
	159 894  SEND_VAL_EX/116           ?80       85:'opcache_invalidate' ?1                  	;0
	160 894  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
	161 894  JMPZ/43                   ?0        $94                  ?166                	;0	>>166
	162 895  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'opcache_invalidate'	;2
	163 895  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	164 895  SEND_VAL_EX/116           ?96       88:true              ?2                  	;0
	165 895  DO_FCALL_BY_NAME/131      ?75       ?0                   ?0                  	;0
	166 897  BEGIN_SILENCE/57          #96=      ?0                   ?0                  	;0	<<161
	167 897  INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'unlink'         	;1
	168 897  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	169 897  DO_FCALL_BY_NAME/131      ?77       ?0                   ?0                  	;0
	170 897  END_SILENCE/58            ?0        #96                  ?0                  	;0
	171 902  ROPE_INIT/54              #99=      ?0                   91:'
=====================================================================
PHP         : '	;9
	172 902  ROPE_ADD/55               #99=      #99                  16?0                	;1
	173 902  ROPE_ADD/55               #99=      #99                  92:' '              	;2
	174 902  ROPE_ADD/55               #99=      #99                  16?3                	;3
	175 902  ROPE_ADD/55               #99=      #99                  93:' '              	;4
	176 902  ROPE_ADD/55               #99=      #99                  16?14               	;5
	177 902  ROPE_ADD/55               #99=      #99                  94:' '              	;6
	178 902  ROPE_ADD/55               #99=      #99                  16?15               	;7
	179 902  ROPE_END/56               #98=      #99                  95:'
CWD         : '	;8
	180 903  FETCH_CONSTANT/99         #104=     ?0                   96:'TEST_PHP_SRCDIR'	;16
	181 903  CONCAT/8                  #105=     #98                  #104                	;0
	182 903  CONCAT/8                  #106=     #105                 99:'
Extra dirs  : '	;0
	183 903  ECHO/40                   ?0        #106                 ?0                  	;0
	184 905  FE_RESET_R/77             $107=     16?4                 ?190                	;0
	185 905  FE_FETCH_R/78             ?0        $107                 16?19               	;190	>>190	<<189
	186 906  NOP/0                     ?0        ?0                   ?0                  	;0
	187 906  FAST_CONCAT/53            #108=     16?19                100:'
			  '        	;0
	188 906  ECHO/40                   ?0        #108                 ?0                  	;0
	189 906  JMP/42                    ?0        ?185                 ?0                  	;0	>>185
	190 906  FE_FREE/127               ?0        $107                 ?0                  	;0	<<184
	191 909  JMPZ/43                   ?0        16?8                 ?196                	;0	>>196
	192 909  INIT_METHOD_CALL/112      ?0        16?8                 101:'getHeader'     	;0
	193 909  DO_FCALL/60               $109=     ?0                   ?0                  	;0
	194 909  QM_ASSIGN/22              #110=     $109                 ?0                  	;0
	195 909  JMP/42                    ?0        ?197                 ?0                  	;0	>>197
	196 909  QM_ASSIGN/22              #110=     103:'Not used'       ?0                  	;0	<<191
	197 909  CONCAT/8                  #111=     104:'
VALGRIND    : ' #110                	;0	<<195
	198 909  CONCAT/8                  #112=     #111                 105:'
=====================================================================
'	;0
	199 909  ECHO/40                   ?0        #112                 ?0                  	;0
	200 912  NOP/0                     ?0        106:NULL             ?0                  	;4294967295
	*/
}

function save_or_mail_results()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    916   BIND_GLOBAL/168           ?0        16?0                 0:'sum_results'     	;0
	1    916   BIND_GLOBAL/168           ?0        16?1                 1:'just_save_results'	;0
	2    916   BIND_GLOBAL/168           ?0        16?2                 2:'failed_test_summary'	;0
	3    917   BIND_GLOBAL/168           ?0        16?3                 3:'PHP_FAILED_TESTS'	;0
	4    917   BIND_GLOBAL/168           ?0        16?4                 4:'php'             	;0
	5    917   BIND_GLOBAL/168           ?0        16?5                 5:'output_file'     	;0
	6    920   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'getenv'          	;1
	7    920   SEND_VAL_EX/116           ?80       8:'NO_INTERACTION'   ?1                  	;0
	8    920   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
	9    920   BOOL_NOT/13               #23=      $22                  ?0                  	;0
	10   920   JMPZ_EX/46                #23=      #23                  ?14                 	;0	>>14
	11   920   FETCH_CONSTANT/99         #24=      ?0                   9:'TRAVIS_CI'       	;16
	12   920   BOOL_NOT/13               #25=      #24                  ?0                  	;0
	13   920   BOOL/52                   #23=      #25                  ?0                  	;0
	14   920   JMPZ/43                   ?0        #23                  ?56                 	;0	>>56	<<10
	15   921   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'fopen'          	;2
	16   921   SEND_VAL_EX/116           ?80       14:'php://stdin'     ?1                  	;0
	17   921   SEND_VAL_EX/116           ?96       15:'r+'              ?2                  	;0
	18   921   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	19   921   ASSIGN/38                 ?5        16?6                 $26                 	;0
	20   922   FETCH_DIM_R/81            $28=      16?0                 16:'FAILED'         	;0
	21   922   JMPNZ_EX/47               #29=      $28                  ?24                 	;0	>>24
	22   922   FETCH_DIM_R/81            $30=      16?0                 17:'BORKED'         	;0
	23   922   BOOL/52                   #29=      $30                  ?0                  	;0
	24   922   JMPNZ_EX/47               #29=      #29                  ?27                 	;0	>>27	<<21
	25   922   FETCH_DIM_R/81            $31=      16?0                 18:'WARNED'         	;0
	26   922   BOOL/52                   #29=      $31                  ?0                  	;0
	27   922   JMPNZ_EX/47               #29=      #29                  ?30                 	;0	>>30	<<24
	28   922   FETCH_DIM_R/81            $32=      16?0                 19:'LEAKED'         	;0
	29   922   BOOL/52                   #29=      $32                  ?0                  	;0
	30   922   JMPZ/43                   ?0        #29                  ?32                 	;0	>>32	<<27
	31   923   ECHO/40                   ?0        20:'
You may have found a problem in PHP.' ?0                  	;0
	32   925   ECHO/40                   ?0        21:'
This report can be automatically sent to the PHP QA team at
' ?0                  	;0	<<30
	33   926   FETCH_CONSTANT/99         #33=      ?0                   22:'QA_REPORTS_PAGE'	;16
	34   926   CONCAT/8                  #34=      #33                  25:' and http://news.php.net/php.qa.reports
'	;0
	35   926   ECHO/40                   ?0        #34                  ?0                  	;0
	36   927   ECHO/40                   ?0        26:'This gives us a better understanding of PHP\'s behavior.
' ?0                  	;0
	37   928   ECHO/40                   ?0        27:'If you don\'t want to send the report immediately you can choose
' ?0                  	;0
	38   929   FETCH_CONSTANT/99         #35=      ?0                   28:'PHP_QA_EMAIL'   	;16
	39   929   CONCAT/8                  #36=      31:'option "s" to save it.	You can then email it to ' #35                 	;0
	40   929   CONCAT/8                  #37=      #36                  32:' later.
'       	;0
	41   929   ECHO/40                   ?0        #37                  ?0                  	;0
	42   930   ECHO/40                   ?0        33:'Do you want to send this report now? [Yns]: ' ?0                  	;0
	43   931   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'flush'          	;0
	44   931   DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
	45   933   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'fgets'          	;2
	46   933   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	47   933   SEND_VAL_EX/116           ?96       38:10                ?2                  	;0
	48   933   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
	49   933   ASSIGN/38                 ?18       16?7                 $39                 	;0
	50   934   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'strtolower'     	;1
	51   934   FETCH_DIM_FUNC_ARG/93     $41=      16?7                 41:0                	;1
	52   934   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
	53   934   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
	54   934   IS_EQUAL/17               #43=      $42                  42:'s'              	;0
	55   934   ASSIGN/38                 ?22       16?1                 #43                 	;0
	56   937   JMPNZ_EX/47               #45=      16?1                 ?62                 	;0	>>62	<<14
	57   937   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'getenv'         	;1
	58   937   SEND_VAL_EX/116           ?80       45:'NO_INTERACTION'  ?1                  	;0
	59   937   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
	60   937   BOOL_NOT/13               #47=      $46                  ?0                  	;0
	61   937   BOOL/52                   #45=      #47                  ?0                  	;0
	62   937   JMPNZ_EX/47               #45=      #45                  ?65                 	;0	>>65	<<56
	63   937   FETCH_CONSTANT/99         #48=      ?0                   46:'TRAVIS_CI'      	;16
	64   937   BOOL/52                   #45=      #48                  ?0                  	;0
	65   937   JMPZ/43                   ?0        #45                  ?369                	;0	>>369	<<62
	66   938   JMPNZ_EX/47               #49=      16?1                 ?69                 	;0	>>69
	67   938   FETCH_CONSTANT/99         #50=      ?0                   49:'TRAVIS_CI'      	;16
	68   938   BOOL/52                   #49=      #50                  ?0                  	;0
	69   938   JMPNZ_EX/47               #49=      #49                  ?78                 	;0	>>78	<<66
	70   938   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'strlen'         	;1
	71   938   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'trim'           	;1
	72   938   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	73   938   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
	74   938   SEND_VAR_NO_REF_EX/50     ?80       $51                  ?1                  	;0
	75   938   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
	76   938   IS_EQUAL/17               #53=      $52                  56:0                	;0
	77   938   BOOL/52                   #49=      #53                  ?0                  	;0
	78   938   JMPNZ_EX/47               #49=      #49                  ?85                 	;0	>>85	<<69
	79   938   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'strtolower'     	;1
	80   938   FETCH_DIM_FUNC_ARG/93     $54=      16?7                 59:0                	;1
	81   938   SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
	82   938   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
	83   938   IS_EQUAL/17               #56=      $55                  60:'y'              	;0
	84   938   BOOL/52                   #49=      #56                  ?0                  	;0
	85   938   JMPZ/43                   ?0        #49                  ?369                	;0	>>369	<<78
	86   945   JMPZ/43                   ?0        16?1                 ?88                 	;0	>>88
	87   946   ASSIGN/38                 ?35       16?7                 61:'s'              	;0
	88   950   FETCH_CONSTANT/99         #58=      ?0                   62:'TRAVIS_CI'      	;16	<<86
	89   950   JMPZ/43                   ?0        #58                  ?92                 	;0	>>92
	90   951   ASSIGN/38                 ?37       16?8                 65:'travis at php dot net'	;0
	91   951   JMP/42                    ?0        ?130                 ?0                  	;0	>>130
	92   952   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'strncasecmp'    	;3	<<89
	93   952   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	94   952   SEND_VAL_EX/116           ?96       68:'y'               ?2                  	;0
	95   952   SEND_VAL_EX/116           ?112      69:1                 ?3                  	;0
	96   952   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
	97   952   BOOL_NOT/13               #61=      $60                  ?0                  	;0
	98   952   JMPNZ_EX/47               #61=      #61                  ?107                	;0	>>107
	99   952   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'strlen'         	;1
	100  952   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'trim'           	;1
	101  952   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	102  952   DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
	103  952   SEND_VAR_NO_REF_EX/50     ?80       $62                  ?1                  	;0
	104  952   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
	105  952   IS_EQUAL/17               #64=      $63                  74:0                	;0
	106  952   BOOL/52                   #61=      #64                  ?0                  	;0
	107  952   JMPZ/43                   ?0        #61                  ?130                	;0	>>130	<<98
	108  953   ECHO/40                   ?0        75:'
Please enter your email address.
(Your address will be mangled so that it will not go out on any
mailinglist in plain text): ' ?0                  	;0
	109  954   INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'flush'          	;0
	110  954   DO_FCALL_BY_NAME/131      ?43       ?0                   ?0                  	;0
	111  955   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'trim'           	;1
	112  955   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'fgets'          	;2
	113  955   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	114  955   SEND_VAL_EX/116           ?96       82:1024              ?2                  	;0
	115  955   DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
	116  955   SEND_VAR_NO_REF_EX/50     ?80       $66                  ?1                  	;0
	117  955   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
	118  955   ASSIGN/38                 ?46       16?8                 $67                 	;0
	119  956   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'str_replace'    	;3
	120  956   SEND_VAL_EX/116           ?80       85:'@'               ?1                  	;0
	121  956   SEND_VAL_EX/116           ?96       86:' at '            ?2                  	;0
	122  956   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'str_replace'    	;3
	123  956   SEND_VAL_EX/116           ?80       89:'.'               ?1                  	;0
	124  956   SEND_VAL_EX/116           ?96       90:' dot '           ?2                  	;0
	125  956   SEND_VAR_EX/66            ?112      16?8                 ?3                  	;0
	126  956   DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
	127  956   SEND_VAR_NO_REF_EX/50     ?112      $69                  ?3                  	;0
	128  956   DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
	129  956   ASSIGN/38                 ?49       16?8                 $70                 	;0
	130  959   ASSIGN/38                 ?50       16?9                 91:''               	;0	<<91,107
	131  960   INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'str_repeat'     	;2
	132  960   SEND_VAL_EX/116           ?80       94:'='               ?1                  	;0
	133  960   SEND_VAL_EX/116           ?96       95:80                ?2                  	;0
	134  960   DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
	135  960   CONCAT/8                  #74=      96:'
'               $73                 	;0
	136  960   CONCAT/8                  #75=      #74                  97:'
'              	;0
	137  960   ASSIGN/38                 ?54       16?10                #75                 	;0
	138  961   CONCAT/8                  #77=      16?2                 98:'
'              	;0
	139  961   ASSIGN_CONCAT/30          ?56       16?9                 #77                 	;0
	140  962   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'get_summary'    	;2
	141  962   SEND_VAL_EX/116           ?80       101:true             ?1                  	;0
	142  962   SEND_VAL_EX/116           ?96       102:false            ?2                  	;0
	143  962   DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
	144  962   CONCAT/8                  #80=      $79                  103:'
'             	;0
	145  962   ASSIGN_CONCAT/30          ?59       16?9                 #80                 	;0
	146  964   FETCH_DIM_R/81            $82=      16?0                 104:'FAILED'        	;0
	147  964   JMPZ/43                   ?0        $82                  ?184                	;0	>>184
	148  965   FETCH_DIM_R/81            $83=      16?3                 105:'FAILED'        	;0
	149  965   FE_RESET_R/77             $84=      $83                  ?181                	;0
	150  965   FE_FETCH_R/78             ?0        $84                  16?11               	;181	>>181	<<180
	151  966   FETCH_DIM_R/81            $85=      16?11                106:'name'          	;0
	152  966   CONCAT/8                  #86=      16?10                $85                 	;0
	153  966   FETCH_DIM_R/81            $87=      16?11                107:'info'          	;0
	154  966   CONCAT/8                  #88=      #86                  $87                 	;0
	155  966   ASSIGN_CONCAT/30          ?67       16?9                 #88                 	;0
	156  967   INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'file_get_contents'	;2
	157  967   INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'realpath'      	;1
	158  967   FETCH_DIM_FUNC_ARG/93     $90=      16?11                112:'output'        	;1
	159  967   SEND_VAR_EX/66            ?80       $90                  ?1                  	;0
	160  967   DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
	161  967   SEND_VAR_NO_REF_EX/50     ?80       $91                  ?1                  	;0
	162  967   FETCH_CONSTANT/99         #92=      ?0                   113:'FILE_BINARY'   	;16
	163  967   SEND_VAL_EX/116           ?96       #92                  ?2                  	;0
	164  967   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
	165  967   CONCAT/8                  #94=      16?10                $93                 	;0
	166  967   ASSIGN_CONCAT/30          ?73       16?9                 #94                 	;0
	167  968   INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'file_get_contents'	;2
	168  968   INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'realpath'      	;1
	169  968   FETCH_DIM_FUNC_ARG/93     $96=      16?11                120:'diff'          	;1
	170  968   SEND_VAR_EX/66            ?80       $96                  ?1                  	;0
	171  968   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
	172  968   SEND_VAR_NO_REF_EX/50     ?80       $97                  ?1                  	;0
	173  968   FETCH_CONSTANT/99         #98=      ?0                   121:'FILE_BINARY'   	;16
	174  968   SEND_VAL_EX/116           ?96       #98                  ?2                  	;0
	175  968   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
	176  968   CONCAT/8                  #100=     16?10                $99                 	;0
	177  968   ASSIGN_CONCAT/30          ?79       16?9                 #100                	;0
	178  969   CONCAT/8                  #102=     16?10                124:'

'            	;0
	179  969   ASSIGN_CONCAT/30          ?81       16?9                 #102                	;0
	180  969   JMP/42                    ?0        ?150                 ?0                  	;0	>>150
	181  969   FE_FREE/127               ?0        $84                  ?0                  	;0	<<149
	182  971   ASSIGN/38                 ?82       16?12                125:'failed'        	;0
	183  971   JMP/42                    ?0        ?185                 ?0                  	;0	>>185
	184  973   ASSIGN/38                 ?83       16?12                126:'success'       	;0	<<147
	185  976   CONCAT/8                  #106=     127:'
'              16?10               	;0	<<183
	186  976   CONCAT/8                  #107=     #106                 128:'BUILD ENVIRONMENT'	;0
	187  976   CONCAT/8                  #108=     #107                 16?10               	;0
	188  976   ASSIGN_CONCAT/30          ?87       16?9                 #108                	;0
	189  977   FETCH_CONSTANT/99         #110=     ?0                   129:'PHP_OS'        	;16
	190  977   CONCAT/8                  #111=     132:'OS:
'           #110                	;0
	191  977   CONCAT/8                  #112=     #111                 133:' - '           	;0
	192  977   INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'php_uname'     	;0
	193  977   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
	194  977   CONCAT/8                  #114=     #112                 $113                	;0
	195  977   CONCAT/8                  #115=     #114                 136:'

'            	;0
	196  977   ASSIGN_CONCAT/30          ?94       16?9                 #115                	;0
	197  978   ASSIGN/38                 $117=     16?17                137:'N/A'           	;0
	198  978   ASSIGN/38                 $118=     16?16                $117                	;0
	199  978   ASSIGN/38                 $119=     16?15                $118                	;0
	200  978   ASSIGN/38                 $120=     16?14                $119                	;0
	201  978   ASSIGN/38                 ?99       16?13                $120                	;0
	202  980   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'substr'        	;3
	203  980   FETCH_CONSTANT/99         #122=     ?0                   140:'PHP_OS'        	;16
	204  980   SEND_VAL_EX/116           ?80       #122                 ?1                  	;0
	205  980   SEND_VAL_EX/116           ?96       143:0                ?2                  	;0
	206  980   SEND_VAL_EX/116           ?112      144:3                ?3                  	;0
	207  980   DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
	208  980   IS_NOT_EQUAL/18           #124=     $123                 145:'WIN'           	;0
	209  980   JMPZ/43                   ?0        #124                 ?287                	;0	>>287
	210  982   INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'getenv'        	;1
	211  982   SEND_VAL_EX/116           ?80       148:'PHP_AUTOCONF'   ?1                  	;0
	212  982   DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
	213  982   JMPZ/43                   ?0        $125                 ?223                	;0	>>223
	214  983   INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'shell_exec'    	;1
	215  983   INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'getenv'        	;1
	216  983   SEND_VAL_EX/116           ?80       153:'PHP_AUTOCONF'   ?1                  	;0
	217  983   DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
	218  983   CONCAT/8                  #127=     $126                 154:' --version'    	;0
	219  983   SEND_VAL_EX/116           ?80       #127                 ?1                  	;0
	220  983   DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
	221  983   ASSIGN/38                 ?107      16?14                $128                	;0
	222  983   JMP/42                    ?0        ?227                 ?0                  	;0	>>227
	223  985   INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'shell_exec'    	;1	<<213
	224  985   SEND_VAL_EX/116           ?80       157:'autoconf --version' ?1                  	;0
	225  985   DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
	226  985   ASSIGN/38                 ?109      16?14                $130                	;0
	227  989   INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'shell_exec'    	;1	<<222
	228  989   FETCH_CONSTANT/99         #132=     ?0                   160:'INIT_DIR'      	;16
	229  989   CONCAT/8                  #133=     #132                 163:'/libtool --version'	;0
	230  989   SEND_VAL_EX/116           ?80       #133                 ?1                  	;0
	231  989   DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
	232  989   ASSIGN/38                 ?113      16?16                $134                	;0
	233  992   INIT_FCALL_BY_NAME/59     ?0        ?0                   164:'shell_exec'    	;1
	234  992   CONCAT/8                  #136=     166:'bin\\php\\lib\\php\\build' 167:'/build/shtool path glibtool libtool'	;0
	235  992   SEND_VAL_EX/116           ?80       #136                 ?1                  	;0
	236  992   DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
	237  992   ASSIGN/38                 ?116      16?18                $137                	;0
	238  994   JMPZ/43                   ?0        16?18                ?249                	;0	>>249
	239  995   INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'shell_exec'    	;1
	240  995   INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'str_replace'   	;3
	241  995   SEND_VAL_EX/116           ?80       172:'
'              ?1                  	;0
	242  995   SEND_VAL_EX/116           ?96       173:''               ?2                  	;0
	243  995   SEND_VAR_EX/66            ?112      16?18                ?3                  	;0
	244  995   DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
	245  995   CONCAT/8                  #140=     $139                 174:' --version'    	;0
	246  995   SEND_VAL_EX/116           ?80       #140                 ?1                  	;0
	247  995   DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
	248  995   ASSIGN/38                 ?120      16?15                $141                	;0
	249  999   ASSIGN/38                 ?121      16?19                175:array (
  0 => '-v',
  1 => '-V',
  2 => '--version',
)	;0	<<238
	250  1000  ASSIGN/38                 ?122      16?20                176:0               	;0
	251  1002  FE_RESET_R/77             $145=     16?19                ?279                	;0
	252  1002  FE_FETCH_R/78             ?0        $145                 16?21               	;279	>>279	<<278
	253  1003  INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'system'        	;2
	254  1003  INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'getenv'        	;1
	255  1003  SEND_VAL_EX/116           ?80       181:'CC'             ?1                  	;0
	256  1003  DO_FCALL_BY_NAME/131      $146=     ?0                   ?0                  	;0
	257  1003  ROPE_INIT/54              #148=     ?0                   182:' '             	;3
	258  1003  ROPE_ADD/55               #148=     #148                 16?21               	;1
	259  1003  ROPE_END/56               #147=     #148                 183:' >/dev/null 2>&1'	;2
	260  1003  CONCAT/8                  #150=     $146                 #147                	;0
	261  1003  SEND_VAL_EX/116           ?80       #150                 ?1                  	;0
	262  1003  SEND_VAR_EX/66            ?96       16?20                ?2                  	;0
	263  1003  DO_FCALL_BY_NAME/131      ?129      ?0                   ?0                  	;0
	264  1004  IS_EQUAL/17               #152=     16?20                184:0               	;0
	265  1004  JMPZ/43                   ?0        #152                 ?278                	;0	>>278
	266  1005  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'shell_exec'    	;1
	267  1005  INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'getenv'        	;1
	268  1005  SEND_VAL_EX/116           ?80       189:'CC'             ?1                  	;0
	269  1005  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
	270  1005  ROPE_INIT/54              #155=     ?0                   190:' '             	;3
	271  1005  ROPE_ADD/55               #155=     #155                 16?21               	;1
	272  1005  ROPE_END/56               #154=     #155                 191:' 2>&1'         	;2
	273  1005  CONCAT/8                  #157=     $153                 #154                	;0
	274  1005  SEND_VAL_EX/116           ?80       #157                 ?1                  	;0
	275  1005  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
	276  1005  ASSIGN/38                 ?137      16?17                $158                	;0
	277  1006  BRK/254                   ?0        ?279                 0:1                 	;0
	278  1006  JMP/42                    ?0        ?252                 ?0                  	;0	>>252	<<265
	279  1006  FE_FREE/127               ?0        $145                 ?0                  	;0	<<251
	280  1010  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'shell_exec'    	;1
	281  1010  ROPE_INIT/54              #161=     ?0                   194:'ldd '          	;3
	282  1010  ROPE_ADD/55               #161=     #161                 16?4                	;1
	283  1010  ROPE_END/56               #160=     #161                 195:' 2>/dev/null'  	;2
	284  1010  SEND_VAL_EX/116           ?80       #160                 ?1                  	;0
	285  1010  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
	286  1010  ASSIGN/38                 ?142      16?13                $163                	;0
	287  1013  ROPE_INIT/54              #166=     ?0                   196:'Autoconf:
'    	;3	<<209
	288  1013  ROPE_ADD/55               #166=     #166                 16?14               	;1
	289  1013  ROPE_END/56               #165=     #166                 197:'
'             	;2
	290  1013  ASSIGN_CONCAT/30          ?146      16?9                 #165                	;0
	291  1014  ROPE_INIT/54              #170=     ?0                   198:'Bundled Libtool:
'	;3
	292  1014  ROPE_ADD/55               #170=     #170                 16?16               	;1
	293  1014  ROPE_END/56               #169=     #170                 199:'
'             	;2
	294  1014  ASSIGN_CONCAT/30          ?150      16?9                 #169                	;0
	295  1015  ROPE_INIT/54              #174=     ?0                   200:'System Libtool:
'	;3
	296  1015  ROPE_ADD/55               #174=     #174                 16?15               	;1
	297  1015  ROPE_END/56               #173=     #174                 201:'
'             	;2
	298  1015  ASSIGN_CONCAT/30          ?154      16?9                 #173                	;0
	299  1016  ROPE_INIT/54              #178=     ?0                   202:'Compiler:
'    	;3
	300  1016  ROPE_ADD/55               #178=     #178                 16?17               	;1
	301  1016  ROPE_END/56               #177=     #178                 203:'
'             	;2
	302  1016  ASSIGN_CONCAT/30          ?158      16?9                 #177                	;0
	303  1017  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'shell_exec'    	;1
	304  1017  SEND_VAL_EX/116           ?80       206:'bison --version 2>/dev/null' ?1                  	;0
	305  1017  DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
	306  1017  CONCAT/8                  #182=     207:'Bison:
'        $181                	;0
	307  1017  CONCAT/8                  #183=     #182                 208:'
'             	;0
	308  1017  ASSIGN_CONCAT/30          ?162      16?9                 #183                	;0
	309  1018  ROPE_INIT/54              #186=     ?0                   209:'Libraries:
'   	;3
	310  1018  ROPE_ADD/55               #186=     #186                 16?13               	;1
	311  1018  ROPE_END/56               #185=     #186                 210:'
'             	;2
	312  1018  ASSIGN_CONCAT/30          ?166      16?9                 #185                	;0
	313  1019  ASSIGN_CONCAT/30          ?167      16?9                 211:'
'             	;0
	314  1021  ISSET_ISEMPTY_CV/197      #190=     16?8                 ?0                  	;33554432
	315  1021  JMPZ/43                   ?0        #190                 ?319                	;0	>>319
	316  1022  CONCAT/8                  #191=     212:'User\'s E-mail: ' 16?8                	;0
	317  1022  CONCAT/8                  #192=     #191                 213:'

'            	;0
	318  1022  ASSIGN_CONCAT/30          ?171      16?9                 #192                	;0
	319  1025  CONCAT/8                  #194=     16?10                214:'PHPINFO'       	;0	<<315
	320  1025  CONCAT/8                  #195=     #194                 16?10               	;0
	321  1025  ASSIGN_CONCAT/30          ?174      16?9                 #195                	;0
	322  1026  INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'shell_exec'    	;1
	323  1026  CONCAT/8                  #197=     16?4                 217:' -ddisplay_errors=stderr -dhtml_errors=0 -i 2> /dev/null'	;0
	324  1026  SEND_VAL_EX/116           ?80       #197                 ?1                  	;0
	325  1026  DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
	326  1026  ASSIGN_CONCAT/30          ?177      16?9                 $198                	;0
	327  1028  JMPNZ_EX/47               #200=     16?1                 ?334                	;0	>>334
	328  1028  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'mail_qa_team'  	;2
	329  1028  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	330  1028  SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
	331  1028  DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
	332  1028  BOOL_NOT/13               #202=     $201                 ?0                  	;0
	333  1028  BOOL/52                   #200=     #202                 ?0                  	;0
	334  1028  JMPZ_EX/46                #200=     #200                 ?338                	;0	>>338	<<327
	335  1028  FETCH_CONSTANT/99         #203=     ?0                   220:'TRAVIS_CI'     	;16
	336  1028  BOOL_NOT/13               #204=     #203                 ?0                  	;0
	337  1028  BOOL/52                   #200=     #204                 ?0                  	;0
	338  1028  JMPZ/43                   ?0        #200                 ?353                	;0	>>353	<<334
	339  1029  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'file_put_contents'	;2
	340  1029  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	341  1029  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	342  1029  DO_FCALL_BY_NAME/131      ?183      ?0                   ?0                  	;0
	343  1031  BOOL_NOT/13               #206=     16?1                 ?0                  	;0
	344  1031  JMPZ/43                   ?0        #206                 ?346                	;0	>>346
	345  1032  ECHO/40                   ?0        225:'
The test script was unable to automatically send the report to PHP\'s QA Team
' ?0                  	;0
	346  1035  CONCAT/8                  #207=     226:'Please send '   16?5                	;0	<<344
	347  1035  CONCAT/8                  #208=     #207                 227:' to '          	;0
	348  1035  FETCH_CONSTANT/99         #209=     ?0                   228:'PHP_QA_EMAIL'  	;16
	349  1035  CONCAT/8                  #210=     #208                 #209                	;0
	350  1035  CONCAT/8                  #211=     #210                 231:' manually, thank you.
'	;0
	351  1035  ECHO/40                   ?0        #211                 ?0                  	;0
	352  1035  JMP/42                    ?0        ?369                 ?0                  	;0	>>369
	353  1036  INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'getenv'        	;1	<<338
	354  1036  SEND_VAL_EX/116           ?80       234:'NO_INTERACTION' ?1                  	;0
	355  1036  DO_FCALL_BY_NAME/131      $212=     ?0                   ?0                  	;0
	356  1036  BOOL_NOT/13               #213=     $212                 ?0                  	;0
	357  1036  JMPZ_EX/46                #213=     #213                 ?361                	;0	>>361
	358  1036  FETCH_CONSTANT/99         #214=     ?0                   235:'TRAVIS_CI'     	;16
	359  1036  BOOL_NOT/13               #215=     #214                 ?0                  	;0
	360  1036  BOOL/52                   #213=     #215                 ?0                  	;0
	361  1036  JMPZ/43                   ?0        #213                 ?369                	;0	>>369	<<357
	362  1037  INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'fwrite'        	;2
	363  1037  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	364  1037  SEND_VAL_EX/116           ?96       240:'
Thank you for helping to make PHP better.
' ?2                  	;0
	365  1037  DO_FCALL_BY_NAME/131      ?194      ?0                   ?0                  	;0
	366  1038  INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'fclose'        	;1
	367  1038  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	368  1038  DO_FCALL_BY_NAME/131      ?195      ?0                   ?0                  	;0
	369  1042  NOP/0                     ?0        243:NULL             ?0                  	;4294967295	<<65,85,352,361
	*/
}

function find_files($dir, $is_ext_dir, $ignore)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1044  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1044  RECV_INIT/64              16?1=     ?2                   0:false             	;0
	2    1044  RECV_INIT/64              16?2=     ?3                   1:false             	;0
	3    1046  BIND_GLOBAL/168           ?0        16?3                 2:'test_files'      	;0
	4    1046  BIND_GLOBAL/168           ?0        16?4                 3:'exts_to_test'    	;0
	5    1046  BIND_GLOBAL/168           ?0        16?5                 4:'ignored_by_ext'  	;0
	6    1046  BIND_GLOBAL/168           ?0        16?6                 5:'exts_skipped'    	;0
	7    1048  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'opendir'         	;1
	8    1048  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	9    1048  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	10   1048  ASSIGN/38                 $12=      16?7                 $11                 	;0
	11   1048  JMPNZ_EX/47               #13=      $12                  ?18                 	;0	>>18
	12   1048  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'error'           	;1
	13   1048  NOP/0                     ?0        ?0                   ?0                  	;0
	14   1048  FAST_CONCAT/53            #14=      10:'cannot open directory: ' 16?0                	;0
	15   1048  SEND_VAL_EX/116           ?80       #14                  ?1                  	;0
	16   1048  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	17   1048  BOOL/52                   #13=      $15                  ?0                  	;0
	18   1050  JMP/42                    ?0        ?91                  ?0                  	;0	>>91	<<11
	19   1052  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'is_dir'         	;1	<<96
	20   1052  ROPE_INIT/54              #17=      ?0                   16?0                	;3
	21   1052  ROPE_ADD/55               #17=      #17                  13:'/'              	;1
	22   1052  ROPE_END/56               #16=      #17                  16?8                	;2
	23   1052  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
	24   1052  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
	25   1052  JMPZ_EX/46                #20=      $19                  ?32                 	;0	>>32
	26   1052  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'in_array'       	;2
	27   1052  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	28   1052  SEND_VAL_EX/116           ?96       16:array (
  0 => '.',
  1 => '..',
  2 => '.svn',
) ?2                  	;0
	29   1052  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
	30   1052  BOOL_NOT/13               #22=      $21                  ?0                  	;0
	31   1052  BOOL/52                   #20=      #22                  ?0                  	;0
	32   1052  JMPZ/43                   ?0        #20                  ?57                 	;0	>>57	<<25
	33   1053  JMPZ_EX/46                #23=      16?1                 ?43                 	;0	>>43
	34   1053  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'in_array'       	;2
	35   1053  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'strtolower'     	;1
	36   1053  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	37   1053  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
	38   1053  SEND_VAR_NO_REF_EX/50     ?80       $24                  ?1                  	;0
	39   1053  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	40   1053  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
	41   1053  BOOL_NOT/13               #26=      $25                  ?0                  	;0
	42   1053  BOOL/52                   #23=      #26                  ?0                  	;0
	43   1053  ASSIGN/38                 ?16       16?9                 #23                 	;0	<<33
	44   1054  JMPZ/43                   ?0        16?9                 ?47                 	;0	>>47
	45   1055  POST_INC/36               #28=      16?6                 ?0                  	;0
	46   1055  FREE/70                   ?0        #28                  ?0                  	;0
	47   1057  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'find_files'     	;3	<<44
	48   1057  ROPE_INIT/54              #30=      ?0                   16?0                	;3
	49   1057  ROPE_ADD/55               #30=      #30                  23:'/'              	;1
	50   1057  ROPE_END/56               #29=      #30                  16?8                	;2
	51   1057  SEND_VAL_EX/116           ?80       #29                  ?1                  	;0
	52   1057  SEND_VAL_EX/116           ?96       24:false             ?2                  	;0
	53   1057  JMPNZ_EX/47               #32=      16?2                 ?55                 	;0	>>55
	54   1057  BOOL/52                   #32=      16?9                 ?0                  	;0
	55   1057  SEND_VAL_EX/116           ?112      #32                  ?3                  	;0	<<53
	56   1057  DO_FCALL_BY_NAME/131      ?22       ?0                   ?0                  	;0
	57   1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'substr'         	;2	<<32
	58   1061  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	59   1061  SEND_VAL_EX/116           ?96       27:-4                ?2                  	;0
	60   1061  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
	61   1061  IS_EQUAL/17               #35=      $34                  28:'.tmp'           	;0
	62   1061  JMPZ/43                   ?0        #35                  ?72                 	;0	>>72
	63   1062  BEGIN_SILENCE/57          #36=      ?0                   ?0                  	;0
	64   1062  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'unlink'         	;1
	65   1062  ROPE_INIT/54              #38=      ?0                   16?0                	;3
	66   1062  ROPE_ADD/55               #38=      #38                  31:'/'              	;1
	67   1062  ROPE_END/56               #37=      #38                  16?8                	;2
	68   1062  SEND_VAL_EX/116           ?80       #37                  ?1                  	;0
	69   1062  DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
	70   1062  END_SILENCE/58            ?0        #36                  ?0                  	;0
	71   1063  CONT/255                  ?0        ?91                  0:1                 	;0
	72   1067  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'substr'         	;2	<<62
	73   1067  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	74   1067  SEND_VAL_EX/116           ?96       34:-5                ?2                  	;0
	75   1067  DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
	76   1067  IS_EQUAL/17               #42=      $41                  35:'.phpt'          	;0
	77   1067  JMPZ/43                   ?0        #42                  ?91                 	;0	>>91
	78   1068  JMPZ/43                   ?0        16?2                 ?82                 	;0	>>82
	79   1069  POST_INC/36               #43=      16?5                 ?0                  	;0
	80   1069  FREE/70                   ?0        #43                  ?0                  	;0
	81   1069  CONT/255                  ?0        ?91                  0:1                 	;0
	82   1071  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'realpath'       	;1	<<78
	83   1071  ROPE_INIT/54              #45=      ?0                   16?0                	;3
	84   1071  ROPE_ADD/55               #45=      #45                  38:'/'              	;1
	85   1071  ROPE_END/56               #44=      #45                  16?8                	;2
	86   1071  SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
	87   1071  DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
	88   1071  ASSIGN/38                 ?37       16?10                $47                 	;0
	89   1072  ASSIGN_DIM/147            ?38       16?3                 ?2670193904         	;0
	90   1072  OP_DATA/137               ?0        16?10                ?0                  	;0
	91   1050  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'readdir'        	;1	<<18,77
	92   1050  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	93   1050  DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
	94   1050  ASSIGN/38                 $51=      16?8                 $50                 	;0
	95   1050  IS_NOT_IDENTICAL/16       #52=      $51                  41:false            	;0
	96   1050  JMPNZ/44                  ?0        #52                  ?19                 	;0	>>19
	97   1077  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'closedir'       	;1
	98   1077  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	99   1077  DO_FCALL_BY_NAME/131      ?42       ?0                   ?0                  	;0
	100  1078  NOP/0                     ?0        44:NULL              ?0                  	;4294967295
	*/
}

function test_name($name)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1080  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1082  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_array'        	;1
	2    1082  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3    1082  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4    1082  JMPZ/43                   ?0        $1                   ?11                 	;0	>>11
	5    1083  FETCH_DIM_R/81            $2=       16?0                 2:0                 	;0
	6    1083  CONCAT/8                  #3=       $2                   3:':'               	;0
	7    1083  FETCH_DIM_R/81            $4=       16?0                 4:1                 	;0
	8    1083  CONCAT/8                  #5=       #3                   $4                  	;0
	9    1083  RETURN/62                 ?0        #5                   ?0                  	;0
	10   1083  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
	11   1085  RETURN/62                 ?0        16?0                 ?0                  	;0	<<4
	12   1087  NOP/0                     ?0        5:NULL               ?0                  	;4294967295	<<10
	*/
}

function test_sort($a, $b)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1089  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1089  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    1091  INIT_FCALL/61             ?0        ?176                 0:'test_name'       	;1
	3    1091  SEND_VAR/117              ?80       16?0                 ?1                  	;0
	4    1091  DO_FCALL/60               $4=       ?0                   ?0                  	;0
	5    1091  ASSIGN/38                 ?1        16?0                 $4                  	;0
	6    1092  INIT_FCALL/61             ?0        ?176                 1:'test_name'       	;1
	7    1092  SEND_VAR/117              ?80       16?1                 ?1                  	;0
	8    1092  DO_FCALL/60               $6=       ?0                   ?0                  	;0
	9    1092  ASSIGN/38                 ?3        16?1                 $6                  	;0
	10   1094  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'strpos'          	;2
	11   1094  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	12   1094  FETCH_CONSTANT/99         #8=       ?0                   4:'TEST_PHP_SRCDIR' 	;16
	13   1094  CONCAT/8                  #9=       #8                   7:'/tests'          	;0
	14   1094  SEND_VAL_EX/116           ?96       #9                   ?2                  	;0
	15   1094  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	16   1094  IS_IDENTICAL/15           #11=      $10                  8:0                 	;0
	17   1094  JMPZ/43                   ?0        #11                  ?32                 	;0	>>32
	18   1094  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'strpos'          	;2
	19   1094  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	20   1095  FETCH_CONSTANT/99         #12=      ?0                   11:'TEST_PHP_SRCDIR'	;16
	21   1095  CONCAT/8                  #13=      #12                  14:'/tests/run-test'	;0
	22   1095  SEND_VAL_EX/116           ?96       #13                  ?2                  	;0
	23   1095  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	24   1095  IS_IDENTICAL/15           #15=      $14                  15:0                	;0
	25   1095  JMPZ/43                   ?0        #15                  ?28                 	;0	>>28
	26   1095  QM_ASSIGN/22              #16=      16:1                 ?0                  	;0
	27   1095  JMP/42                    ?0        ?29                  ?0                  	;0	>>29
	28   1095  QM_ASSIGN/22              #16=      17:0                 ?0                  	;0	<<25
	29   1095  ADD/1                     #17=      18:1                 #16                 	;0	<<27
	30   1095  QM_ASSIGN/22              #18=      #17                  ?0                  	;0
	31   1095  JMP/42                    ?0        ?33                  ?0                  	;0	>>33
	32   1095  QM_ASSIGN/22              #18=      19:0                 ?0                  	;0	<<17
	33   1095  ASSIGN/38                 ?15       16?2                 #18                 	;0	<<31
	34   1096  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'strpos'         	;2
	35   1096  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	36   1096  FETCH_CONSTANT/99         #20=      ?0                   22:'TEST_PHP_SRCDIR'	;16
	37   1096  CONCAT/8                  #21=      #20                  25:'/tests'         	;0
	38   1096  SEND_VAL_EX/116           ?96       #21                  ?2                  	;0
	39   1096  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
	40   1096  IS_IDENTICAL/15           #23=      $22                  26:0                	;0
	41   1096  JMPZ/43                   ?0        #23                  ?56                 	;0	>>56
	42   1096  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'strpos'         	;2
	43   1096  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	44   1097  FETCH_CONSTANT/99         #24=      ?0                   29:'TEST_PHP_SRCDIR'	;16
	45   1097  CONCAT/8                  #25=      #24                  32:'/tests/run-test'	;0
	46   1097  SEND_VAL_EX/116           ?96       #25                  ?2                  	;0
	47   1097  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	48   1097  IS_IDENTICAL/15           #27=      $26                  33:0                	;0
	49   1097  JMPZ/43                   ?0        #27                  ?52                 	;0	>>52
	50   1097  QM_ASSIGN/22              #28=      34:1                 ?0                  	;0
	51   1097  JMP/42                    ?0        ?53                  ?0                  	;0	>>53
	52   1097  QM_ASSIGN/22              #28=      35:0                 ?0                  	;0	<<49
	53   1097  ADD/1                     #29=      36:1                 #28                 	;0	<<51
	54   1097  QM_ASSIGN/22              #30=      #29                  ?0                  	;0
	55   1097  JMP/42                    ?0        ?57                  ?0                  	;0	>>57
	56   1097  QM_ASSIGN/22              #30=      37:0                 ?0                  	;0	<<41
	57   1097  ASSIGN/38                 ?27       16?3                 #30                 	;0	<<55
	58   1099  IS_EQUAL/17               #32=      16?2                 16?3                	;0
	59   1099  JMPZ/43                   ?0        #32                  ?66                 	;0	>>66
	60   1100  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'strcmp'         	;2
	61   1100  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	62   1100  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	63   1100  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	64   1100  RETURN/62                 ?0        $33                  ?0                  	;0
	65   1100  JMP/42                    ?0        ?68                  ?0                  	;0	>>68
	66   1102  SUB/2                     #34=      16?3                 16?2                	;0	<<59
	67   1102  RETURN/62                 ?0        #34                  ?0                  	;0
	68   1104  NOP/0                     ?0        40:NULL              ?0                  	;4294967295	<<65
	*/
}

function mail_qa_team($data, $status)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1112  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1112  RECV_INIT/64              16?1=     ?2                   0:false             	;0
	2    1114  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'parse_url'       	;1
	3    1114  FETCH_CONSTANT/99         #12=      ?0                   3:'QA_SUBMISSION_PAGE'	;16
	4    1114  SEND_VAL_EX/116           ?80       #12                  ?1                  	;0
	5    1114  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	6    1114  ASSIGN/38                 ?2        16?2                 $13                 	;0
	7    1116  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'getenv'          	;1
	8    1116  SEND_VAL_EX/116           ?80       8:'http_proxy'       ?1                  	;0
	9    1116  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	10   1116  ASSIGN/38                 $16=      16?3                 $15                 	;0
	11   1116  JMPZ/43                   ?0        $16                  ?29                 	;0	>>29
	12   1117  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'parse_url'       	;1
	13   1117  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	14   1117  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
	15   1117  ASSIGN/38                 ?6        16?3                 $17                 	;0
	16   1118  FETCH_DIM_R/81            $19=      16?2                 11:'host'           	;0
	17   1118  FETCH_DIM_R/81            $20=      16?2                 12:'path'           	;0
	18   1118  CONCAT/8                  #21=      $19                  $20                 	;0
	19   1118  ASSIGN/38                 ?10       16?4                 #21                 	;0
	20   1119  FETCH_DIM_R/81            $23=      16?3                 13:'host'           	;0
	21   1119  ASSIGN/38                 ?12       16?5                 $23                 	;0
	22   1120  ISSET_ISEMPTY_DIM_OBJ/115 #25=      16?3                 14:'port'           	;16777216
	23   1120  JMPZ/43                   ?0        #25                  ?26                 	;0	>>26
	24   1121  ASSIGN_DIM/147            ?14       16?3                 15:'port'           	;0
	25   1121  OP_DATA/137               ?0        16:80                ?0                  	;0
	26   1123  FETCH_DIM_R/81            $27=      16?3                 17:'port'           	;0	<<23
	27   1123  ASSIGN/38                 ?16       16?6                 $27                 	;0
	28   1123  JMP/42                    ?0        ?41                  ?0                  	;0	>>41
	29   1125  FETCH_DIM_R/81            $29=      16?2                 18:'path'           	;0	<<11
	30   1125  ASSIGN/38                 ?18       16?4                 $29                 	;0
	31   1126  FETCH_DIM_R/81            $31=      16?2                 19:'host'           	;0
	32   1126  ASSIGN/38                 ?20       16?5                 $31                 	;0
	33   1127  ISSET_ISEMPTY_DIM_OBJ/115 #33=      16?2                 20:'port'           	;16777216
	34   1127  JMPZ/43                   ?0        #33                  ?37                 	;0	>>37
	35   1127  QM_ASSIGN/22              #34=      21:80                ?0                  	;0
	36   1127  JMP/42                    ?0        ?40                  ?0                  	;0	>>40
	37   1127  FETCH_DIM_R/81            $35=      16?2                 22:'port'           	;0	<<34
	38   1127  ASSIGN/38                 $36=      16?6                 $35                 	;0
	39   1127  QM_ASSIGN/22              #34=      $36                  ?0                  	;0
	40   1127  ASSIGN/38                 ?25       16?6                 #34                 	;0	<<36
	41   1130  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'urlencode'      	;1	<<28
	42   1130  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'base64_encode'  	;1
	43   1130  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'str_replace'    	;3
	44   1130  SEND_VAL_EX/116           ?80       29:'' . "\0" . ''    ?1                  	;0
	45   1130  SEND_VAL_EX/116           ?96       30:'[0x0]'           ?2                  	;0
	46   1130  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
	47   1130  DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	48   1130  SEND_VAR_NO_REF_EX/50     ?80       $38                  ?1                  	;0
	49   1130  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
	50   1130  SEND_VAR_NO_REF_EX/50     ?80       $39                  ?1                  	;0
	51   1130  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	52   1130  CONCAT/8                  #41=      31:'php_test_data='  $40                 	;0
	53   1130  ASSIGN/38                 ?30       16?0                 #41                 	;0
	54   1131  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'strlen'         	;1
	55   1131  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	56   1131  DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
	57   1131  ASSIGN/38                 ?32       16?7                 $43                 	;0
	58   1133  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'fsockopen'      	;5
	59   1133  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	60   1133  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
	61   1133  SEND_VAR_EX/66            ?112      16?9                 ?3                  	;0
	62   1133  SEND_VAR_EX/66            ?128      16?10                ?4                  	;0
	63   1133  SEND_VAL_EX/116           ?144      36:10                ?5                  	;0
	64   1133  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
	65   1133  ASSIGN/38                 ?34       16?8                 $45                 	;0
	66   1135  BOOL_NOT/13               #47=      16?8                 ?0                  	;0
	67   1135  JMPZ/43                   ?0        #47                  ?69                 	;0	>>69
	68   1136  RETURN/62                 ?0        37:false             ?0                  	;0
	69   1139  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'urlencode'      	;1	<<67
	70   1139  FETCH_CONSTANT/99         #48=      ?0                   40:'TESTED_PHP_VERSION'	;16
	71   1139  SEND_VAL_EX/116           ?80       #48                  ?1                  	;0
	72   1139  DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
	73   1139  ASSIGN/38                 ?38       16?11                $49                 	;0
	74   1141  FETCH_CONSTANT/99         #51=      ?0                   43:'QA_SUBMISSION_PAGE'	;16
	75   1141  CONCAT/8                  #52=      46:'
Posting to '    #51                 	;0
	76   1141  CONCAT/8                  #53=      #52                  47:'
'              	;0
	77   1141  ECHO/40                   ?0        #53                  ?0                  	;0
	78   1142  INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'fwrite'         	;2
	79   1142  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	80   1142  CONCAT/8                  #54=      50:'POST '           16?4                	;0
	81   1142  ROPE_INIT/54              #56=      ?0                   51:'?status='       	;5
	82   1142  ROPE_ADD/55               #56=      #56                  16?1                	;1
	83   1142  ROPE_ADD/55               #56=      #56                  52:'&version='      	;2
	84   1142  ROPE_ADD/55               #56=      #56                  16?11               	;3
	85   1142  ROPE_END/56               #55=      #56                  53:' HTTP/1.1
'    	;4
	86   1142  CONCAT/8                  #59=      #54                  #55                 	;0
	87   1142  SEND_VAL_EX/116           ?96       #59                  ?2                  	;0
	88   1142  DO_FCALL_BY_NAME/131      ?48       ?0                   ?0                  	;0
	89   1143  INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'fwrite'         	;2
	90   1143  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	91   1143  CONCAT/8                  #61=      56:'Host: '          16?5                	;0
	92   1143  CONCAT/8                  #62=      #61                  57:'
'             	;0
	93   1143  SEND_VAL_EX/116           ?96       #62                  ?2                  	;0
	94   1143  DO_FCALL_BY_NAME/131      ?51       ?0                   ?0                  	;0
	95   1144  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'fwrite'         	;2
	96   1144  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	97   1144  SEND_VAL_EX/116           ?96       60:'User-Agent: QA Browser 0.1
' ?2                  	;0
	98   1144  DO_FCALL_BY_NAME/131      ?52       ?0                   ?0                  	;0
	99   1145  INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'fwrite'         	;2
	100  1145  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	101  1145  SEND_VAL_EX/116           ?96       63:'Content-Type: application/x-www-form-urlencoded
' ?2                  	;0
	102  1145  DO_FCALL_BY_NAME/131      ?53       ?0                   ?0                  	;0
	103  1146  INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'fwrite'         	;2
	104  1146  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	105  1146  CONCAT/8                  #66=      66:'Content-Length: ' 16?7                	;0
	106  1146  CONCAT/8                  #67=      #66                  67:'

'           	;0
	107  1146  SEND_VAL_EX/116           ?96       #67                  ?2                  	;0
	108  1146  DO_FCALL_BY_NAME/131      ?56       ?0                   ?0                  	;0
	109  1147  INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'fwrite'         	;2
	110  1147  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	111  1147  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	112  1147  DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
	113  1148  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'fwrite'         	;2
	114  1148  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	115  1148  SEND_VAL_EX/116           ?96       72:'

'            ?2                  	;0
	116  1148  DO_FCALL_BY_NAME/131      ?58       ?0                   ?0                  	;0
	117  1149  INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'fclose'         	;1
	118  1149  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	119  1149  DO_FCALL_BY_NAME/131      ?59       ?0                   ?0                  	;0
	120  1151  RETURN/62                 ?0        75:1                 ?0                  	;0
	121  1152  NOP/0                     ?0        76:NULL              ?0                  	;4294967295
	*/
}

function save_text($filename, $text, $filename_copy)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1159  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1159  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    1159  RECV_INIT/64              16?2=     ?3                   0:NULL              	;0
	3    1161  BIND_GLOBAL/168           ?0        16?3                 1:'DETAILED'        	;0
	4    1163  JMPZ_EX/46                #4=       16?2                 ?7                  	;0	>>7
	5    1163  IS_NOT_EQUAL/18           #5=       16?2                 16?0                	;0
	6    1163  BOOL/52                   #4=       #5                   ?0                  	;0
	7    1163  JMPZ/43                   ?0        #4                   ?21                 	;0	>>21	<<4
	8    1164  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'file_put_contents'	;3
	9    1164  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	10   1164  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	11   1164  FETCH_CONSTANT/99         #6=       ?0                   4:'FILE_BINARY'     	;16
	12   1164  SEND_VAL_EX/116           ?112      #6                   ?3                  	;0
	13   1164  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	14   1164  IS_IDENTICAL/15           #8=       $7                   7:false             	;0
	15   1164  JMPZ/43                   ?0        #8                   ?21                 	;0	>>21
	16   1165  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'error'           	;1
	17   1165  CONCAT/8                  #9=       10:'Cannot open file \'' 16?2                	;0
	18   1165  CONCAT/8                  #10=      #9                   11:'\' (save_text)' 	;0
	19   1165  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
	20   1165  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
	21   1169  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'file_put_contents'	;3	<<7,15
	22   1169  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	23   1169  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	24   1169  FETCH_CONSTANT/99         #12=      ?0                   14:'FILE_BINARY'    	;16
	25   1169  SEND_VAL_EX/116           ?112      #12                  ?3                  	;0
	26   1169  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	27   1169  IS_IDENTICAL/15           #14=      $13                  17:false            	;0
	28   1169  JMPZ/43                   ?0        #14                  ?34                 	;0	>>34
	29   1170  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'error'          	;1
	30   1170  CONCAT/8                  #15=      20:'Cannot open file \'' 16?0                	;0
	31   1170  CONCAT/8                  #16=      #15                  21:'\' (save_text)' 	;0
	32   1170  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
	33   1170  DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
	34   1173  IS_SMALLER/19             #18=      22:1                 16?3                	;0	<<28
	35   1173  JMPZ/43                   ?0        #18                  ?42                 	;0	>>42
	36   1174  ROPE_INIT/54              #20=      ?0                   23:'
FILE '         	;5
	37   1174  ROPE_ADD/55               #20=      #20                  16?0                	;1
	38   1175  ROPE_ADD/55               #20=      #20                  24:' {{{
'          	;2
	39   1175  ROPE_ADD/55               #20=      #20                  16?1                	;3
	40   1175  ROPE_END/56               #19=      #20                  25:'
}}}
'          	;4
	41   1175  ECHO/40                   ?0        #19                  ?0                  	;0
	42   1178  NOP/0                     ?0        26:NULL              ?0                  	;4294967295	<<35
	*/
}

function error_report($testname, $logname, $tested)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1184  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1184  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    1184  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    1186  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'realpath'        	;1
	4    1186  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	5    1186  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	6    1186  ASSIGN/38                 ?1        16?0                 $3                  	;0
	7    1187  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'realpath'        	;1
	8    1187  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	9    1187  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	10   1187  ASSIGN/38                 ?3        16?1                 $5                  	;0
	11   1189  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'strtoupper'      	;1
	12   1189  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'getenv'          	;1
	13   1189  SEND_VAL_EX/116           ?80       8:'TEST_PHP_ERROR_STYLE' ?1                  	;0
	14   1189  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	15   1189  SEND_VAR_NO_REF_EX/50     ?80       $7                   ?1                  	;0
	16   1189  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	17   1189  SWITCH_STRING/188         ?0        $8                   9:array (
  'MSVC' => 23,
  'EMACS' => 34,
)	;45
	18   1190  CASE/48                   #9=       $8                   10:'MSVC'           	;0	>>20
	19   1190  JMPNZ/44                  ?0        #9                   ?23                 	;0	>>23
	20   1194  CASE/48                   #9=       $8                   11:'EMACS'          	;0	>>22	<<18
	21   1194  JMPNZ/44                  ?0        #9                   ?34                 	;0	>>34
	22   1194  JMP/42                    ?0        ?45                  ?0                  	;0	>>45	<<20
	23   1191  ROPE_INIT/54              #11=      ?0                   12:'(1) : '         	;3	<<19
	24   1191  ROPE_ADD/55               #11=      #11                  16?2                	;1
	25   1191  ROPE_END/56               #10=      #11                  13:'
'              	;2
	26   1191  CONCAT/8                  #13=      16?0                 #10                 	;0
	27   1191  ECHO/40                   ?0        #13                  ?0                  	;0
	28   1192  ROPE_INIT/54              #15=      ?0                   14:'(1) :  '        	;3
	29   1192  ROPE_ADD/55               #15=      #15                  16?2                	;1
	30   1192  ROPE_END/56               #14=      #15                  15:'
'              	;2
	31   1192  CONCAT/8                  #17=      16?1                 #14                 	;0
	32   1192  ECHO/40                   ?0        #17                  ?0                  	;0
	33   1193  BRK/254                   ?0        ?45                  0:1                 	;0
	34   1195  ROPE_INIT/54              #19=      ?0                   16:':1: '           	;3	<<21
	35   1195  ROPE_ADD/55               #19=      #19                  16?2                	;1
	36   1195  ROPE_END/56               #18=      #19                  17:'
'              	;2
	37   1195  CONCAT/8                  #21=      16?0                 #18                 	;0
	38   1195  ECHO/40                   ?0        #21                  ?0                  	;0
	39   1196  ROPE_INIT/54              #23=      ?0                   18:':1:  '          	;3
	40   1196  ROPE_ADD/55               #23=      #23                  16?2                	;1
	41   1196  ROPE_END/56               #22=      #23                  19:'
'              	;2
	42   1196  CONCAT/8                  #25=      16?1                 #22                 	;0
	43   1196  ECHO/40                   ?0        #25                  ?0                  	;0
	44   1197  BRK/254                   ?0        ?45                  0:1                 	;0
	45   1197  FREE/70                   ?0        $8                   ?0                  	;0	<<22
	46   1199  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
	*/
}

function system_with_timeout($commandline, $env, $stdin, $captureStdIn, $captureStdOut, $captureStdErr)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1201  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1201  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
	2    1201  RECV_INIT/64              16?2=     ?3                   1:NULL              	;0
	3    1201  RECV_INIT/64              16?3=     ?4                   2:true              	;0
	4    1201  RECV_INIT/64              16?4=     ?5                   3:true              	;0
	5    1201  RECV_INIT/64              16?5=     ?6                   4:true              	;0
	6    1203  BIND_GLOBAL/168           ?0        16?6                 5:'valgrind'        	;0
	7    1205  ASSIGN/38                 ?0        16?7                 6:''                	;0
	8    1207  ASSIGN/38                 ?1        16?8                 7:array (
)         	;0
	9    1208  CAST/21                   #23=      16?1                 ?0                  	;7
	10   1208  FE_RESET_R/77             $24=      #23                  ?16                 	;0
	11   1208  FE_FETCH_R/78             #25=      $24                  16?9                	;16	>>16	<<15
	12   1208  ASSIGN/38                 ?5        16?10                #25                 	;0
	13   1209  ASSIGN_DIM/147            ?6        16?8                 16?10               	;0
	14   1209  OP_DATA/137               ?0        16?9                 ?0                  	;0
	15   1209  JMP/42                    ?0        ?11                  ?0                  	;0	>>11
	16   1209  FE_FREE/127               ?0        $24                  ?0                  	;0	<<10
	17   1212  ASSIGN/38                 ?7        16?11                8:array (
)         	;0
	18   1213  JMPZ/43                   ?0        16?3                 ?21                 	;0	>>21
	19   1214  ASSIGN_DIM/147            ?8        16?11                9:0                 	;0
	20   1214  OP_DATA/137               ?0        10:array (
  0 => 'pipe',
  1 => 'r',
) ?0                  	;0
	21   1216  JMPZ/43                   ?0        16?4                 ?24                 	;0	>>24	<<18
	22   1217  ASSIGN_DIM/147            ?9        16?11                11:1                	;0
	23   1217  OP_DATA/137               ?0        12:array (
  0 => 'pipe',
  1 => 'w',
) ?0                  	;0
	24   1219  JMPZ/43                   ?0        16?5                 ?27                 	;0	>>27	<<21
	25   1220  ASSIGN_DIM/147            ?10       16?11                13:2                	;0
	26   1220  OP_DATA/137               ?0        14:array (
  0 => 'pipe',
  1 => 'w',
) ?0                  	;0
	27   1222  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'proc_open'      	;6	<<24
	28   1222  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	29   1222  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
	30   1222  SEND_VAR_EX/66            ?112      16?13                ?3                  	;0
	31   1222  FETCH_CONSTANT/99         #32=      ?0                   17:'TEST_PHP_SRCDIR'	;16
	32   1222  SEND_VAL_EX/116           ?128      #32                  ?4                  	;0
	33   1222  SEND_VAR_EX/66            ?144      16?8                 ?5                  	;0
	34   1222  SEND_VAL_EX/116           ?160      20:array (
  'suppress_errors' => true,
) ?6                  	;0
	35   1222  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	36   1222  ASSIGN/38                 ?13       16?12                $33                 	;0
	37   1224  BOOL_NOT/13               #35=      16?12                ?0                  	;0
	38   1224  JMPZ/43                   ?0        #35                  ?40                 	;0	>>40
	39   1225  RETURN/62                 ?0        21:false             ?0                  	;0
	40   1228  JMPZ/43                   ?0        16?3                 ?56                 	;0	>>56	<<38
	41   1229  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'is_null'        	;1
	42   1229  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	43   1229  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	44   1229  BOOL_NOT/13               #37=      $36                  ?0                  	;0
	45   1229  JMPZ/43                   ?0        #37                  ?51                 	;0	>>51
	46   1230  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'fwrite'         	;2
	47   1230  FETCH_DIM_FUNC_ARG/93     $38=      16?13                26:0                	;1
	48   1230  SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
	49   1230  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	50   1230  DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
	51   1232  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'fclose'         	;1	<<45
	52   1232  FETCH_DIM_FUNC_ARG/93     $40=      16?13                29:0                	;1
	53   1232  SEND_VAR_EX/66            ?80       $40                  ?1                  	;0
	54   1232  DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
	55   1233  UNSET_DIM/75              ?0        16?13                30:0                	;0
	56   1236  JMPZ/43                   ?0        16?6                 ?59                 	;0	>>59	<<40
	57   1236  QM_ASSIGN/22              #42=      31:300               ?0                  	;0
	58   1236  JMP/42                    ?0        ?63                  ?0                  	;0	>>63
	59   1236  FETCH_DIM_IS/90           $43=      16?1                 32:'TEST_TIMEOUT'   	;0	<<56
	60   1236  COALESCE/169              #44=      $43                  ?62                 	;0
	61   1236  QM_ASSIGN/22              #44=      33:60                ?0                  	;0
	62   1236  QM_ASSIGN/22              #42=      #44                  ?0                  	;0
	63   1236  ASSIGN/38                 ?24       16?14                #42                 	;0	<<58
	64   1238  JMP/42                    ?0        ?116                 ?0                  	;0	>>116
	65   1240  ASSIGN/38                 ?25       16?15                16?13               	;0	<<116
	66   1241  ASSIGN/38                 ?26       16?16                34:NULL             	;0
	67   1242  ASSIGN/38                 ?27       16?17                35:NULL             	;0
	68   1244  BEGIN_SILENCE/57          #49=      ?0                   ?0                  	;0
	69   1244  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'stream_select'  	;4
	70   1244  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	71   1244  SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
	72   1244  SEND_VAR_EX/66            ?112      16?17                ?3                  	;0
	73   1244  SEND_VAR_EX/66            ?128      16?14                ?4                  	;0
	74   1244  DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
	75   1244  END_SILENCE/58            ?0        #49                  ?0                  	;0
	76   1244  ASSIGN/38                 ?30       16?18                $50                 	;0
	77   1246  IS_IDENTICAL/15           #52=      16?18                38:false            	;0
	78   1246  JMPZ/43                   ?0        #52                  ?81                 	;0	>>81
	79   1247  BRK/254                   ?0        ?117                 0:1                 	;0
	80   1247  CONT/255                  ?0        ?116                 0:1                 	;0
	81   1248  IS_IDENTICAL/15           #53=      16?18                39:0                	;0	<<78
	82   1248  JMPZ/43                   ?0        #53                  ?90                 	;0	>>90
	83   1250  ASSIGN_CONCAT/30          ?33       16?7                 40:'
 ** ERROR: process timed out **
'	;0
	84   1251  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'proc_terminate' 	;2
	85   1251  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	86   1251  SEND_VAL_EX/116           ?96       43:9                 ?2                  	;0
	87   1251  DO_FCALL_BY_NAME/131      ?34       ?0                   ?0                  	;0
	88   1252  RETURN/62                 ?0        16?7                 ?0                  	;0
	89   1252  CONT/255                  ?0        ?116                 0:1                 	;0
	90   1253  IS_SMALLER/19             #56=      44:0                 16?18               	;0	<<82
	91   1253  JMPZ/43                   ?0        #56                  ?116                	;0	>>116
	92   1254  JMPZ/43                   ?0        16?4                 ?100                	;0	>>100
	93   1255  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'fread'          	;2
	94   1255  FETCH_DIM_FUNC_ARG/93     $57=      16?13                47:1                	;1
	95   1255  SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
	96   1255  SEND_VAL_EX/116           ?96       48:8192              ?2                  	;0
	97   1255  DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
	98   1255  ASSIGN/38                 ?38       16?19                $58                 	;0
	99   1255  JMP/42                    ?0        ?109                 ?0                  	;0	>>109
	100  1256  JMPZ/43                   ?0        16?5                 ?108                	;0	>>108	<<92
	101  1257  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'fread'          	;2
	102  1257  FETCH_DIM_FUNC_ARG/93     $60=      16?13                51:2                	;1
	103  1257  SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
	104  1257  SEND_VAL_EX/116           ?96       52:8192              ?2                  	;0
	105  1257  DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
	106  1257  ASSIGN/38                 ?41       16?19                $61                 	;0
	107  1257  JMP/42                    ?0        ?109                 ?0                  	;0	>>109
	108  1259  ASSIGN/38                 ?42       16?19                53:''               	;0	<<100
	109  1261  INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'strlen'         	;1	<<99,107
	110  1261  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	111  1261  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
	112  1261  IS_EQUAL/17               #65=      $64                  56:0                	;0
	113  1261  JMPZ/43                   ?0        #65                  ?115                	;0	>>115
	114  1263  BRK/254                   ?0        ?117                 0:1                 	;0
	115  1265  ASSIGN_CONCAT/30          ?45       16?7                 16?19               	;0	<<113
	116  1238  JMPNZ/44                  ?0        57:true              ?65                 	;0	>>65	<<64,91
	117  1269  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'proc_get_status'	;1
	118  1269  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	119  1269  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
	120  1269  ASSIGN/38                 ?47       16?20                $67                 	;0
	121  1271  FETCH_DIM_R/81            $69=      16?20                60:'signaled'       	;0
	122  1271  JMPZ/43                   ?0        $69                  ?127                	;0	>>127
	123  1272  FETCH_DIM_R/81            $70=      16?20                61:'stopsig'        	;0
	124  1272  CONCAT/8                  #71=      62:'
Termsig='       $70                 	;0
	125  1272  CONCAT/8                  #72=      #71                  63:'
'              	;0
	126  1272  ASSIGN_CONCAT/30          ?52       16?7                 #72                 	;0
	127  1274  FETCH_DIM_R/81            $74=      16?20                64:'exitcode'       	;0	<<122
	128  1274  IS_SMALLER/19             #75=      65:128               $74                 	;0
	129  1274  JMPZ_EX/46                #75=      #75                  ?133                	;0	>>133
	130  1274  FETCH_DIM_R/81            $76=      16?20                66:'exitcode'       	;0
	131  1274  IS_SMALLER/19             #77=      $76                  67:160              	;0
	132  1274  BOOL/52                   #75=      #77                  ?0                  	;0
	133  1274  JMPZ/43                   ?0        #75                  ?139                	;0	>>139	<<129
	134  1275  FETCH_DIM_R/81            $78=      16?20                68:'exitcode'       	;0
	135  1275  SUB/2                     #79=      $78                  69:128              	;0
	136  1275  CONCAT/8                  #80=      70:'
Termsig='       #79                 	;0
	137  1275  CONCAT/8                  #81=      #80                  71:'
'              	;0
	138  1275  ASSIGN_CONCAT/30          ?61       16?7                 #81                 	;0
	139  1278  INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'proc_close'     	;1	<<133
	140  1278  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	141  1278  DO_FCALL_BY_NAME/131      ?62       ?0                   ?0                  	;0
	142  1279  RETURN/62                 ?0        16?7                 ?0                  	;0
	143  1280  NOP/0                     ?0        74:NULL              ?0                  	;4294967295
	*/
}

function run_all_tests($test_files, $env, $redir_tested)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1282  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1282  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    1282  RECV_INIT/64              16?2=     ?3                   0:NULL              	;0
	3    1284  BIND_GLOBAL/168           ?0        16?3                 1:'test_results'    	;0
	4    1284  BIND_GLOBAL/168           ?0        16?4                 2:'failed_tests_file'	;0
	5    1284  BIND_GLOBAL/168           ?0        16?5                 3:'result_tests_file'	;0
	6    1284  BIND_GLOBAL/168           ?0        16?6                 4:'php'             	;0
	7    1284  BIND_GLOBAL/168           ?0        16?7                 5:'test_idx'        	;0
	8    1286  BIND_GLOBAL/168           ?0        16?8                 6:'PHP_FAILED_TESTS'	;0
	9    1286  BIND_GLOBAL/168           ?0        16?9                 7:'workers'         	;0
	10   1286  BIND_GLOBAL/168           ?0        16?10                8:'workerID'        	;0
	11   1286  BIND_GLOBAL/168           ?0        16?11                9:'workerSock'      	;0
	12   1288  IS_NOT_IDENTICAL/16       #16=      16?9                 10:NULL             	;0
	13   1288  JMPZ_EX/46                #16=      #16                  ?16                 	;0	>>16
	14   1288  BOOL_NOT/13               #17=      16?10                ?0                  	;0
	15   1288  BOOL/52                   #16=      #17                  ?0                  	;0
	16   1288  JMPZ/43                   ?0        #16                  ?23                 	;0	>>23	<<13
	17   1289  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'run_all_tests_parallel'	;3
	18   1289  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	19   1289  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	20   1289  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
	21   1289  DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
	22   1290  RETURN/62                 ?0        13:NULL              ?0                  	;0
	23   1293  FE_RESET_R/77             $19=      16?0                 ?118                	;0	<<16
	24   1293  FE_FETCH_R/78             ?0        $19                  16?12               	;118	>>118	<<117
	25   1294  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'is_array'       	;1
	26   1294  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	27   1294  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	28   1294  JMPZ/43                   ?0        $20                  ?40                 	;0	>>40
	29   1295  FETCH_DIM_R/81            $21=      16?12                16:1                	;0
	30   1295  ROPE_INIT/54              #24=      ?0                   17:'# '             	;4
	31   1295  ROPE_ADD/55               #24=      #24                  $21                 	;1
	32   1295  FETCH_DIM_R/81            $22=      16?12                18:0                	;0
	33   1295  ROPE_ADD/55               #24=      #24                  19:': '             	;2
	34   1295  ROPE_END/56               #23=      #24                  $22                 	;3
	35   1295  ASSIGN/38                 ?10       16?13                #23                 	;0
	36   1297  JMPZ/43                   ?0        16?2                 ?39                 	;0	>>39
	37   1298  FETCH_DIM_R/81            $27=      16?12                20:0                	;0
	38   1298  ASSIGN/38                 ?12       16?12                $27                 	;0
	39   1298  JMP/42                    ?0        ?48                  ?0                  	;0	>>48	<<36
	40   1300  JMPZ/43                   ?0        16?2                 ?47                 	;0	>>47	<<28
	41   1301  ROPE_INIT/54              #30=      ?0                   21:'# '             	;4
	42   1301  ROPE_ADD/55               #30=      #30                  16?2                	;1
	43   1301  ROPE_ADD/55               #30=      #30                  22:': '             	;2
	44   1301  ROPE_END/56               #29=      #30                  16?12               	;3
	45   1301  ASSIGN/38                 ?16       16?13                #29                 	;0
	46   1301  JMP/42                    ?0        ?48                  ?0                  	;0	>>48
	47   1303  ASSIGN/38                 ?17       16?13                16?12               	;0	<<40
	48   1305  POST_INC/36               #34=      16?7                 ?0                  	;0	<<39,46
	49   1305  FREE/70                   ?0        #34                  ?0                  	;0
	50   1307  JMPZ/43                   ?0        16?10                ?54                 	;0	>>54
	51   1308  ASSIGN/38                 ?19       16?8                 23:array (
  'BORKED' => 
  array (
  ),
  'FAILED' => 
  array (
  ),
  'WARNED' => 
  array (
  ),
  'LEAKED' => 
  array (
  ),
  'XFAILED' => 
  array (
  ),
  'XLEAKED' => 
  array (
  ),
  'SLOW' => 
  array (
  ),
)	;0
	52   1309  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'ob_start'       	;0
	53   1309  DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
	54   1312  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'run_test'       	;3	<<50
	55   1312  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	56   1312  SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
	57   1312  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
	58   1312  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
	59   1312  ASSIGN/38                 ?22       16?14                $37                 	;0
	60   1313  JMPZ/43                   ?0        16?10                ?64                 	;0	>>64
	61   1314  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'ob_get_clean'   	;0
	62   1314  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
	63   1314  ASSIGN/38                 ?24       16?15                $39                 	;0
	64   1317  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'is_array'       	;1	<<60
	65   1317  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	66   1317  DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
	67   1317  BOOL_NOT/13               #42=      $41                  ?0                  	;0
	68   1317  JMPZ_EX/46                #42=      #42                  ?71                 	;0	>>71
	69   1317  IS_NOT_EQUAL/18           #43=      16?14                32:'REDIR'          	;0
	70   1317  BOOL/52                   #42=      #43                  ?0                  	;0
	71   1317  JMPZ/43                   ?0        #42                  ?117                	;0	>>117	<<68
	72   1318  JMPZ/43                   ?0        16?10                ?84                 	;0	>>84
	73   1319  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'send_message'   	;2
	74   1319  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	75   1320  INIT_ARRAY/71             #44=      35:'test_result'     36:'type'           	;26
	76   1321  ADD_ARRAY_ELEMENT/72      #44=      16?12                37:'name'           	;0
	77   1322  ADD_ARRAY_ELEMENT/72      #44=      16?13                38:'index'          	;0
	78   1323  ADD_ARRAY_ELEMENT/72      #44=      16?14                39:'result'         	;0
	79   1324  ADD_ARRAY_ELEMENT/72      #44=      16?15                40:'text'           	;0
	80   1325  ADD_ARRAY_ELEMENT/72      #44=      16?8                 41:'PHP_FAILED_TESTS'	;0
	81   1325  SEND_VAL_EX/116           ?96       #44                  ?2                  	;0
	82   1325  DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
	83   1327  CONT/255                  ?0        ?24                  0:1                 	;0
	84   1330  ASSIGN_DIM/147            ?30       16?3                 16?13               	;0	<<72
	85   1330  OP_DATA/137               ?0        16?14                ?0                  	;0
	86   1331  JMPZ_EX/46                #47=      16?4                 ?101                	;0	>>101
	87   1331  IS_EQUAL/17               #48=      16?14                42:'XFAILED'        	;0
	88   1331  JMPNZ_EX/47               #48=      #48                  ?91                 	;0	>>91
	89   1331  IS_EQUAL/17               #49=      16?14                43:'XLEAKED'        	;0
	90   1331  BOOL/52                   #48=      #49                  ?0                  	;0
	91   1331  JMPNZ_EX/47               #48=      #48                  ?94                 	;0	>>94	<<88
	92   1331  IS_EQUAL/17               #50=      16?14                44:'FAILED'         	;0
	93   1331  BOOL/52                   #48=      #50                  ?0                  	;0
	94   1331  JMPNZ_EX/47               #48=      #48                  ?97                 	;0	>>97	<<91
	95   1331  IS_EQUAL/17               #51=      16?14                45:'WARNED'         	;0
	96   1331  BOOL/52                   #48=      #51                  ?0                  	;0
	97   1331  JMPNZ_EX/47               #48=      #48                  ?100                	;0	>>100	<<94
	98   1331  IS_EQUAL/17               #52=      16?14                46:'LEAKED'         	;0
	99   1331  BOOL/52                   #48=      #52                  ?0                  	;0
	100  1331  BOOL/52                   #47=      #48                  ?0                  	;0	<<97
	101  1331  JMPZ/43                   ?0        #47                  ?108                	;0	>>108	<<86
	102  1332  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'fwrite'         	;2
	103  1332  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	104  1332  NOP/0                     ?0        ?0                   ?0                  	;0
	105  1332  FAST_CONCAT/53            #53=      16?13                49:'
'              	;0
	106  1332  SEND_VAL_EX/116           ?96       #53                  ?2                  	;0
	107  1332  DO_FCALL_BY_NAME/131      ?38       ?0                   ?0                  	;0
	108  1334  JMPZ/43                   ?0        16?5                 ?117                	;0	>>117	<<101
	109  1335  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'fwrite'         	;2
	110  1335  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	111  1335  ROPE_INIT/54              #56=      ?0                   16?14               	;4
	112  1335  ROPE_ADD/55               #56=      #56                  52:'	'              	;1
	113  1335  ROPE_ADD/55               #56=      #56                  16?13               	;2
	114  1335  ROPE_END/56               #55=      #56                  53:'
'              	;3
	115  1335  SEND_VAL_EX/116           ?96       #55                  ?2                  	;0
	116  1335  DO_FCALL_BY_NAME/131      ?42       ?0                   ?0                  	;0
	117  1335  JMP/42                    ?0        ?24                  ?0                  	;0	>>24	<<71,108
	118  1335  FE_FREE/127               ?0        $19                  ?0                  	;0	<<23
	119  1339  NOP/0                     ?0        54:NULL              ?0                  	;4294967295
	*/
}

/** The heart of parallel testing. */
function run_all_tests_parallel($test_files, $env, $redir_tested)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1342  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1342  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    1342  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    1343  BIND_GLOBAL/168           ?0        16?3                 0:'workers'         	;0
	4    1343  BIND_GLOBAL/168           ?0        16?4                 1:'test_idx'        	;0
	5    1343  BIND_GLOBAL/168           ?0        16?5                 2:'test_cnt'        	;0
	6    1343  BIND_GLOBAL/168           ?0        16?6                 3:'test_results'    	;0
	7    1343  BIND_GLOBAL/168           ?0        16?7                 4:'failed_tests_file'	;0
	8    1343  BIND_GLOBAL/168           ?0        16?8                 5:'result_tests_file'	;0
	9    1343  BIND_GLOBAL/168           ?0        16?9                 6:'PHP_FAILED_TESTS'	;0
	10   1343  BIND_GLOBAL/168           ?0        16?10                7:'shuffle'         	;0
	11   1343  BIND_GLOBAL/168           ?0        16?11                8:'SHOW_ONLY_GROUPS'	;0
	12   1347  FETCH_CONSTANT/99         #61=      ?0                   9:'PHP_BINARY'      	;16
	13   1347  ASSIGN/38                 ?1        16?12                #61                 	;0
	14   1348  ASSIGN/38                 ?2        16?13                12:'bin\\php\\lib\\php\\build\\run-tests.php'	;0
	15   1350  ASSIGN/38                 ?3        16?14                13:array (
)        	;0
	16   1351  ASSIGN/38                 ?4        16?15                14:array (
)        	;0
	17   1353  ECHO/40                   ?0        15:'=====================================================================
' ?0                  	;0
	18   1354  ECHO/40                   ?0        16:'========= WELCOME TO THE FUTURE: run-tests PARALLEL EDITION =========
' ?0                  	;0
	19   1355  ECHO/40                   ?0        17:'=====================================================================
' ?0                  	;0
	20   1360  ASSIGN/38                 ?5        16?16                18:array (
)        	;0
	21   1361  ASSIGN/38                 ?6        16?17                19:array (
)        	;0
	22   1362  ASSIGN/38                 ?7        16?18                20:array (
)        	;0
	23   1363  FE_RESET_R/77             $69=      16?0                 ?80                 	;0
	24   1363  FE_FETCH_R/78             #70=      $69                  16?19               	;80	>>80	<<79
	25   1363  ASSIGN/38                 ?10       16?20                #70                 	;0
	26   1364  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'file_get_contents'	;1
	27   1364  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	28   1364  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
	29   1364  ASSIGN/38                 ?12       16?21                $72                 	;0
	30   1365  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'preg_match'     	;3
	31   1365  SEND_VAL_EX/116           ?80       25:'/^--CONFLICTS--(.+?)^--/ms' ?1                  	;0
	32   1365  SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
	33   1365  SEND_VAR_EX/66            ?112      16?22                ?3                  	;0
	34   1365  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
	35   1365  JMPZ/43                   ?0        $74                  ?42                 	;0	>>42
	36   1366  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'parse_conflicts'	;1
	37   1366  FETCH_DIM_FUNC_ARG/93     $75=      16?22                28:1                	;1
	38   1366  SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
	39   1366  DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
	40   1366  ASSIGN/38                 ?16       16?23                $76                 	;0
	41   1366  JMP/42                    ?0        ?68                  ?0                  	;0	>>68
	42   1369  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'dirname'        	;1	<<35
	43   1369  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	44   1369  DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
	45   1369  ASSIGN/38                 ?18       16?24                $78                 	;0
	46   1370  ISSET_ISEMPTY_DIM_OBJ/115 #80=      16?16                16?24               	;33554432
	47   1370  BOOL_NOT/13               #81=      #80                  ?0                  	;0
	48   1370  JMPZ/43                   ?0        #81                  ?66                 	;0	>>66
	49   1371  ASSIGN/38                 ?21       16?25                31:array (
)        	;0
	50   1372  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'file_exists'    	;1
	51   1372  CONCAT/8                  #83=      16?24                34:'/CONFLICTS'     	;0
	52   1372  SEND_VAL_EX/116           ?80       #83                  ?1                  	;0
	53   1372  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
	54   1372  JMPZ/43                   ?0        $84                  ?64                 	;0	>>64
	55   1373  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'file_get_contents'	;1
	56   1373  CONCAT/8                  #85=      16?24                37:'/CONFLICTS'     	;0
	57   1373  SEND_VAL_EX/116           ?80       #85                  ?1                  	;0
	58   1373  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
	59   1373  ASSIGN/38                 ?26       16?21                $86                 	;0
	60   1374  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'parse_conflicts'	;1
	61   1374  SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
	62   1374  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
	63   1374  ASSIGN/38                 ?28       16?25                $88                 	;0
	64   1376  ASSIGN_DIM/147            ?29       16?16                16?24               	;0	<<54
	65   1376  OP_DATA/137               ?0        16?25                ?0                  	;0
	66   1378  FETCH_DIM_R/81            $91=      16?16                16?24               	;0	<<48
	67   1378  ASSIGN/38                 ?31       16?23                $91                 	;0
	68   1383  INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'in_array'       	;3	<<41
	69   1383  SEND_VAL_EX/116           ?80       42:'all'             ?1                  	;0
	70   1383  SEND_VAR_EX/66            ?96       16?23                ?2                  	;0
	71   1383  SEND_VAL_EX/116           ?112      43:true              ?3                  	;0
	72   1383  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
	73   1383  JMPZ/43                   ?0        $93                  ?77                 	;0	>>77
	74   1384  ASSIGN_DIM/147            ?33       16?18                ?2670193968         	;0
	75   1384  OP_DATA/137               ?0        16?19                ?0                  	;0
	76   1385  UNSET_DIM/75              ?0        16?0                 16?20               	;0
	77   1388  ASSIGN_DIM/147            ?34       16?17                16?19               	;0	<<73
	78   1388  OP_DATA/137               ?0        16?23                ?0                  	;0
	79   1388  JMP/42                    ?0        ?24                  ?0                  	;0	>>24
	80   1388  FE_FREE/127               ?0        $69                  ?0                  	;0	<<23
	81   1394  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'array_reverse'  	;1
	82   1394  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	83   1394  DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
	84   1394  ASSIGN/38                 ?36       16?0                 $96                 	;0
	85   1397  JMPZ/43                   ?0        16?10                ?89                 	;0	>>89
	86   1398  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'shuffle'        	;1
	87   1398  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	88   1398  DO_FCALL_BY_NAME/131      ?37       ?0                   ?0                  	;0
	89   1401  ECHO/40                   ?0        48:'Spawning workers… ' ?0                  	;0	<<85
	90   1405  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'stream_socket_server'	;1
	91   1405  SEND_VAL_EX/116           ?80       51:'tcp://127.0.0.1:0' ?1                  	;0
	92   1405  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
	93   1405  ASSIGN/38                 $100=     16?26                $99                 	;0
	94   1405  JMPNZ_EX/47               #101=     $100                 ?99                 	;0	>>99
	95   1405  INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'error'          	;1
	96   1405  SEND_VAL_EX/116           ?80       54:'Couldn\'t create socket on localhost.' ?1                  	;0
	97   1405  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
	98   1405  BOOL/52                   #101=     $102                 ?0                  	;0
	99   1406  INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'stream_socket_get_name'	;2	<<94
	100  1406  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	101  1406  SEND_VAL_EX/116           ?96       57:false             ?2                  	;0
	102  1406  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
	103  1406  ASSIGN/38                 ?43       16?27                $103                	;0
	104  1408  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'strrpos'        	;2
	105  1408  SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	106  1408  SEND_VAL_EX/116           ?96       60:':'               ?2                  	;0
	107  1408  DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
	108  1408  ASSIGN/38                 ?45       16?28                $105                	;0
	109  1409  INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'substr'         	;3
	110  1409  SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	111  1409  SEND_VAL_EX/116           ?96       63:0                 ?2                  	;0
	112  1409  SEND_VAR_EX/66            ?112      16?28                ?3                  	;0
	113  1409  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
	114  1409  ASSIGN/38                 ?47       16?29                $107                	;0
	115  1410  INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'strpos'         	;2
	116  1410  SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	117  1410  SEND_VAL_EX/116           ?96       66:':'               ?2                  	;0
	118  1410  DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
	119  1410  IS_NOT_IDENTICAL/16       #110=     67:false             $109                	;0
	120  1410  JMPZ/43                   ?0        #110                 ?125                	;0	>>125
	121  1411  ROPE_INIT/54              #112=     ?0                   68:'['              	;3
	122  1411  ROPE_ADD/55               #112=     #112                 16?29               	;1
	123  1411  ROPE_END/56               #111=     #112                 69:']'              	;2
	124  1411  ASSIGN/38                 ?53       16?29                #111                	;0
	125  1413  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'substr'         	;2	<<120
	126  1413  SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	127  1413  ADD/1                     #115=     16?28                72:1                	;0
	128  1413  SEND_VAL_EX/116           ?96       #115                 ?2                  	;0
	129  1413  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
	130  1413  ASSIGN/38                 ?56       16?30                $116                	;0
	131  1414  ROPE_INIT/54              #119=     ?0                   73:'tcp://'         	;4
	132  1414  ROPE_ADD/55               #119=     #119                 16?29               	;1
	133  1414  ROPE_ADD/55               #119=     #119                 74:':'              	;2
	134  1414  ROPE_END/56               #118=     #119                 16?30               	;3
	135  1414  ASSIGN/38                 ?60       16?31                #118                	;0
	136  1416  ASSIGN/38                 ?61       16?20                75:1                	;0
	137  1416  JMP/42                    ?0        ?285                 ?0                  	;0	>>285
	138  1417  INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'proc_open'      	;6	<<286
	139  1418  CONCAT/8                  #123=     16?12                78:' '              	;0
	140  1418  INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'escapeshellarg' 	;1
	141  1418  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
	142  1418  DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
	143  1418  CONCAT/8                  #125=     #123                 $124                	;0
	144  1418  SEND_VAL_EX/116           ?80       #125                 ?1                  	;0
	145  1419  SEND_VAL_EX/116           ?96       81:array (
)         ?2                  	;0
	146  1420  SEND_VAR_EX/66            ?112      16?33                ?3                  	;0
	147  1421  SEND_VAL_EX/116           ?128      82:NULL              ?4                  	;0
	148  1422  FETCH_R/80                $126=     83:'_ENV'            ?0                  	;0
	149  1423  INIT_ARRAY/71             #127=     16?20                84:'TEST_PHP_WORKER'	;10
	150  1424  ADD_ARRAY_ELEMENT/72      #127=     16?31                85:'TEST_PHP_URI'   	;0
	151  1424  ADD/1                     #128=     $126                 #127                	;0
	152  1424  SEND_VAL_EX/116           ?144      #128                 ?5                  	;0
	153  1427  SEND_VAL_EX/116           ?160      86:array (
  'suppress_errors' => true,
  'create_new_console' => true,
) ?6                  	;0
	154  1427  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
	155  1427  ASSIGN/38                 ?69       16?32                $129                	;0
	156  1431  IS_IDENTICAL/15           #131=     16?32                87:false            	;0
	157  1431  JMPZ/43                   ?0        #131                 ?166                	;0	>>166
	158  1432  INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'kill_children'  	;1
	159  1432  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	160  1432  DO_FCALL_BY_NAME/131      ?71       ?0                   ?0                  	;0
	161  1433  INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'error'          	;1
	162  1433  NOP/0                     ?0        ?0                   ?0                  	;0
	163  1433  FAST_CONCAT/53            #133=     92:'Failed to spawn worker ' 16?20               	;0
	164  1433  SEND_VAL_EX/116           ?80       #133                 ?1                  	;0
	165  1433  DO_FCALL_BY_NAME/131      ?73       ?0                   ?0                  	;0
	166  1435  ASSIGN_DIM/147            ?74       16?14                16?20               	;0	<<157
	167  1435  OP_DATA/137               ?0        16?32                ?0                  	;0
	168  1437  INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'stream_socket_accept'	;2
	169  1437  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	170  1437  SEND_VAL_EX/116           ?96       95:5                 ?2                  	;0
	171  1437  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
	172  1437  ASSIGN/38                 ?76       16?34                $136                	;0
	173  1438  IS_IDENTICAL/15           #138=     16?34                96:false            	;0
	174  1438  JMPZ/43                   ?0        #138                 ?183                	;0	>>183
	175  1439  INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'kill_children'  	;1
	176  1439  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	177  1439  DO_FCALL_BY_NAME/131      ?78       ?0                   ?0                  	;0
	178  1440  INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'error'          	;1
	179  1440  NOP/0                     ?0        ?0                   ?0                  	;0
	180  1440  FAST_CONCAT/53            #140=     101:'Failed to accept connection from worker ' 16?20               	;0
	181  1440  SEND_VAL_EX/116           ?80       #140                 ?1                  	;0
	182  1440  DO_FCALL_BY_NAME/131      ?80       ?0                   ?0                  	;0
	183  1443  INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'base64_encode' 	;1	<<174
	184  1443  INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'serialize'     	;1
	185  1444  INIT_ARRAY/71             #142=     106:'hello'          107:'type'          	;18
	186  1445  ADD_ARRAY_ELEMENT/72      #142=     16?20                108:'workerID'      	;0
	187  1446  FETCH_R/80                $143=     109:'GLOBALS'        ?0                  	;0
	188  1446  ADD_ARRAY_ELEMENT/72      #142=     $143                 110:'GLOBALS'       	;0
	189  1448  FETCH_CONSTANT/99         #144=     ?0                   111:'INIT_DIR'      	;16
	190  1448  INIT_ARRAY/71             #145=     #144                 114:'INIT_DIR'      	;26
	191  1449  FETCH_CONSTANT/99         #146=     ?0                   115:'TEST_PHP_SRCDIR'	;16
	192  1449  ADD_ARRAY_ELEMENT/72      #145=     #146                 118:'TEST_PHP_SRCDIR'	;0
	193  1450  FETCH_CONSTANT/99         #147=     ?0                   119:'PHP_QA_EMAIL'  	;16
	194  1450  ADD_ARRAY_ELEMENT/72      #145=     #147                 122:'PHP_QA_EMAIL'  	;0
	195  1451  FETCH_CONSTANT/99         #148=     ?0                   123:'QA_SUBMISSION_PAGE'	;16
	196  1451  ADD_ARRAY_ELEMENT/72      #145=     #148                 126:'QA_SUBMISSION_PAGE'	;0
	197  1452  FETCH_CONSTANT/99         #149=     ?0                   127:'QA_REPORTS_PAGE'	;16
	198  1452  ADD_ARRAY_ELEMENT/72      #145=     #149                 130:'QA_REPORTS_PAGE'	;0
	199  1453  FETCH_CONSTANT/99         #150=     ?0                   131:'TRAVIS_CI'     	;16
	200  1453  ADD_ARRAY_ELEMENT/72      #145=     #150                 134:'TRAVIS_CI'     	;0
	201  1453  ADD_ARRAY_ELEMENT/72      #142=     #145                 135:'constants'     	;0
	202  1453  SEND_VAL_EX/116           ?80       #142                 ?1                  	;0
	203  1453  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
	204  1453  SEND_VAR_NO_REF_EX/50     ?80       $151                 ?1                  	;0
	205  1453  DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
	206  1455  CONCAT/8                  #153=     $152                 136:'
'             	;0
	207  1455  ASSIGN/38                 ?93       16?35                #153                	;0
	208  1457  INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'stream_set_timeout'	;2
	209  1457  SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
	210  1457  SEND_VAL_EX/116           ?96       139:5                ?2                  	;0
	211  1457  DO_FCALL_BY_NAME/131      ?94       ?0                   ?0                  	;0
	212  1458  INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'fwrite'        	;2
	213  1458  SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
	214  1458  SEND_VAR_EX/66            ?96       16?35                ?2                  	;0
	215  1458  DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
	216  1458  IS_IDENTICAL/15           #157=     $156                 142:false           	;0
	217  1458  JMPZ/43                   ?0        #157                 ?227                	;0	>>227
	218  1459  INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'kill_children' 	;1
	219  1459  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	220  1459  DO_FCALL_BY_NAME/131      ?97       ?0                   ?0                  	;0
	221  1460  INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'error'         	;1
	222  1460  ROPE_INIT/54              #160=     ?0                   147:'Failed to send greeting to worker '	;3
	223  1460  ROPE_ADD/55               #160=     #160                 16?20               	;1
	224  1460  ROPE_END/56               #159=     #160                 148:'.'             	;2
	225  1460  SEND_VAL_EX/116           ?80       #159                 ?1                  	;0
	226  1460  DO_FCALL_BY_NAME/131      ?101      ?0                   ?0                  	;0
	227  1463  INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'fgets'         	;1	<<217
	228  1463  SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
	229  1463  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
	230  1463  ASSIGN/38                 ?103      16?36                $163                	;0
	231  1464  IS_IDENTICAL/15           #165=     16?36                151:false           	;0
	232  1464  JMPZ/43                   ?0        #165                 ?242                	;0	>>242
	233  1465  INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'kill_children' 	;1
	234  1465  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	235  1465  DO_FCALL_BY_NAME/131      ?105      ?0                   ?0                  	;0
	236  1466  INIT_FCALL_BY_NAME/59     ?0        ?0                   154:'error'         	;1
	237  1466  ROPE_INIT/54              #168=     ?0                   156:'Failed to read greeting reply from worker '	;3
	238  1466  ROPE_ADD/55               #168=     #168                 16?20               	;1
	239  1466  ROPE_END/56               #167=     #168                 157:'.'             	;2
	240  1466  SEND_VAL_EX/116           ?80       #167                 ?1                  	;0
	241  1466  DO_FCALL_BY_NAME/131      ?109      ?0                   ?0                  	;0
	242  1469  INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'unserialize'   	;1	<<232
	243  1469  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'base64_decode' 	;1
	244  1469  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	245  1469  DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
	246  1469  SEND_VAR_NO_REF_EX/50     ?80       $171                 ?1                  	;0
	247  1469  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
	248  1469  ASSIGN/38                 ?112      16?37                $172                	;0
	249  1470  BOOL_NOT/13               #174=     16?37                ?0                  	;0
	250  1470  JMPNZ_EX/47               #174=     #174                 ?254                	;0	>>254
	251  1470  FETCH_DIM_R/81            $175=     16?37                162:'type'          	;0
	252  1470  IS_NOT_IDENTICAL/16       #176=     $175                 163:'hello_reply'   	;0
	253  1470  BOOL/52                   #174=     #176                 ?0                  	;0
	254  1470  JMPNZ_EX/47               #174=     #174                 ?258                	;0	>>258	<<250
	255  1470  FETCH_DIM_R/81            $177=     16?37                164:'workerID'      	;0
	256  1470  IS_NOT_IDENTICAL/16       #178=     $177                 16?20               	;0
	257  1470  BOOL/52                   #174=     #178                 ?0                  	;0
	258  1470  JMPZ/43                   ?0        #174                 ?270                	;0	>>270	<<254
	259  1471  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'kill_children' 	;1
	260  1471  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	261  1471  DO_FCALL_BY_NAME/131      ?118      ?0                   ?0                  	;0
	262  1472  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'error'         	;1
	263  1472  ROPE_INIT/54              #181=     ?0                   169:'Greeting reply from worker '	;5
	264  1472  ROPE_ADD/55               #181=     #181                 16?20               	;1
	265  1472  ROPE_ADD/55               #181=     #181                 170:' unexpected or could not be decoded: \''	;2
	266  1472  ROPE_ADD/55               #181=     #181                 16?36               	;3
	267  1472  ROPE_END/56               #180=     #181                 171:'\''            	;4
	268  1472  SEND_VAL_EX/116           ?80       #180                 ?1                  	;0
	269  1472  DO_FCALL_BY_NAME/131      ?123      ?0                   ?0                  	;0
	270  1475  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'stream_set_timeout'	;2	<<258
	271  1475  SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
	272  1475  SEND_VAL_EX/116           ?96       174:0                ?2                  	;0
	273  1475  DO_FCALL_BY_NAME/131      ?124      ?0                   ?0                  	;0
	274  1476  INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'stream_set_blocking'	;2
	275  1476  SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
	276  1476  SEND_VAL_EX/116           ?96       177:false            ?2                  	;0
	277  1476  DO_FCALL_BY_NAME/131      ?125      ?0                   ?0                  	;0
	278  1478  ASSIGN_DIM/147            ?126      16?15                16?20               	;0
	279  1478  OP_DATA/137               ?0        16?34                ?0                  	;0
	280  1480  NOP/0                     ?0        ?0                   ?0                  	;0
	281  1480  FAST_CONCAT/53            #188=     16?20                178:' '             	;0
	282  1480  ECHO/40                   ?0        #188                 ?0                  	;0
	283  1416  POST_INC/36               #189=     16?20                ?0                  	;0
	284  1416  FREE/70                   ?0        #189                 ?0                  	;0
	285  1416  IS_SMALLER_OR_EQUAL/20    #190=     16?20                16?3                	;0	<<137
	286  1416  JMPNZ/44                  ?0        #190                 ?138                	;0	>>138
	287  1482  ECHO/40                   ?0        179:'… done!
'     ?0                  	;0
	288  1483  ECHO/40                   ?0        180:'=====================================================================
' ?0                  	;0
	289  1484  ECHO/40                   ?0        181:'
'              ?0                  	;0
	290  1486  ASSIGN/38                 ?130      16?38                182:array (
)       	;0
	291  1487  ASSIGN/38                 ?131      16?39                183:0               	;0
	292  1490  ASSIGN/38                 ?132      16?40                184:array (
)       	;0
	293  1492  ASSIGN/38                 ?133      16?41                185:array (
)       	;0
	294  1495  JMP/42                    ?0        ?645                 ?0                  	;0	>>645
	295  1496  INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'array_values'  	;1	<<650
	296  1496  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	297  1496  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
	298  1496  ASSIGN/38                 ?135      16?42                $195                	;0
	299  1497  ASSIGN/38                 ?136      16?43                188:NULL            	;0
	300  1498  ASSIGN/38                 ?137      16?44                189:NULL            	;0
	301  1499  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'stream_select' 	;4
	302  1499  SEND_VAR_EX/66            ?80       16?42                ?1                  	;0
	303  1499  SEND_VAR_EX/66            ?96       16?43                ?2                  	;0
	304  1499  SEND_VAR_EX/66            ?112      16?44                ?3                  	;0
	305  1499  SEND_VAL_EX/116           ?128      192:10               ?4                  	;0
	306  1499  DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
	307  1499  JMPZ/43                   ?0        $199                 ?645                	;0	>>645
	308  1500  FE_RESET_R/77             $200=     16?42                ?644                	;0
	309  1500  FE_FETCH_R/78             ?0        $200                 16?34               	;644	>>644	<<643
	310  1501  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'array_search'  	;2
	311  1501  SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
	312  1501  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
	313  1501  DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
	314  1501  ASSIGN/38                 ?141      16?20                $201                	;0
	315  1502  IS_IDENTICAL/15           #203=     16?20                195:false           	;0
	316  1502  JMPZ/43                   ?0        #203                 ?323                	;0	>>323
	317  1503  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'kill_children' 	;1
	318  1503  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	319  1503  DO_FCALL_BY_NAME/131      ?143      ?0                   ?0                  	;0
	320  1504  INIT_FCALL_BY_NAME/59     ?0        ?0                   198:'error'         	;1
	321  1504  SEND_VAL_EX/116           ?80       200:'Could not find worker stdout in array of worker stdouts, THIS SHOULD NOT HAPPEN.' ?1                  	;0
	322  1504  DO_FCALL_BY_NAME/131      ?144      ?0                   ?0                  	;0
	323  1506  JMP/42                    ?0        ?637                 ?0                  	;0	>>637	<<316
	324  1508  FETCH_DIM_IS/90           $206=     16?38                16?20               	;0	<<642
	325  1508  COALESCE/169              #207=     $206                 ?327                	;0
	326  1508  QM_ASSIGN/22              #207=     201:''               ?0                  	;0
	327  1508  IS_NOT_IDENTICAL/16       #208=     #207                 202:''              	;0
	328  1508  JMPZ/43                   ?0        #208                 ?334                	;0	>>334
	329  1509  FETCH_DIM_R/81            $209=     16?38                16?20               	;0
	330  1509  CONCAT/8                  #210=     $209                 16?45               	;0
	331  1509  ASSIGN/38                 ?150      16?45                #210                	;0
	332  1510  ASSIGN_DIM/147            ?151      16?38                16?20               	;0
	333  1510  OP_DATA/137               ?0        203:''               ?0                  	;0
	334  1512  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'substr'        	;2	<<328
	335  1512  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	336  1512  SEND_VAL_EX/116           ?96       206:-1               ?2                  	;0
	337  1512  DO_FCALL_BY_NAME/131      $213=     ?0                   ?0                  	;0
	338  1512  IS_NOT_IDENTICAL/16       #214=     $213                 207:'
'             	;0
	339  1512  JMPZ/43                   ?0        #214                 ?343                	;0	>>343
	340  1513  ASSIGN_DIM/147            ?154      16?38                16?20               	;0
	341  1513  OP_DATA/137               ?0        16?45                ?0                  	;0
	342  1514  CONT/255                  ?0        ?637                 0:1                 	;0
	343  1517  INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'unserialize'   	;1	<<339
	344  1517  INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'base64_decode' 	;1
	345  1517  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
	346  1517  DO_FCALL_BY_NAME/131      $216=     ?0                   ?0                  	;0
	347  1517  SEND_VAR_NO_REF_EX/50     ?80       $216                 ?1                  	;0
	348  1517  DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
	349  1517  ASSIGN/38                 ?157      16?46                $217                	;0
	350  1518  BOOL_NOT/13               #219=     16?46                ?0                  	;0
	351  1518  JMPZ/43                   ?0        #219                 ?369                	;0	>>369
	352  1519  INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'kill_children' 	;1
	353  1519  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	354  1519  DO_FCALL_BY_NAME/131      ?159      ?0                   ?0                  	;0
	355  1520  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'fread'         	;2
	356  1520  SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
	357  1520  SEND_VAL_EX/116           ?96       216:65536            ?2                  	;0
	358  1520  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
	359  1520  ASSIGN/38                 ?161      16?47                $221                	;0
	360  1521  INIT_FCALL_BY_NAME/59     ?0        ?0                   217:'error'         	;1
	361  1521  ROPE_INIT/54              #224=     ?0                   219:'Could not decode message from worker '	;6
	362  1521  ROPE_ADD/55               #224=     #224                 16?20               	;1
	363  1521  ROPE_ADD/55               #224=     #224                 220:': \''          	;2
	364  1521  ROPE_ADD/55               #224=     #224                 16?45               	;3
	365  1521  ROPE_ADD/55               #224=     #224                 16?47               	;4
	366  1521  ROPE_END/56               #223=     #224                 221:'\''            	;5
	367  1521  SEND_VAL_EX/116           ?80       #223                 ?1                  	;0
	368  1521  DO_FCALL_BY_NAME/131      ?166      ?0                   ?0                  	;0
	369  1524  FETCH_DIM_R/81            $228=     16?46                222:'type'          	;0	<<351
	370  1524  SWITCH_STRING/188         ?0        $228                 223:array (
  'tests_finished' => 382,
  'ready' => 411,
  'test_result' => 490,
  'error' => 582,
  'php_error' => 594,
)	;625
	371  1525  CASE/48                   #229=     $228                 224:'tests_finished'	;0	>>373
	372  1525  JMPNZ/44                  ?0        #229                 ?382                	;0	>>382
	373  1542  CASE/48                   #229=     $228                 225:'ready'         	;0	>>375	<<371
	374  1542  JMPNZ/44                  ?0        #229                 ?411                	;0	>>411
	375  1580  CASE/48                   #229=     $228                 226:'test_result'   	;0	>>377	<<373
	376  1580  JMPNZ/44                  ?0        #229                 ?490                	;0	>>490
	377  1608  CASE/48                   #229=     $228                 227:'error'         	;0	>>379	<<375
	378  1608  JMPNZ/44                  ?0        #229                 ?582                	;0	>>582
	379  1612  CASE/48                   #229=     $228                 228:'php_error'     	;0	>>381	<<377
	380  1612  JMPNZ/44                  ?0        #229                 ?594                	;0	>>594
	381  1612  JMP/42                    ?0        ?625                 ?0                  	;0	>>625	<<379
	382  1526  POST_DEC/37               #230=     16?39                ?0                  	;0	<<372
	383  1526  FREE/70                   ?0        #230                 ?0                  	;0
	384  1527  FE_RESET_R/77             $231=     16?40                ?403                	;0
	385  1527  FE_FETCH_R/78             #232=     $231                 16?48               	;403	>>403	<<402
	386  1527  ASSIGN/38                 ?172      16?49                #232                	;0
	387  1528  IS_IDENTICAL/15           #234=     16?48                16?20               	;0
	388  1528  JMPZ/43                   ?0        #234                 ?402                	;0	>>402
	389  1529  UNSET_DIM/75              ?0        16?40                16?49               	;0
	390  1530  ISSET_ISEMPTY_DIM_OBJ/115 #235=     16?41                16?49               	;33554432
	391  1530  JMPZ/43                   ?0        #235                 ?402                	;0	>>402
	392  1531  JMP/42                    ?0        ?395                 ?0                  	;0	>>395
	393  1532  ASSIGN_DIM/147            ?175      16?0                 ?2670191696         	;0	<<400
	394  1532  OP_DATA/137               ?0        16?50                ?0                  	;0
	395  1531  INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'array_pop'     	;1	<<392
	396  1531  FETCH_DIM_FUNC_ARG/93     $237=     16?41                16?49               	;1
	397  1531  SEND_VAR_EX/66            ?80       $237                 ?1                  	;0
	398  1531  DO_FCALL_BY_NAME/131      $238=     ?0                   ?0                  	;0
	399  1531  ASSIGN/38                 $239=     16?50                $238                	;0
	400  1531  JMPNZ/44                  ?0        $239                 ?393                	;0	>>393
	401  1534  UNSET_DIM/75              ?0        16?41                16?49               	;0
	402  1534  JMP/42                    ?0        ?385                 ?0                  	;0	>>385	<<388,391
	403  1534  FE_FREE/127               ?0        $231                 ?0                  	;0	<<384
	404  1538  INIT_FCALL_BY_NAME/59     ?0        ?0                   231:'junit_enabled' 	;0
	405  1538  DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
	406  1538  JMPZ/43                   ?0        $240                 ?411                	;0	>>411
	407  1539  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'junit_merge_results'	;1
	408  1539  FETCH_DIM_FUNC_ARG/93     $241=     16?46                235:'junit'         	;1
	409  1539  SEND_VAR_EX/66            ?80       $241                 ?1                  	;0
	410  1539  DO_FCALL_BY_NAME/131      ?181      ?0                   ?0                  	;0
	411  1544  INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'count'         	;1	<<374,406
	412  1544  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	413  1544  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
	414  1544  IS_IDENTICAL/15           #244=     $243                 238:1               	;0
	415  1544  JMPZ_EX/46                #244=     #244                 ?417                	;0	>>417
	416  1544  BOOL/52                   #244=     16?18                ?0                  	;0
	417  1544  JMPZ/43                   ?0        #244                 ?424                	;0	>>424	<<415
	418  1545  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'array_merge'   	;2
	419  1545  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	420  1545  SEND_VAR_EX/66            ?96       16?18                ?2                  	;0
	421  1545  DO_FCALL_BY_NAME/131      $245=     ?0                   ?0                  	;0
	422  1545  ASSIGN/38                 ?185      16?0                 $245                	;0
	423  1546  ASSIGN/38                 ?186      16?18                241:array (
)       	;0
	424  1549  ASSIGN/38                 ?187      16?51                242:array (
)       	;0	<<417
	425  1550  JMPZ/43                   ?0        16?10                ?428                	;0	>>428
	426  1550  QM_ASSIGN/22              #249=     243:4                ?0                  	;0
	427  1550  JMP/42                    ?0        ?429                 ?0                  	;0	>>429
	428  1550  QM_ASSIGN/22              #249=     244:32               ?0                  	;0	<<425
	429  1550  ASSIGN/38                 ?189      16?52                #249                	;0	<<427
	430  1551  JMP/42                    ?0        ?445                 ?0                  	;0	>>445
	431  1552  FETCH_DIM_R/81            $251=     16?17                16?19               	;0	<<455
	432  1552  FE_RESET_R/77             $252=     $251                 ?442                	;0
	433  1552  FE_FETCH_R/78             ?0        $252                 16?53               	;442	>>442	<<441
	434  1553  ISSET_ISEMPTY_DIM_OBJ/115 #253=     16?40                16?53               	;33554432
	435  1553  JMPZ/43                   ?0        #253                 ?441                	;0	>>441
	436  1554  FETCH_DIM_W/84            $254=     16?41                16?53               	;0
	437  1554  ASSIGN_DIM/147            ?194      $254                 ?4381411            	;0
	438  1554  OP_DATA/137               ?0        16?19                ?0                  	;0
	439  1555  FE_FREE/127               ?0        $252                 ?15                 	;1
	440  1555  CONT/255                  ?0        ?445                 0:2                 	;0
	441  1555  JMP/42                    ?0        ?433                 ?0                  	;0	>>433	<<435
	442  1555  FE_FREE/127               ?0        $252                 ?0                  	;0	<<432
	443  1558  ASSIGN_DIM/147            ?195      16?51                ?1                  	;0
	444  1558  OP_DATA/137               ?0        16?19                ?0                  	;0
	445  1551  INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'count'         	;1	<<430
	446  1551  SEND_VAR_EX/66            ?80       16?51                ?1                  	;0
	447  1551  DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
	448  1551  IS_SMALLER_OR_EQUAL/20    #258=     $257                 16?52               	;0
	449  1551  JMPZ_EX/46                #258=     #258                 ?455                	;0	>>455
	450  1551  INIT_FCALL_BY_NAME/59     ?0        ?0                   247:'array_pop'     	;1
	451  1551  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	452  1551  DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
	453  1551  ASSIGN/38                 $260=     16?19                $259                	;0
	454  1551  BOOL/52                   #258=     $260                 ?0                  	;0
	455  1551  JMPNZ/44                  ?0        #258                 ?431                	;0	>>431	<<449
	456  1560  JMPZ/43                   ?0        16?51                ?480                	;0	>>480
	457  1561  FE_RESET_R/77             $261=     16?51                ?467                	;0
	458  1561  FE_FETCH_R/78             ?0        $261                 16?19               	;467	>>467	<<466
	459  1562  FETCH_DIM_R/81            $262=     16?17                16?19               	;0
	460  1562  FE_RESET_R/77             $263=     $262                 ?465                	;0
	461  1562  FE_FETCH_R/78             ?0        $263                 16?53               	;465	>>465	<<464
	462  1563  ASSIGN_DIM/147            ?203      16?40                16?53               	;0
	463  1563  OP_DATA/137               ?0        16?20                ?0                  	;0
	464  1563  JMP/42                    ?0        ?461                 ?0                  	;0	>>461
	465  1563  FE_FREE/127               ?0        $263                 ?0                  	;0	<<460
	466  1563  JMP/42                    ?0        ?458                 ?0                  	;0	>>458
	467  1563  FE_FREE/127               ?0        $261                 ?0                  	;0	<<457
	468  1566  POST_INC/36               #265=     16?39                ?0                  	;0
	469  1566  FREE/70                   ?0        #265                 ?0                  	;0
	470  1567  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'send_message'  	;2
	471  1567  FETCH_DIM_FUNC_ARG/93     $266=     16?15                16?20               	;1
	472  1567  SEND_VAR_EX/66            ?80       $266                 ?1                  	;0
	473  1568  INIT_ARRAY/71             #267=     251:'run_tests'      252:'type'          	;18
	474  1569  ADD_ARRAY_ELEMENT/72      #267=     16?51                253:'test_files'    	;0
	475  1570  ADD_ARRAY_ELEMENT/72      #267=     16?1                 254:'env'           	;0
	476  1571  ADD_ARRAY_ELEMENT/72      #267=     16?2                 255:'redir_tested'  	;0
	477  1571  SEND_VAL_EX/116           ?96       #267                 ?2                  	;0
	478  1571  DO_FCALL_BY_NAME/131      ?207      ?0                   ?0                  	;0
	479  1571  JMP/42                    ?0        ?489                 ?0                  	;0	>>489
	480  1574  INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'proc_terminate'	;1	<<456
	481  1574  FETCH_DIM_FUNC_ARG/93     $269=     16?14                16?20               	;1
	482  1574  SEND_VAR_EX/66            ?80       $269                 ?1                  	;0
	483  1574  DO_FCALL_BY_NAME/131      ?209      ?0                   ?0                  	;0
	484  1575  UNSET_DIM/75              ?0        16?14                16?20               	;0
	485  1576  UNSET_DIM/75              ?0        16?15                16?20               	;0
	486  1577  FREE/70                   ?0        $228                 ?13                 	;1
	487  1577  FE_FREE/127               ?0        $200                 ?11                 	;1
	488  1577  GOTO/253                  ?0        ?294                 ?258                	;0
	489  1579  BRK/254                   ?0        ?636                 0:1                 	;0	<<479
	490  1581  FETCH_DIM_R/81            $271=     16?46                259:'name'          	;0	<<376
	491  1581  INIT_ARRAY/71             #272=     $271                 ?0                  	;16
	492  1581  FETCH_DIM_R/81            $273=     16?46                260:'index'         	;0
	493  1581  ADD_ARRAY_ELEMENT/72      #272=     $273                 ?0                  	;0
	494  1581  FETCH_DIM_R/81            $274=     16?46                261:'result'        	;0
	495  1581  ADD_ARRAY_ELEMENT/72      #272=     $274                 ?0                  	;0
	496  1581  FETCH_DIM_R/81            $275=     16?46                262:'text'          	;0
	497  1581  ADD_ARRAY_ELEMENT/72      #272=     $275                 ?0                  	;0
	498  1581  FETCH_LIST/98             $276=     #272                 263:0               	;0
	499  1581  ASSIGN/38                 ?216      16?54                $276                	;0
	500  1581  FETCH_LIST/98             $278=     #272                 264:1               	;0
	501  1581  ASSIGN/38                 ?218      16?55                $278                	;0
	502  1581  FETCH_LIST/98             $280=     #272                 265:2               	;0
	503  1581  ASSIGN/38                 ?220      16?56                $280                	;0
	504  1581  FETCH_LIST/98             $282=     #272                 266:3               	;0
	505  1581  ASSIGN/38                 ?222      16?57                $282                	;0
	506  1581  FREE/70                   ?0        #272                 ?0                  	;0
	507  1582  FETCH_DIM_R/81            $284=     16?46                267:'PHP_FAILED_TESTS'	;0
	508  1582  FE_RESET_R/77             $285=     $284                 ?519                	;0
	509  1582  FE_FETCH_R/78             #286=     $285                 16?58               	;519	>>519	<<518
	510  1582  ASSIGN/38                 ?226      16?59                #286                	;0
	511  1583  INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'array_merge'   	;2
	512  1583  FETCH_DIM_FUNC_ARG/93     $289=     16?9                 16?59               	;1
	513  1583  SEND_VAR_EX/66            ?80       $289                 ?1                  	;0
	514  1583  SEND_VAR_EX/66            ?96       16?58                ?2                  	;0
	515  1583  DO_FCALL_BY_NAME/131      $290=     ?0                   ?0                  	;0
	516  1583  ASSIGN_DIM/147            ?227      16?9                 16?59               	;0
	517  1583  OP_DATA/137               ?0        $290                 ?0                  	;0
	518  1583  JMP/42                    ?0        ?509                 ?0                  	;0	>>509
	519  1583  FE_FREE/127               ?0        $285                 ?0                  	;0	<<508
	520  1585  POST_INC/36               #291=     16?4                 ?0                  	;0
	521  1585  FREE/70                   ?0        #291                 ?0                  	;0
	522  1587  BOOL_NOT/13               #292=     16?11                ?0                  	;0
	523  1587  JMPZ/43                   ?0        #292                 ?526                	;0	>>526
	524  1588  INIT_FCALL_BY_NAME/59     ?0        ?0                   270:'clear_show_test'	;0
	525  1588  DO_FCALL_BY_NAME/131      ?232      ?0                   ?0                  	;0
	526  1591  ECHO/40                   ?0        16?57                ?0                  	;0	<<523
	527  1593  BOOL_NOT/13               #294=     16?11                ?0                  	;0
	528  1593  JMPZ/43                   ?0        #294                 ?540                	;0	>>540
	529  1594  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'show_test'     	;2
	530  1594  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	531  1594  INIT_FCALL_BY_NAME/59     ?0        ?0                   274:'count'         	;1
	532  1594  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	533  1594  DO_FCALL_BY_NAME/131      $295=     ?0                   ?0                  	;0
	534  1594  ROPE_INIT/54              #297=     ?0                   276:'/'             	;3
	535  1594  ROPE_ADD/55               #297=     #297                 16?3                	;1
	536  1594  ROPE_END/56               #296=     #297                 277:' concurrent test workers running'	;2
	537  1594  CONCAT/8                  #299=     $295                 #296                	;0
	538  1594  SEND_VAL_EX/116           ?96       #299                 ?2                  	;0
	539  1594  DO_FCALL_BY_NAME/131      ?239      ?0                   ?0                  	;0
	540  1597  INIT_FCALL_BY_NAME/59     ?0        ?0                   278:'is_array'      	;1	<<528
	541  1597  SEND_VAR_EX/66            ?80       16?54                ?1                  	;0
	542  1597  DO_FCALL_BY_NAME/131      $301=     ?0                   ?0                  	;0
	543  1597  BOOL_NOT/13               #302=     $301                 ?0                  	;0
	544  1597  JMPZ_EX/46                #302=     #302                 ?547                	;0	>>547
	545  1597  IS_NOT_EQUAL/18           #303=     16?56                280:'REDIR'         	;0
	546  1597  BOOL/52                   #302=     #303                 ?0                  	;0
	547  1597  JMPZ/43                   ?0        #302                 ?581                	;0	>>581	<<544
	548  1598  ASSIGN_DIM/147            ?243      16?6                 16?55               	;0
	549  1598  OP_DATA/137               ?0        16?56                ?0                  	;0
	550  1600  JMPZ_EX/46                #305=     16?7                 ?565                	;0	>>565
	551  1600  IS_EQUAL/17               #306=     16?56                281:'XFAILED'       	;0
	552  1600  JMPNZ_EX/47               #306=     #306                 ?555                	;0	>>555
	553  1600  IS_EQUAL/17               #307=     16?56                282:'XLEAKED'       	;0
	554  1600  BOOL/52                   #306=     #307                 ?0                  	;0
	555  1600  JMPNZ_EX/47               #306=     #306                 ?558                	;0	>>558	<<552
	556  1600  IS_EQUAL/17               #308=     16?56                283:'FAILED'        	;0
	557  1600  BOOL/52                   #306=     #308                 ?0                  	;0
	558  1600  JMPNZ_EX/47               #306=     #306                 ?561                	;0	>>561	<<555
	559  1600  IS_EQUAL/17               #309=     16?56                284:'WARNED'        	;0
	560  1600  BOOL/52                   #306=     #309                 ?0                  	;0
	561  1600  JMPNZ_EX/47               #306=     #306                 ?564                	;0	>>564	<<558
	562  1600  IS_EQUAL/17               #310=     16?56                285:'LEAKED'        	;0
	563  1600  BOOL/52                   #306=     #310                 ?0                  	;0
	564  1600  BOOL/52                   #305=     #306                 ?0                  	;0	<<561
	565  1600  JMPZ/43                   ?0        #305                 ?572                	;0	>>572	<<550
	566  1601  INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'fwrite'        	;2
	567  1601  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	568  1601  NOP/0                     ?0        ?0                   ?0                  	;0
	569  1601  FAST_CONCAT/53            #311=     16?55                288:'
'             	;0
	570  1601  SEND_VAL_EX/116           ?96       #311                 ?2                  	;0
	571  1601  DO_FCALL_BY_NAME/131      ?251      ?0                   ?0                  	;0
	572  1603  JMPZ/43                   ?0        16?8                 ?581                	;0	>>581	<<565
	573  1604  INIT_FCALL_BY_NAME/59     ?0        ?0                   289:'fwrite'        	;2
	574  1604  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	575  1604  ROPE_INIT/54              #314=     ?0                   16?56               	;4
	576  1604  ROPE_ADD/55               #314=     #314                 291:'	'             	;1
	577  1604  ROPE_ADD/55               #314=     #314                 16?55               	;2
	578  1604  ROPE_END/56               #313=     #314                 292:'
'             	;3
	579  1604  SEND_VAL_EX/116           ?96       #313                 ?2                  	;0
	580  1604  DO_FCALL_BY_NAME/131      ?255      ?0                   ?0                  	;0
	581  1607  BRK/254                   ?0        ?636                 0:1                 	;0	<<547,572
	582  1609  INIT_FCALL_BY_NAME/59     ?0        ?0                   293:'kill_children' 	;1	<<378
	583  1609  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	584  1609  DO_FCALL_BY_NAME/131      ?256      ?0                   ?0                  	;0
	585  1610  INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'error'         	;1
	586  1610  ROPE_INIT/54              #320=     ?0                   297:'Worker '       	;4
	587  1610  ROPE_ADD/55               #320=     #320                 16?20               	;1
	588  1610  FETCH_DIM_R/81            $318=     16?46                298:'msg'           	;0
	589  1610  ROPE_ADD/55               #320=     #320                 299:' reported error: '	;2
	590  1610  ROPE_END/56               #319=     #320                 $318                	;3
	591  1610  SEND_VAL_EX/116           ?80       #319                 ?1                  	;0
	592  1610  DO_FCALL_BY_NAME/131      ?261      ?0                   ?0                  	;0
	593  1611  BRK/254                   ?0        ?636                 0:1                 	;0
	594  1613  INIT_FCALL_BY_NAME/59     ?0        ?0                   300:'kill_children' 	;1	<<380
	595  1613  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	596  1613  DO_FCALL_BY_NAME/131      ?262      ?0                   ?0                  	;0
	597  1615  ASSIGN/38                 ?263      16?60                302:array (
  0 => 'E_ERROR',
  1 => 'E_WARNING',
  2 => 'E_PARSE',
  3 => 'E_NOTICE',
  4 => 'E_CORE_ERROR',
  5 => 'E_CORE_WARNING',
  6 => 'E_COMPILE_ERROR',
  7 => 'E_COMPILE_WARNING',
  8 => 'E_USER_ERROR',
  9 => 'E_USER_WARNING',
  10 => 'E_USER_NOTICE',
  11 => 'E_STRICT',
  12 => 'E_RECOVERABLE_ERROR',
  13 => 'E_USER_DEPRECATED',
)	;0
	598  1630  INIT_FCALL_BY_NAME/59     ?0        ?0                   303:'array_combine' 	;2
	599  1630  INIT_FCALL_BY_NAME/59     ?0        ?0                   305:'array_map'     	;2
	600  1630  SEND_VAL_EX/116           ?80       307:'constant'       ?1                  	;0
	601  1630  SEND_VAR_EX/66            ?96       16?60                ?2                  	;0
	602  1630  DO_FCALL_BY_NAME/131      $325=     ?0                   ?0                  	;0
	603  1630  SEND_VAR_NO_REF_EX/50     ?80       $325                 ?1                  	;0
	604  1630  SEND_VAR_EX/66            ?96       16?60                ?2                  	;0
	605  1630  DO_FCALL_BY_NAME/131      $326=     ?0                   ?0                  	;0
	606  1630  ASSIGN/38                 ?266      16?60                $326                	;0
	607  1631  INIT_FCALL_BY_NAME/59     ?0        ?0                   308:'error'         	;1
	608  1631  ROPE_INIT/54              #334=     ?0                   310:'Worker '       	;10
	609  1631  ROPE_ADD/55               #334=     #334                 16?20               	;1
	610  1631  FETCH_DIM_R/81            $328=     16?46                311:'errno'         	;0
	611  1631  FETCH_DIM_R/81            $329=     16?60                $328                	;0
	612  1631  ROPE_ADD/55               #334=     #334                 312:' reported unexpected '	;2
	613  1631  ROPE_ADD/55               #334=     #334                 $329                	;3
	614  1631  FETCH_DIM_R/81            $330=     16?46                313:'errstr'        	;0
	615  1631  ROPE_ADD/55               #334=     #334                 314:': '            	;4
	616  1631  ROPE_ADD/55               #334=     #334                 $330                	;5
	617  1631  FETCH_DIM_R/81            $331=     16?46                315:'errfile'       	;0
	618  1631  ROPE_ADD/55               #334=     #334                 316:' in '          	;6
	619  1631  ROPE_ADD/55               #334=     #334                 $331                	;7
	620  1631  FETCH_DIM_R/81            $332=     16?46                317:'errline'       	;0
	621  1631  ROPE_ADD/55               #334=     #334                 318:' on line '     	;8
	622  1631  ROPE_END/56               #333=     #334                 $332                	;9
	623  1631  SEND_VAL_EX/116           ?80       #333                 ?1                  	;0
	624  1631  DO_FCALL_BY_NAME/131      ?278      ?0                   ?0                  	;0
	625  1633  INIT_FCALL_BY_NAME/59     ?0        ?0                   319:'kill_children' 	;1	<<381
	626  1633  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	627  1633  DO_FCALL_BY_NAME/131      ?279      ?0                   ?0                  	;0
	628  1634  INIT_FCALL_BY_NAME/59     ?0        ?0                   321:'error'         	;1
	629  1634  FETCH_DIM_R/81            $341=     16?46                323:'type'          	;0
	630  1634  ROPE_INIT/54              #343=     ?0                   324:'Unrecognised message type \''	;4
	631  1634  ROPE_ADD/55               #343=     #343                 $341                	;1
	632  1634  ROPE_ADD/55               #343=     #343                 325:'\' from worker '	;2
	633  1634  ROPE_END/56               #342=     #343                 16?20               	;3
	634  1634  SEND_VAL_EX/116           ?80       #342                 ?1                  	;0
	635  1634  DO_FCALL_BY_NAME/131      ?284      ?0                   ?0                  	;0
	636  1634  FREE/70                   ?0        $228                 ?0                  	;0
	637  1506  INIT_FCALL_BY_NAME/59     ?0        ?0                   326:'fgets'         	;1	<<323
	638  1506  SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
	639  1506  DO_FCALL_BY_NAME/131      $346=     ?0                   ?0                  	;0
	640  1506  ASSIGN/38                 $347=     16?45                $346                	;0
	641  1506  IS_NOT_IDENTICAL/16       #348=     328:false            $347                	;0
	642  1506  JMPNZ/44                  ?0        #348                 ?324                	;0	>>324
	643  1506  JMP/42                    ?0        ?309                 ?0                  	;0	>>309
	644  1506  FE_FREE/127               ?0        $200                 ?0                  	;0	<<308
	645  1495  JMPNZ_EX/47               #349=     16?0                 ?647                	;0	>>647	<<294,307
	646  1495  BOOL/52                   #349=     16?18                ?0                  	;0
	647  1495  JMPNZ_EX/47               #349=     #349                 ?650                	;0	>>650	<<645
	648  1495  IS_SMALLER/19             #350=     329:0                16?39               	;0
	649  1495  BOOL/52                   #349=     #350                 ?0                  	;0
	650  1495  JMPNZ/44                  ?0        #349                 ?295                	;0	>>295	<<647
	651  1641  BOOL_NOT/13               #351=     16?11                ?0                  	;0
	652  1641  JMPZ/43                   ?0        #351                 ?655                	;0	>>655
	653  1642  INIT_FCALL_BY_NAME/59     ?0        ?0                   330:'clear_show_test'	;0
	654  1642  DO_FCALL_BY_NAME/131      ?291      ?0                   ?0                  	;0
	655  1645  INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'kill_children' 	;1	<<652
	656  1645  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	657  1645  DO_FCALL_BY_NAME/131      ?292      ?0                   ?0                  	;0
	658  1647  IS_SMALLER/19             #354=     16?39                334:0               	;0
	659  1647  JMPZ/43                   ?0        #354                 ?665                	;0	>>665
	660  1648  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'error'         	;1
	661  1648  NOP/0                     ?0        ?0                   ?0                  	;0
	662  1648  FAST_CONCAT/53            #355=     16?39                337:' test batches “in progress”, which is less than zero. THIS SHOULD NOT HAPPEN.'	;0
	663  1648  SEND_VAL_EX/116           ?80       #355                 ?1                  	;0
	664  1648  DO_FCALL_BY_NAME/131      ?295      ?0                   ?0                  	;0
	665  1650  NOP/0                     ?0        338:NULL             ?0                  	;4294967295	<<659
	*/
}

function send_message($stream, array $message)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1652  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1652  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    1653  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'stream_get_meta_data'	;1
	3    1653  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4    1653  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	5    1653  FETCH_DIM_R/81            $4=       $3                   2:'blocked'         	;0
	6    1653  ASSIGN/38                 ?2        16?2                 $4                  	;0
	7    1654  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'stream_set_blocking'	;2
	8    1654  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	9    1654  SEND_VAL_EX/116           ?96       5:true               ?2                  	;0
	10   1654  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
	11   1655  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'fwrite'          	;2
	12   1655  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	13   1655  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'base64_encode'   	;1
	14   1655  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'serialize'      	;1
	15   1655  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	16   1655  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	17   1655  SEND_VAR_NO_REF_EX/50     ?80       $7                   ?1                  	;0
	18   1655  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	19   1655  CONCAT/8                  #9=       $8                   12:'
'              	;0
	20   1655  SEND_VAL_EX/116           ?96       #9                   ?2                  	;0
	21   1655  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
	22   1656  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'stream_set_blocking'	;2
	23   1656  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	24   1656  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	25   1656  DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
	26   1657  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
	*/
}

function kill_children(array $children)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1659  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1660  FE_RESET_R/77             $2=       16?0                 ?8                  	;0
	2    1660  FE_FETCH_R/78             ?0        $2                   16?1                	;8	>>8	<<7
	3    1661  JMPZ/43                   ?0        16?1                 ?7                  	;0	>>7
	4    1662  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'proc_terminate'  	;1
	5    1662  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	6    1662  DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
	7    1662  JMP/42                    ?0        ?2                   ?0                  	;0	>>2	<<3
	8    1662  FE_FREE/127               ?0        $2                   ?0                  	;0	<<1
	9    1665  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
	*/
}
function {closure}($errno, $errstr, $errfile, $errline)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1680  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1680  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    1680  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    1680  RECV/63                   16?3=     ?4                   ?4294967294         	;0
	4    1680  BIND_STATIC/183           ?0        16?4                 0:'workerSock'      	;0
	5    1681  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'error_reporting' 	;0
	6    1681  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	7    1681  BW_AND/10                 #6=       $5                   16?0                	;0
	8    1681  JMPZ/43                   ?0        #6                   ?20                 	;0	>>20
	9    1682  INIT_FCALL/61             ?0        ?272                 3:'send_message'    	;2
	10   1682  SEND_VAR/117              ?80       16?4                 ?1                  	;0
	11   1682  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'compact'         	;4
	12   1682  SEND_VAL_EX/116           ?80       6:'errno'            ?1                  	;0
	13   1682  SEND_VAL_EX/116           ?96       7:'errstr'           ?2                  	;0
	14   1682  SEND_VAL_EX/116           ?112      8:'errfile'          ?3                  	;0
	15   1682  SEND_VAL_EX/116           ?128      9:'errline'          ?4                  	;0
	16   1682  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	17   1683  ADD/1                     #8=       $7                   10:array (
  'type' => 'php_error',
)	;0
	18   1683  SEND_VAL/65               ?96       #8                   ?2                  	;0
	19   1683  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	20   1687  RETURN/62                 ?0        11:true              ?0                  	;0	<<8
	21   1688  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
	*/
}

function run_worker()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1668  BIND_GLOBAL/168           ?0        16?0                 0:'workerID'        	;0
	1    1668  BIND_GLOBAL/168           ?0        16?1                 1:'workerSock'      	;0
	2    1670  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'getenv'          	;1
	3    1670  SEND_VAL_EX/116           ?80       4:'TEST_PHP_URI'     ?1                  	;0
	4    1670  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	5    1670  ASSIGN/38                 ?1        16?2                 $9                  	;0
	6    1672  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'stream_socket_client'	;4
	7    1672  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	8    1672  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	9    1672  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
	10   1672  SEND_VAL_EX/116           ?128      7:5                  ?4                  	;0
	11   1672  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	12   1672  ASSIGN/38                 $12=      16?1                 $11                 	;0
	13   1672  JMPNZ_EX/47               #13=      $12                  ?20                 	;0	>>20
	14   1672  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'error'           	;1
	15   1672  NOP/0                     ?0        ?0                   ?0                  	;0
	16   1672  FAST_CONCAT/53            #14=      10:'Couldn\'t connect to ' 16?2                	;0
	17   1672  SEND_VAL_EX/116           ?80       #14                  ?1                  	;0
	18   1672  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	19   1672  BOOL/52                   #13=      $15                  ?0                  	;0
	20   1674  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'fgets'          	;1	<<13
	21   1674  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	22   1674  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	23   1674  ASSIGN/38                 ?8        16?4                 $16                 	;0
	24   1675  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'unserialize'    	;1
	25   1675  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'base64_decode'  	;1
	26   1675  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	27   1675  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	28   1675  SEND_VAR_NO_REF_EX/50     ?80       $18                  ?1                  	;0
	29   1675  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
	30   1675  ASSIGN/38                 $20=      16?4                 $19                 	;0
	31   1675  JMPNZ_EX/47               #21=      $20                  ?34                 	;0	>>34
	32   1675  EXIT/79                   ?0        17:'Could not decode greeting
' ?0                  	;0
	33   1675  BOOL/52                   #21=      18:true              ?0                  	;0
	34   1676  FETCH_DIM_R/81            $22=      16?4                 19:'type'           	;0	<<31
	35   1676  IS_NOT_IDENTICAL/16       #23=      $22                  20:'hello'          	;0
	36   1676  JMPNZ_EX/47               #23=      #23                  ?40                 	;0	>>40
	37   1676  FETCH_DIM_R/81            $24=      16?4                 21:'workerID'       	;0
	38   1676  IS_NOT_IDENTICAL/16       #25=      $24                  16?0                	;0
	39   1676  BOOL/52                   #23=      #25                  ?0                  	;0
	40   1676  JMPZ/43                   ?0        #23                  ?50                 	;0	>>50	<<36
	41   1677  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'error'          	;1
	42   1677  FETCH_DIM_R/81            $26=      16?4                 24:'type'           	;0
	43   1677  ROPE_INIT/54              #29=      ?0                   25:'Unexpected greeting of type '	;4
	44   1677  ROPE_ADD/55               #29=      #29                  $26                 	;1
	45   1677  FETCH_DIM_R/81            $27=      16?4                 26:'workerID'       	;0
	46   1677  ROPE_ADD/55               #29=      #29                  27:' and for worker '	;2
	47   1677  ROPE_END/56               #28=      #29                  $27                 	;3
	48   1677  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
	49   1677  DO_FCALL_BY_NAME/131      ?22       ?0                   ?0                  	;0
	50   1680  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'set_error_handler'	;1	<<40
	51   1680  DECLARE_LAMBDA_FUNCTION/153 #32=      30:'' . "\0" . '{closure}/home/xui_main/bin/php/lib/php/build/run-tests.php0x7f8d65055e30' ?0                  	;0
	52   1680  BIND_LEXICAL/182          ?0        #32                  16?1                	;0
	53   1688  SEND_VAL_EX/116           ?80       #32                  ?1                  	;0
	54   1688  DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
	55   1690  FETCH_DIM_R/81            $34=      16?4                 31:'GLOBALS'        	;0
	56   1690  FE_RESET_R/77             $35=      $34                  ?71                 	;0
	57   1690  FE_FETCH_R/78             #36=      $35                  16?5                	;71	>>71	<<70
	58   1690  ASSIGN/38                 ?28       16?6                 #36                 	;0
	59   1691  IS_NOT_IDENTICAL/16       #38=      16?6                 32:'workerID'       	;0
	60   1691  JMPZ_EX/46                #38=      #38                  ?63                 	;0	>>63
	61   1691  IS_NOT_IDENTICAL/16       #39=      16?6                 33:'workerSock'     	;0
	62   1691  BOOL/52                   #38=      #39                  ?0                  	;0
	63   1691  JMPZ_EX/46                #38=      #38                  ?66                 	;0	>>66	<<60
	64   1691  IS_NOT_IDENTICAL/16       #40=      16?6                 34:'GLOBALS'        	;0
	65   1691  BOOL/52                   #38=      #40                  ?0                  	;0
	66   1691  JMPZ/43                   ?0        #38                  ?70                 	;0	>>70	<<63
	67   1692  FETCH_W/83                $41=      35:'GLOBALS'         ?0                  	;0
	68   1692  ASSIGN_DIM/147            ?33       $41                  16?6                	;0
	69   1692  OP_DATA/137               ?0        16?5                 ?0                  	;0
	70   1692  JMP/42                    ?0        ?57                  ?0                  	;0	>>57	<<66
	71   1692  FE_FREE/127               ?0        $35                  ?0                  	;0	<<56
	72   1695  FETCH_DIM_R/81            $43=      16?4                 36:'constants'      	;0
	73   1695  FE_RESET_R/77             $44=      $43                  ?81                 	;0
	74   1695  FE_FETCH_R/78             #45=      $44                  16?5                	;81	>>81	<<80
	75   1695  ASSIGN/38                 ?37       16?7                 #45                 	;0
	76   1696  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'define'         	;2
	77   1696  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	78   1696  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	79   1696  DO_FCALL_BY_NAME/131      ?38       ?0                   ?0                  	;0
	80   1696  JMP/42                    ?0        ?74                  ?0                  	;0	>>74
	81   1696  FE_FREE/127               ?0        $44                  ?0                  	;0	<<73
	82   1699  INIT_FCALL/61             ?0        ?272                 39:'send_message'   	;2
	83   1699  SEND_VAR/117              ?80       16?1                 ?1                  	;0
	84   1700  INIT_ARRAY/71             #48=      40:'hello_reply'     41:'type'           	;10
	85   1701  ADD_ARRAY_ELEMENT/72      #48=      16?0                 42:'workerID'       	;0
	86   1701  SEND_VAL/65               ?96       #48                  ?2                  	;0
	87   1701  DO_FCALL/60               ?40       ?0                   ?0                  	;0
	88   1704  INIT_FCALL/61             ?0        ?272                 43:'send_message'   	;2
	89   1704  SEND_VAR/117              ?80       16?1                 ?1                  	;0
	90   1705  SEND_VAL/65               ?96       44:array (
  'type' => 'ready',
) ?2                  	;0
	91   1705  DO_FCALL/60               ?41       ?0                   ?0                  	;0
	92   1708  JMP/42                    ?0        ?142                 ?0                  	;0	>>142
	93   1709  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'unserialize'    	;1	<<146
	94   1709  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'base64_decode'  	;1
	95   1709  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	96   1709  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
	97   1709  SEND_VAR_NO_REF_EX/50     ?80       $51                  ?1                  	;0
	98   1709  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
	99   1709  ASSIGN/38                 ?44       16?8                 $52                 	;0
	100  1711  FETCH_DIM_R/81            $54=      16?8                 49:'type'           	;0
	101  1711  SWITCH_STRING/188         ?0        $54                  50:array (
  'run_tests' => 105,
)	;130
	102  1712  CASE/48                   #55=      $54                  51:'run_tests'      	;0	>>104
	103  1712  JMPNZ/44                  ?0        #55                  ?105                	;0	>>105
	104  1712  JMP/42                    ?0        ?130                 ?0                  	;0	>>130	<<102
	105  1713  INIT_FCALL/61             ?0        ?1024                52:'run_all_tests'  	;3	<<103
	106  1713  FETCH_DIM_R/81            $56=      16?8                 53:'test_files'     	;0
	107  1713  SEND_VAR/117              ?80       $56                  ?1                  	;0
	108  1713  FETCH_DIM_R/81            $57=      16?8                 54:'env'            	;0
	109  1713  SEND_VAR/117              ?96       $57                  ?2                  	;0
	110  1713  FETCH_DIM_R/81            $58=      16?8                 55:'redir_tested'   	;0
	111  1713  SEND_VAR/117              ?112      $58                  ?3                  	;0
	112  1713  DO_FCALL/60               ?50       ?0                   ?0                  	;0
	113  1714  INIT_FCALL/61             ?0        ?272                 56:'send_message'   	;2
	114  1714  SEND_VAR/117              ?80       16?1                 ?1                  	;0
	115  1715  INIT_ARRAY/71             #60=      57:'tests_finished'  58:'type'           	;10
	116  1716  INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'junit_enabled'  	;0
	117  1716  DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
	118  1716  JMPZ/43                   ?0        $61                  ?123                	;0	>>123
	119  1716  FETCH_R/80                $62=      61:'GLOBALS'         ?0                  	;0
	120  1716  FETCH_DIM_R/81            $63=      $62                  62:'JUNIT'          	;0
	121  1716  QM_ASSIGN/22              #64=      $63                  ?0                  	;0
	122  1716  JMP/42                    ?0        ?124                 ?0                  	;0	>>124
	123  1715  QM_ASSIGN/22              #64=      63:NULL              ?0                  	;0	<<118
	124  1715  ADD_ARRAY_ELEMENT/72      #60=      #64                  64:'junit'          	;0	<<122
	125  1715  SEND_VAL/65               ?96       #60                  ?2                  	;0
	126  1715  DO_FCALL/60               ?56       ?0                   ?0                  	;0
	127  1718  INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'junit_init'     	;0
	128  1718  DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
	129  1719  BRK/254                   ?0        ?141                 0:1                 	;0
	130  1721  INIT_FCALL/61             ?0        ?272                 67:'send_message'   	;2	<<104
	131  1721  SEND_VAR/117              ?80       16?1                 ?1                  	;0
	132  1722  INIT_ARRAY/71             #67=      68:'error'           69:'type'           	;10
	133  1723  FETCH_DIM_R/81            $68=      16?8                 70:'type'           	;0
	134  1723  NOP/0                     ?0        ?0                   ?0                  	;0
	135  1723  FAST_CONCAT/53            #69=      71:'Unrecognised message type: ' $68                 	;0
	136  1723  ADD_ARRAY_ELEMENT/72      #67=      #69                  72:'msg'            	;0
	137  1723  SEND_VAL/65               ?96       #67                  ?2                  	;0
	138  1723  DO_FCALL/60               ?61       ?0                   ?0                  	;0
	139  1725  FREE/70                   ?0        $54                  ?5                  	;1
	140  1725  BRK/254                   ?0        ?147                 0:2                 	;0
	141  1725  FREE/70                   ?0        $54                  ?0                  	;0
	142  1708  INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'fgets'          	;1	<<92
	143  1708  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	144  1708  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
	145  1708  ASSIGN/38                 $72=      16?8                 $71                 	;0
	146  1708  JMPNZ/44                  ?0        $72                  ?93                 	;0	>>93
	147  1728  NOP/0                     ?0        75:NULL              ?0                  	;4294967295
	*/
}

function show_file_block($file, $block, $section)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1733  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1733  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    1733  RECV_INIT/64              16?2=     ?3                   0:NULL              	;0
	3    1735  BIND_GLOBAL/168           ?0        16?3                 1:'cfg'             	;0
	4    1737  FETCH_DIM_R/81            $4=       16?3                 2:'show'            	;0
	5    1737  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
	6    1737  JMPZ/43                   ?0        $5                   ?23                 	;0	>>23
	7    1739  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'is_null'         	;1
	8    1739  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	9    1739  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	10   1739  JMPZ/43                   ?0        $6                   ?15                 	;0	>>15
	11   1740  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'strtoupper'      	;1
	12   1740  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	13   1740  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	14   1740  ASSIGN/38                 ?4        16?2                 $7                  	;0
	15   1743  CONCAT/8                  #9=       7:'
========'        16?2                	;0	<<10
	16   1743  CONCAT/8                  #10=      #9                   8:'========
'       	;0
	17   1743  ECHO/40                   ?0        #10                  ?0                  	;0
	18   1744  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'rtrim'           	;1
	19   1744  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	20   1744  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	21   1744  ECHO/40                   ?0        $11                  ?0                  	;0
	22   1745  ECHO/40                   ?0        11:'
========DONE========
' ?0                  	;0
	23   1747  NOP/0                     ?0        12:NULL              ?0                  	;4294967295	<<6
	*/
}

function run_test($php, $file, $env)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1752  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    1752  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    1752  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    1754  BIND_GLOBAL/168           ?0        16?3                 0:'log_format'      	;0
	4    1754  BIND_GLOBAL/168           ?0        16?4                 1:'ini_overwrites'  	;0
	5    1754  BIND_GLOBAL/168           ?0        16?5                 2:'PHP_FAILED_TESTS'	;0
	6    1755  BIND_GLOBAL/168           ?0        16?6                 3:'pass_options'    	;0
	7    1755  BIND_GLOBAL/168           ?0        16?7                 4:'DETAILED'        	;0
	8    1755  BIND_GLOBAL/168           ?0        16?8                 5:'IN_REDIRECT'     	;0
	9    1755  BIND_GLOBAL/168           ?0        16?9                 6:'test_cnt'        	;0
	10   1755  BIND_GLOBAL/168           ?0        16?10                7:'test_idx'        	;0
	11   1756  BIND_GLOBAL/168           ?0        16?11                8:'valgrind'        	;0
	12   1756  BIND_GLOBAL/168           ?0        16?12                9:'temp_source'     	;0
	13   1756  BIND_GLOBAL/168           ?0        16?13                10:'temp_target'    	;0
	14   1756  BIND_GLOBAL/168           ?0        16?14                11:'cfg'            	;0
	15   1756  BIND_GLOBAL/168           ?0        16?15                12:'environment'    	;0
	16   1757  BIND_GLOBAL/168           ?0        16?16                13:'no_clean'       	;0
	17   1758  BIND_GLOBAL/168           ?0        16?17                14:'SHOW_ONLY_GROUPS'	;0
	18   1759  BIND_GLOBAL/168           ?0        16?18                15:'no_file_cache'  	;0
	19   1760  BIND_GLOBAL/168           ?0        16?19                16:'slow_min_ms'    	;0
	20   1761  BIND_GLOBAL/168           ?0        16?20                17:'preload'        	;0
	21   1763  BIND_GLOBAL/168           ?0        16?21                18:'workerID'       	;0
	22   1764  ASSIGN/38                 ?0        16?22                19:NULL             	;0
	23   1765  ASSIGN/38                 ?1        16?23                16?1                	;0
	24   1767  ISSET_ISEMPTY_DIM_OBJ/115 #121=     16?2                 20:'TEST_PHP_CGI_EXECUTABLE'	;33554432
	25   1767  JMPZ/43                   ?0        #121                 ?28                 	;0	>>28
	26   1768  FETCH_DIM_R/81            $122=     16?2                 21:'TEST_PHP_CGI_EXECUTABLE'	;0
	27   1768  ASSIGN/38                 ?4        16?24                $122                	;0
	28   1771  ISSET_ISEMPTY_DIM_OBJ/115 #124=     16?2                 22:'TEST_PHPDBG_EXECUTABLE'	;33554432	<<25
	29   1771  JMPZ/43                   ?0        #124                 ?32                 	;0	>>32
	30   1772  FETCH_DIM_R/81            $125=     16?2                 23:'TEST_PHPDBG_EXECUTABLE'	;0
	31   1772  ASSIGN/38                 ?7        16?25                $125                	;0
	32   1775  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'is_array'       	;1	<<29
	33   1775  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	34   1775  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
	35   1775  JMPZ/43                   ?0        $127                 ?38                 	;0	>>38
	36   1776  FETCH_DIM_R/81            $128=     16?1                 26:0                	;0
	37   1776  ASSIGN/38                 ?10       16?1                 $128                	;0
	38   1779  JMPZ/43                   ?0        16?7                 ?43                 	;0	>>43	<<35
	39   1781  ROPE_INIT/54              #131=     ?0                   27:'
=================
TEST '	;3
	40   1781  ROPE_ADD/55               #131=     #131                 16?1                	;1
	41   1781  ROPE_END/56               #130=     #131                 28:'
'              	;2
	42   1781  ECHO/40                   ?0        #130                 ?0                  	;0
	43   1785  ASSIGN/38                 ?14       16?26                29:array (
  'TEST' => '',
)	;0	<<38
	44   1787  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'fopen'          	;2
	45   1787  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	46   1787  SEND_VAL_EX/116           ?96       32:'rb'              ?2                  	;0
	47   1787  DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
	48   1787  ASSIGN/38                 $135=     16?27                $134                	;0
	49   1787  JMPNZ_EX/47               #136=     $135                 ?56                 	;0	>>56
	50   1787  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'error'          	;1
	51   1787  NOP/0                     ?0        ?0                   ?0                  	;0
	52   1787  FAST_CONCAT/53            #137=     35:'Cannot open test file: ' 16?1                	;0
	53   1787  SEND_VAL_EX/116           ?80       #137                 ?1                  	;0
	54   1787  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
	55   1787  BOOL/52                   #136=     $138                 ?0                  	;0
	56   1789  ASSIGN/38                 ?20       16?28                36:NULL             	;0	<<49
	57   1791  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'feof'           	;1
	58   1791  SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	59   1791  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
	60   1791  BOOL_NOT/13               #141=     $140                 ?0                  	;0
	61   1791  JMPZ/43                   ?0        #141                 ?70                 	;0	>>70
	62   1792  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'fgets'          	;1
	63   1792  SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	64   1792  DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
	65   1792  ASSIGN/38                 ?24       16?29                $142                	;0
	66   1794  IS_IDENTICAL/15           #144=     16?29                41:false            	;0
	67   1794  JMPZ/43                   ?0        #144                 ?69                 	;0	>>69
	68   1795  ASSIGN/38                 ?26       16?28                42:'cannot read test'	;0
	69   1795  JMP/42                    ?0        ?74                  ?0                  	;0	>>74	<<67
	70   1798  ROPE_INIT/54              #147=     ?0                   43:'empty test ['   	;3	<<61
	71   1798  ROPE_ADD/55               #147=     #147                 16?1                	;1
	72   1798  ROPE_END/56               #146=     #147                 44:']'              	;2
	73   1798  ASSIGN/38                 ?30       16?28                #146                	;0
	74   1800  IS_IDENTICAL/15           #150=     16?28                45:NULL             	;0	<<69
	75   1800  JMPZ_EX/46                #150=     #150                 ?82                 	;0	>>82
	76   1800  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'strncmp'        	;3
	77   1800  SEND_VAL_EX/116           ?80       48:'--TEST--'        ?1                  	;0
	78   1800  SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
	79   1800  SEND_VAL_EX/116           ?112      49:8                 ?3                  	;0
	80   1800  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
	81   1800  BOOL/52                   #150=     $151                 ?0                  	;0
	82   1800  JMPZ/43                   ?0        #150                 ?87                 	;0	>>87	<<75
	83   1801  ROPE_INIT/54              #153=     ?0                   50:'tests must start with --TEST-- ['	;3
	84   1801  ROPE_ADD/55               #153=     #153                 16?1                	;1
	85   1801  ROPE_END/56               #152=     #153                 51:']'              	;2
	86   1801  ASSIGN/38                 ?36       16?28                #152                	;0
	87   1804  ASSIGN/38                 ?37       16?30                52:'TEST'           	;0	<<82
	88   1805  ASSIGN/38                 ?38       16?31                53:false            	;0
	89   1806  ASSIGN/38                 ?39       16?32                54:false            	;0
	90   1808  JMP/42                    ?0        ?149                 ?0                  	;0	>>149
	91   1809  INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'fgets'          	;1	<<153
	92   1809  SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	93   1809  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
	94   1809  ASSIGN/38                 ?41       16?29                $159                	;0
	95   1811  IS_IDENTICAL/15           #161=     16?29                57:false            	;0
	96   1811  JMPZ/43                   ?0        #161                 ?98                 	;0	>>98
	97   1812  BRK/254                   ?0        ?154                 0:1                 	;0
	98   1816  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'preg_match'     	;3	<<96
	99   1816  SEND_VAL_EX/116           ?80       60:'/^--([_A-Z]+)--/' ?1                  	;0
	100  1816  SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
	101  1816  SEND_VAR_EX/66            ?112      16?33                ?3                  	;0
	102  1816  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
	103  1816  JMPZ/43                   ?0        $162                 ?137                	;0	>>137
	104  1817  FETCH_DIM_R/81            $163=     16?33                61:1                	;0
	105  1817  CAST/21                   #164=     $163                 ?0                  	;6
	106  1817  ASSIGN/38                 ?46       16?30                #164                	;0
	107  1819  ISSET_ISEMPTY_DIM_OBJ/115 #166=     16?26                16?30               	;33554432
	108  1819  JMPZ_EX/46                #166=     #166                 ?111                	;0	>>111
	109  1819  FETCH_DIM_R/81            $167=     16?26                16?30               	;0
	110  1819  BOOL/52                   #166=     $167                 ?0                  	;0
	111  1819  JMPZ/43                   ?0        #166                 ?116                	;0	>>116	<<108
	112  1820  ROPE_INIT/54              #169=     ?0                   62:'duplicated '    	;3
	113  1820  ROPE_ADD/55               #169=     #169                 16?30               	;1
	114  1820  ROPE_END/56               #168=     #169                 63:' section'       	;2
	115  1820  ASSIGN/38                 ?52       16?28                #168                	;0
	116  1824  INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'in_array'       	;2	<<111
	117  1824  SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
	118  1825  SEND_VAL_EX/116           ?96       66:array (
  0 => 'EXPECT',
  1 => 'EXPECTF',
  2 => 'EXPECTREGEX',
  3 => 'EXPECTREGEX_EXTERNAL',
  4 => 'EXPECT_EXTERNAL',
  5 => 'EXPECTF_EXTERNAL',
  6 => 'EXPECTHEADERS',
  7 => 'POST',
  8 => 'POST_RAW',
  9 => 'GZIP_POST',
  10 => 'DEFLATE_POST',
  11 => 'PUT',
  12 => 'GET',
  13 => 'COOKIE',
  14 => 'ARGS',
  15 => 'FILE',
  16 => 'FILEEOF',
  17 => 'FILE_EXTERNAL',
  18 => 'REDIRECTTEST',
  19 => 'CAPTURE_STDIO',
  20 => 'STDIN',
  21 => 'CGI',
  22 => 'PHPDBG',
  23 => 'INI',
  24 => 'ENV',
  25 => 'EXTENSIONS',
  26 => 'SKIPIF',
  27 => 'XFAIL',
  28 => 'XLEAK',
  29 => 'CLEAN',
  30 => 'CREDITS',
  31 => 'DESCRIPTION',
  32 => 'CONFLICTS',
  33 => 'WHITESPACE_SENSITIVE',
) ?2                  	;0
	119  1825  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
	120  1825  BOOL_NOT/13               #173=     $172                 ?0                  	;0
	121  1825  JMPZ/43                   ?0        #173                 ?125                	;0	>>125
	122  1833  CONCAT/8                  #174=     67:'Unknown section "' 16?30               	;0
	123  1833  CONCAT/8                  #175=     #174                 68:'"'              	;0
	124  1833  ASSIGN/38                 ?57       16?28                #175                	;0
	125  1836  ASSIGN_DIM/147            ?58       16?26                16?30               	;0	<<121
	126  1836  OP_DATA/137               ?0        69:''                ?0                  	;0
	127  1837  IS_EQUAL/17               #178=     16?30                70:'FILE'           	;0
	128  1837  JMPNZ_EX/47               #178=     #178                 ?131                	;0	>>131
	129  1837  IS_EQUAL/17               #179=     16?30                71:'FILEEOF'        	;0
	130  1837  BOOL/52                   #178=     #179                 ?0                  	;0
	131  1837  JMPNZ_EX/47               #178=     #178                 ?134                	;0	>>134	<<128
	132  1837  IS_EQUAL/17               #180=     16?30                72:'FILE_EXTERNAL'  	;0
	133  1837  BOOL/52                   #178=     #180                 ?0                  	;0
	134  1837  ASSIGN/38                 ?62       16?31                #178                	;0	<<131
	135  1838  ASSIGN/38                 ?63       16?32                73:false            	;0
	136  1839  CONT/255                  ?0        ?149                 0:1                 	;0
	137  1843  BOOL_NOT/13               #183=     16?32                ?0                  	;0	<<103
	138  1843  JMPZ/43                   ?0        #183                 ?141                	;0	>>141
	139  1844  ASSIGN_CONCAT/30          ?65       16?26                16?30               	;147
	140  1844  OP_DATA/137               ?0        16?29                ?0                  	;0
	141  1848  JMPZ_EX/46                #185=     16?31                ?147                	;0	>>147	<<138
	142  1848  INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'preg_match'     	;2
	143  1848  SEND_VAL_EX/116           ?80       76:'/^===DONE===\\s*$/' ?1                  	;0
	144  1848  SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
	145  1848  DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
	146  1848  BOOL/52                   #185=     $186                 ?0                  	;0
	147  1848  JMPZ/43                   ?0        #185                 ?149                	;0	>>149	<<141
	148  1849  ASSIGN/38                 ?68       16?32                77:true             	;0
	149  1808  INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'feof'           	;1	<<90,147
	150  1808  SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	151  1808  DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
	152  1808  BOOL_NOT/13               #189=     $188                 ?0                  	;0
	153  1808  JMPNZ/44                  ?0        #189                 ?91                 	;0	>>91
	154  1855  IS_IDENTICAL/15           #190=     16?28                80:NULL             	;0
	155  1855  JMPZ/43                   ?0        #190                 ?244                	;0	>>244
	156  1856  ISSET_ISEMPTY_DIM_OBJ/115 #191=     16?26                81:'REDIRECTTEST'   	;33554432
	157  1856  JMPZ/43                   ?0        #191                 ?161                	;0	>>161
	158  1858  JMPZ/43                   ?0        16?8                 ?160                	;0	>>160
	159  1859  ASSIGN/38                 ?73       16?28                82:'Can\'t redirect a test from within a redirected test'	;0
	160  1859  JMP/42                    ?0        ?244                 ?0                  	;0	>>244	<<158
	161  1864  ISSET_ISEMPTY_DIM_OBJ/115 #193=     16?26                83:'PHPDBG'         	;33554432	<<157
	162  1864  BOOL_NOT/13               #194=     #193                 ?0                  	;0
	163  1864  JMPZ_EX/46                #194=     #194                 ?171                	;0	>>171
	164  1864  ISSET_ISEMPTY_DIM_OBJ/115 #195=     16?26                84:'FILE'           	;33554432
	165  1864  ISSET_ISEMPTY_DIM_OBJ/115 #196=     16?26                85:'FILEEOF'        	;33554432
	166  1864  ADD/1                     #197=     #195                 #196                	;0
	167  1864  ISSET_ISEMPTY_DIM_OBJ/115 #198=     16?26                86:'FILE_EXTERNAL'  	;33554432
	168  1864  ADD/1                     #199=     #197                 #198                	;0
	169  1864  IS_NOT_EQUAL/18           #200=     #199                 87:1                	;0
	170  1864  BOOL/52                   #194=     #200                 ?0                  	;0
	171  1864  JMPZ/43                   ?0        #194                 ?173                	;0	>>173	<<163
	172  1865  ASSIGN/38                 ?82       16?28                88:'missing section --FILE--'	;0
	173  1868  ISSET_ISEMPTY_DIM_OBJ/115 #202=     16?26                89:'FILEEOF'        	;33554432	<<171
	174  1868  JMPZ/43                   ?0        #202                 ?184                	;0	>>184
	175  1869  INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'preg_replace'   	;3
	176  1869  SEND_VAL_EX/116           ?80       93:'/[
]+$/'        ?1                  	;0
	177  1869  SEND_VAL_EX/116           ?96       94:''                ?2                  	;0
	178  1869  FETCH_DIM_FUNC_ARG/93     $204=     16?26                95:'FILEEOF'        	;3
	179  1869  SEND_VAR_EX/66            ?112      $204                 ?3                  	;0
	180  1869  DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
	181  1869  ASSIGN_DIM/147            ?84       16?26                90:'FILE'           	;0
	182  1869  OP_DATA/137               ?0        $205                 ?0                  	;0
	183  1870  UNSET_DIM/75              ?0        16?26                96:'FILEEOF'        	;0
	184  1873  FE_RESET_R/77             $206=     97:array (
  0 => 'FILE',
  1 => 'EXPECT',
  2 => 'EXPECTF',
  3 => 'EXPECTREGEX',
) ?235                	;0	<<174
	185  1873  FE_FETCH_R/78             ?0        $206                 16?34               	;235	>>235	<<234
	186  1874  CONCAT/8                  #207=     16?34                98:'_EXTERNAL'      	;0
	187  1874  ASSIGN/38                 ?89       16?35                #207                	;0
	188  1876  ISSET_ISEMPTY_DIM_OBJ/115 #209=     16?26                16?35               	;33554432
	189  1876  JMPZ/43                   ?0        #209                 ?234                	;0	>>234
	190  1878  INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'dirname'        	;1
	191  1878  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	192  1878  DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
	193  1878  CONCAT/8                  #212=     $211                 101:'/'             	;0
	194  1878  INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'trim'          	;1
	195  1878  INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'str_replace'   	;3
	196  1878  SEND_VAL_EX/116           ?80       106:'..'             ?1                  	;0
	197  1878  SEND_VAL_EX/116           ?96       107:''               ?2                  	;0
	198  1878  FETCH_DIM_FUNC_ARG/93     $213=     16?26                16?35               	;3
	199  1878  SEND_VAR_EX/66            ?112      $213                 ?3                  	;0
	200  1878  DO_FCALL_BY_NAME/131      $214=     ?0                   ?0                  	;0
	201  1878  SEND_VAR_NO_REF_EX/50     ?80       $214                 ?1                  	;0
	202  1878  DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
	203  1878  CONCAT/8                  #216=     #212                 $215                	;0
	204  1878  ASSIGN_DIM/147            ?91       16?26                16?35               	;0
	205  1878  OP_DATA/137               ?0        #216                 ?0                  	;0
	206  1880  INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'file_exists'   	;1
	207  1880  FETCH_DIM_FUNC_ARG/93     $217=     16?26                16?35               	;1
	208  1880  SEND_VAR_EX/66            ?80       $217                 ?1                  	;0
	209  1880  DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
	210  1880  JMPZ/43                   ?0        $218                 ?221                	;0	>>221
	211  1881  INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'file_get_contents'	;2
	212  1881  FETCH_DIM_FUNC_ARG/93     $220=     16?26                16?35               	;1
	213  1881  SEND_VAR_EX/66            ?80       $220                 ?1                  	;0
	214  1881  FETCH_CONSTANT/99         #221=     ?0                   112:'FILE_BINARY'   	;16
	215  1881  SEND_VAL_EX/116           ?96       #221                 ?2                  	;0
	216  1881  DO_FCALL_BY_NAME/131      $222=     ?0                   ?0                  	;0
	217  1881  ASSIGN_DIM/147            ?100      16?26                16?34               	;0
	218  1881  OP_DATA/137               ?0        $222                 ?0                  	;0
	219  1882  UNSET_DIM/75              ?0        16?26                16?35               	;0
	220  1882  JMP/42                    ?0        ?234                 ?0                  	;0	>>234
	221  1884  CONCAT/8                  #223=     115:'could not load --' 16?35               	;0	<<210
	222  1884  CONCAT/8                  #224=     #223                 116:'-- '           	;0
	223  1884  INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'dirname'       	;1
	224  1884  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	225  1884  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
	226  1884  CONCAT/8                  #226=     #224                 $225                	;0
	227  1884  CONCAT/8                  #227=     #226                 119:'/'             	;0
	228  1884  INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'trim'          	;1
	229  1884  FETCH_DIM_FUNC_ARG/93     $228=     16?26                16?35               	;1
	230  1884  SEND_VAR_EX/66            ?80       $228                 ?1                  	;0
	231  1884  DO_FCALL_BY_NAME/131      $229=     ?0                   ?0                  	;0
	232  1884  CONCAT/8                  #230=     #227                 $229                	;0
	233  1884  ASSIGN/38                 ?112      16?28                #230                	;0
	234  1884  JMP/42                    ?0        ?185                 ?0                  	;0	>>185	<<189,220
	235  1884  FE_FREE/127               ?0        $206                 ?0                  	;0	<<184
	236  1889  ISSET_ISEMPTY_DIM_OBJ/115 #232=     16?26                122:'EXPECT'        	;33554432
	237  1889  ISSET_ISEMPTY_DIM_OBJ/115 #233=     16?26                123:'EXPECTF'       	;33554432
	238  1889  ADD/1                     #234=     #232                 #233                	;0
	239  1889  ISSET_ISEMPTY_DIM_OBJ/115 #235=     16?26                124:'EXPECTREGEX'   	;33554432
	240  1889  ADD/1                     #236=     #234                 #235                	;0
	241  1889  IS_NOT_EQUAL/18           #237=     #236                 125:1               	;0
	242  1889  JMPZ/43                   ?0        #237                 ?244                	;0	>>244
	243  1890  ASSIGN/38                 ?119      16?28                126:'missing section --EXPECT--, --EXPECTF-- or --EXPECTREGEX--'	;0
	244  1894  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'fclose'        	;1	<<155,160,242
	245  1894  SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	246  1894  DO_FCALL_BY_NAME/131      ?120      ?0                   ?0                  	;0
	247  1896  INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'str_replace'   	;3
	248  1896  FETCH_CONSTANT/99         #240=     ?0                   131:'TEST_PHP_SRCDIR'	;16
	249  1896  CONCAT/8                  #241=     #240                 134:'/'             	;0
	250  1896  SEND_VAL_EX/116           ?80       #241                 ?1                  	;0
	251  1896  SEND_VAL_EX/116           ?96       135:''               ?2                  	;0
	252  1896  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
	253  1896  DO_FCALL_BY_NAME/131      $242=     ?0                   ?0                  	;0
	254  1896  ASSIGN/38                 ?124      16?36                $242                	;0
	255  1897  ASSIGN/38                 ?125      16?37                16?36               	;0
	256  1899  IS_NOT_IDENTICAL/16       #245=     16?28                136:NULL            	;0
	257  1899  JMPZ/43                   ?0        #245                 ?283                	;0	>>283
	258  1900  INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'show_result'   	;3
	259  1900  SEND_VAL_EX/116           ?80       139:'BORK'           ?1                  	;0
	260  1900  SEND_VAR_EX/66            ?96       16?28                ?2                  	;0
	261  1900  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	262  1900  DO_FCALL_BY_NAME/131      ?127      ?0                   ?0                  	;0
	263  1902  INIT_ARRAY/71             #249=     16?1                 141:'name'          	;22
	264  1903  ADD_ARRAY_ELEMENT/72      #249=     142:''               143:'test_name'     	;0
	265  1904  ADD_ARRAY_ELEMENT/72      #249=     144:''               145:'output'        	;0
	266  1905  ADD_ARRAY_ELEMENT/72      #249=     146:''               147:'diff'          	;0
	267  1906  ROPE_INIT/54              #251=     ?0                   16?28               	;4
	268  1906  ROPE_ADD/55               #251=     #251                 148:' ['            	;1
	269  1906  ROPE_ADD/55               #251=     #251                 16?1                	;2
	270  1906  ROPE_END/56               #250=     #251                 149:']'             	;3
	271  1906  ADD_ARRAY_ELEMENT/72      #249=     #250                 150:'info'          	;0
	272  1901  FETCH_DIM_W/84            $247=     16?5                 140:'BORKED'        	;0
	273  1901  ASSIGN_DIM/147            ?129      $247                 ?4442274            	;0
	274  1906  OP_DATA/137               ?0        #249                 ?0                  	;0
	275  1909  INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'junit_mark_test_as'	;5
	276  1909  SEND_VAL_EX/116           ?80       153:'BORK'           ?1                  	;0
	277  1909  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	278  1909  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	279  1909  SEND_VAL_EX/116           ?128      154:0                ?4                  	;0
	280  1909  SEND_VAR_EX/66            ?144      16?28                ?5                  	;0
	281  1909  DO_FCALL_BY_NAME/131      ?134      ?0                   ?0                  	;0
	282  1910  RETURN/62                 ?0        155:'BORKED'         ?0                  	;0
	283  1913  ISSET_ISEMPTY_DIM_OBJ/115 #254=     16?26                156:'CAPTURE_STDIO' 	;33554432	<<257
	284  1913  JMPZ/43                   ?0        #254                 ?307                	;0	>>307
	285  1914  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'stripos'       	;2
	286  1914  FETCH_DIM_FUNC_ARG/93     $255=     16?26                159:'CAPTURE_STDIO' 	;1
	287  1914  SEND_VAR_EX/66            ?80       $255                 ?1                  	;0
	288  1914  SEND_VAL_EX/116           ?96       160:'STDIN'          ?2                  	;0
	289  1914  DO_FCALL_BY_NAME/131      $256=     ?0                   ?0                  	;0
	290  1914  IS_NOT_IDENTICAL/16       #257=     $256                 161:false           	;0
	291  1914  ASSIGN/38                 ?139      16?38                #257                	;0
	292  1915  INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'stripos'       	;2
	293  1915  FETCH_DIM_FUNC_ARG/93     $259=     16?26                164:'CAPTURE_STDIO' 	;1
	294  1915  SEND_VAR_EX/66            ?80       $259                 ?1                  	;0
	295  1915  SEND_VAL_EX/116           ?96       165:'STDOUT'         ?2                  	;0
	296  1915  DO_FCALL_BY_NAME/131      $260=     ?0                   ?0                  	;0
	297  1915  IS_NOT_IDENTICAL/16       #261=     $260                 166:false           	;0
	298  1915  ASSIGN/38                 ?143      16?39                #261                	;0
	299  1916  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'stripos'       	;2
	300  1916  FETCH_DIM_FUNC_ARG/93     $263=     16?26                169:'CAPTURE_STDIO' 	;1
	301  1916  SEND_VAR_EX/66            ?80       $263                 ?1                  	;0
	302  1916  SEND_VAL_EX/116           ?96       170:'STDERR'         ?2                  	;0
	303  1916  DO_FCALL_BY_NAME/131      $264=     ?0                   ?0                  	;0
	304  1916  IS_NOT_IDENTICAL/16       #265=     $264                 171:false           	;0
	305  1916  ASSIGN/38                 ?147      16?40                #265                	;0
	306  1916  JMP/42                    ?0        ?310                 ?0                  	;0	>>310
	307  1918  ASSIGN/38                 ?148      16?38                172:true            	;0	<<284
	308  1919  ASSIGN/38                 ?149      16?39                173:true            	;0
	309  1920  ASSIGN/38                 ?150      16?40                174:true            	;0
	310  1922  JMPZ_EX/46                #270=     16?39                ?312                	;0	>>312	<<306
	311  1922  BOOL/52                   #270=     16?40                ?0                  	;0
	312  1922  JMPZ/43                   ?0        #270                 ?315                	;0	>>315	<<310
	313  1923  ASSIGN/38                 ?152      16?41                175:' 2>&1'         	;0
	314  1923  JMP/42                    ?0        ?316                 ?0                  	;0	>>316
	315  1925  ASSIGN/38                 ?153      16?41                176:''              	;0	<<312
	316  1928  INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'trim'          	;1	<<314
	317  1928  FETCH_DIM_FUNC_ARG/93     $273=     16?26                179:'TEST'          	;1
	318  1928  SEND_VAR_EX/66            ?80       $273                 ?1                  	;0
	319  1928  DO_FCALL_BY_NAME/131      $274=     ?0                   ?0                  	;0
	320  1928  ASSIGN/38                 ?156      16?42                $274                	;0
	321  1931  INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'array_key_exists'	;2
	322  1931  SEND_VAL_EX/116           ?80       182:'CGI'            ?1                  	;0
	323  1931  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	324  1931  DO_FCALL_BY_NAME/131      $276=     ?0                   ?0                  	;0
	325  1931  JMPNZ_EX/47               #277=     $276                 ?329                	;0	>>329
	326  1931  ISSET_ISEMPTY_DIM_OBJ/115 #278=     16?26                183:'GET'           	;16777216
	327  1931  BOOL_NOT/13               #279=     #278                 ?0                  	;0
	328  1931  BOOL/52                   #277=     #279                 ?0                  	;0
	329  1931  JMPNZ_EX/47               #277=     #277                 ?333                	;0	>>333	<<325
	330  1931  ISSET_ISEMPTY_DIM_OBJ/115 #280=     16?26                184:'POST'          	;16777216
	331  1931  BOOL_NOT/13               #281=     #280                 ?0                  	;0
	332  1931  BOOL/52                   #277=     #281                 ?0                  	;0
	333  1931  JMPNZ_EX/47               #277=     #277                 ?337                	;0	>>337	<<329
	334  1931  ISSET_ISEMPTY_DIM_OBJ/115 #282=     16?26                185:'GZIP_POST'     	;16777216
	335  1931  BOOL_NOT/13               #283=     #282                 ?0                  	;0
	336  1931  BOOL/52                   #277=     #283                 ?0                  	;0
	337  1931  JMPNZ_EX/47               #277=     #277                 ?341                	;0	>>341	<<333
	338  1931  ISSET_ISEMPTY_DIM_OBJ/115 #284=     16?26                186:'DEFLATE_POST'  	;16777216
	339  1931  BOOL_NOT/13               #285=     #284                 ?0                  	;0
	340  1931  BOOL/52                   #277=     #285                 ?0                  	;0
	341  1931  JMPNZ_EX/47               #277=     #277                 ?345                	;0	>>345	<<337
	342  1931  ISSET_ISEMPTY_DIM_OBJ/115 #286=     16?26                187:'POST_RAW'      	;16777216
	343  1931  BOOL_NOT/13               #287=     #286                 ?0                  	;0
	344  1931  BOOL/52                   #277=     #287                 ?0                  	;0
	345  1931  JMPNZ_EX/47               #277=     #277                 ?349                	;0	>>349	<<341
	346  1931  ISSET_ISEMPTY_DIM_OBJ/115 #288=     16?26                188:'PUT'           	;16777216
	347  1931  BOOL_NOT/13               #289=     #288                 ?0                  	;0
	348  1931  BOOL/52                   #277=     #289                 ?0                  	;0
	349  1931  JMPNZ_EX/47               #277=     #277                 ?353                	;0	>>353	<<345
	350  1931  ISSET_ISEMPTY_DIM_OBJ/115 #290=     16?26                189:'COOKIE'        	;16777216
	351  1931  BOOL_NOT/13               #291=     #290                 ?0                  	;0
	352  1931  BOOL/52                   #277=     #291                 ?0                  	;0
	353  1931  JMPNZ_EX/47               #277=     #277                 ?357                	;0	>>357	<<349
	354  1931  ISSET_ISEMPTY_DIM_OBJ/115 #292=     16?26                190:'EXPECTHEADERS' 	;16777216
	355  1931  BOOL_NOT/13               #293=     #292                 ?0                  	;0
	356  1931  BOOL/52                   #277=     #293                 ?0                  	;0
	357  1931  JMPZ/43                   ?0        #277                 ?457                	;0	>>457	<<353
	358  1932  ISSET_ISEMPTY_CV/197      #294=     16?24                ?0                  	;33554432
	359  1932  JMPZ/43                   ?0        #294                 ?363                	;0	>>363
	360  1933  CONCAT/8                  #295=     16?24                191:' -C '          	;0
	361  1933  ASSIGN/38                 ?177      16?0                 #295                	;0
	362  1933  JMP/42                    ?0        ?456                 ?0                  	;0	>>456
	363  1934  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'strncasecmp'   	;3	<<359
	364  1934  FETCH_CONSTANT/99         #297=     ?0                   194:'PHP_OS'        	;16
	365  1934  SEND_VAL_EX/116           ?80       #297                 ?1                  	;0
	366  1934  SEND_VAL_EX/116           ?96       197:'win'            ?2                  	;0
	367  1934  SEND_VAL_EX/116           ?112      198:3                ?3                  	;0
	368  1934  DO_FCALL_BY_NAME/131      $298=     ?0                   ?0                  	;0
	369  1934  BOOL_NOT/13               #299=     $298                 ?0                  	;0
	370  1934  JMPZ_EX/46                #299=     #299                 ?379                	;0	>>379
	371  1934  INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'file_exists'   	;1
	372  1934  INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'dirname'       	;1
	373  1934  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	374  1934  DO_FCALL_BY_NAME/131      $300=     ?0                   ?0                  	;0
	375  1934  CONCAT/8                  #301=     $300                 203:'/php-cgi.exe'  	;0
	376  1934  SEND_VAL_EX/116           ?80       #301                 ?1                  	;0
	377  1934  DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
	378  1934  BOOL/52                   #299=     $302                 ?0                  	;0
	379  1934  JMPZ/43                   ?0        #299                 ?390                	;0	>>390	<<370
	380  1935  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'realpath'      	;1
	381  1935  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'dirname'       	;1
	382  1935  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	383  1935  DO_FCALL_BY_NAME/131      $303=     ?0                   ?0                  	;0
	384  1935  CONCAT/8                  #304=     $303                 208:'/php-cgi.exe'  	;0
	385  1935  SEND_VAL_EX/116           ?80       #304                 ?1                  	;0
	386  1935  DO_FCALL_BY_NAME/131      $305=     ?0                   ?0                  	;0
	387  1935  CONCAT/8                  #306=     $305                 209:' -C '          	;0
	388  1935  ASSIGN/38                 ?188      16?0                 #306                	;0
	389  1935  JMP/42                    ?0        ?456                 ?0                  	;0	>>456
	390  1937  INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'file_exists'   	;1	<<379
	391  1937  INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'dirname'       	;1
	392  1937  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	393  1937  DO_FCALL_BY_NAME/131      $308=     ?0                   ?0                  	;0
	394  1937  CONCAT/8                  #309=     $308                 214:'/../../sapi/cgi/php-cgi'	;0
	395  1937  SEND_VAL_EX/116           ?80       #309                 ?1                  	;0
	396  1937  DO_FCALL_BY_NAME/131      $310=     ?0                   ?0                  	;0
	397  1937  JMPZ/43                   ?0        $310                 ?408                	;0	>>408
	398  1938  INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'realpath'      	;1
	399  1938  INIT_FCALL_BY_NAME/59     ?0        ?0                   217:'dirname'       	;1
	400  1938  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	401  1938  DO_FCALL_BY_NAME/131      $311=     ?0                   ?0                  	;0
	402  1938  CONCAT/8                  #312=     $311                 219:'/../../sapi/cgi/php-cgi'	;0
	403  1938  SEND_VAL_EX/116           ?80       #312                 ?1                  	;0
	404  1938  DO_FCALL_BY_NAME/131      $313=     ?0                   ?0                  	;0
	405  1938  CONCAT/8                  #314=     $313                 220:' -C '          	;0
	406  1938  ASSIGN/38                 ?196      16?0                 #314                	;0
	407  1938  JMP/42                    ?0        ?456                 ?0                  	;0	>>456
	408  1939  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'file_exists'   	;1	<<397
	409  1939  SEND_VAL_EX/116           ?80       223:'./sapi/cgi/php-cgi' ?1                  	;0
	410  1939  DO_FCALL_BY_NAME/131      $316=     ?0                   ?0                  	;0
	411  1939  JMPZ/43                   ?0        $316                 ?418                	;0	>>418
	412  1940  INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'realpath'      	;1
	413  1940  SEND_VAL_EX/116           ?80       226:'./sapi/cgi/php-cgi' ?1                  	;0
	414  1940  DO_FCALL_BY_NAME/131      $317=     ?0                   ?0                  	;0
	415  1940  CONCAT/8                  #318=     $317                 227:' -C '          	;0
	416  1940  ASSIGN/38                 ?200      16?0                 #318                	;0
	417  1940  JMP/42                    ?0        ?456                 ?0                  	;0	>>456
	418  1941  INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'file_exists'   	;1	<<411
	419  1941  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'dirname'       	;1
	420  1941  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	421  1941  DO_FCALL_BY_NAME/131      $320=     ?0                   ?0                  	;0
	422  1941  CONCAT/8                  #321=     $320                 232:'/php-cgi'      	;0
	423  1941  SEND_VAL_EX/116           ?80       #321                 ?1                  	;0
	424  1941  DO_FCALL_BY_NAME/131      $322=     ?0                   ?0                  	;0
	425  1941  JMPZ/43                   ?0        $322                 ?436                	;0	>>436
	426  1942  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'realpath'      	;1
	427  1942  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'dirname'       	;1
	428  1942  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	429  1942  DO_FCALL_BY_NAME/131      $323=     ?0                   ?0                  	;0
	430  1942  CONCAT/8                  #324=     $323                 237:'/php-cgi'      	;0
	431  1942  SEND_VAL_EX/116           ?80       #324                 ?1                  	;0
	432  1942  DO_FCALL_BY_NAME/131      $325=     ?0                   ?0                  	;0
	433  1942  CONCAT/8                  #326=     $325                 238:' -C '          	;0
	434  1942  ASSIGN/38                 ?208      16?0                 #326                	;0
	435  1942  JMP/42                    ?0        ?456                 ?0                  	;0	>>456
	436  1944  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'show_result'   	;4	<<425
	437  1944  SEND_VAL_EX/116           ?80       241:'SKIP'           ?1                  	;0
	438  1944  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
	439  1944  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	440  1944  SEND_VAL_EX/116           ?128      242:'reason: CGI not available' ?4                  	;0
	441  1944  DO_FCALL_BY_NAME/131      ?209      ?0                   ?0                  	;0
	442  1946  INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'junit_init_suite'	;1
	443  1946  INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'junit_get_suitename_for'	;1
	444  1946  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	445  1946  DO_FCALL_BY_NAME/131      $329=     ?0                   ?0                  	;0
	446  1946  SEND_VAR_NO_REF_EX/50     ?80       $329                 ?1                  	;0
	447  1946  DO_FCALL_BY_NAME/131      ?211      ?0                   ?0                  	;0
	448  1947  INIT_FCALL_BY_NAME/59     ?0        ?0                   247:'junit_mark_test_as'	;5
	449  1947  SEND_VAL_EX/116           ?80       249:'SKIP'           ?1                  	;0
	450  1947  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	451  1947  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	452  1947  SEND_VAL_EX/116           ?128      250:0                ?4                  	;0
	453  1947  SEND_VAL_EX/116           ?144      251:'CGI not available' ?5                  	;0
	454  1947  DO_FCALL_BY_NAME/131      ?212      ?0                   ?0                  	;0
	455  1948  RETURN/62                 ?0        252:'SKIPPED'        ?0                  	;0
	456  1951  ASSIGN/38                 ?213      16?43                253:true            	;0	<<362,389,407,417,435
	457  1955  ASSIGN/38                 ?214      16?44                254:''              	;0	<<357
	458  1956  INIT_FCALL_BY_NAME/59     ?0        ?0                   255:'array_key_exists'	;2
	459  1956  SEND_VAL_EX/116           ?80       257:'PHPDBG'         ?1                  	;0
	460  1956  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	461  1956  DO_FCALL_BY_NAME/131      $334=     ?0                   ?0                  	;0
	462  1956  JMPZ/43                   ?0        $334                 ?496                	;0	>>496
	463  1957  ISSET_ISEMPTY_DIM_OBJ/115 #335=     16?26                258:'STDIN'         	;33554432
	464  1957  BOOL_NOT/13               #336=     #335                 ?0                  	;0
	465  1957  JMPZ/43                   ?0        #336                 ?470                	;0	>>470
	466  1958  FETCH_DIM_R/81            $338=     16?26                260:'PHPDBG'        	;0
	467  1958  CONCAT/8                  #339=     $338                 261:'
'             	;0
	468  1958  ASSIGN_DIM/147            ?218      16?26                259:'STDIN'         	;0
	469  1958  OP_DATA/137               ?0        #339                 ?0                  	;0
	470  1961  ISSET_ISEMPTY_CV/197      #340=     16?25                ?0                  	;33554432	<<465
	471  1961  JMPZ/43                   ?0        #340                 ?476                	;0	>>476
	472  1962  CONCAT/8                  #341=     16?25                262:' -qIb'         	;0
	473  1962  ASSIGN/38                 ?223      16?0                 #341                	;0
	474  1966  ASSIGN/38                 ?224      16?44                263:'-rr'           	;0
	475  1966  JMP/42                    ?0        ?496                 ?0                  	;0	>>496
	476  1968  INIT_FCALL_BY_NAME/59     ?0        ?0                   264:'show_result'   	;4	<<471
	477  1968  SEND_VAL_EX/116           ?80       266:'SKIP'           ?1                  	;0
	478  1968  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
	479  1968  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	480  1968  SEND_VAL_EX/116           ?128      267:'reason: phpdbg not available' ?4                  	;0
	481  1968  DO_FCALL_BY_NAME/131      ?225      ?0                   ?0                  	;0
	482  1970  INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'junit_init_suite'	;1
	483  1970  INIT_FCALL_BY_NAME/59     ?0        ?0                   270:'junit_get_suitename_for'	;1
	484  1970  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	485  1970  DO_FCALL_BY_NAME/131      $345=     ?0                   ?0                  	;0
	486  1970  SEND_VAR_NO_REF_EX/50     ?80       $345                 ?1                  	;0
	487  1970  DO_FCALL_BY_NAME/131      ?227      ?0                   ?0                  	;0
	488  1971  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'junit_mark_test_as'	;5
	489  1971  SEND_VAL_EX/116           ?80       274:'SKIP'           ?1                  	;0
	490  1971  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	491  1971  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	492  1971  SEND_VAL_EX/116           ?128      275:0                ?4                  	;0
	493  1971  SEND_VAL_EX/116           ?144      276:'phpdbg not available' ?5                  	;0
	494  1971  DO_FCALL_BY_NAME/131      ?228      ?0                   ?0                  	;0
	495  1972  RETURN/62                 ?0        277:'SKIPPED'        ?0                  	;0
	496  1976  BOOL_NOT/13               #348=     16?17                ?0                  	;0	<<462,475
	497  1976  JMPZ_EX/46                #348=     #348                 ?500                	;0	>>500
	498  1976  BOOL_NOT/13               #349=     16?21                ?0                  	;0
	499  1976  BOOL/52                   #348=     #349                 ?0                  	;0
	500  1976  JMPZ/43                   ?0        #348                 ?505                	;0	>>505	<<497
	501  1977  INIT_FCALL_BY_NAME/59     ?0        ?0                   278:'show_test'     	;2
	502  1977  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	503  1977  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	504  1977  DO_FCALL_BY_NAME/131      ?231      ?0                   ?0                  	;0
	505  1980  INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'is_array'      	;1	<<500
	506  1980  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	507  1980  DO_FCALL_BY_NAME/131      $351=     ?0                   ?0                  	;0
	508  1980  JMPZ/43                   ?0        $351                 ?513                	;0	>>513
	509  1981  FETCH_DIM_R/81            $352=     16?8                 282:'dir'           	;0
	510  1981  ASSIGN/38                 $353=     16?46                $352                	;0
	511  1981  ASSIGN/38                 ?235      16?45                $353                	;0
	512  1981  JMP/42                    ?0        ?521                 ?0                  	;0	>>521
	513  1983  INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'realpath'      	;1	<<508
	514  1983  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'dirname'       	;1
	515  1983  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	516  1983  DO_FCALL_BY_NAME/131      $355=     ?0                   ?0                  	;0
	517  1983  SEND_VAR_NO_REF_EX/50     ?80       $355                 ?1                  	;0
	518  1983  DO_FCALL_BY_NAME/131      $356=     ?0                   ?0                  	;0
	519  1983  ASSIGN/38                 $357=     16?46                $356                	;0
	520  1983  ASSIGN/38                 ?239      16?45                $357                	;0
	521  1986  JMPZ_EX/46                #359=     16?12                ?523                	;0	>>523	<<512
	522  1986  BOOL/52                   #359=     16?13                ?0                  	;0
	523  1986  JMPZ/43                   ?0        #359                 ?530                	;0	>>530	<<521
	524  1987  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'str_replace'   	;3
	525  1987  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	526  1987  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
	527  1987  SEND_VAR_EX/66            ?112      16?45                ?3                  	;0
	528  1987  DO_FCALL_BY_NAME/131      $360=     ?0                   ?0                  	;0
	529  1987  ASSIGN/38                 ?242      16?45                $360                	;0
	530  1990  INIT_FCALL_BY_NAME/59     ?0        ?0                   289:'basename'      	;2	<<523
	531  1990  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	532  1990  SEND_VAL_EX/116           ?96       291:'phpt'           ?2                  	;0
	533  1990  DO_FCALL_BY_NAME/131      $362=     ?0                   ?0                  	;0
	534  1990  ASSIGN/38                 ?244      16?47                $362                	;0
	535  1992  FETCH_CONSTANT/99         #364=     ?0                   292:'DIRECTORY_SEPARATOR'	;16
	536  1992  CONCAT/8                  #365=     16?45                #364                	;0
	537  1992  CONCAT/8                  #366=     #365                 16?47               	;0
	538  1992  CONCAT/8                  #367=     #366                 295:'diff'          	;0
	539  1992  ASSIGN/38                 ?249      16?48                #367                	;0
	540  1993  FETCH_CONSTANT/99         #369=     ?0                   296:'DIRECTORY_SEPARATOR'	;16
	541  1993  CONCAT/8                  #370=     16?45                #369                	;0
	542  1993  CONCAT/8                  #371=     #370                 16?47               	;0
	543  1993  CONCAT/8                  #372=     #371                 299:'log'           	;0
	544  1993  ASSIGN/38                 ?254      16?49                #372                	;0
	545  1994  FETCH_CONSTANT/99         #374=     ?0                   300:'DIRECTORY_SEPARATOR'	;16
	546  1994  CONCAT/8                  #375=     16?45                #374                	;0
	547  1994  CONCAT/8                  #376=     #375                 16?47               	;0
	548  1994  CONCAT/8                  #377=     #376                 303:'exp'           	;0
	549  1994  ASSIGN/38                 ?259      16?50                #377                	;0
	550  1995  FETCH_CONSTANT/99         #379=     ?0                   304:'DIRECTORY_SEPARATOR'	;16
	551  1995  CONCAT/8                  #380=     16?45                #379                	;0
	552  1995  CONCAT/8                  #381=     #380                 16?47               	;0
	553  1995  CONCAT/8                  #382=     #381                 307:'out'           	;0
	554  1995  ASSIGN/38                 ?264      16?51                #382                	;0
	555  1996  FETCH_CONSTANT/99         #384=     ?0                   308:'DIRECTORY_SEPARATOR'	;16
	556  1996  CONCAT/8                  #385=     16?45                #384                	;0
	557  1996  CONCAT/8                  #386=     #385                 16?47               	;0
	558  1996  CONCAT/8                  #387=     #386                 311:'mem'           	;0
	559  1996  ASSIGN/38                 ?269      16?52                #387                	;0
	560  1997  FETCH_CONSTANT/99         #389=     ?0                   312:'DIRECTORY_SEPARATOR'	;16
	561  1997  CONCAT/8                  #390=     16?45                #389                	;0
	562  1997  CONCAT/8                  #391=     #390                 16?47               	;0
	563  1997  CONCAT/8                  #392=     #391                 315:'sh'            	;0
	564  1997  ASSIGN/38                 ?274      16?53                #392                	;0
	565  1998  FETCH_CONSTANT/99         #394=     ?0                   316:'DIRECTORY_SEPARATOR'	;16
	566  1998  CONCAT/8                  #395=     16?45                #394                	;0
	567  1998  CONCAT/8                  #396=     #395                 16?47               	;0
	568  1998  CONCAT/8                  #397=     #396                 319:'php'           	;0
	569  1998  ASSIGN/38                 ?279      16?54                #397                	;0
	570  1999  FETCH_CONSTANT/99         #399=     ?0                   320:'DIRECTORY_SEPARATOR'	;16
	571  1999  CONCAT/8                  #400=     16?46                #399                	;0
	572  1999  CONCAT/8                  #401=     #400                 16?47               	;0
	573  1999  CONCAT/8                  #402=     #401                 323:'php'           	;0
	574  1999  ASSIGN/38                 ?284      16?55                #402                	;0
	575  2000  FETCH_CONSTANT/99         #404=     ?0                   324:'DIRECTORY_SEPARATOR'	;16
	576  2000  CONCAT/8                  #405=     16?45                #404                	;0
	577  2000  CONCAT/8                  #406=     #405                 16?47               	;0
	578  2000  CONCAT/8                  #407=     #406                 327:'skip.php'      	;0
	579  2000  ASSIGN/38                 ?289      16?56                #407                	;0
	580  2001  FETCH_CONSTANT/99         #409=     ?0                   328:'DIRECTORY_SEPARATOR'	;16
	581  2001  CONCAT/8                  #410=     16?46                #409                	;0
	582  2001  CONCAT/8                  #411=     #410                 16?47               	;0
	583  2001  CONCAT/8                  #412=     #411                 331:'skip.php'      	;0
	584  2001  ASSIGN/38                 ?294      16?57                #412                	;0
	585  2002  FETCH_CONSTANT/99         #414=     ?0                   332:'DIRECTORY_SEPARATOR'	;16
	586  2002  CONCAT/8                  #415=     16?45                #414                	;0
	587  2002  CONCAT/8                  #416=     #415                 16?47               	;0
	588  2002  CONCAT/8                  #417=     #416                 335:'clean.php'     	;0
	589  2002  ASSIGN/38                 ?299      16?58                #417                	;0
	590  2003  FETCH_CONSTANT/99         #419=     ?0                   336:'DIRECTORY_SEPARATOR'	;16
	591  2003  CONCAT/8                  #420=     16?46                #419                	;0
	592  2003  CONCAT/8                  #421=     #420                 16?47               	;0
	593  2003  CONCAT/8                  #422=     #421                 339:'clean.php'     	;0
	594  2003  ASSIGN/38                 ?304      16?59                #422                	;0
	595  2004  FETCH_CONSTANT/99         #424=     ?0                   340:'DIRECTORY_SEPARATOR'	;16
	596  2004  CONCAT/8                  #425=     16?45                #424                	;0
	597  2004  CONCAT/8                  #426=     #425                 16?47               	;0
	598  2004  CONCAT/8                  #427=     #426                 343:'preload.php'   	;0
	599  2004  ASSIGN/38                 ?309      16?60                #427                	;0
	600  2005  FETCH_CONSTANT/99         #429=     ?0                   344:'DIRECTORY_SEPARATOR'	;16
	601  2005  CONCAT/8                  #430=     16?45                #429                	;0
	602  2005  CONCAT/8                  #431=     #430                 16?47               	;0
	603  2005  CONCAT/8                  #432=     #431                 347:'post'          	;0
	604  2005  ASSIGN/38                 ?314      16?61                #432                	;0
	605  2006  INIT_FCALL_BY_NAME/59     ?0        ?0                   348:'str_replace'   	;3
	606  2006  FETCH_CONSTANT/99         #434=     ?0                   350:'DIRECTORY_SEPARATOR'	;16
	607  2006  CONCAT/8                  #435=     353:'bin\\php\\lib\\php\\build' #434                	;0
	608  2006  SEND_VAL_EX/116           ?80       #435                 ?1                  	;0
	609  2006  SEND_VAL_EX/116           ?96       354:''               ?2                  	;0
	610  2006  SEND_VAR_EX/66            ?112      16?55                ?3                  	;0
	611  2006  DO_FCALL_BY_NAME/131      $436=     ?0                   ?0                  	;0
	612  2006  CONCAT/8                  #437=     $436                 355:'t'             	;0
	613  2006  ASSIGN/38                 ?319      16?62                #437                	;0
	614  2008  JMPZ_EX/46                #439=     16?12                ?616                	;0	>>616
	615  2008  BOOL/52                   #439=     16?13                ?0                  	;0
	616  2008  JMPZ/43                   ?0        #439                 ?679                	;0	>>679	<<614
	617  2009  ASSIGN_CONCAT/30          ?321      16?56                356:'s'             	;0
	618  2010  ASSIGN_CONCAT/30          ?322      16?54                357:'s'             	;0
	619  2011  ASSIGN_CONCAT/30          ?323      16?58                358:'s'             	;0
	620  2012  FETCH_CONSTANT/99         #443=     ?0                   359:'DIRECTORY_SEPARATOR'	;16
	621  2012  CONCAT/8                  #444=     16?45                #443                	;0
	622  2012  INIT_FCALL_BY_NAME/59     ?0        ?0                   362:'basename'      	;1
	623  2012  INIT_FCALL_BY_NAME/59     ?0        ?0                   364:'is_array'      	;1
	624  2012  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	625  2012  DO_FCALL_BY_NAME/131      $445=     ?0                   ?0                  	;0
	626  2012  JMPZ/43                   ?0        $445                 ?630                	;0	>>630
	627  2012  FETCH_DIM_R/81            $446=     16?1                 366:1               	;0
	628  2012  QM_ASSIGN/22              #447=     $446                 ?0                  	;0
	629  2012  JMP/42                    ?0        ?631                 ?0                  	;0	>>631
	630  2012  QM_ASSIGN/22              #447=     16?1                 ?0                  	;0	<<626
	631  2012  SEND_VAL_EX/116           ?80       #447                 ?1                  	;0	<<629
	632  2012  DO_FCALL_BY_NAME/131      $448=     ?0                   ?0                  	;0
	633  2012  CONCAT/8                  #449=     #444                 $448                	;0
	634  2012  CONCAT/8                  #450=     #449                 367:'.phps'         	;0
	635  2012  ASSIGN/38                 ?332      16?63                #450                	;0
	636  2014  INIT_FCALL_BY_NAME/59     ?0        ?0                   368:'is_dir'        	;1
	637  2014  INIT_FCALL_BY_NAME/59     ?0        ?0                   370:'dirname'       	;1
	638  2014  SEND_VAR_EX/66            ?80       16?63                ?1                  	;0
	639  2014  DO_FCALL_BY_NAME/131      $452=     ?0                   ?0                  	;0
	640  2014  SEND_VAR_NO_REF_EX/50     ?80       $452                 ?1                  	;0
	641  2014  DO_FCALL_BY_NAME/131      $453=     ?0                   ?0                  	;0
	642  2014  BOOL_NOT/13               #454=     $453                 ?0                  	;0
	643  2014  JMPZ/43                   ?0        #454                 ?661                	;0	>>661
	644  2015  INIT_FCALL_BY_NAME/59     ?0        ?0                   372:'mkdir'         	;3
	645  2015  INIT_FCALL_BY_NAME/59     ?0        ?0                   374:'dirname'       	;1
	646  2015  SEND_VAR_EX/66            ?80       16?63                ?1                  	;0
	647  2015  DO_FCALL_BY_NAME/131      $455=     ?0                   ?0                  	;0
	648  2015  SEND_VAR_NO_REF_EX/50     ?80       $455                 ?1                  	;0
	649  2015  SEND_VAL_EX/116           ?96       376:511              ?2                  	;0
	650  2015  SEND_VAL_EX/116           ?112      377:true             ?3                  	;0
	651  2015  DO_FCALL_BY_NAME/131      $456=     ?0                   ?0                  	;0
	652  2015  JMPNZ_EX/47               #457=     $456                 ?661                	;0	>>661
	653  2015  INIT_FCALL_BY_NAME/59     ?0        ?0                   378:'error'         	;1
	654  2015  INIT_FCALL_BY_NAME/59     ?0        ?0                   380:'dirname'       	;1
	655  2015  SEND_VAR_EX/66            ?80       16?63                ?1                  	;0
	656  2015  DO_FCALL_BY_NAME/131      $458=     ?0                   ?0                  	;0
	657  2015  CONCAT/8                  #459=     382:'Cannot create output directory - ' $458                	;0
	658  2015  SEND_VAL_EX/116           ?80       #459                 ?1                  	;0
	659  2015  DO_FCALL_BY_NAME/131      $460=     ?0                   ?0                  	;0
	660  2015  BOOL/52                   #457=     $460                 ?0                  	;0
	661  2018  ISSET_ISEMPTY_DIM_OBJ/115 #461=     16?26                383:'FILE'          	;33554432	<<643,652
	662  2018  JMPZ/43                   ?0        #461                 ?668                	;0	>>668
	663  2019  INIT_FCALL/61             ?0        ?448                 384:'save_text'     	;2
	664  2019  SEND_VAR/117              ?80       16?63                ?1                  	;0
	665  2019  FETCH_DIM_R/81            $462=     16?26                385:'FILE'          	;0
	666  2019  SEND_VAR/117              ?96       $462                 ?2                  	;0
	667  2019  DO_FCALL/60               ?344      ?0                   ?0                  	;0
	668  2023  INIT_ARRAY/71             #464=     16?63                386:'file'          	;42	<<662
	669  2024  ADD_ARRAY_ELEMENT/72      #464=     16?48                387:'diff'          	;0
	670  2025  ADD_ARRAY_ELEMENT/72      #464=     16?49                388:'log'           	;0
	671  2026  ADD_ARRAY_ELEMENT/72      #464=     16?50                389:'exp'           	;0
	672  2027  ADD_ARRAY_ELEMENT/72      #464=     16?51                390:'out'           	;0
	673  2028  ADD_ARRAY_ELEMENT/72      #464=     16?52                391:'mem'           	;0
	674  2029  ADD_ARRAY_ELEMENT/72      #464=     16?53                392:'sh'            	;0
	675  2030  ADD_ARRAY_ELEMENT/72      #464=     16?54                393:'php'           	;0
	676  2031  ADD_ARRAY_ELEMENT/72      #464=     16?56                394:'skip'          	;0
	677  2032  ADD_ARRAY_ELEMENT/72      #464=     16?58                395:'clean'         	;0
	678  2032  ASSIGN/38                 ?346      16?22                #464                	;0
	679  2036  INIT_FCALL_BY_NAME/59     ?0        ?0                   396:'is_array'      	;1	<<616
	680  2036  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	681  2036  DO_FCALL_BY_NAME/131      $466=     ?0                   ?0                  	;0
	682  2036  JMPZ/43                   ?0        $466                 ?700                	;0	>>700
	683  2037  FETCH_DIM_R/81            $467=     16?8                 398:'prefix'        	;0
	684  2037  CONCAT/8                  #468=     $467                 399:' '             	;0
	685  2037  INIT_FCALL_BY_NAME/59     ?0        ?0                   400:'trim'          	;1
	686  2037  FETCH_DIM_FUNC_ARG/93     $469=     16?26                402:'TEST'          	;1
	687  2037  SEND_VAR_EX/66            ?80       $469                 ?1                  	;0
	688  2037  DO_FCALL_BY_NAME/131      $470=     ?0                   ?0                  	;0
	689  2037  CONCAT/8                  #471=     #468                 $470                	;0
	690  2037  ASSIGN/38                 ?353      16?42                #471                	;0
	691  2038  ASSIGN/38                 ?354      16?37                16?62               	;0
	692  2039  INIT_FCALL_BY_NAME/59     ?0        ?0                   403:'str_replace'   	;3
	693  2039  FETCH_CONSTANT/99         #474=     ?0                   405:'TEST_PHP_SRCDIR'	;16
	694  2039  CONCAT/8                  #475=     #474                 408:'/'             	;0
	695  2039  SEND_VAL_EX/116           ?80       #475                 ?1                  	;0
	696  2039  SEND_VAL_EX/116           ?96       409:''               ?2                  	;0
	697  2039  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	698  2039  DO_FCALL_BY_NAME/131      $476=     ?0                   ?0                  	;0
	699  2039  ASSIGN/38                 ?358      16?36                $476                	;0
	700  2043  BEGIN_SILENCE/57          #478=     ?0                   ?0                  	;0	<<682
	701  2043  INIT_FCALL_BY_NAME/59     ?0        ?0                   410:'unlink'        	;1
	702  2043  SEND_VAR_EX/66            ?80       16?48                ?1                  	;0
	703  2043  DO_FCALL_BY_NAME/131      ?360      ?0                   ?0                  	;0
	704  2043  END_SILENCE/58            ?0        #478                 ?0                  	;0
	705  2044  BEGIN_SILENCE/57          #480=     ?0                   ?0                  	;0
	706  2044  INIT_FCALL_BY_NAME/59     ?0        ?0                   412:'unlink'        	;1
	707  2044  SEND_VAR_EX/66            ?80       16?49                ?1                  	;0
	708  2044  DO_FCALL_BY_NAME/131      ?362      ?0                   ?0                  	;0
	709  2044  END_SILENCE/58            ?0        #480                 ?0                  	;0
	710  2045  BEGIN_SILENCE/57          #482=     ?0                   ?0                  	;0
	711  2045  INIT_FCALL_BY_NAME/59     ?0        ?0                   414:'unlink'        	;1
	712  2045  SEND_VAR_EX/66            ?80       16?50                ?1                  	;0
	713  2045  DO_FCALL_BY_NAME/131      ?364      ?0                   ?0                  	;0
	714  2045  END_SILENCE/58            ?0        #482                 ?0                  	;0
	715  2046  BEGIN_SILENCE/57          #484=     ?0                   ?0                  	;0
	716  2046  INIT_FCALL_BY_NAME/59     ?0        ?0                   416:'unlink'        	;1
	717  2046  SEND_VAR_EX/66            ?80       16?51                ?1                  	;0
	718  2046  DO_FCALL_BY_NAME/131      ?366      ?0                   ?0                  	;0
	719  2046  END_SILENCE/58            ?0        #484                 ?0                  	;0
	720  2047  BEGIN_SILENCE/57          #486=     ?0                   ?0                  	;0
	721  2047  INIT_FCALL_BY_NAME/59     ?0        ?0                   418:'unlink'        	;1
	722  2047  SEND_VAR_EX/66            ?80       16?52                ?1                  	;0
	723  2047  DO_FCALL_BY_NAME/131      ?368      ?0                   ?0                  	;0
	724  2047  END_SILENCE/58            ?0        #486                 ?0                  	;0
	725  2048  BEGIN_SILENCE/57          #488=     ?0                   ?0                  	;0
	726  2048  INIT_FCALL_BY_NAME/59     ?0        ?0                   420:'unlink'        	;1
	727  2048  SEND_VAR_EX/66            ?80       16?53                ?1                  	;0
	728  2048  DO_FCALL_BY_NAME/131      ?370      ?0                   ?0                  	;0
	729  2048  END_SILENCE/58            ?0        #488                 ?0                  	;0
	730  2049  BEGIN_SILENCE/57          #490=     ?0                   ?0                  	;0
	731  2049  INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'unlink'        	;1
	732  2049  SEND_VAR_EX/66            ?80       16?54                ?1                  	;0
	733  2049  DO_FCALL_BY_NAME/131      ?372      ?0                   ?0                  	;0
	734  2049  END_SILENCE/58            ?0        #490                 ?0                  	;0
	735  2050  BEGIN_SILENCE/57          #492=     ?0                   ?0                  	;0
	736  2050  INIT_FCALL_BY_NAME/59     ?0        ?0                   424:'unlink'        	;1
	737  2050  SEND_VAR_EX/66            ?80       16?55                ?1                  	;0
	738  2050  DO_FCALL_BY_NAME/131      ?374      ?0                   ?0                  	;0
	739  2050  END_SILENCE/58            ?0        #492                 ?0                  	;0
	740  2051  BEGIN_SILENCE/57          #494=     ?0                   ?0                  	;0
	741  2051  INIT_FCALL_BY_NAME/59     ?0        ?0                   426:'unlink'        	;1
	742  2051  SEND_VAR_EX/66            ?80       16?56                ?1                  	;0
	743  2051  DO_FCALL_BY_NAME/131      ?376      ?0                   ?0                  	;0
	744  2051  END_SILENCE/58            ?0        #494                 ?0                  	;0
	745  2052  BEGIN_SILENCE/57          #496=     ?0                   ?0                  	;0
	746  2052  INIT_FCALL_BY_NAME/59     ?0        ?0                   428:'unlink'        	;1
	747  2052  SEND_VAR_EX/66            ?80       16?57                ?1                  	;0
	748  2052  DO_FCALL_BY_NAME/131      ?378      ?0                   ?0                  	;0
	749  2052  END_SILENCE/58            ?0        #496                 ?0                  	;0
	750  2053  BEGIN_SILENCE/57          #498=     ?0                   ?0                  	;0
	751  2053  INIT_FCALL_BY_NAME/59     ?0        ?0                   430:'unlink'        	;1
	752  2053  SEND_VAR_EX/66            ?80       16?61                ?1                  	;0
	753  2053  DO_FCALL_BY_NAME/131      ?380      ?0                   ?0                  	;0
	754  2053  END_SILENCE/58            ?0        #498                 ?0                  	;0
	755  2054  BEGIN_SILENCE/57          #500=     ?0                   ?0                  	;0
	756  2054  INIT_FCALL_BY_NAME/59     ?0        ?0                   432:'unlink'        	;1
	757  2054  SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
	758  2054  DO_FCALL_BY_NAME/131      ?382      ?0                   ?0                  	;0
	759  2054  END_SILENCE/58            ?0        #500                 ?0                  	;0
	760  2055  BEGIN_SILENCE/57          #502=     ?0                   ?0                  	;0
	761  2055  INIT_FCALL_BY_NAME/59     ?0        ?0                   434:'unlink'        	;1
	762  2055  SEND_VAR_EX/66            ?80       16?59                ?1                  	;0
	763  2055  DO_FCALL_BY_NAME/131      ?384      ?0                   ?0                  	;0
	764  2055  END_SILENCE/58            ?0        #502                 ?0                  	;0
	765  2056  BEGIN_SILENCE/57          #504=     ?0                   ?0                  	;0
	766  2056  INIT_FCALL_BY_NAME/59     ?0        ?0                   436:'unlink'        	;1
	767  2056  SEND_VAR_EX/66            ?80       16?60                ?1                  	;0
	768  2056  DO_FCALL_BY_NAME/131      ?386      ?0                   ?0                  	;0
	769  2056  END_SILENCE/58            ?0        #504                 ?0                  	;0
	770  2059  ASSIGN_DIM/147            ?387      16?2                 438:'REDIRECT_STATUS'	;0
	771  2059  OP_DATA/137               ?0        439:''               ?0                  	;0
	772  2060  ASSIGN_DIM/147            ?388      16?2                 440:'QUERY_STRING'  	;0
	773  2060  OP_DATA/137               ?0        441:''               ?0                  	;0
	774  2061  ASSIGN_DIM/147            ?389      16?2                 442:'PATH_TRANSLATED'	;0
	775  2061  OP_DATA/137               ?0        443:''               ?0                  	;0
	776  2062  ASSIGN_DIM/147            ?390      16?2                 444:'SCRIPT_FILENAME'	;0
	777  2062  OP_DATA/137               ?0        445:''               ?0                  	;0
	778  2063  ASSIGN_DIM/147            ?391      16?2                 446:'REQUEST_METHOD'	;0
	779  2063  OP_DATA/137               ?0        447:''               ?0                  	;0
	780  2064  ASSIGN_DIM/147            ?392      16?2                 448:'CONTENT_TYPE'  	;0
	781  2064  OP_DATA/137               ?0        449:''               ?0                  	;0
	782  2065  ASSIGN_DIM/147            ?393      16?2                 450:'CONTENT_LENGTH'	;0
	783  2065  OP_DATA/137               ?0        451:''               ?0                  	;0
	784  2066  ASSIGN_DIM/147            ?394      16?2                 452:'TZ'            	;0
	785  2066  OP_DATA/137               ?0        453:''               ?0                  	;0
	786  2068  ISSET_ISEMPTY_DIM_OBJ/115 #514=     16?26                454:'ENV'           	;16777216
	787  2068  BOOL_NOT/13               #515=     #514                 ?0                  	;0
	788  2068  JMPZ/43                   ?0        #515                 ?820                	;0	>>820
	789  2070  INIT_FCALL_BY_NAME/59     ?0        ?0                   455:'explode'       	;2
	790  2070  SEND_VAL_EX/116           ?80       457:'
'              ?1                  	;0
	791  2070  INIT_FCALL_BY_NAME/59     ?0        ?0                   458:'trim'          	;1
	792  2070  FETCH_DIM_FUNC_ARG/93     $516=     16?26                460:'ENV'           	;1
	793  2070  SEND_VAR_EX/66            ?80       $516                 ?1                  	;0
	794  2070  DO_FCALL_BY_NAME/131      $517=     ?0                   ?0                  	;0
	795  2070  SEND_VAR_NO_REF_EX/50     ?96       $517                 ?2                  	;0
	796  2070  DO_FCALL_BY_NAME/131      $518=     ?0                   ?0                  	;0
	797  2070  FE_RESET_R/77             $519=     $518                 ?819                	;0
	798  2070  FE_FETCH_R/78             ?0        $519                 16?64               	;819	>>819	<<818
	799  2071  INIT_FCALL_BY_NAME/59     ?0        ?0                   461:'explode'       	;3
	800  2071  SEND_VAL_EX/116           ?80       463:'='              ?1                  	;0
	801  2071  INIT_FCALL_BY_NAME/59     ?0        ?0                   464:'trim'          	;1
	802  2071  SEND_VAR_EX/66            ?80       16?64                ?1                  	;0
	803  2071  DO_FCALL_BY_NAME/131      $520=     ?0                   ?0                  	;0
	804  2071  SEND_VAR_NO_REF_EX/50     ?96       $520                 ?2                  	;0
	805  2071  SEND_VAL_EX/116           ?112      466:2                ?3                  	;0
	806  2071  DO_FCALL_BY_NAME/131      $521=     ?0                   ?0                  	;0
	807  2071  ASSIGN/38                 ?403      16?64                $521                	;0
	808  2073  ISSET_ISEMPTY_DIM_OBJ/115 #523=     16?64                467:0               	;16777216
	809  2073  BOOL_NOT/13               #524=     #523                 ?0                  	;0
	810  2073  JMPZ_EX/46                #524=     #524                 ?813                	;0	>>813
	811  2073  ISSET_ISEMPTY_DIM_OBJ/115 #525=     16?64                468:1               	;33554432
	812  2073  BOOL/52                   #524=     #525                 ?0                  	;0
	813  2073  JMPZ/43                   ?0        #524                 ?818                	;0	>>818	<<810
	814  2074  FETCH_DIM_R/81            $526=     16?64                469:0               	;0
	815  2074  FETCH_DIM_R/81            $528=     16?64                470:1               	;0
	816  2074  ASSIGN_DIM/147            ?408      16?2                 $526                	;0
	817  2074  OP_DATA/137               ?0        $528                 ?0                  	;0
	818  2074  JMP/42                    ?0        ?798                 ?0                  	;0	>>798	<<813
	819  2074  FE_FREE/127               ?0        $519                 ?0                  	;0	<<797
	820  2080  JMPZ/43                   ?0        16?21                ?826                	;0	>>826	<<788
	821  2080  NOP/0                     ?0        ?0                   ?0                  	;0
	822  2080  FAST_CONCAT/53            #529=     471:'worker'         16?21               	;0
	823  2080  INIT_ARRAY/71             #530=     #529                 472:'opcache.cache_id'	;6
	824  2080  QM_ASSIGN/22              #531=     #530                 ?0                  	;0
	825  2080  JMP/42                    ?0        ?827                 ?0                  	;0	>>827
	826  2080  QM_ASSIGN/22              #531=     473:array (
)        ?0                  	;0	<<820
	827  2080  ASSIGN/38                 ?413      16?65                #531                	;0	<<825
	828  2083  INIT_FCALL_BY_NAME/59     ?0        ?0                   474:'array_key_exists'	;2
	829  2083  SEND_VAL_EX/116           ?80       476:'EXTENSIONS'     ?1                  	;0
	830  2083  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	831  2083  DO_FCALL_BY_NAME/131      $533=     ?0                   ?0                  	;0
	832  2083  JMPZ/43                   ?0        $533                 ?924                	;0	>>924
	833  2084  ASSIGN/38                 ?415      16?66                477:array (
)       	;0
	834  2085  INIT_FCALL_BY_NAME/59     ?0        ?0                   478:'settings2array'	;2
	835  2085  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	836  2085  SEND_VAR_EX/66            ?96       16?66                ?2                  	;0
	837  2085  DO_FCALL_BY_NAME/131      ?416      ?0                   ?0                  	;0
	838  2086  INIT_FCALL_BY_NAME/59     ?0        ?0                   480:'settings2params'	;1
	839  2086  SEND_VAR_EX/66            ?80       16?66                ?1                  	;0
	840  2086  DO_FCALL_BY_NAME/131      $536=     ?0                   ?0                  	;0
	841  2086  ASSIGN/38                 ?418      16?66                $536                	;0
	842  2087  INIT_FCALL_BY_NAME/59     ?0        ?0                   482:'shell_exec'    	;1
	843  2087  ROPE_INIT/54              #539=     ?0                   16?0                	;8
	844  2087  ROPE_ADD/55               #539=     #539                 484:' '             	;1
	845  2087  ROPE_ADD/55               #539=     #539                 16?6                	;2
	846  2087  ROPE_ADD/55               #539=     #539                 485:' '             	;3
	847  2087  ROPE_ADD/55               #539=     #539                 16?44               	;4
	848  2087  ROPE_ADD/55               #539=     #539                 486:' '             	;5
	849  2087  ROPE_ADD/55               #539=     #539                 16?66               	;6
	850  2087  ROPE_END/56               #538=     #539                 487:' -d display_errors=0 -r "echo ini_get(\'extension_dir\');"'	;7
	851  2087  SEND_VAL_EX/116           ?80       #538                 ?1                  	;0
	852  2087  DO_FCALL_BY_NAME/131      $543=     ?0                   ?0                  	;0
	853  2087  ASSIGN/38                 ?425      16?67                $543                	;0
	854  2088  INIT_FCALL_BY_NAME/59     ?0        ?0                   488:'preg_split'    	;2
	855  2088  SEND_VAL_EX/116           ?80       490:'/[
]+/'        ?1                  	;0
	856  2088  INIT_FCALL_BY_NAME/59     ?0        ?0                   491:'trim'          	;1
	857  2088  FETCH_DIM_FUNC_ARG/93     $545=     16?26                493:'EXTENSIONS'    	;1
	858  2088  SEND_VAR_EX/66            ?80       $545                 ?1                  	;0
	859  2088  DO_FCALL_BY_NAME/131      $546=     ?0                   ?0                  	;0
	860  2088  SEND_VAR_NO_REF_EX/50     ?96       $546                 ?2                  	;0
	861  2088  DO_FCALL_BY_NAME/131      $547=     ?0                   ?0                  	;0
	862  2088  ASSIGN/38                 ?429      16?68                $547                	;0
	863  2089  INIT_FCALL_BY_NAME/59     ?0        ?0                   494:'explode'       	;2
	864  2089  SEND_VAL_EX/116           ?80       496:','              ?1                  	;0
	865  2089  INIT_FCALL_BY_NAME/59     ?0        ?0                   497:'shell_exec'    	;1
	866  2089  ROPE_INIT/54              #550=     ?0                   16?0                	;8
	867  2089  ROPE_ADD/55               #550=     #550                 499:' '             	;1
	868  2089  ROPE_ADD/55               #550=     #550                 16?6                	;2
	869  2089  ROPE_ADD/55               #550=     #550                 500:' '             	;3
	870  2089  ROPE_ADD/55               #550=     #550                 16?44               	;4
	871  2089  ROPE_ADD/55               #550=     #550                 501:' '             	;5
	872  2089  ROPE_ADD/55               #550=     #550                 16?66               	;6
	873  2089  ROPE_END/56               #549=     #550                 502:' -d display_errors=0 -r "echo implode(\',\', get_loaded_extensions());"'	;7
	874  2089  SEND_VAL_EX/116           ?80       #549                 ?1                  	;0
	875  2089  DO_FCALL_BY_NAME/131      $554=     ?0                   ?0                  	;0
	876  2089  SEND_VAR_NO_REF_EX/50     ?96       $554                 ?2                  	;0
	877  2089  DO_FCALL_BY_NAME/131      $555=     ?0                   ?0                  	;0
	878  2089  ASSIGN/38                 ?437      16?69                $555                	;0
	879  2090  INIT_FCALL_BY_NAME/59     ?0        ?0                   503:'substr'        	;3
	880  2090  FETCH_CONSTANT/99         #557=     ?0                   505:'PHP_OS'        	;16
	881  2090  SEND_VAL_EX/116           ?80       #557                 ?1                  	;0
	882  2090  SEND_VAL_EX/116           ?96       508:0                ?2                  	;0
	883  2090  SEND_VAL_EX/116           ?112      509:3                ?3                  	;0
	884  2090  DO_FCALL_BY_NAME/131      $558=     ?0                   ?0                  	;0
	885  2090  IS_IDENTICAL/15           #559=     $558                 510:'WIN'           	;0
	886  2090  JMPZ/43                   ?0        #559                 ?889                	;0	>>889
	887  2090  QM_ASSIGN/22              #560=     511:'php_'           ?0                  	;0
	888  2090  JMP/42                    ?0        ?890                 ?0                  	;0	>>890
	889  2090  QM_ASSIGN/22              #560=     512:''               ?0                  	;0	<<886
	890  2090  ASSIGN/38                 ?442      16?70                #560                	;0	<<888
	891  2091  FE_RESET_R/77             $562=     16?68                ?923                	;0
	892  2091  FE_FETCH_R/78             ?0        $562                 16?71               	;923	>>923	<<922
	893  2092  INIT_FCALL_BY_NAME/59     ?0        ?0                   513:'in_array'      	;2
	894  2092  SEND_VAR_EX/66            ?80       16?71                ?1                  	;0
	895  2092  SEND_VAR_EX/66            ?96       16?69                ?2                  	;0
	896  2092  DO_FCALL_BY_NAME/131      $563=     ?0                   ?0                  	;0
	897  2092  BOOL_NOT/13               #564=     $563                 ?0                  	;0
	898  2092  JMPZ/43                   ?0        #564                 ?922                	;0	>>922
	899  2093  IS_EQUAL/17               #565=     16?71                515:'opcache'       	;0
	900  2093  JMPZ/43                   ?0        #565                 ?912                	;0	>>912
	901  2094  FETCH_CONSTANT/99         #568=     ?0                   517:'DIRECTORY_SEPARATOR'	;16
	902  2094  CONCAT/8                  #569=     16?67                #568                	;0
	903  2094  CONCAT/8                  #570=     #569                 16?70               	;0
	904  2094  CONCAT/8                  #571=     #570                 16?71               	;0
	905  2094  CONCAT/8                  #572=     #571                 520:'.'             	;0
	906  2094  FETCH_CONSTANT/99         #573=     ?0                   521:'PHP_SHLIB_SUFFIX'	;16
	907  2094  CONCAT/8                  #574=     #572                 #573                	;0
	908  2094  FETCH_DIM_W/84            $566=     16?65                516:'zend_extension'	;0
	909  2094  ASSIGN_DIM/147            ?448      $566                 ?0                  	;0
	910  2094  OP_DATA/137               ?0        #574                 ?0                  	;0
	911  2094  JMP/42                    ?0        ?922                 ?0                  	;0	>>922
	912  2096  FETCH_CONSTANT/99         #577=     ?0                   525:'DIRECTORY_SEPARATOR'	;16	<<900
	913  2096  CONCAT/8                  #578=     16?67                #577                	;0
	914  2096  CONCAT/8                  #579=     #578                 16?70               	;0
	915  2096  CONCAT/8                  #580=     #579                 16?71               	;0
	916  2096  CONCAT/8                  #581=     #580                 528:'.'             	;0
	917  2096  FETCH_CONSTANT/99         #582=     ?0                   529:'PHP_SHLIB_SUFFIX'	;16
	918  2096  CONCAT/8                  #583=     #581                 #582                	;0
	919  2096  FETCH_DIM_W/84            $575=     16?65                524:'extension'     	;0
	920  2096  ASSIGN_DIM/147            ?457      $575                 ?0                  	;0
	921  2096  OP_DATA/137               ?0        #583                 ?0                  	;0
	922  2096  JMP/42                    ?0        ?892                 ?0                  	;0	>>892	<<898,911
	923  2096  FE_FREE/127               ?0        $562                 ?0                  	;0	<<891
	924  2104  INIT_FCALL_BY_NAME/59     ?0        ?0                   532:'settings2array'	;2	<<832
	925  2104  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	926  2104  SEND_VAR_EX/66            ?96       16?65                ?2                  	;0
	927  2104  DO_FCALL_BY_NAME/131      ?465      ?0                   ?0                  	;0
	928  2106  INIT_FCALL_BY_NAME/59     ?0        ?0                   534:'settings2params'	;1
	929  2106  SEND_VAR_EX/66            ?80       16?65                ?1                  	;0
	930  2106  DO_FCALL_BY_NAME/131      $585=     ?0                   ?0                  	;0
	931  2106  ASSIGN/38                 ?467      16?72                $585                	;0
	932  2110  INIT_FCALL_BY_NAME/59     ?0        ?0                   536:'array_key_exists'	;2
	933  2110  SEND_VAL_EX/116           ?80       538:'INI'            ?1                  	;0
	934  2110  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	935  2110  DO_FCALL_BY_NAME/131      $587=     ?0                   ?0                  	;0
	936  2110  JMPZ/43                   ?0        $587                 ?967                	;0	>>967
	937  2111  INIT_FCALL_BY_NAME/59     ?0        ?0                   540:'str_replace'   	;3
	938  2111  SEND_VAL_EX/116           ?80       542:'{PWD}'          ?1                  	;0
	939  2111  INIT_FCALL_BY_NAME/59     ?0        ?0                   543:'dirname'       	;1
	940  2111  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	941  2111  DO_FCALL_BY_NAME/131      $589=     ?0                   ?0                  	;0
	942  2111  SEND_VAR_NO_REF_EX/50     ?96       $589                 ?2                  	;0
	943  2111  FETCH_DIM_FUNC_ARG/93     $590=     16?26                545:'INI'           	;3
	944  2111  SEND_VAR_EX/66            ?112      $590                 ?3                  	;0
	945  2111  DO_FCALL_BY_NAME/131      $591=     ?0                   ?0                  	;0
	946  2111  ASSIGN_DIM/147            ?469      16?26                539:'INI'           	;0
	947  2111  OP_DATA/137               ?0        $591                 ?0                  	;0
	948  2112  INIT_FCALL_BY_NAME/59     ?0        ?0                   547:'str_replace'   	;3
	949  2112  SEND_VAL_EX/116           ?80       549:'{TMP}'          ?1                  	;0
	950  2112  INIT_FCALL_BY_NAME/59     ?0        ?0                   550:'sys_get_temp_dir'	;0
	951  2112  DO_FCALL_BY_NAME/131      $593=     ?0                   ?0                  	;0
	952  2112  SEND_VAR_NO_REF_EX/50     ?96       $593                 ?2                  	;0
	953  2112  FETCH_DIM_FUNC_ARG/93     $594=     16?26                552:'INI'           	;3
	954  2112  SEND_VAR_EX/66            ?112      $594                 ?3                  	;0
	955  2112  DO_FCALL_BY_NAME/131      $595=     ?0                   ?0                  	;0
	956  2112  ASSIGN_DIM/147            ?473      16?26                546:'INI'           	;0
	957  2112  OP_DATA/137               ?0        $595                 ?0                  	;0
	958  2113  INIT_FCALL_BY_NAME/59     ?0        ?0                   553:'settings2array'	;2
	959  2113  INIT_FCALL_BY_NAME/59     ?0        ?0                   555:'preg_split'    	;2
	960  2113  SEND_VAL_EX/116           ?80       557:'/[
]+/'        ?1                  	;0
	961  2113  FETCH_DIM_FUNC_ARG/93     $596=     16?26                558:'INI'           	;2
	962  2113  SEND_VAR_EX/66            ?96       $596                 ?2                  	;0
	963  2113  DO_FCALL_BY_NAME/131      $597=     ?0                   ?0                  	;0
	964  2113  SEND_VAR_NO_REF_EX/50     ?80       $597                 ?1                  	;0
	965  2113  SEND_VAR_EX/66            ?96       16?65                ?2                  	;0
	966  2113  DO_FCALL_BY_NAME/131      ?479      ?0                   ?0                  	;0
	967  2116  INIT_FCALL_BY_NAME/59     ?0        ?0                   559:'settings2params'	;1	<<936
	968  2116  SEND_VAR_EX/66            ?80       16?65                ?1                  	;0
	969  2116  DO_FCALL_BY_NAME/131      $599=     ?0                   ?0                  	;0
	970  2116  ASSIGN/38                 ?481      16?65                $599                	;0
	971  2118  CONCAT/8                  #602=     16?6                 562:' '             	;0
	972  2118  CONCAT/8                  #603=     #602                 16?65               	;0
	973  2118  ASSIGN_DIM/147            ?482      16?2                 561:'TEST_PHP_EXTRA_ARGS'	;0
	974  2118  OP_DATA/137               ?0        #603                 ?0                  	;0
	975  2121  ASSIGN/38                 ?485      16?73                563:''              	;0
	976  2122  ASSIGN/38                 ?486      16?74                564:false           	;0
	977  2124  INIT_FCALL_BY_NAME/59     ?0        ?0                   565:'array_key_exists'	;2
	978  2124  SEND_VAL_EX/116           ?80       567:'SKIPIF'         ?1                  	;0
	979  2124  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	980  2124  DO_FCALL_BY_NAME/131      $606=     ?0                   ?0                  	;0
	981  2124  JMPZ/43                   ?0        $606                 ?1173               	;0	>>1173
	982  2126  INIT_FCALL_BY_NAME/59     ?0        ?0                   568:'trim'          	;1
	983  2126  FETCH_DIM_FUNC_ARG/93     $607=     16?26                570:'SKIPIF'        	;1
	984  2126  SEND_VAR_EX/66            ?80       $607                 ?1                  	;0
	985  2126  DO_FCALL_BY_NAME/131      $608=     ?0                   ?0                  	;0
	986  2126  JMPZ/43                   ?0        $608                 ?1173               	;0	>>1173
	987  2127  INIT_FCALL/61             ?0        ?272                 571:'show_file_block'	;2
	988  2127  SEND_VAL/65               ?80       572:'skip'           ?1                  	;0
	989  2127  FETCH_DIM_R/81            $609=     16?26                573:'SKIPIF'        	;0
	990  2127  SEND_VAR/117              ?96       $609                 ?2                  	;0
	991  2127  DO_FCALL/60               ?491      ?0                   ?0                  	;0
	992  2128  INIT_FCALL/61             ?0        ?448                 574:'save_text'     	;3
	993  2128  SEND_VAR/117              ?80       16?57                ?1                  	;0
	994  2128  FETCH_DIM_R/81            $611=     16?26                575:'SKIPIF'        	;0
	995  2128  SEND_VAR/117              ?96       $611                 ?2                  	;0
	996  2128  SEND_VAR/117              ?112      16?56                ?3                  	;0
	997  2128  DO_FCALL/60               ?493      ?0                   ?0                  	;0
	998  2129  INIT_FCALL_BY_NAME/59     ?0        ?0                   576:'substr'        	;3
	999  2129  FETCH_CONSTANT/99         #613=     ?0                   578:'PHP_OS'        	;16
	1000 2129  SEND_VAL_EX/116           ?80       #613                 ?1                  	;0
	1001 2129  SEND_VAL_EX/116           ?96       581:0                ?2                  	;0
	1002 2129  SEND_VAL_EX/116           ?112      582:3                ?3                  	;0
	1003 2129  DO_FCALL_BY_NAME/131      $614=     ?0                   ?0                  	;0
	1004 2129  IS_NOT_IDENTICAL/16       #615=     $614                 583:'WIN'           	;0
	1005 2129  JMPZ/43                   ?0        #615                 ?1008               	;0	>>1008
	1006 2130  QM_ASSIGN/22              #616=     584:'unset REQUEST_METHOD; unset QUERY_STRING; unset PATH_TRANSLATED; unset SCRIPT_FILENAME; unset REQUEST_METHOD;' ?0                  	;0
	1007 2130  JMP/42                    ?0        ?1009                ?0                  	;0	>>1009
	1008 2130  QM_ASSIGN/22              #616=     585:''               ?0                  	;0	<<1005
	1009 2130  ASSIGN/38                 ?498      16?75                #616                	;0	<<1007
	1010 2132  JMPZ/43                   ?0        16?11                ?1015               	;0	>>1015
	1011 2133  ASSIGN_DIM/147            ?499      16?2                 586:'USE_ZEND_ALLOC'	;0
	1012 2133  OP_DATA/137               ?0        587:'0'              ?0                  	;0
	1013 2134  ASSIGN_DIM/147            ?500      16?2                 588:'ZEND_DONT_UNLOAD_MODULES'	;0
	1014 2134  OP_DATA/137               ?0        589:1                ?0                  	;0
	1015 2137  INIT_FCALL_BY_NAME/59     ?0        ?0                   590:'junit_start_timer'	;1	<<1010
	1016 2137  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	1017 2137  DO_FCALL_BY_NAME/131      ?501      ?0                   ?0                  	;0
	1018 2139  INIT_FCALL/61             ?0        ?1424                592:'system_with_timeout'	;2
	1019 2139  ROPE_INIT/54              #622=     ?0                   16?75               	;14
	1020 2139  ROPE_ADD/55               #622=     #622                 593:' '             	;1
	1021 2139  ROPE_ADD/55               #622=     #622                 16?0                	;2
	1022 2139  ROPE_ADD/55               #622=     #622                 594:' '             	;3
	1023 2139  ROPE_ADD/55               #622=     #622                 16?6                	;4
	1024 2139  ROPE_ADD/55               #622=     #622                 595:' '             	;5
	1025 2139  ROPE_ADD/55               #622=     #622                 16?44               	;6
	1026 2139  ROPE_ADD/55               #622=     #622                 596:' -q '          	;7
	1027 2139  ROPE_ADD/55               #622=     #622                 16?72               	;8
	1028 2139  ROPE_ADD/55               #622=     #622                 597:' '             	;9
	1029 2139  ROPE_ADD/55               #622=     #622                 16?18               	;10
	1030 2139  ROPE_ADD/55               #622=     #622                 598:' -d display_errors=0 "'	;11
	1031 2139  ROPE_ADD/55               #622=     #622                 16?57               	;12
	1032 2139  ROPE_END/56               #621=     #622                 599:'"'             	;13
	1033 2139  SEND_VAL/65               ?80       #621                 ?1                  	;0
	1034 2139  SEND_VAR/117              ?96       16?2                 ?2                  	;0
	1035 2139  DO_FCALL/60               $629=     ?0                   ?0                  	;0
	1036 2139  ASSIGN/38                 ?511      16?76                $629                	;0
	1037 2141  INIT_FCALL_BY_NAME/59     ?0        ?0                   600:'junit_finish_timer'	;1
	1038 2141  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	1039 2141  DO_FCALL_BY_NAME/131      ?512      ?0                   ?0                  	;0
	1040 2143  FETCH_DIM_R/81            $632=     16?14                602:'keep'          	;0
	1041 2143  FETCH_DIM_R/81            $633=     $632                 603:'skip'          	;0
	1042 2143  BOOL_NOT/13               #634=     $633                 ?0                  	;0
	1043 2143  JMPZ/43                   ?0        #634                 ?1049               	;0	>>1049
	1044 2144  BEGIN_SILENCE/57          #635=     ?0                   ?0                  	;0
	1045 2144  INIT_FCALL_BY_NAME/59     ?0        ?0                   604:'unlink'        	;1
	1046 2144  SEND_VAR_EX/66            ?80       16?57                ?1                  	;0
	1047 2144  DO_FCALL_BY_NAME/131      ?517      ?0                   ?0                  	;0
	1048 2144  END_SILENCE/58            ?0        #635                 ?0                  	;0
	1049 2147  INIT_FCALL_BY_NAME/59     ?0        ?0                   606:'strncasecmp'   	;3	<<1043
	1050 2147  SEND_VAL_EX/116           ?80       608:'skip'           ?1                  	;0
	1051 2147  INIT_FCALL_BY_NAME/59     ?0        ?0                   609:'ltrim'         	;1
	1052 2147  SEND_VAR_EX/66            ?80       16?76                ?1                  	;0
	1053 2147  DO_FCALL_BY_NAME/131      $637=     ?0                   ?0                  	;0
	1054 2147  SEND_VAR_NO_REF_EX/50     ?96       $637                 ?2                  	;0
	1055 2147  SEND_VAL_EX/116           ?112      611:4                ?3                  	;0
	1056 2147  DO_FCALL_BY_NAME/131      $638=     ?0                   ?0                  	;0
	1057 2147  BOOL_NOT/13               #639=     $638                 ?0                  	;0
	1058 2147  JMPZ/43                   ?0        #639                 ?1108               	;0	>>1108
	1059 2149  INIT_FCALL_BY_NAME/59     ?0        ?0                   612:'preg_match'    	;3
	1060 2149  SEND_VAL_EX/116           ?80       614:'/^\\s*skip\\s*(.+)\\s*/i' ?1                  	;0
	1061 2149  SEND_VAR_EX/66            ?96       16?76                ?2                  	;0
	1062 2149  SEND_VAR_EX/66            ?112      16?77                ?3                  	;0
	1063 2149  DO_FCALL_BY_NAME/131      $640=     ?0                   ?0                  	;0
	1064 2149  JMPZ/43                   ?0        $640                 ?1076               	;0	>>1076
	1065 2150  INIT_FCALL_BY_NAME/59     ?0        ?0                   615:'show_result'   	;5
	1066 2150  SEND_VAL_EX/116           ?80       617:'SKIP'           ?1                  	;0
	1067 2150  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
	1068 2150  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	1069 2150  FETCH_DIM_R/81            $641=     16?77                618:1               	;0
	1070 2150  NOP/0                     ?0        ?0                   ?0                  	;0
	1071 2150  FAST_CONCAT/53            #642=     619:'reason: '       $641                	;0
	1072 2150  SEND_VAL_EX/116           ?128      #642                 ?4                  	;0
	1073 2150  SEND_VAR_EX/66            ?144      16?22                ?5                  	;0
	1074 2150  DO_FCALL_BY_NAME/131      ?524      ?0                   ?0                  	;0
	1075 2150  JMP/42                    ?0        ?1083                ?0                  	;0	>>1083
	1076 2152  INIT_FCALL_BY_NAME/59     ?0        ?0                   620:'show_result'   	;5	<<1064
	1077 2152  SEND_VAL_EX/116           ?80       622:'SKIP'           ?1                  	;0
	1078 2152  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
	1079 2152  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	1080 2152  SEND_VAL_EX/116           ?128      623:''               ?4                  	;0
	1081 2152  SEND_VAR_EX/66            ?144      16?22                ?5                  	;0
	1082 2152  DO_FCALL_BY_NAME/131      ?525      ?0                   ?0                  	;0
	1083 2155  FETCH_DIM_R/81            $645=     16?14                624:'keep'          	;0	<<1075
	1084 2155  FETCH_DIM_R/81            $646=     $645                 625:'skip'          	;0
	1085 2155  BOOL_NOT/13               #647=     $646                 ?0                  	;0
	1086 2155  JMPZ/43                   ?0        #647                 ?1092               	;0	>>1092
	1087 2156  BEGIN_SILENCE/57          #648=     ?0                   ?0                  	;0
	1088 2156  INIT_FCALL_BY_NAME/59     ?0        ?0                   626:'unlink'        	;1
	1089 2156  SEND_VAR_EX/66            ?80       16?57                ?1                  	;0
	1090 2156  DO_FCALL_BY_NAME/131      ?530      ?0                   ?0                  	;0
	1091 2156  END_SILENCE/58            ?0        #648                 ?0                  	;0
	1092 2159  ISSET_ISEMPTY_DIM_OBJ/115 #650=     16?77                628:1               	;16777216	<<1086
	1093 2159  BOOL_NOT/13               #651=     #650                 ?0                  	;0
	1094 2159  JMPZ/43                   ?0        #651                 ?1098               	;0	>>1098
	1095 2159  FETCH_DIM_R/81            $652=     16?77                629:1               	;0
	1096 2159  QM_ASSIGN/22              #653=     $652                 ?0                  	;0
	1097 2159  JMP/42                    ?0        ?1099                ?0                  	;0	>>1099
	1098 2159  QM_ASSIGN/22              #653=     630:''               ?0                  	;0	<<1094
	1099 2159  ASSIGN/38                 ?535      16?78                #653                	;0	<<1097
	1100 2160  INIT_FCALL_BY_NAME/59     ?0        ?0                   631:'junit_mark_test_as'	;5
	1101 2160  SEND_VAL_EX/116           ?80       633:'SKIP'           ?1                  	;0
	1102 2160  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	1103 2160  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	1104 2160  SEND_VAL_EX/116           ?128      634:NULL             ?4                  	;0
	1105 2160  SEND_VAR_EX/66            ?144      16?78                ?5                  	;0
	1106 2160  DO_FCALL_BY_NAME/131      ?536      ?0                   ?0                  	;0
	1107 2161  RETURN/62                 ?0        635:'SKIPPED'        ?0                  	;0
	1108 2164  INIT_FCALL_BY_NAME/59     ?0        ?0                   636:'strncasecmp'   	;3	<<1058
	1109 2164  SEND_VAL_EX/116           ?80       638:'info'           ?1                  	;0
	1110 2164  INIT_FCALL_BY_NAME/59     ?0        ?0                   639:'ltrim'         	;1
	1111 2164  SEND_VAR_EX/66            ?80       16?76                ?1                  	;0
	1112 2164  DO_FCALL_BY_NAME/131      $656=     ?0                   ?0                  	;0
	1113 2164  SEND_VAR_NO_REF_EX/50     ?96       $656                 ?2                  	;0
	1114 2164  SEND_VAL_EX/116           ?112      641:4                ?3                  	;0
	1115 2164  DO_FCALL_BY_NAME/131      $657=     ?0                   ?0                  	;0
	1116 2164  BOOL_NOT/13               #658=     $657                 ?0                  	;0
	1117 2164  JMPZ/43                   ?0        #658                 ?1129               	;0	>>1129
	1118 2165  INIT_FCALL_BY_NAME/59     ?0        ?0                   642:'preg_match'    	;3
	1119 2165  SEND_VAL_EX/116           ?80       644:'/^\\s*info\\s*(.+)\\s*/i' ?1                  	;0
	1120 2165  SEND_VAR_EX/66            ?96       16?76                ?2                  	;0
	1121 2165  SEND_VAR_EX/66            ?112      16?77                ?3                  	;0
	1122 2165  DO_FCALL_BY_NAME/131      $659=     ?0                   ?0                  	;0
	1123 2165  JMPZ/43                   ?0        $659                 ?1129               	;0	>>1129
	1124 2166  FETCH_DIM_R/81            $660=     16?77                645:1               	;0
	1125 2166  ROPE_INIT/54              #662=     ?0                   646:' (info: '      	;3
	1126 2166  ROPE_ADD/55               #662=     #662                 $660                	;1
	1127 2166  ROPE_END/56               #661=     #662                 647:')'             	;2
	1128 2166  ASSIGN/38                 ?545      16?73                #661                	;0
	1129 2170  INIT_FCALL_BY_NAME/59     ?0        ?0                   648:'strncasecmp'   	;3	<<1117,1123
	1130 2170  SEND_VAL_EX/116           ?80       650:'warn'           ?1                  	;0
	1131 2170  INIT_FCALL_BY_NAME/59     ?0        ?0                   651:'ltrim'         	;1
	1132 2170  SEND_VAR_EX/66            ?80       16?76                ?1                  	;0
	1133 2170  DO_FCALL_BY_NAME/131      $665=     ?0                   ?0                  	;0
	1134 2170  SEND_VAR_NO_REF_EX/50     ?96       $665                 ?2                  	;0
	1135 2170  SEND_VAL_EX/116           ?112      653:4                ?3                  	;0
	1136 2170  DO_FCALL_BY_NAME/131      $666=     ?0                   ?0                  	;0
	1137 2170  BOOL_NOT/13               #667=     $666                 ?0                  	;0
	1138 2170  JMPZ/43                   ?0        #667                 ?1151               	;0	>>1151
	1139 2171  INIT_FCALL_BY_NAME/59     ?0        ?0                   654:'preg_match'    	;3
	1140 2171  SEND_VAL_EX/116           ?80       656:'/^\\s*warn\\s*(.+)\\s*/i' ?1                  	;0
	1141 2171  SEND_VAR_EX/66            ?96       16?76                ?2                  	;0
	1142 2171  SEND_VAR_EX/66            ?112      16?77                ?3                  	;0
	1143 2171  DO_FCALL_BY_NAME/131      $668=     ?0                   ?0                  	;0
	1144 2171  JMPZ/43                   ?0        $668                 ?1151               	;0	>>1151
	1145 2172  ASSIGN/38                 ?550      16?74                657:true            	;0
	1146 2173  FETCH_DIM_R/81            $670=     16?77                658:1               	;0
	1147 2173  ROPE_INIT/54              #672=     ?0                   659:' (warn: '      	;3
	1148 2173  ROPE_ADD/55               #672=     #672                 $670                	;1
	1149 2173  ROPE_END/56               #671=     #672                 660:')'             	;2
	1150 2173  ASSIGN/38                 ?555      16?73                #671                	;0
	1151 2177  INIT_FCALL_BY_NAME/59     ?0        ?0                   661:'strncasecmp'   	;3	<<1138,1144
	1152 2177  SEND_VAL_EX/116           ?80       663:'xfail'          ?1                  	;0
	1153 2177  INIT_FCALL_BY_NAME/59     ?0        ?0                   664:'ltrim'         	;1
	1154 2177  SEND_VAR_EX/66            ?80       16?76                ?1                  	;0
	1155 2177  DO_FCALL_BY_NAME/131      $675=     ?0                   ?0                  	;0
	1156 2177  SEND_VAR_NO_REF_EX/50     ?96       $675                 ?2                  	;0
	1157 2177  SEND_VAL_EX/116           ?112      666:5                ?3                  	;0
	1158 2177  DO_FCALL_BY_NAME/131      $676=     ?0                   ?0                  	;0
	1159 2177  BOOL_NOT/13               #677=     $676                 ?0                  	;0
	1160 2177  JMPZ/43                   ?0        #677                 ?1173               	;0	>>1173
	1161 2179  INIT_FCALL_BY_NAME/59     ?0        ?0                   668:'trim'          	;1
	1162 2179  INIT_FCALL_BY_NAME/59     ?0        ?0                   670:'substr'        	;2
	1163 2179  INIT_FCALL_BY_NAME/59     ?0        ?0                   672:'ltrim'         	;1
	1164 2179  SEND_VAR_EX/66            ?80       16?76                ?1                  	;0
	1165 2179  DO_FCALL_BY_NAME/131      $679=     ?0                   ?0                  	;0
	1166 2179  SEND_VAR_NO_REF_EX/50     ?80       $679                 ?1                  	;0
	1167 2179  SEND_VAL_EX/116           ?96       674:5                ?2                  	;0
	1168 2179  DO_FCALL_BY_NAME/131      $680=     ?0                   ?0                  	;0
	1169 2179  SEND_VAR_NO_REF_EX/50     ?80       $680                 ?1                  	;0
	1170 2179  DO_FCALL_BY_NAME/131      $681=     ?0                   ?0                  	;0
	1171 2179  ASSIGN_DIM/147            ?559      16?26                667:'XFAIL'         	;0
	1172 2179  OP_DATA/137               ?0        $681                 ?0                  	;0
	1173 2184  INIT_FCALL_BY_NAME/59     ?0        ?0                   675:'extension_loaded'	;1	<<981,986,1160
	1174 2184  SEND_VAL_EX/116           ?80       677:'zlib'           ?1                  	;0
	1175 2184  DO_FCALL_BY_NAME/131      $682=     ?0                   ?0                  	;0
	1176 2184  BOOL_NOT/13               #683=     $682                 ?0                  	;0
	1177 2184  JMPZ_EX/46                #683=     #683                 ?1189               	;0	>>1189
	1178 2185  INIT_FCALL_BY_NAME/59     ?0        ?0                   678:'array_key_exists'	;2
	1179 2185  SEND_VAL_EX/116           ?80       680:'GZIP_POST'      ?1                  	;0
	1180 2185  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1181 2185  DO_FCALL_BY_NAME/131      $684=     ?0                   ?0                  	;0
	1182 2185  JMPNZ_EX/47               #685=     $684                 ?1188               	;0	>>1188
	1183 2186  INIT_FCALL_BY_NAME/59     ?0        ?0                   681:'array_key_exists'	;2
	1184 2186  SEND_VAL_EX/116           ?80       683:'DEFLATE_POST'   ?1                  	;0
	1185 2186  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1186 2186  DO_FCALL_BY_NAME/131      $686=     ?0                   ?0                  	;0
	1187 2186  BOOL/52                   #685=     $686                 ?0                  	;0
	1188 2186  BOOL/52                   #683=     #685                 ?0                  	;0	<<1182
	1189 2186  JMPZ/43                   ?0        #683                 ?1208               	;0	>>1208	<<1177
	1190 2187  ASSIGN/38                 ?568      16?78                684:'ext/zlib required'	;0
	1191 2188  INIT_FCALL_BY_NAME/59     ?0        ?0                   685:'show_result'   	;5
	1192 2188  SEND_VAL_EX/116           ?80       687:'SKIP'           ?1                  	;0
	1193 2188  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
	1194 2188  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	1195 2188  NOP/0                     ?0        ?0                   ?0                  	;0
	1196 2188  FAST_CONCAT/53            #688=     688:'reason: '       16?78               	;0
	1197 2188  SEND_VAL_EX/116           ?128      #688                 ?4                  	;0
	1198 2188  SEND_VAR_EX/66            ?144      16?22                ?5                  	;0
	1199 2188  DO_FCALL_BY_NAME/131      ?570      ?0                   ?0                  	;0
	1200 2189  INIT_FCALL_BY_NAME/59     ?0        ?0                   689:'junit_mark_test_as'	;5
	1201 2189  SEND_VAL_EX/116           ?80       691:'SKIP'           ?1                  	;0
	1202 2189  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	1203 2189  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	1204 2189  SEND_VAL_EX/116           ?128      692:NULL             ?4                  	;0
	1205 2189  SEND_VAR_EX/66            ?144      16?78                ?5                  	;0
	1206 2189  DO_FCALL_BY_NAME/131      ?571      ?0                   ?0                  	;0
	1207 2190  RETURN/62                 ?0        693:'SKIPPED'        ?0                  	;0
	1208 2193  ISSET_ISEMPTY_DIM_OBJ/115 #691=     16?26                694:'REDIRECTTEST'  	;33554432	<<1189
	1209 2193  JMPZ/43                   ?0        #691                 ?1330               	;0	>>1330
	1210 2194  ASSIGN/38                 ?573      16?79                695:array (
)       	;0
	1211 2196  FETCH_DIM_R/81            $693=     16?26                696:'REDIRECTTEST'  	;0
	1212 2196  INCLUDE_OR_EVAL/73        $694=     $693                 ?0                  	;1
	1213 2196  ASSIGN/38                 ?576      16?8                 $694                	;0
	1214 2197  ROPE_INIT/54              #698=     ?0                   698:'via ['         	;3
	1215 2197  ROPE_ADD/55               #698=     #698                 16?36               	;1
	1216 2197  ROPE_END/56               #697=     #698                 699:']
	'           	;2
	1217 2197  ASSIGN_DIM/147            ?577      16?8                 697:'via'           	;0
	1218 2197  OP_DATA/137               ?0        #697                 ?0                  	;0
	1219 2198  INIT_FCALL_BY_NAME/59     ?0        ?0                   701:'realpath'      	;1
	1220 2198  INIT_FCALL_BY_NAME/59     ?0        ?0                   703:'dirname'       	;1
	1221 2198  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	1222 2198  DO_FCALL_BY_NAME/131      $701=     ?0                   ?0                  	;0
	1223 2198  SEND_VAR_NO_REF_EX/50     ?80       $701                 ?1                  	;0
	1224 2198  DO_FCALL_BY_NAME/131      $702=     ?0                   ?0                  	;0
	1225 2198  ASSIGN_DIM/147            ?581      16?8                 700:'dir'           	;0
	1226 2198  OP_DATA/137               ?0        $702                 ?0                  	;0
	1227 2199  INIT_FCALL_BY_NAME/59     ?0        ?0                   706:'trim'          	;1
	1228 2199  FETCH_DIM_FUNC_ARG/93     $704=     16?26                708:'TEST'          	;1
	1229 2199  SEND_VAR_EX/66            ?80       $704                 ?1                  	;0
	1230 2199  DO_FCALL_BY_NAME/131      $705=     ?0                   ?0                  	;0
	1231 2199  ASSIGN_DIM/147            ?584      16?8                 705:'prefix'        	;0
	1232 2199  OP_DATA/137               ?0        $705                 ?0                  	;0
	1233 2201  ISSET_ISEMPTY_DIM_OBJ/115 #706=     16?8                 709:'TESTS'         	;16777216
	1234 2201  BOOL_NOT/13               #707=     #706                 ?0                  	;0
	1235 2201  JMPZ/43                   ?0        #707                 ?1311               	;0	>>1311
	1236 2203  INIT_FCALL_BY_NAME/59     ?0        ?0                   710:'is_array'      	;1
	1237 2203  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	1238 2203  DO_FCALL_BY_NAME/131      $708=     ?0                   ?0                  	;0
	1239 2203  JMPZ/43                   ?0        $708                 ?1244               	;0	>>1244
	1240 2204  FETCH_DIM_R/81            $710=     16?23                712:1               	;0
	1241 2204  ASSIGN_DIM/147            ?590      16?79                ?4430313            	;0
	1242 2204  OP_DATA/137               ?0        $710                 ?0                  	;0
	1243 2204  JMP/42                    ?0        ?1261                ?0                  	;0	>>1261
	1244 2206  FETCH_W/83                $711=     713:'GLOBALS'        ?0                  	;0	<<1239
	1245 2206  ASSIGN_DIM/147            ?593      $711                 714:'test_files'    	;0
	1246 2206  OP_DATA/137               ?0        16?79                ?0                  	;0
	1247 2207  INIT_FCALL/61             ?0        ?944                 715:'find_files'    	;1
	1248 2207  FETCH_DIM_R/81            $713=     16?8                 716:'TESTS'         	;0
	1249 2207  SEND_VAR/117              ?80       $713                 ?1                  	;0
	1250 2207  DO_FCALL/60               ?595      ?0                   ?0                  	;0
	1251 2209  FETCH_R/80                $715=     717:'GLOBALS'        ?0                  	;0
	1252 2209  FETCH_DIM_R/81            $716=     $715                 718:'test_files'    	;0
	1253 2209  FE_RESET_R/77             $717=     $716                 ?1260               	;0
	1254 2209  FE_FETCH_R/78             ?0        $717                 16?80               	;1260	>>1260	<<1259
	1255 2210  INIT_ARRAY/71             #719=     16?80                ?0                  	;8
	1256 2210  ADD_ARRAY_ELEMENT/72      #719=     16?1                 ?0                  	;0
	1257 2210  ASSIGN_DIM/147            ?599      16?79                ?2670193072         	;0
	1258 2210  OP_DATA/137               ?0        #719                 ?0                  	;0
	1259 2210  JMP/42                    ?0        ?1254                ?0                  	;0	>>1254
	1260 2210  FE_FREE/127               ?0        $717                 ?0                  	;0	<<1253
	1261 2213  INIT_FCALL_BY_NAME/59     ?0        ?0                   719:'count'         	;1	<<1243
	1262 2213  SEND_VAR_EX/66            ?80       16?79                ?1                  	;0
	1263 2213  DO_FCALL_BY_NAME/131      $720=     ?0                   ?0                  	;0
	1264 2213  SUB/2                     #721=     $720                 721:1               	;0
	1265 2213  ASSIGN_ADD/23             ?603      16?9                 #721                	;0
	1266 2214  POST_DEC/37               #723=     16?10                ?0                  	;0
	1267 2214  FREE/70                   ?0        #723                 ?0                  	;0
	1268 2216  INIT_FCALL_BY_NAME/59     ?0        ?0                   722:'show_redirect_start'	;3
	1269 2216  FETCH_DIM_FUNC_ARG/93     $724=     16?8                 724:'TESTS'         	;1
	1270 2216  SEND_VAR_EX/66            ?80       $724                 ?1                  	;0
	1271 2216  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
	1272 2216  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	1273 2216  DO_FCALL_BY_NAME/131      ?606      ?0                   ?0                  	;0
	1274 2219  INIT_FCALL_BY_NAME/59     ?0        ?0                   725:'array_merge'   	;2
	1275 2219  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	1276 2219  FETCH_DIM_FUNC_ARG/93     $726=     16?8                 727:'ENV'           	;2
	1277 2219  SEND_VAR_EX/66            ?96       $726                 ?2                  	;0
	1278 2219  DO_FCALL_BY_NAME/131      $727=     ?0                   ?0                  	;0
	1279 2219  ASSIGN/38                 ?609      16?81                $727                	;0
	1280 2220  INIT_FCALL_BY_NAME/59     ?0        ?0                   729:'realpath'      	;1
	1281 2220  FETCH_DIM_FUNC_ARG/93     $730=     16?8                 731:'TESTS'         	;1
	1282 2220  SEND_VAR_EX/66            ?80       $730                 ?1                  	;0
	1283 2220  DO_FCALL_BY_NAME/131      $731=     ?0                   ?0                  	;0
	1284 2220  FETCH_CONSTANT/99         #732=     ?0                   732:'DIRECTORY_SEPARATOR'	;16
	1285 2220  CONCAT/8                  #733=     $731                 #732                	;0
	1286 2220  ASSIGN_DIM/147            ?610      16?81                728:'REDIR_TEST_DIR'	;0
	1287 2220  OP_DATA/137               ?0        #733                 ?0                  	;0
	1288 2222  INIT_FCALL_BY_NAME/59     ?0        ?0                   735:'usort'         	;2
	1289 2222  SEND_VAR_EX/66            ?80       16?79                ?1                  	;0
	1290 2222  SEND_VAL_EX/116           ?96       737:'test_sort'      ?2                  	;0
	1291 2222  DO_FCALL_BY_NAME/131      ?615      ?0                   ?0                  	;0
	1292 2223  INIT_FCALL/61             ?0        ?1024                738:'run_all_tests' 	;3
	1293 2223  SEND_VAR/117              ?80       16?79                ?1                  	;0
	1294 2223  SEND_VAR/117              ?96       16?81                ?2                  	;0
	1295 2223  SEND_VAR/117              ?112      16?42                ?3                  	;0
	1296 2223  DO_FCALL/60               ?616      ?0                   ?0                  	;0
	1297 2225  INIT_FCALL_BY_NAME/59     ?0        ?0                   739:'show_redirect_ends'	;3
	1298 2225  FETCH_DIM_FUNC_ARG/93     $736=     16?8                 741:'TESTS'         	;1
	1299 2225  SEND_VAR_EX/66            ?80       $736                 ?1                  	;0
	1300 2225  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
	1301 2225  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	1302 2225  DO_FCALL_BY_NAME/131      ?618      ?0                   ?0                  	;0
	1303 2228  ASSIGN/38                 ?619      16?8                 742:false           	;0
	1304 2230  INIT_FCALL_BY_NAME/59     ?0        ?0                   743:'junit_mark_test_as'	;3
	1305 2230  SEND_VAL_EX/116           ?80       745:'PASS'           ?1                  	;0
	1306 2230  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	1307 2230  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	1308 2230  DO_FCALL_BY_NAME/131      ?620      ?0                   ?0                  	;0
	1309 2231  RETURN/62                 ?0        746:'REDIR'          ?0                  	;0
	1310 2231  JMP/42                    ?0        ?1330                ?0                  	;0	>>1330
	1311 2235  ASSIGN/38                 ?621      16?28                747:'Redirect info must contain exactly one TEST string to be used as redirect directory.'	;0	<<1235
	1312 2236  INIT_FCALL_BY_NAME/59     ?0        ?0                   748:'show_result'   	;4
	1313 2236  SEND_VAL_EX/116           ?80       750:'BORK'           ?1                  	;0
	1314 2236  SEND_VAR_EX/66            ?96       16?28                ?2                  	;0
	1315 2236  SEND_VAL_EX/116           ?112      751:''               ?3                  	;0
	1316 2236  SEND_VAR_EX/66            ?128      16?22                ?4                  	;0
	1317 2236  DO_FCALL_BY_NAME/131      ?622      ?0                   ?0                  	;0
	1318 2238  INIT_ARRAY/71             #744=     16?1                 753:'name'          	;22
	1319 2239  ADD_ARRAY_ELEMENT/72      #744=     754:''               755:'test_name'     	;0
	1320 2240  ADD_ARRAY_ELEMENT/72      #744=     756:''               757:'output'        	;0
	1321 2241  ADD_ARRAY_ELEMENT/72      #744=     758:''               759:'diff'          	;0
	1322 2242  ROPE_INIT/54              #746=     ?0                   16?28               	;4
	1323 2242  ROPE_ADD/55               #746=     #746                 760:' ['            	;1
	1324 2242  ROPE_ADD/55               #746=     #746                 16?1                	;2
	1325 2242  ROPE_END/56               #745=     #746                 761:']'             	;3
	1326 2242  ADD_ARRAY_ELEMENT/72      #744=     #745                 762:'info'          	;0
	1327 2237  FETCH_DIM_W/84            $742=     16?5                 752:'BORKED'        	;0
	1328 2237  ASSIGN_DIM/147            ?624      $742                 ?4442274            	;0
	1329 2242  OP_DATA/137               ?0        #744                 ?0                  	;0
	1330 2247  INIT_FCALL_BY_NAME/59     ?0        ?0                   763:'is_array'      	;1	<<1209,1310
	1331 2247  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	1332 2247  DO_FCALL_BY_NAME/131      $748=     ?0                   ?0                  	;0
	1333 2247  JMPNZ_EX/47               #749=     $748                 ?1336               	;0	>>1336
	1334 2247  ISSET_ISEMPTY_DIM_OBJ/115 #750=     16?26                765:'REDIRECTTEST'  	;33554432
	1335 2247  BOOL/52                   #749=     #750                 ?0                  	;0
	1336 2247  JMPZ/43                   ?0        #749                 ?1370               	;0	>>1370	<<1333
	1337 2249  INIT_FCALL_BY_NAME/59     ?0        ?0                   766:'is_array'      	;1
	1338 2249  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	1339 2249  DO_FCALL_BY_NAME/131      $751=     ?0                   ?0                  	;0
	1340 2249  JMPZ/43                   ?0        $751                 ?1343               	;0	>>1343
	1341 2250  FETCH_DIM_R/81            $752=     16?23                768:0               	;0
	1342 2250  ASSIGN/38                 ?634      16?1                 $752                	;0
	1343 2253  ASSIGN/38                 ?635      16?28                769:'Redirected test did not contain redirection info'	;0	<<1340
	1344 2254  INIT_FCALL_BY_NAME/59     ?0        ?0                   770:'show_result'   	;4
	1345 2254  SEND_VAL_EX/116           ?80       772:'BORK'           ?1                  	;0
	1346 2254  SEND_VAR_EX/66            ?96       16?28                ?2                  	;0
	1347 2254  SEND_VAL_EX/116           ?112      773:''               ?3                  	;0
	1348 2254  SEND_VAR_EX/66            ?128      16?22                ?4                  	;0
	1349 2254  DO_FCALL_BY_NAME/131      ?636      ?0                   ?0                  	;0
	1350 2256  INIT_ARRAY/71             #758=     16?1                 775:'name'          	;22
	1351 2257  ADD_ARRAY_ELEMENT/72      #758=     776:''               777:'test_name'     	;0
	1352 2258  ADD_ARRAY_ELEMENT/72      #758=     778:''               779:'output'        	;0
	1353 2259  ADD_ARRAY_ELEMENT/72      #758=     780:''               781:'diff'          	;0
	1354 2260  ROPE_INIT/54              #760=     ?0                   16?28               	;4
	1355 2260  ROPE_ADD/55               #760=     #760                 782:' ['            	;1
	1356 2260  ROPE_ADD/55               #760=     #760                 16?1                	;2
	1357 2260  ROPE_END/56               #759=     #760                 783:']'             	;3
	1358 2260  ADD_ARRAY_ELEMENT/72      #758=     #759                 784:'info'          	;0
	1359 2255  FETCH_DIM_W/84            $756=     16?5                 774:'BORKED'        	;0
	1360 2255  ASSIGN_DIM/147            ?638      $756                 ?4442274            	;0
	1361 2260  OP_DATA/137               ?0        #758                 ?0                  	;0
	1362 2263  INIT_FCALL_BY_NAME/59     ?0        ?0                   785:'junit_mark_test_as'	;5
	1363 2263  SEND_VAL_EX/116           ?80       787:'BORK'           ?1                  	;0
	1364 2263  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	1365 2263  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	1366 2263  SEND_VAL_EX/116           ?128      788:NULL             ?4                  	;0
	1367 2263  SEND_VAR_EX/66            ?144      16?28                ?5                  	;0
	1368 2263  DO_FCALL_BY_NAME/131      ?643      ?0                   ?0                  	;0
	1369 2265  RETURN/62                 ?0        789:'BORKED'         ?0                  	;0
	1370 2269  ISSET_ISEMPTY_DIM_OBJ/115 #763=     16?26                790:'FILE'          	;33554432	<<1336
	1371 2269  JMPZ/43                   ?0        #763                 ?1385               	;0	>>1385
	1372 2270  INIT_FCALL/61             ?0        ?272                 791:'show_file_block'	;3
	1373 2270  SEND_VAL/65               ?80       792:'php'            ?1                  	;0
	1374 2270  FETCH_DIM_R/81            $764=     16?26                793:'FILE'          	;0
	1375 2270  SEND_VAR/117              ?96       $764                 ?2                  	;0
	1376 2270  SEND_VAL/65               ?112      794:'TEST'           ?3                  	;0
	1377 2270  DO_FCALL/60               ?646      ?0                   ?0                  	;0
	1378 2271  INIT_FCALL/61             ?0        ?448                 795:'save_text'     	;3
	1379 2271  SEND_VAR/117              ?80       16?55                ?1                  	;0
	1380 2271  FETCH_DIM_R/81            $766=     16?26                796:'FILE'          	;0
	1381 2271  SEND_VAR/117              ?96       $766                 ?2                  	;0
	1382 2271  SEND_VAR/117              ?112      16?54                ?3                  	;0
	1383 2271  DO_FCALL/60               ?648      ?0                   ?0                  	;0
	1384 2271  JMP/42                    ?0        ?1387                ?0                  	;0	>>1387
	1385 2273  ASSIGN/38                 $768=     16?54                797:''              	;0	<<1371
	1386 2273  ASSIGN/38                 ?650      16?55                $768                	;0
	1387 2276  INIT_FCALL_BY_NAME/59     ?0        ?0                   798:'array_key_exists'	;2	<<1384
	1388 2276  SEND_VAL_EX/116           ?80       800:'GET'            ?1                  	;0
	1389 2276  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1390 2276  DO_FCALL_BY_NAME/131      $770=     ?0                   ?0                  	;0
	1391 2276  JMPZ/43                   ?0        $770                 ?1398               	;0	>>1398
	1392 2277  INIT_FCALL_BY_NAME/59     ?0        ?0                   801:'trim'          	;1
	1393 2277  FETCH_DIM_FUNC_ARG/93     $771=     16?26                803:'GET'           	;1
	1394 2277  SEND_VAR_EX/66            ?80       $771                 ?1                  	;0
	1395 2277  DO_FCALL_BY_NAME/131      $772=     ?0                   ?0                  	;0
	1396 2277  ASSIGN/38                 ?654      16?82                $772                	;0
	1397 2277  JMP/42                    ?0        ?1399                ?0                  	;0	>>1399
	1398 2279  ASSIGN/38                 ?655      16?82                804:''              	;0	<<1391
	1399 2282  ASSIGN_DIM/147            ?656      16?2                 805:'REDIRECT_STATUS'	;0	<<1397
	1400 2282  OP_DATA/137               ?0        806:'1'              ?0                  	;0
	1401 2283  ISSET_ISEMPTY_DIM_OBJ/115 #776=     16?2                 807:'QUERY_STRING'  	;16777216
	1402 2283  JMPZ/43                   ?0        #776                 ?1405               	;0	>>1405
	1403 2284  ASSIGN_DIM/147            ?658      16?2                 808:'QUERY_STRING'  	;0
	1404 2284  OP_DATA/137               ?0        16?82                ?0                  	;0
	1405 2286  ISSET_ISEMPTY_DIM_OBJ/115 #778=     16?2                 809:'PATH_TRANSLATED'	;16777216	<<1402
	1406 2286  JMPZ/43                   ?0        #778                 ?1409               	;0	>>1409
	1407 2287  ASSIGN_DIM/147            ?660      16?2                 810:'PATH_TRANSLATED'	;0
	1408 2287  OP_DATA/137               ?0        16?55                ?0                  	;0
	1409 2289  ISSET_ISEMPTY_DIM_OBJ/115 #780=     16?2                 811:'SCRIPT_FILENAME'	;16777216	<<1406
	1410 2289  JMPZ/43                   ?0        #780                 ?1413               	;0	>>1413
	1411 2290  ASSIGN_DIM/147            ?662      16?2                 812:'SCRIPT_FILENAME'	;0
	1412 2290  OP_DATA/137               ?0        16?55                ?0                  	;0
	1413 2293  INIT_FCALL_BY_NAME/59     ?0        ?0                   813:'array_key_exists'	;2	<<1410
	1414 2293  SEND_VAL_EX/116           ?80       815:'COOKIE'         ?1                  	;0
	1415 2293  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1416 2293  DO_FCALL_BY_NAME/131      $782=     ?0                   ?0                  	;0
	1417 2293  JMPZ/43                   ?0        $782                 ?1425               	;0	>>1425
	1418 2294  INIT_FCALL_BY_NAME/59     ?0        ?0                   817:'trim'          	;1
	1419 2294  FETCH_DIM_FUNC_ARG/93     $784=     16?26                819:'COOKIE'        	;1
	1420 2294  SEND_VAR_EX/66            ?80       $784                 ?1                  	;0
	1421 2294  DO_FCALL_BY_NAME/131      $785=     ?0                   ?0                  	;0
	1422 2294  ASSIGN_DIM/147            ?664      16?2                 816:'HTTP_COOKIE'   	;0
	1423 2294  OP_DATA/137               ?0        $785                 ?0                  	;0
	1424 2294  JMP/42                    ?0        ?1427                ?0                  	;0	>>1427
	1425 2296  ASSIGN_DIM/147            ?667      16?2                 820:'HTTP_COOKIE'   	;0	<<1417
	1426 2296  OP_DATA/137               ?0        821:''               ?0                  	;0
	1427 2299  ISSET_ISEMPTY_DIM_OBJ/115 #787=     16?26                822:'ARGS'          	;33554432	<<1424
	1428 2299  JMPZ/43                   ?0        #787                 ?1433               	;0	>>1433
	1429 2299  FETCH_DIM_R/81            $788=     16?26                823:'ARGS'          	;0
	1430 2299  CONCAT/8                  #789=     824:' -- '           $788                	;0
	1431 2299  QM_ASSIGN/22              #790=     #789                 ?0                  	;0
	1432 2299  JMP/42                    ?0        ?1434                ?0                  	;0	>>1434
	1433 2299  QM_ASSIGN/22              #790=     825:''               ?0                  	;0	<<1428
	1434 2299  ASSIGN/38                 ?672      16?83                #790                	;0	<<1432
	1435 2301  JMPZ_EX/46                #792=     16?20                ?1439               	;0	>>1439
	1436 2301  ISSET_ISEMPTY_CV/197      #793=     16?55                ?0                  	;16777216
	1437 2301  BOOL_NOT/13               #794=     #793                 ?0                  	;0
	1438 2301  BOOL/52                   #792=     #794                 ?0                  	;0
	1439 2301  JMPZ/43                   ?0        #792                 ?1452               	;0	>>1452	<<1435
	1440 2302  INIT_FCALL/61             ?0        ?448                 826:'save_text'     	;2
	1441 2302  SEND_VAR/117              ?80       16?60                ?1                  	;0
	1442 2302  ROPE_INIT/54              #796=     ?0                   827:'<?php opcache_compile_file(\''	;3
	1443 2302  ROPE_ADD/55               #796=     #796                 16?55               	;1
	1444 2302  ROPE_END/56               #795=     #796                 828:'\');'          	;2
	1445 2302  SEND_VAL/65               ?96       #795                 ?2                  	;0
	1446 2302  DO_FCALL/60               ?679      ?0                   ?0                  	;0
	1447 2303  ASSIGN/38                 ?680      16?84                16?6                	;0
	1448 2304  UNSET_CV/196              ?0        16?6                 ?0                  	;0
	1449 2305  ASSIGN/38                 ?681      16?6                 16?84               	;0
	1450 2306  CONCAT/8                  #801=     829:' -d opcache.preload=' 16?60               	;0
	1451 2306  ASSIGN_CONCAT/30          ?683      16?6                 #801                	;0
	1452 2309  INIT_FCALL_BY_NAME/59     ?0        ?0                   830:'array_key_exists'	;2	<<1439
	1453 2309  SEND_VAL_EX/116           ?80       832:'POST_RAW'       ?1                  	;0
	1454 2309  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1455 2309  DO_FCALL_BY_NAME/131      $803=     ?0                   ?0                  	;0
	1456 2309  JMPZ_EX/46                #804=     $803                 ?1460               	;0	>>1460
	1457 2309  ISSET_ISEMPTY_DIM_OBJ/115 #805=     16?26                833:'POST_RAW'      	;16777216
	1458 2309  BOOL_NOT/13               #806=     #805                 ?0                  	;0
	1459 2309  BOOL/52                   #804=     #806                 ?0                  	;0
	1460 2309  JMPZ/43                   ?0        #804                 ?1537               	;0	>>1537	<<1456
	1461 2311  INIT_FCALL_BY_NAME/59     ?0        ?0                   834:'trim'          	;1
	1462 2311  FETCH_DIM_FUNC_ARG/93     $807=     16?26                836:'POST_RAW'      	;1
	1463 2311  SEND_VAR_EX/66            ?80       $807                 ?1                  	;0
	1464 2311  DO_FCALL_BY_NAME/131      $808=     ?0                   ?0                  	;0
	1465 2311  ASSIGN/38                 ?690      16?85                $808                	;0
	1466 2312  INIT_FCALL_BY_NAME/59     ?0        ?0                   837:'explode'       	;2
	1467 2312  SEND_VAL_EX/116           ?80       839:'
'              ?1                  	;0
	1468 2312  SEND_VAR_EX/66            ?96       16?85                ?2                  	;0
	1469 2312  DO_FCALL_BY_NAME/131      $810=     ?0                   ?0                  	;0
	1470 2312  ASSIGN/38                 ?692      16?86                $810                	;0
	1471 2314  ASSIGN/38                 ?693      16?87                840:''              	;0
	1472 2315  ASSIGN/38                 ?694      16?88                841:false           	;0
	1473 2317  FE_RESET_R/77             $814=     16?86                ?1501               	;0
	1474 2317  FE_FETCH_R/78             ?0        $814                 16?29               	;1501	>>1501	<<1500
	1475 2319  ISSET_ISEMPTY_DIM_OBJ/115 #815=     16?2                 842:'CONTENT_TYPE'  	;16777216
	1476 2319  JMPZ_EX/46                #815=     #815                 ?1483               	;0	>>1483
	1477 2319  INIT_FCALL_BY_NAME/59     ?0        ?0                   843:'preg_match'    	;3
	1478 2319  SEND_VAL_EX/116           ?80       845:'/^Content-Type:(.*)/i' ?1                  	;0
	1479 2319  SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
	1480 2319  SEND_VAR_EX/66            ?112      16?89                ?3                  	;0
	1481 2319  DO_FCALL_BY_NAME/131      $816=     ?0                   ?0                  	;0
	1482 2319  BOOL/52                   #815=     $816                 ?0                  	;0
	1483 2319  JMPZ/43                   ?0        #815                 ?1496               	;0	>>1496	<<1476
	1484 2320  INIT_FCALL_BY_NAME/59     ?0        ?0                   847:'trim'          	;1
	1485 2320  INIT_FCALL_BY_NAME/59     ?0        ?0                   849:'str_replace'   	;3
	1486 2320  SEND_VAL_EX/116           ?80       851:''              ?1                  	;0
	1487 2320  SEND_VAL_EX/116           ?96       852:''               ?2                  	;0
	1488 2320  FETCH_DIM_FUNC_ARG/93     $818=     16?89                853:1               	;3
	1489 2320  SEND_VAR_EX/66            ?112      $818                 ?3                  	;0
	1490 2320  DO_FCALL_BY_NAME/131      $819=     ?0                   ?0                  	;0
	1491 2320  SEND_VAR_NO_REF_EX/50     ?80       $819                 ?1                  	;0
	1492 2320  DO_FCALL_BY_NAME/131      $820=     ?0                   ?0                  	;0
	1493 2320  ASSIGN_DIM/147            ?698      16?2                 846:'CONTENT_TYPE'  	;0
	1494 2320  OP_DATA/137               ?0        $820                 ?0                  	;0
	1495 2321  CONT/255                  ?0        ?1474                0:1                 	;0
	1496 2324  JMPZ/43                   ?0        16?88                ?1498               	;0	>>1498	<<1483
	1497 2325  ASSIGN_CONCAT/30          ?702      16?87                854:'
'             	;0
	1498 2328  ASSIGN/38                 ?703      16?88                855:true            	;0	<<1496
	1499 2329  ASSIGN_CONCAT/30          ?704      16?87                16?29               	;0
	1500 2329  JMP/42                    ?0        ?1474                ?0                  	;0	>>1474
	1501 2329  FE_FREE/127               ?0        $814                 ?0                  	;0	<<1473
	1502 2332  INIT_FCALL_BY_NAME/59     ?0        ?0                   857:'strlen'        	;1
	1503 2332  SEND_VAR_EX/66            ?80       16?87                ?1                  	;0
	1504 2332  DO_FCALL_BY_NAME/131      $825=     ?0                   ?0                  	;0
	1505 2332  ASSIGN_DIM/147            ?705      16?2                 856:'CONTENT_LENGTH'	;0
	1506 2332  OP_DATA/137               ?0        $825                 ?0                  	;0
	1507 2333  ASSIGN_DIM/147            ?707      16?2                 859:'REQUEST_METHOD'	;0
	1508 2333  OP_DATA/137               ?0        860:'POST'           ?0                  	;0
	1509 2335  ISSET_ISEMPTY_CV/197      #827=     16?87                ?0                  	;16777216
	1510 2335  JMPZ/43                   ?0        #827                 ?1519               	;0	>>1519
	1511 2336  INIT_FCALL_BY_NAME/59     ?0        ?0                   861:'junit_mark_test_as'	;5
	1512 2336  SEND_VAL_EX/116           ?80       863:'BORK'           ?1                  	;0
	1513 2336  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	1514 2336  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	1515 2336  SEND_VAL_EX/116           ?128      864:NULL             ?4                  	;0
	1516 2336  SEND_VAL_EX/116           ?144      865:'empty $request' ?5                  	;0
	1517 2336  DO_FCALL_BY_NAME/131      ?709      ?0                   ?0                  	;0
	1518 2337  RETURN/62                 ?0        866:'BORKED'         ?0                  	;0
	1519 2340  INIT_FCALL/61             ?0        ?448                 867:'save_text'     	;2	<<1510
	1520 2340  SEND_VAR/117              ?80       16?61                ?1                  	;0
	1521 2340  SEND_VAR/117              ?96       16?87                ?2                  	;0
	1522 2340  DO_FCALL/60               ?710      ?0                   ?0                  	;0
	1523 2341  ROPE_INIT/54              #831=     ?0                   16?0                	;12
	1524 2341  ROPE_ADD/55               #831=     #831                 868:' '             	;1
	1525 2341  ROPE_ADD/55               #831=     #831                 16?6                	;2
	1526 2341  ROPE_ADD/55               #831=     #831                 869:' '             	;3
	1527 2341  ROPE_ADD/55               #831=     #831                 16?65               	;4
	1528 2341  ROPE_ADD/55               #831=     #831                 870:' -f "'         	;5
	1529 2341  ROPE_ADD/55               #831=     #831                 16?55               	;6
	1530 2341  ROPE_ADD/55               #831=     #831                 871:'"'             	;7
	1531 2341  ROPE_ADD/55               #831=     #831                 16?41               	;8
	1532 2341  ROPE_ADD/55               #831=     #831                 872:' < "'          	;9
	1533 2341  ROPE_ADD/55               #831=     #831                 16?61               	;10
	1534 2341  ROPE_END/56               #830=     #831                 873:'"'             	;11
	1535 2341  ASSIGN/38                 ?718      16?90                #830                	;0
	1536 2341  JMP/42                    ?0        ?1785                ?0                  	;0	>>1785
	1537 2343  INIT_FCALL_BY_NAME/59     ?0        ?0                   874:'array_key_exists'	;2	<<1460
	1538 2343  SEND_VAL_EX/116           ?80       876:'PUT'            ?1                  	;0
	1539 2343  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1540 2343  DO_FCALL_BY_NAME/131      $838=     ?0                   ?0                  	;0
	1541 2343  JMPZ_EX/46                #839=     $838                 ?1545               	;0	>>1545
	1542 2343  ISSET_ISEMPTY_DIM_OBJ/115 #840=     16?26                877:'PUT'           	;16777216
	1543 2343  BOOL_NOT/13               #841=     #840                 ?0                  	;0
	1544 2343  BOOL/52                   #839=     #841                 ?0                  	;0
	1545 2343  JMPZ/43                   ?0        #839                 ?1622               	;0	>>1622	<<1541
	1546 2345  INIT_FCALL_BY_NAME/59     ?0        ?0                   878:'trim'          	;1
	1547 2345  FETCH_DIM_FUNC_ARG/93     $842=     16?26                880:'PUT'           	;1
	1548 2345  SEND_VAR_EX/66            ?80       $842                 ?1                  	;0
	1549 2345  DO_FCALL_BY_NAME/131      $843=     ?0                   ?0                  	;0
	1550 2345  ASSIGN/38                 ?725      16?85                $843                	;0
	1551 2346  INIT_FCALL_BY_NAME/59     ?0        ?0                   881:'explode'       	;2
	1552 2346  SEND_VAL_EX/116           ?80       883:'
'              ?1                  	;0
	1553 2346  SEND_VAR_EX/66            ?96       16?85                ?2                  	;0
	1554 2346  DO_FCALL_BY_NAME/131      $845=     ?0                   ?0                  	;0
	1555 2346  ASSIGN/38                 ?727      16?86                $845                	;0
	1556 2348  ASSIGN/38                 ?728      16?87                884:''              	;0
	1557 2349  ASSIGN/38                 ?729      16?88                885:false           	;0
	1558 2351  FE_RESET_R/77             $849=     16?86                ?1586               	;0
	1559 2351  FE_FETCH_R/78             ?0        $849                 16?29               	;1586	>>1586	<<1585
	1560 2353  ISSET_ISEMPTY_DIM_OBJ/115 #850=     16?2                 886:'CONTENT_TYPE'  	;16777216
	1561 2353  JMPZ_EX/46                #850=     #850                 ?1568               	;0	>>1568
	1562 2353  INIT_FCALL_BY_NAME/59     ?0        ?0                   887:'preg_match'    	;3
	1563 2353  SEND_VAL_EX/116           ?80       889:'/^Content-Type:(.*)/i' ?1                  	;0
	1564 2353  SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
	1565 2353  SEND_VAR_EX/66            ?112      16?89                ?3                  	;0
	1566 2353  DO_FCALL_BY_NAME/131      $851=     ?0                   ?0                  	;0
	1567 2353  BOOL/52                   #850=     $851                 ?0                  	;0
	1568 2353  JMPZ/43                   ?0        #850                 ?1581               	;0	>>1581	<<1561
	1569 2354  INIT_FCALL_BY_NAME/59     ?0        ?0                   891:'trim'          	;1
	1570 2354  INIT_FCALL_BY_NAME/59     ?0        ?0                   893:'str_replace'   	;3
	1571 2354  SEND_VAL_EX/116           ?80       895:''              ?1                  	;0
	1572 2354  SEND_VAL_EX/116           ?96       896:''               ?2                  	;0
	1573 2354  FETCH_DIM_FUNC_ARG/93     $853=     16?89                897:1               	;3
	1574 2354  SEND_VAR_EX/66            ?112      $853                 ?3                  	;0
	1575 2354  DO_FCALL_BY_NAME/131      $854=     ?0                   ?0                  	;0
	1576 2354  SEND_VAR_NO_REF_EX/50     ?80       $854                 ?1                  	;0
	1577 2354  DO_FCALL_BY_NAME/131      $855=     ?0                   ?0                  	;0
	1578 2354  ASSIGN_DIM/147            ?733      16?2                 890:'CONTENT_TYPE'  	;0
	1579 2354  OP_DATA/137               ?0        $855                 ?0                  	;0
	1580 2355  CONT/255                  ?0        ?1559                0:1                 	;0
	1581 2358  JMPZ/43                   ?0        16?88                ?1583               	;0	>>1583	<<1568
	1582 2359  ASSIGN_CONCAT/30          ?737      16?87                898:'
'             	;0
	1583 2362  ASSIGN/38                 ?738      16?88                899:true            	;0	<<1581
	1584 2363  ASSIGN_CONCAT/30          ?739      16?87                16?29               	;0
	1585 2363  JMP/42                    ?0        ?1559                ?0                  	;0	>>1559
	1586 2363  FE_FREE/127               ?0        $849                 ?0                  	;0	<<1558
	1587 2366  INIT_FCALL_BY_NAME/59     ?0        ?0                   901:'strlen'        	;1
	1588 2366  SEND_VAR_EX/66            ?80       16?87                ?1                  	;0
	1589 2366  DO_FCALL_BY_NAME/131      $860=     ?0                   ?0                  	;0
	1590 2366  ASSIGN_DIM/147            ?740      16?2                 900:'CONTENT_LENGTH'	;0
	1591 2366  OP_DATA/137               ?0        $860                 ?0                  	;0
	1592 2367  ASSIGN_DIM/147            ?742      16?2                 903:'REQUEST_METHOD'	;0
	1593 2367  OP_DATA/137               ?0        904:'PUT'            ?0                  	;0
	1594 2369  ISSET_ISEMPTY_CV/197      #862=     16?87                ?0                  	;16777216
	1595 2369  JMPZ/43                   ?0        #862                 ?1604               	;0	>>1604
	1596 2370  INIT_FCALL_BY_NAME/59     ?0        ?0                   905:'junit_mark_test_as'	;5
	1597 2370  SEND_VAL_EX/116           ?80       907:'BORK'           ?1                  	;0
	1598 2370  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	1599 2370  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	1600 2370  SEND_VAL_EX/116           ?128      908:NULL             ?4                  	;0
	1601 2370  SEND_VAL_EX/116           ?144      909:'empty $request' ?5                  	;0
	1602 2370  DO_FCALL_BY_NAME/131      ?744      ?0                   ?0                  	;0
	1603 2371  RETURN/62                 ?0        910:'BORKED'         ?0                  	;0
	1604 2374  INIT_FCALL/61             ?0        ?448                 911:'save_text'     	;2	<<1595
	1605 2374  SEND_VAR/117              ?80       16?61                ?1                  	;0
	1606 2374  SEND_VAR/117              ?96       16?87                ?2                  	;0
	1607 2374  DO_FCALL/60               ?745      ?0                   ?0                  	;0
	1608 2375  ROPE_INIT/54              #866=     ?0                   16?0                	;12
	1609 2375  ROPE_ADD/55               #866=     #866                 912:' '             	;1
	1610 2375  ROPE_ADD/55               #866=     #866                 16?6                	;2
	1611 2375  ROPE_ADD/55               #866=     #866                 913:' '             	;3
	1612 2375  ROPE_ADD/55               #866=     #866                 16?65               	;4
	1613 2375  ROPE_ADD/55               #866=     #866                 914:' -f "'         	;5
	1614 2375  ROPE_ADD/55               #866=     #866                 16?55               	;6
	1615 2375  ROPE_ADD/55               #866=     #866                 915:'"'             	;7
	1616 2375  ROPE_ADD/55               #866=     #866                 16?41               	;8
	1617 2375  ROPE_ADD/55               #866=     #866                 916:' < "'          	;9
	1618 2375  ROPE_ADD/55               #866=     #866                 16?61               	;10
	1619 2375  ROPE_END/56               #865=     #866                 917:'"'             	;11
	1620 2375  ASSIGN/38                 ?753      16?90                #865                	;0
	1621 2375  JMP/42                    ?0        ?1785                ?0                  	;0	>>1785
	1622 2377  INIT_FCALL_BY_NAME/59     ?0        ?0                   918:'array_key_exists'	;2	<<1545
	1623 2377  SEND_VAL_EX/116           ?80       920:'POST'           ?1                  	;0
	1624 2377  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1625 2377  DO_FCALL_BY_NAME/131      $873=     ?0                   ?0                  	;0
	1626 2377  JMPZ_EX/46                #874=     $873                 ?1630               	;0	>>1630
	1627 2377  ISSET_ISEMPTY_DIM_OBJ/115 #875=     16?26                921:'POST'          	;16777216
	1628 2377  BOOL_NOT/13               #876=     #875                 ?0                  	;0
	1629 2377  BOOL/52                   #874=     #876                 ?0                  	;0
	1630 2377  JMPZ/43                   ?0        #874                 ?1668               	;0	>>1668	<<1626
	1631 2379  INIT_FCALL_BY_NAME/59     ?0        ?0                   922:'trim'          	;1
	1632 2379  FETCH_DIM_FUNC_ARG/93     $877=     16?26                924:'POST'          	;1
	1633 2379  SEND_VAR_EX/66            ?80       $877                 ?1                  	;0
	1634 2379  DO_FCALL_BY_NAME/131      $878=     ?0                   ?0                  	;0
	1635 2379  ASSIGN/38                 ?760      16?85                $878                	;0
	1636 2380  INIT_FCALL_BY_NAME/59     ?0        ?0                   925:'strlen'        	;1
	1637 2380  SEND_VAR_EX/66            ?80       16?85                ?1                  	;0
	1638 2380  DO_FCALL_BY_NAME/131      $880=     ?0                   ?0                  	;0
	1639 2380  ASSIGN/38                 ?762      16?91                $880                	;0
	1640 2381  INIT_FCALL/61             ?0        ?448                 927:'save_text'     	;2
	1641 2381  SEND_VAR/117              ?80       16?61                ?1                  	;0
	1642 2381  SEND_VAR/117              ?96       16?85                ?2                  	;0
	1643 2381  DO_FCALL/60               ?763      ?0                   ?0                  	;0
	1644 2383  ASSIGN_DIM/147            ?764      16?2                 928:'REQUEST_METHOD'	;0
	1645 2383  OP_DATA/137               ?0        929:'POST'           ?0                  	;0
	1646 2384  ISSET_ISEMPTY_DIM_OBJ/115 #884=     16?2                 930:'CONTENT_TYPE'  	;16777216
	1647 2384  JMPZ/43                   ?0        #884                 ?1650               	;0	>>1650
	1648 2385  ASSIGN_DIM/147            ?766      16?2                 931:'CONTENT_TYPE'  	;0
	1649 2385  OP_DATA/137               ?0        932:'application/x-www-form-urlencoded' ?0                  	;0
	1650 2388  ISSET_ISEMPTY_DIM_OBJ/115 #886=     16?2                 933:'CONTENT_LENGTH'	;16777216	<<1647
	1651 2388  JMPZ/43                   ?0        #886                 ?1654               	;0	>>1654
	1652 2389  ASSIGN_DIM/147            ?768      16?2                 934:'CONTENT_LENGTH'	;0
	1653 2389  OP_DATA/137               ?0        16?91                ?0                  	;0
	1654 2392  ROPE_INIT/54              #889=     ?0                   16?0                	;12	<<1651
	1655 2392  ROPE_ADD/55               #889=     #889                 935:' '             	;1
	1656 2392  ROPE_ADD/55               #889=     #889                 16?6                	;2
	1657 2392  ROPE_ADD/55               #889=     #889                 936:' '             	;3
	1658 2392  ROPE_ADD/55               #889=     #889                 16?65               	;4
	1659 2392  ROPE_ADD/55               #889=     #889                 937:' -f "'         	;5
	1660 2392  ROPE_ADD/55               #889=     #889                 16?55               	;6
	1661 2392  ROPE_ADD/55               #889=     #889                 938:'"'             	;7
	1662 2392  ROPE_ADD/55               #889=     #889                 16?41               	;8
	1663 2392  ROPE_ADD/55               #889=     #889                 939:' < "'          	;9
	1664 2392  ROPE_ADD/55               #889=     #889                 16?61               	;10
	1665 2392  ROPE_END/56               #888=     #889                 940:'"'             	;11
	1666 2392  ASSIGN/38                 ?776      16?90                #888                	;0
	1667 2392  JMP/42                    ?0        ?1785                ?0                  	;0	>>1785
	1668 2394  INIT_FCALL_BY_NAME/59     ?0        ?0                   941:'array_key_exists'	;2	<<1630
	1669 2394  SEND_VAL_EX/116           ?80       943:'GZIP_POST'      ?1                  	;0
	1670 2394  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1671 2394  DO_FCALL_BY_NAME/131      $896=     ?0                   ?0                  	;0
	1672 2394  JMPZ_EX/46                #897=     $896                 ?1676               	;0	>>1676
	1673 2394  ISSET_ISEMPTY_DIM_OBJ/115 #898=     16?26                944:'GZIP_POST'     	;16777216
	1674 2394  BOOL_NOT/13               #899=     #898                 ?0                  	;0
	1675 2394  BOOL/52                   #897=     #899                 ?0                  	;0
	1676 2394  JMPZ/43                   ?0        #897                 ?1719               	;0	>>1719	<<1672
	1677 2396  INIT_FCALL_BY_NAME/59     ?0        ?0                   945:'trim'          	;1
	1678 2396  FETCH_DIM_FUNC_ARG/93     $900=     16?26                947:'GZIP_POST'     	;1
	1679 2396  SEND_VAR_EX/66            ?80       $900                 ?1                  	;0
	1680 2396  DO_FCALL_BY_NAME/131      $901=     ?0                   ?0                  	;0
	1681 2396  ASSIGN/38                 ?783      16?85                $901                	;0
	1682 2397  INIT_FCALL_BY_NAME/59     ?0        ?0                   948:'gzencode'      	;3
	1683 2397  SEND_VAR_EX/66            ?80       16?85                ?1                  	;0
	1684 2397  SEND_VAL_EX/116           ?96       950:9                ?2                  	;0
	1685 2397  FETCH_CONSTANT/99         #903=     ?0                   951:'FORCE_GZIP'    	;16
	1686 2397  SEND_VAL_EX/116           ?112      #903                 ?3                  	;0
	1687 2397  DO_FCALL_BY_NAME/131      $904=     ?0                   ?0                  	;0
	1688 2397  ASSIGN/38                 ?786      16?85                $904                	;0
	1689 2398  ASSIGN_DIM/147            ?787      16?2                 954:'HTTP_CONTENT_ENCODING'	;0
	1690 2398  OP_DATA/137               ?0        955:'gzip'           ?0                  	;0
	1691 2400  INIT_FCALL/61             ?0        ?448                 956:'save_text'     	;2
	1692 2400  SEND_VAR/117              ?80       16?61                ?1                  	;0
	1693 2400  SEND_VAR/117              ?96       16?85                ?2                  	;0
	1694 2400  DO_FCALL/60               ?788      ?0                   ?0                  	;0
	1695 2401  INIT_FCALL_BY_NAME/59     ?0        ?0                   957:'strlen'        	;1
	1696 2401  SEND_VAR_EX/66            ?80       16?85                ?1                  	;0
	1697 2401  DO_FCALL_BY_NAME/131      $908=     ?0                   ?0                  	;0
	1698 2401  ASSIGN/38                 ?790      16?91                $908                	;0
	1699 2403  ASSIGN_DIM/147            ?791      16?2                 959:'REQUEST_METHOD'	;0
	1700 2403  OP_DATA/137               ?0        960:'POST'           ?0                  	;0
	1701 2404  ASSIGN_DIM/147            ?792      16?2                 961:'CONTENT_TYPE'  	;0
	1702 2404  OP_DATA/137               ?0        962:'application/x-www-form-urlencoded' ?0                  	;0
	1703 2405  ASSIGN_DIM/147            ?793      16?2                 963:'CONTENT_LENGTH'	;0
	1704 2405  OP_DATA/137               ?0        16?91                ?0                  	;0
	1705 2407  ROPE_INIT/54              #914=     ?0                   16?0                	;12
	1706 2407  ROPE_ADD/55               #914=     #914                 964:' '             	;1
	1707 2407  ROPE_ADD/55               #914=     #914                 16?6                	;2
	1708 2407  ROPE_ADD/55               #914=     #914                 965:' '             	;3
	1709 2407  ROPE_ADD/55               #914=     #914                 16?65               	;4
	1710 2407  ROPE_ADD/55               #914=     #914                 966:' -f "'         	;5
	1711 2407  ROPE_ADD/55               #914=     #914                 16?55               	;6
	1712 2407  ROPE_ADD/55               #914=     #914                 967:'"'             	;7
	1713 2407  ROPE_ADD/55               #914=     #914                 16?41               	;8
	1714 2407  ROPE_ADD/55               #914=     #914                 968:' < "'          	;9
	1715 2407  ROPE_ADD/55               #914=     #914                 16?61               	;10
	1716 2407  ROPE_END/56               #913=     #914                 969:'"'             	;11
	1717 2407  ASSIGN/38                 ?801      16?90                #913                	;0
	1718 2407  JMP/42                    ?0        ?1785                ?0                  	;0	>>1785
	1719 2409  INIT_FCALL_BY_NAME/59     ?0        ?0                   970:'array_key_exists'	;2	<<1676
	1720 2409  SEND_VAL_EX/116           ?80       972:'DEFLATE_POST'   ?1                  	;0
	1721 2409  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1722 2409  DO_FCALL_BY_NAME/131      $921=     ?0                   ?0                  	;0
	1723 2409  JMPZ_EX/46                #922=     $921                 ?1727               	;0	>>1727
	1724 2409  ISSET_ISEMPTY_DIM_OBJ/115 #923=     16?26                973:'DEFLATE_POST'  	;16777216
	1725 2409  BOOL_NOT/13               #924=     #923                 ?0                  	;0
	1726 2409  BOOL/52                   #922=     #924                 ?0                  	;0
	1727 2409  JMPZ/43                   ?0        #922                 ?1768               	;0	>>1768	<<1723
	1728 2410  INIT_FCALL_BY_NAME/59     ?0        ?0                   974:'trim'          	;1
	1729 2410  FETCH_DIM_FUNC_ARG/93     $925=     16?26                976:'DEFLATE_POST'  	;1
	1730 2410  SEND_VAR_EX/66            ?80       $925                 ?1                  	;0
	1731 2410  DO_FCALL_BY_NAME/131      $926=     ?0                   ?0                  	;0
	1732 2410  ASSIGN/38                 ?808      16?85                $926                	;0
	1733 2411  INIT_FCALL_BY_NAME/59     ?0        ?0                   977:'gzcompress'    	;2
	1734 2411  SEND_VAR_EX/66            ?80       16?85                ?1                  	;0
	1735 2411  SEND_VAL_EX/116           ?96       979:9                ?2                  	;0
	1736 2411  DO_FCALL_BY_NAME/131      $928=     ?0                   ?0                  	;0
	1737 2411  ASSIGN/38                 ?810      16?85                $928                	;0
	1738 2412  ASSIGN_DIM/147            ?811      16?2                 980:'HTTP_CONTENT_ENCODING'	;0
	1739 2412  OP_DATA/137               ?0        981:'deflate'        ?0                  	;0
	1740 2413  INIT_FCALL/61             ?0        ?448                 982:'save_text'     	;2
	1741 2413  SEND_VAR/117              ?80       16?61                ?1                  	;0
	1742 2413  SEND_VAR/117              ?96       16?85                ?2                  	;0
	1743 2413  DO_FCALL/60               ?812      ?0                   ?0                  	;0
	1744 2414  INIT_FCALL_BY_NAME/59     ?0        ?0                   983:'strlen'        	;1
	1745 2414  SEND_VAR_EX/66            ?80       16?85                ?1                  	;0
	1746 2414  DO_FCALL_BY_NAME/131      $932=     ?0                   ?0                  	;0
	1747 2414  ASSIGN/38                 ?814      16?91                $932                	;0
	1748 2416  ASSIGN_DIM/147            ?815      16?2                 985:'REQUEST_METHOD'	;0
	1749 2416  OP_DATA/137               ?0        986:'POST'           ?0                  	;0
	1750 2417  ASSIGN_DIM/147            ?816      16?2                 987:'CONTENT_TYPE'  	;0
	1751 2417  OP_DATA/137               ?0        988:'application/x-www-form-urlencoded' ?0                  	;0
	1752 2418  ASSIGN_DIM/147            ?817      16?2                 989:'CONTENT_LENGTH'	;0
	1753 2418  OP_DATA/137               ?0        16?91                ?0                  	;0
	1754 2420  ROPE_INIT/54              #938=     ?0                   16?0                	;12
	1755 2420  ROPE_ADD/55               #938=     #938                 990:' '             	;1
	1756 2420  ROPE_ADD/55               #938=     #938                 16?6                	;2
	1757 2420  ROPE_ADD/55               #938=     #938                 991:' '             	;3
	1758 2420  ROPE_ADD/55               #938=     #938                 16?65               	;4
	1759 2420  ROPE_ADD/55               #938=     #938                 992:' -f "'         	;5
	1760 2420  ROPE_ADD/55               #938=     #938                 16?55               	;6
	1761 2420  ROPE_ADD/55               #938=     #938                 993:'"'             	;7
	1762 2420  ROPE_ADD/55               #938=     #938                 16?41               	;8
	1763 2420  ROPE_ADD/55               #938=     #938                 994:' < "'          	;9
	1764 2420  ROPE_ADD/55               #938=     #938                 16?61               	;10
	1765 2420  ROPE_END/56               #937=     #938                 995:'"'             	;11
	1766 2420  ASSIGN/38                 ?825      16?90                #937                	;0
	1767 2420  JMP/42                    ?0        ?1785                ?0                  	;0	>>1785
	1768 2424  ASSIGN_DIM/147            ?826      16?2                 996:'REQUEST_METHOD'	;0	<<1727
	1769 2424  OP_DATA/137               ?0        997:'GET'            ?0                  	;0
	1770 2425  ASSIGN_DIM/147            ?827      16?2                 998:'CONTENT_TYPE'  	;0
	1771 2425  OP_DATA/137               ?0        999:''               ?0                  	;0
	1772 2426  ASSIGN_DIM/147            ?828      16?2                 1000:'CONTENT_LENGTH'	;0
	1773 2426  OP_DATA/137               ?0        1001:''              ?0                  	;0
	1774 2428  ROPE_INIT/54              #949=     ?0                   16?0                	;10
	1775 2428  ROPE_ADD/55               #949=     #949                 1002:' '            	;1
	1776 2428  ROPE_ADD/55               #949=     #949                 16?6                	;2
	1777 2428  ROPE_ADD/55               #949=     #949                 1003:' '            	;3
	1778 2428  ROPE_ADD/55               #949=     #949                 16?65               	;4
	1779 2428  ROPE_ADD/55               #949=     #949                 1004:' -f "'        	;5
	1780 2428  ROPE_ADD/55               #949=     #949                 16?55               	;6
	1781 2428  ROPE_ADD/55               #949=     #949                 1005:'" '           	;7
	1782 2428  ROPE_ADD/55               #949=     #949                 16?83               	;8
	1783 2428  ROPE_END/56               #948=     #949                 16?41               	;9
	1784 2428  ASSIGN/38                 ?835      16?90                #948                	;0
	1785 2431  JMPZ/43                   ?0        16?11                ?1801               	;0	>>1801	<<1536,1621,1667,1718,1767
	1786 2432  ASSIGN_DIM/147            ?836      16?2                 1006:'USE_ZEND_ALLOC'	;0
	1787 2432  OP_DATA/137               ?0        1007:'0'             ?0                  	;0
	1788 2433  ASSIGN_DIM/147            ?837      16?2                 1008:'ZEND_DONT_UNLOAD_MODULES'	;0
	1789 2433  OP_DATA/137               ?0        1009:1               ?0                  	;0
	1790 2435  INIT_METHOD_CALL/112      ?0        16?11                1010:'wrapCommand'  	;3
	1791 2435  SEND_VAR_EX/66            ?80       16?90                ?1                  	;0
	1792 2435  SEND_VAR_EX/66            ?96       16?52                ?2                  	;0
	1793 2435  INIT_FCALL_BY_NAME/59     ?0        ?0                   1012:'strpos'       	;2
	1794 2435  SEND_VAR_EX/66            ?80       16?55                ?1                  	;0
	1795 2435  SEND_VAL_EX/116           ?96       1014:'pcre'          ?2                  	;0
	1796 2435  DO_FCALL_BY_NAME/131      $957=     ?0                   ?0                  	;0
	1797 2435  IS_NOT_IDENTICAL/16       #958=     $957                 1015:false          	;0
	1798 2435  SEND_VAL_EX/116           ?112      #958                 ?3                  	;0
	1799 2435  DO_FCALL/60               $959=     ?0                   ?0                  	;0
	1800 2435  ASSIGN/38                 ?841      16?90                $959                	;0
	1801 2438  JMPZ/43                   ?0        16?7                 ?1830               	;0	>>1830	<<1785
	1802 2439  FETCH_DIM_R/81            $961=     16?2                 1016:'CONTENT_LENGTH'	;0
	1803 2439  CONCAT/8                  #962=     1017:'
CONTENT_LENGTH  = ' $961                	;0
	1804 2439  CONCAT/8                  #963=     #962                 1018:'
CONTENT_TYPE    = '	;0
	1805 2440  FETCH_DIM_R/81            $964=     16?2                 1019:'CONTENT_TYPE' 	;0
	1806 2440  CONCAT/8                  #965=     #963                 $964                	;0
	1807 2440  CONCAT/8                  #966=     #965                 1020:'
PATH_TRANSLATED = '	;0
	1808 2441  FETCH_DIM_R/81            $967=     16?2                 1021:'PATH_TRANSLATED'	;0
	1809 2441  CONCAT/8                  #968=     #966                 $967                	;0
	1810 2441  CONCAT/8                  #969=     #968                 1022:'
QUERY_STRING    = '	;0
	1811 2442  FETCH_DIM_R/81            $970=     16?2                 1023:'QUERY_STRING' 	;0
	1812 2442  CONCAT/8                  #971=     #969                 $970                	;0
	1813 2442  CONCAT/8                  #972=     #971                 1024:'
REDIRECT_STATUS = '	;0
	1814 2443  FETCH_DIM_R/81            $973=     16?2                 1025:'REDIRECT_STATUS'	;0
	1815 2443  CONCAT/8                  #974=     #972                 $973                	;0
	1816 2443  CONCAT/8                  #975=     #974                 1026:'
REQUEST_METHOD  = '	;0
	1817 2444  FETCH_DIM_R/81            $976=     16?2                 1027:'REQUEST_METHOD'	;0
	1818 2444  CONCAT/8                  #977=     #975                 $976                	;0
	1819 2444  CONCAT/8                  #978=     #977                 1028:'
SCRIPT_FILENAME = '	;0
	1820 2445  FETCH_DIM_R/81            $979=     16?2                 1029:'SCRIPT_FILENAME'	;0
	1821 2445  CONCAT/8                  #980=     #978                 $979                	;0
	1822 2445  CONCAT/8                  #981=     #980                 1030:'
HTTP_COOKIE     = '	;0
	1823 2446  FETCH_DIM_R/81            $982=     16?2                 1031:'HTTP_COOKIE'  	;0
	1824 2446  CONCAT/8                  #983=     #981                 $982                	;0
	1825 2447  ROPE_INIT/54              #985=     ?0                   1032:'
COMMAND '    	;3
	1826 2447  ROPE_ADD/55               #985=     #985                 16?90               	;1
	1827 2447  ROPE_END/56               #984=     #985                 1033:'
'            	;2
	1828 2447  CONCAT/8                  #987=     #983                 #984                	;0
	1829 2447  ECHO/40                   ?0        #987                 ?0                  	;0
	1830 2450  INIT_FCALL_BY_NAME/59     ?0        ?0                   1034:'junit_start_timer'	;1	<<1801
	1831 2450  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	1832 2450  DO_FCALL_BY_NAME/131      ?869      ?0                   ?0                  	;0
	1833 2451  INIT_FCALL_BY_NAME/59     ?0        ?0                   1036:'hrtime'       	;0
	1834 2451  DO_FCALL_BY_NAME/131      $989=     ?0                   ?0                  	;0
	1835 2451  ASSIGN/38                 ?871      16?92                $989                	;0
	1836 2452  FETCH_DIM_R/81            $991=     16?92                1038:0              	;0
	1837 2452  MUL/3                     #992=     $991                 1039:1000000000     	;0
	1838 2452  FETCH_DIM_R/81            $993=     16?92                1040:1              	;0
	1839 2452  ADD/1                     #994=     #992                 $993                	;0
	1840 2452  ASSIGN/38                 ?876      16?93                #994                	;0
	1841 2454  INIT_FCALL/61             ?0        ?1424                1041:'system_with_timeout'	;6
	1842 2454  SEND_VAR/117              ?80       16?90                ?1                  	;0
	1843 2454  SEND_VAR/117              ?96       16?2                 ?2                  	;0
	1844 2454  FETCH_DIM_IS/90           $996=     16?26                1042:'STDIN'        	;0
	1845 2454  COALESCE/169              #997=     $996                 ?1847               	;0
	1846 2454  QM_ASSIGN/22              #997=     1043:NULL            ?0                  	;0
	1847 2454  SEND_VAL/65               ?112      #997                 ?3                  	;0
	1848 2454  SEND_VAR/117              ?128      16?38                ?4                  	;0
	1849 2454  SEND_VAR/117              ?144      16?39                ?5                  	;0
	1850 2454  SEND_VAR/117              ?160      16?40                ?6                  	;0
	1851 2454  DO_FCALL/60               $998=     ?0                   ?0                  	;0
	1852 2454  ASSIGN/38                 ?880      16?94                $998                	;0
	1853 2456  INIT_FCALL_BY_NAME/59     ?0        ?0                   1044:'junit_finish_timer'	;1
	1854 2456  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	1855 2456  DO_FCALL_BY_NAME/131      ?881      ?0                   ?0                  	;0
	1856 2457  INIT_FCALL_BY_NAME/59     ?0        ?0                   1046:'hrtime'       	;0
	1857 2457  DO_FCALL_BY_NAME/131      $1001=    ?0                   ?0                  	;0
	1858 2457  ASSIGN/38                 ?883      16?92                $1001               	;0
	1859 2458  FETCH_DIM_R/81            $1003=    16?92                1048:0              	;0
	1860 2458  MUL/3                     #1004=    $1003                1049:1000000000     	;0
	1861 2458  FETCH_DIM_R/81            $1005=    16?92                1050:1              	;0
	1862 2458  ADD/1                     #1006=    #1004                $1005               	;0
	1863 2458  SUB/2                     #1007=    #1006                16?93               	;0
	1864 2458  ASSIGN/38                 ?889      16?95                #1007               	;0
	1865 2459  MUL/3                     #1009=    16?19                1051:1000000        	;0
	1866 2459  IS_SMALLER_OR_EQUAL/20    #1010=    #1009                16?95               	;0
	1867 2459  JMPZ/43                   ?0        #1010                ?1890               	;0	>>1890
	1868 2461  INIT_ARRAY/71             #1013=    16?1                 1053:'name'         	;22
	1869 2462  INIT_FCALL_BY_NAME/59     ?0        ?0                   1054:'is_array'     	;1
	1870 2462  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	1871 2462  DO_FCALL_BY_NAME/131      $1014=    ?0                   ?0                  	;0
	1872 2462  JMPZ/43                   ?0        $1014                ?1876               	;0	>>1876
	1873 2462  FETCH_DIM_R/81            $1015=    16?8                 1056:'via'          	;0
	1874 2462  QM_ASSIGN/22              #1016=    $1015                ?0                  	;0
	1875 2462  JMP/42                    ?0        ?1877                ?0                  	;0	>>1877
	1876 2462  QM_ASSIGN/22              #1016=    1057:''              ?0                  	;0	<<1872
	1877 2462  CONCAT/8                  #1017=    #1016                16?42               	;0	<<1875
	1878 2462  ROPE_INIT/54              #1019=    ?0                   1058:' ['           	;3
	1879 2462  ROPE_ADD/55               #1019=    #1019                16?37               	;1
	1880 2462  ROPE_END/56               #1018=    #1019                1059:']'            	;2
	1881 2462  CONCAT/8                  #1021=    #1017                #1018               	;0
	1882 2462  ADD_ARRAY_ELEMENT/72      #1013=    #1021                1060:'test_name'    	;0
	1883 2463  ADD_ARRAY_ELEMENT/72      #1013=    1061:''              1062:'output'       	;0
	1884 2464  ADD_ARRAY_ELEMENT/72      #1013=    1063:''              1064:'diff'         	;0
	1885 2465  DIV/4                     #1022=    16?95                1065:1000000000     	;0
	1886 2465  ADD_ARRAY_ELEMENT/72      #1013=    #1022                1066:'info'         	;0
	1887 2460  FETCH_DIM_W/84            $1011=    16?5                 1052:'SLOW'         	;0
	1888 2460  ASSIGN_DIM/147            ?893      $1011                ?1000000            	;0
	1889 2465  OP_DATA/137               ?0        #1013                ?0                  	;0
	1890 2469  INIT_FCALL_BY_NAME/59     ?0        ?0                   1067:'array_key_exists'	;2	<<1867
	1891 2469  SEND_VAL_EX/116           ?80       1069:'CLEAN'         ?1                  	;0
	1892 2469  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1893 2469  DO_FCALL_BY_NAME/131      $1023=    ?0                   ?0                  	;0
	1894 2469  JMPZ_EX/46                #1024=    $1023                ?1901               	;0	>>1901
	1895 2469  BOOL_NOT/13               #1025=    16?16                ?0                  	;0
	1896 2469  JMPNZ_EX/47               #1025=    #1025                ?1900               	;0	>>1900
	1897 2469  FETCH_DIM_R/81            $1026=    16?14                1070:'keep'         	;0
	1898 2469  FETCH_DIM_R/81            $1027=    $1026                1071:'clean'        	;0
	1899 2469  BOOL/52                   #1025=    $1027                ?0                  	;0
	1900 2469  BOOL/52                   #1024=    #1025                ?0                  	;0	<<1896
	1901 2469  JMPZ/43                   ?0        #1024                ?1962               	;0	>>1962	<<1894
	1902 2471  INIT_FCALL_BY_NAME/59     ?0        ?0                   1072:'trim'         	;1
	1903 2471  FETCH_DIM_FUNC_ARG/93     $1028=    16?26                1074:'CLEAN'        	;1
	1904 2471  SEND_VAR_EX/66            ?80       $1028                ?1                  	;0
	1905 2471  DO_FCALL_BY_NAME/131      $1029=    ?0                   ?0                  	;0
	1906 2471  JMPZ/43                   ?0        $1029                ?1962               	;0	>>1962
	1907 2472  INIT_FCALL/61             ?0        ?272                 1075:'show_file_block'	;2
	1908 2472  SEND_VAL/65               ?80       1076:'clean'         ?1                  	;0
	1909 2472  FETCH_DIM_R/81            $1030=    16?26                1077:'CLEAN'        	;0
	1910 2472  SEND_VAR/117              ?96       $1030                ?2                  	;0
	1911 2472  DO_FCALL/60               ?912      ?0                   ?0                  	;0
	1912 2473  INIT_FCALL/61             ?0        ?448                 1078:'save_text'    	;3
	1913 2473  SEND_VAR/117              ?80       16?59                ?1                  	;0
	1914 2473  INIT_FCALL_BY_NAME/59     ?0        ?0                   1079:'trim'         	;1
	1915 2473  FETCH_DIM_FUNC_ARG/93     $1032=    16?26                1081:'CLEAN'        	;1
	1916 2473  SEND_VAR_EX/66            ?80       $1032                ?1                  	;0
	1917 2473  DO_FCALL_BY_NAME/131      $1033=    ?0                   ?0                  	;0
	1918 2473  SEND_VAR/117              ?96       $1033                ?2                  	;0
	1919 2473  SEND_VAR/117              ?112      16?58                ?3                  	;0
	1920 2473  DO_FCALL/60               ?915      ?0                   ?0                  	;0
	1921 2475  BOOL_NOT/13               #1035=    16?16                ?0                  	;0
	1922 2475  JMPZ/43                   ?0        #1035                ?1953               	;0	>>1953
	1923 2476  INIT_FCALL_BY_NAME/59     ?0        ?0                   1082:'substr'       	;3
	1924 2476  FETCH_CONSTANT/99         #1036=    ?0                   1084:'PHP_OS'       	;16
	1925 2476  SEND_VAL_EX/116           ?80       #1036                ?1                  	;0
	1926 2476  SEND_VAL_EX/116           ?96       1087:0               ?2                  	;0
	1927 2476  SEND_VAL_EX/116           ?112      1088:3               ?3                  	;0
	1928 2476  DO_FCALL_BY_NAME/131      $1037=    ?0                   ?0                  	;0
	1929 2476  IS_NOT_IDENTICAL/16       #1038=    $1037                1089:'WIN'          	;0
	1930 2476  JMPZ/43                   ?0        #1038                ?1933               	;0	>>1933
	1931 2477  QM_ASSIGN/22              #1039=    1090:'unset REQUEST_METHOD; unset QUERY_STRING; unset PATH_TRANSLATED; unset SCRIPT_FILENAME; unset REQUEST_METHOD;' ?0                  	;0
	1932 2477  JMP/42                    ?0        ?1934                ?0                  	;0	>>1934
	1933 2477  QM_ASSIGN/22              #1039=    1091:''              ?0                  	;0	<<1930
	1934 2477  ASSIGN/38                 ?921      16?75                #1039               	;0	<<1932
	1935 2478  INIT_FCALL/61             ?0        ?1424                1092:'system_with_timeout'	;2
	1936 2478  ROPE_INIT/54              #1042=    ?0                   16?75               	;14
	1937 2478  ROPE_ADD/55               #1042=    #1042                1093:' '            	;1
	1938 2478  ROPE_ADD/55               #1042=    #1042                16?0                	;2
	1939 2478  ROPE_ADD/55               #1042=    #1042                1094:' '            	;3
	1940 2478  ROPE_ADD/55               #1042=    #1042                16?6                	;4
	1941 2478  ROPE_ADD/55               #1042=    #1042                1095:' '            	;5
	1942 2478  ROPE_ADD/55               #1042=    #1042                16?44               	;6
	1943 2478  ROPE_ADD/55               #1042=    #1042                1096:' -q '         	;7
	1944 2478  ROPE_ADD/55               #1042=    #1042                16?72               	;8
	1945 2478  ROPE_ADD/55               #1042=    #1042                1097:' '            	;9
	1946 2478  ROPE_ADD/55               #1042=    #1042                16?18               	;10
	1947 2478  ROPE_ADD/55               #1042=    #1042                1098:' "'           	;11
	1948 2478  ROPE_ADD/55               #1042=    #1042                16?59               	;12
	1949 2478  ROPE_END/56               #1041=    #1042                1099:'"'            	;13
	1950 2478  SEND_VAL/65               ?80       #1041                ?1                  	;0
	1951 2478  SEND_VAR/117              ?96       16?2                 ?2                  	;0
	1952 2478  DO_FCALL/60               ?930      ?0                   ?0                  	;0
	1953 2481  FETCH_DIM_R/81            $1050=    16?14                1100:'keep'         	;0	<<1922
	1954 2481  FETCH_DIM_R/81            $1051=    $1050                1101:'clean'        	;0
	1955 2481  BOOL_NOT/13               #1052=    $1051                ?0                  	;0
	1956 2481  JMPZ/43                   ?0        #1052                ?1962               	;0	>>1962
	1957 2482  BEGIN_SILENCE/57          #1053=    ?0                   ?0                  	;0
	1958 2482  INIT_FCALL_BY_NAME/59     ?0        ?0                   1102:'unlink'       	;1
	1959 2482  SEND_VAR_EX/66            ?80       16?59                ?1                  	;0
	1960 2482  DO_FCALL_BY_NAME/131      ?935      ?0                   ?0                  	;0
	1961 2482  END_SILENCE/58            ?0        #1053                ?0                  	;0
	1962 2487  BEGIN_SILENCE/57          #1055=    ?0                   ?0                  	;0	<<1901,1906,1956
	1963 2487  INIT_FCALL_BY_NAME/59     ?0        ?0                   1104:'unlink'       	;1
	1964 2487  SEND_VAR_EX/66            ?80       16?60                ?1                  	;0
	1965 2487  DO_FCALL_BY_NAME/131      ?937      ?0                   ?0                  	;0
	1966 2487  END_SILENCE/58            ?0        #1055                ?0                  	;0
	1967 2489  ASSIGN/38                 ?938      16?96                1106:false          	;0
	1968 2490  ASSIGN/38                 ?939      16?97                1107:false          	;0
	1969 2492  JMPZ/43                   ?0        16?11                ?1982               	;0	>>1982
	1970 2493  INIT_FCALL_BY_NAME/59     ?0        ?0                   1108:'filesize'     	;1
	1971 2493  SEND_VAR_EX/66            ?80       16?52                ?1                  	;0
	1972 2493  DO_FCALL_BY_NAME/131      $1059=    ?0                   ?0                  	;0
	1973 2493  IS_SMALLER/19             #1060=    1110:0               $1059               	;0
	1974 2493  ASSIGN/38                 ?942      16?96                #1060               	;0
	1975 2495  BOOL_NOT/13               #1062=    16?96                ?0                  	;0
	1976 2495  JMPZ/43                   ?0        #1062                ?1982               	;0	>>1982
	1977 2496  BEGIN_SILENCE/57          #1063=    ?0                   ?0                  	;0
	1978 2496  INIT_FCALL_BY_NAME/59     ?0        ?0                   1111:'unlink'       	;1
	1979 2496  SEND_VAR_EX/66            ?80       16?52                ?1                  	;0
	1980 2496  DO_FCALL_BY_NAME/131      ?945      ?0                   ?0                  	;0
	1981 2496  END_SILENCE/58            ?0        #1063                ?0                  	;0
	1982 2501  INIT_FCALL_BY_NAME/59     ?0        ?0                   1113:'preg_replace' 	;3	<<1969,1976
	1983 2501  SEND_VAL_EX/116           ?80       1115:'/
/'          ?1                  	;0
	1984 2501  SEND_VAL_EX/116           ?96       1116:'
'             ?2                  	;0
	1985 2501  INIT_FCALL_BY_NAME/59     ?0        ?0                   1117:'trim'         	;1
	1986 2501  SEND_VAR_EX/66            ?80       16?94                ?1                  	;0
	1987 2501  DO_FCALL_BY_NAME/131      $1065=    ?0                   ?0                  	;0
	1988 2501  SEND_VAR_NO_REF_EX/50     ?112      $1065                ?3                  	;0
	1989 2501  DO_FCALL_BY_NAME/131      $1066=    ?0                   ?0                  	;0
	1990 2501  ASSIGN/38                 ?948      16?76                $1066               	;0
	1991 2504  ASSIGN/38                 ?949      16?98                1119:array (
)      	;0
	1992 2506  ISSET_ISEMPTY_CV/197      #1069=    16?43                ?0                  	;16777216
	1993 2506  BOOL_NOT/13               #1070=    #1069                ?0                  	;0
	1994 2506  JMPZ_EX/46                #1070=    #1070                ?2001               	;0	>>2001
	1995 2506  INIT_FCALL_BY_NAME/59     ?0        ?0                   1120:'preg_match'   	;3
	1996 2506  SEND_VAL_EX/116           ?80       1122:'/^(.*?)?
?
(.*)/s' ?1                  	;0
	1997 2506  SEND_VAR_EX/66            ?96       16?94                ?2                  	;0
	1998 2506  SEND_VAR_EX/66            ?112      16?99                ?3                  	;0
	1999 2506  DO_FCALL_BY_NAME/131      $1071=    ?0                   ?0                  	;0
	2000 2506  BOOL/52                   #1070=    $1071                ?0                  	;0
	2001 2506  JMPZ/43                   ?0        #1070                ?2039               	;0	>>2039	<<1994
	2002 2507  INIT_FCALL_BY_NAME/59     ?0        ?0                   1123:'trim'         	;1
	2003 2507  FETCH_DIM_FUNC_ARG/93     $1072=    16?99                1125:2              	;1
	2004 2507  SEND_VAR_EX/66            ?80       $1072                ?1                  	;0
	2005 2507  DO_FCALL_BY_NAME/131      $1073=    ?0                   ?0                  	;0
	2006 2507  ASSIGN/38                 ?955      16?76                $1073               	;0
	2007 2508  INIT_FCALL_BY_NAME/59     ?0        ?0                   1126:'preg_split'   	;2
	2008 2508  SEND_VAL_EX/116           ?80       1128:'/[
]+/'       ?1                  	;0
	2009 2508  FETCH_DIM_FUNC_ARG/93     $1075=    16?99                1129:1              	;2
	2010 2508  SEND_VAR_EX/66            ?96       $1075                ?2                  	;0
	2011 2508  DO_FCALL_BY_NAME/131      $1076=    ?0                   ?0                  	;0
	2012 2508  ASSIGN/38                 ?958      16?100               $1076               	;0
	2013 2510  FE_RESET_R/77             $1078=    16?100               ?2038               	;0
	2014 2510  FE_FETCH_R/78             ?0        $1078                16?29               	;2038	>>2038	<<2037
	2015 2511  INIT_FCALL_BY_NAME/59     ?0        ?0                   1130:'strpos'       	;2
	2016 2511  SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	2017 2511  SEND_VAL_EX/116           ?96       1132:':'             ?2                  	;0
	2018 2511  DO_FCALL_BY_NAME/131      $1079=    ?0                   ?0                  	;0
	2019 2511  IS_NOT_IDENTICAL/16       #1080=    $1079                1133:false          	;0
	2020 2511  JMPZ/43                   ?0        #1080                ?2037               	;0	>>2037
	2021 2512  INIT_FCALL_BY_NAME/59     ?0        ?0                   1134:'explode'      	;3
	2022 2512  SEND_VAL_EX/116           ?80       1136:':'             ?1                  	;0
	2023 2512  SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
	2024 2512  SEND_VAL_EX/116           ?112      1137:2               ?3                  	;0
	2025 2512  DO_FCALL_BY_NAME/131      $1081=    ?0                   ?0                  	;0
	2026 2512  ASSIGN/38                 ?963      16?29                $1081               	;0
	2027 2513  INIT_FCALL_BY_NAME/59     ?0        ?0                   1138:'trim'         	;1
	2028 2513  FETCH_DIM_FUNC_ARG/93     $1083=    16?29                1140:0              	;1
	2029 2513  SEND_VAR_EX/66            ?80       $1083                ?1                  	;0
	2030 2513  DO_FCALL_BY_NAME/131      $1084=    ?0                   ?0                  	;0
	2031 2513  INIT_FCALL_BY_NAME/59     ?0        ?0                   1141:'trim'         	;1
	2032 2513  FETCH_DIM_FUNC_ARG/93     $1086=    16?29                1143:1              	;1
	2033 2513  SEND_VAR_EX/66            ?80       $1086                ?1                  	;0
	2034 2513  DO_FCALL_BY_NAME/131      $1087=    ?0                   ?0                  	;0
	2035 2513  ASSIGN_DIM/147            ?966      16?98                $1084               	;0
	2036 2513  OP_DATA/137               ?0        $1087                ?0                  	;0
	2037 2513  JMP/42                    ?0        ?2014                ?0                  	;0	>>2014	<<2020
	2038 2513  FE_FREE/127               ?0        $1078                ?0                  	;0	<<2013
	2039 2518  ASSIGN/38                 ?969      16?101               1144:false          	;0	<<2001
	2040 2520  ISSET_ISEMPTY_DIM_OBJ/115 #1089=    16?26                1145:'EXPECTHEADERS'	;33554432
	2041 2520  JMPZ/43                   ?0        #1089                ?2125               	;0	>>2125
	2042 2521  ASSIGN/38                 ?971      16?102               1146:array (
)      	;0
	2043 2522  ASSIGN/38                 ?972      16?103               1147:array (
)      	;0
	2044 2523  INIT_FCALL_BY_NAME/59     ?0        ?0                   1148:'preg_split'   	;2
	2045 2523  SEND_VAL_EX/116           ?80       1150:'/[
]+/'       ?1                  	;0
	2046 2523  FETCH_DIM_FUNC_ARG/93     $1092=    16?26                1151:'EXPECTHEADERS'	;2
	2047 2523  SEND_VAR_EX/66            ?96       $1092                ?2                  	;0
	2048 2523  DO_FCALL_BY_NAME/131      $1093=    ?0                   ?0                  	;0
	2049 2523  ASSIGN/38                 ?975      16?104               $1093               	;0
	2050 2525  FE_RESET_R/77             $1095=    16?104               ?2087               	;0
	2051 2525  FE_FETCH_R/78             ?0        $1095                16?29               	;2087	>>2087	<<2086
	2052 2526  INIT_FCALL_BY_NAME/59     ?0        ?0                   1152:'strpos'       	;2
	2053 2526  SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	2054 2526  SEND_VAL_EX/116           ?96       1154:':'             ?2                  	;0
	2055 2526  DO_FCALL_BY_NAME/131      $1096=    ?0                   ?0                  	;0
	2056 2526  IS_NOT_IDENTICAL/16       #1097=    $1096                1155:false          	;0
	2057 2526  JMPZ/43                   ?0        #1097                ?2086               	;0	>>2086
	2058 2527  INIT_FCALL_BY_NAME/59     ?0        ?0                   1156:'explode'      	;3
	2059 2527  SEND_VAL_EX/116           ?80       1158:':'             ?1                  	;0
	2060 2527  SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
	2061 2527  SEND_VAL_EX/116           ?112      1159:2               ?3                  	;0
	2062 2527  DO_FCALL_BY_NAME/131      $1098=    ?0                   ?0                  	;0
	2063 2527  ASSIGN/38                 ?980      16?29                $1098               	;0
	2064 2528  INIT_FCALL_BY_NAME/59     ?0        ?0                   1160:'trim'         	;1
	2065 2528  FETCH_DIM_FUNC_ARG/93     $1100=    16?29                1162:0              	;1
	2066 2528  SEND_VAR_EX/66            ?80       $1100                ?1                  	;0
	2067 2528  DO_FCALL_BY_NAME/131      $1101=    ?0                   ?0                  	;0
	2068 2528  INIT_FCALL_BY_NAME/59     ?0        ?0                   1163:'trim'         	;1
	2069 2528  FETCH_DIM_FUNC_ARG/93     $1103=    16?29                1165:1              	;1
	2070 2528  SEND_VAR_EX/66            ?80       $1103                ?1                  	;0
	2071 2528  DO_FCALL_BY_NAME/131      $1104=    ?0                   ?0                  	;0
	2072 2528  ASSIGN_DIM/147            ?983      16?102               $1101               	;0
	2073 2528  OP_DATA/137               ?0        $1104                ?0                  	;0
	2074 2529  INIT_FCALL_BY_NAME/59     ?0        ?0                   1166:'trim'         	;1
	2075 2529  FETCH_DIM_FUNC_ARG/93     $1106=    16?29                1168:0              	;1
	2076 2529  SEND_VAR_EX/66            ?80       $1106                ?1                  	;0
	2077 2529  DO_FCALL_BY_NAME/131      $1107=    ?0                   ?0                  	;0
	2078 2529  CONCAT/8                  #1108=    $1107                1169:': '           	;0
	2079 2529  INIT_FCALL_BY_NAME/59     ?0        ?0                   1170:'trim'         	;1
	2080 2529  FETCH_DIM_FUNC_ARG/93     $1109=    16?29                1172:1              	;1
	2081 2529  SEND_VAR_EX/66            ?80       $1109                ?1                  	;0
	2082 2529  DO_FCALL_BY_NAME/131      $1110=    ?0                   ?0                  	;0
	2083 2529  CONCAT/8                  #1111=    #1108                $1110               	;0
	2084 2529  ASSIGN_DIM/147            ?986      16?103               ?0                  	;0
	2085 2529  OP_DATA/137               ?0        #1111                ?0                  	;0
	2086 2529  JMP/42                    ?0        ?2051                ?0                  	;0	>>2051	<<2057
	2087 2529  FE_FREE/127               ?0        $1095                ?0                  	;0	<<2050
	2088 2533  ASSIGN/38                 ?993      16?105               1173:array (
)      	;0
	2089 2535  FE_RESET_R/77             $1113=    16?102               ?2108               	;0
	2090 2535  FE_FETCH_R/78             #1114=    $1113                16?106              	;2108	>>2108	<<2107
	2091 2535  ASSIGN/38                 ?996      16?107               #1114               	;0
	2092 2537  ISSET_ISEMPTY_DIM_OBJ/115 #1116=    16?98                16?107              	;33554432
	2093 2537  JMPZ/43                   ?0        #1116                ?2099               	;0	>>2099
	2094 2538  CONCAT/8                  #1118=    16?107               1174:': '           	;0
	2095 2538  FETCH_DIM_R/81            $1119=    16?98                16?107              	;0
	2096 2538  CONCAT/8                  #1120=    #1118                $1119               	;0
	2097 2538  ASSIGN_DIM/147            ?998      16?105               ?0                  	;0
	2098 2538  OP_DATA/137               ?0        #1120                ?0                  	;0
	2099 2541  ISSET_ISEMPTY_DIM_OBJ/115 #1121=    16?98                16?107              	;33554432	<<2093
	2100 2541  BOOL_NOT/13               #1122=    #1121                ?0                  	;0
	2101 2541  JMPNZ_EX/47               #1122=    #1122                ?2105               	;0	>>2105
	2102 2541  FETCH_DIM_R/81            $1123=    16?98                16?107              	;0
	2103 2541  IS_NOT_EQUAL/18           #1124=    $1123                16?106              	;0
	2104 2541  BOOL/52                   #1122=    #1124                ?0                  	;0
	2105 2541  JMPZ/43                   ?0        #1122                ?2107               	;0	>>2107	<<2101
	2106 2542  ASSIGN/38                 ?1006     16?101               1175:true           	;0
	2107 2542  JMP/42                    ?0        ?2090                ?0                  	;0	>>2090	<<2105
	2108 2542  FE_FREE/127               ?0        $1113                ?0                  	;0	<<2089
	2109 2546  INIT_FCALL_BY_NAME/59     ?0        ?0                   1176:'ksort'        	;1
	2110 2546  SEND_VAR_EX/66            ?80       16?103               ?1                  	;0
	2111 2546  DO_FCALL_BY_NAME/131      ?1007     ?0                   ?0                  	;0
	2112 2547  INIT_FCALL_BY_NAME/59     ?0        ?0                   1178:'implode'      	;2
	2113 2547  SEND_VAL_EX/116           ?80       1180:'
'             ?1                  	;0
	2114 2547  SEND_VAR_EX/66            ?96       16?103               ?2                  	;0
	2115 2547  DO_FCALL_BY_NAME/131      $1127=    ?0                   ?0                  	;0
	2116 2547  ASSIGN/38                 ?1009     16?103               $1127               	;0
	2117 2548  INIT_FCALL_BY_NAME/59     ?0        ?0                   1181:'ksort'        	;1
	2118 2548  SEND_VAR_EX/66            ?80       16?105               ?1                  	;0
	2119 2548  DO_FCALL_BY_NAME/131      ?1010     ?0                   ?0                  	;0
	2120 2549  INIT_FCALL_BY_NAME/59     ?0        ?0                   1183:'implode'      	;2
	2121 2549  SEND_VAL_EX/116           ?80       1185:'
'             ?1                  	;0
	2122 2549  SEND_VAR_EX/66            ?96       16?105               ?2                  	;0
	2123 2549  DO_FCALL_BY_NAME/131      $1130=    ?0                   ?0                  	;0
	2124 2549  ASSIGN/38                 ?1012     16?105               $1130               	;0
	2125 2552  INIT_FCALL/61             ?0        ?272                 1186:'show_file_block'	;2	<<2041
	2126 2552  SEND_VAL/65               ?80       1187:'out'           ?1                  	;0
	2127 2552  SEND_VAR/117              ?96       16?76                ?2                  	;0
	2128 2552  DO_FCALL/60               ?1013     ?0                   ?0                  	;0
	2129 2554  JMPZ/43                   ?0        16?20                ?2139               	;0	>>2139
	2130 2555  INIT_FCALL_BY_NAME/59     ?0        ?0                   1188:'trim'         	;1
	2131 2555  INIT_FCALL_BY_NAME/59     ?0        ?0                   1190:'preg_replace' 	;3
	2132 2555  SEND_VAL_EX/116           ?80       1192:'/
?Warning: Can\'t preload [^
]*
?/' ?1                  	;0
	2133 2555  SEND_VAL_EX/116           ?96       1193:''              ?2                  	;0
	2134 2555  SEND_VAR_EX/66            ?112      16?76                ?3                  	;0
	2135 2555  DO_FCALL_BY_NAME/131      $1133=    ?0                   ?0                  	;0
	2136 2555  SEND_VAR_NO_REF_EX/50     ?80       $1133                ?1                  	;0
	2137 2555  DO_FCALL_BY_NAME/131      $1134=    ?0                   ?0                  	;0
	2138 2555  ASSIGN/38                 ?1016     16?76                $1134               	;0
	2139 2558  ISSET_ISEMPTY_DIM_OBJ/115 #1136=    16?26                1194:'EXPECTF'      	;33554432	<<2129
	2140 2558  JMPNZ_EX/47               #1136=    #1136                ?2143               	;0	>>2143
	2141 2558  ISSET_ISEMPTY_DIM_OBJ/115 #1137=    16?26                1195:'EXPECTREGEX'  	;33554432
	2142 2558  BOOL/52                   #1136=    #1137                ?0                  	;0
	2143 2558  JMPZ/43                   ?0        #1136                ?2348               	;0	>>2348	<<2140
	2144 2560  ISSET_ISEMPTY_DIM_OBJ/115 #1138=    16?26                1196:'EXPECTF'      	;33554432
	2145 2560  JMPZ/43                   ?0        #1138                ?2152               	;0	>>2152
	2146 2561  INIT_FCALL_BY_NAME/59     ?0        ?0                   1197:'trim'         	;1
	2147 2561  FETCH_DIM_FUNC_ARG/93     $1139=    16?26                1199:'EXPECTF'      	;1
	2148 2561  SEND_VAR_EX/66            ?80       $1139                ?1                  	;0
	2149 2561  DO_FCALL_BY_NAME/131      $1140=    ?0                   ?0                  	;0
	2150 2561  ASSIGN/38                 ?1022     16?108               $1140               	;0
	2151 2561  JMP/42                    ?0        ?2157                ?0                  	;0	>>2157
	2152 2563  INIT_FCALL_BY_NAME/59     ?0        ?0                   1200:'trim'         	;1	<<2145
	2153 2563  FETCH_DIM_FUNC_ARG/93     $1142=    16?26                1202:'EXPECTREGEX'  	;1
	2154 2563  SEND_VAR_EX/66            ?80       $1142                ?1                  	;0
	2155 2563  DO_FCALL_BY_NAME/131      $1143=    ?0                   ?0                  	;0
	2156 2563  ASSIGN/38                 ?1025     16?108               $1143               	;0
	2157 2566  INIT_FCALL/61             ?0        ?272                 1203:'show_file_block'	;2	<<2151
	2158 2566  SEND_VAL/65               ?80       1204:'exp'           ?1                  	;0
	2159 2566  SEND_VAR/117              ?96       16?108               ?2                  	;0
	2160 2566  DO_FCALL/60               ?1026     ?0                   ?0                  	;0
	2161 2567  INIT_FCALL_BY_NAME/59     ?0        ?0                   1205:'preg_replace' 	;3
	2162 2567  SEND_VAL_EX/116           ?80       1207:'/\\r\\n/'      ?1                  	;0
	2163 2567  SEND_VAL_EX/116           ?96       1208:'
'             ?2                  	;0
	2164 2567  SEND_VAR_EX/66            ?112      16?108               ?3                  	;0
	2165 2567  DO_FCALL_BY_NAME/131      $1146=    ?0                   ?0                  	;0
	2166 2567  ASSIGN/38                 ?1028     16?109               $1146               	;0
	2167 2569  ISSET_ISEMPTY_DIM_OBJ/115 #1148=    16?26                1209:'EXPECTF'      	;33554432
	2168 2569  JMPZ/43                   ?0        #1148                ?2296               	;0	>>2296
	2169 2572  ASSIGN/38                 ?1030     16?110               1210:''             	;0
	2170 2573  ASSIGN/38                 ?1031     16?33                1211:'%r'           	;0
	2171 2574  ASSIGN/38                 ?1032     16?111               1212:0              	;0
	2172 2575  INIT_FCALL_BY_NAME/59     ?0        ?0                   1213:'strlen'       	;1
	2173 2575  SEND_VAR_EX/66            ?80       16?109               ?1                  	;0
	2174 2575  DO_FCALL_BY_NAME/131      $1152=    ?0                   ?0                  	;0
	2175 2575  ASSIGN/38                 ?1034     16?112               $1152               	;0
	2176 2576  JMP/42                    ?0        ?2225                ?0                  	;0	>>2225
	2177 2577  INIT_FCALL_BY_NAME/59     ?0        ?0                   1215:'strpos'       	;3	<<2226
	2178 2577  SEND_VAR_EX/66            ?80       16?109               ?1                  	;0
	2179 2577  SEND_VAR_EX/66            ?96       16?33                ?2                  	;0
	2180 2577  SEND_VAR_EX/66            ?112      16?111               ?3                  	;0
	2181 2577  DO_FCALL_BY_NAME/131      $1154=    ?0                   ?0                  	;0
	2182 2577  ASSIGN/38                 ?1036     16?113               $1154               	;0
	2183 2578  IS_NOT_IDENTICAL/16       #1156=    16?113               1217:false          	;0
	2184 2578  JMPZ/43                   ?0        #1156                ?2197               	;0	>>2197
	2185 2580  INIT_FCALL_BY_NAME/59     ?0        ?0                   1218:'strpos'       	;3
	2186 2580  SEND_VAR_EX/66            ?80       16?109               ?1                  	;0
	2187 2580  SEND_VAR_EX/66            ?96       16?33                ?2                  	;0
	2188 2580  ADD/1                     #1157=    16?113               1220:2              	;0
	2189 2580  SEND_VAL_EX/116           ?112      #1157                ?3                  	;0
	2190 2580  DO_FCALL_BY_NAME/131      $1158=    ?0                   ?0                  	;0
	2191 2580  ASSIGN/38                 ?1040     16?114               $1158               	;0
	2192 2581  IS_IDENTICAL/15           #1160=    16?114               1221:false          	;0
	2193 2581  JMPZ/43                   ?0        #1160                ?2196               	;0	>>2196
	2194 2583  ASSIGN/38                 $1161=    16?113               16?112              	;0
	2195 2583  ASSIGN/38                 ?1043     16?114               $1161               	;0
	2196 2583  JMP/42                    ?0        ?2199                ?0                  	;0	>>2199	<<2193
	2197 2587  ASSIGN/38                 $1163=    16?114               16?112              	;0	<<2184
	2198 2587  ASSIGN/38                 ?1045     16?113               $1163               	;0
	2199 2590  INIT_FCALL_BY_NAME/59     ?0        ?0                   1222:'preg_quote'   	;2	<<2196
	2200 2590  INIT_FCALL_BY_NAME/59     ?0        ?0                   1224:'substr'       	;3
	2201 2590  SEND_VAR_EX/66            ?80       16?109               ?1                  	;0
	2202 2590  SEND_VAR_EX/66            ?96       16?111               ?2                  	;0
	2203 2590  SUB/2                     #1165=    16?113               16?111              	;0
	2204 2590  SEND_VAL_EX/116           ?112      #1165                ?3                  	;0
	2205 2590  DO_FCALL_BY_NAME/131      $1166=    ?0                   ?0                  	;0
	2206 2590  SEND_VAR_NO_REF_EX/50     ?80       $1166                ?1                  	;0
	2207 2590  SEND_VAL_EX/116           ?96       1226:'/'             ?2                  	;0
	2208 2590  DO_FCALL_BY_NAME/131      $1167=    ?0                   ?0                  	;0
	2209 2590  ASSIGN_CONCAT/30          ?1049     16?110               $1167               	;0
	2210 2592  IS_SMALLER/19             #1169=    16?113               16?114              	;0
	2211 2592  JMPZ/43                   ?0        #1169                ?2223               	;0	>>2223
	2212 2593  INIT_FCALL_BY_NAME/59     ?0        ?0                   1227:'substr'       	;3
	2213 2593  SEND_VAR_EX/66            ?80       16?109               ?1                  	;0
	2214 2593  ADD/1                     #1170=    16?113               1229:2              	;0
	2215 2593  SEND_VAL_EX/116           ?96       #1170                ?2                  	;0
	2216 2593  SUB/2                     #1171=    16?114               16?113              	;0
	2217 2593  SUB/2                     #1172=    #1171                1230:2              	;0
	2218 2593  SEND_VAL_EX/116           ?112      #1172                ?3                  	;0
	2219 2593  DO_FCALL_BY_NAME/131      $1173=    ?0                   ?0                  	;0
	2220 2593  CONCAT/8                  #1174=    1231:'('             $1173               	;0
	2221 2593  CONCAT/8                  #1175=    #1174                1232:')'            	;0
	2222 2593  ASSIGN_CONCAT/30          ?1057     16?110               #1175               	;0
	2223 2595  ADD/1                     #1177=    16?114               1233:2              	;0	<<2211
	2224 2595  ASSIGN/38                 ?1059     16?111               #1177               	;0
	2225 2576  IS_SMALLER/19             #1179=    16?111               16?112              	;0	<<2176
	2226 2576  JMPNZ/44                  ?0        #1179                ?2177               	;0	>>2177
	2227 2597  ASSIGN/38                 ?1061     16?109               16?110              	;0
	2228 2600  INIT_FCALL_BY_NAME/59     ?0        ?0                   1234:'str_replace'  	;3
	2229 2600  SEND_VAL_EX/116           ?80       1236:'%e'            ?1                  	;0
	2230 2600  FETCH_CONSTANT/99         #1181=    ?0                   1237:'DIRECTORY_SEPARATOR'	;16
	2231 2600  CONCAT/8                  #1182=    1240:'\\'            #1181               	;0
	2232 2600  SEND_VAL_EX/116           ?96       #1182                ?2                  	;0
	2233 2600  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2234 2600  DO_FCALL_BY_NAME/131      $1183=    ?0                   ?0                  	;0
	2235 2600  ASSIGN/38                 ?1065     16?109               $1183               	;0
	2236 2601  INIT_FCALL_BY_NAME/59     ?0        ?0                   1241:'str_replace'  	;3
	2237 2601  SEND_VAL_EX/116           ?80       1243:'%s'            ?1                  	;0
	2238 2601  SEND_VAL_EX/116           ?96       1244:'[^\\r\\n]+'    ?2                  	;0
	2239 2601  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2240 2601  DO_FCALL_BY_NAME/131      $1185=    ?0                   ?0                  	;0
	2241 2601  ASSIGN/38                 ?1067     16?109               $1185               	;0
	2242 2602  INIT_FCALL_BY_NAME/59     ?0        ?0                   1245:'str_replace'  	;3
	2243 2602  SEND_VAL_EX/116           ?80       1247:'%S'            ?1                  	;0
	2244 2602  SEND_VAL_EX/116           ?96       1248:'[^\\r\\n]*'    ?2                  	;0
	2245 2602  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2246 2602  DO_FCALL_BY_NAME/131      $1187=    ?0                   ?0                  	;0
	2247 2602  ASSIGN/38                 ?1069     16?109               $1187               	;0
	2248 2603  INIT_FCALL_BY_NAME/59     ?0        ?0                   1249:'str_replace'  	;3
	2249 2603  SEND_VAL_EX/116           ?80       1251:'%a'            ?1                  	;0
	2250 2603  SEND_VAL_EX/116           ?96       1252:'.+'            ?2                  	;0
	2251 2603  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2252 2603  DO_FCALL_BY_NAME/131      $1189=    ?0                   ?0                  	;0
	2253 2603  ASSIGN/38                 ?1071     16?109               $1189               	;0
	2254 2604  INIT_FCALL_BY_NAME/59     ?0        ?0                   1253:'str_replace'  	;3
	2255 2604  SEND_VAL_EX/116           ?80       1255:'%A'            ?1                  	;0
	2256 2604  SEND_VAL_EX/116           ?96       1256:'.*'            ?2                  	;0
	2257 2604  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2258 2604  DO_FCALL_BY_NAME/131      $1191=    ?0                   ?0                  	;0
	2259 2604  ASSIGN/38                 ?1073     16?109               $1191               	;0
	2260 2605  INIT_FCALL_BY_NAME/59     ?0        ?0                   1257:'str_replace'  	;3
	2261 2605  SEND_VAL_EX/116           ?80       1259:'%w'            ?1                  	;0
	2262 2605  SEND_VAL_EX/116           ?96       1260:'\\s*'          ?2                  	;0
	2263 2605  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2264 2605  DO_FCALL_BY_NAME/131      $1193=    ?0                   ?0                  	;0
	2265 2605  ASSIGN/38                 ?1075     16?109               $1193               	;0
	2266 2606  INIT_FCALL_BY_NAME/59     ?0        ?0                   1261:'str_replace'  	;3
	2267 2606  SEND_VAL_EX/116           ?80       1263:'%i'            ?1                  	;0
	2268 2606  SEND_VAL_EX/116           ?96       1264:'[+-]?\\d+'     ?2                  	;0
	2269 2606  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2270 2606  DO_FCALL_BY_NAME/131      $1195=    ?0                   ?0                  	;0
	2271 2606  ASSIGN/38                 ?1077     16?109               $1195               	;0
	2272 2607  INIT_FCALL_BY_NAME/59     ?0        ?0                   1265:'str_replace'  	;3
	2273 2607  SEND_VAL_EX/116           ?80       1267:'%d'            ?1                  	;0
	2274 2607  SEND_VAL_EX/116           ?96       1268:'\\d+'          ?2                  	;0
	2275 2607  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2276 2607  DO_FCALL_BY_NAME/131      $1197=    ?0                   ?0                  	;0
	2277 2607  ASSIGN/38                 ?1079     16?109               $1197               	;0
	2278 2608  INIT_FCALL_BY_NAME/59     ?0        ?0                   1269:'str_replace'  	;3
	2279 2608  SEND_VAL_EX/116           ?80       1271:'%x'            ?1                  	;0
	2280 2608  SEND_VAL_EX/116           ?96       1272:'[0-9a-fA-F]+'  ?2                  	;0
	2281 2608  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2282 2608  DO_FCALL_BY_NAME/131      $1199=    ?0                   ?0                  	;0
	2283 2608  ASSIGN/38                 ?1081     16?109               $1199               	;0
	2284 2609  INIT_FCALL_BY_NAME/59     ?0        ?0                   1273:'str_replace'  	;3
	2285 2609  SEND_VAL_EX/116           ?80       1275:'%f'            ?1                  	;0
	2286 2609  SEND_VAL_EX/116           ?96       1276:'[+-]?\\.?\\d+\\.?\\d*(?:[Ee][+-]?\\d+)?' ?2                  	;0
	2287 2609  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2288 2609  DO_FCALL_BY_NAME/131      $1201=    ?0                   ?0                  	;0
	2289 2609  ASSIGN/38                 ?1083     16?109               $1201               	;0
	2290 2610  INIT_FCALL_BY_NAME/59     ?0        ?0                   1277:'str_replace'  	;3
	2291 2610  SEND_VAL_EX/116           ?80       1279:'%c'            ?1                  	;0
	2292 2610  SEND_VAL_EX/116           ?96       1280:'.'             ?2                  	;0
	2293 2610  SEND_VAR_EX/66            ?112      16?109               ?3                  	;0
	2294 2610  DO_FCALL_BY_NAME/131      $1203=    ?0                   ?0                  	;0
	2295 2610  ASSIGN/38                 ?1085     16?109               $1203               	;0
	2296 2618  INIT_FCALL_BY_NAME/59     ?0        ?0                   1281:'preg_match'   	;2	<<2168
	2297 2618  ROPE_INIT/54              #1206=    ?0                   1283:'/^'           	;3
	2298 2618  ROPE_ADD/55               #1206=    #1206                16?109              	;1
	2299 2618  ROPE_END/56               #1205=    #1206                1284:'$/s'          	;2
	2300 2618  SEND_VAL_EX/116           ?80       #1205                ?1                  	;0
	2301 2618  SEND_VAR_EX/66            ?96       16?76                ?2                  	;0
	2302 2618  DO_FCALL_BY_NAME/131      $1208=    ?0                   ?0                  	;0
	2303 2618  JMPZ/43                   ?0        $1208                ?2347               	;0	>>2347
	2304 2619  ASSIGN/38                 ?1090     16?97                1285:true           	;0
	2305 2620  FETCH_DIM_R/81            $1210=    16?14                1286:'keep'         	;0
	2306 2620  FETCH_DIM_R/81            $1211=    $1210                1287:'php'          	;0
	2307 2620  BOOL_NOT/13               #1212=    $1211                ?0                  	;0
	2308 2620  JMPZ/43                   ?0        #1212                ?2314               	;0	>>2314
	2309 2621  BEGIN_SILENCE/57          #1213=    ?0                   ?0                  	;0
	2310 2621  INIT_FCALL_BY_NAME/59     ?0        ?0                   1288:'unlink'       	;1
	2311 2621  SEND_VAR_EX/66            ?80       16?55                ?1                  	;0
	2312 2621  DO_FCALL_BY_NAME/131      ?1095     ?0                   ?0                  	;0
	2313 2621  END_SILENCE/58            ?0        #1213                ?0                  	;0
	2314 2623  BEGIN_SILENCE/57          #1215=    ?0                   ?0                  	;0	<<2308
	2315 2623  INIT_FCALL_BY_NAME/59     ?0        ?0                   1290:'unlink'       	;1
	2316 2623  SEND_VAR_EX/66            ?80       16?61                ?1                  	;0
	2317 2623  DO_FCALL_BY_NAME/131      ?1097     ?0                   ?0                  	;0
	2318 2623  END_SILENCE/58            ?0        #1215                ?0                  	;0
	2319 2625  BOOL_NOT/13               #1217=    16?96                ?0                  	;0
	2320 2625  JMPZ_EX/46                #1217=    #1217                ?2323               	;0	>>2323
	2321 2625  BOOL_NOT/13               #1218=    16?101               ?0                  	;0
	2322 2625  BOOL/52                   #1217=    #1218                ?0                  	;0
	2323 2625  JMPZ/43                   ?0        #1217                ?2347               	;0	>>2347	<<2320
	2324 2626  ISSET_ISEMPTY_DIM_OBJ/115 #1219=    16?26                1292:'XFAIL'        	;33554432
	2325 2626  JMPZ/43                   ?0        #1219                ?2329               	;0	>>2329
	2326 2627  ASSIGN/38                 ?1101     16?74                1293:true           	;0
	2327 2628  ASSIGN/38                 ?1102     16?73                1294:' (warn: XFAIL section but test passes)'	;0
	2328 2628  JMP/42                    ?0        ?2347                ?0                  	;0	>>2347
	2329 2629  ISSET_ISEMPTY_DIM_OBJ/115 #1222=    16?26                1295:'XLEAK'        	;33554432	<<2325
	2330 2629  JMPZ/43                   ?0        #1222                ?2334               	;0	>>2334
	2331 2630  ASSIGN/38                 ?1104     16?74                1296:true           	;0
	2332 2631  ASSIGN/38                 ?1105     16?73                1297:' (warn: XLEAK section but test passes)'	;0
	2333 2631  JMP/42                    ?0        ?2347                ?0                  	;0	>>2347
	2334 2633  INIT_FCALL_BY_NAME/59     ?0        ?0                   1298:'show_result'  	;5	<<2330
	2335 2633  SEND_VAL_EX/116           ?80       1300:'PASS'          ?1                  	;0
	2336 2633  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
	2337 2633  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	2338 2633  SEND_VAL_EX/116           ?128      1301:''              ?4                  	;0
	2339 2633  SEND_VAR_EX/66            ?144      16?22                ?5                  	;0
	2340 2633  DO_FCALL_BY_NAME/131      ?1106     ?0                   ?0                  	;0
	2341 2634  INIT_FCALL_BY_NAME/59     ?0        ?0                   1302:'junit_mark_test_as'	;3
	2342 2634  SEND_VAL_EX/116           ?80       1304:'PASS'          ?1                  	;0
	2343 2634  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	2344 2634  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	2345 2634  DO_FCALL_BY_NAME/131      ?1107     ?0                   ?0                  	;0
	2346 2635  RETURN/62                 ?0        1305:'PASSED'        ?0                  	;0
	2347 2635  JMP/42                    ?0        ?2413                ?0                  	;0	>>2413	<<2303,2323,2328,2333
	2348 2642  INIT_FCALL_BY_NAME/59     ?0        ?0                   1306:'trim'         	;1	<<2143
	2349 2642  FETCH_DIM_FUNC_ARG/93     $1227=    16?26                1308:'EXPECT'       	;1
	2350 2642  SEND_VAR_EX/66            ?80       $1227                ?1                  	;0
	2351 2642  DO_FCALL_BY_NAME/131      $1228=    ?0                   ?0                  	;0
	2352 2642  ASSIGN/38                 ?1110     16?108               $1228               	;0
	2353 2643  INIT_FCALL_BY_NAME/59     ?0        ?0                   1309:'preg_replace' 	;3
	2354 2643  SEND_VAL_EX/116           ?80       1311:'/\\r\\n/'      ?1                  	;0
	2355 2643  SEND_VAL_EX/116           ?96       1312:'
'             ?2                  	;0
	2356 2643  SEND_VAR_EX/66            ?112      16?108               ?3                  	;0
	2357 2643  DO_FCALL_BY_NAME/131      $1230=    ?0                   ?0                  	;0
	2358 2643  ASSIGN/38                 ?1112     16?108               $1230               	;0
	2359 2644  INIT_FCALL/61             ?0        ?272                 1313:'show_file_block'	;2
	2360 2644  SEND_VAL/65               ?80       1314:'exp'           ?1                  	;0
	2361 2644  SEND_VAR/117              ?96       16?108               ?2                  	;0
	2362 2644  DO_FCALL/60               ?1113     ?0                   ?0                  	;0
	2363 2647  INIT_FCALL_BY_NAME/59     ?0        ?0                   1315:'strcmp'       	;2
	2364 2647  SEND_VAR_EX/66            ?80       16?76                ?1                  	;0
	2365 2647  SEND_VAR_EX/66            ?96       16?108               ?2                  	;0
	2366 2647  DO_FCALL_BY_NAME/131      $1233=    ?0                   ?0                  	;0
	2367 2647  BOOL_NOT/13               #1234=    $1233                ?0                  	;0
	2368 2647  JMPZ/43                   ?0        #1234                ?2412               	;0	>>2412
	2369 2648  ASSIGN/38                 ?1116     16?97                1317:true           	;0
	2370 2650  FETCH_DIM_R/81            $1236=    16?14                1318:'keep'         	;0
	2371 2650  FETCH_DIM_R/81            $1237=    $1236                1319:'php'          	;0
	2372 2650  BOOL_NOT/13               #1238=    $1237                ?0                  	;0
	2373 2650  JMPZ/43                   ?0        #1238                ?2379               	;0	>>2379
	2374 2651  BEGIN_SILENCE/57          #1239=    ?0                   ?0                  	;0
	2375 2651  INIT_FCALL_BY_NAME/59     ?0        ?0                   1320:'unlink'       	;1
	2376 2651  SEND_VAR_EX/66            ?80       16?55                ?1                  	;0
	2377 2651  DO_FCALL_BY_NAME/131      ?1121     ?0                   ?0                  	;0
	2378 2651  END_SILENCE/58            ?0        #1239                ?0                  	;0
	2379 2653  BEGIN_SILENCE/57          #1241=    ?0                   ?0                  	;0	<<2373
	2380 2653  INIT_FCALL_BY_NAME/59     ?0        ?0                   1322:'unlink'       	;1
	2381 2653  SEND_VAR_EX/66            ?80       16?61                ?1                  	;0
	2382 2653  DO_FCALL_BY_NAME/131      ?1123     ?0                   ?0                  	;0
	2383 2653  END_SILENCE/58            ?0        #1241                ?0                  	;0
	2384 2655  BOOL_NOT/13               #1243=    16?96                ?0                  	;0
	2385 2655  JMPZ_EX/46                #1243=    #1243                ?2388               	;0	>>2388
	2386 2655  BOOL_NOT/13               #1244=    16?101               ?0                  	;0
	2387 2655  BOOL/52                   #1243=    #1244                ?0                  	;0
	2388 2655  JMPZ/43                   ?0        #1243                ?2412               	;0	>>2412	<<2385
	2389 2656  ISSET_ISEMPTY_DIM_OBJ/115 #1245=    16?26                1324:'XFAIL'        	;33554432
	2390 2656  JMPZ/43                   ?0        #1245                ?2394               	;0	>>2394
	2391 2657  ASSIGN/38                 ?1127     16?74                1325:true           	;0
	2392 2658  ASSIGN/38                 ?1128     16?73                1326:' (warn: XFAIL section but test passes)'	;0
	2393 2658  JMP/42                    ?0        ?2412                ?0                  	;0	>>2412
	2394 2659  ISSET_ISEMPTY_DIM_OBJ/115 #1248=    16?26                1327:'XLEAK'        	;33554432	<<2390
	2395 2659  JMPZ/43                   ?0        #1248                ?2399               	;0	>>2399
	2396 2660  ASSIGN/38                 ?1130     16?74                1328:true           	;0
	2397 2661  ASSIGN/38                 ?1131     16?73                1329:' (warn: XLEAK section but test passes)'	;0
	2398 2661  JMP/42                    ?0        ?2412                ?0                  	;0	>>2412
	2399 2663  INIT_FCALL_BY_NAME/59     ?0        ?0                   1330:'show_result'  	;5	<<2395
	2400 2663  SEND_VAL_EX/116           ?80       1332:'PASS'          ?1                  	;0
	2401 2663  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
	2402 2663  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	2403 2663  SEND_VAL_EX/116           ?128      1333:''              ?4                  	;0
	2404 2663  SEND_VAR_EX/66            ?144      16?22                ?5                  	;0
	2405 2663  DO_FCALL_BY_NAME/131      ?1132     ?0                   ?0                  	;0
	2406 2664  INIT_FCALL_BY_NAME/59     ?0        ?0                   1334:'junit_mark_test_as'	;3
	2407 2664  SEND_VAL_EX/116           ?80       1336:'PASS'          ?1                  	;0
	2408 2664  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	2409 2664  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	2410 2664  DO_FCALL_BY_NAME/131      ?1133     ?0                   ?0                  	;0
	2411 2665  RETURN/62                 ?0        1337:'PASSED'        ?0                  	;0
	2412 2670  ASSIGN/38                 ?1134     16?109               1338:NULL           	;0	<<2368,2388,2393,2398
	2413 2674  JMPZ/43                   ?0        16?101               ?2430               	;0	>>2430	<<2347
	2414 2675  ASSIGN/38                 ?1135     16?97                1339:false          	;0
	2415 2676  CONCAT/8                  #1255=    16?103               1340:'
--HEADERS--
'	;0
	2416 2676  CONCAT/8                  #1256=    #1255                16?108              	;0
	2417 2676  ASSIGN/38                 ?1138     16?108               #1256               	;0
	2418 2677  CONCAT/8                  #1258=    16?105               1341:'
--HEADERS--
'	;0
	2419 2677  CONCAT/8                  #1259=    #1258                16?76               	;0
	2420 2677  ASSIGN/38                 ?1141     16?76                #1259               	;0
	2421 2679  ISSET_ISEMPTY_CV/197      #1261=    16?109               ?0                  	;33554432
	2422 2679  JMPZ/43                   ?0        #1261                ?2430               	;0	>>2430
	2423 2680  INIT_FCALL_BY_NAME/59     ?0        ?0                   1342:'preg_quote'   	;2
	2424 2680  CONCAT/8                  #1262=    16?103               1344:'
--HEADERS--
'	;0
	2425 2680  SEND_VAL_EX/116           ?80       #1262                ?1                  	;0
	2426 2680  SEND_VAL_EX/116           ?96       1345:'/'             ?2                  	;0
	2427 2680  DO_FCALL_BY_NAME/131      $1263=    ?0                   ?0                  	;0
	2428 2680  CONCAT/8                  #1264=    $1263                16?109              	;0
	2429 2680  ASSIGN/38                 ?1146     16?109               #1264               	;0
	2430 2684  JMPZ/43                   ?0        16?96                ?2438               	;0	>>2438	<<2413,2422
	2431 2685  ISSET_ISEMPTY_DIM_OBJ/115 #1267=    16?26                1346:'XLEAK'        	;33554432
	2432 2685  JMPZ/43                   ?0        #1267                ?2435               	;0	>>2435
	2433 2686  QM_ASSIGN/22              #1268=    1347:'XLEAK'         ?0                  	;0
	2434 2686  JMP/42                    ?0        ?2436                ?0                  	;0	>>2436
	2435 2686  QM_ASSIGN/22              #1268=    1348:'LEAK'          ?0                  	;0	<<2432
	2436 2685  ASSIGN_DIM/147            ?1147     16?115               ?2413               	;0	<<2434
	2437 2686  OP_DATA/137               ?0        #1268                ?0                  	;0
	2438 2689  JMPZ/43                   ?0        16?74                ?2441               	;0	>>2441	<<2430
	2439 2690  ASSIGN_DIM/147            ?1150     16?115               ?0                  	;0
	2440 2690  OP_DATA/137               ?0        1349:'WARN'          ?0                  	;0
	2441 2693  BOOL_NOT/13               #1270=    16?97                ?0                  	;0	<<2438
	2442 2693  JMPZ/43                   ?0        #1270                ?2467               	;0	>>2467
	2443 2694  ISSET_ISEMPTY_DIM_OBJ/115 #1271=    16?26                1350:'XFAIL'        	;33554432
	2444 2694  JMPZ/43                   ?0        #1271                ?2454               	;0	>>2454
	2445 2695  ASSIGN_DIM/147            ?1153     16?115               ?2670194160         	;0
	2446 2695  OP_DATA/137               ?0        1351:'XFAIL'         ?0                  	;0
	2447 2696  INIT_FCALL_BY_NAME/59     ?0        ?0                   1352:'rtrim'        	;1
	2448 2696  FETCH_DIM_FUNC_ARG/93     $1273=    16?26                1354:'XFAIL'        	;1
	2449 2696  SEND_VAR_EX/66            ?80       $1273                ?1                  	;0
	2450 2696  DO_FCALL_BY_NAME/131      $1274=    ?0                   ?0                  	;0
	2451 2696  CONCAT/8                  #1275=    1355:'  XFAIL REASON: ' $1274               	;0
	2452 2696  ASSIGN/38                 ?1157     16?73                #1275               	;0
	2453 2696  JMP/42                    ?0        ?2467                ?0                  	;0	>>2467
	2454 2697  ISSET_ISEMPTY_DIM_OBJ/115 #1277=    16?26                1356:'XLEAK'        	;33554432	<<2444
	2455 2697  JMPZ/43                   ?0        #1277                ?2465               	;0	>>2465
	2456 2698  ASSIGN_DIM/147            ?1159     16?115               ?4583821            	;0
	2457 2698  OP_DATA/137               ?0        1357:'XLEAK'         ?0                  	;0
	2458 2699  INIT_FCALL_BY_NAME/59     ?0        ?0                   1358:'rtrim'        	;1
	2459 2699  FETCH_DIM_FUNC_ARG/93     $1279=    16?26                1360:'XLEAK'        	;1
	2460 2699  SEND_VAR_EX/66            ?80       $1279                ?1                  	;0
	2461 2699  DO_FCALL_BY_NAME/131      $1280=    ?0                   ?0                  	;0
	2462 2699  CONCAT/8                  #1281=    1361:'  XLEAK REASON: ' $1280               	;0
	2463 2699  ASSIGN/38                 ?1163     16?73                #1281               	;0
	2464 2699  JMP/42                    ?0        ?2467                ?0                  	;0	>>2467
	2465 2701  ASSIGN_DIM/147            ?1164     16?115               ?2670193984         	;0	<<2455
	2466 2701  OP_DATA/137               ?0        1362:'FAIL'          ?0                  	;0
	2467 2705  BOOL_NOT/13               #1284=    16?97                ?0                  	;0	<<2442,2453,2464
	2468 2705  JMPZ/43                   ?0        #1284                ?2613               	;0	>>2613
	2469 2708  INIT_FCALL_BY_NAME/59     ?0        ?0                   1363:'strpos'       	;2
	2470 2708  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	2471 2708  SEND_VAL_EX/116           ?96       1365:'E'             ?2                  	;0
	2472 2708  DO_FCALL_BY_NAME/131      $1285=    ?0                   ?0                  	;0
	2473 2708  IS_NOT_IDENTICAL/16       #1286=    $1285                1366:false          	;0
	2474 2708  JMPZ_EX/46                #1286=    #1286                ?2483               	;0	>>2483
	2475 2708  INIT_FCALL_BY_NAME/59     ?0        ?0                   1367:'file_put_contents'	;3
	2476 2708  SEND_VAR_EX/66            ?80       16?50                ?1                  	;0
	2477 2708  SEND_VAR_EX/66            ?96       16?108               ?2                  	;0
	2478 2708  FETCH_CONSTANT/99         #1287=    ?0                   1369:'FILE_BINARY'  	;16
	2479 2708  SEND_VAL_EX/116           ?112      #1287                ?3                  	;0
	2480 2708  DO_FCALL_BY_NAME/131      $1288=    ?0                   ?0                  	;0
	2481 2708  IS_IDENTICAL/15           #1289=    $1288                1372:false          	;0
	2482 2708  BOOL/52                   #1286=    #1289                ?0                  	;0
	2483 2708  JMPZ/43                   ?0        #1286                ?2489               	;0	>>2489	<<2474
	2484 2709  INIT_FCALL_BY_NAME/59     ?0        ?0                   1373:'error'        	;1
	2485 2709  NOP/0                     ?0        ?0                   ?0                  	;0
	2486 2709  FAST_CONCAT/53            #1290=    1375:'Cannot create expected test output - ' 16?50               	;0
	2487 2709  SEND_VAL_EX/116           ?80       #1290                ?1                  	;0
	2488 2709  DO_FCALL_BY_NAME/131      ?1172     ?0                   ?0                  	;0
	2489 2713  INIT_FCALL_BY_NAME/59     ?0        ?0                   1376:'strpos'       	;2	<<2483
	2490 2713  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	2491 2713  SEND_VAL_EX/116           ?96       1378:'O'             ?2                  	;0
	2492 2713  DO_FCALL_BY_NAME/131      $1292=    ?0                   ?0                  	;0
	2493 2713  IS_NOT_IDENTICAL/16       #1293=    $1292                1379:false          	;0
	2494 2713  JMPZ_EX/46                #1293=    #1293                ?2503               	;0	>>2503
	2495 2713  INIT_FCALL_BY_NAME/59     ?0        ?0                   1380:'file_put_contents'	;3
	2496 2713  SEND_VAR_EX/66            ?80       16?51                ?1                  	;0
	2497 2713  SEND_VAR_EX/66            ?96       16?76                ?2                  	;0
	2498 2713  FETCH_CONSTANT/99         #1294=    ?0                   1382:'FILE_BINARY'  	;16
	2499 2713  SEND_VAL_EX/116           ?112      #1294                ?3                  	;0
	2500 2713  DO_FCALL_BY_NAME/131      $1295=    ?0                   ?0                  	;0
	2501 2713  IS_IDENTICAL/15           #1296=    $1295                1385:false          	;0
	2502 2713  BOOL/52                   #1293=    #1296                ?0                  	;0
	2503 2713  JMPZ/43                   ?0        #1293                ?2509               	;0	>>2509	<<2494
	2504 2714  INIT_FCALL_BY_NAME/59     ?0        ?0                   1386:'error'        	;1
	2505 2714  NOP/0                     ?0        ?0                   ?0                  	;0
	2506 2714  FAST_CONCAT/53            #1297=    1388:'Cannot create test output - ' 16?51               	;0
	2507 2714  SEND_VAL_EX/116           ?80       #1297                ?1                  	;0
	2508 2714  DO_FCALL_BY_NAME/131      ?1179     ?0                   ?0                  	;0
	2509 2718  INIT_FCALL_BY_NAME/59     ?0        ?0                   1389:'generate_diff'	;3	<<2503
	2510 2718  SEND_VAR_EX/66            ?80       16?108               ?1                  	;0
	2511 2718  SEND_VAR_EX/66            ?96       16?109               ?2                  	;0
	2512 2718  SEND_VAR_EX/66            ?112      16?76                ?3                  	;0
	2513 2718  DO_FCALL_BY_NAME/131      $1299=    ?0                   ?0                  	;0
	2514 2718  ASSIGN/38                 ?1181     16?116               $1299               	;0
	2515 2719  INIT_FCALL_BY_NAME/59     ?0        ?0                   1391:'is_array'     	;1
	2516 2719  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	2517 2719  DO_FCALL_BY_NAME/131      $1301=    ?0                   ?0                  	;0
	2518 2719  JMPZ/43                   ?0        $1301                ?2532               	;0	>>2532
	2519 2720  INIT_FCALL_BY_NAME/59     ?0        ?0                   1393:'str_replace'  	;3
	2520 2720  FETCH_CONSTANT/99         #1302=    ?0                   1395:'TEST_PHP_SRCDIR'	;16
	2521 2720  CONCAT/8                  #1303=    #1302                1398:'/'            	;0
	2522 2720  SEND_VAL_EX/116           ?80       #1303                ?1                  	;0
	2523 2720  SEND_VAL_EX/116           ?96       1399:''              ?2                  	;0
	2524 2720  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
	2525 2720  DO_FCALL_BY_NAME/131      $1304=    ?0                   ?0                  	;0
	2526 2720  ASSIGN/38                 ?1186     16?117               $1304               	;0
	2527 2721  ROPE_INIT/54              #1307=    ?0                   1400:'# original source file: '	;3
	2528 2721  ROPE_ADD/55               #1307=    #1307                16?117              	;1
	2529 2721  ROPE_END/56               #1306=    #1307                1401:'
'            	;2
	2530 2721  CONCAT/8                  #1309=    #1306                16?116              	;0
	2531 2721  ASSIGN/38                 ?1191     16?116               #1309               	;0
	2532 2723  INIT_FCALL/61             ?0        ?272                 1402:'show_file_block'	;2	<<2518
	2533 2723  SEND_VAL/65               ?80       1403:'diff'          ?1                  	;0
	2534 2723  SEND_VAR/117              ?96       16?116               ?2                  	;0
	2535 2723  DO_FCALL/60               ?1192     ?0                   ?0                  	;0
	2536 2724  INIT_FCALL_BY_NAME/59     ?0        ?0                   1404:'strpos'       	;2
	2537 2724  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	2538 2724  SEND_VAL_EX/116           ?96       1406:'D'             ?2                  	;0
	2539 2724  DO_FCALL_BY_NAME/131      $1312=    ?0                   ?0                  	;0
	2540 2724  IS_NOT_IDENTICAL/16       #1313=    $1312                1407:false          	;0
	2541 2724  JMPZ_EX/46                #1313=    #1313                ?2550               	;0	>>2550
	2542 2724  INIT_FCALL_BY_NAME/59     ?0        ?0                   1408:'file_put_contents'	;3
	2543 2724  SEND_VAR_EX/66            ?80       16?48                ?1                  	;0
	2544 2724  SEND_VAR_EX/66            ?96       16?116               ?2                  	;0
	2545 2724  FETCH_CONSTANT/99         #1314=    ?0                   1410:'FILE_BINARY'  	;16
	2546 2724  SEND_VAL_EX/116           ?112      #1314                ?3                  	;0
	2547 2724  DO_FCALL_BY_NAME/131      $1315=    ?0                   ?0                  	;0
	2548 2724  IS_IDENTICAL/15           #1316=    $1315                1413:false          	;0
	2549 2724  BOOL/52                   #1313=    #1316                ?0                  	;0
	2550 2724  JMPZ/43                   ?0        #1313                ?2556               	;0	>>2556	<<2541
	2551 2725  INIT_FCALL_BY_NAME/59     ?0        ?0                   1414:'error'        	;1
	2552 2725  NOP/0                     ?0        ?0                   ?0                  	;0
	2553 2725  FAST_CONCAT/53            #1317=    1416:'Cannot create test diff - ' 16?48               	;0
	2554 2725  SEND_VAL_EX/116           ?80       #1317                ?1                  	;0
	2555 2725  DO_FCALL_BY_NAME/131      ?1199     ?0                   ?0                  	;0
	2556 2729  INIT_FCALL_BY_NAME/59     ?0        ?0                   1417:'strpos'       	;2	<<2550
	2557 2729  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	2558 2729  SEND_VAL_EX/116           ?96       1419:'S'             ?2                  	;0
	2559 2729  DO_FCALL_BY_NAME/131      $1319=    ?0                   ?0                  	;0
	2560 2729  IS_NOT_IDENTICAL/16       #1320=    $1319                1420:false          	;0
	2561 2729  JMPZ_EX/46                #1320=    #1320                ?2573               	;0	>>2573
	2562 2729  INIT_FCALL_BY_NAME/59     ?0        ?0                   1421:'file_put_contents'	;3
	2563 2729  SEND_VAR_EX/66            ?80       16?53                ?1                  	;0
	2564 2731  ROPE_INIT/54              #1322=    ?0                   1423:'#!/bin/sh

'  	;3
	2565 2731  ROPE_ADD/55               #1322=    #1322                16?90               	;1
	2566 2731  ROPE_END/56               #1321=    #1322                1424:'
'            	;2
	2567 2731  SEND_VAL_EX/116           ?96       #1321                ?2                  	;0
	2568 2732  FETCH_CONSTANT/99         #1324=    ?0                   1425:'FILE_BINARY'  	;16
	2569 2732  SEND_VAL_EX/116           ?112      #1324                ?3                  	;0
	2570 2732  DO_FCALL_BY_NAME/131      $1325=    ?0                   ?0                  	;0
	2571 2732  IS_IDENTICAL/15           #1326=    $1325                1428:false          	;0
	2572 2732  BOOL/52                   #1320=    #1326                ?0                  	;0
	2573 2732  JMPZ/43                   ?0        #1320                ?2579               	;0	>>2579	<<2561
	2574 2733  INIT_FCALL_BY_NAME/59     ?0        ?0                   1429:'error'        	;1
	2575 2733  NOP/0                     ?0        ?0                   ?0                  	;0
	2576 2733  FAST_CONCAT/53            #1327=    1431:'Cannot create test shell script - ' 16?53               	;0
	2577 2733  SEND_VAL_EX/116           ?80       #1327                ?1                  	;0
	2578 2733  DO_FCALL_BY_NAME/131      ?1209     ?0                   ?0                  	;0
	2579 2735  INIT_FCALL_BY_NAME/59     ?0        ?0                   1432:'chmod'        	;2	<<2573
	2580 2735  SEND_VAR_EX/66            ?80       16?53                ?1                  	;0
	2581 2735  SEND_VAL_EX/116           ?96       1434:493             ?2                  	;0
	2582 2735  DO_FCALL_BY_NAME/131      ?1210     ?0                   ?0                  	;0
	2583 2738  INIT_FCALL_BY_NAME/59     ?0        ?0                   1435:'strpos'       	;2
	2584 2738  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	2585 2738  SEND_VAL_EX/116           ?96       1437:'L'             ?2                  	;0
	2586 2738  DO_FCALL_BY_NAME/131      $1330=    ?0                   ?0                  	;0
	2587 2738  IS_NOT_IDENTICAL/16       #1331=    $1330                1438:false          	;0
	2588 2738  JMPZ_EX/46                #1331=    #1331                ?2602               	;0	>>2602
	2589 2738  INIT_FCALL_BY_NAME/59     ?0        ?0                   1439:'file_put_contents'	;3
	2590 2738  SEND_VAR_EX/66            ?80       16?49                ?1                  	;0
	2591 2740  ROPE_INIT/54              #1333=    ?0                   1441:'
---- EXPECTED OUTPUT
'	;5
	2592 2740  ROPE_ADD/55               #1333=    #1333                16?108              	;1
	2593 2742  ROPE_ADD/55               #1333=    #1333                1442:'
---- ACTUAL OUTPUT
'	;2
	2594 2742  ROPE_ADD/55               #1333=    #1333                16?76               	;3
	2595 2742  ROPE_END/56               #1332=    #1333                1443:'
---- FAILED
'	;4
	2596 2742  SEND_VAL_EX/116           ?96       #1332                ?2                  	;0
	2597 2744  FETCH_CONSTANT/99         #1336=    ?0                   1444:'FILE_BINARY'  	;16
	2598 2744  SEND_VAL_EX/116           ?112      #1336                ?3                  	;0
	2599 2744  DO_FCALL_BY_NAME/131      $1337=    ?0                   ?0                  	;0
	2600 2744  IS_IDENTICAL/15           #1338=    $1337                1447:false          	;0
	2601 2744  BOOL/52                   #1331=    #1338                ?0                  	;0
	2602 2744  JMPZ/43                   ?0        #1331                ?2613               	;0	>>2613	<<2588
	2603 2745  INIT_FCALL_BY_NAME/59     ?0        ?0                   1448:'error'        	;1
	2604 2745  NOP/0                     ?0        ?0                   ?0                  	;0
	2605 2745  FAST_CONCAT/53            #1339=    1450:'Cannot create test log - ' 16?49               	;0
	2606 2745  SEND_VAL_EX/116           ?80       #1339                ?1                  	;0
	2607 2745  DO_FCALL_BY_NAME/131      ?1221     ?0                   ?0                  	;0
	2608 2746  INIT_FCALL/61             ?0        ?496                 1451:'error_report' 	;3
	2609 2746  SEND_VAR/117              ?80       16?1                 ?1                  	;0
	2610 2746  SEND_VAR/117              ?96       16?49                ?2                  	;0
	2611 2746  SEND_VAR/117              ?112      16?42                ?3                  	;0
	2612 2746  DO_FCALL/60               ?1222     ?0                   ?0                  	;0
	2613 2750  JMPZ_EX/46                #1342=    16?11                ?2615               	;0	>>2615	<<2468,2602
	2614 2750  BOOL/52                   #1342=    16?96                ?0                  	;0
	2615 2750  JMPZ_EX/46                #1342=    #1342                ?2619               	;0	>>2619	<<2613
	2616 2750  FETCH_DIM_R/81            $1343=    16?14                1452:'show'         	;0
	2617 2750  FETCH_DIM_R/81            $1344=    $1343                1453:'mem'          	;0
	2618 2750  BOOL/52                   #1342=    $1344                ?0                  	;0
	2619 2750  JMPZ/43                   ?0        #1342                ?2627               	;0	>>2627	<<2615
	2620 2751  INIT_FCALL/61             ?0        ?272                 1454:'show_file_block'	;2
	2621 2751  SEND_VAL/65               ?80       1455:'mem'           ?1                  	;0
	2622 2751  INIT_FCALL_BY_NAME/59     ?0        ?0                   1456:'file_get_contents'	;1
	2623 2751  SEND_VAR_EX/66            ?80       16?52                ?1                  	;0
	2624 2751  DO_FCALL_BY_NAME/131      $1345=    ?0                   ?0                  	;0
	2625 2751  SEND_VAR/117              ?96       $1345                ?2                  	;0
	2626 2751  DO_FCALL/60               ?1227     ?0                   ?0                  	;0
	2627 2754  INIT_FCALL_BY_NAME/59     ?0        ?0                   1458:'show_result'  	;5	<<2619
	2628 2754  INIT_FCALL_BY_NAME/59     ?0        ?0                   1460:'implode'      	;2
	2629 2754  SEND_VAL_EX/116           ?80       1462:'&'             ?1                  	;0
	2630 2754  SEND_VAR_EX/66            ?96       16?115               ?2                  	;0
	2631 2754  DO_FCALL_BY_NAME/131      $1347=    ?0                   ?0                  	;0
	2632 2754  SEND_VAR_NO_REF_EX/50     ?80       $1347                ?1                  	;0
	2633 2754  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
	2634 2754  SEND_VAR_EX/66            ?112      16?37                ?3                  	;0
	2635 2754  SEND_VAR_EX/66            ?128      16?73                ?4                  	;0
	2636 2754  SEND_VAR_EX/66            ?144      16?22                ?5                  	;0
	2637 2754  DO_FCALL_BY_NAME/131      ?1229     ?0                   ?0                  	;0
	2638 2756  FE_RESET_R/77             $1349=    16?115               ?2663               	;0
	2639 2756  FE_FETCH_R/78             ?0        $1349                16?118              	;2663	>>2663	<<2662
	2640 2757  CONCAT/8                  #1350=    16?118               1463:'ED'           	;0
	2641 2758  INIT_ARRAY/71             #1353=    16?1                 1464:'name'         	;22
	2642 2759  INIT_FCALL_BY_NAME/59     ?0        ?0                   1465:'is_array'     	;1
	2643 2759  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	2644 2759  DO_FCALL_BY_NAME/131      $1354=    ?0                   ?0                  	;0
	2645 2759  JMPZ/43                   ?0        $1354                ?2649               	;0	>>2649
	2646 2759  FETCH_DIM_R/81            $1355=    16?8                 1467:'via'          	;0
	2647 2759  QM_ASSIGN/22              #1356=    $1355                ?0                  	;0
	2648 2759  JMP/42                    ?0        ?2650                ?0                  	;0	>>2650
	2649 2759  QM_ASSIGN/22              #1356=    1468:''              ?0                  	;0	<<2645
	2650 2759  CONCAT/8                  #1357=    #1356                16?42               	;0	<<2648
	2651 2759  ROPE_INIT/54              #1359=    ?0                   1469:' ['           	;3
	2652 2759  ROPE_ADD/55               #1359=    #1359                16?37               	;1
	2653 2759  ROPE_END/56               #1358=    #1359                1470:']'            	;2
	2654 2759  CONCAT/8                  #1361=    #1357                #1358               	;0
	2655 2759  ADD_ARRAY_ELEMENT/72      #1353=    #1361                1471:'test_name'    	;0
	2656 2760  ADD_ARRAY_ELEMENT/72      #1353=    16?51                1472:'output'       	;0
	2657 2761  ADD_ARRAY_ELEMENT/72      #1353=    16?48                1473:'diff'         	;0
	2658 2762  ADD_ARRAY_ELEMENT/72      #1353=    16?73                1474:'info'         	;0
	2659 2757  FETCH_DIM_W/84            $1351=    16?5                 #1350               	;0
	2660 2757  ASSIGN_DIM/147            ?1233     $1351                ?5126               	;0
	2661 2762  OP_DATA/137               ?0        #1353                ?0                  	;0
	2662 2762  JMP/42                    ?0        ?2639                ?0                  	;0	>>2639
	2663 2762  FE_FREE/127               ?0        $1349                ?0                  	;0	<<2638
	2664 2766  ISSET_ISEMPTY_CV/197      #1362=    16?116               ?0                  	;16777216
	2665 2766  JMPZ/43                   ?0        #1362                ?2668               	;0	>>2668
	2666 2766  QM_ASSIGN/22              #1363=    1475:''              ?0                  	;0
	2667 2766  JMP/42                    ?0        ?2674                ?0                  	;0	>>2674
	2668 2766  INIT_FCALL_BY_NAME/59     ?0        ?0                   1476:'preg_replace' 	;3	<<2665
	2669 2766  SEND_VAL_EX/116           ?80       1478:'/\\e/'         ?1                  	;0
	2670 2766  SEND_VAL_EX/116           ?96       1479:'<esc>'         ?2                  	;0
	2671 2766  SEND_VAR_EX/66            ?112      16?116               ?3                  	;0
	2672 2766  DO_FCALL_BY_NAME/131      $1364=    ?0                   ?0                  	;0
	2673 2766  QM_ASSIGN/22              #1363=    $1364                ?0                  	;0
	2674 2766  ASSIGN/38                 ?1246     16?116               #1363               	;0	<<2667
	2675 2768  INIT_FCALL_BY_NAME/59     ?0        ?0                   1480:'junit_mark_test_as'	;6
	2676 2768  SEND_VAR_EX/66            ?80       16?115               ?1                  	;0
	2677 2768  SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	2678 2768  SEND_VAR_EX/66            ?112      16?42                ?3                  	;0
	2679 2768  SEND_VAL_EX/116           ?128      1482:NULL            ?4                  	;0
	2680 2768  SEND_VAR_EX/66            ?144      16?73                ?5                  	;0
	2681 2768  SEND_VAR_EX/66            ?160      16?116               ?6                  	;0
	2682 2768  DO_FCALL_BY_NAME/131      ?1247     ?0                   ?0                  	;0
	2683 2770  FETCH_DIM_R/81            $1367=    16?115               1483:0              	;0
	2684 2770  CONCAT/8                  #1368=    $1367                1484:'ED'           	;0
	2685 2770  RETURN/62                 ?0        #1368                ?0                  	;0
	2686 2771  NOP/0                     ?0        1485:NULL            ?0                  	;4294967295
	*/
}

function comp_line($l1, $l2, $is_reg)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    2773  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    2773  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    2773  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    2775  JMPZ/43                   ?0        16?2                 ?12                 	;0	>>12
	4    2776  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'preg_match'      	;2
	5    2776  CONCAT/8                  #3=       2:'/^'               16?0                	;0
	6    2776  CONCAT/8                  #4=       #3                   3:'$/s'             	;0
	7    2776  SEND_VAL_EX/116           ?80       #4                   ?1                  	;0
	8    2776  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	9    2776  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	10   2776  RETURN/62                 ?0        $5                   ?0                  	;0
	11   2776  JMP/42                    ?0        ?18                  ?0                  	;0	>>18
	12   2778  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'strcmp'          	;2	<<3
	13   2778  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	14   2778  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	15   2778  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	16   2778  BOOL_NOT/13               #7=       $6                   ?0                  	;0
	17   2778  RETURN/62                 ?0        #7                   ?0                  	;0
	18   2780  NOP/0                     ?0        6:NULL               ?0                  	;4294967295	<<11
	*/
}

function count_array_diff($ar1, $ar2, $is_reg, $w, $idx1, $idx2, $cnt1, $cnt2, $steps)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    2782  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    2782  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    2782  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    2782  RECV/63                   16?3=     ?4                   ?4294967294         	;0
	4    2782  RECV/63                   16?4=     ?5                   ?4294967294         	;0
	5    2782  RECV/63                   16?5=     ?6                   ?4294967294         	;0
	6    2782  RECV/63                   16?6=     ?7                   ?4294967294         	;0
	7    2782  RECV/63                   16?7=     ?8                   ?4294967294         	;0
	8    2782  RECV/63                   16?8=     ?9                   ?4294967294         	;0
	9    2784  ASSIGN/38                 ?0        16?9                 0:0                 	;0
	10   2786  JMP/42                    ?0        ?19                  ?0                  	;0	>>19
	11   2787  POST_INC/36               #17=      16?4                 ?0                  	;0	<<32
	12   2787  FREE/70                   ?0        #17                  ?0                  	;0
	13   2788  POST_INC/36               #18=      16?5                 ?0                  	;0
	14   2788  FREE/70                   ?0        #18                  ?0                  	;0
	15   2789  POST_INC/36               #19=      16?9                 ?0                  	;0
	16   2789  FREE/70                   ?0        #19                  ?0                  	;0
	17   2790  POST_DEC/37               #20=      16?8                 ?0                  	;0
	18   2790  FREE/70                   ?0        #20                  ?0                  	;0
	19   2786  IS_SMALLER/19             #21=      16?4                 16?6                	;0	<<10
	20   2786  JMPZ_EX/46                #21=      #21                  ?23                 	;0	>>23
	21   2786  IS_SMALLER/19             #22=      16?5                 16?7                	;0
	22   2786  BOOL/52                   #21=      #22                  ?0                  	;0
	23   2786  JMPZ_EX/46                #21=      #21                  ?32                 	;0	>>32	<<20
	24   2786  INIT_FCALL/61             ?0        ?208                 1:'comp_line'       	;3
	25   2786  FETCH_DIM_R/81            $23=      16?0                 16?4                	;0
	26   2786  SEND_VAR/117              ?80       $23                  ?1                  	;0
	27   2786  FETCH_DIM_R/81            $24=      16?1                 16?5                	;0
	28   2786  SEND_VAR/117              ?96       $24                  ?2                  	;0
	29   2786  SEND_VAR/117              ?112      16?2                 ?3                  	;0
	30   2786  DO_FCALL/60               $25=      ?0                   ?0                  	;0
	31   2786  BOOL/52                   #21=      $25                  ?0                  	;0
	32   2786  JMPNZ/44                  ?0        #21                  ?11                 	;0	>>11	<<23
	33   2792  PRE_DEC/35                $26=      16?8                 ?0                  	;0
	34   2792  IS_SMALLER/19             #27=      2:0                  $26                 	;0
	35   2792  JMPZ/43                   ?0        #27                  ?104                	;0	>>104
	36   2793  ASSIGN/38                 ?12       16?10                3:0                 	;0
	37   2794  DIV/4                     #29=      16?8                 4:2                 	;0
	38   2794  ASSIGN/38                 ?14       16?11                #29                 	;0
	39   2796  ADD/1                     #31=      16?4                 5:1                 	;0
	40   2796  ASSIGN/38                 ?16       16?12                #31                 	;0
	41   2796  JMP/42                    ?0        ?61                  ?0                  	;0	>>61
	42   2797  BEGIN_SILENCE/57          #33=      ?0                   ?0                  	;0	<<66
	43   2797  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'count_array_diff'	;9
	44   2797  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	45   2797  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	46   2797  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
	47   2797  SEND_VAR_EX/66            ?128      16?3                 ?4                  	;0
	48   2797  SEND_VAR_EX/66            ?144      16?12                ?5                  	;0
	49   2797  SEND_VAR_EX/66            ?160      16?5                 ?6                  	;0
	50   2797  SEND_VAR_EX/66            ?176      16?6                 ?7                  	;0
	51   2797  SEND_VAR_EX/66            ?192      16?7                 ?8                  	;0
	52   2797  SEND_VAR_EX/66            ?208      16?11                ?9                  	;0
	53   2797  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
	54   2797  END_SILENCE/58            ?0        #33                  ?0                  	;0
	55   2797  ASSIGN/38                 ?19       16?13                $34                 	;0
	56   2799  IS_SMALLER/19             #36=      16?10                16?13               	;0
	57   2799  JMPZ/43                   ?0        #36                  ?59                 	;0	>>59
	58   2800  ASSIGN/38                 ?21       16?10                16?13               	;0
	59   2796  POST_INC/36               #38=      16?12                ?0                  	;0	<<57
	60   2796  FREE/70                   ?0        #38                  ?0                  	;0
	61   2796  IS_SMALLER/19             #39=      16?12                16?6                	;0	<<41
	62   2796  JMPZ_EX/46                #39=      #39                  ?66                 	;0	>>66
	63   2796  POST_DEC/37               #40=      16?11                ?0                  	;0
	64   2796  IS_SMALLER/19             #41=      8:0                  #40                 	;0
	65   2796  BOOL/52                   #39=      #41                  ?0                  	;0
	66   2796  JMPNZ/44                  ?0        #39                  ?42                 	;0	>>42	<<62
	67   2804  ASSIGN/38                 ?26       16?14                9:0                 	;0
	68   2805  ASSIGN/38                 ?27       16?11                16?8                	;0
	69   2807  ADD/1                     #44=      16?5                 10:1                	;0
	70   2807  ASSIGN/38                 ?29       16?15                #44                 	;0
	71   2807  JMP/42                    ?0        ?91                  ?0                  	;0	>>91
	72   2808  BEGIN_SILENCE/57          #46=      ?0                   ?0                  	;0	<<96
	73   2808  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'count_array_diff'	;9
	74   2808  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	75   2808  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	76   2808  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
	77   2808  SEND_VAR_EX/66            ?128      16?3                 ?4                  	;0
	78   2808  SEND_VAR_EX/66            ?144      16?4                 ?5                  	;0
	79   2808  SEND_VAR_EX/66            ?160      16?15                ?6                  	;0
	80   2808  SEND_VAR_EX/66            ?176      16?6                 ?7                  	;0
	81   2808  SEND_VAR_EX/66            ?192      16?7                 ?8                  	;0
	82   2808  SEND_VAR_EX/66            ?208      16?11                ?9                  	;0
	83   2808  DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
	84   2808  END_SILENCE/58            ?0        #46                  ?0                  	;0
	85   2808  ASSIGN/38                 ?32       16?13                $47                 	;0
	86   2809  IS_SMALLER/19             #49=      16?14                16?13               	;0
	87   2809  JMPZ/43                   ?0        #49                  ?89                 	;0	>>89
	88   2810  ASSIGN/38                 ?34       16?14                16?13               	;0
	89   2807  POST_INC/36               #51=      16?15                ?0                  	;0	<<87
	90   2807  FREE/70                   ?0        #51                  ?0                  	;0
	91   2807  IS_SMALLER/19             #52=      16?15                16?7                	;0	<<71
	92   2807  JMPZ_EX/46                #52=      #52                  ?96                 	;0	>>96
	93   2807  POST_DEC/37               #53=      16?11                ?0                  	;0
	94   2807  IS_SMALLER/19             #54=      13:0                 #53                 	;0
	95   2807  BOOL/52                   #52=      #54                  ?0                  	;0
	96   2807  JMPNZ/44                  ?0        #52                  ?72                 	;0	>>72	<<92
	97   2814  IS_SMALLER/19             #55=      16?14                16?10               	;0
	98   2814  JMPZ/43                   ?0        #55                  ?101                	;0	>>101
	99   2815  ASSIGN_ADD/23             ?40       16?9                 16?10               	;0
	100  2815  JMP/42                    ?0        ?104                 ?0                  	;0	>>104
	101  2816  IS_SMALLER/19             #57=      14:0                 16?14               	;0	<<98
	102  2816  JMPZ/43                   ?0        #57                  ?104                	;0	>>104
	103  2817  ASSIGN_ADD/23             ?42       16?9                 16?14               	;0
	104  2821  RETURN/62                 ?0        16?9                 ?0                  	;0	<<35,100,102
	105  2822  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
	*/
}

function generate_array_diff($ar1, $ar2, $is_reg, $w)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    2824  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    2824  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    2824  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    2824  RECV/63                   16?3=     ?4                   ?4294967294         	;0
	4    2826  ASSIGN/38                 ?0        16?4                 0:0                 	;0
	5    2827  BEGIN_SILENCE/57          #18=      ?0                   ?0                  	;0
	6    2827  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'count'           	;1
	7    2827  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	8    2827  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
	9    2827  END_SILENCE/58            ?0        #18                  ?0                  	;0
	10   2827  ASSIGN/38                 ?3        16?5                 $19                 	;0
	11   2828  ASSIGN/38                 ?4        16?6                 3:0                 	;0
	12   2829  BEGIN_SILENCE/57          #22=      ?0                   ?0                  	;0
	13   2829  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'count'           	;1
	14   2829  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	15   2829  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
	16   2829  END_SILENCE/58            ?0        #22                  ?0                  	;0
	17   2829  ASSIGN/38                 ?7        16?7                 $23                 	;0
	18   2830  ASSIGN/38                 ?8        16?8                 6:array (
)         	;0
	19   2831  ASSIGN/38                 ?9        16?9                 7:array (
)         	;0
	20   2832  ASSIGN/38                 ?10       16?10                8:array (
)         	;0
	21   2834  JMP/42                    ?0        ?112                 ?0                  	;0	>>112
	22   2836  INIT_FCALL/61             ?0        ?208                 9:'comp_line'       	;3	<<116
	23   2836  FETCH_DIM_R/81            $28=      16?0                 16?4                	;0
	24   2836  SEND_VAR/117              ?80       $28                  ?1                  	;0
	25   2836  FETCH_DIM_R/81            $29=      16?1                 16?6                	;0
	26   2836  SEND_VAR/117              ?96       $29                  ?2                  	;0
	27   2836  SEND_VAR/117              ?112      16?2                 ?3                  	;0
	28   2836  DO_FCALL/60               $30=      ?0                   ?0                  	;0
	29   2836  JMPZ/43                   ?0        $30                  ?36                 	;0	>>36
	30   2837  POST_INC/36               #31=      16?4                 ?0                  	;0
	31   2837  FREE/70                   ?0        #31                  ?0                  	;0
	32   2838  POST_INC/36               #32=      16?6                 ?0                  	;0
	33   2838  FREE/70                   ?0        #32                  ?0                  	;0
	34   2839  CONT/255                  ?0        ?112                 0:1                 	;0
	35   2839  JMP/42                    ?0        ?112                 ?0                  	;0	>>112
	36   2842  BEGIN_SILENCE/57          #33=      ?0                   ?0                  	;0	<<29
	37   2842  INIT_FCALL/61             ?0        ?1024                10:'count_array_diff'	;9
	38   2842  SEND_VAR/117              ?80       16?0                 ?1                  	;0
	39   2842  SEND_VAR/117              ?96       16?1                 ?2                  	;0
	40   2842  SEND_VAR/117              ?112      16?2                 ?3                  	;0
	41   2842  SEND_VAR/117              ?128      16?3                 ?4                  	;0
	42   2842  ADD/1                     #34=      16?4                 11:1                	;0
	43   2842  SEND_VAL/65               ?144      #34                  ?5                  	;0
	44   2842  SEND_VAR/117              ?160      16?6                 ?6                  	;0
	45   2842  SEND_VAR/117              ?176      16?5                 ?7                  	;0
	46   2842  SEND_VAR/117              ?192      16?7                 ?8                  	;0
	47   2842  SEND_VAL/65               ?208      12:10                ?9                  	;0
	48   2842  DO_FCALL/60               $35=      ?0                   ?0                  	;0
	49   2842  END_SILENCE/58            ?0        #33                  ?0                  	;0
	50   2842  ASSIGN/38                 ?19       16?11                $35                 	;0
	51   2843  BEGIN_SILENCE/57          #37=      ?0                   ?0                  	;0
	52   2843  INIT_FCALL/61             ?0        ?1024                13:'count_array_diff'	;9
	53   2843  SEND_VAR/117              ?80       16?0                 ?1                  	;0
	54   2843  SEND_VAR/117              ?96       16?1                 ?2                  	;0
	55   2843  SEND_VAR/117              ?112      16?2                 ?3                  	;0
	56   2843  SEND_VAR/117              ?128      16?3                 ?4                  	;0
	57   2843  SEND_VAR/117              ?144      16?4                 ?5                  	;0
	58   2843  ADD/1                     #38=      16?6                 14:1                	;0
	59   2843  SEND_VAL/65               ?160      #38                  ?6                  	;0
	60   2843  SEND_VAR/117              ?176      16?5                 ?7                  	;0
	61   2843  SEND_VAR/117              ?192      16?7                 ?8                  	;0
	62   2843  SEND_VAL/65               ?208      15:10                ?9                  	;0
	63   2843  DO_FCALL/60               $39=      ?0                   ?0                  	;0
	64   2843  END_SILENCE/58            ?0        #37                  ?0                  	;0
	65   2843  ASSIGN/38                 ?23       16?12                $39                 	;0
	66   2845  IS_SMALLER/19             #41=      16?12                16?11               	;0
	67   2845  JMPZ/43                   ?0        #41                  ?79                 	;0	>>79
	68   2846  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'sprintf'        	;2
	69   2846  SEND_VAL_EX/116           ?80       18:'%03d- '          ?1                  	;0
	70   2846  ADD/1                     #43=      16?4                 19:1                	;0
	71   2846  SEND_VAL_EX/116           ?96       #43                  ?2                  	;0
	72   2846  DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
	73   2846  POST_INC/36               #45=      16?4                 ?0                  	;0
	74   2846  FETCH_DIM_R/81            $46=      16?3                 #45                 	;0
	75   2846  CONCAT/8                  #47=      $44                  $46                 	;0
	76   2846  ASSIGN_DIM/147            ?25       16?9                 16?4                	;0
	77   2846  OP_DATA/137               ?0        #47                  ?0                  	;0
	78   2846  CONT/255                  ?0        ?112                 0:1                 	;0
	79   2847  IS_SMALLER/19             #48=      20:0                 16?12               	;0	<<67
	80   2847  JMPZ/43                   ?0        #48                  ?92                 	;0	>>92
	81   2848  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'sprintf'        	;2
	82   2848  SEND_VAL_EX/116           ?80       23:'%03d+ '          ?1                  	;0
	83   2848  ADD/1                     #50=      16?6                 24:1                	;0
	84   2848  SEND_VAL_EX/116           ?96       #50                  ?2                  	;0
	85   2848  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
	86   2848  POST_INC/36               #52=      16?6                 ?0                  	;0
	87   2848  FETCH_DIM_R/81            $53=      16?1                 #52                 	;0
	88   2848  CONCAT/8                  #54=      $51                  $53                 	;0
	89   2848  ASSIGN_DIM/147            ?32       16?10                16?6                	;0
	90   2848  OP_DATA/137               ?0        #54                  ?0                  	;0
	91   2848  CONT/255                  ?0        ?112                 0:1                 	;0
	92   2850  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'sprintf'        	;2	<<80
	93   2850  SEND_VAL_EX/116           ?80       27:'%03d- '          ?1                  	;0
	94   2850  ADD/1                     #56=      16?4                 28:1                	;0
	95   2850  SEND_VAL_EX/116           ?96       #56                  ?2                  	;0
	96   2850  DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
	97   2850  POST_INC/36               #58=      16?4                 ?0                  	;0
	98   2850  FETCH_DIM_R/81            $59=      16?3                 #58                 	;0
	99   2850  CONCAT/8                  #60=      $57                  $59                 	;0
	100  2850  ASSIGN_DIM/147            ?38       16?9                 16?4                	;0
	101  2850  OP_DATA/137               ?0        #60                  ?0                  	;0
	102  2851  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'sprintf'        	;2
	103  2851  SEND_VAL_EX/116           ?80       31:'%03d+ '          ?1                  	;0
	104  2851  ADD/1                     #62=      16?6                 32:1                	;0
	105  2851  SEND_VAL_EX/116           ?96       #62                  ?2                  	;0
	106  2851  DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
	107  2851  POST_INC/36               #64=      16?6                 ?0                  	;0
	108  2851  FETCH_DIM_R/81            $65=      16?1                 #64                 	;0
	109  2851  CONCAT/8                  #66=      $63                  $65                 	;0
	110  2851  ASSIGN_DIM/147            ?44       16?10                16?6                	;0
	111  2851  OP_DATA/137               ?0        #66                  ?0                  	;0
	112  2834  IS_SMALLER/19             #67=      16?4                 16?5                	;0	<<21,35
	113  2834  JMPZ_EX/46                #67=      #67                  ?116                	;0	>>116
	114  2834  IS_SMALLER/19             #68=      16?6                 16?7                	;0
	115  2834  BOOL/52                   #67=      #68                  ?0                  	;0
	116  2834  JMPNZ/44                  ?0        #67                  ?22                 	;0	>>22	<<113
	117  2856  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'reset'          	;1
	118  2856  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	119  2856  DO_FCALL_BY_NAME/131      ?52       ?0                   ?0                  	;0
	120  2857  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'key'            	;1
	121  2857  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	122  2857  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
	123  2857  ASSIGN/38                 ?54       16?13                $70                 	;0
	124  2858  ASSIGN/38                 ?55       16?14                37:-2               	;0
	125  2859  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'reset'          	;1
	126  2859  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	127  2859  DO_FCALL_BY_NAME/131      ?56       ?0                   ?0                  	;0
	128  2860  INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'key'            	;1
	129  2860  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	130  2860  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
	131  2860  ASSIGN/38                 ?58       16?15                $74                 	;0
	132  2861  ASSIGN/38                 ?59       16?16                42:-2               	;0
	133  2863  JMP/42                    ?0        ?219                 ?0                  	;0	>>219
	134  2865  ADD/1                     #77=      16?14                43:1                	;0	<<223
	135  2865  IS_EQUAL/17               #78=      16?13                #77                 	;0
	136  2865  JMPNZ_EX/47               #78=      #78                  ?139                	;0	>>139
	137  2865  IS_IDENTICAL/15           #79=      16?15                44:NULL             	;0
	138  2865  BOOL/52                   #78=      #79                  ?0                  	;0
	139  2865  JMPZ/43                   ?0        #78                  ?158                	;0	>>158	<<136
	140  2866  ASSIGN/38                 ?63       16?14                16?13               	;0
	141  2867  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'current'        	;1
	142  2867  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	143  2867  DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
	144  2867  ASSIGN_DIM/147            ?64       16?8                 ?2670194176         	;0
	145  2867  OP_DATA/137               ?0        $82                  ?0                  	;0
	146  2868  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'next'           	;1
	147  2868  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	148  2868  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
	149  2868  JMPZ/43                   ?0        $83                  ?155                	;0	>>155
	150  2868  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'key'            	;1
	151  2868  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	152  2868  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
	153  2868  QM_ASSIGN/22              #85=      $84                  ?0                  	;0
	154  2868  JMP/42                    ?0        ?156                 ?0                  	;0	>>156
	155  2868  QM_ASSIGN/22              #85=      51:NULL              ?0                  	;0	<<149
	156  2868  ASSIGN/38                 ?69       16?13                #85                 	;0	<<154
	157  2868  CONT/255                  ?0        ?219                 0:1                 	;0
	158  2869  ADD/1                     #87=      16?16                52:1                	;0	<<139
	159  2869  IS_EQUAL/17               #88=      16?15                #87                 	;0
	160  2869  JMPNZ_EX/47               #88=      #88                  ?163                	;0	>>163
	161  2869  IS_IDENTICAL/15           #89=      16?13                53:NULL             	;0
	162  2869  BOOL/52                   #88=      #89                  ?0                  	;0
	163  2869  JMPZ/43                   ?0        #88                  ?182                	;0	>>182	<<160
	164  2870  ASSIGN/38                 ?73       16?16                16?15               	;0
	165  2871  INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'current'        	;1
	166  2871  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	167  2871  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	168  2871  ASSIGN_DIM/147            ?74       16?8                 ?2670194000         	;0
	169  2871  OP_DATA/137               ?0        $92                  ?0                  	;0
	170  2872  INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'next'           	;1
	171  2872  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	172  2872  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
	173  2872  JMPZ/43                   ?0        $93                  ?179                	;0	>>179
	174  2872  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'key'            	;1
	175  2872  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	176  2872  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
	177  2872  QM_ASSIGN/22              #95=      $94                  ?0                  	;0
	178  2872  JMP/42                    ?0        ?180                 ?0                  	;0	>>180
	179  2872  QM_ASSIGN/22              #95=      60:NULL              ?0                  	;0	<<173
	180  2872  ASSIGN/38                 ?79       16?15                #95                 	;0	<<178
	181  2872  CONT/255                  ?0        ?219                 0:1                 	;0
	182  2873  IS_SMALLER/19             #97=      16?13                16?15               	;0	<<163
	183  2873  JMPZ/43                   ?0        #97                  ?202                	;0	>>202
	184  2874  ASSIGN/38                 ?81       16?14                16?13               	;0
	185  2875  INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'current'        	;1
	186  2875  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	187  2875  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
	188  2875  ASSIGN_DIM/147            ?82       16?8                 ?2670193824         	;0
	189  2875  OP_DATA/137               ?0        $100                 ?0                  	;0
	190  2876  INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'next'           	;1
	191  2876  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	192  2876  DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
	193  2876  JMPZ/43                   ?0        $101                 ?199                	;0	>>199
	194  2876  INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'key'            	;1
	195  2876  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	196  2876  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
	197  2876  QM_ASSIGN/22              #103=     $102                 ?0                  	;0
	198  2876  JMP/42                    ?0        ?200                 ?0                  	;0	>>200
	199  2876  QM_ASSIGN/22              #103=     67:NULL              ?0                  	;0	<<193
	200  2876  ASSIGN/38                 ?87       16?13                #103                	;0	<<198
	201  2876  CONT/255                  ?0        ?219                 0:1                 	;0
	202  2878  ASSIGN/38                 ?88       16?16                16?15               	;0	<<183
	203  2879  INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'current'        	;1
	204  2879  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	205  2879  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
	206  2879  ASSIGN_DIM/147            ?89       16?8                 ?2670193824         	;0
	207  2879  OP_DATA/137               ?0        $107                 ?0                  	;0
	208  2880  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'next'           	;1
	209  2880  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	210  2880  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
	211  2880  JMPZ/43                   ?0        $108                 ?217                	;0	>>217
	212  2880  INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'key'            	;1
	213  2880  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	214  2880  DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
	215  2880  QM_ASSIGN/22              #110=     $109                 ?0                  	;0
	216  2880  JMP/42                    ?0        ?218                 ?0                  	;0	>>218
	217  2880  QM_ASSIGN/22              #110=     74:NULL              ?0                  	;0	<<211
	218  2880  ASSIGN/38                 ?94       16?15                #110                	;0	<<216
	219  2863  IS_NOT_IDENTICAL/16       #112=     16?13                75:NULL             	;0	<<133
	220  2863  JMPNZ_EX/47               #112=     #112                 ?223                	;0	>>223
	221  2863  IS_NOT_IDENTICAL/16       #113=     16?15                76:NULL             	;0
	222  2863  BOOL/52                   #112=     #113                 ?0                  	;0
	223  2863  JMPNZ/44                  ?0        #112                 ?134                	;0	>>134	<<220
	224  2884  JMP/42                    ?0        ?235                 ?0                  	;0	>>235
	225  2885  INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'sprintf'        	;2	<<236
	226  2885  SEND_VAL_EX/116           ?80       79:'%03d- '          ?1                  	;0
	227  2885  ADD/1                     #115=     16?4                 80:1                	;0
	228  2885  SEND_VAL_EX/116           ?96       #115                 ?2                  	;0
	229  2885  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
	230  2885  POST_INC/36               #117=     16?4                 ?0                  	;0
	231  2885  FETCH_DIM_R/81            $118=     16?3                 #117                	;0
	232  2885  CONCAT/8                  #119=     $116                 $118                	;0
	233  2885  ASSIGN_DIM/147            ?97       16?8                 ?28401696           	;0
	234  2885  OP_DATA/137               ?0        #119                 ?0                  	;0
	235  2884  IS_SMALLER/19             #120=     16?4                 16?5                	;0	<<224
	236  2884  JMPNZ/44                  ?0        #120                 ?225                	;0	>>225
	237  2888  JMP/42                    ?0        ?248                 ?0                  	;0	>>248
	238  2889  INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'sprintf'        	;2	<<249
	239  2889  SEND_VAL_EX/116           ?80       83:'%03d+ '          ?1                  	;0
	240  2889  ADD/1                     #122=     16?6                 84:1                	;0
	241  2889  SEND_VAL_EX/116           ?96       #122                 ?2                  	;0
	242  2889  DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
	243  2889  POST_INC/36               #124=     16?6                 ?0                  	;0
	244  2889  FETCH_DIM_R/81            $125=     16?1                 #124                	;0
	245  2889  CONCAT/8                  #126=     $123                 $125                	;0
	246  2889  ASSIGN_DIM/147            ?104      16?8                 ?0                  	;0
	247  2889  OP_DATA/137               ?0        #126                 ?0                  	;0
	248  2888  IS_SMALLER/19             #127=     16?6                 16?7                	;0	<<237
	249  2888  JMPNZ/44                  ?0        #127                 ?238                	;0	>>238
	250  2892  RETURN/62                 ?0        16?8                 ?0                  	;0
	251  2893  NOP/0                     ?0        85:NULL              ?0                  	;4294967295
	*/
}

function generate_diff($wanted, $wanted_re, $output)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    2895  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    2895  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    2895  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    2897  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'explode'         	;2
	4    2897  SEND_VAL_EX/116           ?80       2:'
'                ?1                  	;0
	5    2897  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	6    2897  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	7    2897  ASSIGN/38                 ?1        16?3                 $7                  	;0
	8    2898  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'explode'         	;2
	9    2898  SEND_VAL_EX/116           ?80       5:'
'                ?1                  	;0
	10   2898  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	11   2898  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	12   2898  ASSIGN/38                 ?3        16?4                 $9                  	;0
	13   2899  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'is_null'         	;1
	14   2899  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	15   2899  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	16   2899  JMPZ/43                   ?0        $11                  ?19                 	;0	>>19
	17   2899  QM_ASSIGN/22              #12=      16?3                 ?0                  	;0
	18   2899  JMP/42                    ?0        ?24                  ?0                  	;0	>>24
	19   2899  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'explode'         	;2	<<16
	20   2899  SEND_VAL_EX/116           ?80       10:'
'               ?1                  	;0
	21   2899  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	22   2899  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	23   2899  QM_ASSIGN/22              #12=      $13                  ?0                  	;0
	24   2899  ASSIGN/38                 ?7        16?5                 #12                 	;0	<<18
	25   2900  INIT_FCALL/61             ?0        ?2128                11:'generate_array_diff'	;4
	26   2900  SEND_VAR/117              ?80       16?5                 ?1                  	;0
	27   2900  SEND_VAR/117              ?96       16?4                 ?2                  	;0
	28   2900  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'is_null'        	;1
	29   2900  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	30   2900  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	31   2900  BOOL_NOT/13               #16=      $15                  ?0                  	;0
	32   2900  SEND_VAL/65               ?112      #16                  ?3                  	;0
	33   2900  SEND_VAR/117              ?128      16?3                 ?4                  	;0
	34   2900  DO_FCALL/60               $17=      ?0                   ?0                  	;0
	35   2900  ASSIGN/38                 ?11       16?6                 $17                 	;0
	36   2902  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'implode'        	;2
	37   2902  FETCH_CONSTANT/99         #19=      ?0                   16:'PHP_EOL'        	;16
	38   2902  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
	39   2902  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
	40   2902  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	41   2902  RETURN/62                 ?0        $20                  ?0                  	;0
	42   2903  NOP/0                     ?0        19:NULL              ?0                  	;4294967295
	*/
}

function error($message)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    2905  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    2907  ROPE_INIT/54              #2=       ?0                   0:'ERROR: '         	;3
	2    2907  ROPE_ADD/55               #2=       #2                   16?0                	;1
	3    2907  ROPE_END/56               #1=       #2                   1:'
'               	;2
	4    2907  ECHO/40                   ?0        #1                   ?0                  	;0
	5    2908  EXIT/79                   ?0        2:1                  ?0                  	;0
	6    2909  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
	*/
}

function settings2array($settings, &$ini_settings)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    2911  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    2911  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    2913  FE_RESET_R/77             $5=       16?0                 ?43                 	;0
	3    2913  FE_FETCH_R/78             ?0        $5                   16?2                	;43	>>43	<<42
	4    2915  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'strpos'          	;2
	5    2915  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	6    2915  SEND_VAL_EX/116           ?96       2:'='                ?2                  	;0
	7    2915  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	8    2915  IS_NOT_IDENTICAL/16       #7=       $6                   3:false             	;0
	9    2915  JMPZ/43                   ?0        #7                   ?42                 	;0	>>42
	10   2916  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'explode'         	;3
	11   2916  SEND_VAL_EX/116           ?80       6:'='                ?1                  	;0
	12   2916  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	13   2916  SEND_VAL_EX/116           ?112      7:2                  ?3                  	;0
	14   2916  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	15   2916  ASSIGN/38                 ?4        16?2                 $8                  	;0
	16   2917  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'trim'            	;1
	17   2917  FETCH_DIM_FUNC_ARG/93     $10=      16?2                 10:0                	;1
	18   2917  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
	19   2917  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	20   2917  ASSIGN/38                 ?7        16?3                 $11                 	;0
	21   2918  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'trim'           	;1
	22   2918  FETCH_DIM_FUNC_ARG/93     $13=      16?2                 13:1                	;1
	23   2918  SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
	24   2918  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	25   2918  ASSIGN/38                 ?10       16?4                 $14                 	;0
	26   2920  IS_EQUAL/17               #16=      16?3                 14:'extension'      	;0
	27   2920  JMPNZ_EX/47               #16=      #16                  ?30                 	;0	>>30
	28   2920  IS_EQUAL/17               #17=      16?3                 15:'zend_extension' 	;0
	29   2920  BOOL/52                   #16=      #17                  ?0                  	;0
	30   2920  JMPZ/43                   ?0        #16                  ?40                 	;0	>>40	<<27
	31   2922  ISSET_ISEMPTY_DIM_OBJ/115 #18=      16?1                 16?3                	;33554432
	32   2922  BOOL_NOT/13               #19=      #18                  ?0                  	;0
	33   2922  JMPZ/43                   ?0        #19                  ?36                 	;0	>>36
	34   2923  ASSIGN_DIM/147            ?15       16?1                 16?3                	;0
	35   2923  OP_DATA/137               ?0        16:array (
)         ?0                  	;0
	36   2926  FETCH_DIM_W/84            $21=      16?1                 16?3                	;0	<<33
	37   2926  ASSIGN_DIM/147            ?17       $21                  ?1665098032         	;0
	38   2926  OP_DATA/137               ?0        16?4                 ?0                  	;0
	39   2926  JMP/42                    ?0        ?42                  ?0                  	;0	>>42
	40   2929  ASSIGN_DIM/147            ?18       16?1                 16?3                	;0	<<30
	41   2929  OP_DATA/137               ?0        16?4                 ?0                  	;0
	42   2929  JMP/42                    ?0        ?3                   ?0                  	;0	>>3	<<9,39
	43   2929  FE_FREE/127               ?0        $5                   ?0                  	;0	<<2
	44   2933  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
	*/
}

function settings2params($ini_settings)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    2935  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    2937  ASSIGN/38                 ?0        16?1                 0:''                	;0
	2    2939  FE_RESET_R/77             $7=       16?0                 ?65                 	;0
	3    2939  FE_FETCH_R/78             #8=       $7                   16?2                	;65	>>65	<<64
	4    2939  ASSIGN/38                 ?3        16?3                 #8                  	;0
	5    2941  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_array'        	;1
	6    2941  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	7    2941  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	8    2941  JMPZ/43                   ?0        $10                  ?24                 	;0	>>24
	9    2942  FE_RESET_R/77             $11=      16?2                 ?22                 	;0
	10   2942  FE_FETCH_R/78             ?0        $11                  16?4                	;22	>>22	<<21
	11   2943  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'addslashes'      	;1
	12   2943  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	13   2943  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	14   2943  ASSIGN/38                 ?7        16?4                 $12                 	;0
	15   2944  ROPE_INIT/54              #15=      ?0                   5:' -d "'           	;5
	16   2944  ROPE_ADD/55               #15=      #15                  16?3                	;1
	17   2944  ROPE_ADD/55               #15=      #15                  6:'='               	;2
	18   2944  ROPE_ADD/55               #15=      #15                  16?4                	;3
	19   2944  ROPE_END/56               #14=      #15                  7:'"'               	;4
	20   2944  ASSIGN_CONCAT/30          ?12       16?1                 #14                 	;0
	21   2944  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
	22   2944  FE_FREE/127               ?0        $11                  ?0                  	;0	<<9
	23   2944  JMP/42                    ?0        ?64                  ?0                  	;0	>>64
	24   2947  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'substr'          	;3	<<8
	25   2947  FETCH_CONSTANT/99         #19=      ?0                   10:'PHP_OS'         	;16
	26   2947  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
	27   2947  SEND_VAL_EX/116           ?96       13:0                 ?2                  	;0
	28   2947  SEND_VAL_EX/116           ?112      14:3                 ?3                  	;0
	29   2947  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	30   2947  IS_EQUAL/17               #21=      $20                  15:'WIN'            	;0
	31   2947  JMPZ_EX/46                #21=      #21                  ?35                 	;0	>>35
	32   2947  ISSET_ISEMPTY_CV/197      #22=      16?2                 ?0                  	;16777216
	33   2947  BOOL_NOT/13               #23=      #22                  ?0                  	;0
	34   2947  BOOL/52                   #21=      #23                  ?0                  	;0
	35   2947  JMPZ_EX/46                #21=      #21                  ?39                 	;0	>>39	<<31
	36   2947  FETCH_DIM_R/81            $24=      16?2                 16:0                	;0
	37   2947  IS_EQUAL/17               #25=      $24                  17:'"'              	;0
	38   2947  BOOL/52                   #21=      #25                  ?0                  	;0
	39   2947  JMPZ/43                   ?0        #21                  ?54                 	;0	>>54	<<35
	40   2948  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'strlen'         	;1
	41   2948  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	42   2948  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	43   2948  ASSIGN/38                 ?21       16?5                 $26                 	;0
	44   2950  SUB/2                     #28=      16?5                 20:1                	;0
	45   2950  FETCH_DIM_R/81            $29=      16?2                 #28                 	;0
	46   2950  IS_EQUAL/17               #30=      $29                  21:'"'              	;0
	47   2950  JMPZ/43                   ?0        #30                  ?53                 	;0	>>53
	48   2951  ASSIGN_DIM/147            ?25       16?2                 22:0                	;0
	49   2951  OP_DATA/137               ?0        23:'\''              ?0                  	;0
	50   2952  SUB/2                     #32=      16?5                 24:1                	;0
	51   2952  ASSIGN_DIM/147            ?27       16?2                 #32                 	;0
	52   2952  OP_DATA/137               ?0        25:'\''              ?0                  	;0
	53   2952  JMP/42                    ?0        ?58                  ?0                  	;0	>>58	<<47
	54   2955  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'addslashes'     	;1	<<39
	55   2955  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	56   2955  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
	57   2955  ASSIGN/38                 ?29       16?2                 $34                 	;0
	58   2958  ROPE_INIT/54              #37=      ?0                   28:' -d "'          	;5	<<53
	59   2958  ROPE_ADD/55               #37=      #37                  16?3                	;1
	60   2958  ROPE_ADD/55               #37=      #37                  29:'='              	;2
	61   2958  ROPE_ADD/55               #37=      #37                  16?2                	;3
	62   2958  ROPE_END/56               #36=      #37                  30:'"'              	;4
	63   2958  ASSIGN_CONCAT/30          ?34       16?1                 #36                 	;0
	64   2958  JMP/42                    ?0        ?3                   ?0                  	;0	>>3	<<23
	65   2958  FE_FREE/127               ?0        $7                   ?0                  	;0	<<2
	66   2962  RETURN/62                 ?0        16?1                 ?0                  	;0
	67   2963  NOP/0                     ?0        31:NULL              ?0                  	;4294967295
	*/
}

function compute_summary()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    2967  BIND_GLOBAL/168           ?0        16?0                 0:'n_total'         	;0
	1    2967  BIND_GLOBAL/168           ?0        16?1                 1:'test_results'    	;0
	2    2967  BIND_GLOBAL/168           ?0        16?2                 2:'ignored_by_ext'  	;0
	3    2967  BIND_GLOBAL/168           ?0        16?3                 3:'sum_results'     	;0
	4    2967  BIND_GLOBAL/168           ?0        16?4                 4:'percent_results' 	;0
	5    2969  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'count'           	;1
	6    2969  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	7    2969  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	8    2969  ASSIGN/38                 ?1        16?0                 $7                  	;0
	9    2970  ASSIGN_ADD/23             ?2        16?0                 16?2                	;0
	10   2972  ASSIGN/38                 ?3        16?3                 7:array (
  'PASSED' => 0,
  'WARNED' => 0,
  'SKIPPED' => 0,
  'FAILED' => 0,
  'BORKED' => 0,
  'LEAKED' => 0,
  'XFAILED' => 0,
  'XLEAKED' => 0,
)	;0
	11   2982  FE_RESET_R/77             $11=      16?1                 ?17                 	;0
	12   2982  FE_FETCH_R/78             ?0        $11                  16?5                	;17	>>17	<<16
	13   2983  FETCH_DIM_RW/87           $12=      16?3                 16?5                	;0
	14   2983  POST_INC/36               #13=      $12                  ?0                  	;0
	15   2983  FREE/70                   ?0        #13                  ?0                  	;0
	16   2983  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
	17   2983  FE_FREE/127               ?0        $11                  ?0                  	;0	<<11
	18   2986  ASSIGN_ADD/23             ?7        16?3                 8:'SKIPPED'         	;147
	19   2986  OP_DATA/137               ?0        16?2                 ?0                  	;0
	20   2987  ASSIGN/38                 ?8        16?4                 9:array (
)         	;0
	21   2989  FE_RESET_R/77             $16=      16?3                 ?29                 	;0
	22   2989  FE_FETCH_R/78             #17=      $16                  16?6                	;29	>>29	<<28
	23   2989  ASSIGN/38                 ?11       16?5                 #17                 	;0
	24   2990  MUL/3                     #20=      10:100.0             16?6                	;0
	25   2990  DIV/4                     #21=      #20                  16?0                	;0
	26   2990  ASSIGN_DIM/147            ?12       16?4                 16?5                	;0
	27   2990  OP_DATA/137               ?0        #21                  ?0                  	;0
	28   2990  JMP/42                    ?0        ?22                  ?0                  	;0	>>22
	29   2990  FE_FREE/127               ?0        $16                  ?0                  	;0	<<21
	30   2992  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
	*/
}
function {closure}($a, $b)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3064  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3064  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    3065  FETCH_DIM_R/81            $2=       16?0                 0:'info'            	;0
	3    3065  FETCH_DIM_R/81            $3=       16?1                 1:'info'            	;0
	4    3065  IS_SMALLER/19             #4=       $2                   $3                  	;0
	5    3065  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
	6    3065  QM_ASSIGN/22              #5=       2:1                  ?0                  	;0
	7    3065  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
	8    3065  QM_ASSIGN/22              #5=       3:-1                 ?0                  	;0	<<5
	9    3065  RETURN/62                 ?0        #5                   ?0                  	;0	<<7
	10   3066  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
	*/
}
function get_summary($show_ext_summary, $show_html)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    2994  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    2994  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    2996  BIND_GLOBAL/168           ?0        16?2                 0:'exts_skipped'    	;0
	3    2996  BIND_GLOBAL/168           ?0        16?3                 1:'exts_tested'     	;0
	4    2996  BIND_GLOBAL/168           ?0        16?4                 2:'n_total'         	;0
	5    2996  BIND_GLOBAL/168           ?0        16?5                 3:'sum_results'     	;0
	6    2996  BIND_GLOBAL/168           ?0        16?6                 4:'percent_results' 	;0
	7    2996  BIND_GLOBAL/168           ?0        16?7                 5:'end_time'        	;0
	8    2996  BIND_GLOBAL/168           ?0        16?8                 6:'start_time'      	;0
	9    2996  BIND_GLOBAL/168           ?0        16?9                 7:'failed_test_summary'	;0
	10   2996  BIND_GLOBAL/168           ?0        16?10                8:'PHP_FAILED_TESTS'	;0
	11   2996  BIND_GLOBAL/168           ?0        16?11                9:'valgrind'        	;0
	12   2998  FETCH_DIM_R/81            $21=      16?5                 10:'SKIPPED'        	;0
	13   2998  SUB/2                     #22=      16?4                 $21                 	;0
	14   2998  FETCH_DIM_R/81            $23=      16?5                 11:'BORKED'         	;0
	15   2998  SUB/2                     #24=      #22                  $23                 	;0
	16   2998  ASSIGN/38                 ?4        16?12                #24                 	;0
	17   3000  JMPZ/43                   ?0        16?12                ?43                 	;0	>>43
	18   3001  FETCH_DIM_R/81            $26=      16?5                 12:'WARNED'         	;0
	19   3001  MUL/3                     #27=      13:100.0             $26                 	;0
	20   3001  DIV/4                     #28=      #27                  16?12               	;0
	21   3001  ASSIGN/38                 ?8        16?13                #28                 	;0
	22   3002  FETCH_DIM_R/81            $30=      16?5                 14:'FAILED'         	;0
	23   3002  MUL/3                     #31=      15:100.0             $30                 	;0
	24   3002  DIV/4                     #32=      #31                  16?12               	;0
	25   3002  ASSIGN/38                 ?12       16?14                #32                 	;0
	26   3003  FETCH_DIM_R/81            $34=      16?5                 16:'XFAILED'        	;0
	27   3003  MUL/3                     #35=      17:100.0             $34                 	;0
	28   3003  DIV/4                     #36=      #35                  16?12               	;0
	29   3003  ASSIGN/38                 ?16       16?15                #36                 	;0
	30   3004  FETCH_DIM_R/81            $38=      16?5                 18:'XLEAKED'        	;0
	31   3004  MUL/3                     #39=      19:100.0             $38                 	;0
	32   3004  DIV/4                     #40=      #39                  16?12               	;0
	33   3004  ASSIGN/38                 ?20       16?16                #40                 	;0
	34   3005  FETCH_DIM_R/81            $42=      16?5                 20:'LEAKED'         	;0
	35   3005  MUL/3                     #43=      21:100.0             $42                 	;0
	36   3005  DIV/4                     #44=      #43                  16?12               	;0
	37   3005  ASSIGN/38                 ?24       16?17                #44                 	;0
	38   3006  FETCH_DIM_R/81            $46=      16?5                 22:'PASSED'         	;0
	39   3006  MUL/3                     #47=      23:100.0             $46                 	;0
	40   3006  DIV/4                     #48=      #47                  16?12               	;0
	41   3006  ASSIGN/38                 ?28       16?18                #48                 	;0
	42   3006  JMP/42                    ?0        ?49                  ?0                  	;0	>>49
	43   3008  ASSIGN/38                 $50=      16?16                24:0                	;0	<<17
	44   3008  ASSIGN/38                 $51=      16?15                $50                 	;0
	45   3008  ASSIGN/38                 $52=      16?17                $51                 	;0
	46   3008  ASSIGN/38                 $53=      16?18                $52                 	;0
	47   3008  ASSIGN/38                 $54=      16?14                $53                 	;0
	48   3008  ASSIGN/38                 ?34       16?13                $54                 	;0
	49   3011  ASSIGN/38                 ?35       16?19                25:''               	;0	<<42
	50   3013  JMPZ/43                   ?0        16?1                 ?52                 	;0	>>52
	51   3014  ASSIGN_CONCAT/30          ?36       16?19                26:'<pre>
'         	;0
	52   3017  JMPZ/43                   ?0        16?0                 ?66                 	;0	>>66	<<50
	53   3022  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'sprintf'        	;2
	54   3022  SEND_VAL_EX/116           ?80       29:'%4d'             ?1                  	;0
	55   3022  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	56   3022  DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
	57   3022  CONCAT/8                  #59=      30:'
=====================================================================
TEST RESULT SUMMARY
---------------------------------------------------------------------
Exts skipped    : ' $58                 	;0
	58   3022  CONCAT/8                  #60=      #59                  31:'
Exts tested     : '	;0
	59   3023  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'sprintf'        	;2
	60   3023  SEND_VAL_EX/116           ?80       34:'%4d'             ?1                  	;0
	61   3023  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	62   3023  DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
	63   3023  CONCAT/8                  #62=      #60                  $61                 	;0
	64   3023  CONCAT/8                  #63=      #62                  35:'
---------------------------------------------------------------------
'	;0
	65   3023  ASSIGN_CONCAT/30          ?43       16?19                #63                 	;0
	66   3029  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'sprintf'        	;2	<<52
	67   3029  SEND_VAL_EX/116           ?80       38:'%4d'             ?1                  	;0
	68   3029  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	69   3029  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
	70   3029  CONCAT/8                  #66=      39:'
Number of tests : ' $65                 	;0
	71   3029  CONCAT/8                  #67=      #66                  40:'          '     	;0
	72   3029  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'sprintf'        	;2
	73   3029  SEND_VAL_EX/116           ?80       43:'%8d'             ?1                  	;0
	74   3029  SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
	75   3029  DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
	76   3029  CONCAT/8                  #69=      #67                  $68                 	;0
	77   3029  ASSIGN_CONCAT/30          ?49       16?19                #69                 	;0
	78   3031  FETCH_DIM_R/81            $71=      16?5                 44:'BORKED'         	;0
	79   3031  JMPZ/43                   ?0        $71                  ?90                 	;0	>>90
	80   3033  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'sprintf'        	;3
	81   3033  SEND_VAL_EX/116           ?80       47:'%4d (%5.1f%%)'   ?1                  	;0
	82   3033  FETCH_DIM_FUNC_ARG/93     $72=      16?5                 48:'BORKED'         	;2
	83   3033  SEND_VAR_EX/66            ?96       $72                  ?2                  	;0
	84   3033  FETCH_DIM_FUNC_ARG/93     $73=      16?6                 49:'BORKED'         	;3
	85   3033  SEND_VAR_EX/66            ?112      $73                  ?3                  	;0
	86   3033  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
	87   3033  CONCAT/8                  #75=      50:'
Tests borked    : ' $74                 	;0
	88   3033  CONCAT/8                  #76=      #75                  51:' --------'      	;0
	89   3033  ASSIGN_CONCAT/30          ?56       16?19                #76                 	;0
	90   3037  INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'sprintf'        	;3	<<79
	91   3037  SEND_VAL_EX/116           ?80       54:'%4d (%5.1f%%)'   ?1                  	;0
	92   3037  FETCH_DIM_FUNC_ARG/93     $78=      16?5                 55:'SKIPPED'        	;2
	93   3037  SEND_VAR_EX/66            ?96       $78                  ?2                  	;0
	94   3037  FETCH_DIM_FUNC_ARG/93     $79=      16?6                 56:'SKIPPED'        	;3
	95   3037  SEND_VAR_EX/66            ?112      $79                  ?3                  	;0
	96   3037  DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
	97   3037  CONCAT/8                  #81=      57:'
Tests skipped   : ' $80                 	;0
	98   3037  CONCAT/8                  #82=      #81                  58:' --------
Tests warned    : '	;0
	99   3038  INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'sprintf'        	;3
	100  3038  SEND_VAL_EX/116           ?80       61:'%4d (%5.1f%%)'   ?1                  	;0
	101  3038  FETCH_DIM_FUNC_ARG/93     $83=      16?5                 62:'WARNED'         	;2
	102  3038  SEND_VAR_EX/66            ?96       $83                  ?2                  	;0
	103  3038  FETCH_DIM_FUNC_ARG/93     $84=      16?6                 63:'WARNED'         	;3
	104  3038  SEND_VAR_EX/66            ?112      $84                  ?3                  	;0
	105  3038  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
	106  3038  CONCAT/8                  #86=      #82                  $85                 	;0
	107  3038  CONCAT/8                  #87=      #86                  64:' '              	;0
	108  3038  INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'sprintf'        	;2
	109  3038  SEND_VAL_EX/116           ?80       67:'(%5.1f%%)'       ?1                  	;0
	110  3038  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
	111  3038  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
	112  3038  CONCAT/8                  #89=      #87                  $88                 	;0
	113  3038  CONCAT/8                  #90=      #89                  68:'
Tests failed    : '	;0
	114  3039  INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'sprintf'        	;3
	115  3039  SEND_VAL_EX/116           ?80       71:'%4d (%5.1f%%)'   ?1                  	;0
	116  3039  FETCH_DIM_FUNC_ARG/93     $91=      16?5                 72:'FAILED'         	;2
	117  3039  SEND_VAR_EX/66            ?96       $91                  ?2                  	;0
	118  3039  FETCH_DIM_FUNC_ARG/93     $92=      16?6                 73:'FAILED'         	;3
	119  3039  SEND_VAR_EX/66            ?112      $92                  ?3                  	;0
	120  3039  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
	121  3039  CONCAT/8                  #94=      #90                  $93                 	;0
	122  3039  CONCAT/8                  #95=      #94                  74:' '              	;0
	123  3039  INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'sprintf'        	;2
	124  3039  SEND_VAL_EX/116           ?80       77:'(%5.1f%%)'       ?1                  	;0
	125  3039  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
	126  3039  DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
	127  3039  CONCAT/8                  #97=      #95                  $96                 	;0
	128  3039  ASSIGN_CONCAT/30          ?77       16?19                #97                 	;0
	129  3041  FETCH_DIM_R/81            $99=      16?5                 78:'XFAILED'        	;0
	130  3041  JMPZ/43                   ?0        $99                  ?146                	;0	>>146
	131  3043  INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'sprintf'        	;3
	132  3043  SEND_VAL_EX/116           ?80       81:'%4d (%5.1f%%)'   ?1                  	;0
	133  3043  FETCH_DIM_FUNC_ARG/93     $100=     16?5                 82:'XFAILED'        	;2
	134  3043  SEND_VAR_EX/66            ?96       $100                 ?2                  	;0
	135  3043  FETCH_DIM_FUNC_ARG/93     $101=     16?6                 83:'XFAILED'        	;3
	136  3043  SEND_VAR_EX/66            ?112      $101                 ?3                  	;0
	137  3043  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
	138  3043  CONCAT/8                  #103=     84:'
Expected fail   : ' $102                	;0
	139  3043  CONCAT/8                  #104=     #103                 85:' '              	;0
	140  3043  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'sprintf'        	;2
	141  3043  SEND_VAL_EX/116           ?80       88:'(%5.1f%%)'       ?1                  	;0
	142  3043  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
	143  3043  DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
	144  3043  CONCAT/8                  #106=     #104                 $105                	;0
	145  3043  ASSIGN_CONCAT/30          ?86       16?19                #106                	;0
	146  3046  JMPZ/43                   ?0        16?11                ?179                	;0	>>179	<<130
	147  3048  INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'sprintf'        	;3
	148  3048  SEND_VAL_EX/116           ?80       91:'%4d (%5.1f%%)'   ?1                  	;0
	149  3048  FETCH_DIM_FUNC_ARG/93     $108=     16?5                 92:'LEAKED'         	;2
	150  3048  SEND_VAR_EX/66            ?96       $108                 ?2                  	;0
	151  3048  FETCH_DIM_FUNC_ARG/93     $109=     16?6                 93:'LEAKED'         	;3
	152  3048  SEND_VAR_EX/66            ?112      $109                 ?3                  	;0
	153  3048  DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
	154  3048  CONCAT/8                  #111=     94:'
Tests leaked    : ' $110                	;0
	155  3048  CONCAT/8                  #112=     #111                 95:' '              	;0
	156  3048  INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'sprintf'        	;2
	157  3048  SEND_VAL_EX/116           ?80       98:'(%5.1f%%)'       ?1                  	;0
	158  3048  SEND_VAR_EX/66            ?96       16?17                ?2                  	;0
	159  3048  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
	160  3048  CONCAT/8                  #114=     #112                 $113                	;0
	161  3048  ASSIGN_CONCAT/30          ?94       16?19                #114                	;0
	162  3049  FETCH_DIM_R/81            $116=     16?5                 99:'XLEAKED'        	;0
	163  3049  JMPZ/43                   ?0        $116                 ?179                	;0	>>179
	164  3051  INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'sprintf'       	;3
	165  3051  SEND_VAL_EX/116           ?80       102:'%4d (%5.1f%%)'  ?1                  	;0
	166  3051  FETCH_DIM_FUNC_ARG/93     $117=     16?5                 103:'XLEAKED'       	;2
	167  3051  SEND_VAR_EX/66            ?96       $117                 ?2                  	;0
	168  3051  FETCH_DIM_FUNC_ARG/93     $118=     16?6                 104:'XLEAKED'       	;3
	169  3051  SEND_VAR_EX/66            ?112      $118                 ?3                  	;0
	170  3051  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
	171  3051  CONCAT/8                  #120=     105:'
Expected leak   : ' $119                	;0
	172  3051  CONCAT/8                  #121=     #120                 106:' '             	;0
	173  3051  INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'sprintf'       	;2
	174  3051  SEND_VAL_EX/116           ?80       109:'(%5.1f%%)'      ?1                  	;0
	175  3051  SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
	176  3051  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
	177  3051  CONCAT/8                  #123=     #121                 $122                	;0
	178  3051  ASSIGN_CONCAT/30          ?103      16?19                #123                	;0
	179  3056  INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'sprintf'       	;3	<<146,163
	180  3056  SEND_VAL_EX/116           ?80       112:'%4d (%5.1f%%)'  ?1                  	;0
	181  3056  FETCH_DIM_FUNC_ARG/93     $125=     16?5                 113:'PASSED'        	;2
	182  3056  SEND_VAR_EX/66            ?96       $125                 ?2                  	;0
	183  3056  FETCH_DIM_FUNC_ARG/93     $126=     16?6                 114:'PASSED'        	;3
	184  3056  SEND_VAR_EX/66            ?112      $126                 ?3                  	;0
	185  3056  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
	186  3056  CONCAT/8                  #128=     115:'
Tests passed    : ' $127                	;0
	187  3056  CONCAT/8                  #129=     #128                 116:' '             	;0
	188  3056  INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'sprintf'       	;2
	189  3056  SEND_VAL_EX/116           ?80       119:'(%5.1f%%)'      ?1                  	;0
	190  3056  SEND_VAR_EX/66            ?96       16?18                ?2                  	;0
	191  3056  DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
	192  3056  CONCAT/8                  #131=     #129                 $130                	;0
	193  3056  CONCAT/8                  #132=     #131                 120:'
---------------------------------------------------------------------
Time taken      : '	;0
	194  3058  INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'sprintf'       	;2
	195  3058  SEND_VAL_EX/116           ?80       123:'%4d seconds'    ?1                  	;0
	196  3058  SUB/2                     #133=     16?7                 16?8                	;0
	197  3058  SEND_VAL_EX/116           ?96       #133                 ?2                  	;0
	198  3058  DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
	199  3058  CONCAT/8                  #135=     #132                 $134                	;0
	200  3058  CONCAT/8                  #136=     #135                 124:'
=====================================================================
'	;0
	201  3058  ASSIGN_CONCAT/30          ?116      16?19                #136                	;0
	202  3061  ASSIGN/38                 ?117      16?9                 125:''              	;0
	203  3063  INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'count'         	;1
	204  3063  FETCH_DIM_FUNC_ARG/93     $139=     16?10                128:'SLOW'          	;1
	205  3063  SEND_VAR_EX/66            ?80       $139                 ?1                  	;0
	206  3063  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
	207  3063  JMPZ/43                   ?0        $140                 ?230                	;0	>>230
	208  3064  INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'usort'         	;2
	209  3064  FETCH_DIM_FUNC_ARG/93     $141=     16?10                131:'SLOW'          	;1
	210  3064  SEND_VAR_EX/66            ?80       $141                 ?1                  	;0
	211  3064  DECLARE_LAMBDA_FUNCTION/153 #142=     132:'' . "\0" . '{closure}/home/xui_main/bin/php/lib/php/build/run-tests.php0x7f8d6506157b' ?0                  	;0
	212  3066  SEND_VAL_EX/116           ?96       #142                 ?2                  	;0
	213  3066  DO_FCALL_BY_NAME/131      ?122      ?0                   ?0                  	;0
	214  3068  ASSIGN_CONCAT/30          ?123      16?9                 133:'
=====================================================================
SLOW TEST SUMMARY
---------------------------------------------------------------------
'	;0
	215  3073  FETCH_DIM_R/81            $145=     16?10                134:'SLOW'          	;0
	216  3073  FE_RESET_R/77             $146=     $145                 ?228                	;0
	217  3073  FE_FETCH_R/78             ?0        $146                 16?20               	;228	>>228	<<227
	218  3074  INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'sprintf'       	;2
	219  3074  SEND_VAL_EX/116           ?80       137:'(%.3f s) '      ?1                  	;0
	220  3074  FETCH_DIM_FUNC_ARG/93     $147=     16?20                138:'info'          	;2
	221  3074  SEND_VAR_EX/66            ?96       $147                 ?2                  	;0
	222  3074  DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
	223  3074  FETCH_DIM_R/81            $149=     16?20                139:'test_name'     	;0
	224  3074  CONCAT/8                  #150=     $148                 $149                	;0
	225  3074  CONCAT/8                  #151=     #150                 140:'
'             	;0
	226  3074  ASSIGN_CONCAT/30          ?131      16?9                 #151                	;0
	227  3074  JMP/42                    ?0        ?217                 ?0                  	;0	>>217
	228  3074  FE_FREE/127               ?0        $146                 ?0                  	;0	<<216
	229  3076  ASSIGN_CONCAT/30          ?132      16?9                 141:'=====================================================================
'	;0
	230  3079  INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'count'         	;1	<<207
	231  3079  FETCH_DIM_FUNC_ARG/93     $154=     16?10                144:'XFAILED'       	;1
	232  3079  SEND_VAR_EX/66            ?80       $154                 ?1                  	;0
	233  3079  DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
	234  3079  JMPZ/43                   ?0        $155                 ?247                	;0	>>247
	235  3080  ASSIGN_CONCAT/30          ?135      16?9                 145:'
=====================================================================
EXPECTED FAILED TEST SUMMARY
---------------------------------------------------------------------
'	;0
	236  3085  FETCH_DIM_R/81            $157=     16?10                146:'XFAILED'       	;0
	237  3085  FE_RESET_R/77             $158=     $157                 ?245                	;0
	238  3085  FE_FETCH_R/78             ?0        $158                 16?20               	;245	>>245	<<244
	239  3086  FETCH_DIM_R/81            $159=     16?20                147:'test_name'     	;0
	240  3086  FETCH_DIM_R/81            $160=     16?20                148:'info'          	;0
	241  3086  CONCAT/8                  #161=     $159                 $160                	;0
	242  3086  CONCAT/8                  #162=     #161                 149:'
'             	;0
	243  3086  ASSIGN_CONCAT/30          ?142      16?9                 #162                	;0
	244  3086  JMP/42                    ?0        ?238                 ?0                  	;0	>>238
	245  3086  FE_FREE/127               ?0        $158                 ?0                  	;0	<<237
	246  3088  ASSIGN_CONCAT/30          ?143      16?9                 150:'=====================================================================
'	;0
	247  3091  INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'count'         	;1	<<234
	248  3091  FETCH_DIM_FUNC_ARG/93     $165=     16?10                153:'BORKED'        	;1
	249  3091  SEND_VAR_EX/66            ?80       $165                 ?1                  	;0
	250  3091  DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
	251  3091  JMPZ/43                   ?0        $166                 ?262                	;0	>>262
	252  3092  ASSIGN_CONCAT/30          ?146      16?9                 154:'
=====================================================================
BORKED TEST SUMMARY
---------------------------------------------------------------------
'	;0
	253  3097  FETCH_DIM_R/81            $168=     16?10                155:'BORKED'        	;0
	254  3097  FE_RESET_R/77             $169=     $168                 ?260                	;0
	255  3097  FE_FETCH_R/78             ?0        $169                 16?20               	;260	>>260	<<259
	256  3098  FETCH_DIM_R/81            $170=     16?20                156:'info'          	;0
	257  3098  CONCAT/8                  #171=     $170                 157:'
'             	;0
	258  3098  ASSIGN_CONCAT/30          ?151      16?9                 #171                	;0
	259  3098  JMP/42                    ?0        ?255                 ?0                  	;0	>>255
	260  3098  FE_FREE/127               ?0        $169                 ?0                  	;0	<<254
	261  3101  ASSIGN_CONCAT/30          ?152      16?9                 158:'=====================================================================
'	;0
	262  3104  INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'count'         	;1	<<251
	263  3104  FETCH_DIM_FUNC_ARG/93     $174=     16?10                161:'FAILED'        	;1
	264  3104  SEND_VAR_EX/66            ?80       $174                 ?1                  	;0
	265  3104  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
	266  3104  JMPZ/43                   ?0        $175                 ?279                	;0	>>279
	267  3105  ASSIGN_CONCAT/30          ?155      16?9                 162:'
=====================================================================
FAILED TEST SUMMARY
---------------------------------------------------------------------
'	;0
	268  3110  FETCH_DIM_R/81            $177=     16?10                163:'FAILED'        	;0
	269  3110  FE_RESET_R/77             $178=     $177                 ?277                	;0
	270  3110  FE_FETCH_R/78             ?0        $178                 16?20               	;277	>>277	<<276
	271  3111  FETCH_DIM_R/81            $179=     16?20                164:'test_name'     	;0
	272  3111  FETCH_DIM_R/81            $180=     16?20                165:'info'          	;0
	273  3111  CONCAT/8                  #181=     $179                 $180                	;0
	274  3111  CONCAT/8                  #182=     #181                 166:'
'             	;0
	275  3111  ASSIGN_CONCAT/30          ?162      16?9                 #182                	;0
	276  3111  JMP/42                    ?0        ?270                 ?0                  	;0	>>270
	277  3111  FE_FREE/127               ?0        $178                 ?0                  	;0	<<269
	278  3113  ASSIGN_CONCAT/30          ?163      16?9                 167:'=====================================================================
'	;0
	279  3115  INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'count'         	;1	<<266
	280  3115  FETCH_DIM_FUNC_ARG/93     $185=     16?10                170:'WARNED'        	;1
	281  3115  SEND_VAR_EX/66            ?80       $185                 ?1                  	;0
	282  3115  DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
	283  3115  JMPZ/43                   ?0        $186                 ?296                	;0	>>296
	284  3116  ASSIGN_CONCAT/30          ?166      16?9                 171:'
=====================================================================
WARNED TEST SUMMARY
---------------------------------------------------------------------
'	;0
	285  3121  FETCH_DIM_R/81            $188=     16?10                172:'WARNED'        	;0
	286  3121  FE_RESET_R/77             $189=     $188                 ?294                	;0
	287  3121  FE_FETCH_R/78             ?0        $189                 16?20               	;294	>>294	<<293
	288  3122  FETCH_DIM_R/81            $190=     16?20                173:'test_name'     	;0
	289  3122  FETCH_DIM_R/81            $191=     16?20                174:'info'          	;0
	290  3122  CONCAT/8                  #192=     $190                 $191                	;0
	291  3122  CONCAT/8                  #193=     #192                 175:'
'             	;0
	292  3122  ASSIGN_CONCAT/30          ?173      16?9                 #193                	;0
	293  3122  JMP/42                    ?0        ?287                 ?0                  	;0	>>287
	294  3122  FE_FREE/127               ?0        $189                 ?0                  	;0	<<286
	295  3125  ASSIGN_CONCAT/30          ?174      16?9                 176:'=====================================================================
'	;0
	296  3128  INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'count'         	;1	<<283
	297  3128  FETCH_DIM_FUNC_ARG/93     $196=     16?10                179:'LEAKED'        	;1
	298  3128  SEND_VAR_EX/66            ?80       $196                 ?1                  	;0
	299  3128  DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
	300  3128  JMPZ/43                   ?0        $197                 ?313                	;0	>>313
	301  3129  ASSIGN_CONCAT/30          ?177      16?9                 180:'
=====================================================================
LEAKED TEST SUMMARY
---------------------------------------------------------------------
'	;0
	302  3134  FETCH_DIM_R/81            $199=     16?10                181:'LEAKED'        	;0
	303  3134  FE_RESET_R/77             $200=     $199                 ?311                	;0
	304  3134  FE_FETCH_R/78             ?0        $200                 16?20               	;311	>>311	<<310
	305  3135  FETCH_DIM_R/81            $201=     16?20                182:'test_name'     	;0
	306  3135  FETCH_DIM_R/81            $202=     16?20                183:'info'          	;0
	307  3135  CONCAT/8                  #203=     $201                 $202                	;0
	308  3135  CONCAT/8                  #204=     #203                 184:'
'             	;0
	309  3135  ASSIGN_CONCAT/30          ?184      16?9                 #204                	;0
	310  3135  JMP/42                    ?0        ?304                 ?0                  	;0	>>304
	311  3135  FE_FREE/127               ?0        $200                 ?0                  	;0	<<303
	312  3138  ASSIGN_CONCAT/30          ?185      16?9                 185:'=====================================================================
'	;0
	313  3141  INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'count'         	;1	<<300
	314  3141  FETCH_DIM_FUNC_ARG/93     $207=     16?10                188:'XLEAKED'       	;1
	315  3141  SEND_VAR_EX/66            ?80       $207                 ?1                  	;0
	316  3141  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
	317  3141  JMPZ/43                   ?0        $208                 ?330                	;0	>>330
	318  3142  ASSIGN_CONCAT/30          ?188      16?9                 189:'
=====================================================================
EXPECTED LEAK TEST SUMMARY
---------------------------------------------------------------------
'	;0
	319  3147  FETCH_DIM_R/81            $210=     16?10                190:'XLEAKED'       	;0
	320  3147  FE_RESET_R/77             $211=     $210                 ?328                	;0
	321  3147  FE_FETCH_R/78             ?0        $211                 16?20               	;328	>>328	<<327
	322  3148  FETCH_DIM_R/81            $212=     16?20                191:'test_name'     	;0
	323  3148  FETCH_DIM_R/81            $213=     16?20                192:'info'          	;0
	324  3148  CONCAT/8                  #214=     $212                 $213                	;0
	325  3148  CONCAT/8                  #215=     #214                 193:'
'             	;0
	326  3148  ASSIGN_CONCAT/30          ?195      16?9                 #215                	;0
	327  3148  JMP/42                    ?0        ?321                 ?0                  	;0	>>321
	328  3148  FE_FREE/127               ?0        $211                 ?0                  	;0	<<320
	329  3151  ASSIGN_CONCAT/30          ?196      16?9                 194:'=====================================================================
'	;0
	330  3154  JMPZ_EX/46                #218=     16?9                 ?336                	;0	>>336	<<317
	331  3154  INIT_FCALL_BY_NAME/59     ?0        ?0                   195:'getenv'        	;1
	332  3154  SEND_VAL_EX/116           ?80       197:'NO_PHPTEST_SUMMARY' ?1                  	;0
	333  3154  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
	334  3154  BOOL_NOT/13               #220=     $219                 ?0                  	;0
	335  3154  BOOL/52                   #218=     #220                 ?0                  	;0
	336  3154  JMPZ/43                   ?0        #218                 ?338                	;0	>>338	<<330
	337  3155  ASSIGN_CONCAT/30          ?200      16?19                16?9                	;0
	338  3158  JMPZ/43                   ?0        16?1                 ?340                	;0	>>340	<<336
	339  3159  ASSIGN_CONCAT/30          ?201      16?19                198:'</pre>'        	;0
	340  3162  RETURN/62                 ?0        16?19                ?0                  	;0	<<338
	341  3163  NOP/0                     ?0        199:NULL             ?0                  	;4294967295
	*/
}

function show_start($start_time)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3165  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3167  BIND_GLOBAL/168           ?0        16?1                 0:'html_output'     	;0
	2    3167  BIND_GLOBAL/168           ?0        16?2                 1:'html_file'       	;0
	3    3169  JMPZ/43                   ?0        16?1                 ?18                 	;0	>>18
	4    3170  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'fwrite'          	;2
	5    3170  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	6    3170  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'date'            	;2
	7    3170  SEND_VAL_EX/116           ?80       6:'Y-m-d H:i:s'      ?1                  	;0
	8    3170  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	9    3170  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	10   3170  CONCAT/8                  #4=       7:'<h2>Time Start: ' $3                  	;0
	11   3170  CONCAT/8                  #5=       #4                   8:'</h2>
'          	;0
	12   3170  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
	13   3170  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
	14   3171  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'fwrite'          	;2
	15   3171  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	16   3171  SEND_VAL_EX/116           ?96       11:'<table>
'        ?2                  	;0
	17   3171  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	18   3174  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'date'           	;2	<<3
	19   3174  SEND_VAL_EX/116           ?80       14:'Y-m-d H:i:s'     ?1                  	;0
	20   3174  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	21   3174  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	22   3174  CONCAT/8                  #9=       15:'TIME START '     $8                  	;0
	23   3174  CONCAT/8                  #10=      #9                   16:'
=====================================================================
'	;0
	24   3174  ECHO/40                   ?0        #10                  ?0                  	;0
	25   3175  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
	*/
}

function show_end($end_time)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3177  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3179  BIND_GLOBAL/168           ?0        16?1                 0:'html_output'     	;0
	2    3179  BIND_GLOBAL/168           ?0        16?2                 1:'html_file'       	;0
	3    3181  JMPZ/43                   ?0        16?1                 ?18                 	;0	>>18
	4    3182  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'fwrite'          	;2
	5    3182  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	6    3182  SEND_VAL_EX/116           ?96       4:'</table>
'        ?2                  	;0
	7    3182  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
	8    3183  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'fwrite'          	;2
	9    3183  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	10   3183  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'date'            	;2
	11   3183  SEND_VAL_EX/116           ?80       9:'Y-m-d H:i:s'      ?1                  	;0
	12   3183  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	13   3183  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	14   3183  CONCAT/8                  #5=       10:'<h2>Time End: '  $4                  	;0
	15   3183  CONCAT/8                  #6=       #5                   11:'</h2>
'         	;0
	16   3183  SEND_VAL_EX/116           ?96       #6                   ?2                  	;0
	17   3183  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	18   3186  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'date'           	;2	<<3
	19   3186  SEND_VAL_EX/116           ?80       14:'Y-m-d H:i:s'     ?1                  	;0
	20   3186  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	21   3186  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	22   3186  CONCAT/8                  #9=       15:'=====================================================================
TIME END ' $8                  	;0
	23   3186  CONCAT/8                  #10=      #9                   16:'
'              	;0
	24   3186  ECHO/40                   ?0        #10                  ?0                  	;0
	25   3187  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
	*/
}

function show_summary()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3191  BIND_GLOBAL/168           ?0        16?0                 0:'html_output'     	;0
	1    3191  BIND_GLOBAL/168           ?0        16?1                 1:'html_file'       	;0
	2    3193  JMPZ/43                   ?0        16?0                 ?12                 	;0	>>12
	3    3194  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'fwrite'          	;2
	4    3194  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	5    3194  INIT_FCALL/61             ?0        ?3648                4:'get_summary'     	;2
	6    3194  SEND_VAL/65               ?80       5:true               ?1                  	;0
	7    3194  SEND_VAL/65               ?96       6:true               ?2                  	;0
	8    3194  DO_FCALL/60               $2=       ?0                   ?0                  	;0
	9    3194  CONCAT/8                  #3=       7:'<hr/>
'           $2                  	;0
	10   3194  SEND_VAL_EX/116           ?96       #3                   ?2                  	;0
	11   3194  DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
	12   3197  INIT_FCALL/61             ?0        ?3648                8:'get_summary'     	;2	<<2
	13   3197  SEND_VAL/65               ?80       9:true               ?1                  	;0
	14   3197  SEND_VAL/65               ?96       10:false             ?2                  	;0
	15   3197  DO_FCALL/60               $5=       ?0                   ?0                  	;0
	16   3197  ECHO/40                   ?0        $5                   ?0                  	;0
	17   3198  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
	*/
}

function show_redirect_start($tests, $tested, $tested_file)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3200  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3200  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    3200  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    3202  BIND_GLOBAL/168           ?0        16?3                 0:'html_output'     	;0
	4    3202  BIND_GLOBAL/168           ?0        16?4                 1:'html_file'       	;0
	5    3202  BIND_GLOBAL/168           ?0        16?5                 2:'line_length'     	;0
	6    3202  BIND_GLOBAL/168           ?0        16?6                 3:'SHOW_ONLY_GROUPS'	;0
	7    3204  JMPZ/43                   ?0        16?3                 ?19                 	;0	>>19
	8    3205  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'fwrite'          	;2
	9    3205  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	10   3205  ROPE_INIT/54              #8=       ?0                   6:'<tr><td colspan=\'3\'>---&gt; '	;7
	11   3205  ROPE_ADD/55               #8=       #8                   16?0                	;1
	12   3205  ROPE_ADD/55               #8=       #8                   7:' ('              	;2
	13   3205  ROPE_ADD/55               #8=       #8                   16?1                	;3
	14   3205  ROPE_ADD/55               #8=       #8                   8:' ['              	;4
	15   3205  ROPE_ADD/55               #8=       #8                   16?2                	;5
	16   3205  ROPE_END/56               #7=       #8                   9:']) begin</td></tr>
'	;6
	17   3205  SEND_VAL_EX/116           ?96       #7                   ?2                  	;0
	18   3205  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
	19   3208  BOOL_NOT/13               #13=      16?6                 ?0                  	;0	<<7
	20   3208  JMPNZ_EX/47               #13=      #13                  ?26                 	;0	>>26
	21   3208  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'in_array'       	;2
	22   3208  SEND_VAL_EX/116           ?80       12:'REDIRECT'        ?1                  	;0
	23   3208  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
	24   3208  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	25   3208  BOOL/52                   #13=      $14                  ?0                  	;0
	26   3208  JMPZ/43                   ?0        #13                  ?36                 	;0	>>36	<<20
	27   3209  ROPE_INIT/54              #16=      ?0                   13:'REDIRECT '      	;7
	28   3209  ROPE_ADD/55               #16=      #16                  16?0                	;1
	29   3209  ROPE_ADD/55               #16=      #16                  14:' ('             	;2
	30   3209  ROPE_ADD/55               #16=      #16                  16?1                	;3
	31   3209  ROPE_ADD/55               #16=      #16                  15:' ['             	;4
	32   3209  ROPE_ADD/55               #16=      #16                  16?2                	;5
	33   3209  ROPE_END/56               #15=      #16                  16:']) begin
'      	;6
	34   3209  ECHO/40                   ?0        #15                  ?0                  	;0
	35   3209  JMP/42                    ?0        ?38                  ?0                  	;0	>>38
	36   3211  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'clear_show_test'	;0	<<26
	37   3211  DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
	38   3213  NOP/0                     ?0        19:NULL              ?0                  	;4294967295	<<35
	*/
}

function show_redirect_ends($tests, $tested, $tested_file)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3215  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3215  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    3215  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    3217  BIND_GLOBAL/168           ?0        16?3                 0:'html_output'     	;0
	4    3217  BIND_GLOBAL/168           ?0        16?4                 1:'html_file'       	;0
	5    3217  BIND_GLOBAL/168           ?0        16?5                 2:'line_length'     	;0
	6    3217  BIND_GLOBAL/168           ?0        16?6                 3:'SHOW_ONLY_GROUPS'	;0
	7    3219  JMPZ/43                   ?0        16?3                 ?19                 	;0	>>19
	8    3220  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'fwrite'          	;2
	9    3220  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	10   3220  ROPE_INIT/54              #8=       ?0                   6:'<tr><td colspan=\'3\'>---&gt; '	;7
	11   3220  ROPE_ADD/55               #8=       #8                   16?0                	;1
	12   3220  ROPE_ADD/55               #8=       #8                   7:' ('              	;2
	13   3220  ROPE_ADD/55               #8=       #8                   16?1                	;3
	14   3220  ROPE_ADD/55               #8=       #8                   8:' ['              	;4
	15   3220  ROPE_ADD/55               #8=       #8                   16?2                	;5
	16   3220  ROPE_END/56               #7=       #8                   9:']) done</td></tr>
'	;6
	17   3220  SEND_VAL_EX/116           ?96       #7                   ?2                  	;0
	18   3220  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
	19   3223  BOOL_NOT/13               #13=      16?6                 ?0                  	;0	<<7
	20   3223  JMPNZ_EX/47               #13=      #13                  ?26                 	;0	>>26
	21   3223  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'in_array'       	;2
	22   3223  SEND_VAL_EX/116           ?80       12:'REDIRECT'        ?1                  	;0
	23   3223  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
	24   3223  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	25   3223  BOOL/52                   #13=      $14                  ?0                  	;0
	26   3223  JMPZ/43                   ?0        #13                  ?36                 	;0	>>36	<<20
	27   3224  ROPE_INIT/54              #16=      ?0                   13:'REDIRECT '      	;7
	28   3224  ROPE_ADD/55               #16=      #16                  16?0                	;1
	29   3224  ROPE_ADD/55               #16=      #16                  14:' ('             	;2
	30   3224  ROPE_ADD/55               #16=      #16                  16?1                	;3
	31   3224  ROPE_ADD/55               #16=      #16                  15:' ['             	;4
	32   3224  ROPE_ADD/55               #16=      #16                  16?2                	;5
	33   3224  ROPE_END/56               #15=      #16                  16:']) done
'       	;6
	34   3224  ECHO/40                   ?0        #15                  ?0                  	;0
	35   3224  JMP/42                    ?0        ?38                  ?0                  	;0	>>38
	36   3226  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'clear_show_test'	;0	<<26
	37   3226  DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
	38   3228  NOP/0                     ?0        19:NULL              ?0                  	;4294967295	<<35
	*/
}

function show_test($test_idx, $shortname)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3230  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3230  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    3232  BIND_GLOBAL/168           ?0        16?2                 0:'test_cnt'        	;0
	3    3233  BIND_GLOBAL/168           ?0        16?3                 1:'line_length'     	;0
	4    3235  ROPE_INIT/54              #6=       ?0                   2:'TEST '           	;7
	5    3235  ROPE_ADD/55               #6=       #6                   16?0                	;1
	6    3235  ROPE_ADD/55               #6=       #6                   3:'/'               	;2
	7    3235  ROPE_ADD/55               #6=       #6                   16?2                	;3
	8    3235  ROPE_ADD/55               #6=       #6                   4:' ['              	;4
	9    3235  ROPE_ADD/55               #6=       #6                   16?1                	;5
	10   3235  ROPE_END/56               #5=       #6                   5:']'              	;6
	11   3235  ASSIGN/38                 ?5        16?4                 #5                  	;0
	12   3236  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'strlen'          	;1
	13   3236  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	14   3236  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	15   3236  ASSIGN/38                 ?7        16?3                 $11                 	;0
	16   3237  ECHO/40                   ?0        16?4                 ?0                  	;0
	17   3238  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'flush'           	;0
	18   3238  DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
	19   3239  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
	*/
}

function clear_show_test()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3242  BIND_GLOBAL/168           ?0        16?0                 0:'line_length'     	;0
	1    3244  BIND_GLOBAL/168           ?0        16?1                 1:'workerID'        	;0
	2    3246  BOOL_NOT/13               #2=       16?1                 ?0                  	;0
	3    3246  JMPZ/43                   ?0        #2                   ?10                 	;0	>>10
	4    3248  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'str_repeat'      	;2
	5    3248  SEND_VAL_EX/116           ?80       4:' '                ?1                  	;0
	6    3248  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	7    3248  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	8    3248  ECHO/40                   ?0        $3                   ?0                  	;0
	9    3248  ECHO/40                   ?0        5:''                ?0                  	;0
	10   3250  NOP/0                     ?0        6:NULL               ?0                  	;4294967295	<<3
	*/
}

function parse_conflicts(string $text): array
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3252  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3254  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'preg_replace'    	;3
	2    3254  SEND_VAL_EX/116           ?80       2:'/#.*/'            ?1                  	;0
	3    3254  SEND_VAL_EX/116           ?96       3:''                 ?2                  	;0
	4    3254  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
	5    3254  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	6    3254  ASSIGN/38                 ?1        16?0                 $1                  	;0
	7    3255  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'array_map'       	;2
	8    3255  SEND_VAL_EX/116           ?80       6:'trim'             ?1                  	;0
	9    3255  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'explode'         	;2
	10   3255  SEND_VAL_EX/116           ?80       9:'
'                ?1                  	;0
	11   3255  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'trim'           	;1
	12   3255  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	13   3255  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	14   3255  SEND_VAR_NO_REF_EX/50     ?96       $3                   ?2                  	;0
	15   3255  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	16   3255  SEND_VAR_NO_REF_EX/50     ?96       $4                   ?2                  	;0
	17   3255  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	18   3255  VERIFY_RETURN_TYPE/124    ?0        $5                   ?4294967294         	;0
	19   3255  RETURN/62                 ?0        $5                   ?0                  	;0
	20   3256  VERIFY_RETURN_TYPE/124    ?0        ?0                   ?4294967294         	;0
	21   3256  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
	*/
}

function show_result($result, $tested, $tested_file, $extra, $temp_filenames)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3258  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3258  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    3258  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    3258  RECV_INIT/64              16?3=     ?4                   0:''                	;0
	4    3258  RECV_INIT/64              16?4=     ?5                   1:NULL              	;0
	5    3260  BIND_GLOBAL/168           ?0        16?5                 2:'html_output'     	;0
	6    3260  BIND_GLOBAL/168           ?0        16?6                 3:'html_file'       	;0
	7    3260  BIND_GLOBAL/168           ?0        16?7                 4:'temp_target'     	;0
	8    3260  BIND_GLOBAL/168           ?0        16?8                 5:'temp_urlbase'    	;0
	9    3260  BIND_GLOBAL/168           ?0        16?9                 6:'line_length'     	;0
	10   3260  BIND_GLOBAL/168           ?0        16?10                7:'SHOW_ONLY_GROUPS'	;0
	11   3262  BOOL_NOT/13               #14=      16?10                ?0                  	;0
	12   3262  JMPNZ_EX/47               #14=      #14                  ?18                 	;0	>>18
	13   3262  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'in_array'        	;2
	14   3262  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	15   3262  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
	16   3262  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	17   3262  BOOL/52                   #14=      $15                  ?0                  	;0
	18   3262  JMPZ/43                   ?0        #14                  ?29                 	;0	>>29	<<12
	19   3263  ROPE_INIT/54              #17=      ?0                   16?0                	;8
	20   3263  ROPE_ADD/55               #17=      #17                  10:' '              	;1
	21   3263  ROPE_ADD/55               #17=      #17                  16?1                	;2
	22   3263  ROPE_ADD/55               #17=      #17                  11:' ['             	;3
	23   3263  ROPE_ADD/55               #17=      #17                  16?2                	;4
	24   3263  ROPE_ADD/55               #17=      #17                  12:'] '             	;5
	25   3263  ROPE_ADD/55               #17=      #17                  16?3                	;6
	26   3263  ROPE_END/56               #16=      #17                  13:'
'              	;7
	27   3263  ECHO/40                   ?0        #16                  ?0                  	;0
	28   3263  JMP/42                    ?0        ?33                  ?0                  	;0	>>33
	29   3264  BOOL_NOT/13               #21=      16?10                ?0                  	;0	<<18
	30   3264  JMPZ/43                   ?0        #21                  ?33                 	;0	>>33
	31   3265  INIT_FCALL/61             ?0        ?144                 14:'clear_show_test'	;0
	32   3265  DO_FCALL/60               ?8        ?0                   ?0                  	;0
	33   3268  JMPZ/43                   ?0        16?5                 ?150                	;0	>>150	<<28,30
	34   3270  ISSET_ISEMPTY_DIM_OBJ/115 #23=      16?4                 15:'file'           	;33554432
	35   3270  JMPZ_EX/46                #23=      #23                  ?41                 	;0	>>41
	36   3270  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'file_exists'    	;1
	37   3270  FETCH_DIM_FUNC_ARG/93     $24=      16?4                 18:'file'           	;1
	38   3270  SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
	39   3270  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
	40   3270  BOOL/52                   #23=      $25                  ?0                  	;0
	41   3270  JMPZ/43                   ?0        #23                  ?55                 	;0	>>55	<<35
	42   3271  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'str_replace'    	;3
	43   3271  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	44   3271  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
	45   3271  FETCH_DIM_FUNC_ARG/93     $26=      16?4                 21:'file'           	;3
	46   3271  SEND_VAR_EX/66            ?112      $26                  ?3                  	;0
	47   3271  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
	48   3271  ASSIGN/38                 ?14       16?11                $27                 	;0
	49   3272  ROPE_INIT/54              #30=      ?0                   22:'<a href=\''     	;5
	50   3272  ROPE_ADD/55               #30=      #30                  16?11               	;1
	51   3272  ROPE_ADD/55               #30=      #30                  23:'\'>'            	;2
	52   3272  ROPE_ADD/55               #30=      #30                  16?1                	;3
	53   3272  ROPE_END/56               #29=      #30                  24:'</a>'           	;4
	54   3272  ASSIGN/38                 ?19       16?1                 #29                 	;0
	55   3275  ISSET_ISEMPTY_DIM_OBJ/115 #34=      16?4                 25:'skip'           	;33554432	<<41
	56   3275  JMPZ_EX/46                #34=      #34                  ?62                 	;0	>>62
	57   3275  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'file_exists'    	;1
	58   3275  FETCH_DIM_FUNC_ARG/93     $35=      16?4                 28:'skip'           	;1
	59   3275  SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
	60   3275  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	61   3275  BOOL/52                   #34=      $36                  ?0                  	;0
	62   3275  JMPZ/43                   ?0        #34                  ?80                 	;0	>>80	<<56
	63   3277  ISSET_ISEMPTY_CV/197      #37=      16?3                 ?0                  	;16777216
	64   3277  JMPZ/43                   ?0        #37                  ?66                 	;0	>>66
	65   3278  ASSIGN/38                 ?24       16?3                 29:'skipif'         	;0
	66   3281  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'str_replace'    	;3	<<64
	67   3281  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	68   3281  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
	69   3281  FETCH_DIM_FUNC_ARG/93     $39=      16?4                 32:'skip'           	;3
	70   3281  SEND_VAR_EX/66            ?112      $39                  ?3                  	;0
	71   3281  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	72   3281  ASSIGN/38                 ?27       16?11                $40                 	;0
	73   3282  ROPE_INIT/54              #43=      ?0                   33:'<a href=\''     	;5
	74   3282  ROPE_ADD/55               #43=      #43                  16?11               	;1
	75   3282  ROPE_ADD/55               #43=      #43                  34:'\'>'            	;2
	76   3282  ROPE_ADD/55               #43=      #43                  16?3                	;3
	77   3282  ROPE_END/56               #42=      #43                  35:'</a>'           	;4
	78   3282  ASSIGN/38                 ?32       16?3                 #42                 	;0
	79   3282  JMP/42                    ?0        ?83                  ?0                  	;0	>>83
	80   3284  ISSET_ISEMPTY_CV/197      #47=      16?3                 ?0                  	;16777216	<<62
	81   3284  JMPZ/43                   ?0        #47                  ?83                 	;0	>>83
	82   3285  ASSIGN/38                 ?34       16?3                 36:'&nbsp;'         	;0
	83   3288  ISSET_ISEMPTY_DIM_OBJ/115 #49=      16?4                 37:'diff'           	;33554432	<<79,81
	84   3288  JMPZ_EX/46                #49=      #49                  ?90                 	;0	>>90
	85   3288  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'file_exists'    	;1
	86   3288  FETCH_DIM_FUNC_ARG/93     $50=      16?4                 40:'diff'           	;1
	87   3288  SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
	88   3288  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
	89   3288  BOOL/52                   #49=      $51                  ?0                  	;0
	90   3288  JMPZ/43                   ?0        #49                  ?103                	;0	>>103	<<84
	91   3289  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'str_replace'    	;3
	92   3289  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	93   3289  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
	94   3289  FETCH_DIM_FUNC_ARG/93     $52=      16?4                 43:'diff'           	;3
	95   3289  SEND_VAR_EX/66            ?112      $52                  ?3                  	;0
	96   3289  DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
	97   3289  ASSIGN/38                 ?40       16?11                $53                 	;0
	98   3290  ROPE_INIT/54              #56=      ?0                   44:'<a href=\''     	;3
	99   3290  ROPE_ADD/55               #56=      #56                  16?11               	;1
	100  3290  ROPE_END/56               #55=      #56                  45:'\'>diff</a>'    	;2
	101  3290  ASSIGN/38                 ?44       16?12                #55                 	;0
	102  3290  JMP/42                    ?0        ?104                 ?0                  	;0	>>104
	103  3292  ASSIGN/38                 ?45       16?12                46:'&nbsp;'         	;0	<<90
	104  3295  ISSET_ISEMPTY_DIM_OBJ/115 #60=      16?4                 47:'mem'            	;33554432	<<102
	105  3295  JMPZ_EX/46                #60=      #60                  ?111                	;0	>>111
	106  3295  INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'file_exists'    	;1
	107  3295  FETCH_DIM_FUNC_ARG/93     $61=      16?4                 50:'mem'            	;1
	108  3295  SEND_VAR_EX/66            ?80       $61                  ?1                  	;0
	109  3295  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
	110  3295  BOOL/52                   #60=      $62                  ?0                  	;0
	111  3295  JMPZ/43                   ?0        #60                  ?124                	;0	>>124	<<105
	112  3296  INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'str_replace'    	;3
	113  3296  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	114  3296  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
	115  3296  FETCH_DIM_FUNC_ARG/93     $63=      16?4                 53:'mem'            	;3
	116  3296  SEND_VAR_EX/66            ?112      $63                  ?3                  	;0
	117  3296  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
	118  3296  ASSIGN/38                 ?51       16?11                $64                 	;0
	119  3297  ROPE_INIT/54              #67=      ?0                   54:'<a href=\''     	;3
	120  3297  ROPE_ADD/55               #67=      #67                  16?11               	;1
	121  3297  ROPE_END/56               #66=      #67                  55:'\'>leaks</a>'   	;2
	122  3297  ASSIGN/38                 ?55       16?13                #66                 	;0
	123  3297  JMP/42                    ?0        ?125                 ?0                  	;0	>>125
	124  3299  ASSIGN/38                 ?56       16?13                56:'&nbsp;'         	;0	<<111
	125  3302  INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'fwrite'         	;2	<<123
	126  3303  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	127  3305  ROPE_INIT/54              #72=      ?0                   59:'<td>'           	;3
	128  3305  ROPE_ADD/55               #72=      #72                  16?0                	;1
	129  3305  ROPE_END/56               #71=      #72                  60:'</td>'          	;2
	130  3305  CONCAT/8                  #74=      61:'<tr>'            #71                 	;0
	131  3306  ROPE_INIT/54              #76=      ?0                   62:'<td>'           	;3
	132  3306  ROPE_ADD/55               #76=      #76                  16?1                	;1
	133  3306  ROPE_END/56               #75=      #76                  63:'</td>'          	;2
	134  3306  CONCAT/8                  #78=      #74                  #75                 	;0
	135  3307  ROPE_INIT/54              #80=      ?0                   64:'<td>'           	;3
	136  3307  ROPE_ADD/55               #80=      #80                  16?3                	;1
	137  3307  ROPE_END/56               #79=      #80                  65:'</td>'          	;2
	138  3307  CONCAT/8                  #82=      #78                  #79                 	;0
	139  3308  ROPE_INIT/54              #84=      ?0                   66:'<td>'           	;3
	140  3308  ROPE_ADD/55               #84=      #84                  16?12               	;1
	141  3308  ROPE_END/56               #83=      #84                  67:'</td>'          	;2
	142  3308  CONCAT/8                  #86=      #82                  #83                 	;0
	143  3309  ROPE_INIT/54              #88=      ?0                   68:'<td>'           	;3
	144  3309  ROPE_ADD/55               #88=      #88                  16?13               	;1
	145  3309  ROPE_END/56               #87=      #88                  69:'</td>'          	;2
	146  3309  CONCAT/8                  #90=      #86                  #87                 	;0
	147  3310  CONCAT/8                  #91=      #90                  70:'</tr>
'         	;0
	148  3310  SEND_VAL_EX/116           ?96       #91                  ?2                  	;0
	149  3310  DO_FCALL_BY_NAME/131      ?78       ?0                   ?0                  	;0
	150  3313  NOP/0                     ?0        71:NULL              ?0                  	;4294967295	<<33
	*/
}

function junit_init()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3318  BIND_GLOBAL/168           ?0        16?0                 0:'workerID'        	;0
	1    3319  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'getenv'          	;1
	2    3319  SEND_VAL_EX/116           ?80       3:'TEST_PHP_JUNIT'   ?1                  	;0
	3    3319  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	4    3319  ASSIGN/38                 ?1        16?1                 $3                  	;0
	5    3320  ISSET_ISEMPTY_CV/197      #5=       16?1                 ?0                  	;16777216
	6    3320  JMPZ/43                   ?0        #5                   ?11                 	;0	>>11
	7    3321  FETCH_W/83                $6=       4:'GLOBALS'          ?0                  	;0
	8    3321  ASSIGN_DIM/147            ?4        $6                   5:'JUNIT'           	;0
	9    3321  OP_DATA/137               ?0        6:false              ?0                  	;0
	10   3322  RETURN/62                 ?0        7:NULL               ?0                  	;0
	11   3324  JMPZ/43                   ?0        16?0                 ?14                 	;0	>>14	<<6
	12   3325  ASSIGN/38                 ?5        16?2                 8:NULL              	;0
	13   3325  JMP/42                    ?0        ?27                  ?0                  	;0	>>27
	14   3326  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'fopen'           	;2	<<11
	15   3326  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	16   3326  SEND_VAL_EX/116           ?96       11:'w'               ?2                  	;0
	17   3326  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	18   3326  ASSIGN/38                 $10=      16?2                 $9                  	;0
	19   3326  BOOL_NOT/13               #11=      $10                  ?0                  	;0
	20   3326  JMPZ/43                   ?0        #11                  ?27                 	;0	>>27
	21   3327  INIT_FCALL/61             ?0        ?144                 12:'error'          	;1
	22   3327  ROPE_INIT/54              #13=      ?0                   13:'Failed to open '	;3
	23   3327  ROPE_ADD/55               #13=      #13                  16?1                	;1
	24   3327  ROPE_END/56               #12=      #13                  14:' for writing.'  	;2
	25   3327  SEND_VAL/65               ?80       #12                  ?1                  	;0
	26   3327  DO_FCALL/60               ?12       ?0                   ?0                  	;0
	27   3330  INIT_ARRAY/71             #18=      16?2                 17:'fp'             	;46	<<13,20
	28   3331  ADD_ARRAY_ELEMENT/72      #18=      18:'PHP'             19:'name'           	;0
	29   3332  ADD_ARRAY_ELEMENT/72      #18=      20:0                 21:'test_total'     	;0
	30   3333  ADD_ARRAY_ELEMENT/72      #18=      22:0                 23:'test_pass'      	;0
	31   3334  ADD_ARRAY_ELEMENT/72      #18=      24:0                 25:'test_fail'      	;0
	32   3335  ADD_ARRAY_ELEMENT/72      #18=      26:0                 27:'test_error'     	;0
	33   3336  ADD_ARRAY_ELEMENT/72      #18=      28:0                 29:'test_skip'      	;0
	34   3337  ADD_ARRAY_ELEMENT/72      #18=      30:0                 31:'test_warn'      	;0
	35   3338  ADD_ARRAY_ELEMENT/72      #18=      32:0                 33:'execution_time' 	;0
	36   3330  ADD_ARRAY_ELEMENT/72      #18=      34:array (
)         35:'suites'         	;0
	37   3330  ADD_ARRAY_ELEMENT/72      #18=      36:array (
)         37:'files'          	;0
	38   3329  FETCH_W/83                $16=      15:'GLOBALS'         ?0                  	;0
	39   3329  ASSIGN_DIM/147            ?14       $16                  16:'JUNIT'          	;0
	40   3330  OP_DATA/137               ?0        #18                  ?0                  	;0
	41   3342  NOP/0                     ?0        38:NULL              ?0                  	;4294967295
	*/
}

function junit_save_xml()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3346  BIND_GLOBAL/168           ?0        16?0                 0:'JUNIT'           	;0
	1    3347  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'junit_enabled'   	;0
	2    3347  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	3    3347  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	4    3347  JMPZ/43                   ?0        #3                   ?6                  	;0	>>6
	5    3347  RETURN/62                 ?0        3:NULL               ?0                  	;0
	6    3349  FETCH_CONSTANT/99         #4=       ?0                   4:'PHP_EOL'         	;16	<<4
	7    3349  CONCAT/8                  #5=       7:'<?xml version="1.0" encoding="UTF-8"?>' #4                  	;0
	8    3349  ASSIGN/38                 ?4        16?1                 #5                  	;0
	9    3350  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'sprintf'         	;7
	10   3351  FETCH_CONSTANT/99         #7=       ?0                   10:'PHP_EOL'        	;16
	11   3351  CONCAT/8                  #8=       13:'<testsuites name="%s" tests="%s" failures="%d" errors="%d" skip="%d" time="%s">' #7                  	;0
	12   3351  SEND_VAL_EX/116           ?80       #8                   ?1                  	;0
	13   3352  FETCH_DIM_FUNC_ARG/93     $9=       16?0                 14:'name'           	;2
	14   3352  SEND_VAR_EX/66            ?96       $9                   ?2                  	;0
	15   3353  FETCH_DIM_FUNC_ARG/93     $10=      16?0                 15:'test_total'     	;3
	16   3353  SEND_VAR_EX/66            ?112      $10                  ?3                  	;0
	17   3354  FETCH_DIM_FUNC_ARG/93     $11=      16?0                 16:'test_fail'      	;4
	18   3354  SEND_VAR_EX/66            ?128      $11                  ?4                  	;0
	19   3355  FETCH_DIM_FUNC_ARG/93     $12=      16?0                 17:'test_error'     	;5
	20   3355  SEND_VAR_EX/66            ?144      $12                  ?5                  	;0
	21   3356  FETCH_DIM_FUNC_ARG/93     $13=      16?0                 18:'test_skip'      	;6
	22   3356  SEND_VAR_EX/66            ?160      $13                  ?6                  	;0
	23   3357  FETCH_DIM_FUNC_ARG/93     $14=      16?0                 19:'execution_time' 	;7
	24   3357  SEND_VAR_EX/66            ?176      $14                  ?7                  	;0
	25   3357  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	26   3357  ASSIGN_CONCAT/30          ?14       16?1                 $15                 	;0
	27   3359  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'junit_get_suite_xml'	;0
	28   3359  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
	29   3359  ASSIGN_CONCAT/30          ?16       16?1                 $17                 	;0
	30   3360  ASSIGN_CONCAT/30          ?17       16?1                 22:'</testsuites>'  	;0
	31   3361  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'fwrite'         	;2
	32   3361  FETCH_DIM_FUNC_ARG/93     $20=      16?0                 25:'fp'             	;1
	33   3361  SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
	34   3361  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	35   3361  DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
	36   3362  NOP/0                     ?0        26:NULL              ?0                  	;4294967295
	*/
}

function junit_get_suite_xml($suite_name)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3364  RECV_INIT/64              16?0=     ?1                   0:''                	;0
	1    3366  BIND_GLOBAL/168           ?0        16?1                 1:'JUNIT'           	;0
	2    3368  ASSIGN/38                 ?0        16?2                 2:''                	;0
	3    3370  FETCH_DIM_R/81            $6=       16?1                 3:'suites'          	;0
	4    3370  FE_RESET_R/77             $7=       $6                   ?41                 	;0
	5    3370  FE_FETCH_R/78             #8=       $7                   16?3                	;41	>>41	<<40
	6    3370  ASSIGN/38                 ?4        16?0                 #8                  	;0
	7    3371  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'sprintf'         	;7
	8    3372  FETCH_CONSTANT/99         #10=      ?0                   6:'PHP_EOL'         	;16
	9    3372  CONCAT/8                  #11=      9:'<testsuite name="%s" tests="%s" failures="%d" errors="%d" skip="%d" time="%s">' #10                 	;0
	10   3372  SEND_VAL_EX/116           ?80       #11                  ?1                  	;0
	11   3373  FETCH_DIM_FUNC_ARG/93     $12=      16?3                 10:'name'           	;2
	12   3373  SEND_VAR_EX/66            ?96       $12                  ?2                  	;0
	13   3374  FETCH_DIM_FUNC_ARG/93     $13=      16?3                 11:'test_total'     	;3
	14   3374  SEND_VAR_EX/66            ?112      $13                  ?3                  	;0
	15   3375  FETCH_DIM_FUNC_ARG/93     $14=      16?3                 12:'test_fail'      	;4
	16   3375  SEND_VAR_EX/66            ?128      $14                  ?4                  	;0
	17   3376  FETCH_DIM_FUNC_ARG/93     $15=      16?3                 13:'test_error'     	;5
	18   3376  SEND_VAR_EX/66            ?144      $15                  ?5                  	;0
	19   3377  FETCH_DIM_FUNC_ARG/93     $16=      16?3                 14:'test_skip'      	;6
	20   3377  SEND_VAR_EX/66            ?160      $16                  ?6                  	;0
	21   3378  FETCH_DIM_FUNC_ARG/93     $17=      16?3                 15:'execution_time' 	;7
	22   3378  SEND_VAR_EX/66            ?176      $17                  ?7                  	;0
	23   3378  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	24   3378  ASSIGN_CONCAT/30          ?14       16?2                 $18                 	;0
	25   3381  ISSET_ISEMPTY_CV/197      #20=      16?0                 ?0                  	;16777216
	26   3381  BOOL_NOT/13               #21=      #20                  ?0                  	;0
	27   3381  JMPZ/43                   ?0        #21                  ?37                 	;0	>>37
	28   3382  FETCH_DIM_R/81            $22=      16?3                 16:'files'          	;0
	29   3382  FE_RESET_R/77             $23=      $22                  ?36                 	;0
	30   3382  FE_FETCH_R/78             ?0        $23                  16?4                	;36	>>36	<<35
	31   3383  FETCH_DIM_R/81            $24=      16?1                 17:'files'          	;0
	32   3383  FETCH_DIM_R/81            $25=      $24                  16?4                	;0
	33   3383  FETCH_DIM_R/81            $26=      $25                  18:'xml'            	;0
	34   3383  ASSIGN_CONCAT/30          ?22       16?2                 $26                 	;0
	35   3383  JMP/42                    ?0        ?30                  ?0                  	;0	>>30
	36   3383  FE_FREE/127               ?0        $23                  ?0                  	;0	<<29
	37   3387  FETCH_CONSTANT/99         #28=      ?0                   19:'PHP_EOL'        	;16	<<27
	38   3387  CONCAT/8                  #29=      22:'</testsuite>'    #28                 	;0
	39   3387  ASSIGN_CONCAT/30          ?25       16?2                 #29                 	;0
	40   3387  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
	41   3387  FE_FREE/127               ?0        $7                   ?0                  	;0	<<4
	42   3390  RETURN/62                 ?0        16?2                 ?0                  	;0
	43   3391  NOP/0                     ?0        23:NULL              ?0                  	;4294967295
	*/
}

function junit_enabled()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3395  BIND_GLOBAL/168           ?0        16?0                 0:'JUNIT'           	;0
	1    3396  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
	2    3396  BOOL_NOT/13               #2=       #1                   ?0                  	;0
	3    3396  RETURN/62                 ?0        #2                   ?0                  	;0
	4    3397  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
	*/
}
function {closure}($c)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3421  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3422  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'sprintf'         	;2
	2    3422  SEND_VAL_EX/116           ?80       2:'[[0x%02x]]'       ?1                  	;0
	3    3422  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'ord'             	;1
	4    3422  FETCH_DIM_FUNC_ARG/93     $1=       16?0                 5:0                 	;1
	5    3422  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
	6    3422  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	7    3422  SEND_VAR_NO_REF_EX/50     ?96       $2                   ?2                  	;0
	8    3422  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	9    3422  RETURN/62                 ?0        $3                   ?0                  	;0
	10   3423  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}
/**
 * @param array|string $type
 * @param string $file_name
 * @param string $test_name
 * @param int|string $time
 * @param string $message
 * @param string $details
 * @return void
 */
function junit_mark_test_as($type, $file_name, $test_name, $time, $message, $details)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3408  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3408  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    3408  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    3408  RECV_INIT/64              16?3=     ?4                   0:NULL              	;0
	4    3408  RECV_INIT/64              16?4=     ?5                   1:''                	;0
	5    3408  RECV_INIT/64              16?5=     ?6                   2:''                	;0
	6    3410  BIND_GLOBAL/168           ?0        16?6                 3:'JUNIT'           	;0
	7    3411  INIT_FCALL/61             ?0        ?128                 4:'junit_enabled'   	;0
	8    3411  DO_FCALL/60               $13=      ?0                   ?0                  	;0
	9    3411  BOOL_NOT/13               #14=      $13                  ?0                  	;0
	10   3411  JMPZ/43                   ?0        #14                  ?12                 	;0	>>12
	11   3411  RETURN/62                 ?0        5:NULL               ?0                  	;0
	12   3413  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'junit_get_suitename_for'	;1	<<10
	13   3413  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	14   3413  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	15   3413  ASSIGN/38                 ?3        16?7                 $15                 	;0
	16   3415  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'junit_suite_record'	;2
	17   3415  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	18   3415  SEND_VAL_EX/116           ?96       10:'test_total'      ?2                  	;0
	19   3415  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	20   3417  COALESCE/169              #18=      16?3                 ?25                 	;0
	21   3417  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'junit_get_timer'	;1
	22   3417  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	23   3417  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
	24   3417  QM_ASSIGN/22              #18=      $19                  ?0                  	;0
	25   3417  ASSIGN/38                 ?7        16?3                 #18                 	;0
	26   3418  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'junit_suite_record'	;3
	27   3418  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	28   3418  SEND_VAL_EX/116           ?96       15:'execution_time'  ?2                  	;0
	29   3418  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
	30   3418  DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
	31   3420  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'htmlspecialchars'	;3
	32   3420  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	33   3420  FETCH_CONSTANT/99         #22=      ?0                   18:'ENT_QUOTES'     	;16
	34   3420  SEND_VAL_EX/116           ?96       #22                  ?2                  	;0
	35   3420  SEND_VAL_EX/116           ?112      21:'UTF-8'           ?3                  	;0
	36   3420  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
	37   3420  ASSIGN/38                 ?11       16?8                 $23                 	;0
	38   3421  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'preg_replace_callback'	;3
	39   3421  SEND_VAL_EX/116           ?80       24:'/[\\0-\\x08\\x0B\\x0C\\x0E-\\x1F]/' ?1                  	;0
	40   3421  DECLARE_LAMBDA_FUNCTION/153 #25=      25:'' . "\0" . '{closure}/home/xui_main/bin/php/lib/php/build/run-tests.php0x7f8d6506410e' ?0                  	;0
	41   3423  SEND_VAL_EX/116           ?96       #25                  ?2                  	;0
	42   3423  SEND_VAR_EX/66            ?112      16?8                 ?3                  	;0
	43   3423  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	44   3423  ASSIGN/38                 ?14       16?8                 $26                 	;0
	45   3424  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'htmlspecialchars'	;3
	46   3424  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	47   3424  FETCH_CONSTANT/99         #28=      ?0                   28:'ENT_QUOTES'     	;16
	48   3424  SEND_VAL_EX/116           ?96       #28                  ?2                  	;0
	49   3424  SEND_VAL_EX/116           ?112      31:'UTF-8'           ?3                  	;0
	50   3424  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
	51   3424  ASSIGN/38                 ?17       16?9                 $29                 	;0
	52   3426  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'htmlspecialchars'	;2
	53   3426  CONCAT/8                  #31=      16?1                 34:' ('             	;0
	54   3426  CONCAT/8                  #32=      #31                  16?2                	;0
	55   3426  CONCAT/8                  #33=      #32                  35:')'              	;0
	56   3426  SEND_VAL_EX/116           ?80       #33                  ?1                  	;0
	57   3426  FETCH_CONSTANT/99         #34=      ?0                   36:'ENT_QUOTES'     	;16
	58   3426  SEND_VAL_EX/116           ?96       #34                  ?2                  	;0
	59   3426  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
	60   3426  ASSIGN/38                 ?23       16?10                $35                 	;0
	61   3427  ROPE_INIT/54              #41=      ?0                   41:'<testcase name=\''	;5
	62   3427  ROPE_ADD/55               #41=      #41                  16?10               	;1
	63   3427  ROPE_ADD/55               #41=      #41                  42:'\' time=\''     	;2
	64   3427  ROPE_ADD/55               #41=      #41                  16?3                	;3
	65   3427  ROPE_END/56               #40=      #41                  43:'\'>
'           	;4
	66   3427  FETCH_DIM_W/84            $37=      16?6                 39:'files'          	;0
	67   3427  FETCH_DIM_W/84            $38=      $37                  16?1                	;0
	68   3427  ASSIGN_DIM/147            ?26       $38                  40:'xml'            	;0
	69   3427  OP_DATA/137               ?0        #40                  ?0                  	;0
	70   3429  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'is_array'       	;1
	71   3429  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	72   3429  DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
	73   3429  JMPZ/43                   ?0        $44                  ?87                 	;0	>>87
	74   3430  FETCH_DIM_R/81            $45=      16?0                 46:0                	;0
	75   3430  CONCAT/8                  #46=      $45                  47:'ED'             	;0
	76   3430  ASSIGN/38                 ?34       16?11                #46                 	;0
	77   3431  INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'array_intersect'	;2
	78   3431  SEND_VAL_EX/116           ?80       50:array (
  0 => 'XFAIL',
  1 => 'XLEAK',
  2 => 'FAIL',
  3 => 'WARN',
) ?1                  	;0
	79   3431  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	80   3431  DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
	81   3431  ASSIGN/38                 ?36       16?12                $48                 	;0
	82   3432  INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'reset'          	;1
	83   3432  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	84   3432  DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
	85   3432  ASSIGN/38                 ?38       16?0                 $50                 	;0
	86   3432  JMP/42                    ?0        ?89                  ?0                  	;0	>>89
	87   3434  CONCAT/8                  #52=      16?0                 53:'ED'             	;0	<<73
	88   3434  ASSIGN/38                 ?40       16?11                #52                 	;0
	89   3437  IS_EQUAL/17               #54=      54:'PASS'            16?0                	;0	<<86
	90   3437  JMPNZ_EX/47               #54=      #54                  ?93                 	;0	>>93
	91   3437  IS_EQUAL/17               #55=      55:'XFAIL'           16?0                	;0
	92   3437  BOOL/52                   #54=      #55                  ?0                  	;0
	93   3437  JMPNZ_EX/47               #54=      #54                  ?96                 	;0	>>96	<<90
	94   3437  IS_EQUAL/17               #56=      56:'XLEAK'           16?0                	;0
	95   3437  BOOL/52                   #54=      #56                  ?0                  	;0
	96   3437  JMPZ/43                   ?0        #54                  ?102                	;0	>>102	<<93
	97   3438  INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'junit_suite_record'	;2
	98   3438  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	99   3438  SEND_VAL_EX/116           ?96       59:'test_pass'       ?2                  	;0
	100  3438  DO_FCALL_BY_NAME/131      ?44       ?0                   ?0                  	;0
	101  3438  JMP/42                    ?0        ?179                 ?0                  	;0	>>179
	102  3439  IS_EQUAL/17               #58=      60:'BORK'            16?0                	;0	<<96
	103  3439  JMPZ/43                   ?0        #58                  ?118                	;0	>>118
	104  3440  INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'junit_suite_record'	;2
	105  3440  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	106  3440  SEND_VAL_EX/116           ?96       63:'test_error'      ?2                  	;0
	107  3440  DO_FCALL_BY_NAME/131      ?46       ?0                   ?0                  	;0
	108  3441  ROPE_INIT/54              #64=      ?0                   66:'<error type=\'' 	;5
	109  3441  ROPE_ADD/55               #64=      #64                  16?11               	;1
	110  3441  ROPE_ADD/55               #64=      #64                  67:'\' message=\''  	;2
	111  3441  ROPE_ADD/55               #64=      #64                  16?9                	;3
	112  3441  ROPE_END/56               #63=      #64                  68:'\'/>
'          	;4
	113  3441  FETCH_DIM_RW/87           $60=      16?6                 64:'files'          	;0
	114  3441  FETCH_DIM_RW/87           $61=      $60                  16?1                	;0
	115  3441  ASSIGN_CONCAT/30          ?49       $61                  65:'xml'            	;147
	116  3441  OP_DATA/137               ?0        #63                  ?0                  	;0
	117  3441  JMP/42                    ?0        ?179                 ?0                  	;0	>>179
	118  3442  IS_EQUAL/17               #67=      69:'SKIP'            16?0                	;0	<<103
	119  3442  JMPZ/43                   ?0        #67                  ?132                	;0	>>132
	120  3443  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'junit_suite_record'	;2
	121  3443  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	122  3443  SEND_VAL_EX/116           ?96       72:'test_skip'       ?2                  	;0
	123  3443  DO_FCALL_BY_NAME/131      ?55       ?0                   ?0                  	;0
	124  3444  ROPE_INIT/54              #73=      ?0                   75:'<skipped>'      	;3
	125  3444  ROPE_ADD/55               #73=      #73                  16?9                	;1
	126  3444  ROPE_END/56               #72=      #73                  76:'</skipped>
'    	;2
	127  3444  FETCH_DIM_RW/87           $69=      16?6                 73:'files'          	;0
	128  3444  FETCH_DIM_RW/87           $70=      $69                  16?1                	;0
	129  3444  ASSIGN_CONCAT/30          ?58       $70                  74:'xml'            	;147
	130  3444  OP_DATA/137               ?0        #72                  ?0                  	;0
	131  3444  JMP/42                    ?0        ?179                 ?0                  	;0	>>179
	132  3445  IS_EQUAL/17               #75=      77:'WARN'            16?0                	;0	<<119
	133  3445  JMPZ/43                   ?0        #75                  ?146                	;0	>>146
	134  3446  INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'junit_suite_record'	;2
	135  3446  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	136  3446  SEND_VAL_EX/116           ?96       80:'test_warn'       ?2                  	;0
	137  3446  DO_FCALL_BY_NAME/131      ?63       ?0                   ?0                  	;0
	138  3447  ROPE_INIT/54              #81=      ?0                   83:'<warning>'      	;3
	139  3447  ROPE_ADD/55               #81=      #81                  16?9                	;1
	140  3447  ROPE_END/56               #80=      #81                  84:'</warning>
'    	;2
	141  3447  FETCH_DIM_RW/87           $77=      16?6                 81:'files'          	;0
	142  3447  FETCH_DIM_RW/87           $78=      $77                  16?1                	;0
	143  3447  ASSIGN_CONCAT/30          ?66       $78                  82:'xml'            	;147
	144  3447  OP_DATA/137               ?0        #80                  ?0                  	;0
	145  3447  JMP/42                    ?0        ?179                 ?0                  	;0	>>179
	146  3448  IS_EQUAL/17               #83=      85:'FAIL'            16?0                	;0	<<133
	147  3448  JMPZ/43                   ?0        #83                  ?164                	;0	>>164
	148  3449  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'junit_suite_record'	;2
	149  3449  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	150  3449  SEND_VAL_EX/116           ?96       88:'test_fail'       ?2                  	;0
	151  3449  DO_FCALL_BY_NAME/131      ?71       ?0                   ?0                  	;0
	152  3450  ROPE_INIT/54              #89=      ?0                   91:'<failure type=\''	;7
	153  3450  ROPE_ADD/55               #89=      #89                  16?11               	;1
	154  3450  ROPE_ADD/55               #89=      #89                  92:'\' message=\''  	;2
	155  3450  ROPE_ADD/55               #89=      #89                  16?9                	;3
	156  3450  ROPE_ADD/55               #89=      #89                  93:'\'>'            	;4
	157  3450  ROPE_ADD/55               #89=      #89                  16?8                	;5
	158  3450  ROPE_END/56               #88=      #89                  94:'</failure>
'    	;6
	159  3450  FETCH_DIM_RW/87           $85=      16?6                 89:'files'          	;0
	160  3450  FETCH_DIM_RW/87           $86=      $85                  16?1                	;0
	161  3450  ASSIGN_CONCAT/30          ?74       $86                  90:'xml'            	;147
	162  3450  OP_DATA/137               ?0        #88                  ?0                  	;0
	163  3450  JMP/42                    ?0        ?179                 ?0                  	;0	>>179
	164  3452  INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'junit_suite_record'	;2	<<147
	165  3452  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	166  3452  SEND_VAL_EX/116           ?96       97:'test_error'      ?2                  	;0
	167  3452  DO_FCALL_BY_NAME/131      ?80       ?0                   ?0                  	;0
	168  3453  ROPE_INIT/54              #98=      ?0                   100:'<error type=\''	;7
	169  3453  ROPE_ADD/55               #98=      #98                  16?11               	;1
	170  3453  ROPE_ADD/55               #98=      #98                  101:'\' message=\'' 	;2
	171  3453  ROPE_ADD/55               #98=      #98                  16?9                	;3
	172  3453  ROPE_ADD/55               #98=      #98                  102:'\'>'           	;4
	173  3453  ROPE_ADD/55               #98=      #98                  16?8                	;5
	174  3453  ROPE_END/56               #97=      #98                  103:'</error>
'     	;6
	175  3453  FETCH_DIM_RW/87           $94=      16?6                 98:'files'          	;0
	176  3453  FETCH_DIM_RW/87           $95=      $94                  16?1                	;0
	177  3453  ASSIGN_CONCAT/30          ?83       $95                  99:'xml'            	;147
	178  3453  OP_DATA/137               ?0        #97                  ?0                  	;0
	179  3456  FETCH_DIM_RW/87           $102=     16?6                 104:'files'         	;0	<<101,117,131,145,163
	180  3456  FETCH_DIM_RW/87           $103=     $102                 16?1                	;0
	181  3456  ASSIGN_CONCAT/30          ?91       $103                 105:'xml'           	;147
	182  3456  OP_DATA/137               ?0        106:'</testcase>
'   ?0                  	;0
	183  3458  NOP/0                     ?0        107:NULL             ?0                  	;4294967295
	*/
}

function junit_suite_record($suite, $param, $value)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3460  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3460  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    3460  RECV_INIT/64              16?2=     ?3                   0:1                 	;0
	3    3462  BIND_GLOBAL/168           ?0        16?3                 1:'JUNIT'           	;0
	4    3464  ASSIGN_ADD/23             ?0        16?3                 16?1                	;147
	5    3464  OP_DATA/137               ?0        16?2                 ?0                  	;0
	6    3465  FETCH_DIM_RW/87           $5=       16?3                 2:'suites'          	;0
	7    3465  FETCH_DIM_RW/87           $6=       $5                   16?0                	;0
	8    3465  ASSIGN_ADD/23             ?3        $6                   16?1                	;147
	9    3465  OP_DATA/137               ?0        16?2                 ?0                  	;0
	10   3466  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
	*/
}

function junit_get_timer($file_name)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3468  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3470  BIND_GLOBAL/168           ?0        16?1                 0:'JUNIT'           	;0
	2    3471  INIT_FCALL/61             ?0        ?128                 1:'junit_enabled'   	;0
	3    3471  DO_FCALL/60               $2=       ?0                   ?0                  	;0
	4    3471  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	5    3471  JMPZ/43                   ?0        #3                   ?7                  	;0	>>7
	6    3471  RETURN/62                 ?0        2:0                  ?0                  	;0
	7    3473  FETCH_DIM_IS/90           $4=       16?1                 3:'files'           	;0	<<5
	8    3473  FETCH_DIM_IS/90           $5=       $4                   16?0                	;0
	9    3473  ISSET_ISEMPTY_DIM_OBJ/115 #6=       $5                   4:'total'           	;33554432
	10   3473  JMPZ/43                   ?0        #6                   ?19                 	;0	>>19
	11   3474  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'number_format'   	;2
	12   3474  FETCH_DIM_FUNC_ARG/93     $7=       16?1                 7:'files'           	;1
	13   3474  FETCH_DIM_FUNC_ARG/93     $8=       $7                   16?0                	;1
	14   3474  FETCH_DIM_FUNC_ARG/93     $9=       $8                   8:'total'           	;1
	15   3474  SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
	16   3474  SEND_VAL_EX/116           ?96       9:4                  ?2                  	;0
	17   3474  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	18   3474  RETURN/62                 ?0        $10                  ?0                  	;0
	19   3477  RETURN/62                 ?0        10:0                 ?0                  	;0	<<10
	20   3478  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
	*/
}

function junit_start_timer($file_name)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3480  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3482  BIND_GLOBAL/168           ?0        16?1                 0:'JUNIT'           	;0
	2    3483  INIT_FCALL/61             ?0        ?128                 1:'junit_enabled'   	;0
	3    3483  DO_FCALL/60               $3=       ?0                   ?0                  	;0
	4    3483  BOOL_NOT/13               #4=       $3                   ?0                  	;0
	5    3483  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
	6    3483  RETURN/62                 ?0        2:NULL               ?0                  	;0
	7    3485  FETCH_DIM_IS/90           $5=       16?1                 3:'files'           	;0	<<5
	8    3485  FETCH_DIM_IS/90           $6=       $5                   16?0                	;0
	9    3485  ISSET_ISEMPTY_DIM_OBJ/115 #7=       $6                   4:'start'           	;33554432
	10   3485  BOOL_NOT/13               #8=       #7                   ?0                  	;0
	11   3485  JMPZ/43                   ?0        #8                   ?31                 	;0	>>31
	12   3486  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'microtime'       	;1
	13   3486  SEND_VAL_EX/116           ?80       9:true               ?1                  	;0
	14   3486  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	15   3486  FETCH_DIM_W/84            $9=       16?1                 5:'files'           	;0
	16   3486  FETCH_DIM_W/84            $10=      $9                   16?0                	;0
	17   3486  ASSIGN_DIM/147            ?8        $10                  6:'start'           	;0
	18   3486  OP_DATA/137               ?0        $12                  ?0                  	;0
	19   3488  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'junit_get_suitename_for'	;1
	20   3488  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	21   3488  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	22   3488  ASSIGN/38                 ?11       16?2                 $13                 	;0
	23   3489  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'junit_init_suite'	;1
	24   3489  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	25   3489  DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
	26   3490  FETCH_DIM_W/84            $16=      16?1                 14:'suites'         	;0
	27   3490  FETCH_DIM_W/84            $17=      $16                  16?2                	;0
	28   3490  FETCH_DIM_W/84            $18=      $17                  15:'files'          	;0
	29   3490  ASSIGN_DIM/147            ?16       $18                  16?0                	;0
	30   3490  OP_DATA/137               ?0        16?0                 ?0                  	;0
	31   3492  NOP/0                     ?0        16:NULL              ?0                  	;4294967295	<<11
	*/
}

function junit_get_suitename_for($file_name)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3494  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3496  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'junit_path_to_classname'	;1
	2    3496  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'dirname'         	;1
	3    3496  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4    3496  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	5    3496  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
	6    3496  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	7    3496  RETURN/62                 ?0        $2                   ?0                  	;0
	8    3497  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
	*/
}

function junit_path_to_classname($file_name)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3499  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3501  BIND_GLOBAL/168           ?0        16?1                 0:'JUNIT'           	;0
	2    3503  INIT_FCALL/61             ?0        ?128                 1:'junit_enabled'   	;0
	3    3503  DO_FCALL/60               $8=       ?0                   ?0                  	;0
	4    3503  BOOL_NOT/13               #9=       $8                   ?0                  	;0
	5    3503  JMPZ/43                   ?0        #9                   ?7                  	;0	>>7
	6    3503  RETURN/62                 ?0        2:''                 ?0                  	;0
	7    3505  FETCH_DIM_R/81            $10=      16?1                 3:'name'            	;0	<<5
	8    3505  ASSIGN/38                 ?3        16?2                 $10                 	;0
	9    3506  ASSIGN/38                 ?4        16?3                 4:array (
)         	;0
	10   3509  ASSIGN/38                 ?5        16?4                 5:5                 	;0
	11   3510  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'is_file'         	;1
	12   3510  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	13   3510  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	14   3510  JMPZ/43                   ?0        $14                  ?23                 	;0	>>23
	15   3511  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'dirname'         	;1
	16   3511  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'realpath'       	;1
	17   3511  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	18   3511  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	19   3511  SEND_VAR_NO_REF_EX/50     ?80       $15                  ?1                  	;0
	20   3511  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	21   3511  ASSIGN/38                 ?9        16?5                 $16                 	;0
	22   3511  JMP/42                    ?0        ?27                  ?0                  	;0	>>27
	23   3513  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'realpath'       	;1	<<14
	24   3513  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	25   3513  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	26   3513  ASSIGN/38                 ?11       16?5                 $18                 	;0
	27   3516  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'array_unshift'  	;2	<<22,53
	28   3516  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	29   3516  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'basename'       	;1
	30   3516  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	31   3516  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	32   3516  SEND_VAR_NO_REF_EX/50     ?96       $20                  ?2                  	;0
	33   3516  DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
	34   3517  FETCH_CONSTANT/99         #22=      ?0                   18:'DIRECTORY_SEPARATOR'	;16
	35   3517  CONCAT/8                  #23=      16?5                 #22                 	;0
	36   3517  CONCAT/8                  #24=      #23                  21:'main'           	;0
	37   3517  FETCH_CONSTANT/99         #25=      ?0                   22:'DIRECTORY_SEPARATOR'	;16
	38   3517  CONCAT/8                  #26=      #24                  #25                 	;0
	39   3517  CONCAT/8                  #27=      #26                  25:'php_version.h'  	;0
	40   3517  ASSIGN/38                 ?20       16?6                 #27                 	;0
	41   3518  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'dirname'        	;1
	42   3518  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	43   3518  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
	44   3518  ASSIGN/38                 ?22       16?5                 $29                 	;0
	45   3519  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'file_exists'    	;1
	46   3519  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	47   3519  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
	48   3519  BOOL_NOT/13               #32=      $31                  ?0                  	;0
	49   3519  JMPZ_EX/46                #32=      #32                  ?53                 	;0	>>53
	50   3519  PRE_DEC/35                $33=      16?4                 ?0                  	;0
	51   3519  IS_SMALLER/19             #34=      30:0                 $33                 	;0
	52   3519  BOOL/52                   #32=      #34                  ?0                  	;0
	53   3519  JMPNZ/44                  ?0        #32                  ?27                 	;0	>>27	<<49
	54   3520  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'file_exists'    	;1
	55   3520  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	56   3520  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
	57   3520  JMPZ/43                   ?0        $35                  ?74                 	;0	>>74
	58   3521  JMPZ/43                   ?0        16?4                 ?62                 	;0	>>62
	59   3522  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'array_shift'    	;1
	60   3522  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	61   3522  DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
	62   3524  FE_RESET_R/77             $37=      16?3                 ?72                 	;0	<<58
	63   3524  FE_FETCH_R/78             ?0        $37                  16?7                	;72	>>72	<<71
	64   3525  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'preg_replace'   	;3
	65   3525  SEND_VAL_EX/116           ?80       37:',[^a-z0-9]+,i'   ?1                  	;0
	66   3525  SEND_VAL_EX/116           ?96       38:'.'               ?2                  	;0
	67   3525  SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
	68   3525  DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	69   3525  CONCAT/8                  #39=      39:'.'               $38                 	;0
	70   3525  ASSIGN_CONCAT/30          ?32       16?2                 #39                 	;0
	71   3525  JMP/42                    ?0        ?63                  ?0                  	;0	>>63
	72   3525  FE_FREE/127               ?0        $37                  ?0                  	;0	<<62
	73   3527  RETURN/62                 ?0        16?2                 ?0                  	;0
	74   3530  FETCH_DIM_R/81            $41=      16?1                 40:'name'           	;0	<<57
	75   3530  CONCAT/8                  #42=      $41                  41:'.'              	;0
	76   3530  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'str_replace'    	;3
	77   3530  FETCH_CONSTANT/99         #43=      ?0                   44:'DIRECTORY_SEPARATOR'	;16
	78   3530  INIT_ARRAY/71             #44=      #43                  ?0                  	;8
	79   3530  ADD_ARRAY_ELEMENT/72      #44=      47:'-'               ?0                  	;0
	80   3530  SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
	81   3530  SEND_VAL_EX/116           ?96       48:'.'               ?2                  	;0
	82   3530  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
	83   3530  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
	84   3530  CONCAT/8                  #46=      #42                  $45                 	;0
	85   3530  RETURN/62                 ?0        #46                  ?0                  	;0
	86   3531  NOP/0                     ?0        49:NULL              ?0                  	;4294967295
	*/
}

function junit_init_suite($suite_name)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3533  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3535  BIND_GLOBAL/168           ?0        16?1                 0:'JUNIT'           	;0
	2    3536  INIT_FCALL/61             ?0        ?128                 1:'junit_enabled'   	;0
	3    3536  DO_FCALL/60               $2=       ?0                   ?0                  	;0
	4    3536  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	5    3536  JMPZ/43                   ?0        #3                   ?7                  	;0	>>7
	6    3536  RETURN/62                 ?0        2:NULL               ?0                  	;0
	7    3538  FETCH_DIM_IS/90           $4=       16?1                 3:'suites'          	;0	<<5
	8    3538  ISSET_ISEMPTY_DIM_OBJ/115 #5=       $4                   16?0                	;16777216
	9    3538  BOOL_NOT/13               #6=       #5                   ?0                  	;0
	10   3538  JMPZ/43                   ?0        #6                   ?12                 	;0	>>12
	11   3539  RETURN/62                 ?0        4:NULL               ?0                  	;0
	12   3543  INIT_ARRAY/71             #9=       16?0                 6:'name'            	;38	<<10
	13   3544  ADD_ARRAY_ELEMENT/72      #9=       7:0                  8:'test_total'      	;0
	14   3545  ADD_ARRAY_ELEMENT/72      #9=       9:0                  10:'test_pass'      	;0
	15   3546  ADD_ARRAY_ELEMENT/72      #9=       11:0                 12:'test_fail'      	;0
	16   3547  ADD_ARRAY_ELEMENT/72      #9=       13:0                 14:'test_error'     	;0
	17   3548  ADD_ARRAY_ELEMENT/72      #9=       15:0                 16:'test_skip'      	;0
	18   3549  ADD_ARRAY_ELEMENT/72      #9=       17:0                 18:'test_warn'      	;0
	19   3543  ADD_ARRAY_ELEMENT/72      #9=       19:array (
)         20:'files'          	;0
	20   3551  ADD_ARRAY_ELEMENT/72      #9=       21:0                 22:'execution_time' 	;0
	21   3542  FETCH_DIM_W/84            $7=       16?1                 5:'suites'          	;0
	22   3542  ASSIGN_DIM/147            ?6        $7                   16?0                	;0
	23   3551  OP_DATA/137               ?0        #9                   ?0                  	;0
	24   3553  NOP/0                     ?0        23:NULL              ?0                  	;4294967295
	*/
}

function junit_finish_timer($file_name)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3555  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3557  BIND_GLOBAL/168           ?0        16?1                 0:'JUNIT'           	;0
	2    3558  INIT_FCALL/61             ?0        ?128                 1:'junit_enabled'   	;0
	3    3558  DO_FCALL/60               $3=       ?0                   ?0                  	;0
	4    3558  BOOL_NOT/13               #4=       $3                   ?0                  	;0
	5    3558  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
	6    3558  RETURN/62                 ?0        2:NULL               ?0                  	;0
	7    3560  FETCH_DIM_IS/90           $5=       16?1                 3:'files'           	;0	<<5
	8    3560  FETCH_DIM_IS/90           $6=       $5                   16?0                	;0
	9    3560  ISSET_ISEMPTY_DIM_OBJ/115 #7=       $6                   4:'start'           	;33554432
	10   3560  BOOL_NOT/13               #8=       #7                   ?0                  	;0
	11   3560  JMPZ/43                   ?0        #8                   ?18                 	;0	>>18
	12   3561  INIT_FCALL/61             ?0        ?144                 5:'error'           	;1
	13   3561  ROPE_INIT/54              #10=      ?0                   6:'Timer for '      	;3
	14   3561  ROPE_ADD/55               #10=      #10                  16?0                	;1
	15   3561  ROPE_END/56               #9=       #10                  7:' was not started!'	;2
	16   3561  SEND_VAL/65               ?80       #9                   ?1                  	;0
	17   3561  DO_FCALL/60               ?9        ?0                   ?0                  	;0
	18   3564  FETCH_DIM_IS/90           $13=      16?1                 8:'files'           	;0	<<11
	19   3564  FETCH_DIM_IS/90           $14=      $13                  16?0                	;0
	20   3564  ISSET_ISEMPTY_DIM_OBJ/115 #15=      $14                  9:'total'           	;33554432
	21   3564  BOOL_NOT/13               #16=      #15                  ?0                  	;0
	22   3564  JMPZ/43                   ?0        #16                  ?27                 	;0	>>27
	23   3565  FETCH_DIM_W/84            $17=      16?1                 10:'files'          	;0
	24   3565  FETCH_DIM_W/84            $18=      $17                  16?0                	;0
	25   3565  ASSIGN_DIM/147            ?16       $18                  11:'total'          	;0
	26   3565  OP_DATA/137               ?0        12:0                 ?0                  	;0
	27   3568  FETCH_DIM_R/81            $20=      16?1                 13:'files'          	;0	<<22
	28   3568  FETCH_DIM_R/81            $21=      $20                  16?0                	;0
	29   3568  FETCH_DIM_R/81            $22=      $21                  14:'start'          	;0
	30   3568  ASSIGN/38                 ?20       16?2                 $22                 	;0
	31   3569  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'microtime'      	;1
	32   3569  SEND_VAL_EX/116           ?80       19:true              ?1                  	;0
	33   3569  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
	34   3569  SUB/2                     #28=      $27                  16?2                	;0
	35   3569  FETCH_DIM_RW/87           $24=      16?1                 15:'files'          	;0
	36   3569  FETCH_DIM_RW/87           $25=      $24                  16?0                	;0
	37   3569  ASSIGN_ADD/23             ?23       $25                  16:'total'          	;147
	38   3569  OP_DATA/137               ?0        #28                  ?0                  	;0
	39   3570  FETCH_DIM_UNSET/96        $29=      16?1                 20:'files'          	;0
	40   3570  FETCH_DIM_UNSET/96        $30=      $29                  16?0                	;0
	41   3570  UNSET_DIM/75              ?0        $30                  21:'start'          	;0
	42   3571  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
	*/
}

function junit_merge_results($junit)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3573  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3575  BIND_GLOBAL/168           ?0        16?1                 0:'JUNIT'           	;0
	2    3576  FETCH_DIM_R/81            $6=       16?0                 2:'test_total'      	;0
	3    3576  ASSIGN_ADD/23             ?0        16?1                 1:'test_total'      	;147
	4    3576  OP_DATA/137               ?0        $6                   ?0                  	;0
	5    3577  FETCH_DIM_R/81            $8=       16?0                 4:'test_pass'       	;0
	6    3577  ASSIGN_ADD/23             ?2        16?1                 3:'test_pass'       	;147
	7    3577  OP_DATA/137               ?0        $8                   ?0                  	;0
	8    3578  FETCH_DIM_R/81            $10=      16?0                 6:'test_fail'       	;0
	9    3578  ASSIGN_ADD/23             ?4        16?1                 5:'test_fail'       	;147
	10   3578  OP_DATA/137               ?0        $10                  ?0                  	;0
	11   3579  FETCH_DIM_R/81            $12=      16?0                 8:'test_error'      	;0
	12   3579  ASSIGN_ADD/23             ?6        16?1                 7:'test_error'      	;147
	13   3579  OP_DATA/137               ?0        $12                  ?0                  	;0
	14   3580  FETCH_DIM_R/81            $14=      16?0                 10:'test_skip'      	;0
	15   3580  ASSIGN_ADD/23             ?8        16?1                 9:'test_skip'       	;147
	16   3580  OP_DATA/137               ?0        $14                  ?0                  	;0
	17   3581  FETCH_DIM_R/81            $16=      16?0                 12:'test_warn'      	;0
	18   3581  ASSIGN_ADD/23             ?10       16?1                 11:'test_warn'      	;147
	19   3581  OP_DATA/137               ?0        $16                  ?0                  	;0
	20   3582  FETCH_DIM_R/81            $18=      16?0                 14:'execution_time' 	;0
	21   3582  ASSIGN_ADD/23             ?12       16?1                 13:'execution_time' 	;147
	22   3582  OP_DATA/137               ?0        $18                  ?0                  	;0
	23   3583  FETCH_DIM_R/81            $20=      16?0                 16:'files'          	;0
	24   3583  ASSIGN_ADD/23             ?14       16?1                 15:'files'          	;147
	25   3583  OP_DATA/137               ?0        $20                  ?0                  	;0
	26   3584  FETCH_DIM_R/81            $21=      16?0                 17:'suites'         	;0
	27   3584  FE_RESET_R/77             $22=      $21                  ?66                 	;0
	28   3584  FE_FETCH_R/78             #23=      $22                  16?2                	;66	>>66	<<65
	29   3584  ASSIGN/38                 ?19       16?3                 #23                 	;0
	30   3585  FETCH_DIM_IS/90           $25=      16?1                 18:'suites'         	;0
	31   3585  ISSET_ISEMPTY_DIM_OBJ/115 #26=      $25                  16?3                	;33554432
	32   3585  BOOL_NOT/13               #27=      #26                  ?0                  	;0
	33   3585  JMPZ/43                   ?0        #27                  ?38                 	;0	>>38
	34   3586  FETCH_DIM_W/84            $28=      16?1                 19:'suites'         	;0
	35   3586  ASSIGN_DIM/147            ?24       $28                  16?3                	;0
	36   3586  OP_DATA/137               ?0        16?2                 ?0                  	;0
	37   3587  CONT/255                  ?0        ?28                  0:1                 	;0
	38   3590  FETCH_DIM_W/84            $30=      16?1                 20:'suites'         	;0	<<33
	39   3590  FETCH_DIM_W/84            $31=      $30                  16?3                	;0
	40   3590  ASSIGN_REF/39             ?27       16?4                 $31                 	;0
	41   3591  FETCH_DIM_R/81            $34=      16?2                 22:'test_total'     	;0
	42   3591  ASSIGN_ADD/23             ?28       16?4                 21:'test_total'     	;147
	43   3591  OP_DATA/137               ?0        $34                  ?0                  	;0
	44   3592  FETCH_DIM_R/81            $36=      16?2                 24:'test_pass'      	;0
	45   3592  ASSIGN_ADD/23             ?30       16?4                 23:'test_pass'      	;147
	46   3592  OP_DATA/137               ?0        $36                  ?0                  	;0
	47   3593  FETCH_DIM_R/81            $38=      16?2                 26:'test_fail'      	;0
	48   3593  ASSIGN_ADD/23             ?32       16?4                 25:'test_fail'      	;147
	49   3593  OP_DATA/137               ?0        $38                  ?0                  	;0
	50   3594  FETCH_DIM_R/81            $40=      16?2                 28:'test_error'     	;0
	51   3594  ASSIGN_ADD/23             ?34       16?4                 27:'test_error'     	;147
	52   3594  OP_DATA/137               ?0        $40                  ?0                  	;0
	53   3595  FETCH_DIM_R/81            $42=      16?2                 30:'test_skip'      	;0
	54   3595  ASSIGN_ADD/23             ?36       16?4                 29:'test_skip'      	;147
	55   3595  OP_DATA/137               ?0        $42                  ?0                  	;0
	56   3596  FETCH_DIM_R/81            $44=      16?2                 32:'test_warn'      	;0
	57   3596  ASSIGN_ADD/23             ?38       16?4                 31:'test_warn'      	;147
	58   3596  OP_DATA/137               ?0        $44                  ?0                  	;0
	59   3597  FETCH_DIM_R/81            $46=      16?2                 34:'execution_time' 	;0
	60   3597  ASSIGN_ADD/23             ?40       16?4                 33:'execution_time' 	;147
	61   3597  OP_DATA/137               ?0        $46                  ?0                  	;0
	62   3598  FETCH_DIM_R/81            $48=      16?2                 36:'files'          	;0
	63   3598  ASSIGN_ADD/23             ?42       16?4                 35:'files'          	;147
	64   3598  OP_DATA/137               ?0        $48                  ?0                  	;0
	65   3598  JMP/42                    ?0        ?28                  ?0                  	;0	>>28
	66   3598  FE_FREE/127               ?0        $22                  ?0                  	;0	<<27
	67   3600  NOP/0                     ?0        37:NULL              ?0                  	;4294967295
	*/
}
/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    43    NOP/0                     ?0        ?0                   ?0                  	;0
1    806   INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'function_exists' 	;1
2    806   SEND_VAL_EX/116           ?80       2:'hrtime'           ?1                  	;0
3    806   DO_FCALL_BY_NAME/131      $0=       ?0                   ?0                  	;0
4    806   BOOL_NOT/13               #1=       $0                   ?0                  	;0
5    806   JMPZ/43                   ?0        #1                   ?7                  	;0	>>7
6    807   DECLARE_FUNCTION/141      ?0        3:'hrtime'           ?0                  	;0
7    820   NOP/0                     ?0        ?0                   ?0                  	;0	<<5
8    833   NOP/0                     ?0        ?0                   ?0                  	;0
9    914   NOP/0                     ?0        ?0                   ?0                  	;0
10   1044  NOP/0                     ?0        ?0                   ?0                  	;0
11   1080  NOP/0                     ?0        ?0                   ?0                  	;0
12   1089  NOP/0                     ?0        ?0                   ?0                  	;0
13   1112  NOP/0                     ?0        ?0                   ?0                  	;0
14   1159  NOP/0                     ?0        ?0                   ?0                  	;0
15   1184  NOP/0                     ?0        ?0                   ?0                  	;0
16   1201  NOP/0                     ?0        ?0                   ?0                  	;0
17   1282  NOP/0                     ?0        ?0                   ?0                  	;0
18   1342  NOP/0                     ?0        ?0                   ?0                  	;0
19   1652  NOP/0                     ?0        ?0                   ?0                  	;0
20   1659  NOP/0                     ?0        ?0                   ?0                  	;0
21   1667  NOP/0                     ?0        ?0                   ?0                  	;0
22   1733  NOP/0                     ?0        ?0                   ?0                  	;0
23   1752  NOP/0                     ?0        ?0                   ?0                  	;0
24   2773  NOP/0                     ?0        ?0                   ?0                  	;0
25   2782  NOP/0                     ?0        ?0                   ?0                  	;0
26   2824  NOP/0                     ?0        ?0                   ?0                  	;0
27   2895  NOP/0                     ?0        ?0                   ?0                  	;0
28   2905  NOP/0                     ?0        ?0                   ?0                  	;0
29   2911  NOP/0                     ?0        ?0                   ?0                  	;0
30   2935  NOP/0                     ?0        ?0                   ?0                  	;0
31   2965  NOP/0                     ?0        ?0                   ?0                  	;0
32   2994  NOP/0                     ?0        ?0                   ?0                  	;0
33   3165  NOP/0                     ?0        ?0                   ?0                  	;0
34   3177  NOP/0                     ?0        ?0                   ?0                  	;0
35   3189  NOP/0                     ?0        ?0                   ?0                  	;0
36   3200  NOP/0                     ?0        ?0                   ?0                  	;0
37   3215  NOP/0                     ?0        ?0                   ?0                  	;0
38   3230  NOP/0                     ?0        ?0                   ?0                  	;0
39   3241  NOP/0                     ?0        ?0                   ?0                  	;0
40   3252  NOP/0                     ?0        ?0                   ?0                  	;0
41   3258  NOP/0                     ?0        ?0                   ?0                  	;0
42   3315  NOP/0                     ?0        ?0                   ?0                  	;0
43   3344  NOP/0                     ?0        ?0                   ?0                  	;0
44   3364  NOP/0                     ?0        ?0                   ?0                  	;0
45   3393  NOP/0                     ?0        ?0                   ?0                  	;0
46   3408  NOP/0                     ?0        ?0                   ?0                  	;0
47   3460  NOP/0                     ?0        ?0                   ?0                  	;0
48   3468  NOP/0                     ?0        ?0                   ?0                  	;0
49   3480  NOP/0                     ?0        ?0                   ?0                  	;0
50   3494  NOP/0                     ?0        ?0                   ?0                  	;0
51   3499  NOP/0                     ?0        ?0                   ?0                  	;0
52   3533  NOP/0                     ?0        ?0                   ?0                  	;0
53   3555  NOP/0                     ?0        ?0                   ?0                  	;0
54   3573  NOP/0                     ?0        ?0                   ?0                  	;0
55   3602  NOP/0                     ?0        ?0                   ?0                  	;0
56   3659  INIT_FCALL/61             ?0        ?9376                5:'main'            	;0
57   3659  DO_FCALL/60               ?3        ?0                   ?0                  	;0
58   3660  NOP/0                     ?0        6:1                  ?0                  	;4294967295
*/
?>