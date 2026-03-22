<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?213                 ?0                  	;0	>>213
1   5    FETCH_DIM_R/81            $6=       16?0                 1:'from'            	;0
2   5    ECHO/40                   ?0        $6                   ?0                  	;0
3   6    ECHO/40                   ?0        2:'">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control text-center date" id="range_clear_to" name="range_clear_to" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="' ?0                  	;0
4   7    FETCH_DIM_R/81            $7=       16?0                 3:'to'              	;0
5   7    ECHO/40                   ?0        $7                   ?0                  	;0
6   8    ECHO/40                   ?0        4:'">
                    </div>
                </div>
                <div class="text-center">
                    <input id="clear_logs" type="submit" class="btn btn-primary" value="' ?0                  	;0
7   9    FETCH_DIM_R/81            $8=       16?0                 5:'clear'           	;0
8   9    ECHO/40                   ?0        $8                   ?0                  	;0
9   10   GOTO/253                  ?0        ?269                 ?6                  	;0
10  12   ECHO/40                   ?0        7:'disabled'         ?0                  	;0
11  14   ECHO/40                   ?0        8:' />
                    </div>
                    <div class="col-md-3">
                        <input id="update_server" type="submit" class="btn btn-light" value="Update Server" style="width:100%" ' ?0                  	;0
12  15   JMPNZ_EX/47               #9=       16?1                 ?14                 	;0	>>14
13  15   BOOL/52                   #9=       16?2                 ?0                  	;0
14  15   BOOL_NOT/13               #10=      #9                   ?0                  	;0	<<12
15  15   JMPZ/43                   ?0        #10                  ?17                 	;0	>>17
16  16   GOTO/253                  ?0        ?252                 ?9                  	;0
17  18   ECHO/40                   ?0        10:'disabled'        ?0                  	;0	<<15
18  19   GOTO/253                  ?0        ?252                 ?11                 	;0
19  23   ECHO/40                   ?0        12:'                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-xuiepg-modal-center" tabindex="-1" role="dialog" aria-labelledby="epgBrowserLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="epgBrowserLabel">XUI EPG Browser</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table id="datatable-epg-api" class="table table-striped table-borderless dt-responsive">
                    <thead>
                        <tr>
                            <th class="text-center">Icon</th>
                            <th class="text-center">Call Sign</th>
                            <th>Name</th>
                            <th class="text-center">Language</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-provider-streams-modal-center" tabindex="-1" role="dialog" aria-labelledby="providerStreamsLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="providerStreamsLabel">Provider Streams</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table id="datatable-provider-streams" class="table table-striped table-borderless dt-responsive">
                    <thead>
                        <tr>
                            <th class="text-center">Icon</th>
                            <th>Stream Name</th>
                            <th>Provider</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-provider-movies-modal-center" tabindex="-1" role="dialog" aria-labelledby="providerMoviesLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="providerMoviesLabel">Provider Movies</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table id="datatable-provider-movies" class="table table-striped table-borderless dt-responsive">
                    <thead>
                        <tr>
                            <th>Stream Name</th>
                            <th>Provider</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-picon-modal-center" tabindex="-1" role="dialog" aria-labelledby="epgPiconLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-center modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="epgPiconLabel">Use the EPG icon for this stream?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body text-center">
                <img id="epg-picon" src="" class="img-thumbnail" style="max-width: 400px; max-height: 250px;"><br/><br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success waves-effect waves-light" id="epg_picon_save">Use Icon</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade creditsModal" role="dialog" aria-labelledby="creditsLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="creditsModal">Add / Remove Credits</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-8 col-form-label" for="credits">Credits</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control text-center" id="credits" onkeypress="return isNumberKey(event)" name="credits" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="credits_reason" name="credits_reason" placeholder="Reason for Adjustment..." value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <button class="btn btn-info waves-effect waves-light" style="width:100%;" type="button" onClick="submitCredits();">Adjust Credits</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-programme" tabindex="-1" role="dialog" aria-labelledby="programmeLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span id="programmeLabel"></span> &nbsp;<small><span id="programmeStart"></span></small></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p class="sub-header" id="programmeDescription"></p>
                <button type="button" id="programmeRecord" class="btn btn-danger waves-effect"><i class="mdi mdi-record"></i> Record</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade fingerprintModal" role="dialog" aria-labelledby="fingerprintLabel" aria-hidden="true" style="display: none;" data-id="" data-type="">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="fingerprintModal">Fingerprint</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
					<label class="col-md-1 col-2 col-form-label text-center" for="mod_fingerprint_type">' ?0                  	;0
