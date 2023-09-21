<?php

namespace App\Http\Controllers\Backend;

use App\Models\Lavel1;
use App\Models\Lavel2;
use App\Models\Lavel3;
use App\Models\Lavel4;
use App\Models\Lavel5;
use App\Models\Lavel6;
use App\Models\Lavel7;
use App\Models\Lavel8;
use App\Models\Lavel9;
use App\Models\Wallet;
use App\Models\Lavel10;
use App\Models\Lavel11;
use App\Models\Lavel12;
use App\Models\Lavel13;
use App\Models\Lavel14;
use App\Models\Lavel15;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LevelOneToFifteen;
use Illuminate\Support\Facades\Auth;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($level)
    {
        if (Auth::check()) {
            if ($level == 1) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_1']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_1)) {
                        foreach ($levelOneToFifteen as $item) {
                            $wallet = Wallet::where('user_id', $item->level_1)->first();
                            $wallet->ezzy_royality = 0.25 + $wallet->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 2) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_2']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_2)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_2)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 3) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_3']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_3)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_3)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 4) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_4']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_4)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_4)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 5) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_5']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_5)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_5)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }

            if ($level == 6) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_6']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_6)) {
                        foreach ($levelOneToFifteen as $item) {
                            $wallet = Wallet::where('user_id', $item->level_6)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 7) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_7']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_7)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_7)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }

            if ($level == 8) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_8']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_8)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_8)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 9) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_9']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_9)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_9)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 10) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_10']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_10)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_10)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }

            if ($level == 11) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_11']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_11)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_11)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 12) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_12']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_12)) {
                        foreach ($levelOneToFifteen as $item) {
                            $wallet = Wallet::where('user_id', $item->level_12)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 13) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_13']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_13)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_13)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 14) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_14']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_14)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_14)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }
            if ($level == 15) {
                $levelOneToFifteen = LevelOneToFifteen::get(['id', 'level_15']);
                foreach ($levelOneToFifteen as $data) {
                    if (isset($data->level_13)) {
                       foreach ($levelOneToFifteen as $item)  {
                            $wallet = Wallet::where('user_id', $item->level_15)->first();
                            $wallet->ezzy_royality = 0.25 + $item->ezzy_royality;
                            $wallet->save();
                        }
                    }
                }
            }

            return redirect()->route('admin.dashboard.index')->with('success', 'Successfully created');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
