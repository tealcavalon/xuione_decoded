<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?55                  ?0                  	;0	>>55
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'tempnam'         	;2
2   5    FETCH_CONSTANT/99         #11=      ?0                   3:'TMP_PATH'        	;16
3   5    SEND_VAL_EX/116           ?80       #11                  ?1                  	;0
4   5    SEND_VAL_EX/116           ?96       6:'crontab'          ?2                  	;0
5   5    DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
6   5    ASSIGN/38                 ?2        16?0                 $12                 	;0
7   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'file_put_contents'	;2
8   6    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
9   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'implode'         	;2
10  6    SEND_VAL_EX/116           ?80       11:'
'               ?1                  	;0
11  6    SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
12  6    DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
13  6    CONCAT/8                  #15=      $14                  12:'
'              	;0
14  6    SEND_VAL_EX/116           ?96       #15                  ?2                  	;0
15  6    DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
16  7    INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'exec'           	;1
17  7    SEND_VAL_EX/116           ?80       15:'sudo chattr -i /var/spool/cron/crontabs/root' ?1                  	;0
18  7    DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
19  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'exec'           	;1
20  8    SEND_VAL_EX/116           ?80       18:'sudo crontab -r' ?1                  	;0
21  8    DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
22  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'exec'           	;1
23  9    CONCAT/8                  #19=      21:'sudo crontab '   16?0                	;0
24  9    SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
25  9    DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
26  10   GOTO/253                  ?0        ?309                 ?22                 	;0
27  12   FETCH_CONSTANT/99         #22=      ?0                   23:'PHP_BIN'        	;16
28  12   CONCAT/8                  #23=      26:'* * * * * '      #22                 	;0
29  12   CONCAT/8                  #24=      #23                  27:' '              	;0
30  12   FETCH_CONSTANT/99         #25=      ?0                   28:'CRON_PATH'      	;16
31  12   CONCAT/8                  #26=      #24                  #25                 	;0
32  12   CONCAT/8                  #27=      #26                  31:'root_mysql.php # XUI'	;0
33  12   ASSIGN_DIM/147            ?10       16?2                 ?4442274            	;0
34  12   OP_DATA/137               ?0        #27                  ?0                  	;0
35  14   ASSIGN/38                 ?17       16?3                 32:false            	;0
36  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'exec'           	;2
37  15   SEND_VAL_EX/116           ?80       35:'sudo crontab -l' ?1                  	;0
38  15   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
39  15   DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
40  16   FE_RESET_R/77             $30=      16?2                 ?53                 	;0
41  16   FE_FETCH_R/78             ?0        $30                  16?4                	;53	>>53	<<52
42  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'in_array'       	;2
43  17   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
44  17   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
45  17   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
46  17   JMPZ/43                   ?0        $31                  ?49                 	;0	>>49
47  18   NOP/0                     ?0        ?0                   ?0                  	;1
48  18   GOTO/253                  ?0        ?52                  ?38                 	;0
49  20   ASSIGN_DIM/147            ?21       16?1                 ?4397406            	;0	<<46
50  20   OP_DATA/137               ?0        16?4                 ?0                  	;0
51  21   ASSIGN/38                 ?22       16?3                 39:true             	;0
52  23   JMP/42                    ?0        ?41                  ?0                  	;0	>>41
53  23   FE_FREE/127               ?0        $30                  ?0                  	;0	<<40
54  25   GOTO/253                  ?0        ?290                 ?40                 	;0
55  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'set_time_limit' 	;1	<<0
56  27   SEND_VAL_EX/116           ?80       43:0                 ?1                  	;0
57  27   DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
58  28   BEGIN_SILENCE/57          #35=      ?0                   ?0                  	;0
59  28   FETCH_R/80                $36=      44:'argc'            ?0                  	;268435456
60  28   END_SILENCE/58            ?0        #35                  ?0                  	;0
61  28   JMPZ/43                   ?0        $36                  ?63                 	;0	>>63
62  29   GOTO/253                  ?0        ?64                  ?45                 	;0
63  31   EXIT/79                   ?0        46:0                 ?0                  	;0	<<61
64  33   ASSIGN/38                 ?26       16?5                 47:false            	;0
65  34   GOTO/253                  ?0        ?211                 ?48                 	;0
66  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'file_exists'    	;1
67  36   FETCH_CONSTANT/99         #38=      ?0                   51:'CRON_PATH'      	;16
68  36   CONCAT/8                  #39=      #38                  54:'cache_engine.php'	;0
69  36   SEND_VAL_EX/116           ?80       #39                  ?1                  	;0
70  36   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
71  36   JMPZ_EX/46                #41=      $40                  ?79                 	;0	>>79
72  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'file_exists'    	;1
73  36   FETCH_CONSTANT/99         #42=      ?0                   57:'CACHE_TMP_PATH' 	;16
74  36   CONCAT/8                  #43=      #42                  60:'cache_complete' 	;0
75  36   SEND_VAL_EX/116           ?80       #43                  ?1                  	;0
76  36   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
77  36   BOOL_NOT/13               #45=      $44                  ?0                  	;0
78  36   BOOL/52                   #41=      #45                  ?0                  	;0
79  36   BOOL_NOT/13               #46=      #41                  ?0                  	;0	<<71
80  36   JMPZ/43                   ?0        #46                  ?82                 	;0	>>82
81  37   GOTO/253                  ?0        ?92                  ?61                 	;0
82  39   ECHO/40                   ?0        62:'Generating cache...
' ?0                  	;0	<<80
83  40   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'exec'           	;1
84  40   FETCH_CONSTANT/99         #47=      ?0                   65:'PHP_BIN'        	;16
85  40   CONCAT/8                  #48=      68:'sudo -u xui '    #47                 	;0
86  40   CONCAT/8                  #49=      #48                  69:' '              	;0
87  40   FETCH_CONSTANT/99         #50=      ?0                   70:'CRON_PATH'      	;16
88  40   CONCAT/8                  #51=      #49                  #50                 	;0
89  40   CONCAT/8                  #52=      #51                  73:'cache_engine.php >/dev/null 2>/dev/null &'	;0
90  40   SEND_VAL_EX/116           ?80       #52                  ?1                  	;0
91  40   DO_FCALL_BY_NAME/131      ?42       ?0                   ?0                  	;0
92  43   GOTO/253                  ?0        ?93                  ?74                 	;0
93  46   GOTO/253                  ?0        ?326                 ?75                 	;0
94  48   ASSIGN/38                 ?43       16?2                 76:array (
)        	;0
95  49   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'file_exists'    	;1
96  49   FETCH_CONSTANT/99         #55=      ?0                   79:'CRON_PATH'      	;16
97  49   CONCAT/8                  #56=      #55                  82:'root_signals.php'	;0
98  49   SEND_VAL_EX/116           ?80       #56                  ?1                  	;0
99  49   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
100 49   BOOL_NOT/13               #58=      $57                  ?0                  	;0
101 49   JMPZ/43                   ?0        #58                  ?103                	;0	>>103
102 50   GOTO/253                  ?0        ?111                 ?83                 	;0
103 52   FETCH_CONSTANT/99         #60=      ?0                   84:'PHP_BIN'        	;16	<<101
104 52   CONCAT/8                  #61=      87:'* * * * * '      #60                 	;0
105 52   CONCAT/8                  #62=      #61                  88:' '              	;0
106 52   FETCH_CONSTANT/99         #63=      ?0                   89:'CRON_PATH'      	;16
107 52   CONCAT/8                  #64=      #62                  #63                 	;0
108 52   CONCAT/8                  #65=      #64                  92:'root_signals.php # XUI'	;0
109 52   ASSIGN_DIM/147            ?48       16?2                 ?4397406            	;0
110 52   OP_DATA/137               ?0        #65                  ?0                  	;0
111 54   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'file_exists'    	;1
112 54   FETCH_CONSTANT/99         #66=      ?0                   95:'CRON_PATH'      	;16
113 54   CONCAT/8                  #67=      #66                  98:'root_mysql.php' 	;0
114 54   SEND_VAL_EX/116           ?80       #67                  ?1                  	;0
115 54   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
116 54   BOOL_NOT/13               #69=      $68                  ?0                  	;0
117 54   JMPZ/43                   ?0        #69                  ?119                	;0	>>119
118 55   GOTO/253                  ?0        ?35                  ?99                 	;0
119 57   GOTO/253                  ?0        ?27                  ?100                	;0	<<117
120 59   INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'exec'          	;1
121 59   FETCH_CONSTANT/99         #70=      ?0                   103:'PHP_BIN'       	;16
122 59   CONCAT/8                  #71=      #70                  106:' '             	;0
123 59   FETCH_CONSTANT/99         #72=      ?0                   107:'CRON_PATH'     	;16
124 59   CONCAT/8                  #73=      #71                  #72                 	;0
125 59   CONCAT/8                  #74=      #73                  110:'cache_engine.php >/dev/null 2>/dev/null &'	;0
126 59   SEND_VAL_EX/116           ?80       #74                  ?1                  	;0
127 59   DO_FCALL_BY_NAME/131      ?64       ?0                   ?0                  	;0
128 62   GOTO/253                  ?0        ?93                  ?111                	;0
129 64   GOTO/253                  ?0        ?94                  ?112                	;0
130 66   ASSIGN/38                 ?65       16?6                 113:'#! /bin/bash
' 	;0
131 67   ASSIGN/38                 ?66       16?7                 114:'upstream php {
    least_conn;