20  24   FETCH_DIM_R/81            $11=      16?0                 13:'type'           	;0
21  24   ECHO/40                   ?0        $11                  ?0                  	;0
22  25   ECHO/40                   ?0        14:'</label>
					<div class="col-md-2 col-6">
						<select id="mod_fingerprint_type" class="form-control text-center" data-toggle="select2">
							<option value="1">' ?0                  	;0
23  26   GOTO/253                  ?0        ?189                 ?15                 	;0
24  28   ECHO/40                   ?0        16:'</td>
                            </tr>
                            ' ?0                  	;0
25  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'strlen'         	;1
26  30   FETCH_CONSTANT/99         #12=      ?0                   19:'SERVER_ID'      	;16
27  30   FETCH_DIM_FUNC_ARG/93     $13=      16?3                 #12                 	;1
28  30   FETCH_DIM_FUNC_ARG/93     $14=      $13                  22:'domain_name'    	;1
29  30   SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
30  30   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
31  30   IS_SMALLER/19             #16=      23:0                 $15                 	;0
32  30   BOOL_NOT/13               #17=      #16                  ?0                  	;0
33  30   JMPZ/43                   ?0        #17                  ?35                 	;0	>>35
34  31   GOTO/253                  ?0        ?158                 ?24                 	;0
35  33   ECHO/40                   ?0        25:'                            <tr>
                                <td>Server Domain</td>
                                <td>' ?0                  	;0	<<33
36  34   FETCH_CONSTANT/99         #18=      ?0                   26:'SERVER_ID'      	;16
37  34   FETCH_DIM_R/81            $19=      16?3                 #18                 	;0
38  34   FETCH_DIM_R/81            $20=      $19                  29:'domain_name'    	;0
39  34   ECHO/40                   ?0        $20                  ?0                  	;0
40  35   GOTO/253                  ?0        ?157                 ?30                 	;0
41  37   FETCH_DIM_R/81            $21=      16?0                 31:'multiple_episodes'	;0
42  37   ECHO/40                   ?0        $21                  ?0                  	;0
43  38   ECHO/40                   ?0        32:'</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade downloadModal" role="dialog" aria-labelledby="downloadLabel" aria-hidden="true" style="display: none;" data-username="" data-password="">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="downloadModal">Download Playlist</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="download_type">Format</label>
                    <div class="col-8">
                        <select id="download_type" class="form-control" data-toggle="select2">
                            ' ?0                  	;0
