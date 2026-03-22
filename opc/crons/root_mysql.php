<?php


function ae7efC3Bf879bD7C($Fd94beb5ab19eb72, $D44370d9bef85284)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   123  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   123  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2   125  FE_RESET_R/77             $3=       16?0                 ?15                 	;0
	3   125  FE_FETCH_R/78             ?0        $3                   16?2                	;15	>>15	<<14
	4   126  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'stristr'         	;2
	5   126  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	6   126  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	7   126  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	8   126  BOOL_NOT/13               #5=       $4                   ?0                  	;0
	9   126  JMPZ/43                   ?0        #5                   ?12                 	;0	>>12
	10  127  NOP/0                     ?0        ?0                   ?0                  	;1
	11  127  GOTO/253                  ?0        ?14                  ?2                  	;0
	12  129  FE_FREE/127               ?0        $3                   ?0                  	;1	<<9
	13  129  RETURN/62                 ?0        3:true               ?0                  	;0
	14  131  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
	15  131  FE_FREE/127               ?0        $3                   ?0                  	;0	<<2
	16  134  RETURN/62                 ?0        4:false              ?0                  	;0
	17  135  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?45                  ?0                  	;0	>>45
1   5    INIT_STATIC_METHOD_CALL/113 ?0        1:'XUI'              3:'A3cf732C257bD804'	;1
2   5    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
3   5    DO_FCALL/60               ?0        ?0                   ?0                  	;0
4   6    ASSIGN/38                 ?1        16?1                 5:array (
  0 => 'innodb: page_cleaner',
  1 => 'aborted connection',
  2 => 'got an error reading communication packets',
  3 => 'got packets out of order',
  4 => 'got timeout reading communication packets',
)	;0
5   7    FETCH_STATIC_PROP_R/173   $20=      6:'rSettings'        7:'XUI'             	;0
6   7    FETCH_DIM_R/81            $21=      $20                  9:'mysql_sleep_kill'	;0
7   7    IS_SMALLER/19             #22=      10:0                 $21                 	;0
8   7    BOOL_NOT/13               #23=      #22                  ?0                  	;0
9   7    JMPZ/43                   ?0        #23                  ?11                 	;0	>>11
10  8    GOTO/253                  ?0        ?32                  ?11                 	;0
11  10   INIT_METHOD_CALL/112      ?0        16?2                 12:'query'          	;2	<<9
12  10   SEND_VAL_EX/116           ?80       14:'SELECT `id` FROM `INFORMATION_SCHEMA`.`PROCESSLIST` WHERE `COMMAND` = \'Sleep\' AND `TIME` > ?;' ?1                  	;0
13  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'intval'         	;1
14  10   FETCH_STATIC_PROP_FUNC_ARG/177 $24=      17:'rSettings'       18:'XUI'            	;1
15  10   FETCH_DIM_FUNC_ARG/93     $25=      $24                  20:'mysql_sleep_kill'	;1
16  10   SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
17  10   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
18  10   SEND_VAR_NO_REF_EX/50     ?96       $26                  ?2                  	;0
19  10   DO_FCALL/60               ?9        ?0                   ?0                  	;0
20  11   INIT_METHOD_CALL/112      ?0        16?2                 21:'get_rows'       	;0
21  11   DO_FCALL/60               $28=      ?0                   ?0                  	;0
22  11   FE_RESET_R/77             $29=      $28                  ?30                 	;0
23  11   FE_FETCH_R/78             ?0        $29                  16?3                	;30	>>30	<<29
24  12   INIT_METHOD_CALL/112      ?0        16?2                 23:'query'          	;2
25  12   SEND_VAL_EX/116           ?80       25:'KILL ?;'         ?1                  	;0
26  12   FETCH_DIM_FUNC_ARG/93     $30=      16?3                 26:'id'             	;2
27  12   SEND_VAR_EX/66            ?96       $30                  ?2                  	;0
28  12   DO_FCALL/60               ?13       ?0                   ?0                  	;0
29  13   JMP/42                    ?0        ?23                  ?0                  	;0	>>23
30  13   FE_FREE/127               ?0        $29                  ?0                  	;0	<<22
31  15   GOTO/253                  ?0        ?32                  ?27                 	;0
32  19   INIT_METHOD_CALL/112      ?0        16?2                 28:'query'          	;1
33  19   SEND_VAL_EX/116           ?80       30:'SELECT MAX(`date`) AS `date` FROM `mysql_syslog`;' ?1                  	;0
34  19   DO_FCALL/60               ?14       ?0                   ?0                  	;0
35  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'intval'         	;1
36  20   INIT_METHOD_CALL/112      ?0        16?2                 33:'get_row'        	;0
37  20   DO_FCALL/60               $33=      ?0                   ?0                  	;0
38  20   SEPARATE/156              $33=      $33                  ?0                  	;0
39  20   FETCH_DIM_FUNC_ARG/93     $34=      $33                  35:'date'           	;1
40  20   SEND_VAR_EX/66            ?80       $34                  ?1                  	;0
41  20   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
42  20   ASSIGN/38                 ?18       16?4                 $35                 	;0
43  21   ASSIGN/38                 ?19       16?5                 36:10               	;0
44  22   GOTO/253                  ?0        ?337                 ?37                 	;0
45  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'posix_getpwuid' 	;1	<<0
46  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'posix_geteuid'  	;0
47  24   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
48  24   SEND_VAR_NO_REF_EX/50     ?80       $38                  ?1                  	;0
49  24   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
50  24   FETCH_DIM_R/81            $40=      $39                  42:'name'           	;0
51  24   IS_NOT_EQUAL/18           #41=      $40                  43:'root'           	;0
52  24   BOOL_NOT/13               #42=      #41                  ?0                  	;0
53  24   JMPZ/43                   ?0        #42                  ?55                 	;0	>>55
54  25   GOTO/253                  ?0        ?56                  ?44                 	;0
55  27   EXIT/79                   ?0        45:'Please run as root!
' ?0                  	;0	<<53
56  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'set_time_limit' 	;1
57  29   SEND_VAL_EX/116           ?80       48:0                 ?1                  	;0
58  29   DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
59  30   BEGIN_SILENCE/57          #44=      ?0                   ?0                  	;0
60  30   FETCH_R/80                $45=      49:'argc'            ?0                  	;268435456
61  30   END_SILENCE/58            ?0        #44                  ?0                  	;0
62  30   JMPZ/43                   ?0        $45                  ?64                 	;0	>>64
63  31   GOTO/253                  ?0        ?66                  ?50                 	;0
64  33   GOTO/253                  ?0        ?65                  ?51                 	;0	<<62
65  35   EXIT/79                   ?0        52:0                 ?0                  	;0
66  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'str_replace'    	;3
67  37   SEND_VAL_EX/116           ?80       55:'\\'              ?1                  	;0
68  37   SEND_VAL_EX/116           ?96       56:'/'               ?2                  	;0
69  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'dirname'        	;1
70  37   FETCH_DIM_FUNC_ARG/93     $46=      16?6                 59:0                	;1
71  37   SEND_VAR_EX/66            ?80       $46                  ?1                  	;0
72  37   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
73  37   SEND_VAR_NO_REF_EX/50     ?112      $47                  ?3                  	;0
74  37   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
75  37   CONCAT/8                  #49=      $48                  60:'/../includes/admin.php'	;0
76  37   INCLUDE_OR_EVAL/73        ?32       #49                  ?0                  	;8
77  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'cli_set_process_title'	;1
78  38   SEND_VAL_EX/116           ?80       63:'XUI[MysqlErrors]' ?1                  	;0
79  38   DO_FCALL_BY_NAME/131      ?33       ?0                   ?0                  	;0
80  39   FETCH_CONSTANT/99         #52=      ?0                   64:'CRONS_TMP_PATH' 	;16
81  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'md5'            	;1
82  39   INIT_STATIC_METHOD_CALL/113 ?0        69:'XUI'             71:'A336b0DaD3EAF634'	;0
83  39   DO_FCALL/60               $53=      ?0                   ?0                  	;0
84  39   CONCAT/8                  #54=      $53                  73:'crons\\root_mysql.php'	;0
85  39   SEND_VAL_EX/116           ?80       #54                  ?1                  	;0
86  39   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
87  39   CONCAT/8                  #56=      #52                  $55                 	;0
88  39   ASSIGN/38                 ?39       16?0                 #56                 	;0
89  40   GOTO/253                  ?0        ?1                   ?74                 	;0
90  42   FE_RESET_R/77             $58=      16?7                 ?334                	;0
91  42   FE_FETCH_R/78             ?0        $58                  16?8                	;334	>>334	<<333
92  43   NOP/0                     ?0        ?0                   ?0                  	;1
93  43   GOTO/253                  ?0        ?94                  ?75                 	;0
94  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'trim'           	;1
95  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'explode'        	;2
96  45   SEND_VAL_EX/116           ?80       80:']:'              ?1                  	;0
97  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'explode'        	;2
98  45   SEND_VAL_EX/116           ?80       83:'mysqld['         ?1                  	;0
99  45   SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
100 45   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
101 45   SEPARATE/156              $59=      $59                  ?0                  	;0
102 45   FETCH_DIM_FUNC_ARG/93     $60=      $59                  84:1                	;2
103 45   SEND_VAR_EX/66            ?96       $60                  ?2                  	;0
104 45   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
105 45   SEPARATE/156              $61=      $61                  ?0                  	;0
106 45   FETCH_DIM_FUNC_ARG/93     $62=      $61                  85:1                	;1
107 45   SEND_VAR_EX/66            ?80       $62                  ?1                  	;0
108 45   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
109 45   ASSIGN/38                 ?46       16?9                 $63                 	;0
110 46   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'strtotime'      	;1
111 46   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'substr'         	;3
112 46   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
113 46   SEND_VAL_EX/116           ?96       90:0                 ?2                  	;0
114 46   SEND_VAL_EX/116           ?112      91:19                ?3                  	;0
115 46   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
116 46   SEND_VAR_NO_REF_EX/50     ?80       $65                  ?1                  	;0
117 46   DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
118 46   ASSIGN/38                 ?49       16?10                $66                 	;0
119 47   IS_SMALLER/19             #68=      16?4                 16?10               	;0
120 47   BOOL_NOT/13               #69=      #68                  ?0                  	;0
121 47   JMPZ/43                   ?0        #69                  ?124                	;0	>>124
122 48   NOP/0                     ?0        ?0                   ?0                  	;1
123 48   GOTO/253                  ?0        ?220                 ?92                 	;0
124 50   ISSET_ISEMPTY_CV/197      #70=      16?9                 ?0                  	;16777216	<<121
125 50   JMPNZ_EX/47               #70=      #70                  ?131                	;0	>>131
126 50   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'AE7efc3Bf879bd7C'	;2
127 50   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
128 50   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
129 50   DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
130 50   BOOL/52                   #70=      $71                  ?0                  	;0
131 50   BOOL_NOT/13               #72=      #70                  ?0                  	;0	<<125
132 50   JMPZ/43                   ?0        #72                  ?135                	;0	>>135
133 51   NOP/0                     ?0        ?0                   ?0                  	;1
134 51   GOTO/253                  ?0        ?296                 ?95                 	;0
135 53   NOP/0                     ?0        ?0                   ?0                  	;1	<<132
136 53   GOTO/253                  ?0        ?208                 ?96                 	;0
137 54   NOP/0                     ?0        ?0                   ?0                  	;1
138 54   GOTO/253                  ?0        ?296                 ?97                 	;0
139 56   ASSIGN/38                 ?55       16?11                98:'NOTICE'         	;0
140 58   BOOL_NOT/13               #74=      16?12                ?0                  	;0
141 58   JMPZ/43                   ?0        #74                  ?144                	;0	>>144
142 59   NOP/0                     ?0        ?0                   ?0                  	;1
143 59   GOTO/253                  ?0        ?220                 ?99                 	;0
144 61   ASSIGN/38                 ?57       16?13                100:NULL            	;0	<<141
145 62   ASSIGN/38                 ?58       16?14                101:NULL            	;0
146 63   NOP/0                     ?0        ?0                   ?0                  	;1
147 63   GOTO/253                  ?0        ?148                 ?102                	;0
148 65   ASSIGN/38                 ?59       16?15                103:NULL            	;0
149 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'stripos'       	;2
150 66   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
151 66   SEND_VAL_EX/116           ?96       106:'access denied for user' ?2                  	;0
152 66   DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
153 66   IS_NOT_IDENTICAL/16       #79=      $78                  107:false           	;0
154 66   BOOL_NOT/13               #80=      #79                  ?0                  	;0
155 66   JMPZ/43                   ?0        #80                  ?158                	;0	>>158
156 67   NOP/0                     ?0        ?0                   ?0                  	;1
157 67   GOTO/253                  ?0        ?237                 ?108                	;0
158 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'trim'          	;1	<<155
159 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'explode'       	;2
160 69   SEND_VAL_EX/116           ?80       113:'\''             ?1                  	;0
161 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'explode'       	;2
162 69   SEND_VAL_EX/116           ?80       116:'user \''        ?1                  	;0
163 69   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
164 69   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
165 69   SEPARATE/156              $81=      $81                  ?0                  	;0
166 69   FETCH_DIM_FUNC_ARG/93     $82=      $81                  117:1               	;2
167 69   SEND_VAR_EX/66            ?96       $82                  ?2                  	;0
168 69   DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
169 69   SEPARATE/156              $83=      $83                  ?0                  	;0
170 69   FETCH_DIM_FUNC_ARG/93     $84=      $83                  118:0               	;1
171 69   SEND_VAR_EX/66            ?80       $84                  ?1                  	;0
172 69   DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
173 69   ASSIGN/38                 ?68       16?13                $85                 	;0
174 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'trim'          	;1
175 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'explode'       	;2
176 70   SEND_VAL_EX/116           ?80       123:'\''             ?1                  	;0
177 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'explode'       	;2
178 70   SEND_VAL_EX/116           ?80       126:'user \''        ?1                  	;0
179 70   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
180 70   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
181 70   SEPARATE/156              $87=      $87                  ?0                  	;0
182 70   FETCH_DIM_FUNC_ARG/93     $88=      $87                  127:1               	;2
183 70   SEND_VAR_EX/66            ?96       $88                  ?2                  	;0
184 70   DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
185 70   SEPARATE/156              $89=      $89                  ?0                  	;0
186 70   FETCH_DIM_FUNC_ARG/93     $90=      $89                  128:2               	;1
187 70   SEND_VAR_EX/66            ?80       $90                  ?1                  	;0
188 70   DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
189 70   ASSIGN/38                 ?74       16?14                $91                 	;0
190 71   ASSIGN/38                 ?75       16?11                129:'AUTH'          	;0
191 72   NOP/0                     ?0        ?0                   ?0                  	;1
192 72   GOTO/253                  ?0        ?237                 ?130                	;0
193 74   ASSIGN/38                 ?76       16?11                131:'WARNING'       	;0
194 76   NOP/0                     ?0        ?0                   ?0                  	;1
195 76   GOTO/253                  ?0        ?140                 ?132                	;0
196 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'trim'          	;1
197 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'explode'       	;2
198 78   SEND_VAL_EX/116           ?80       137:'[Note]'         ?1                  	;0
199 78   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
200 78   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
201 78   SEPARATE/156              $95=      $95                  ?0                  	;0
202 78   FETCH_DIM_FUNC_ARG/93     $96=      $95                  138:1               	;1
203 78   SEND_VAR_EX/66            ?80       $96                  ?1                  	;0
204 78   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
205 78   ASSIGN/38                 ?80       16?12                $97                 	;0
206 79   NOP/0                     ?0        ?0                   ?0                  	;1
207 79   GOTO/253                  ?0        ?139                 ?139                	;0
208 82   NOP/0                     ?0        ?0                   ?0                  	;1
209 82   GOTO/253                  ?0        ?333                 ?140                	;0
210 84   ASSIGN/38                 ?81       16?11                141:'ABORTED'       	;0
211 86   INIT_METHOD_CALL/112      ?0        16?2                 142:'query'         	;7
212 86   SEND_VAL_EX/116           ?80       144:'INSERT INTO `mysql_syslog`(`type`,`error`,`username`,`ip`,`database`,`date`) VALUES(?,?,?,?,?,?)' ?1                  	;0
213 86   SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
214 86   SEND_VAR_EX/66            ?112      16?12                ?3                  	;0
215 86   SEND_VAR_EX/66            ?128      16?13                ?4                  	;0
216 86   SEND_VAR_EX/66            ?144      16?14                ?5                  	;0
217 86   SEND_VAR_EX/66            ?160      16?15                ?6                  	;0
218 86   SEND_VAR_EX/66            ?176      16?10                ?7                  	;0
219 86   DO_FCALL/60               ?82       ?0                   ?0                  	;0
220 89   NOP/0                     ?0        ?0                   ?0                  	;1
221 89   GOTO/253                  ?0        ?208                 ?145                	;0
222 91   ASSIGN/38                 ?83       16?11                146:'ERROR'         	;0
223 93   NOP/0                     ?0        ?0                   ?0                  	;1
224 93   GOTO/253                  ?0        ?194                 ?147                	;0
225 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'trim'          	;1
226 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'explode'       	;2
227 95   SEND_VAL_EX/116           ?80       152:'[Warning]'      ?1                  	;0
228 95   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
229 95   DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
230 95   SEPARATE/156              $102=     $102                 ?0                  	;0
231 95   FETCH_DIM_FUNC_ARG/93     $103=     $102                 153:1               	;1
232 95   SEND_VAR_EX/66            ?80       $103                 ?1                  	;0
233 95   DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
234 95   ASSIGN/38                 ?87       16?12                $104                	;0
235 96   NOP/0                     ?0        ?0                   ?0                  	;1
236 96   GOTO/253                  ?0        ?193                 ?154                	;0
237 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'stripos'       	;2
238 99   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
239 99   SEND_VAL_EX/116           ?96       157:'user:'          ?2                  	;0
240 99   DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
241 99   IS_NOT_IDENTICAL/16       #107=     $106                 158:false           	;0
242 99   BOOL_NOT/13               #108=     #107                 ?0                  	;0
243 99   JMPZ/43                   ?0        #108                 ?246                	;0	>>246
244 100  NOP/0                     ?0        ?0                   ?0                  	;1
245 100  GOTO/253                  ?0        ?211                 ?159                	;0
246 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'trim'          	;1	<<243
247 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'explode'       	;2
248 102  SEND_VAL_EX/116           ?80       164:'\''             ?1                  	;0
249 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'explode'       	;2
250 102  SEND_VAL_EX/116           ?80       167:'user: \''       ?1                  	;0
251 102  SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
252 102  DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
253 102  SEPARATE/156              $109=     $109                 ?0                  	;0
254 102  FETCH_DIM_FUNC_ARG/93     $110=     $109                 168:1               	;2
255 102  SEND_VAR_EX/66            ?96       $110                 ?2                  	;0
256 102  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
257 102  SEPARATE/156              $111=     $111                 ?0                  	;0
258 102  FETCH_DIM_FUNC_ARG/93     $112=     $111                 169:0               	;1
259 102  SEND_VAR_EX/66            ?80       $112                 ?1                  	;0
260 102  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
261 102  ASSIGN/38                 ?96       16?13                $113                	;0
262 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'trim'          	;1
263 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'explode'       	;2
264 103  SEND_VAL_EX/116           ?80       174:'\''             ?1                  	;0
265 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'explode'       	;2
266 103  SEND_VAL_EX/116           ?80       177:'host: \''       ?1                  	;0
267 103  SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
268 103  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
269 103  SEPARATE/156              $115=     $115                 ?0                  	;0
270 103  FETCH_DIM_FUNC_ARG/93     $116=     $115                 178:1               	;2
271 103  SEND_VAR_EX/66            ?96       $116                 ?2                  	;0
272 103  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
273 103  SEPARATE/156              $117=     $117                 ?0                  	;0
274 103  FETCH_DIM_FUNC_ARG/93     $118=     $117                 179:0               	;1
275 103  SEND_VAR_EX/66            ?80       $118                 ?1                  	;0
276 103  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
277 103  ASSIGN/38                 ?102      16?14                $119                	;0
278 104  INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'trim'          	;1
279 104  INIT_FCALL_BY_NAME/59     ?0        ?0                   182:'explode'       	;2
280 104  SEND_VAL_EX/116           ?80       184:'\''             ?1                  	;0
281 104  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'explode'       	;2
282 104  SEND_VAL_EX/116           ?80       187:'db: \''         ?1                  	;0
283 104  SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
284 104  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
285 104  SEPARATE/156              $121=     $121                 ?0                  	;0
286 104  FETCH_DIM_FUNC_ARG/93     $122=     $121                 188:1               	;2
287 104  SEND_VAR_EX/66            ?96       $122                 ?2                  	;0
288 104  DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
289 104  SEPARATE/156              $123=     $123                 ?0                  	;0
290 104  FETCH_DIM_FUNC_ARG/93     $124=     $123                 189:0               	;1
291 104  SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
292 104  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
293 104  ASSIGN/38                 ?108      16?15                $125                	;0
294 105  NOP/0                     ?0        ?0                   ?0                  	;1
295 105  GOTO/253                  ?0        ?210                 ?190                	;0
296 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'stripos'       	;2
297 108  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
298 108  SEND_VAL_EX/116           ?96       193:'[Note]'         ?2                  	;0
299 108  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
300 108  IS_NOT_IDENTICAL/16       #128=     $127                 194:false           	;0
301 108  JMPZ/43                   ?0        #128                 ?304                	;0	>>304
302 109  NOP/0                     ?0        ?0                   ?0                  	;1
303 109  GOTO/253                  ?0        ?196                 ?195                	;0
304 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'stripos'       	;2	<<301
305 111  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
306 111  SEND_VAL_EX/116           ?96       198:'[Warning]'      ?2                  	;0
307 111  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
308 111  IS_NOT_IDENTICAL/16       #130=     $129                 199:false           	;0
309 111  JMPZ/43                   ?0        #130                 ?312                	;0	>>312
310 112  NOP/0                     ?0        ?0                   ?0                  	;1
311 112  GOTO/253                  ?0        ?225                 ?200                	;0
312 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'stripos'       	;2	<<309
313 114  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
314 114  SEND_VAL_EX/116           ?96       203:'[Error]'        ?2                  	;0
315 114  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
316 114  IS_NOT_IDENTICAL/16       #132=     $131                 204:false           	;0
317 114  BOOL_NOT/13               #133=     #132                 ?0                  	;0
318 114  JMPZ/43                   ?0        #133                 ?321                	;0	>>321
319 115  NOP/0                     ?0        ?0                   ?0                  	;1
320 115  GOTO/253                  ?0        ?223                 ?205                	;0
321 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'trim'          	;1	<<318
322 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'explode'       	;2
323 117  SEND_VAL_EX/116           ?80       210:'[Error]'        ?1                  	;0
324 117  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
325 117  DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
326 117  SEPARATE/156              $134=     $134                 ?0                  	;0
327 117  FETCH_DIM_FUNC_ARG/93     $135=     $134                 211:1               	;1
328 117  SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
329 117  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
330 117  ASSIGN/38                 ?119      16?12                $136                	;0
331 118  NOP/0                     ?0        ?0                   ?0                  	;1
332 118  GOTO/253                  ?0        ?222                 ?212                	;0
333 119  JMP/42                    ?0        ?91                  ?0                  	;0	>>91
334 119  FE_FREE/127               ?0        $58                  ?0                  	;0	<<90
335 123  NOP/0                     ?0        ?0                   ?0                  	;0
336 136  GOTO/253                  ?0        ?388                 ?213                	;0
337 138  ASSIGN/38                 ?120      16?16                214:array (
)       	;0
338 139  INIT_METHOD_CALL/112      ?0        16?2                 215:'query'         	;1
339 139  SEND_VAL_EX/116           ?80       217:'SELECT `mysql_syslog`.`ip`, COUNT(`mysql_syslog`.`id`) AS `count`, `blocked_ips`.`id` AS `block_id` FROM `mysql_syslog` LEFT JOIN `blocked_ips` ON `blocked_ips`.`ip` = `mysql_syslog`.`ip` WHERE `type` = \'AUTH\' AND `mysql_syslog`.`date` > UNIX_TIMESTAMP() - 86400 GROUP BY `mysql_syslog`.`ip`;' ?1                  	;0
340 139  DO_FCALL/60               ?121      ?0                   ?0                  	;0
341 140  INIT_METHOD_CALL/112      ?0        16?2                 218:'get_rows'      	;0
342 140  DO_FCALL/60               $140=     ?0                   ?0                  	;0
343 140  FE_RESET_R/77             $141=     $140                 ?381                	;0
344 140  FE_FETCH_R/78             ?0        $141                 16?3                	;381	>>381	<<380
345 141  FETCH_DIM_R/81            $142=     16?3                 220:'ip'            	;0
346 141  FETCH_DIM_R/81            $144=     16?3                 221:'count'         	;0
347 141  ASSIGN_DIM/147            ?125      16?16                $142                	;0
348 141  OP_DATA/137               ?0        $144                 ?0                  	;0
349 142  FETCH_DIM_R/81            $145=     16?3                 222:'count'         	;0
350 142  IS_SMALLER/19             #146=     16?5                 $145                	;0
351 142  JMPZ_EX/46                #146=     #146                 ?355                	;0	>>355
352 142  FETCH_DIM_R/81            $147=     16?3                 223:'block_id'      	;0
353 142  BOOL_NOT/13               #148=     $147                 ?0                  	;0
354 142  BOOL/52                   #146=     #148                 ?0                  	;0
355 142  BOOL_NOT/13               #149=     #146                 ?0                  	;0	<<351
356 142  JMPZ/43                   ?0        #149                 ?359                	;0	>>359
357 143  NOP/0                     ?0        ?0                   ?0                  	;1
358 143  GOTO/253                  ?0        ?380                 ?224                	;0
359 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'in_array'      	;2	<<356
360 145  FETCH_DIM_FUNC_ARG/93     $150=     16?3                 227:'ip'            	;1
361 145  SEND_VAR_EX/66            ?80       $150                 ?1                  	;0
362 145  INIT_STATIC_METHOD_CALL/113 ?0        228:'XUI'            230:'dE052f142a92E9bF'	;0
363 145  DO_FCALL/60               $151=     ?0                   ?0                  	;0
364 145  SEND_VAR_NO_REF_EX/50     ?96       $151                 ?2                  	;0
365 145  DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
366 145  JMPZ/43                   ?0        $152                 ?369                	;0	>>369
367 146  NOP/0                     ?0        ?0                   ?0                  	;1
368 146  GOTO/253                  ?0        ?380                 ?232                	;0
369 148  FETCH_DIM_R/81            $153=     16?3                 233:'ip'            	;0	<<366
370 148  ROPE_INIT/54              #155=     ?0                   234:'Blocking IP '  	;3
371 148  ROPE_ADD/55               #155=     #155                 $153                	;1
372 148  ROPE_END/56               #154=     #155                 235:'
'             	;2
373 148  ECHO/40                   ?0        #154                 ?0                  	;0
374 149  INIT_STATIC_METHOD_CALL/113 ?0        236:'API'            238:'F7E2383F47283cb7'	;1
375 149  FETCH_DIM_R/81            $157=     16?3                 240:'ip'            	;0
376 149  INIT_ARRAY/71             #158=     $157                 241:'ip'            	;10
377 149  ADD_ARRAY_ELEMENT/72      #158=     242:'MYSQL BRUTEFORCE ATTACK' 243:'notes'         	;0
378 149  SEND_VAL_EX/116           ?80       #158                 ?1                  	;0
379 149  DO_FCALL/60               ?141      ?0                   ?0                  	;0
380 152  JMP/42                    ?0        ?344                 ?0                  	;0	>>344
381 152  FE_FREE/127               ?0        $141                 ?0                  	;0	<<343
382 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'exec'          	;3
383 155  SEND_VAL_EX/116           ?80       246:'sudo tail -n 1000 /var/log/syslog | grep mysqld' ?1                  	;0
384 155  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
385 155  SEND_VAR_EX/66            ?112      16?17                ?3                  	;0
386 155  DO_FCALL_BY_NAME/131      ?142      ?0                   ?0                  	;0
387 156  GOTO/253                  ?0        ?90                  ?247                	;0
388 158  BEGIN_SILENCE/57          #161=     ?0                   ?0                  	;0
389 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'unlink'        	;1
390 158  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
391 158  DO_FCALL_BY_NAME/131      ?144      ?0                   ?0                  	;0
392 158  END_SILENCE/58            ?0        #161                 ?0                  	;0
393 159  NOP/0                     ?0        250:1                ?0                  	;4294967295
*/

?>