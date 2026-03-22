<?php


function ab8369074dF2AAA3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   27   JMP/42                    ?0        ?684                 ?0                  	;0	>>684
	1   29   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'exec'            	;2
	2   29   SEND_VAL_EX/116           ?80       3:'ps aux | grep -v grep | grep \'/*_.m3u8\' | awk \'{print $2}\'' ?1                  	;0
	3   29   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	4   29   DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
	5   30   FE_RESET_R/77             $35=      16?0                 ?38                 	;0
	6   30   FE_FETCH_R/78             ?0        $35                  16?1                	;38	>>38	<<37
	7   31   INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'is_numeric'      	;1
	8   31   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	9   31   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	10  31   JMPZ_EX/46                #37=      $36                  ?16                 	;0	>>16
	11  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'intval'          	;1
	12  31   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  31   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	14  31   IS_SMALLER/19             #39=      8:0                  $38                 	;0
	15  31   BOOL/52                   #37=      #39                  ?0                  	;0
	16  31   JMPZ_EX/46                #37=      #37                  ?23                 	;0	>>23	<<10
	17  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'in_array'        	;2
	18  31   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	19  31   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	20  31   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	21  31   BOOL_NOT/13               #41=      $40                  ?0                  	;0
	22  31   BOOL/52                   #37=      #41                  ?0                  	;0
	23  31   BOOL_NOT/13               #42=      #37                  ?0                  	;0	<<16
	24  31   JMPZ/43                   ?0        #42                  ?27                 	;0	>>27
	25  32   NOP/0                     ?0        ?0                   ?0                  	;1
	26  32   GOTO/253                  ?0        ?37                  ?11                 	;0
	27  34   ROPE_INIT/54              #44=      ?0                   12:'Kill Roque PID: '	;3	<<24
	28  34   ROPE_ADD/55               #44=      #44                  16?1                	;1
	29  34   ROPE_END/56               #43=      #44                  13:'
'              	;2
	30  34   ECHO/40                   ?0        #43                  ?0                  	;0
	31  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'shell_exec'     	;1
	32  35   ROPE_INIT/54              #47=      ?0                   16:'kill -9 '       	;3
	33  35   ROPE_ADD/55               #47=      #47                  16?1                	;1
	34  35   ROPE_END/56               #46=      #47                  17:';'              	;2
	35  35   SEND_VAL_EX/116           ?80       #46                  ?1                  	;0
	36  35   DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
	37  37   JMP/42                    ?0        ?6                   ?0                  	;0	>>6
	38  37   FE_FREE/127               ?0        $35                  ?0                  	;0	<<5
	39  42   GOTO/253                  ?0        ?936                 ?18                 	;0
	40  44   FETCH_STATIC_PROP_R/173   $50=      19:'rSettings'       20:'XUI'            	;0
	41  44   FETCH_DIM_R/81            $51=      $50                  22:'redis_handler'  	;0
	42  44   JMPZ/43                   ?0        $51                  ?44                 	;0	>>44
	43  45   GOTO/253                  ?0        ?56                  ?23                 	;0
	44  47   INIT_METHOD_CALL/112      ?0        16?3                 24:'query'          	;5	<<42
	45  47   SEND_VAL_EX/116           ?80       26:'SELECT t2.stream_display_name, t1.stream_started, t1.stream_info, t2.fps_restart, t1.stream_status, t1.progress_info, t1.stream_id, t1.monitor_pid, t1.on_demand, t1.server_stream_id, t1.pid, clients.online_clients, clients_hls.online_clients_hls, servers_attached.attached, t2.vframes_server_id, t2.vframes_pid, t2.tv_archive_server_id, t2.tv_archive_pid FROM `streams_servers` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.direct_source = 0 INNER JOIN `streams_types` t3 ON t3.type_id = t2.type LEFT JOIN (SELECT stream_id, COUNT(*) as online_clients FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0 GROUP BY stream_id) AS clients ON clients.stream_id = t1.stream_id LEFT JOIN (SELECT `stream_id`, COUNT(*) AS `attached` FROM `streams_servers` WHERE `parent_id` = ? AND `pid` IS NOT NULL AND `pid` > 0 AND `monitor_pid` IS NOT NULL AND `monitor_pid` > 0) AS `servers_attached` ON `servers_attached`.`stream_id` = t1.`stream_id` LEFT JOIN (SELECT stream_id, COUNT(*) as online_clients_hls FROM `lines_live` WHERE `server_id` = ? AND `container` = \'hls\' AND `hls_end` = 0 GROUP BY stream_id) AS clients_hls ON clients_hls.stream_id = t1.stream_id WHERE (t1.pid IS NOT NULL OR t1.stream_status <> 0 OR t1.to_analyze = 1) AND t1.server_id = ? AND t3.live = 1' ?1                  	;0
	46  47   FETCH_CONSTANT/99         #52=      ?0                   27:'SERVER_ID'      	;16
	47  47   SEND_VAL_EX/116           ?96       #52                  ?2                  	;0
	48  47   FETCH_CONSTANT/99         #53=      ?0                   30:'SERVER_ID'      	;16
	49  47   SEND_VAL_EX/116           ?112      #53                  ?3                  	;0
	50  47   FETCH_CONSTANT/99         #54=      ?0                   33:'SERVER_ID'      	;16
	51  47   SEND_VAL_EX/116           ?128      #54                  ?4                  	;0
	52  47   FETCH_CONSTANT/99         #55=      ?0                   36:'SERVER_ID'      	;16
	53  47   SEND_VAL_EX/116           ?144      #55                  ?5                  	;0
	54  47   DO_FCALL/60               ?22       ?0                   ?0                  	;0
	55  48   GOTO/253                  ?0        ?96                  ?39                 	;0
	56  50   INIT_METHOD_CALL/112      ?0        16?3                 40:'query'          	;3
	57  50   SEND_VAL_EX/116           ?80       42:'SELECT t2.stream_display_name, t1.stream_started, t1.stream_info, t2.fps_restart, t1.stream_status, t1.progress_info, t1.stream_id, t1.monitor_pid, t1.on_demand, t1.server_stream_id, t1.pid, servers_attached.attached, t2.vframes_server_id, t2.vframes_pid, t2.tv_archive_server_id, t2.tv_archive_pid FROM `streams_servers` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.direct_source = 0 INNER JOIN `streams_types` t3 ON t3.type_id = t2.type LEFT JOIN (SELECT `stream_id`, COUNT(*) AS `attached` FROM `streams_servers` WHERE `parent_id` = ? AND `pid` IS NOT NULL AND `pid` > 0 AND `monitor_pid` IS NOT NULL AND `monitor_pid` > 0) AS `servers_attached` ON `servers_attached`.`stream_id` = t1.`stream_id` WHERE (t1.pid IS NOT NULL OR t1.stream_status <> 0 OR t1.to_analyze = 1) AND t1.server_id = ? AND t3.live = 1' ?1                  	;0
	58  50   FETCH_CONSTANT/99         #57=      ?0                   43:'SERVER_ID'      	;16
	59  50   SEND_VAL_EX/116           ?96       #57                  ?2                  	;0
	60  50   FETCH_CONSTANT/99         #58=      ?0                   46:'SERVER_ID'      	;16
	61  50   SEND_VAL_EX/116           ?112      #58                  ?3                  	;0
	62  50   DO_FCALL/60               ?25       ?0                   ?0                  	;0
	63  51   GOTO/253                  ?0        ?96                  ?49                 	;0
	64  53   INIT_METHOD_CALL/112      ?0        16?3                 50:'query'          	;2
	65  53   SEND_VAL_EX/116           ?80       52:'SELECT `stream_id` FROM `streams_servers` WHERE `on_demand` = 1 AND `server_id` = ?;' ?1                  	;0
	66  53   FETCH_CONSTANT/99         #60=      ?0                   53:'SERVER_ID'      	;16
	67  53   SEND_VAL_EX/116           ?96       #60                  ?2                  	;0
	68  53   DO_FCALL/60               ?27       ?0                   ?0                  	;0
	69  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'array_keys'     	;1
	70  54   INIT_METHOD_CALL/112      ?0        16?3                 58:'get_rows'       	;2
	71  54   SEND_VAL_EX/116           ?80       60:true              ?1                  	;0
	72  54   SEND_VAL_EX/116           ?96       61:'stream_id'       ?2                  	;0
	73  54   DO_FCALL/60               $62=      ?0                   ?0                  	;0
	74  54   SEND_VAR_NO_REF_EX/50     ?80       $62                  ?1                  	;0
	75  54   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
	76  54   ASSIGN/38                 ?30       16?4                 $63                 	;0
	77  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'shell_exec'     	;1
	78  55   SEND_VAL_EX/116           ?80       64:'ps aux | grep XUI' ?1                  	;0
	79  55   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
	80  55   ASSIGN/38                 ?32       16?5                 $65                 	;0
	81  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'preg_match_all' 	;3
	82  56   SEND_VAL_EX/116           ?80       67:'/XUI\\[(.*)\\]/' ?1                  	;0
	83  56   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	84  56   SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
	85  56   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
	86  56   BOOL_NOT/13               #68=      $67                  ?0                  	;0
	87  56   JMPZ/43                   ?0        #68                  ?89                 	;0	>>89
	88  57   GOTO/253                  ?0        ?745                 ?68                 	;0
	89  59   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'array_diff'     	;2	<<87
	90  59   FETCH_DIM_FUNC_ARG/93     $69=      16?6                 71:1                	;1
	91  59   SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
	92  59   SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
	93  59   DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
	94  59   ASSIGN/38                 ?37       16?7                 $70                 	;0
	95  60   GOTO/253                  ?0        ?702                 ?72                 	;0
	96  63   INIT_METHOD_CALL/112      ?0        16?3                 73:'num_rows'       	;0
	97  63   DO_FCALL/60               $72=      ?0                   ?0                  	;0
	98  63   IS_SMALLER/19             #73=      75:0                 $72                 	;0
	99  63   BOOL_NOT/13               #74=      #73                  ?0                  	;0
	100 63   JMPZ/43                   ?0        #74                  ?102                	;0	>>102
	101 64   GOTO/253                  ?0        ?683                 ?76                 	;0
	102 66   INIT_METHOD_CALL/112      ?0        16?3                 77:'get_rows'       	;0	<<100
	103 66   DO_FCALL/60               $75=      ?0                   ?0                  	;0
	104 66   FE_RESET_R/77             $76=      $75                  ?682                	;0
	105 66   FE_FETCH_R/78             ?0        $76                  16?9                	;682	>>682	<<681
	106 67   NOP/0                     ?0        ?0                   ?0                  	;1
	107 67   GOTO/253                  ?0        ?622                 ?79                 	;0
	108 69   ECHO/40                   ?0        80:'