44  39   INIT_METHOD_CALL/112      ?0        16?4                 33:'query'          	;1
45  39   SEND_VAL_EX/116           ?80       35:'SELECT * FROM `output_devices` ORDER BY `device_id` ASC;' ?1                  	;0
46  39   DO_FCALL/60               ?16       ?0                   ?0                  	;0
47  40   INIT_METHOD_CALL/112      ?0        16?4                 36:'get_rows'       	;0
48  40   DO_FCALL/60               $23=      ?0                   ?0                  	;0
49  40   FE_RESET_R/77             $24=      $23                  ?126                	;0
50  40   FE_FETCH_R/78             ?0        $24                  16?5                	;126	>>126	<<125
51  41   FETCH_DIM_R/81            $25=      16?5                 38:'copy_text'      	;0
52  41   JMPZ/43                   ?0        $25                  ?55                 	;0	>>55
53  42   NOP/0                     ?0        ?0                   ?0                  	;1
54  42   GOTO/253                  ?0        ?79                  ?39                 	;0
55  44   FETCH_DIM_R/81            $26=      16?5                 40:'device_name'    	;0	<<52
56  44   CONCAT/8                  #27=      41:'<optgroup label="' $26                 	;0
57  44   CONCAT/8                  #28=      #27                  42:'"><option value="'	;0
58  44   FETCH_DIM_R/81            $29=      16?5                 43:'device_key'     	;0
59  44   CONCAT/8                  #30=      #28                  $29                 	;0
60  44   CONCAT/8                  #31=      #30                  44:'?output=hls">'  	;0
61  44   FETCH_DIM_R/81            $32=      16?5                 45:'device_name'    	;0
62  44   CONCAT/8                  #33=      #31                  $32                 	;0
63  44   CONCAT/8                  #34=      #33                  46:' - HLS </option><option value="'	;0
64  44   FETCH_DIM_R/81            $35=      16?5                 47:'device_key'     	;0
65  44   CONCAT/8                  #36=      #34                  $35                 	;0
66  44   CONCAT/8                  #37=      #36                  48:'">'             	;0
67  44   FETCH_DIM_R/81            $38=      16?5                 49:'device_name'    	;0
68  44   CONCAT/8                  #39=      #37                  $38                 	;0
69  44   CONCAT/8                  #40=      #39                  50:' - MPEGTS</option><option value="'	;0
70  44   FETCH_DIM_R/81            $41=      16?5                 51:'device_key'     	;0
71  44   CONCAT/8                  #42=      #40                  $41                 	;0
72  44   CONCAT/8                  #43=      #42                  52:'?output=rtmp">' 	;0
73  44   FETCH_DIM_R/81            $44=      16?5                 53:'device_name'    	;0
74  44   CONCAT/8                  #45=      #43                  $44                 	;0
75  44   CONCAT/8                  #46=      #45                  54:' - RTMP</option></optgroup>'	;0
76  44   ECHO/40                   ?0        #46                  ?0                  	;0
77  45   NOP/0                     ?0        ?0                   ?0                  	;1
78  45   GOTO/253                  ?0        ?125                 ?55                 	;0
79  47   FETCH_DIM_R/81            $47=      16?5                 56:'device_name'    	;0
80  47   CONCAT/8                  #48=      57:'<optgroup label="' $47                 	;0
81  47   CONCAT/8                  #49=      #48                  58:'"><option data-text="'	;0
82  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'str_replace'    	;3
83  47   SEND_VAL_EX/116           ?80       61:'"'               ?1                  	;0
84  47   SEND_VAL_EX/116           ?96       62:'\\"'             ?2                  	;0
85  47   FETCH_DIM_FUNC_ARG/93     $50=      16?5                 63:'copy_text'      	;3
86  47   SEND_VAR_EX/66            ?112      $50                  ?3                  	;0
87  47   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
88  47   CONCAT/8                  #52=      #49                  $51                 	;0
89  47   CONCAT/8                  #53=      #52                  64:'" value="'      	;0
90  47   FETCH_DIM_R/81            $54=      16?5                 65:'device_key'     	;0
91  47   CONCAT/8                  #55=      #53                  $54                 	;0
92  47   CONCAT/8                  #56=      #55                  66:'?output=hls">'  	;0
93  47   FETCH_DIM_R/81            $57=      16?5                 67:'device_name'    	;0
94  47   CONCAT/8                  #58=      #56                  $57                 	;0
95  47   CONCAT/8                  #59=      #58                  68:' - HLS </option><option data-text="'	;0
96  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'str_replace'    	;3
97  47   SEND_VAL_EX/116           ?80       71:'"'               ?1                  	;0
98  47   SEND_VAL_EX/116           ?96       72:'\\"'             ?2                  	;0
99  47   FETCH_DIM_FUNC_ARG/93     $60=      16?5                 73:'copy_text'      	;3
100 47   SEND_VAR_EX/66            ?112      $60                  ?3                  	;0
101 47   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
102 47   CONCAT/8                  #62=      #59                  $61                 	;0
103 47   CONCAT/8                  #63=      #62                  74:'" value="'      	;0
104 47   FETCH_DIM_R/81            $64=      16?5                 75:'device_key'     	;0
105 47   CONCAT/8                  #65=      #63                  $64                 	;0
106 47   CONCAT/8                  #66=      #65                  76:'">'             	;0
107 47   FETCH_DIM_R/81            $67=      16?5                 77:'device_name'    	;0
108 47   CONCAT/8                  #68=      #66                  $67                 	;0
109 47   CONCAT/8                  #69=      #68                  78:' - MPEGTS</option><option data-text="'	;0
110 47   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'str_replace'    	;3
111 47   SEND_VAL_EX/116           ?80       81:'"'               ?1                  	;0
112 47   SEND_VAL_EX/116           ?96       82:'\\"'             ?2                  	;0
113 47   FETCH_DIM_FUNC_ARG/93     $70=      16?5                 83:'copy_text'      	;3
114 47   SEND_VAR_EX/66            ?112      $70                  ?3                  	;0
115 47   DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
116 47   CONCAT/8                  #72=      #69                  $71                 	;0
117 47   CONCAT/8                  #73=      #72                  84:'" value="'      	;0
118 47   FETCH_DIM_R/81            $74=      16?5                 85:'device_key'     	;0
119 47   CONCAT/8                  #75=      #73                  $74                 	;0
120 47   CONCAT/8                  #76=      #75                  86:'?output=rtmp">' 	;0
121 47   FETCH_DIM_R/81            $77=      16?5                 87:'device_name'    	;0
122 47   CONCAT/8                  #78=      #76                  $77                 	;0
123 47   CONCAT/8                  #79=      #78                  88:' - RTMP</option></optgroup>'	;0
124 47   ECHO/40                   ?0        #79                  ?0                  	;0
125 49   JMP/42                    ?0        ?50                  ?0                  	;0	>>50
126 49   FE_FREE/127               ?0        $24                  ?0                  	;0	<<49
127 52   GOTO/253                  ?0        ?128                 ?89                 	;0
128 54   ECHO/40                   ?0        90:'                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="output_type">Limit Output</label>
                    <div class="col-8">
                        <select id="output_type" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                            <option value="live">Live Streams</option>
                            <option value="movie">Movies</option>
                            <option value="created_live">Created Channels</option>
                            <option value="radio_streams">Radio Stations</option>
                            <option value="series">TV Series</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" id="download_url" value="">
                            <div class="input-group-append">
                                <button class="btn btn-warning waves-effect waves-light" type="button" onClick="copyDownload();"><i class="mdi mdi-content-copy"></i></button>
                                <button class="btn btn-info waves-effect waves-light" type="button" onClick="doDownload();" id="download_button" disabled><i class="mdi mdi-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade messageModal" role="dialog" aria-labelledby="messageModal" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="messageModal">' ?0                  	;0