'	;0
132 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   115:'file_get_contents'	;1
133 68   FETCH_CONSTANT/99         #78=      ?0                   117:'XUI_HOME'      	;16
134 68   CONCAT/8                  #79=      #78                  120:'bin/php/etc/template'	;0
135 68   SEND_VAL_EX/116           ?80       #79                  ?1                  	;0
136 68   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
137 68   ASSIGN/38                 ?70       16?8                 $80                 	;0
138 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'exec'          	;1
139 69   FETCH_CONSTANT/99         #82=      ?0                   123:'XUI_HOME'      	;16
140 69   CONCAT/8                  #83=      126:'rm -f '         #82                 	;0
141 69   CONCAT/8                  #84=      #83                  127:'bin/php/etc/*.conf'	;0
142 69   SEND_VAL_EX/116           ?80       #84                  ?1                  	;0
143 69   DO_FCALL_BY_NAME/131      ?74       ?0                   ?0                  	;0
144 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'range'         	;2
145 70   SEND_VAL_EX/116           ?80       130:1                ?1                  	;0
146 70   SEND_VAL_EX/116           ?96       131:4                ?2                  	;0
147 70   DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
148 70   FE_RESET_R/77             $87=      $86                  ?190                	;0
149 70   FE_FETCH_R/78             ?0        $87                  16?9                	;190	>>190	<<189
150 71   FETCH_CONSTANT/99         #88=      ?0                   132:'XUI_HOME'      	;16
151 71   CONCAT/8                  #89=      135:'start-stop-daemon --start --quiet --pidfile ' #88                 	;0
152 71   CONCAT/8                  #90=      #89                  136:'bin/php/sockets/'	;0
153 71   CONCAT/8                  #91=      #90                  16?9                	;0
154 71   CONCAT/8                  #92=      #91                  137:'.pid --exec '  	;0
155 71   FETCH_CONSTANT/99         #93=      ?0                   138:'XUI_HOME'      	;16
156 71   CONCAT/8                  #94=      #92                  #93                 	;0
157 71   CONCAT/8                  #95=      #94                  141:'bin/php/sbin/php-fpm -- --daemonize --fpm-config '	;0
158 71   FETCH_CONSTANT/99         #96=      ?0                   142:'XUI_HOME'      	;16
159 71   CONCAT/8                  #97=      #95                  #96                 	;0
160 71   CONCAT/8                  #98=      #97                  145:'bin/php/etc/'  	;0
161 71   CONCAT/8                  #99=      #98                  16?9                	;0
162 71   CONCAT/8                  #100=     #99                  146:'.conf
'        	;0
163 71   ASSIGN_CONCAT/30          ?90       16?6                 #100                	;0
164 72   FETCH_CONSTANT/99         #102=     ?0                   147:'XUI_HOME'      	;16
165 72   CONCAT/8                  #103=     150:'    server unix:' #102                	;0
166 72   CONCAT/8                  #104=     #103                 151:'bin/php/sockets/'	;0
167 72   CONCAT/8                  #105=     #104                 16?9                	;0
168 72   CONCAT/8                  #106=     #105                 152:'.sock;
'       	;0
169 72   ASSIGN_CONCAT/30          ?96       16?7                 #106                	;0
170 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'file_put_contents'	;2
171 73   FETCH_CONSTANT/99         #108=     ?0                   155:'XUI_HOME'      	;16
172 73   CONCAT/8                  #109=     #108                 158:'bin/php/etc/'  	;0
173 73   CONCAT/8                  #110=     #109                 16?9                	;0
174 73   CONCAT/8                  #111=     #110                 159:'.conf'         	;0
175 73   SEND_VAL_EX/116           ?80       #111                 ?1                  	;0
176 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'str_replace'   	;3
177 73   SEND_VAL_EX/116           ?80       162:'#PATH#'         ?1                  	;0
178 73   FETCH_CONSTANT/99         #112=     ?0                   163:'XUI_HOME'      	;16
179 73   SEND_VAL_EX/116           ?96       #112                 ?2                  	;0
180 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   166:'str_replace'   	;3
181 73   SEND_VAL_EX/116           ?80       168:'#ID#'           ?1                  	;0
182 73   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
183 73   SEND_VAR_EX/66            ?112      16?8                 ?3                  	;0
184 73   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
185 73   SEND_VAR_NO_REF_EX/50     ?112      $113                 ?3                  	;0
186 73   DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
187 73   SEND_VAR_NO_REF_EX/50     ?96       $114                 ?2                  	;0
188 73   DO_FCALL_BY_NAME/131      ?104      ?0                   ?0                  	;0
189 74   JMP/42                    ?0        ?149                 ?0                  	;0	>>149
190 74   FE_FREE/127               ?0        $87                  ?0                  	;0	<<148
191 76   GOTO/253                  ?0        ?295                 ?169                	;0
192 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'define'        	;2
193 78   SEND_VAL_EX/116           ?80       172:'XUI_HOME'       ?1                  	;0
194 78   SEND_VAL_EX/116           ?96       173:'/home/xui/'     ?2                  	;0
195 78   DO_FCALL_BY_NAME/131      ?105      ?0                   ?0                  	;0
196 79   FETCH_CONSTANT/99         #117=     ?0                   174:'XUI_HOME'      	;16
197 79   CONCAT/8                  #118=     #117                 177:'www/stream/init.php'	;0
198 79   INCLUDE_OR_EVAL/73        ?108      #118                 ?0                  	;8
199 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'ini_set'       	;2
200 80   SEND_VAL_EX/116           ?80       180:'display_errors' ?1                  	;0
201 80   SEND_VAL_EX/116           ?96       181:1                ?2                  	;0
202 80   DO_FCALL_BY_NAME/131      ?109      ?0                   ?0                  	;0
203 81   INIT_FCALL_BY_NAME/59     ?0        ?0                   182:'ini_set'       	;2
204 81   SEND_VAL_EX/116           ?80       184:'display_startup_errors' ?1                  	;0
205 81   SEND_VAL_EX/116           ?96       185:1                ?2                  	;0
206 81   DO_FCALL_BY_NAME/131      ?110      ?0                   ?0                  	;0
207 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'error_reporting'	;1
208 82   SEND_VAL_EX/116           ?80       188:32767            ?1                  	;0
209 82   DO_FCALL_BY_NAME/131      ?111      ?0                   ?0                  	;0
210 83   GOTO/253                  ?0        ?228                 ?189                	;0
211 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'count'         	;1
212 85   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
213 85   DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
214 85   IS_SMALLER/19             #124=     192:1                $123                	;0
215 85   BOOL_NOT/13               #125=     #124                 ?0                  	;0
216 85   JMPZ/43                   ?0        #125                 ?218                	;0	>>218
217 86   GOTO/253                  ?0        ?227                 ?193                	;0
218 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'intval'        	;1	<<216
219 88   FETCH_DIM_FUNC_ARG/93     $126=     16?10                196:1               	;1
220 88   SEND_VAR_EX/66            ?80       $126                 ?1                  	;0
221 88   DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
222 88   IS_EQUAL/17               #128=     $127                 197:1               	;0
223 88   BOOL_NOT/13               #129=     #128                 ?0                  	;0
224 88   JMPZ/43                   ?0        #129                 ?226                	;0	>>226
225 89   GOTO/253                  ?0        ?227                 ?198                	;0
226 91   ASSIGN/38                 ?119      16?5                 199:true            	;0	<<224
227 94   GOTO/253                  ?0        ?192                 ?200                	;0
228 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'file_exists'   	;1
229 96   FETCH_CONSTANT/99         #131=     ?0                   203:'XUI_HOME'      	;16
230 96   CONCAT/8                  #132=     #131                 206:'status'        	;0
231 96   SEND_VAL_EX/116           ?80       #132                 ?1                  	;0
232 96   DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
233 96   BOOL_NOT/13               #134=     $133                 ?0                  	;0
234 96   JMPZ/43                   ?0        #134                 ?236                	;0	>>236
235 97   GOTO/253                  ?0        ?242                 ?207                	;0
236 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'exec'          	;1	<<234
237 99   FETCH_CONSTANT/99         #135=     ?0                   210:'XUI_HOME'      	;16
238 99   CONCAT/8                  #136=     213:'sudo '          #135                	;0
239 99   CONCAT/8                  #137=     #136                 214:'status 1'      	;0
240 99   SEND_VAL_EX/116           ?80       #137                 ?1                  	;0
241 99   DO_FCALL_BY_NAME/131      ?127      ?0                   ?0                  	;0
242 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'filesize'      	;1
243 101  FETCH_CONSTANT/99         #139=     ?0                   217:'XUI_HOME'      	;16
244 101  CONCAT/8                  #140=     #139                 220:'bin/daemons.sh'	;0
245 101  SEND_VAL_EX/116           ?80       #140                 ?1                  	;0
246 101  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
247 101  IS_EQUAL/17               #142=     $141                 221:0               	;0
248 101  BOOL_NOT/13               #143=     #142                 ?0                  	;0
249 101  JMPZ/43                   ?0        #143                 ?251                	;0	>>251
250 102  GOTO/253                  ?0        ?308                 ?222                	;0
251 104  ECHO/40                   ?0        223:'Daemons corrupted! Regenerating...
' ?0                  	;0	<<249
252 105  GOTO/253                  ?0        ?130                 ?224                	;0
253 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'posix_getpwuid'	;1
254 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   227:'posix_geteuid' 	;0
255 107  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
256 107  SEND_VAR_NO_REF_EX/50     ?80       $144                 ?1                  	;0
257 107  DO_FCALL_BY_NAME/131      $145=     ?0                   ?0                  	;0
258 107  FETCH_DIM_R/81            $146=     $145                 229:'name'          	;0
259 107  IS_EQUAL/17               #147=     $146                 230:'root'          	;0
260 107  JMPZ/43                   ?0        #147                 ?262                	;0	>>262
261 108  GOTO/253                  ?0        ?129                 ?231                	;0
262 110  JMPZ/43                   ?0        16?5                 ?264                	;0	>>264	<<260
263 111  GOTO/253                  ?0        ?128                 ?232                	;0
264 113  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'exec'          	;1	<<262
265 113  FETCH_CONSTANT/99         #148=     ?0                   235:'PHP_BIN'       	;16
266 113  CONCAT/8                  #149=     #148                 238:' '             	;0
267 113  FETCH_CONSTANT/99         #150=     ?0                   239:'CRON_PATH'     	;16
268 113  CONCAT/8                  #151=     #149                 #150                	;0
269 113  CONCAT/8                  #152=     #151                 242:'cache.php 1'   	;0
270 113  SEND_VAL_EX/116           ?80       #152                 ?1                  	;0
271 113  DO_FCALL_BY_NAME/131      ?142      ?0                   ?0                  	;0
272 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'file_exists'   	;1
273 114  FETCH_CONSTANT/99         #154=     ?0                   245:'CRON_PATH'     	;16
274 114  CONCAT/8                  #155=     #154                 248:'cache_engine.php'	;0
275 114  SEND_VAL_EX/116           ?80       #155                 ?1                  	;0
276 114  DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
277 114  JMPZ_EX/46                #157=     $156                 ?285                	;0	>>285
278 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'file_exists'   	;1
279 114  FETCH_CONSTANT/99         #158=     ?0                   251:'CACHE_TMP_PATH'	;16
280 114  CONCAT/8                  #159=     #158                 254:'cache_complete'	;0
281 114  SEND_VAL_EX/116           ?80       #159                 ?1                  	;0
282 114  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
283 114  BOOL_NOT/13               #161=     $160                 ?0                  	;0
284 114  BOOL/52                   #157=     #161                 ?0                  	;0
285 114  BOOL_NOT/13               #162=     #157                 ?0                  	;0	<<277
286 114  JMPZ/43                   ?0        #162                 ?288                	;0	>>288
287 115  GOTO/253                  ?0        ?128                 ?255                	;0
288 117  ECHO/40                   ?0        256:'Generating cache...
' ?0                  	;0	<<286
289 118  GOTO/253                  ?0        ?120                 ?257                	;0
290 121  JMPZ/43                   ?0        16?3                 ?292                	;0	>>292
291 122  GOTO/253                  ?0        ?294                 ?258                	;0
292 124  ECHO/40                   ?0        259:'Crontab already installed
' ?0                  	;0	<<290
293 125  GOTO/253                  ?0        ?313                 ?260                	;0
294 127  GOTO/253                  ?0        ?1                   ?261                	;0
295 130  ASSIGN_CONCAT/30          ?152      16?7                 262:'}'             	;0
296 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   263:'file_put_contents'	;2
297 131  FETCH_CONSTANT/99         #164=     ?0                   265:'XUI_HOME'      	;16
298 131  CONCAT/8                  #165=     #164                 268:'bin/daemons.sh'	;0
299 131  SEND_VAL_EX/116           ?80       #165                 ?1                  	;0
300 131  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
301 131  DO_FCALL_BY_NAME/131      ?155      ?0                   ?0                  	;0
302 132  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'file_put_contents'	;2
303 132  FETCH_CONSTANT/99         #167=     ?0                   271:'XUI_HOME'      	;16
304 132  CONCAT/8                  #168=     #167                 274:'bin/nginx/conf/balance.conf'	;0
305 132  SEND_VAL_EX/116           ?80       #168                 ?1                  	;0
306 132  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
307 132  DO_FCALL_BY_NAME/131      ?158      ?0                   ?0                  	;0
308 134  GOTO/253                  ?0        ?253                 ?275                	;0
309 136  INIT_FCALL_BY_NAME/59     ?0        ?0                   276:'exec'          	;1
310 136  SEND_VAL_EX/116           ?80       278:'sudo chattr +i /var/spool/cron/crontabs/root' ?1                  	;0
311 136  DO_FCALL_BY_NAME/131      ?159      ?0                   ?0                  	;0
312 137  ECHO/40                   ?0        279:'Crontab installed
' ?0                  	;0
313 139  JMPZ/43                   ?0        16?5                 ?315                	;0	>>315
314 140  GOTO/253                  ?0        ?92                  ?280                	;0
315 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'exec'          	;2	<<313
316 142  FETCH_CONSTANT/99         #171=     ?0                   283:'PHP_BIN'       	;16
317 142  CONCAT/8                  #172=     286:'sudo -u xui '   #171                	;0
318 142  CONCAT/8                  #173=     #172                 287:' '             	;0
319 142  FETCH_CONSTANT/99         #174=     ?0                   288:'CRON_PATH'     	;16
320 142  CONCAT/8                  #175=     #173                 #174                	;0
321 142  CONCAT/8                  #176=     #175                 291:'cache.php 1'   	;0
322 142  SEND_VAL_EX/116           ?80       #176                 ?1                  	;0
323 142  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
324 142  DO_FCALL_BY_NAME/131      ?166      ?0                   ?0                  	;0
325 143  GOTO/253                  ?0        ?66                  ?292                	;0
326 145  ECHO/40                   ?0        293:'
'              ?0                  	;0
327 146  NOP/0                     ?0        294:1                ?0                  	;4294967295
*/

?>