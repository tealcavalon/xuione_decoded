<?php


function pingServer($b38e11ffdc6a3abb, $e5bebfb39a19fe80)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  24  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  24  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2  26  JMP/42                    ?0        ?14                  ?0                  	;0	>>14
	3  28  RETURN/62                 ?0        16?2                 ?0                  	;0
	4  29  GOTO/253                  ?0        ?37                  ?1                  	;0
	5  31  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'floor'           	;1
	6  31  SUB/2                     #8=       16?3                 16?4                	;0
	7  31  MUL/3                     #9=       #8                   4:1000              	;0
	8  31  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
	9  31  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	10 31  ASSIGN/38                 ?3        16?2                 $10                 	;0
	11 32  GOTO/253                  ?0        ?13                  ?5                  	;0
	12 34  ASSIGN/38                 ?4        16?2                 6:-1                	;0
	13 36  GOTO/253                  ?0        ?3                   ?7                  	;0
	14 38  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'microtime'       	;1	<<2
	15 38  SEND_VAL_EX/116           ?80       10:true              ?1                  	;0
	16 38  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	17 38  ASSIGN/38                 ?6        16?4                 $13                 	;0
	18 39  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'fsockopen'      	;5
	19 39  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	20 39  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	21 39  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
	22 39  SEND_VAR_EX/66            ?128      16?7                 ?4                  	;0
	23 39  SEND_VAL_EX/116           ?144      13:3                 ?5                  	;0
	24 39  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	25 39  ASSIGN/38                 ?8        16?5                 $15                 	;0
	26 40  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'microtime'      	;1
	27 40  SEND_VAL_EX/116           ?80       16:true              ?1                  	;0
	28 40  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
	29 40  ASSIGN/38                 ?10       16?3                 $17                 	;0
	30 41  BOOL_NOT/13               #19=      16?5                 ?0                  	;0
	31 41  JMPZ/43                   ?0        #19                  ?33                 	;0	>>33
	32 42  GOTO/253                  ?0        ?12                  ?17                 	;0
	33 44  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'fclose'         	;1	<<31
	34 44  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	35 44  DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
	36 45  GOTO/253                  ?0        ?5                   ?20                 	;0
	37 47  NOP/0                     ?0        21:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?88                  ?0                  	;0	>>88
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'F82199EfF9017bC9'	;0
2   5    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
3   6    GOTO/253                  ?0        ?280                 ?3                  	;0
4   8    NEW/68                    $15=      4:'Database'         ?96                 	;1
5   8    SEND_VAL_EX/116           ?80       6:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
6   8    DO_FCALL/60               ?2        ?8                   ?0                  	;0
7   8    ASSIGN/38                 ?3        16?0                 $15                 	;0
8   9    FETCH_STATIC_PROP_W/174   $18=      7:'db'               8:'XUI'             	;0
9   9    ASSIGN_REF/39             ?5        $18                  16?0                	;0
10  10   GOTO/253                  ?0        ?234                 ?10                 	;0
11  12   INIT_METHOD_CALL/112      ?0        16?0                 11:'query'          	;21
12  12   SEND_VAL_EX/116           ?80       13:'INSERT INTO `servers_stats`(`server_id`, `cpu`, `cpu_cores`, `cpu_avg`, `total_mem`, `total_mem_free`, `total_mem_used`, `total_mem_used_percent`, `total_disk_space`, `uptime`, `total_running_streams`, `bytes_sent`, `bytes_received`, `bytes_sent_total`, `bytes_received_total`, `cpu_load_average`, `connections`, `total_users`, `users`, `time`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);' ?1                  	;0
13  12   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
14  12   FETCH_DIM_FUNC_ARG/93     $20=      16?2                 14:'cpu'            	;3
15  12   SEND_VAR_EX/66            ?112      $20                  ?3                  	;0
16  12   FETCH_DIM_FUNC_ARG/93     $21=      16?2                 15:'cpu_cores'      	;4
17  12   SEND_VAR_EX/66            ?128      $21                  ?4                  	;0
18  12   FETCH_DIM_FUNC_ARG/93     $22=      16?2                 16:'cpu_avg'        	;5
19  12   SEND_VAR_EX/66            ?144      $22                  ?5                  	;0
20  12   FETCH_DIM_FUNC_ARG/93     $23=      16?2                 17:'total_mem'      	;6
21  12   SEND_VAR_EX/66            ?160      $23                  ?6                  	;0
22  12   FETCH_DIM_FUNC_ARG/93     $24=      16?2                 18:'total_mem_free' 	;7
23  12   SEND_VAR_EX/66            ?176      $24                  ?7                  	;0
24  12   FETCH_DIM_FUNC_ARG/93     $25=      16?2                 19:'total_mem_used' 	;8
25  12   SEND_VAR_EX/66            ?192      $25                  ?8                  	;0
26  12   FETCH_DIM_FUNC_ARG/93     $26=      16?2                 20:'total_mem_used_percent'	;9
27  12   SEND_VAR_EX/66            ?208      $26                  ?9                  	;0
28  12   FETCH_DIM_FUNC_ARG/93     $27=      16?2                 21:'total_disk_space'	;10
29  12   SEND_VAR_EX/66            ?224      $27                  ?10                 	;0
30  12   FETCH_DIM_FUNC_ARG/93     $28=      16?2                 22:'uptime'         	;11
31  12   SEND_VAR_EX/66            ?240      $28                  ?11                 	;0
32  12   FETCH_DIM_FUNC_ARG/93     $29=      16?2                 23:'total_running_streams'	;12
33  12   SEND_VAR_EX/66            ?256      $29                  ?12                 	;0
34  12   FETCH_DIM_FUNC_ARG/93     $30=      16?2                 24:'bytes_sent'     	;13
35  12   SEND_VAR_EX/66            ?272      $30                  ?13                 	;0
36  12   FETCH_DIM_FUNC_ARG/93     $31=      16?2                 25:'bytes_received' 	;14
37  12   SEND_VAR_EX/66            ?288      $31                  ?14                 	;0
38  12   FETCH_DIM_FUNC_ARG/93     $32=      16?2                 26:'bytes_sent_total'	;15
39  12   SEND_VAR_EX/66            ?304      $32                  ?15                 	;0
40  12   FETCH_DIM_FUNC_ARG/93     $33=      16?2                 27:'bytes_received_total'	;16
41  12   SEND_VAR_EX/66            ?320      $33                  ?16                 	;0
42  12   FETCH_DIM_FUNC_ARG/93     $34=      16?2                 28:'cpu_load_average'	;17
43  12   SEND_VAR_EX/66            ?336      $34                  ?17                 	;0
44  12   SEND_VAR_EX/66            ?352      16?3                 ?18                 	;0
45  12   SEND_VAR_EX/66            ?368      16?4                 ?19                 	;0
46  12   SEND_VAR_EX/66            ?384      16?5                 ?20                 	;0
47  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'time'           	;0
48  12   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
49  12   SEND_VAR_NO_REF_EX/50     ?400      $35                  ?21                 	;0
50  12   DO_FCALL/60               ?22       ?0                   ?0                  	;0
51  13   INIT_METHOD_CALL/112      ?0        16?0                 31:'query'          	;10
52  13   SEND_VAL_EX/116           ?80       33:'UPDATE `servers` SET `connections` = ?, `users` = ?, `ping` = ?,`server_hardware` = ?,`whitelist_ips` = ?, `interfaces` = ?, `watchdog_data` = ?, `last_check_ago` = ? WHERE `id` = ?' ?1                  	;0
53  13   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
54  13   SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
55  13   SEND_VAR_EX/66            ?128      16?6                 ?4                  	;0
56  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'json_encode'    	;1
57  13   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
58  13   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
59  13   SEND_VAR_NO_REF_EX/50     ?144      $37                  ?5                  	;0
60  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'json_encode'    	;1
61  13   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
62  13   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
63  13   SEND_VAR_NO_REF_EX/50     ?160      $38                  ?6                  	;0
64  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'json_encode'    	;1
65  13   FETCH_DIM_FUNC_ARG/93     $39=      16?2                 40:'interfaces'     	;1
66  13   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
67  13   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
68  13   SEND_VAR_NO_REF_EX/50     ?176      $40                  ?7                  	;0
69  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'json_encode'    	;2
70  13   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
71  13   FETCH_CONSTANT/99         #41=      ?0                   43:'JSON_PARTIAL_OUTPUT_ON_ERROR'	;16
72  13   SEND_VAL_EX/116           ?96       #41                  ?2                  	;0
73  13   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
74  13   SEND_VAR_NO_REF_EX/50     ?192      $42                  ?8                  	;0
75  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'time'           	;0
76  13   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
77  13   SEND_VAR_NO_REF_EX/50     ?208      $43                  ?9                  	;0
78  13   SEND_VAR_EX/66            ?224      16?1                 ?10                 	;0
79  13   DO_FCALL/60               ?30       ?0                   ?0                  	;0
80  14   INIT_METHOD_CALL/112      ?0        16?0                 48:'query'          	;2
81  14   SEND_VAL_EX/116           ?80       50:'SELECT `signal_id`, `custom_data` FROM `signals` WHERE `server_id` = ? AND `custom_data` <> \'\' ORDER BY signal_id ASC;' ?1                  	;0
82  14   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
83  14   DO_FCALL/60               $45=      ?0                   ?0                  	;0
84  14   JMPZ/43                   ?0        $45                  ?86                 	;0	>>86
85  15   GOTO/253                  ?0        ?87                  ?51                 	;0
86  17   EXIT/79                   ?0        ?0                   ?0                  	;0	<<84
87  19   GOTO/253                  ?0        ?137                 ?52                 	;0
88  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'set_time_limit' 	;1	<<0
89  21   SEND_VAL_EX/116           ?80       55:0                 ?1                  	;0
90  21   DO_FCALL_BY_NAME/131      ?32       ?0                   ?0                  	;0
91  22   INCLUDE_OR_EVAL/73        ?33       56:'../init.php'     ?0                  	;8
92  24   NOP/0                     ?0        ?0                   ?0                  	;0
93  48   ASSIGN/38                 ?34       16?9                 57:array (
)        	;0
94  49   INIT_STATIC_METHOD_CALL/113 ?0        58:'XUI'             60:'eFD47d0Ab821C8af'	;1
95  49   FETCH_FUNC_ARG/92         $49=      62:'_SERVER'         ?0                  	;1
96  49   FETCH_DIM_FUNC_ARG/93     $50=      $49                  63:'REMOTE_ADDR'    	;1
97  49   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
98  49   DO_FCALL/60               $51=      ?0                   ?0                  	;0
99  49   JMPZ/43                   ?0        $51                  ?101                	;0	>>101
100 50   GOTO/253                  ?0        ?4                   ?64                 	;0
101 52   GOTO/253                  ?0        ?1                   ?65                 	;0	<<99
102 54   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'time'           	;0
103 54   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
104 54   FETCH_DIM_R/81            $53=      16?11                68:'time'           	;0
105 54   SUB/2                     #54=      $52                  $53                 	;0
106 54   ASSIGN/38                 ?41       16?10                #54                 	;0
107 55   FETCH_DIM_R/81            $57=      16?2                 70:'bytes_sent_total'	;0
108 55   FETCH_DIM_R/81            $58=      16?11                71:'bytes_sent_total'	;0
109 55   SUB/2                     #59=      $57                  $58                 	;0
110 55   DIV/4                     #60=      #59                  16?10               	;0
111 55   ASSIGN_DIM/147            ?42       16?2                 69:'bytes_sent'     	;0
112 55   OP_DATA/137               ?0        #60                  ?0                  	;0
113 56   FETCH_DIM_R/81            $62=      16?2                 73:'bytes_received_total'	;0
114 56   FETCH_DIM_R/81            $63=      16?11                74:'bytes_received_total'	;0
115 56   SUB/2                     #64=      $62                  $63                 	;0
116 56   DIV/4                     #65=      #64                  16?10               	;0
117 56   ASSIGN_DIM/147            ?47       16?2                 72:'bytes_received' 	;0
118 56   OP_DATA/137               ?0        #65                  ?0                  	;0
119 58   FETCH_R/80                $66=      75:'_POST'           ?0                  	;0
120 58   FETCH_DIM_R/81            $67=      $66                  76:'addresses'      	;0
121 58   ASSIGN/38                 ?54       16?8                 $67                 	;0
122 59   GOTO/253                  ?0        ?194                 ?77                 	;0
123 61   INIT_METHOD_CALL/112      ?0        16?0                 78:'query'          	;1
124 61   SEND_VAL_EX/116           ?80       80:'SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;' ?1                  	;0
125 61   DO_FCALL/60               ?55       ?0                   ?0                  	;0
126 62   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'intval'         	;1
127 62   INIT_METHOD_CALL/112      ?0        16?0                 83:'num_rows'       	;0
128 62   DO_FCALL/60               $70=      ?0                   ?0                  	;0
129 62   SEND_VAR_NO_REF_EX/50     ?80       $70                  ?1                  	;0
130 62   DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
131 62   ASSIGN/38                 ?58       16?4                 $71                 	;0
132 63   GOTO/253                  ?0        ?277                 ?85                 	;0
133 65   FETCH_DIM_R/81            $73=      16?12                16?1                	;0
134 65   FETCH_DIM_R/81            $74=      $73                  86:'connections'    	;0
135 65   ASSIGN/38                 ?61       16?3                 $74                 	;0
136 66   GOTO/253                  ?0        ?257                 ?87                 	;0
137 68   INIT_METHOD_CALL/112      ?0        16?0                 88:'num_rows'       	;0
138 68   DO_FCALL/60               $76=      ?0                   ?0                  	;0
139 68   IS_SMALLER/19             #77=      90:0                 $76                 	;0
140 68   BOOL_NOT/13               #78=      #77                  ?0                  	;0
141 68   JMPZ/43                   ?0        #78                  ?143                	;0	>>143
142 69   GOTO/253                  ?0        ?162                 ?91                 	;0
143 71   INIT_METHOD_CALL/112      ?0        16?0                 92:'get_rows'       	;0	<<141
144 71   DO_FCALL/60               $79=      ?0                   ?0                  	;0
145 71   FE_RESET_R/77             $80=      $79                  ?161                	;0
146 71   FE_FETCH_R/78             ?0        $80                  16?11               	;161	>>161	<<160
147 72   INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'json_decode'    	;2
148 72   FETCH_DIM_FUNC_ARG/93     $81=      16?11                96:'custom_data'    	;1
149 72   SEND_VAR_EX/66            ?80       $81                  ?1                  	;0
150 72   SEND_VAL_EX/116           ?96       97:true              ?2                  	;0
151 72   DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
152 72   ASSIGN/38                 ?69       16?13                $82                 	;0
153 73   INIT_METHOD_CALL/112      ?0        16?0                 98:'query'          	;2
154 73   SEND_VAL_EX/116           ?80       100:'DELETE FROM `signals` WHERE `signal_id` = ?;' ?1                  	;0
155 73   FETCH_DIM_FUNC_ARG/93     $84=      16?11                101:'signal_id'     	;2
156 73   SEND_VAR_EX/66            ?96       $84                  ?2                  	;0
157 73   DO_FCALL/60               ?71       ?0                   ?0                  	;0
158 74   ASSIGN_DIM/147            ?72       16?9                 ?5126               	;0
159 74   OP_DATA/137               ?0        16?13                ?0                  	;0
160 75   JMP/42                    ?0        ?146                 ?0                  	;0	>>146
161 75   FE_FREE/127               ?0        $80                  ?0                  	;0	<<145
162 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'json_encode'   	;1
163 79   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
164 79   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
165 79   ECHO/40                   ?0        $87                  ?0                  	;0
166 80   GOTO/253                  ?0        ?278                 ?104                	;0
167 82   FETCH_STATIC_PROP_R/173   $88=      105:'rSettings'      106:'XUI'           	;0
168 82   FETCH_DIM_R/81            $89=      $88                  108:'redis_handler' 	;0
169 82   JMPZ/43                   ?0        $89                  ?171                	;0	>>171
170 83   GOTO/253                  ?0        ?133                 ?109                	;0
171 85   INIT_METHOD_CALL/112      ?0        16?0                 110:'query'         	;2	<<169
172 85   SEND_VAL_EX/116           ?80       112:'SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `proxy_id` = ? AND `hls_end` = 0;' ?1                  	;0
173 85   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
174 85   DO_FCALL/60               ?76       ?0                   ?0                  	;0
175 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'intval'        	;1
176 86   INIT_METHOD_CALL/112      ?0        16?0                 115:'get_row'       	;0
177 86   DO_FCALL/60               $91=      ?0                   ?0                  	;0
178 86   SEPARATE/156              $91=      $91                  ?0                  	;0
179 86   FETCH_DIM_FUNC_ARG/93     $92=      $91                  117:'count'         	;1
180 86   SEND_VAR_EX/66            ?80       $92                  ?1                  	;0
181 86   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
182 86   ASSIGN/38                 ?80       16?3                 $93                 	;0
183 87   INIT_METHOD_CALL/112      ?0        16?0                 118:'query'         	;2
184 87   SEND_VAL_EX/116           ?80       120:'SELECT `activity_id` FROM `lines_live` WHERE `proxy_id` = ? AND `hls_end` = 0 GROUP BY `user_id`;' ?1                  	;0
185 87   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
186 87   DO_FCALL/60               ?81       ?0                   ?0                  	;0
187 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'intval'        	;1
188 88   INIT_METHOD_CALL/112      ?0        16?0                 123:'num_rows'      	;0
189 88   DO_FCALL/60               $96=      ?0                   ?0                  	;0
190 88   SEND_VAR_NO_REF_EX/50     ?80       $96                  ?1                  	;0
191 88   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
192 88   ASSIGN/38                 ?84       16?5                 $97                 	;0
193 89   GOTO/253                  ?0        ?123                 ?125                	;0
194 91   FETCH_DIM_R/81            $99=      16?2                 126:'total_mem'     	;0
195 91   INIT_ARRAY/71             #100=     $99                  127:'total_ram'     	;46
196 91   FETCH_DIM_R/81            $101=     16?2                 128:'total_mem_used'	;0
197 91   ADD_ARRAY_ELEMENT/72      #100=     $101                 129:'total_used'    	;0
198 91   FETCH_DIM_R/81            $102=     16?2                 130:'cpu_cores'     	;0
199 91   ADD_ARRAY_ELEMENT/72      #100=     $102                 131:'cores'         	;0
200 91   FETCH_DIM_R/81            $103=     16?2                 132:'cpu_cores'     	;0
201 91   ADD_ARRAY_ELEMENT/72      #100=     $103                 133:'threads'       	;0
202 91   FETCH_DIM_R/81            $104=     16?2                 134:'kernel'        	;0
203 91   ADD_ARRAY_ELEMENT/72      #100=     $104                 135:'kernel'        	;0
204 91   FETCH_DIM_R/81            $105=     16?2                 136:'total_running_streams'	;0
205 91   ADD_ARRAY_ELEMENT/72      #100=     $105                 137:'total_running_streams'	;0
206 91   FETCH_DIM_R/81            $106=     16?2                 138:'cpu_name'      	;0
207 91   ADD_ARRAY_ELEMENT/72      #100=     $106                 139:'cpu_name'      	;0
208 91   FETCH_DIM_R/81            $107=     16?2                 140:'cpu'           	;0
209 91   ADD_ARRAY_ELEMENT/72      #100=     $107                 141:'cpu_usage'     	;0
210 91   FETCH_DIM_R/81            $108=     16?2                 142:'network_speed' 	;0
211 91   ADD_ARRAY_ELEMENT/72      #100=     $108                 143:'network_speed' 	;0
212 91   FETCH_DIM_R/81            $109=     16?2                 144:'bytes_sent'    	;0
213 91   ADD_ARRAY_ELEMENT/72      #100=     $109                 145:'bytes_sent'    	;0
214 91   FETCH_DIM_R/81            $110=     16?2                 146:'bytes_received'	;0
215 91   ADD_ARRAY_ELEMENT/72      #100=     $110                 147:'bytes_received'	;0
216 91   ASSIGN/38                 ?97       16?7                 #100                	;0
217 92   INIT_FCALL/61             ?0        ?416                 148:'pingserver'    	;2
218 92   FETCH_DIM_R/81            $112=     16?12                16?1                	;0
219 92   FETCH_DIM_R/81            $113=     $112                 149:'server_ip'     	;0
220 92   SEND_VAR/117              ?80       $113                 ?1                  	;0
221 92   FETCH_DIM_R/81            $114=     16?12                16?1                	;0
222 92   FETCH_DIM_R/81            $115=     $114                 150:'http_broadcast_port'	;0
223 92   SEND_VAR/117              ?96       $115                 ?2                  	;0
224 92   DO_FCALL/60               $116=     ?0                   ?0                  	;0
225 92   JMP_SET/152               #117=     $116                 ?227                	;0
226 92   QM_ASSIGN/22              #117=     151:0                ?0                  	;0
227 92   ASSIGN/38                 ?104      16?6                 #117                	;0
228 93   IS_SMALLER/19             #119=     16?6                 152:0               	;0
229 93   BOOL_NOT/13               #120=     #119                 ?0                  	;0
230 93   JMPZ/43                   ?0        #120                 ?232                	;0	>>232
231 94   GOTO/253                  ?0        ?233                 ?153                	;0
232 96   ASSIGN/38                 ?107      16?6                 154:0               	;0	<<230
233 98   GOTO/253                  ?0        ?167                 ?155                	;0
234 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'intval'        	;1
235 100  FETCH_FUNC_ARG/92         $122=     158:'_POST'          ?0                  	;1
236 100  FETCH_DIM_FUNC_ARG/93     $123=     $122                 159:'server_id'     	;1
237 100  SEND_VAR_EX/66            ?80       $123                 ?1                  	;0
238 100  DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
239 100  ASSIGN/38                 ?111      16?1                 $124                	;0
240 101  FETCH_R/80                $126=     160:'_POST'          ?0                  	;0
241 101  FETCH_DIM_R/81            $127=     $126                 161:'stats'         	;0
242 101  ASSIGN/38                 ?114      16?2                 $127                	;0
243 102  INIT_METHOD_CALL/112      ?0        16?0                 162:'query'         	;2
244 102  SEND_VAL_EX/116           ?80       164:'SELECT `bytes_sent_total`, `bytes_received_total`, `time` FROM `servers_stats` WHERE `server_id` = ? ORDER BY `id` DESC LIMIT 1;' ?1                  	;0
245 102  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
246 102  DO_FCALL/60               ?115      ?0                   ?0                  	;0
247 103  INIT_METHOD_CALL/112      ?0        16?0                 165:'num_rows'      	;0
248 103  DO_FCALL/60               $130=     ?0                   ?0                  	;0
249 103  IS_EQUAL/17               #131=     $130                 167:1               	;0
250 103  BOOL_NOT/13               #132=     #131                 ?0                  	;0
251 103  JMPZ/43                   ?0        #132                 ?253                	;0	>>253
252 104  GOTO/253                  ?0        ?119                 ?168                	;0
253 106  INIT_METHOD_CALL/112      ?0        16?0                 169:'get_row'       	;0	<<251
254 106  DO_FCALL/60               $133=     ?0                   ?0                  	;0
255 106  ASSIGN/38                 ?120      16?11                $133                	;0
256 107  GOTO/253                  ?0        ?102                 ?171                	;0
257 109  FETCH_DIM_R/81            $135=     16?12                16?1                	;0
258 109  FETCH_DIM_R/81            $136=     $135                 172:'users'         	;0
259 109  ASSIGN/38                 ?123      16?5                 $136                	;0
260 110  ASSIGN/38                 ?124      16?4                 173:0               	;0
261 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'array_keys'    	;1
262 111  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
263 111  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
264 111  FE_RESET_R/77             $140=     $139                 ?276                	;0
265 111  FE_FETCH_R/78             ?0        $140                 16?1                	;276	>>276	<<275
266 112  FETCH_DIM_R/81            $141=     16?12                16?1                	;0
267 112  FETCH_DIM_R/81            $142=     $141                 176:'server_online' 	;0
268 112  BOOL_NOT/13               #143=     $142                 ?0                  	;0
269 112  JMPZ/43                   ?0        #143                 ?272                	;0	>>272
270 113  NOP/0                     ?0        ?0                   ?0                  	;1
271 113  GOTO/253                  ?0        ?275                 ?177                	;0
272 115  FETCH_DIM_R/81            $144=     16?12                16?1                	;0	<<269
273 115  FETCH_DIM_R/81            $145=     $144                 178:'users'         	;0
274 115  ASSIGN_ADD/23             ?132      16?4                 $145                	;0
275 117  JMP/42                    ?0        ?265                 ?0                  	;0	>>265
276 117  FE_FREE/127               ?0        $140                 ?0                  	;0	<<264
277 121  GOTO/253                  ?0        ?11                  ?179                	;0
278 123  EXIT/79                   ?0        ?0                   ?0                  	;0
279 124  GOTO/253                  ?0        ?280                 ?180                	;0
280 127  NOP/0                     ?0        181:1                ?0                  	;4294967295
*/

?>