129 55   FETCH_DIM_R/81            $80=      16?0                 91:'mag_event'      	;0
130 55   ECHO/40                   ?0        $80                  ?0                  	;0
131 56   ECHO/40                   ?0        92:'</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <select id="message_type" class="form-control" data-toggle="select2" >
                        <option value="" selected>' ?0                  	;0
132 57   FETCH_DIM_R/81            $81=      16?0                 93:'select_an_event'	;0
133 57   ECHO/40                   ?0        $81                  ?0                  	;0
134 58   ECHO/40                   ?0        94:':</option>
                        <optgroup label="">
                            <option value="play_channel">' ?0                  	;0
135 59   GOTO/253                  ?0        ?198                 ?95                 	;0
136 61   JMPNZ_EX/47               #82=      16?1                 ?138                	;0	>>138
137 61   BOOL/52                   #82=      16?2                 ?0                  	;0
138 61   BOOL_NOT/13               #83=      #82                  ?0                  	;0	<<136
139 61   JMPZ/43                   ?0        #83                  ?141                	;0	>>141
140 62   GOTO/253                  ?0        ?142                 ?96                 	;0
141 64   ECHO/40                   ?0        97:'disabled'        ?0                  	;0	<<139
142 66   ECHO/40                   ?0        98:' />
                    </div>
                    <div class="col-md-2">
                        <input id="restart_services_ssh" type="submit" class="btn btn-light" value="Restart Services" style="width:100%" />
                    </div>
                    <div class="col-md-2">
                        <input id="reboot_server_ssh" type="submit" class="btn btn-light" value="Reboot Server" style="width:100%" />
                    </div>
                    <div class="col-md-2">
                        <input id="update_binaries" type="submit" class="btn btn-light" value="Update Binaries" style="width:100%" ' ?0                  	;0
