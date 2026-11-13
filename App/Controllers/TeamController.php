<?php

namespace App\Controllers;

use App\Models\Player;
use App\Models\Team;
use Exception;
use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class TeamController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->html([
            'teams' => Team::getAll(orderBy: 'name ASC'),
        ]);
    }

    public function detail(Request $request): Response
    {
        $team = Team::getOne($request->value('id'));
        if ($team === null) {
            throw new Exception('Tím nebol nájdený.');
        }

        return $this->html([
            'team' => $team,
            'players' => $team->getAllRelated(Player::class, 'teamId'),
        ]);
    }

    public function form(Request $request): Response
    {
        $team = null;
        if ($request->hasValue('id')) {
            $team = Team::getOne($request->value('id'));
            if ($team === null) {
                throw new Exception('Tím nebol nájdený.');
            }
        }

        return $this->html(['team' => $team]);
    }

    public function save(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('team.index'));
        }

        $id = $request->post('id');
        if ($id !== null && $id !== '') {
            $team = Team::getOne($id);
            if ($team === null) {
                throw new Exception('Tím nebol nájdený.');
            }
        } else {
            $team = new Team();
        }

        $team->setFromRequest($request);
        if ($team->foundedYear === '') {
            $team->foundedYear = null;
        }
        $team->save();

        return $this->redirect($this->url('team.index'));
    }

    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('team.index'));
        }

        $team = Team::getOne($request->post('id'));
        if ($team === null) {
            throw new Exception('Tím nebol nájdený.');
        }
        $team->delete();

        return $this->redirect($this->url('team.index'));
    }
}