'               ?0                  	;0
	109 71   NOP/0                     ?0        ?0                   ?0                  	;1
	110 71   GOTO/253                  ?0        ?681                 ?81                 	;0
	111 73   NOP/0                     ?0        ?0                   ?0                  	;1
	112 73   GOTO/253                  ?0        ?126                 ?82                 	;0
	113 75   INIT_METHOD_CALL/112      ?0        16?3                 83:'query'          	;10
	114 75   SEND_VAL_EX/116           ?80       85:'UPDATE `streams_servers` SET `pid` = ?, `progress_info` = ?, `stream_info` = ?, `compatible` = ?, `bitrate` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ? WHERE `server_stream_id` = ?' ?1                  	;0
	115 75   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	116 75   SEND_VAR_EX/66            ?112      16?10                ?3                  	;0
	117 75   SEND_VAR_EX/66            ?128      16?11                ?4                  	;0
	118 75   SEND_VAR_EX/66            ?144      16?12                ?5                  	;0
	119 75   SEND_VAR_EX/66            ?160      16?13                ?6                  	;0
	120 75   SEND_VAR_EX/66            ?176      16?14                ?7                  	;0
	121 75   SEND_VAR_EX/66            ?192      16?15                ?8                  	;0
	122 75   SEND_VAR_EX/66            ?208      16?16                ?9                  	;0
	123 75   FETCH_DIM_FUNC_ARG/93     $77=      16?9                 86:'server_stream_id'	;10
	124 75   SEND_VAR_EX/66            ?224      $77                  ?10                 	;0
	125 75   DO_FCALL/60               ?44       ?0                   ?0                  	;0
	126 78   NOP/0                     ?0        ?0                   ?0                  	;1
	127 78   GOTO/253                  ?0        ?108                 ?87                 	;0
	128 80   NOP/0                     ?0        ?0                   ?0                  	;1
	129 80   GOTO/253                  ?0        ?109                 ?88                 	;0
	130 83   FETCH_DIM_R/81            $79=      16?9                 89:'vframes_server_id'	;0
	131 83   FETCH_CONSTANT/99         #80=      ?0                   90:'SERVER_ID'      	;16
	132 83   IS_EQUAL/17               #81=      $79                  #80                 	;0
	133 83   JMPZ_EX/46                #81=      #81                  ?142                	;0	>>142
	134 83   INIT_STATIC_METHOD_CALL/113 ?0        93:'XUI'             95:'Bc5337836B080227'	;2
	135 83   FETCH_DIM_FUNC_ARG/93     $82=      16?9                 97:'vframes_pid'    	;1
	136 83   SEND_VAR_EX/66            ?80       $82                  ?1                  	;0
	137 83   FETCH_DIM_FUNC_ARG/93     $83=      16?9                 98:'stream_id'      	;2
	138 83   SEND_VAR_EX/66            ?96       $83                  ?2                  	;0
	139 83   DO_FCALL/60               $84=      ?0                   ?0                  	;0
	140 83   BOOL_NOT/13               #85=      $84                  ?0                  	;0
	141 83   BOOL/52                   #81=      #85                  ?0                  	;0
	142 83   BOOL_NOT/13               #86=      #81                  ?0                  	;0	<<133
	143 83   JMPZ/43                   ?0        #86                  ?146                	;0	>>146
	144 84   NOP/0                     ?0        ?0                   ?0                  	;1
	145 84   GOTO/253                  ?0        ?285                 ?99                 	;0
	146 86   ECHO/40                   ?0        100:'Start Thumbnail...
' ?0                  	;0	<<143
	147 87   NOP/0                     ?0        ?0                   ?0                  	;1
	148 87   GOTO/253                  ?0        ?281                 ?101                	;0
	149 89   NOP/0                     ?0        ?0                   ?0                  	;1
	150 89   GOTO/253                  ?0        ?162                 ?102                	;0
	151 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'intval'        	;1
	152 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'file_get_contents'	;1
	153 91   FETCH_CONSTANT/99         #87=      ?0                   107:'STREAMS_PATH'  	;16
	154 91   FETCH_DIM_R/81            $88=      16?9                 110:'stream_id'     	;0
	155 91   CONCAT/8                  #89=      #87                  $88                 	;0
	156 91   CONCAT/8                  #90=      #89                  111:'_.pid'         	;0
	157 91   SEND_VAL_EX/116           ?80       #90                  ?1                  	;0
	158 91   DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
	159 91   SEND_VAR_NO_REF_EX/50     ?80       $91                  ?1                  	;0
	160 91   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	161 91   ASSIGN/38                 ?59       16?1                 $92                 	;0
	162 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'intval'        	;1
	163 93   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	164 93   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
	165 93   ASSIGN_DIM/147            ?60       16?2                 ?2670194496         	;0
	166 93   OP_DATA/137               ?0        $95                  ?0                  	;0
	167 94   NOP/0                     ?0        ?0                   ?0                  	;1
	168 94   GOTO/253                  ?0        ?240                 ?114                	;0
	169 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   115:'usleep'        	;1
	170 96   SEND_VAL_EX/116           ?80       117:50000            ?1                  	;0
	171 96   DO_FCALL_BY_NAME/131      ?62       ?0                   ?0                  	;0
	172 97   NOP/0                     ?0        ?0                   ?0                  	;1
	173 97   GOTO/253                  ?0        ?109                 ?118                	;0
	174 99   FETCH_DIM_R/81            $97=      16?9                 119:'on_demand'     	;0
	175 99   IS_EQUAL/17               #98=      $97                  120:1               	;0
	176 99   JMPZ_EX/46                #98=      #98                  ?180                	;0	>>180
	177 99   FETCH_DIM_R/81            $99=      16?9                 121:'attached'      	;0
	178 99   IS_EQUAL/17               #100=     $99                  122:0               	;0
	179 99   BOOL/52                   #98=      #100                 ?0                  	;0
	180 99   BOOL_NOT/13               #101=     #98                  ?0                  	;0	<<176
	181 99   JMPZ/43                   ?0        #101                 ?184                	;0	>>184
	182 100  NOP/0                     ?0        ?0                   ?0                  	;1
	183 100  GOTO/253                  ?0        ?130                 ?123                	;0
	184 102  FETCH_STATIC_PROP_R/173   $102=     124:'rSettings'      125:'XUI'           	;0	<<181
	185 102  FETCH_DIM_R/81            $103=     $102                 127:'redis_handler' 	;0
	186 102  BOOL_NOT/13               #104=     $103                 ?0                  	;0
	187 102  JMPZ/43                   ?0        #104                 ?190                	;0	>>190
	188 103  NOP/0                     ?0        ?0                   ?0                  	;1
	189 103  GOTO/253                  ?0        ?677                 ?128                	;0
	190 105  NOP/0                     ?0        ?0                   ?0                  	;1	<<187
	191 105  GOTO/253                  ?0        ?318                 ?129                	;0
	192 109  IS_EQUAL/17               #105=     16?17                130:0               	;0
	193 109  JMPZ_EX/46                #105=     #105                 ?196                	;0	>>196
	194 109  IS_EQUAL/17               #106=     16?18                131:0               	;0
	195 109  BOOL/52                   #105=     #106                 ?0                  	;0
	196 109  JMPZ_EX/46                #105=     #105                 ?200                	;0	>>200	<<193
	197 109  FETCH_DIM_R/81            $107=     16?9                 132:'online_clients'	;0
	198 109  IS_EQUAL/17               #108=     $107                 133:0               	;0
	199 109  BOOL/52                   #105=     #108                 ?0                  	;0
	200 109  JMPZ_EX/46                #105=     #105                 ?228                	;0	>>228	<<196
	201 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'file_exists'   	;1
	202 109  FETCH_CONSTANT/99         #109=     ?0                   136:'STREAMS_PATH'  	;16
	203 109  FETCH_DIM_R/81            $110=     16?9                 139:'stream_id'     	;0
	204 109  CONCAT/8                  #111=     #109                 $110                	;0
	205 109  CONCAT/8                  #112=     #111                 140:'_.m3u8'        	;0
	206 109  SEND_VAL_EX/116           ?80       #112                 ?1                  	;0
	207 109  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
	208 109  JMPNZ_EX/47               #114=     $113                 ?223                	;0	>>223
	209 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   141:'time'          	;0
	210 109  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
	211 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'intval'        	;1
	212 109  FETCH_DIM_FUNC_ARG/93     $116=     16?9                 145:'stream_started'	;1
	213 109  SEND_VAR_EX/66            ?80       $116                 ?1                  	;0
	214 109  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
	215 109  SUB/2                     #118=     $115                 $117                	;0
	216 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'intval'        	;1
	217 109  FETCH_STATIC_PROP_FUNC_ARG/177 $119=     148:'rSettings'      149:'XUI'           	;1
	218 109  FETCH_DIM_FUNC_ARG/93     $120=     $119                 151:'on_demand_wait_time'	;1
	219 109  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
	220 109  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
	221 109  IS_SMALLER/19             #122=     $121                 #118                	;0
	222 109  BOOL/52                   #114=     #122                 ?0                  	;0
	223 109  JMPNZ_EX/47               #114=     #114                 ?227                	;0	>>227	<<208
	224 109  FETCH_DIM_R/81            $123=     16?9                 152:'stream_status' 	;0
	225 109  IS_EQUAL/17               #124=     $123                 153:1               	;0
	226 109  BOOL/52                   #114=     #124                 ?0                  	;0
	227 109  BOOL/52                   #105=     #114                 ?0                  	;0	<<223
	228 109  BOOL_NOT/13               #125=     #105                 ?0                  	;0	<<200
	229 109  JMPZ/43                   ?0        #125                 ?232                	;0	>>232
	230 110  NOP/0                     ?0        ?0                   ?0                  	;1
	231 110  GOTO/253                  ?0        ?130                 ?154                	;0
	232 112  ECHO/40                   ?0        155:'Stop on-demand stream...