143 67   JMPNZ_EX/47               #84=      16?1                 ?145                	;0	>>145
144 67   BOOL/52                   #84=      16?2                 ?0                  	;0
145 67   BOOL_NOT/13               #85=      #84                  ?0                  	;0	<<143
146 67   JMPZ/43                   ?0        #85                  ?148                	;0	>>148
147 68   GOTO/253                  ?0        ?11                  ?99                 	;0
148 70   GOTO/253                  ?0        ?10                  ?100                	;0	<<146
149 72   ECHO/40                   ?0        101:'</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-whois-modal-center" tabindex="-1" role="dialog" aria-labelledby="whoisLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="whoisLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table class="table mb-0" id="whois-table">
                    <tbody>
                        <tr>
                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">GEOLOCATION</th>
                        </tr>
                        <tr>
                            <th scope="row">Continent</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Country</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">City</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Postcode</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Lat Lng</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">ISP</th>
                        </tr>
                        <tr>
                            <th scope="row">ISP Name</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Organisation</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">AS Number</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Type</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">LOCALE</th>
                        </tr>
                        <tr>
                            <th scope="row">Timezone</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Local Time</th>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-logs-modal-center" tabindex="-1" role="dialog" aria-labelledby="clearLogsLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="clearLogsLabel">' ?0                  	;0
150 73   FETCH_DIM_R/81            $86=      16?0                 102:'clear_logs'    	;0
151 73   ECHO/40                   ?0        $86                  ?0                  	;0
152 74   ECHO/40                   ?0        103:'</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="form-group row mb-4">
                    <label class="col-md-4 col-form-label" for="range_clear">' ?0                  	;0
153 75   FETCH_DIM_R/81            $87=      16?0                 104:'date_range'    	;0
154 75   ECHO/40                   ?0        $87                  ?0                  	;0
155 76   ECHO/40                   ?0        105:'</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control text-center date" id="range_clear_from" name="range_clear_from" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="' ?0                  	;0
156 77   GOTO/253                  ?0        ?1                   ?106                	;0
157 79   ECHO/40                   ?0        107:'</td>
                            </tr>
                            ' ?0                  	;0
158 81   INIT_METHOD_CALL/112      ?0        16?4                 108:'query'         	;1
159 81   SEND_VAL_EX/116           ?80       110:'SELECT `username`, `reseller_dns` FROM `users` WHERE `reseller_dns` <> \'\' ORDER BY `username` ASC;' ?1                  	;0
160 81   DO_FCALL/60               ?82       ?0                   ?0                  	;0
161 82   INIT_METHOD_CALL/112      ?0        16?4                 111:'num_rows'      	;0
162 82   DO_FCALL/60               $89=      ?0                   ?0                  	;0
163 82   IS_SMALLER/19             #90=      113:0                $89                 	;0
164 82   BOOL_NOT/13               #91=      #90                  ?0                  	;0
165 82   JMPZ/43                   ?0        #91                  ?167                	;0	>>167
166 83   GOTO/253                  ?0        ?19                  ?114                	;0
167 85   INIT_METHOD_CALL/112      ?0        16?4                 115:'get_rows'      	;0	<<165
168 85   DO_FCALL/60               $92=      ?0                   ?0                  	;0
169 85   FE_RESET_R/77             $93=      $92                  ?179                	;0
170 85   FE_FETCH_R/78             ?0        $93                  16?5                	;179	>>179	<<178
171 86   ECHO/40                   ?0        117:'                            <tr>
                                <td>' ?0                  	;0
172 87   FETCH_DIM_R/81            $94=      16?5                 118:'username'      	;0
173 87   ECHO/40                   ?0        $94                  ?0                  	;0
174 88   ECHO/40                   ?0        119:'</td>
                                <td>' ?0                  	;0
175 89   FETCH_DIM_R/81            $95=      16?5                 120:'reseller_dns'  	;0
176 89   ECHO/40                   ?0        $95                  ?0                  	;0
177 90   ECHO/40                   ?0        121:'</td>
                            </tr>
                            ' ?0                  	;0
178 91   JMP/42                    ?0        ?170                 ?0                  	;0	>>170
179 91   FE_FREE/127               ?0        $93                  ?0                  	;0	<<169
180 93   GOTO/253                  ?0        ?19                  ?122                	;0
181 95   ECHO/40                   ?0        123:'</option>
                            <option value="send_msg">' ?0                  	;0
182 96   FETCH_DIM_R/81            $96=      16?0                 124:'send_message'  	;0
183 96   ECHO/40                   ?0        $96                  ?0                  	;0
184 97   ECHO/40                   ?0        125:'</option>
                            <option value="cut_off">' ?0                  	;0
