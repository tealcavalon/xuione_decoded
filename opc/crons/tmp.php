<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?21                  ?0                  	;0	>>21
1   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'set_time_limit'  	;1
2   6    SEND_VAL_EX/116           ?80       3:0                  ?1                  	;0
3   6    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
4   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'str_replace'     	;3
5   7    SEND_VAL_EX/116           ?80       6:'\\'               ?1                  	;0
6   7    SEND_VAL_EX/116           ?96       7:'/'                ?2                  	;0
7   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'dirname'         	;1
8   7    FETCH_DIM_FUNC_ARG/93     $6=       16?0                 10:0                	;1
9   7    SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
10  7    DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
11  7    SEND_VAR_NO_REF_EX/50     ?112      $7                   ?3                  	;0
12  7    DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
13  7    CONCAT/8                  #9=       $8                   11:'/../www/init.php'	;0
14  7    INCLUDE_OR_EVAL/73        ?5        #9                   ?0                  	;8
15  8    INIT_METHOD_CALL/112      ?0        16?1                 12:'close_mysql'    	;0
16  8    DO_FCALL/60               ?6        ?0                   ?0                  	;0
17  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'cli_set_process_title'	;1
18  9    SEND_VAL_EX/116           ?80       16:'XUI[TMP]'        ?1                  	;0
19  9    DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
20  10   GOTO/253                  ?0        ?39                  ?17                 	;0
21  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'posix_getpwuid' 	;1	<<0
22  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'posix_geteuid'  	;0
23  12   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
24  12   SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
25  12   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
26  12   FETCH_DIM_R/81            $15=      $14                  22:'name'           	;0
27  12   IS_NOT_EQUAL/18           #16=      $15                  23:'xui'            	;0
28  12   BOOL_NOT/13               #17=      #16                  ?0                  	;0
29  12   JMPZ/43                   ?0        #17                  ?31                 	;0	>>31
30  13   GOTO/253                  ?0        ?32                  ?24                 	;0
31  15   EXIT/79                   ?0        25:'Please run as XUI!
' ?0                  	;0	<<29
32  17   BEGIN_SILENCE/57          #18=      ?0                   ?0                  	;0
33  17   FETCH_R/80                $19=      26:'argc'            ?0                  	;268435456
34  17   END_SILENCE/58            ?0        #18                  ?0                  	;0
35  17   JMPZ/43                   ?0        $19                  ?37                 	;0	>>37
36  18   GOTO/253                  ?0        ?1                   ?27                 	;0
37  20   EXIT/79                   ?0        28:0                 ?0                  	;0	<<35
38  21   GOTO/253                  ?0        ?1                   ?29                 	;0
39  23   FETCH_CONSTANT/99         #20=      ?0                   30:'CRONS_TMP_PATH' 	;16
40  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'md5'            	;1
41  23   INIT_STATIC_METHOD_CALL/113 ?0        35:'XUI'             37:'A336B0Dad3EaF634'	;0
42  23   DO_FCALL/60               $21=      ?0                   ?0                  	;0
43  23   CONCAT/8                  #22=      $21                  39:'crons\\tmp.php'	;0
44  23   SEND_VAL_EX/116           ?80       #22                  ?1                  	;0
45  23   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
46  23   CONCAT/8                  #24=      #20                  $23                 	;0
47  23   ASSIGN/38                 ?20       16?2                 #24                 	;0
48  24   INIT_STATIC_METHOD_CALL/113 ?0        40:'XUI'             42:'a3CF732c257bD804'	;1
49  24   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
50  24   DO_FCALL/60               ?21       ?0                   ?0                  	;0
51  25   FETCH_CONSTANT/99         #27=      ?0                   44:'TMP_PATH'       	;16
52  25   INIT_ARRAY/71             #28=      #27                  ?0                  	;28
53  25   FETCH_CONSTANT/99         #29=      ?0                   47:'CRONS_TMP_PATH' 	;16
54  25   ADD_ARRAY_ELEMENT/72      #28=      #29                  ?0                  	;0
55  25   FETCH_CONSTANT/99         #30=      ?0                   50:'DIVERGENCE_TMP_PATH'	;16
56  25   ADD_ARRAY_ELEMENT/72      #28=      #30                  ?0                  	;0
57  25   FETCH_CONSTANT/99         #31=      ?0                   53:'FLOOD_TMP_PATH' 	;16
58  25   ADD_ARRAY_ELEMENT/72      #28=      #31                  ?0                  	;0
59  25   FETCH_CONSTANT/99         #32=      ?0                   56:'MINISTRA_TMP_PATH'	;16
60  25   ADD_ARRAY_ELEMENT/72      #28=      #32                  ?0                  	;0
61  25   FETCH_CONSTANT/99         #33=      ?0                   59:'SIGNALS_TMP_PATH'	;16
62  25   ADD_ARRAY_ELEMENT/72      #28=      #33                  ?0                  	;0
63  25   FETCH_CONSTANT/99         #34=      ?0                   62:'LOGS_TMP_PATH'  	;16
64  25   ADD_ARRAY_ELEMENT/72      #28=      #34                  ?0                  	;0
65  25   FE_RESET_R/77             $35=      #28                  ?99                 	;0
66  25   FE_FETCH_R/78             ?0        $35                  16?3                	;99	>>99	<<98
67  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'scandir'        	;1
68  26   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
69  26   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
70  26   FE_RESET_R/77             $37=      $36                  ?97                 	;0
71  26   FE_FETCH_R/78             ?0        $37                  16?4                	;97	>>97	<<96
72  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'time'           	;0
73  27   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
74  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'filemtime'      	;1
75  27   CONCAT/8                  #39=      16?3                 16?4                	;0
76  27   SEND_VAL_EX/116           ?80       #39                  ?1                  	;0
77  27   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
78  27   SUB/2                     #41=      $38                  $40                 	;0
79  27   IS_SMALLER_OR_EQUAL/20    #42=      71:600               #41                 	;0
80  27   JMPZ_EX/46                #42=      #42                  ?87                 	;0	>>87
81  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'stripos'        	;2
82  27   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
83  27   SEND_VAL_EX/116           ?96       74:'ministra_'       ?2                  	;0
84  27   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
85  27   IS_IDENTICAL/15           #44=      $43                  75:false            	;0
86  27   BOOL/52                   #42=      #44                  ?0                  	;0
87  27   BOOL_NOT/13               #45=      #42                  ?0                  	;0	<<80
88  27   JMPZ/43                   ?0        #45                  ?92                 	;0	>>92
89  28   NOP/0                     ?0        ?0                   ?0                  	;1
90  28   NOP/0                     ?0        ?0                   ?0                  	;1
91  28   GOTO/253                  ?0        ?96                  ?76                 	;0
92  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'unlink'         	;1	<<88
93  30   CONCAT/8                  #46=      16?3                 16?4                	;0
94  30   SEND_VAL_EX/116           ?80       #46                  ?1                  	;0
95  30   DO_FCALL_BY_NAME/131      ?42       ?0                   ?0                  	;0
96  32   JMP/42                    ?0        ?71                  ?0                  	;0	>>71
97  32   FE_FREE/127               ?0        $37                  ?0                  	;0	<<70
98  35   JMP/42                    ?0        ?66                  ?0                  	;0	>>66
99  35   FE_FREE/127               ?0        $35                  ?0                  	;0	<<65
100 38   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'scandir'        	;1
101 38   FETCH_CONSTANT/99         #48=      ?0                   81:'PLAYLIST_PATH'  	;16
102 38   SEND_VAL_EX/116           ?80       #48                  ?1                  	;0
103 38   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
104 38   FE_RESET_R/77             $50=      $49                  ?127                	;0
105 38   FE_FETCH_R/78             ?0        $50                  16?4                	;127	>>127	<<126
106 39   INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'time'           	;0
107 39   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
108 39   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'filemtime'      	;1
109 39   FETCH_CONSTANT/99         #52=      ?0                   88:'PLAYLIST_PATH'  	;16
110 39   CONCAT/8                  #53=      #52                  16?4                	;0
111 39   SEND_VAL_EX/116           ?80       #53                  ?1                  	;0
112 39   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
113 39   SUB/2                     #55=      $51                  $54                 	;0
114 39   FETCH_STATIC_PROP_R/173   $56=      91:'rSettings'       92:'XUI'            	;0
115 39   FETCH_DIM_R/81            $57=      $56                  94:'cache_playlists'	;0
116 39   IS_SMALLER_OR_EQUAL/20    #58=      $57                  #55                 	;0
117 39   BOOL_NOT/13               #59=      #58                  ?0                  	;0
118 39   JMPZ/43                   ?0        #59                  ?121                	;0	>>121
119 40   NOP/0                     ?0        ?0                   ?0                  	;1
120 40   GOTO/253                  ?0        ?126                 ?95                 	;0
121 42   INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'unlink'         	;1	<<118
122 42   FETCH_CONSTANT/99         #60=      ?0                   98:'PLAYLIST_PATH'  	;16
123 42   CONCAT/8                  #61=      #60                  16?4                	;0
124 42   SEND_VAL_EX/116           ?80       #61                  ?1                  	;0
125 42   DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
126 44   JMP/42                    ?0        ?105                 ?0                  	;0	>>105
127 44   FE_FREE/127               ?0        $50                  ?0                  	;0	<<104
128 46   GOTO/253                  ?0        ?129                 ?101                	;0
129 49   INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'clearstatcache'	;0
130 49   DO_FCALL_BY_NAME/131      ?58       ?0                   ?0                  	;0
131 50   GOTO/253                  ?0        ?132                 ?104                	;0
132 52   BEGIN_SILENCE/57          #64=      ?0                   ?0                  	;0
133 52   INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'unlink'        	;1
134 52   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
135 52   DO_FCALL_BY_NAME/131      ?60       ?0                   ?0                  	;0
136 52   END_SILENCE/58            ?0        #64                  ?0                  	;0
137 53   NOP/0                     ?0        107:1                ?0                  	;4294967295
*/

?>