' ?0                  	;0	<<229
	233 113  INIT_STATIC_METHOD_CALL/113 ?0        156:'XUI'            158:'ee173B194544B3a2'	;2
	234 113  FETCH_DIM_FUNC_ARG/93     $126=     16?9                 160:'stream_id'     	;1
	235 113  SEND_VAR_EX/66            ?80       $126                 ?1                  	;0
	236 113  SEND_VAL_EX/116           ?96       161:true             ?2                  	;0
	237 113  DO_FCALL/60               ?93       ?0                   ?0                  	;0
	238 114  NOP/0                     ?0        ?0                   ?0                  	;1
	239 114  GOTO/253                  ?0        ?128                 ?162                	;0
	240 116  FETCH_CONSTANT/99         #128=     ?0                   163:'STREAMS_PATH'  	;16
	241 116  FETCH_DIM_R/81            $129=     16?9                 166:'stream_id'     	;0
	242 116  CONCAT/8                  #130=     #128                 $129                	;0
	243 116  CONCAT/8                  #131=     #130                 167:'_.m3u8'        	;0
	244 116  ASSIGN/38                 ?98       16?19                #131                	;0
	245 117  INIT_STATIC_METHOD_CALL/113 ?0        168:'XUI'            170:'b4ab2a8Eb0AA68Ee'	;2
	246 117  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	247 117  FETCH_DIM_FUNC_ARG/93     $133=     16?9                 172:'stream_id'     	;2
	248 117  SEND_VAR_EX/66            ?96       $133                 ?2                  	;0
	249 117  DO_FCALL/60               $134=     ?0                   ?0                  	;0
	250 117  JMPZ_EX/46                #135=     $134                 ?255                	;0	>>255
	251 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'file_exists'   	;1
	252 117  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	253 117  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
	254 117  BOOL/52                   #135=     $136                 ?0                  	;0
	255 117  BOOL_NOT/13               #137=     #135                 ?0                  	;0	<<250
	256 117  JMPZ/43                   ?0        #137                 ?259                	;0	>>259
	257 118  NOP/0                     ?0        ?0                   ?0                  	;1
	258 118  GOTO/253                  ?0        ?126                 ?175                	;0
	259 120  ECHO/40                   ?0        176:'Update Stream Information...
' ?0                  	;0	<<256
	260 121  INIT_STATIC_METHOD_CALL/113 ?0        177:'XUI'            179:'E0117654B65ae897'	;2
	261 121  SEND_VAL_EX/116           ?80       181:'live'           ?1                  	;0
	262 121  FETCH_CONSTANT/99         #138=     ?0                   182:'STREAMS_PATH'  	;16
	263 121  FETCH_DIM_R/81            $139=     16?9                 185:'stream_id'     	;0
	264 121  CONCAT/8                  #140=     #138                 $139                	;0
	265 121  CONCAT/8                  #141=     #140                 186:'_.m3u8'        	;0
	266 121  SEND_VAL_EX/116           ?96       #141                 ?2                  	;0
	267 121  DO_FCALL/60               $142=     ?0                   ?0                  	;0
	268 121  ASSIGN/38                 ?109      16?13                $142                	;0
	269 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'file_exists'   	;1
	270 122  FETCH_CONSTANT/99         #144=     ?0                   189:'STREAMS_PATH'  	;16
	271 122  FETCH_DIM_R/81            $145=     16?9                 192:'stream_id'     	;0
	272 122  CONCAT/8                  #146=     #144                 $145                	;0
	273 122  CONCAT/8                  #147=     #146                 193:'_.progress'    	;0
	274 122  SEND_VAL_EX/116           ?80       #147                 ?1                  	;0
	275 122  DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
	276 122  JMPZ/43                   ?0        $148                 ?279                	;0	>>279
	277 123  NOP/0                     ?0        ?0                   ?0                  	;1
	278 123  GOTO/253                  ?0        ?555                 ?194                	;0
	279 125  NOP/0                     ?0        ?0                   ?0                  	;1	<<276
	280 125  GOTO/253                  ?0        ?551                 ?195                	;0
	281 127  INIT_STATIC_METHOD_CALL/113 ?0        196:'XUI'            198:'D1B70980B1181C05'	;1
	282 127  FETCH_DIM_FUNC_ARG/93     $149=     16?9                 200:'stream_id'     	;1
	283 127  SEND_VAR_EX/66            ?80       $149                 ?1                  	;0
	284 127  DO_FCALL/60               ?116      ?0                   ?0                  	;0
	285 129  FETCH_DIM_R/81            $151=     16?9                 201:'tv_archive_server_id'	;0
	286 129  FETCH_CONSTANT/99         #152=     ?0                   202:'SERVER_ID'     	;16
	287 129  IS_EQUAL/17               #153=     $151                 #152                	;0
	288 129  JMPZ_EX/46                #153=     #153                 ?297                	;0	>>297
	289 129  INIT_STATIC_METHOD_CALL/113 ?0        205:'XUI'            207:'c64f62A7AF653bD1'	;2
	290 129  FETCH_DIM_FUNC_ARG/93     $154=     16?9                 209:'tv_archive_pid'	;1
	291 129  SEND_VAR_EX/66            ?80       $154                 ?1                  	;0
	292 129  FETCH_DIM_FUNC_ARG/93     $155=     16?9                 210:'stream_id'     	;2
	293 129  SEND_VAR_EX/66            ?96       $155                 ?2                  	;0
	294 129  DO_FCALL/60               $156=     ?0                   ?0                  	;0
	295 129  BOOL_NOT/13               #157=     $156                 ?0                  	;0
	296 129  BOOL/52                   #153=     #157                 ?0                  	;0
	297 129  BOOL_NOT/13               #158=     #153                 ?0                  	;0	<<288
	298 129  JMPZ/43                   ?0        #158                 ?301                	;0	>>301
	299 130  NOP/0                     ?0        ?0                   ?0                  	;1
	300 130  GOTO/253                  ?0        ?572                 ?211                	;0
	301 132  ECHO/40                   ?0        212:'Start TV Archive...