185 98   FETCH_DIM_R/81            $97=      16?0                 126:'close_portal'  	;0
186 98   ECHO/40                   ?0        $97                  ?0                  	;0
187 99   ECHO/40                   ?0        127:'</option>
                            <option value="reset_stb_lock">' ?0                  	;0
188 100  GOTO/253                  ?0        ?235                 ?128                	;0
189 102  FETCH_DIM_R/81            $98=      16?0                 129:'activity_id'   	;0
190 102  ECHO/40                   ?0        $98                  ?0                  	;0
191 103  ECHO/40                   ?0        130:'</option>
							<option value="2">' ?0                  	;0
192 104  FETCH_DIM_R/81            $99=      16?0                 131:'username'      	;0
193 104  ECHO/40                   ?0        $99                  ?0                  	;0
194 105  ECHO/40                   ?0        132:'</option>
							<option value="3">' ?0                  	;0
195 106  FETCH_DIM_R/81            $100=     16?0                 133:'message'       	;0
196 106  ECHO/40                   ?0        $100                 ?0                  	;0
197 107  GOTO/253                  ?0        ?244                 ?134                	;0
198 109  FETCH_DIM_R/81            $101=     16?0                 135:'play_channel'  	;0
199 109  ECHO/40                   ?0        $101                 ?0                  	;0
200 110  ECHO/40                   ?0        136:'</option>
                            <option value="reload_portal">' ?0                  	;0
201 111  FETCH_DIM_R/81            $102=     16?0                 137:'reload_portal' 	;0
202 111  ECHO/40                   ?0        $102                 ?0                  	;0
203 112  ECHO/40                   ?0        138:'</option>
                            <option value="reboot">' ?0                  	;0
204 113  FETCH_DIM_R/81            $103=     16?0                 139:'reboot_device' 	;0
205 113  ECHO/40                   ?0        $103                 ?0                  	;0
206 114  GOTO/253                  ?0        ?181                 ?140                	;0
207 116  FETCH_DIM_R/81            $104=     16?0                 141:'position'      	;0
208 116  ECHO/40                   ?0        $104                 ?0                  	;0
209 117  ECHO/40                   ?0        142:'</label>
					<div class="col-md-1 col-2">
						<input type="text" class="form-control text-center" id="mod_position_x" value="10" placeholder="X">
					</div>
					<div class="col-md-1 col-2">
						<input type="text" class="form-control text-center" id="mod_position_y" value="10" placeholder="Y">
					</div>
					<div class="col-md-1 col-2">
						<button type="button" class="btn btn-info waves-effect waves-light" onClick="setModalFingerprint()">
							<i class="mdi mdi-fingerprint"></i>
						</button>
					</div>
					<div class="col-md-12 col-2" style="margin-top:10px;display:none;" id="mod_custom_message_div">
						<input type="text" class="form-control" id="mod_custom_message" value="" placeholder="' ?0                  	;0
210 118  FETCH_DIM_R/81            $105=     16?0                 143:'custom_message'	;0
211 118  ECHO/40                   ?0        $105                 ?0                  	;0
212 119  GOTO/253                  ?0        ?277                 ?144                	;0
213 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'count'         	;1	<<0
214 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'get_included_files'	;0
215 121  DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
216 121  SEND_VAR_NO_REF_EX/50     ?80       $106                 ?1                  	;0
217 121  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
218 121  IS_EQUAL/17               #108=     $107                 149:1               	;0
219 121  BOOL_NOT/13               #109=     #108                 ?0                  	;0
220 121  JMPZ/43                   ?0        #109                 ?222                	;0	>>222
221 122  GOTO/253                  ?0        ?223                 ?150                	;0
222 124  EXIT/79                   ?0        ?0                   ?0                  	;0	<<220
223 126  ECHO/40                   ?0        151:'<div class="modal fade bs-streams-modal-center" tabindex="-1" role="dialog" aria-labelledby="streamViewLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <table id="datatable-sources" class="table table-striped table-borderless mb-0" style="width:100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th></th>
                            <th>Name</th>
                            <th>Server</th>
                            <th>Clients</th>
                            <th>Uptime</th>
                            <th>Actions</th>
                            <th>Actions</th>
                            <th>Stream Info</th>
                            <th>Stream Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-epg-modal-center" tabindex="-1" role="dialog" aria-labelledby="epgViewLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <table id="datatable-epg" class="table table-striped table-borderless dt-responsive">
                    <thead>
                        <tr>
                            <th class="text-center">Time</th>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td><td></td><td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-live-modal-center" tabindex="-1" role="dialog" aria-labelledby="liveViewLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <table id="datatable-live" class="table table-striped table-borderless mb-0" style="width:100%;">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Quality</th>
                            <th>Line</th>
                            <th>Stream</th>
                            <th>Server</th>
                            <th>Player</th>
                            <th>ISP</th>
                            <th class="text-center">IP</th>
                            <th class="text-center">Duration</th>
                            <th class="text-center">Output</th>
                            <th class="text-center">Restreamer</th>
                            <th class="text-center">' ?0                  	;0
