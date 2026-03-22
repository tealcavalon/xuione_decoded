<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?92                  ?0                  	;0	>>92
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'basename'        	;1
2   5    SEND_VAL_EX/116           ?80       3:'reseller\\session.php' ?1                  	;0
3   5    DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
4   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'basename'        	;1
5   5    FETCH_FUNC_ARG/92         $3=       6:'_SERVER'          ?0                  	;1
6   5    FETCH_DIM_FUNC_ARG/93     $4=       $3                   7:'SCRIPT_FILENAME' 	;1
7   5    SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
8   5    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
9   5    IS_EQUAL/17               #6=       $2                   $5                  	;0
10  5    JMPZ/43                   ?0        #6                   ?12                 	;0	>>12
11  6    GOTO/253                  ?0        ?18                  ?8                  	;0
12  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'time'           	;0	<<10
13  8    DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
14  8    FETCH_W/83                $7=       9:'_SESSION'         ?0                  	;0
15  8    ASSIGN_DIM/147            ?6        $7                   10:'rlast_activity' 	;0
16  8    OP_DATA/137               ?0        $9                   ?0                  	;0
17  9    GOTO/253                  ?0        ?46                  ?13                 	;0
18  11   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'json_encode'    	;1
19  11   SEND_VAL_EX/116           ?80       16:array (
  'result' => true,
) ?1                  	;0
20  11   DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
21  11   ECHO/40                   ?0        $10                  ?0                  	;0
22  12   GOTO/253                  ?0        ?45                  ?17                 	;0
23  14   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'header'         	;1
24  14   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'urlencode'      	;1
25  14   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'basename'       	;2
26  14   FETCH_FUNC_ARG/92         $11=      24:'_SERVER'         ?0                  	;1
27  14   FETCH_DIM_FUNC_ARG/93     $12=      $11                  25:'REQUEST_URI'    	;1
28  14   SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
29  14   SEND_VAL_EX/116           ?96       26:'.php'            ?2                  	;0
30  14   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
31  14   SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
32  14   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
33  14   CONCAT/8                  #15=      27:'Location: login?referrer=' $14                 	;0
34  14   SEND_VAL_EX/116           ?80       #15                  ?1                  	;0
35  14   DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
36  15   EXIT/79                   ?0        ?0                   ?0                  	;0
37  16   GOTO/253                  ?0        ?44                  ?28                 	;0
38  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'json_encode'    	;1
39  18   SEND_VAL_EX/116           ?80       31:array (
  'result' => false,
) ?1                  	;0
40  18   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
41  18   ECHO/40                   ?0        $17                  ?0                  	;0
42  19   GOTO/253                  ?0        ?43                  ?32                 	;0
43  21   EXIT/79                   ?0        ?0                   ?0                  	;0
44  24   GOTO/253                  ?0        ?125                 ?33                 	;0
45  26   EXIT/79                   ?0        ?0                   ?0                  	;0
46  28   GOTO/253                  ?0        ?44                  ?34                 	;0
47  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'basename'       	;1
48  30   SEND_VAL_EX/116           ?80       37:'reseller\\session.php' ?1                  	;0
49  30   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
50  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'basename'       	;1
51  30   FETCH_FUNC_ARG/92         $19=      40:'_SERVER'         ?0                  	;1
52  30   FETCH_DIM_FUNC_ARG/93     $20=      $19                  41:'SCRIPT_FILENAME'	;1
53  30   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
54  30   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
55  30   IS_EQUAL/17               #22=      $18                  $21                 	;0
56  30   JMPZ/43                   ?0        #22                  ?58                 	;0	>>58
57  31   GOTO/253                  ?0        ?38                  ?42                 	;0
58  33   GOTO/253                  ?0        ?23                  ?43                 	;0	<<56
59  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'session_start'  	;0
60  35   DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
61  37   FETCH_IS/89               $24=      46:'_SESSION'        ?0                  	;0
62  37   ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  47:'reseller'       	;33554432
63  37   JMPZ_EX/46                #25=      #25                  ?67                 	;0	>>67
64  37   FETCH_IS/89               $26=      48:'_SESSION'        ?0                  	;0
65  37   ISSET_ISEMPTY_DIM_OBJ/115 #27=      $26                  49:'rlast_activity' 	;33554432
66  37   BOOL/52                   #25=      #27                  ?0                  	;0
67  37   JMPZ_EX/46                #25=      #25                  ?76                 	;0	>>76	<<63
68  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'time'           	;0
69  37   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
70  37   FETCH_R/80                $29=      52:'_SESSION'        ?0                  	;0
71  37   FETCH_DIM_R/81            $30=      $29                  53:'rlast_activity' 	;0
72  37   SUB/2                     #31=      $28                  $30                 	;0
73  37   MUL/3                     #32=      16?0                 54:60               	;0
74  37   IS_SMALLER/19             #33=      #32                  #31                 	;0
75  37   BOOL/52                   #25=      #33                  ?0                  	;0
76  37   BOOL_NOT/13               #34=      #25                  ?0                  	;0	<<67
77  37   JMPZ/43                   ?0        #34                  ?79                 	;0	>>79
78  38   GOTO/253                  ?0        ?119                 ?55                 	;0
79  40   FE_RESET_R/77             $35=      56:array (
  0 => 'reseller',
  1 => 'rip',
  2 => 'rcode',
  3 => 'rverify',
  4 => 'rlast_activity',
) ?90                 	;0	<<77
80  40   FE_FETCH_R/78             ?0        $35                  16?1                	;90	>>90	<<89
81  41   FETCH_IS/89               $36=      57:'_SESSION'        ?0                  	;0
82  41   ISSET_ISEMPTY_DIM_OBJ/115 #37=      $36                  16?1                	;33554432
83  41   BOOL_NOT/13               #38=      #37                  ?0                  	;0
84  41   JMPZ/43                   ?0        #38                  ?87                 	;0	>>87
85  42   NOP/0                     ?0        ?0                   ?0                  	;1
86  42   GOTO/253                  ?0        ?89                  ?58                 	;0
87  44   FETCH_UNSET/95            $39=      59:'_SESSION'        ?0                  	;0	<<84
88  44   UNSET_DIM/75              ?0        $39                  16?1                	;0
89  46   JMP/42                    ?0        ?80                  ?0                  	;0	>>80
90  46   FE_FREE/127               ?0        $35                  ?0                  	;0	<<79
91  49   GOTO/253                  ?0        ?110                 ?60                 	;0
92  51   ASSIGN/38                 ?38       16?0                 61:60               	;0	<<0
93  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'defined'        	;1
94  52   SEND_VAL_EX/116           ?80       64:'TMP_PATH'        ?1                  	;0
95  52   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
96  52   JMPZ/43                   ?0        $41                  ?98                 	;0	>>98
97  53   GOTO/253                  ?0        ?102                 ?65                 	;0
98  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'define'         	;2	<<96
99  55   SEND_VAL_EX/116           ?80       68:'TMP_PATH'        ?1                  	;0
100 55   SEND_VAL_EX/116           ?96       69:'/home/xui/tmp/'  ?2                  	;0
101 55   DO_FCALL_BY_NAME/131      ?40       ?0                   ?0                  	;0
102 57   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'session_status' 	;0
103 57   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
104 57   FETCH_CONSTANT/99         #44=      ?0                   72:'PHP_SESSION_NONE'	;16
105 57   IS_EQUAL/17               #45=      $43                  #44                 	;0
106 57   BOOL_NOT/13               #46=      #45                  ?0                  	;0
107 57   JMPZ/43                   ?0        #46                  ?109                	;0	>>109
108 58   GOTO/253                  ?0        ?61                  ?75                 	;0
109 60   GOTO/253                  ?0        ?59                  ?76                 	;0	<<107
110 62   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'session_status' 	;0
111 62   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
112 62   FETCH_CONSTANT/99         #48=      ?0                   79:'PHP_SESSION_NONE'	;16
113 62   IS_IDENTICAL/15           #49=      $47                  #48                 	;0
114 62   BOOL_NOT/13               #50=      #49                  ?0                  	;0
115 62   JMPZ/43                   ?0        #50                  ?117                	;0	>>117
116 63   GOTO/253                  ?0        ?119                 ?82                 	;0
117 65   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'session_start'  	;0	<<115
118 65   DO_FCALL_BY_NAME/131      ?49       ?0                   ?0                  	;0
119 68   FETCH_IS/89               $52=      85:'_SESSION'        ?0                  	;0
120 68   ISSET_ISEMPTY_DIM_OBJ/115 #53=      $52                  86:'reseller'       	;33554432
121 68   BOOL_NOT/13               #54=      #53                  ?0                  	;0
122 68   JMPZ/43                   ?0        #54                  ?124                	;0	>>124
123 69   GOTO/253                  ?0        ?47                  ?87                 	;0
124 71   GOTO/253                  ?0        ?1                   ?88                 	;0	<<122
125 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'session_write_close'	;0
126 73   DO_FCALL_BY_NAME/131      ?53       ?0                   ?0                  	;0
127 74   NOP/0                     ?0        91:1                 ?0                  	;4294967295
*/

?>