' ?0                  	;0	<<298
	302 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   213:'shell_exec'    	;1
	303 133  FETCH_CONSTANT/99         #159=     ?0                   215:'PHP_BIN'       	;16
	304 133  CONCAT/8                  #160=     #159                 218:' '             	;0
	305 133  FETCH_CONSTANT/99         #161=     ?0                   219:'CLI_PATH'      	;16
	306 133  CONCAT/8                  #162=     #160                 #161                	;0
	307 133  CONCAT/8                  #163=     #162                 222:'archive.php '  	;0
	308 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'intval'        	;1
	309 133  FETCH_DIM_FUNC_ARG/93     $164=     16?9                 225:'stream_id'     	;1
	310 133  SEND_VAR_EX/66            ?80       $164                 ?1                  	;0
	311 133  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
	312 133  CONCAT/8                  #166=     #163                 $165                	;0
	313 133  CONCAT/8                  #167=     #166                 226:' >/dev/null 2>/dev/null & echo $!'	;0
	314 133  SEND_VAL_EX/116           ?80       #167                 ?1                  	;0
	315 133  DO_FCALL_BY_NAME/131      ?134      ?0                   ?0                  	;0
	316 134  NOP/0                     ?0        ?0                   ?0                  	;1
	317 134  GOTO/253                  ?0        ?572                 ?227                	;0
	318 136  ASSIGN/38                 ?135      16?20                228:0               	;0
	319 137  FETCH_STATIC_PROP_R/173   $170=     229:'redis'          230:'XUI'           	;0
	320 137  INIT_METHOD_CALL/112      ?0        $170                 232:'zRangeByScore' 	;3
	321 137  FETCH_DIM_R/81            $171=     16?9                 234:'stream_id'     	;0
	322 137  CONCAT/8                  #172=     235:'STREAM#'        $171                	;0
	323 137  SEND_VAL_EX/116           ?80       #172                 ?1                  	;0
	324 137  SEND_VAL_EX/116           ?96       236:'-inf'           ?2                  	;0
	325 137  SEND_VAL_EX/116           ?112      237:'+inf'           ?3                  	;0
	326 137  DO_FCALL/60               $173=     ?0                   ?0                  	;0
	327 137  ASSIGN/38                 ?140      16?21                $173                	;0
	328 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'count'         	;1
	329 138  SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
	330 138  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
	331 138  IS_SMALLER/19             #176=     240:0                $175                	;0
	332 138  BOOL_NOT/13               #177=     #176                 ?0                  	;0
	333 138  JMPZ/43                   ?0        #177                 ?336                	;0	>>336
	334 139  NOP/0                     ?0        ?0                   ?0                  	;1
	335 139  GOTO/253                  ?0        ?675                 ?241                	;0
	336 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   242:'array_map'     	;2	<<333
	337 141  SEND_VAL_EX/116           ?80       244:'igbinary_unserialize' ?1                  	;0
	338 141  FETCH_STATIC_PROP_R/173   $178=     245:'redis'          246:'XUI'           	;0
	339 141  INIT_METHOD_CALL/112      ?0        $178                 248:'mGet'          	;1
	340 141  SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
	341 141  DO_FCALL/60               $179=     ?0                   ?0                  	;0
	342 141  SEND_VAR_NO_REF_EX/50     ?96       $179                 ?2                  	;0
	343 141  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
	344 141  ASSIGN/38                 ?147      16?22                $180                	;0
	345 142  FE_RESET_R/77             $182=     16?22                ?360                	;0
	346 142  FE_FETCH_R/78             ?0        $182                 16?23               	;360	>>360	<<359
	347 143  JMPZ_EX/46                #183=     16?23                ?352                	;0	>>352
	348 143  FETCH_DIM_R/81            $184=     16?23                250:'server_id'     	;0
	349 143  FETCH_CONSTANT/99         #185=     ?0                   251:'SERVER_ID'     	;16
	350 143  IS_EQUAL/17               #186=     $184                 #185                	;0
	351 143  BOOL/52                   #183=     #186                 ?0                  	;0
	352 143  BOOL_NOT/13               #187=     #183                 ?0                  	;0	<<347
	353 143  JMPZ/43                   ?0        #187                 ?357                	;0	>>357
	354 144  NOP/0                     ?0        ?0                   ?0                  	;1
	355 144  NOP/0                     ?0        ?0                   ?0                  	;1
	356 144  GOTO/253                  ?0        ?359                 ?254                	;0
	357 146  POST_INC/36               #188=     16?20                ?0                  	;0	<<353
	358 146  FREE/70                   ?0        #188                 ?0                  	;0
	359 148  JMP/42                    ?0        ?346                 ?0                  	;0	>>346
	360 148  FE_FREE/127               ?0        $182                 ?0                  	;0	<<345
	361 150  NOP/0                     ?0        ?0                   ?0                  	;1
	362 150  GOTO/253                  ?0        ?675                 ?255                	;0
	363 153  ASSIGN/38                 ?155      16?12                256:0               	;0
	364 154  ASSIGN/38                 $190=     16?16                257:NULL            	;0
	365 154  ASSIGN/38                 $191=     16?15                $190                	;0
	366 154  ASSIGN/38                 ?158      16?14                $191                	;0
	367 155  BOOL_NOT/13               #193=     16?11                ?0                  	;0
	368 155  JMPZ/43                   ?0        #193                 ?371                	;0	>>371
	369 156  NOP/0                     ?0        ?0                   ?0                  	;1
	370 156  GOTO/253                  ?0        ?656                 ?258                	;0
	371 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'json_decode'   	;2	<<368
	372 158  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	373 158  SEND_VAL_EX/116           ?96       261:true             ?2                  	;0
	374 158  DO_FCALL_BY_NAME/131      $194=     ?0                   ?0                  	;0
	375 158  ASSIGN/38                 ?161      16?24                $194                	;0
	376 159  NOP/0                     ?0        ?0                   ?0                  	;1
	377 159  GOTO/253                  ?0        ?520                 ?262                	;0
	378 161  FETCH_DIM_R/81            $196=     16?9                 263:'stream_info'   	;0
	379 161  ASSIGN/38                 ?163      16?11                $196                	;0
	380 162  NOP/0                     ?0        ?0                   ?0                  	;1
	381 162  GOTO/253                  ?0        ?363                 ?264                	;0
	382 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'file_get_contents'	;1
	383 164  FETCH_CONSTANT/99         #198=     ?0                   267:'STREAMS_PATH'  	;16
	384 164  FETCH_DIM_R/81            $199=     16?9                 270:'stream_id'     	;0
	385 164  CONCAT/8                  #200=     #198                 $199                	;0
	386 164  CONCAT/8                  #201=     #200                 271:'_.stream_info' 	;0
	387 164  SEND_VAL_EX/116           ?80       #201                 ?1                  	;0
	388 164  DO_FCALL_BY_NAME/131      $202=     ?0                   ?0                  	;0
	389 164  ASSIGN/38                 ?169      16?11                $202                	;0
	390 165  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'unlink'        	;1
	391 165  FETCH_CONSTANT/99         #204=     ?0                   274:'STREAMS_PATH'  	;16
	392 165  FETCH_DIM_R/81            $205=     16?9                 277:'stream_id'     	;0
	393 165  CONCAT/8                  #206=     #204                 $205                	;0
	394 165  CONCAT/8                  #207=     #206                 278:'_.stream_info' 	;0
	395 165  SEND_VAL_EX/116           ?80       #207                 ?1                  	;0
	396 165  DO_FCALL_BY_NAME/131      ?174      ?0                   ?0                  	;0
	397 166  NOP/0                     ?0        ?0                   ?0                  	;1
	398 166  GOTO/253                  ?0        ?363                 ?279                	;0
	399 168  FETCH_DIM_R/81            $209=     16?9                 280:'fps_restart'   	;0
	400 168  BOOL_NOT/13               #210=     $209                 ?0                  	;0
	401 168  JMPZ/43                   ?0        #210                 ?404                	;0	>>404
	402 169  NOP/0                     ?0        ?0                   ?0                  	;1
	403 169  GOTO/253                  ?0        ?412                 ?281                	;0
	404 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   282:'file_put_contents'	;2	<<401
	405 171  FETCH_CONSTANT/99         #211=     ?0                   284:'STREAMS_PATH'  	;16
	406 171  FETCH_DIM_R/81            $212=     16?9                 287:'stream_id'     	;0
	407 171  CONCAT/8                  #213=     #211                 $212                	;0
	408 171  CONCAT/8                  #214=     #213                 288:'_.progress_check'	;0
	409 171  SEND_VAL_EX/116           ?80       #214                 ?1                  	;0
	410 171  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
	411 171  DO_FCALL_BY_NAME/131      ?181      ?0                   ?0                  	;0
	412 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   289:'file_exists'   	;1
	413 174  FETCH_CONSTANT/99         #216=     ?0                   291:'STREAMS_PATH'  	;16
	414 174  FETCH_DIM_R/81            $217=     16?9                 294:'stream_id'     	;0
	415 174  CONCAT/8                  #218=     #216                 $217                	;0
	416 174  CONCAT/8                  #219=     #218                 295:'_.stream_info' 	;0
	417 174  SEND_VAL_EX/116           ?80       #219                 ?1                  	;0
	418 174  DO_FCALL_BY_NAME/131      $220=     ?0                   ?0                  	;0
	419 174  JMPZ/43                   ?0        $220                 ?422                	;0	>>422
	420 175  NOP/0                     ?0        ?0                   ?0                  	;1
	421 175  GOTO/253                  ?0        ?382                 ?296                	;0
	422 177  NOP/0                     ?0        ?0                   ?0                  	;1	<<419
	423 177  GOTO/253                  ?0        ?378                 ?297                	;0
	424 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'time'          	;0
	425 179  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
	426 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   300:'filemtime'     	;1
	427 179  FETCH_CONSTANT/99         #222=     ?0                   302:'SIGNALS_TMP_PATH'	;16
	428 179  CONCAT/8                  #223=     #222                 305:'admin_'        	;0
	429 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   306:'intval'        	;1
	430 179  FETCH_DIM_FUNC_ARG/93     $224=     16?9                 308:'stream_id'     	;1
	431 179  SEND_VAR_EX/66            ?80       $224                 ?1                  	;0
	432 179  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
	433 179  CONCAT/8                  #226=     #223                 $225                	;0
	434 179  SEND_VAL_EX/116           ?80       #226                 ?1                  	;0
	435 179  DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
	436 179  SUB/2                     #228=     $221                 $227                	;0
	437 179  IS_SMALLER_OR_EQUAL/20    #229=     #228                 309:30              	;0
	438 179  JMPZ/43                   ?0        #229                 ?441                	;0	>>441
	439 180  NOP/0                     ?0        ?0                   ?0                  	;1
	440 180  GOTO/253                  ?0        ?453                 ?310                	;0
	441 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'unlink'        	;1	<<438
	442 182  FETCH_CONSTANT/99         #230=     ?0                   313:'SIGNALS_TMP_PATH'	;16
	443 182  CONCAT/8                  #231=     #230                 316:'admin_'        	;0
	444 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   317:'intval'        	;1
	445 182  FETCH_DIM_FUNC_ARG/93     $232=     16?9                 319:'stream_id'     	;1
	446 182  SEND_VAR_EX/66            ?80       $232                 ?1                  	;0
	447 182  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
	448 182  CONCAT/8                  #234=     #231                 $233                	;0
	449 182  SEND_VAL_EX/116           ?80       #234                 ?1                  	;0
	450 182  DO_FCALL_BY_NAME/131      ?201      ?0                   ?0                  	;0
	451 183  NOP/0                     ?0        ?0                   ?0                  	;1
	452 183  GOTO/253                  ?0        ?192                 ?320                	;0
	453 185  ASSIGN/38                 ?202      16?18                321:1               	;0
	454 186  NOP/0                     ?0        ?0                   ?0                  	;1
	455 186  GOTO/253                  ?0        ?192                 ?322                	;0
	456 188  FETCH_STATIC_PROP_R/173   $237=     323:'rSettings'      324:'XUI'           	;0
	457 188  FETCH_DIM_R/81            $238=     $237                 326:'on_demand_instant_off'	;0
	458 188  JMPZ_EX/46                #239=     $238                 ?470                	;0	>>470
	459 188  INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'file_exists'   	;1
	460 188  FETCH_CONSTANT/99         #240=     ?0                   329:'SIGNALS_TMP_PATH'	;16
	461 188  CONCAT/8                  #241=     #240                 332:'queue_'        	;0
	462 188  INIT_FCALL_BY_NAME/59     ?0        ?0                   333:'intval'        	;1
	463 188  FETCH_DIM_FUNC_ARG/93     $242=     16?9                 335:'stream_id'     	;1
	464 188  SEND_VAR_EX/66            ?80       $242                 ?1                  	;0
	465 188  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
	466 188  CONCAT/8                  #244=     #241                 $243                	;0
	467 188  SEND_VAL_EX/116           ?80       #244                 ?1                  	;0
	468 188  DO_FCALL_BY_NAME/131      $245=     ?0                   ?0                  	;0
	469 188  BOOL/52                   #239=     $245                 ?0                  	;0
	470 188  BOOL_NOT/13               #246=     #239                 ?0                  	;0	<<458
	471 188  JMPZ/43                   ?0        #246                 ?474                	;0	>>474
	472 189  NOP/0                     ?0        ?0                   ?0                  	;1
	473 189  GOTO/253                  ?0        ?504                 ?336                	;0
	474 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   337:'igbinary_unserialize'	;1	<<471
	475 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   339:'file_get_contents'	;1
	476 191  FETCH_CONSTANT/99         #247=     ?0                   341:'SIGNALS_TMP_PATH'	;16
	477 191  CONCAT/8                  #248=     #247                 344:'queue_'        	;0
	478 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   345:'intval'        	;1
	479 191  FETCH_DIM_FUNC_ARG/93     $249=     16?9                 347:'stream_id'     	;1
	480 191  SEND_VAR_EX/66            ?80       $249                 ?1                  	;0
	481 191  DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
	482 191  CONCAT/8                  #251=     #248                 $250                	;0
	483 191  SEND_VAL_EX/116           ?80       #251                 ?1                  	;0
	484 191  DO_FCALL_BY_NAME/131      $252=     ?0                   ?0                  	;0
	485 191  SEND_VAR_NO_REF_EX/50     ?80       $252                 ?1                  	;0
	486 191  DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
	487 191  JMP_SET/152               #254=     $253                 ?489                	;0
	488 191  QM_ASSIGN/22              #254=     348:array (
)        ?0                  	;0
	489 191  FE_RESET_R/77             $255=     #254                 ?503                	;0
	490 191  FE_FETCH_R/78             ?0        $255                 16?1                	;503	>>503	<<502
	491 192  INIT_STATIC_METHOD_CALL/113 ?0        349:'XUI'            351:'E764F10e99c26365'	;2
	492 192  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	493 192  SEND_VAL_EX/116           ?96       353:'php-fpm'        ?2                  	;0
	494 192  DO_FCALL/60               $256=     ?0                   ?0                  	;0
	495 192  BOOL_NOT/13               #257=     $256                 ?0                  	;0
	496 192  JMPZ/43                   ?0        #257                 ?500                	;0	>>500
	497 193  NOP/0                     ?0        ?0                   ?0                  	;1
	498 193  NOP/0                     ?0        ?0                   ?0                  	;1
	499 193  GOTO/253                  ?0        ?502                 ?354                	;0
	500 195  POST_INC/36               #258=     16?17                ?0                  	;0	<<496
	501 195  FREE/70                   ?0        #258                 ?0                  	;0
	502 197  JMP/42                    ?0        ?490                 ?0                  	;0	>>490
	503 197  FE_FREE/127               ?0        $255                 ?0                  	;0	<<489
	504 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   355:'file_exists'   	;1
	505 201  FETCH_CONSTANT/99         #259=     ?0                   357:'SIGNALS_TMP_PATH'	;16
	506 201  CONCAT/8                  #260=     #259                 360:'admin_'        	;0
	507 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   361:'intval'        	;1
	508 201  FETCH_DIM_FUNC_ARG/93     $261=     16?9                 363:'stream_id'     	;1
	509 201  SEND_VAR_EX/66            ?80       $261                 ?1                  	;0
	510 201  DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
	511 201  CONCAT/8                  #263=     #260                 $262                	;0
	512 201  SEND_VAL_EX/116           ?80       #263                 ?1                  	;0
	513 201  DO_FCALL_BY_NAME/131      $264=     ?0                   ?0                  	;0
	514 201  BOOL_NOT/13               #265=     $264                 ?0                  	;0
	515 201  JMPZ/43                   ?0        #265                 ?518                	;0	>>518
	516 202  NOP/0                     ?0        ?0                   ?0                  	;1
	517 202  GOTO/253                  ?0        ?192                 ?364                	;0
	518 204  NOP/0                     ?0        ?0                   ?0                  	;1	<<515
	519 204  GOTO/253                  ?0        ?424                 ?365                	;0
	520 206  INIT_FCALL_BY_NAME/59     ?0        ?0                   366:'intval'        	;1
	521 206  INIT_STATIC_METHOD_CALL/113 ?0        368:'XUI'            370:'D00c33c8075d14a5'	;1
	522 206  SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
	523 206  DO_FCALL/60               $266=     ?0                   ?0                  	;0
	524 206  SEND_VAR_NO_REF_EX/50     ?80       $266                 ?1                  	;0
	525 206  DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
	526 206  ASSIGN/38                 ?234      16?12                $267                	;0
	527 207  FETCH_DIM_R/81            $269=     16?24                372:'codecs'        	;0
	528 207  FETCH_DIM_R/81            $270=     $269                 373:'audio'         	;0
	529 207  FETCH_DIM_R/81            $271=     $270                 374:'codec_name'    	;0
	530 207  JMP_SET/152               #272=     $271                 ?532                	;0
	531 207  QM_ASSIGN/22              #272=     375:NULL             ?0                  	;0
	532 207  ASSIGN/38                 ?239      16?14                #272                	;0
	533 208  FETCH_DIM_R/81            $274=     16?24                376:'codecs'        	;0
	534 208  FETCH_DIM_R/81            $275=     $274                 377:'video'         	;0
	535 208  FETCH_DIM_R/81            $276=     $275                 378:'codec_name'    	;0
	536 208  JMP_SET/152               #277=     $276                 ?538                	;0
	537 208  QM_ASSIGN/22              #277=     379:NULL             ?0                  	;0
	538 208  ASSIGN/38                 ?244      16?15                #277                	;0
	539 209  FETCH_DIM_R/81            $279=     16?24                380:'codecs'        	;0
	540 209  FETCH_DIM_R/81            $280=     $279                 381:'video'         	;0
	541 209  FETCH_DIM_R/81            $281=     $280                 382:'height'        	;0
	542 209  JMP_SET/152               #282=     $281                 ?544                	;0
	543 209  QM_ASSIGN/22              #282=     383:NULL             ?0                  	;0
	544 209  ASSIGN/38                 ?249      16?16                #282                	;0
	545 210  BOOL_NOT/13               #284=     16?16                ?0                  	;0
	546 210  JMPZ/43                   ?0        #284                 ?549                	;0	>>549
	547 211  NOP/0                     ?0        ?0                   ?0                  	;1
	548 211  GOTO/253                  ?0        ?656                 ?384                	;0
	549 213  NOP/0                     ?0        ?0                   ?0                  	;1	<<546
	550 213  GOTO/253                  ?0        ?651                 ?385                	;0
	551 215  FETCH_DIM_R/81            $285=     16?9                 386:'progress_info' 	;0
	552 215  ASSIGN/38                 ?252      16?10                $285                	;0
	553 216  NOP/0                     ?0        ?0                   ?0                  	;1
	554 216  GOTO/253                  ?0        ?412                 ?387                	;0
	555 218  INIT_FCALL_BY_NAME/59     ?0        ?0                   388:'file_get_contents'	;1
	556 218  FETCH_CONSTANT/99         #287=     ?0                   390:'STREAMS_PATH'  	;16
	557 218  FETCH_DIM_R/81            $288=     16?9                 393:'stream_id'     	;0
	558 218  CONCAT/8                  #289=     #287                 $288                	;0
	559 218  CONCAT/8                  #290=     #289                 394:'_.progress'    	;0
	560 218  SEND_VAL_EX/116           ?80       #290                 ?1                  	;0
	561 218  DO_FCALL_BY_NAME/131      $291=     ?0                   ?0                  	;0
	562 218  ASSIGN/38                 ?258      16?10                $291                	;0
	563 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   395:'unlink'        	;1
	564 219  FETCH_CONSTANT/99         #293=     ?0                   397:'STREAMS_PATH'  	;16
	565 219  FETCH_DIM_R/81            $294=     16?9                 400:'stream_id'     	;0
	566 219  CONCAT/8                  #295=     #293                 $294                	;0
	567 219  CONCAT/8                  #296=     #295                 401:'_.progress'    	;0
	568 219  SEND_VAL_EX/116           ?80       #296                 ?1                  	;0
	569 219  DO_FCALL_BY_NAME/131      ?263      ?0                   ?0                  	;0
	570 220  NOP/0                     ?0        ?0                   ?0                  	;1
	571 220  GOTO/253                  ?0        ?399                 ?402                	;0
	572 223  INIT_FCALL_BY_NAME/59     ?0        ?0                   403:'glob'          	;1
	573 223  FETCH_CONSTANT/99         #298=     ?0                   405:'STREAMS_PATH'  	;16
	574 223  FETCH_DIM_R/81            $299=     16?9                 408:'stream_id'     	;0
	575 223  CONCAT/8                  #300=     #298                 $299                	;0
	576 223  CONCAT/8                  #301=     #300                 409:'_*.ts.enc'     	;0
	577 223  SEND_VAL_EX/116           ?80       #301                 ?1                  	;0
	578 223  DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
	579 223  FE_RESET_R/77             $303=     $302                 ?596                	;0
	580 223  FE_FETCH_R/78             ?0        $303                 16?25               	;596	>>596	<<595
	581 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   410:'file_exists'   	;1
	582 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   412:'rtrim'         	;2
	583 224  SEND_VAR_EX/66            ?80       16?25                ?1                  	;0
	584 224  SEND_VAL_EX/116           ?96       414:'.enc'           ?2                  	;0
	585 224  DO_FCALL_BY_NAME/131      $304=     ?0                   ?0                  	;0
	586 224  SEND_VAR_NO_REF_EX/50     ?80       $304                 ?1                  	;0
	587 224  DO_FCALL_BY_NAME/131      $305=     ?0                   ?0                  	;0
	588 224  JMPZ/43                   ?0        $305                 ?592                	;0	>>592
	589 225  NOP/0                     ?0        ?0                   ?0                  	;1
	590 225  NOP/0                     ?0        ?0                   ?0                  	;1
	591 225  GOTO/253                  ?0        ?595                 ?415                	;0
	592 227  INIT_FCALL_BY_NAME/59     ?0        ?0                   416:'unlink'        	;1	<<588
	593 227  SEND_VAR_EX/66            ?80       16?25                ?1                  	;0
	594 227  DO_FCALL_BY_NAME/131      ?272      ?0                   ?0                  	;0
	595 229  JMP/42                    ?0        ?580                 ?0                  	;0	>>580
	596 229  FE_FREE/127               ?0        $303                 ?0                  	;0	<<579
	597 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   418:'file_exists'   	;1
	598 232  FETCH_CONSTANT/99         #307=     ?0                   420:'STREAMS_PATH'  	;16
	599 232  FETCH_DIM_R/81            $308=     16?9                 423:'stream_id'     	;0
	600 232  CONCAT/8                  #309=     #307                 $308                	;0
	601 232  CONCAT/8                  #310=     #309                 424:'_.pid'         	;0
	602 232  SEND_VAL_EX/116           ?80       #310                 ?1                  	;0
	603 232  DO_FCALL_BY_NAME/131      $311=     ?0                   ?0                  	;0
	604 232  JMPZ/43                   ?0        $311                 ?607                	;0	>>607
	605 233  NOP/0                     ?0        ?0                   ?0                  	;1
	606 233  GOTO/253                  ?0        ?151                 ?425                	;0
	607 235  INIT_FCALL_BY_NAME/59     ?0        ?0                   426:'intval'        	;1	<<604
	608 235  INIT_FCALL_BY_NAME/59     ?0        ?0                   428:'shell_exec'    	;1
	609 235  INIT_FCALL_BY_NAME/59     ?0        ?0                   430:'intval'        	;1
	610 235  FETCH_DIM_FUNC_ARG/93     $312=     16?9                 432:'stream_id'     	;1
	611 235  SEND_VAR_EX/66            ?80       $312                 ?1                  	;0
	612 235  DO_FCALL_BY_NAME/131      $313=     ?0                   ?0                  	;0
	613 235  CONCAT/8                  #314=     433:'ps aux | grep -v grep | grep \'/' $313                	;0
	614 235  CONCAT/8                  #315=     #314                 434:'_.m3u8\' | awk \'{print $2}\''	;0
	615 235  SEND_VAL_EX/116           ?80       #315                 ?1                  	;0
	616 235  DO_FCALL_BY_NAME/131      $316=     ?0                   ?0                  	;0
	617 235  SEND_VAR_NO_REF_EX/50     ?80       $316                 ?1                  	;0
	618 235  DO_FCALL_BY_NAME/131      $317=     ?0                   ?0                  	;0
	619 235  ASSIGN/38                 ?284      16?1                 $317                	;0
	620 236  NOP/0                     ?0        ?0                   ?0                  	;1
	621 236  GOTO/253                  ?0        ?149                 ?435                	;0
	622 238  FETCH_DIM_R/81            $319=     16?9                 436:'stream_id'     	;0
	623 238  CONCAT/8                  #320=     437:'Stream ID: '    $319                	;0
	624 238  CONCAT/8                  #321=     #320                 438:'