224 127  FETCH_DIM_R/81            $110=     16?0                 152:'actions'       	;0
225 127  ECHO/40                   ?0        $110                 ?0                  	;0
226 128  GOTO/253                  ?0        ?149                 ?153                	;0
227 130  ECHO/40                   ?0        154:'</label>
                        <div class="col-md-3">
                            <input name="reboot_portal" id="reboot_portal" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                        </div>
                    </div>
                </div>
                <div class="col-12" style="margin-top:20px;display:none;" id="play_channel_form">
                    <div class="form-group row mb-4">
                        <label class="col-md-3 col-form-label" for="selected_channel">' ?0                  	;0
228 131  FETCH_DIM_R/81            $111=     16?0                 155:'channel'       	;0
229 131  ECHO/40                   ?0        $111                 ?0                  	;0
230 132  ECHO/40                   ?0        156:'</label>
                        <div class="col-md-9">
                            <select id="selected_channel" name="selected_channel" class="form-control" data-toggle="select2" style="width:100%;"></select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button disabled id="message_submit" type="button" class="btn btn-primary waves-effect">' ?0                  	;0
231 133  FETCH_DIM_R/81            $112=     16?0                 157:'send_event'    	;0
232 133  ECHO/40                   ?0        $112                 ?0                  	;0
233 134  ECHO/40                   ?0        158:'</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-server-modal-center" tabindex="-1" role="dialog" aria-labelledby="restartServicesLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="restartServicesLabel">Server Tools</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-md-3">
                        <input id="reinstall_server" type="submit" class="btn btn-light" value="Reinstall Server" style="width:100%" ' ?0                  	;0
234 135  GOTO/253                  ?0        ?136                 ?159                	;0
235 137  FETCH_DIM_R/81            $113=     16?0                 160:'reset_stb_lock'	;0
236 137  ECHO/40                   ?0        $113                 ?0                  	;0
237 138  ECHO/40                   ?0        161:'</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-12" style="margin-top:20px;display:none;" id="send_msg_form">
                    <div class="form-group row mb-4">
                        <div class="col-md-12">
                            <textarea id="message" name="message" class="form-control" rows="3" placeholder="' ?0                  	;0
238 139  FETCH_DIM_R/81            $114=     16?0                 162:'enter_a_custom_message'	;0
239 139  ECHO/40                   ?0        $114                 ?0                  	;0
240 140  ECHO/40                   ?0        163:'..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-md-9 col-form-label" for="reboot_portal">' ?0                  	;0
241 141  FETCH_DIM_R/81            $115=     16?0                 164:'reboot_on_confirmation'	;0
242 141  ECHO/40                   ?0        $115                 ?0                  	;0
243 142  GOTO/253                  ?0        ?227                 ?165                	;0
244 144  ECHO/40                   ?0        166:'</option>
						</select>
					</div>
					<label class="col-md-1 col-2 col-form-label text-center" for="mod_font_size">' ?0                  	;0
245 145  FETCH_DIM_R/81            $116=     16?0                 167:'size'          	;0
246 145  ECHO/40                   ?0        $116                 ?0                  	;0
247 146  ECHO/40                   ?0        168:'</label>
					<div class="col-md-1 col-2">
						<input type="text" class="form-control text-center" id="mod_font_size" value="36" placeholder="">
					</div>
					<label class="col-md-1 col-2 col-form-label text-center" for="mod_font_color">' ?0                  	;0
