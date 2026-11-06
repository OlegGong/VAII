<?php

namespace App\Controllers;

use App\Models\Player;
use Exception;
use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class PlayerController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->html([
            'players' => Player::getAll(orderBy: 'surname ASC, name ASC'),
        ]);
    }

    public function form(Request $request): Response
    {
        $player = null;
        if ($request->hasValue('id')) {
            $player = Player::getOne($request->value('id'));
            if ($player === null) {
                throw new Exception('Hráč nebol nájdený.');
            }
        }

        return $this->html(['player' => $player]);
    }

    public function save(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('player.index'));
        }

        $player = null;
        $id = $request->post('id');
        if ($id !== null && $id !== '') {
            $player = Player::getOne($id);
            if ($player === null) {
                throw new Exception('Hráč nebol nájdený.');
            }
        } else {
            $player = new Player();
        }

        $player->setFromRequest($request);
        $player->save();

        return $this->redirect($this->url('player.index'));
    }

    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('player.index'));
        }

        $player = Player::getOne($request->post('id'));
        if ($player === null) {
            throw new Exception('Hráč nebol nájdený.');
        }
        $player->delete();

        return $this->redirect($this->url('player.index'));
    }
}