'             	;0
	625 238  ECHO/40                   ?0        #321                 ?0                  	;0
	626 239  FETCH_DIM_R/81            $323=     16?9                 439:'stream_id'     	;0
	627 239  ASSIGN_DIM/147            ?288      16?8                 ?2670194496         	;0
	628 239  OP_DATA/137               ?0        $323                 ?0                  	;0
	629 240  INIT_STATIC_METHOD_CALL/113 ?0        440:'XUI'            442:'d93AF048A0e404F2'	;2
	630 240  FETCH_DIM_FUNC_ARG/93     $324=     16?9                 444:'monitor_pid'   	;1
	631 240  SEND_VAR_EX/66            ?80       $324                 ?1                  	;0
	632 240  FETCH_DIM_FUNC_ARG/93     $325=     16?9                 445:'stream_id'     	;2
	633 240  SEND_VAR_EX/66            ?96       $325                 ?2                  	;0
	634 240  DO_FCALL/60               $326=     ?0                   ?0                  	;0
	635 240  BOOL_NOT/13               #327=     $326                 ?0                  	;0
	636 240  JMPZ_EX/46                #327=     #327                 ?640                	;0	>>640
	637 240  FETCH_DIM_R/81            $328=     16?9                 446:'on_demand'     	;0
	638 240  BOOL_NOT/13               #329=     $328                 ?0                  	;0
	639 240  BOOL/52                   #327=     #329                 ?0                  	;0
	640 240  BOOL_NOT/13               #330=     #327                 ?0                  	;0	<<636
	641 240  JMPZ/43                   ?0        #330                 ?644                	;0	>>644
	642 241  NOP/0                     ?0        ?0                   ?0                  	;1
	643 241  GOTO/253                  ?0        ?174                 ?447                	;0
	644 243  ECHO/40                   ?0        448:'Start monitor...