248 147  FETCH_DIM_R/81            $117=     16?0                 169:'colour'        	;0
249 147  ECHO/40                   ?0        $117                 ?0                  	;0
250 148  ECHO/40                   ?0        170:'</label>
					<div class="col-md-2 col-2">
						<input type="text" id="mod_font_color" class="form-control text-center" value="#ffffff">
					</div>
					<label class="col-md-1 col-2 col-form-label text-center" for="mod_position_x">' ?0                  	;0
251 149  GOTO/253                  ?0        ?207                 ?171                	;0
252 152  ECHO/40                   ?0        172:' />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-domains" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Domain List</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p class="sub-header">Ensure the following domains are entered in your reCAPTCHA V2 admin console, otherwise your resellers will be unable to login via their domain.</p>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Type / Reseller</th>
                                <th>Domain Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            ' ?0                  	;0
253 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'strlen'        	;1
254 153  FETCH_CONSTANT/99         #118=     ?0                   175:'SERVER_ID'     	;16
255 153  FETCH_DIM_FUNC_ARG/93     $119=     16?3                 #118                	;1
256 153  FETCH_DIM_FUNC_ARG/93     $120=     $119                 178:'server_ip'     	;1
257 153  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
258 153  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
259 153  IS_SMALLER/19             #122=     179:0                $121                	;0
260 153  BOOL_NOT/13               #123=     #122                 ?0                  	;0
261 153  JMPZ/43                   ?0        #123                 ?263                	;0	>>263
262 154  GOTO/253                  ?0        ?25                  ?180                	;0
263 156  ECHO/40                   ?0        181:'                            <tr>
                                <td>Server IP</td>
                                <td>' ?0                  	;0	<<261
264 157  FETCH_CONSTANT/99         #124=     ?0                   182:'SERVER_ID'     	;16
265 157  FETCH_DIM_R/81            $125=     16?3                 #124                	;0
266 157  FETCH_DIM_R/81            $126=     $125                 185:'server_ip'     	;0
267 157  ECHO/40                   ?0        $126                 ?0                  	;0
268 158  GOTO/253                  ?0        ?24                  ?186                	;0
269 160  ECHO/40                   ?0        187:'" style="width:100%" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade addModal" role="dialog" aria-labelledby="addLabel" aria-hidden="true" style="display: none;" data-username="" data-password="">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addModal">' ?0                  	;0
270 161  FETCH_DIM_R/81            $127=     16?0                 188:'select_series' 	;0
271 161  ECHO/40                   ?0        $127                 ?0                  	;0
272 162  ECHO/40                   ?0        189:':</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <select id="add_series_id" class="form-control" data-toggle="select2"></select>
                </div>
                <div class="col-12 add-margin-top-20">
                    <div class="input-group">
                        <div class="input-group-append" style="width:100%">
                            <button style="width:50%" class="btn btn-success waves-effect waves-light" type="button" onClick="addEpisode();"><i class="mdi mdi-plus-circle-outline"></i> ' ?0                  	;0
273 163  FETCH_DIM_R/81            $128=     16?0                 190:'add_episode'   	;0
274 163  ECHO/40                   ?0        $128                 ?0                  	;0
275 164  ECHO/40                   ?0        191:'</button>
                            <button style="width:50%" class="btn btn-info waves-effect waves-light" type="button" onClick="addEpisodes();"><i class="mdi mdi-plus-circle-multiple-outline"></i> ' ?0                  	;0
276 165  GOTO/253                  ?0        ?41                  ?192                	;0
277 167  ECHO/40                   ?0        193:'">
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-failures-modal-center" tabindex="-1" role="dialog" aria-labelledby="failuresLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="failuresLabel"><button onClick=\'clearLogs()\' type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>Clear Stream Logs</button></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table id="datatable-stream" class="table table-striped table-borderless dt-responsive">
                    <thead>
                        <tr>
                            <th>Server Name</th>
                            <th class="text-center">Source</th>
                            <th class="text-center">Action</th>
                            <th class="text-center">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td><td></td><td></td><td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-proxies-modal-center" tabindex="-1" role="dialog" aria-labelledby="proxiesLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <table id="datatable-sources" class="table table-striped table-borderless dt-responsive">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Server Name</th>
                            <th class="text-center">Server IP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td><td></td><td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>' ?0                  	;0
278 168  NOP/0                     ?0        194:1                ?0                  	;4294967295
*/

?>