' ?0                  	;0	<<641
	645 244  INIT_STATIC_METHOD_CALL/113 ?0        449:'XUI'            451:'B820c3EB85EBd48c'	;1
	646 244  FETCH_DIM_FUNC_ARG/93     $331=     16?9                 453:'stream_id'     	;1
	647 244  SEND_VAR_EX/66            ?80       $331                 ?1                  	;0
	648 244  DO_FCALL/60               ?298      ?0                   ?0                  	;0
	649 245  NOP/0                     ?0        ?0                   ?0                  	;1
	650 245  GOTO/253                  ?0        ?169                 ?454                	;0
	651 247  INIT_STATIC_METHOD_CALL/113 ?0        455:'XUI'            457:'B954bD7C2BEC3c82'	;2
	652 247  SEND_VAL_EX/116           ?80       459:array (
  0 => 240,
  1 => 360,
  2 => 480,
  3 => 576,
  4 => 720,
  5 => 1080,
  6 => 1440,
  7 => 2160,
) ?1                  	;0
	653 247  SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
	654 247  DO_FCALL/60               $333=     ?0                   ?0                  	;0
	655 247  ASSIGN/38                 ?300      16?16                $333                	;0
	656 250  FETCH_DIM_R/81            $335=     16?9                 460:'pid'           	;0
	657 250  IS_NOT_EQUAL/18           #336=     $335                 16?1                	;0
	658 250  JMPZ/43                   ?0        #336                 ?661                	;0	>>661
	659 251  NOP/0                     ?0        ?0                   ?0                  	;1
	660 251  GOTO/253                  ?0        ?113                 ?461                	;0
	661 253  INIT_METHOD_CALL/112      ?0        16?3                 462:'query'         	;9	<<658
	662 253  SEND_VAL_EX/116           ?80       464:'UPDATE `streams_servers` SET `progress_info` = ?, `stream_info` = ?, `compatible` = ?, `bitrate` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ? WHERE `server_stream_id` = ?' ?1                  	;0
	663 253  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
	664 253  SEND_VAR_EX/66            ?112      16?11                ?3                  	;0
	665 253  SEND_VAR_EX/66            ?128      16?12                ?4                  	;0
	666 253  SEND_VAR_EX/66            ?144      16?13                ?5                  	;0
	667 253  SEND_VAR_EX/66            ?160      16?14                ?6                  	;0
	668 253  SEND_VAR_EX/66            ?176      16?15                ?7                  	;0
	669 253  SEND_VAR_EX/66            ?192      16?16                ?8                  	;0
	670 253  FETCH_DIM_FUNC_ARG/93     $337=     16?9                 465:'server_stream_id'	;9
	671 253  SEND_VAR_EX/66            ?208      $337                 ?9                  	;0
	672 253  DO_FCALL/60               ?304      ?0                   ?0                  	;0
	673 254  NOP/0                     ?0        ?0                   ?0                  	;1
	674 254  GOTO/253                  ?0        ?111                 ?466                	;0
	675 258  ASSIGN_DIM/147            ?305      16?9                 467:'online_clients'	;0
	676 258  OP_DATA/137               ?0        16?20                ?0                  	;0
	677 260  ASSIGN/38                 $340=     16?17                468:0               	;0
	678 260  ASSIGN/38                 ?307      16?18                $340                	;0
	679 261  NOP/0                     ?0        ?0                   ?0                  	;1
	680 261  GOTO/253                  ?0        ?456                 ?469                	;0
	681 262  JMP/42                    ?0        ?105                 ?0                  	;0	>>105
	682 262  FE_FREE/127               ?0        $76                  ?0                  	;0	<<104
	683 266  GOTO/253                  ?0        ?751                 ?470                	;0
	684 268  BIND_GLOBAL/168           ?0        16?3                 471:'b62d6460eb33ea07'	;0	<<0
	685 269  INIT_STATIC_METHOD_CALL/113 ?0        472:'XUI'            474:'aB992b2373F7Beca'	;0
	686 269  DO_FCALL/60               $342=     ?0                   ?0                  	;0
	687 269  JMPZ/43                   ?0        $342                 ?689                	;0	>>689
	688 270  GOTO/253                  ?0        ?691                 ?476                	;0
	689 272  ECHO/40                   ?0        477:'XUI not running...
' ?0                  	;0	<<687
	690 273  GOTO/253                  ?0        ?39                  ?478                	;0
	691 275  GOTO/253                  ?0        ?692                 ?479                	;0
	692 277  FETCH_STATIC_PROP_R/173   $343=     480:'rSettings'      481:'XUI'           	;0
	693 277  FETCH_DIM_R/81            $344=     $343                 483:'redis_handler' 	;0
	694 277  BOOL_NOT/13               #345=     $344                 ?0                  	;0
	695 277  JMPZ/43                   ?0        #345                 ?697                	;0	>>697
	696 278  GOTO/253                  ?0        ?699                 ?484                	;0
	697 280  INIT_STATIC_METHOD_CALL/113 ?0        485:'XUI'            487:'D6AEb3175a43F301'	;0	<<695
	698 280  DO_FCALL/60               ?312      ?0                   ?0                  	;0
	699 282  ASSIGN/38                 ?313      16?2                 489:array (
)       	;0
	700 283  ASSIGN/38                 ?314      16?8                 490:array (
)       	;0
	701 284  GOTO/253                  ?0        ?40                  ?491                	;0
	702 286  INIT_FCALL_BY_NAME/59     ?0        ?0                   492:'array_diff'    	;2
	703 286  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	704 286  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	705 286  DO_FCALL_BY_NAME/131      $349=     ?0                   ?0                  	;0
	706 286  ASSIGN/38                 ?316      16?7                 $349                	;0
	707 287  FE_RESET_R/77             $351=     16?7                 ?744                	;0
	708 287  FE_FETCH_R/78             ?0        $351                 16?26               	;744	>>744	<<743
	709 288  INIT_FCALL_BY_NAME/59     ?0        ?0                   494:'is_numeric'    	;1
	710 288  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	711 288  DO_FCALL_BY_NAME/131      $352=     ?0                   ?0                  	;0
	712 288  JMPZ/43                   ?0        $352                 ?715                	;0	>>715
	713 289  NOP/0                     ?0        ?0                   ?0                  	;1
	714 289  GOTO/253                  ?0        ?717                 ?496                	;0
	715 291  NOP/0                     ?0        ?0                   ?0                  	;1	<<712
	716 291  GOTO/253                  ?0        ?743                 ?497                	;0
	717 293  CONCAT/8                  #353=     498:'Kill Stream ID: ' 16?26               	;0
	718 293  CONCAT/8                  #354=     #353                 499:'
'             	;0
	719 293  ECHO/40                   ?0        #354                 ?0                  	;0
	720 294  INIT_FCALL_BY_NAME/59     ?0        ?0                   500:'shell_exec'    	;1
	721 294  INIT_FCALL_BY_NAME/59     ?0        ?0                   502:'intval'        	;1
	722 294  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	723 294  DO_FCALL_BY_NAME/131      $355=     ?0                   ?0                  	;0
	724 294  CONCAT/8                  #356=     504:'kill -9 `ps -ef | grep \'/' $355                	;0
	725 294  CONCAT/8                  #357=     #356                 505:'_.m3u8\\|XUI\\['	;0
	726 294  INIT_FCALL_BY_NAME/59     ?0        ?0                   506:'intval'        	;1
	727 294  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	728 294  DO_FCALL_BY_NAME/131      $358=     ?0                   ?0                  	;0
	729 294  CONCAT/8                  #359=     #357                 $358                	;0
	730 294  CONCAT/8                  #360=     #359                 508:'\\]\' | grep -v grep | awk \'{print $2}\'`;'	;0
	731 294  SEND_VAL_EX/116           ?80       #360                 ?1                  	;0
	732 294  DO_FCALL_BY_NAME/131      ?327      ?0                   ?0                  	;0
	733 295  INIT_FCALL_BY_NAME/59     ?0        ?0                   509:'shell_exec'    	;1
	734 295  FETCH_CONSTANT/99         #362=     ?0                   511:'STREAMS_PATH'  	;16
	735 295  CONCAT/8                  #363=     514:'rm -f '         #362                	;0
	736 295  INIT_FCALL_BY_NAME/59     ?0        ?0                   515:'intval'        	;1
	737 295  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	738 295  DO_FCALL_BY_NAME/131      $364=     ?0                   ?0                  	;0
	739 295  CONCAT/8                  #365=     #363                 $364                	;0
	740 295  CONCAT/8                  #366=     #365                 517:'_*'            	;0
	741 295  SEND_VAL_EX/116           ?80       #366                 ?1                  	;0
	742 295  DO_FCALL_BY_NAME/131      ?333      ?0                   ?0                  	;0
	743 296  JMP/42                    ?0        ?708                 ?0                  	;0	>>708
	744 296  FE_FREE/127               ?0        $351                 ?0                  	;0	<<707
	745 300  FETCH_STATIC_PROP_R/173   $368=     518:'rSettings'      519:'XUI'           	;0
	746 300  FETCH_DIM_R/81            $369=     $368                 521:'kill_rogue_ffmpeg'	;0
	747 300  BOOL_NOT/13               #370=     $369                 ?0                  	;0
	748 300  JMPZ/43                   ?0        #370                 ?750                	;0	>>750
	749 301  GOTO/253                  ?0        ?39                  ?522                	;0
	750 303  GOTO/253                  ?0        ?1                   ?523                	;0	<<748
	751 305  INIT_METHOD_CALL/112      ?0        16?3                 524:'query'         	;2
	752 305  SEND_VAL_EX/116           ?80       526:'SELECT `streams`.`id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`direct_source` = 1 AND `streams`.`direct_proxy` = 1 AND `streams_servers`.`server_id` = ? AND `streams_servers`.`pid` > 0;' ?1                  	;0
	753 305  FETCH_CONSTANT/99         #371=     ?0                   527:'SERVER_ID'     	;16
	754 305  SEND_VAL_EX/116           ?96       #371                 ?2                  	;0
	755 305  DO_FCALL/60               ?338      ?0                   ?0                  	;0
	756 306  INIT_METHOD_CALL/112      ?0        16?3                 530:'num_rows'      	;0
	757 306  DO_FCALL/60               $373=     ?0                   ?0                  	;0
	758 306  IS_SMALLER/19             #374=     532:0                $373                	;0
	759 306  BOOL_NOT/13               #375=     #374                 ?0                  	;0
	760 306  JMPZ/43                   ?0        #375                 ?762                	;0	>>762
	761 307  GOTO/253                  ?0        ?935                 ?533                	;0
	762 309  INIT_METHOD_CALL/112      ?0        16?3                 534:'get_rows'      	;0	<<760
	763 309  DO_FCALL/60               $376=     ?0                   ?0                  	;0
	764 309  FE_RESET_R/77             $377=     $376                 ?934                	;0
	765 309  FE_FETCH_R/78             ?0        $377                 16?9                	;934	>>934	<<933
	766 310  NOP/0                     ?0        ?0                   ?0                  	;1
	767 310  GOTO/253                  ?0        ?898                 ?536                	;0
	768 312  INIT_FCALL_BY_NAME/59     ?0        ?0                   537:'closedir'      	;1
	769 312  SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	770 312  DO_FCALL_BY_NAME/131      ?344      ?0                   ?0                  	;0
	771 315  NOP/0                     ?0        ?0                   ?0                  	;1
	772 315  GOTO/253                  ?0        ?933                 ?539                	;0
	773 317  INIT_FCALL_BY_NAME/59     ?0        ?0                   540:'unlink'        	;1
	774 317  FETCH_CONSTANT/99         #379=     ?0                   542:'CONS_TMP_PATH' 	;16
	775 317  FETCH_DIM_R/81            $380=     16?9                 545:'id'            	;0
	776 317  CONCAT/8                  #381=     #379                 $380                	;0
	777 317  CONCAT/8                  #382=     #381                 546:'/'             	;0
	778 317  CONCAT/8                  #383=     #382                 16?28               	;0
	779 317  SEND_VAL_EX/116           ?80       #383                 ?1                  	;0
	780 317  DO_FCALL_BY_NAME/131      ?350      ?0                   ?0                  	;0
	781 320  NOP/0                     ?0        ?0                   ?0                  	;1
	782 320  GOTO/253                  ?0        ?797                 ?547                	;0
	783 322  NOP/0                     ?0        ?0                   ?0                  	;1
	784 322  GOTO/253                  ?0        ?768                 ?548                	;0
	785 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   549:'opendir'       	;1
	786 324  FETCH_CONSTANT/99         #385=     ?0                   551:'CONS_TMP_PATH' 	;16
	787 324  FETCH_DIM_R/81            $386=     16?9                 554:'id'            	;0
	788 324  CONCAT/8                  #387=     #385                 $386                	;0
	789 324  CONCAT/8                  #388=     #387                 555:'/'             	;0
	790 324  SEND_VAL_EX/116           ?80       #388                 ?1                  	;0
	791 324  DO_FCALL_BY_NAME/131      $389=     ?0                   ?0                  	;0
	792 324  ASSIGN/38                 $390=     16?27                $389                	;0
	793 324  BOOL_NOT/13               #391=     $390                 ?0                  	;0
	794 324  JMPZ/43                   ?0        #391                 ?797                	;0	>>797
	795 325  NOP/0                     ?0        ?0                   ?0                  	;1
	796 325  GOTO/253                  ?0        ?771                 ?556                	;0
	797 328  INIT_FCALL_BY_NAME/59     ?0        ?0                   557:'readdir'       	;1	<<794
	798 328  SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	799 328  DO_FCALL_BY_NAME/131      $392=     ?0                   ?0                  	;0
	800 328  ASSIGN/38                 $393=     16?28                $392                	;0
	801 328  IS_NOT_IDENTICAL/16       #394=     559:false            $393                	;0
	802 328  BOOL_NOT/13               #395=     #394                 ?0                  	;0
	803 328  JMPZ/43                   ?0        #395                 ?806                	;0	>>806
	804 329  NOP/0                     ?0        ?0                   ?0                  	;1
	805 329  GOTO/253                  ?0        ?783                 ?560                	;0
	806 331  IS_NOT_EQUAL/18           #396=     16?28                561:'.'             	;0	<<803
	807 331  JMPZ_EX/46                #396=     #396                 ?810                	;0	>>810
	808 331  IS_NOT_EQUAL/18           #397=     16?28                562:'..'            	;0
	809 331  BOOL/52                   #396=     #397                 ?0                  	;0
	810 331  BOOL_NOT/13               #398=     #396                 ?0                  	;0	<<807
	811 331  JMPZ/43                   ?0        #398                 ?814                	;0	>>814
	812 332  NOP/0                     ?0        ?0                   ?0                  	;1
	813 332  GOTO/253                  ?0        ?781                 ?563                	;0
	814 334  INIT_FCALL_BY_NAME/59     ?0        ?0                   564:'in_array'      	;2	<<811
	815 334  SEND_VAR_EX/66            ?80       16?28                ?1                  	;0
	816 334  SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
	817 334  DO_FCALL_BY_NAME/131      $399=     ?0                   ?0                  	;0
	818 334  JMPZ/43                   ?0        $399                 ?821                	;0	>>821
	819 335  NOP/0                     ?0        ?0                   ?0                  	;1
	820 335  GOTO/253                  ?0        ?781                 ?566                	;0
	821 337  NOP/0                     ?0        ?0                   ?0                  	;1	<<818
	822 337  GOTO/253                  ?0        ?773                 ?567                	;0
	823 340  ASSIGN/38                 ?366      16?29                568:array (
)       	;0
	824 341  INIT_STATIC_METHOD_CALL/113 ?0        569:'XUI'            571:'e7c45286B27F999B'	;3
	825 341  FETCH_CONSTANT/99         #401=     ?0                   573:'SERVER_ID'     	;16
	826 341  SEND_VAL_EX/116           ?80       #401                 ?1                  	;0
	827 341  SEND_VAL_EX/116           ?96       576:NULL             ?2                  	;0
	828 341  FETCH_DIM_FUNC_ARG/93     $402=     16?9                 577:'id'            	;3
	829 341  SEND_VAR_EX/66            ?112      $402                 ?3                  	;0
	830 341  DO_FCALL/60               $403=     ?0                   ?0                  	;0
	831 341  ASSIGN/38                 ?370      16?22                $403                	;0
	832 342  FE_RESET_R/77             $405=     16?22                ?843                	;0
	833 342  FE_FETCH_R/78             #406=     $405                 16?30               	;843	>>843	<<842
	834 342  ASSIGN/38                 ?373      16?31                #406                	;0
	835 343  FE_RESET_R/77             $408=     16?30                ?841                	;0
	836 343  FE_FETCH_R/78             ?0        $408                 16?32               	;841	>>841	<<840
	837 344  FETCH_DIM_R/81            $410=     16?32                578:'uuid'          	;0
	838 344  ASSIGN_DIM/147            ?375      16?29                ?0                  	;0
	839 344  OP_DATA/137               ?0        $410                 ?0                  	;0
	840 345  JMP/42                    ?0        ?836                 ?0                  	;0	>>836
	841 345  FE_FREE/127               ?0        $408                 ?0                  	;0	<<835
	842 348  JMP/42                    ?0        ?833                 ?0                  	;0	>>833
	843 348  FE_FREE/127               ?0        $405                 ?0                  	;0	<<832
	844 351  NOP/0                     ?0        ?0                   ?0                  	;1
	845 351  GOTO/253                  ?0        ?785                 ?579                	;0
	846 355  FETCH_DIM_R/81            $411=     16?9                 580:'id'            	;0
	847 355  CONCAT/8                  #412=     581:'Stream ID: '    $411                	;0
	848 355  CONCAT/8                  #413=     #412                 582:'
'             	;0
	849 355  ECHO/40                   ?0        #413                 ?0                  	;0
	850 356  ECHO/40                   ?0        583:'Update Stream Information...
' ?0                  	;0
	851 357  INIT_METHOD_CALL/112      ?0        16?3                 584:'query'         	;9
	852 357  SEND_VAL_EX/116           ?80       586:'UPDATE `streams_servers` SET `bitrate` = ?, `stream_info` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ?, `compatible` = ? WHERE `stream_id` = ? AND `server_id` = ?' ?1                  	;0
	853 357  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
	854 357  INIT_FCALL_BY_NAME/59     ?0        ?0                   587:'json_encode'   	;1
	855 357  SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
	856 357  DO_FCALL_BY_NAME/131      $414=     ?0                   ?0                  	;0
	857 357  SEND_VAR_NO_REF_EX/50     ?112      $414                 ?3                  	;0
	858 357  SEND_VAR_EX/66            ?128      16?14                ?4                  	;0
	859 357  SEND_VAR_EX/66            ?144      16?15                ?5                  	;0
	860 357  SEND_VAR_EX/66            ?160      16?16                ?6                  	;0
	861 357  SEND_VAR_EX/66            ?176      16?12                ?7                  	;0
	862 357  FETCH_DIM_FUNC_ARG/93     $415=     16?9                 589:'id'            	;8
	863 357  SEND_VAR_EX/66            ?192      $415                 ?8                  	;0
	864 357  FETCH_CONSTANT/99         #416=     ?0                   590:'SERVER_ID'     	;16
	865 357  SEND_VAL_EX/116           ?208      #416                 ?9                  	;0
	866 357  DO_FCALL/60               ?383      ?0                   ?0                  	;0
	867 358  NOP/0                     ?0        ?0                   ?0                  	;1
	868 358  GOTO/253                  ?0        ?823                 ?593                	;0
	869 360  FETCH_DIM_R/81            $418=     16?33                594:'codecs'        	;0
	870 360  FETCH_DIM_R/81            $419=     $418                 595:'audio'         	;0
	871 360  FETCH_DIM_R/81            $420=     $419                 596:'codec_name'    	;0
	872 360  JMP_SET/152               #421=     $420                 ?874                	;0
	873 360  QM_ASSIGN/22              #421=     597:NULL             ?0                  	;0
	874 360  ASSIGN/38                 ?388      16?14                #421                	;0
	875 361  FETCH_DIM_R/81            $423=     16?33                598:'codecs'        	;0
	876 361  FETCH_DIM_R/81            $424=     $423                 599:'video'         	;0
	877 361  FETCH_DIM_R/81            $425=     $424                 600:'codec_name'    	;0
	878 361  JMP_SET/152               #426=     $425                 ?880                	;0
	879 361  QM_ASSIGN/22              #426=     601:NULL             ?0                  	;0
	880 361  ASSIGN/38                 ?393      16?15                #426                	;0
	881 362  FETCH_DIM_R/81            $428=     16?33                602:'codecs'        	;0
	882 362  FETCH_DIM_R/81            $429=     $428                 603:'video'         	;0
	883 362  FETCH_DIM_R/81            $430=     $429                 604:'height'        	;0
	884 362  JMP_SET/152               #431=     $430                 ?886                	;0
	885 362  QM_ASSIGN/22              #431=     605:NULL             ?0                  	;0
	886 362  ASSIGN/38                 ?398      16?16                #431                	;0
	887 363  BOOL_NOT/13               #433=     16?16                ?0                  	;0
	888 363  JMPZ/43                   ?0        #433                 ?891                	;0	>>891
	889 364  NOP/0                     ?0        ?0                   ?0                  	;1
	890 364  GOTO/253                  ?0        ?846                 ?606                	;0
	891 366  INIT_STATIC_METHOD_CALL/113 ?0        607:'XUI'            609:'B954BD7C2bEC3C82'	;2	<<888
	892 366  SEND_VAL_EX/116           ?80       611:array (
  0 => 240,
  1 => 360,
  2 => 480,
  3 => 576,
  4 => 720,
  5 => 1080,
  6 => 1440,
  7 => 2160,
) ?1                  	;0
	893 366  SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
	894 366  DO_FCALL/60               $434=     ?0                   ?0                  	;0
	895 366  ASSIGN/38                 ?401      16?16                $434                	;0
	896 367  NOP/0                     ?0        ?0                   ?0                  	;1
	897 367  GOTO/253                  ?0        ?846                 ?612                	;0
	898 369  INIT_FCALL_BY_NAME/59     ?0        ?0                   613:'file_exists'   	;1
	899 369  FETCH_CONSTANT/99         #436=     ?0                   615:'STREAMS_PATH'  	;16
	900 369  FETCH_DIM_R/81            $437=     16?9                 618:'id'            	;0
	901 369  CONCAT/8                  #438=     #436                 $437                	;0
	902 369  CONCAT/8                  #439=     #438                 619:'.analyse'      	;0
	903 369  SEND_VAL_EX/116           ?80       #439                 ?1                  	;0
	904 369  DO_FCALL_BY_NAME/131      $440=     ?0                   ?0                  	;0
	905 369  BOOL_NOT/13               #441=     $440                 ?0                  	;0
	906 369  JMPZ/43                   ?0        #441                 ?909                	;0	>>909
	907 370  NOP/0                     ?0        ?0                   ?0                  	;1
	908 370  GOTO/253                  ?0        ?823                 ?620                	;0
	909 372  INIT_STATIC_METHOD_CALL/113 ?0        621:'XUI'            623:'E57006536cd5655d'	;1	<<906
	910 372  FETCH_CONSTANT/99         #442=     ?0                   625:'STREAMS_PATH'  	;16
	911 372  FETCH_DIM_R/81            $443=     16?9                 628:'id'            	;0
	912 372  CONCAT/8                  #444=     #442                 $443                	;0
	913 372  CONCAT/8                  #445=     #444                 629:'.analyse'      	;0
	914 372  SEND_VAL_EX/116           ?80       #445                 ?1                  	;0
	915 372  DO_FCALL/60               $446=     ?0                   ?0                  	;0
	916 372  ASSIGN/38                 ?413      16?33                $446                	;0
	917 373  BOOL_NOT/13               #448=     16?33                ?0                  	;0
	918 373  JMPZ/43                   ?0        #448                 ?921                	;0	>>921
	919 374  NOP/0                     ?0        ?0                   ?0                  	;1
	920 374  GOTO/253                  ?0        ?846                 ?630                	;0
	921 376  FETCH_DIM_R/81            $449=     16?33                631:'bitrate'       	;0	<<918
	922 376  DIV/4                     #450=     $449                 632:1024            	;0
	923 376  ASSIGN/38                 ?417      16?13                #450                	;0
	924 377  INIT_FCALL_BY_NAME/59     ?0        ?0                   633:'intval'        	;1
	925 377  INIT_STATIC_METHOD_CALL/113 ?0        635:'XUI'            637:'d00C33c8075D14a5'	;1
	926 377  SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
	927 377  DO_FCALL/60               $452=     ?0                   ?0                  	;0
	928 377  SEND_VAR_NO_REF_EX/50     ?80       $452                 ?1                  	;0
	929 377  DO_FCALL_BY_NAME/131      $453=     ?0                   ?0                  	;0
	930 377  ASSIGN/38                 ?420      16?12                $453                	;0
	931 378  NOP/0                     ?0        ?0                   ?0                  	;1
	932 378  GOTO/253                  ?0        ?869                 ?639                	;0
	933 379  JMP/42                    ?0        ?765                 ?0                  	;0	>>765
	934 379  FE_FREE/127               ?0        $377                 ?0                  	;0	<<764
	935 383  GOTO/253                  ?0        ?64                  ?640                	;0
	936 385  NOP/0                     ?0        641:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   391  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   391  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   392  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   392  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   392  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   392  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   392  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   393  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   395  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   395  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  397  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  397  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  397  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  397  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  397  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  398  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?28                  ?0                  	;0	>>28
1   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'register_shutdown_function'	;1
2   6    SEND_VAL_EX/116           ?80       3:'shutdown'         ?1                  	;0
3   6    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
4   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'str_replace'     	;3
5   7    SEND_VAL_EX/116           ?80       6:'\\'               ?1                  	;0
6   7    SEND_VAL_EX/116           ?96       7:'/'                ?2                  	;0
7   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'dirname'         	;1
8   7    FETCH_DIM_FUNC_ARG/93     $3=       16?0                 10:0                	;1
9   7    SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
10  7    DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
11  7    SEND_VAR_NO_REF_EX/50     ?112      $4                   ?3                  	;0
12  7    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
13  7    CONCAT/8                  #6=       $5                   11:'/../www/init.php'	;0
14  7    INCLUDE_OR_EVAL/73        ?5        #6                   ?0                  	;8
15  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'cli_set_process_title'	;1
16  8    SEND_VAL_EX/116           ?80       14:'XUI[Live Checker]' ?1                  	;0
17  8    DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
18  9    FETCH_CONSTANT/99         #9=       ?0                   15:'CRONS_TMP_PATH' 	;16
19  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'md5'            	;1
20  9    INIT_STATIC_METHOD_CALL/113 ?0        20:'XUI'             22:'a336b0dAD3eaF634'	;0
21  9    DO_FCALL/60               $10=      ?0                   ?0                  	;0
22  9    CONCAT/8                  #11=      $10                  24:'crons\\streams.php'	;0
23  9    SEND_VAL_EX/116           ?80       #11                  ?1                  	;0
24  9    DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
25  9    CONCAT/8                  #13=      #9                   $12                 	;0
26  9    ASSIGN/38                 ?12       16?1                 #13                 	;0
27  10   GOTO/253                  ?0        ?46                  ?25                 	;0
28  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'posix_getpwuid' 	;1	<<0
29  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'posix_geteuid'  	;0
30  12   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
31  12   SEND_VAR_NO_REF_EX/50     ?80       $15                  ?1                  	;0
32  12   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
33  12   FETCH_DIM_R/81            $17=      $16                  30:'name'           	;0
34  12   IS_NOT_EQUAL/18           #18=      $17                  31:'xui'            	;0
35  12   BOOL_NOT/13               #19=      #18                  ?0                  	;0
36  12   JMPZ/43                   ?0        #19                  ?38                 	;0	>>38
37  13   GOTO/253                  ?0        ?39                  ?32                 	;0
38  15   EXIT/79                   ?0        33:'Please run as XUI!
' ?0                  	;0	<<36
39  17   BEGIN_SILENCE/57          #20=      ?0                   ?0                  	;0
40  17   FETCH_R/80                $21=      34:'argc'            ?0                  	;268435456
41  17   END_SILENCE/58            ?0        #20                  ?0                  	;0
42  17   JMPZ/43                   ?0        $21                  ?44                 	;0	>>44
43  18   GOTO/253                  ?0        ?1                   ?35                 	;0
44  20   EXIT/79                   ?0        36:0                 ?0                  	;0	<<42
45  21   GOTO/253                  ?0        ?1                   ?37                 	;0
46  23   INIT_STATIC_METHOD_CALL/113 ?0        38:'XUI'             40:'a3CF732c257BD804'	;1
47  23   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
48  23   DO_FCALL/60               ?20       ?0                   ?0                  	;0
49  25   NOP/0                     ?0        ?0                   ?0                  	;0
50  386  INIT_FCALL/61             ?0        ?7360                42:'ab8369074df2aaa3'	;0
51  386  DO_FCALL/60               ?21       ?0                   ?0                  	;0
52  387  GOTO/253                  ?0        ?53                  ?43                 	;0
53  389  NOP/0                     ?0        ?0                   ?0                  	;0
54  399  NOP/0                     ?0        44:1                 ?0                  	;4294967295
*/

?>